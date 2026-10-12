<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Drmohsin extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
        ];
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig']->twig;

        // Splits rendered page content into sections at each h2/h3. A section that contains a standalone
        // picture (a paragraph holding exactly one image) gets a two-column layout: text left, picture right.
        $twig->addFilter(new \Twig\TwigFilter('layout_sections', [$this, 'layoutSections'], ['is_safe' => ['html']]));

        // Cache-busting: asset_version('css/theme.css') returns the file's modified time, so browsers
        // download a fresh copy whenever the file changes.
        $twig->addFunction(new \Twig\TwigFunction('asset_version', function (string $file) {
            $path = __DIR__ . '/' . ltrim($file, '/');
            return is_file($path) ? (string) filemtime($path) : '1';
        }));

        // Site search: site_search('query') returns ranked results with highlighted snippets.
        $twig->addFunction(new \Twig\TwigFunction('site_search', [$this, 'search']));

        // Strips tags and collapses whitespace so rendered HTML can be turned into a meta description.
        $twig->addFilter(new \Twig\TwigFilter('plain_text', function ($html) {
            $text = html_entity_decode(strip_tags((string) $html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            return trim(preg_replace('/\s+/u', ' ', $text));
        }));

        // Cuts text at a word boundary and adds an ellipsis when it was shortened.
        $twig->addFilter(new \Twig\TwigFilter('trim_words', function ($text, int $limit = 160) {
            $text = trim((string) $text);
            if (mb_strlen($text) <= $limit) {
                return $text;
            }
            $cut = mb_substr($text, 0, $limit);
            $space = mb_strrpos($cut, ' ');
            if ($space !== false && $space > $limit * 0.6) {
                $cut = mb_substr($cut, 0, $space);
            }
            return rtrim($cut, " ,;:.-") . '…';
        }));
    }

    /**
     * Full-text search across every published, routable page (title, menu label, intro,
     * meta description, body text and the text fields of the page header).
     * Every word typed must be present. Hyphens and case are ignored ("type 2" finds "Type-2").
     *
     * @return array<int, array{title:string,title_html:string,url:string,snippet:string,section:string,score:int}>
     */
    public function search($query, int $limit = 40): array
    {
        $norm = static fn(string $s): string => preg_replace('/[\-\x{2013}\x{2014}_]/u', ' ', mb_strtolower($s));
        $query = trim(preg_replace('/\s+/u', ' ', strip_tags((string) $query)));
        $terms = array_values(array_unique(array_filter(
            explode(' ', $norm($query)),
            static fn($t) => mb_strlen($t) >= 2
        )));
        if (!$terms) {
            return [];
        }
        $phrase = implode(' ', $terms);

        $skipKeys = ['routes', 'form', 'media_order', 'seo', 'sitemap', 'metadata', 'process', 'cache_enabled', 'visible', 'published'];
        $collect = function ($value, array &$bucket, $key = '') use (&$collect, $skipKeys) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    if (is_string($k) && in_array($k, $skipKeys, true)) {
                        continue;
                    }
                    $collect($v, $bucket, $k);
                }
            } elseif (is_string($value)) {
                $v = trim($value);
                if (mb_strlen($v) > 2 && $v[0] !== '/' && !preg_match('/\.(jpe?g|png|webp|svg|gif)$/i', $v) && !preg_match('#^https?://#', $v)) {
                    $bucket[] = $v;
                }
            }
        };

        $results = [];
        foreach ($this->grav['pages']->instances() as $page) {
            if (!$page->published() || !$page->routable() || $page->root()) {
                continue;
            }
            if (in_array($page->template(), ['sitemap', 'error', 'search'], true)) {
                continue;
            }
            $header = json_decode(json_encode($page->header()), true) ?: [];
            if (!empty($header['seo']['noindex'])) {
                continue;
            }

            $title = (string) $page->title();
            $menu = (string) $page->menu();
            $lead = (string) ($header['lead'] ?? '');
            $desc = (string) ($header['metadata']['description'] ?? '');
            $body = html_entity_decode(strip_tags(str_replace(['</p>', '</li>', '</h2>', '</h3>', '<br>'], ' ', (string) $page->content())), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $body = trim(preg_replace('/\s+/u', ' ', $body));
            $bits = [];
            $collect($header, $bits);
            $extra = trim(preg_replace('/\s+/u', ' ', implode(' . ', array_unique($bits))));

            $haystack = $norm($title . ' ' . $menu . ' ' . $lead . ' ' . $desc . ' ' . $body . ' ' . $extra);
            $all = true;
            foreach ($terms as $t) {
                if (mb_strpos($haystack, $t) === false) {
                    $all = false;
                    break;
                }
            }
            if (!$all) {
                continue;
            }

            // Ranking: title matches matter most, then intro/description, then body occurrences
            $score = 0;
            $nTitle = $norm($title . ' ' . $menu);
            if (mb_strpos($nTitle, $phrase) !== false) {
                $score += 100;
            }
            foreach ($terms as $t) {
                if (mb_strpos($nTitle, $t) !== false) {
                    $score += 30;
                }
                if (mb_strpos($norm($lead . ' ' . $desc), $t) !== false) {
                    $score += 10;
                }
                $score += min(10, mb_substr_count($norm($body . ' ' . $extra), $t)) * 2;
            }
            if ($page->home()) {
                $score -= 5;
            }

            // Snippet from the first source that contains a term
            $source = '';
            foreach ([$lead, $body, $extra, $desc] as $candidate) {
                if ($candidate === '') {
                    continue;
                }
                $n = $norm($candidate);
                foreach ($terms as $t) {
                    if (mb_strpos($n, $t) !== false) {
                        $source = $candidate;
                        break 2;
                    }
                }
            }
            if ($source === '') {
                $source = $desc ?: $lead ?: $body;
            }
            $snippet = $this->snippet($source, $terms, $norm);

            // "Obesity › Obesity Treatment" style section label
            $crumbs = [];
            $parent = $page->parent();
            while ($parent && !$parent->root() && !$parent->home()) {
                array_unshift($crumbs, (string) $parent->title());
                $parent = $parent->parent();
            }

            $results[] = [
                'title' => $title,
                'title_html' => $this->highlight($title, $terms),
                'url' => $page->url(),
                'snippet' => $snippet,
                'section' => implode(' › ', $crumbs),
                'score' => $score,
            ];
        }

        usort($results, static fn($a, $b) => $b['score'] <=> $a['score'] ?: strcmp($a['title'], $b['title']));
        return array_slice($results, 0, $limit);
    }

    private function snippet(string $text, array $terms, callable $norm, int $radius = 120): string
    {
        $n = $norm($text);
        $pos = null;
        foreach ($terms as $t) {
            $p = mb_strpos($n, $t);
            if ($p !== false && ($pos === null || $p < $pos)) {
                $pos = $p;
            }
        }
        $pos = $pos ?? 0;
        $start = max(0, $pos - $radius);
        $slice = mb_substr($text, $start, $radius * 2 + 40);
        if ($start > 0) {
            $space = mb_strpos($slice, ' ');
            if ($space !== false && $space < 25) {
                $slice = mb_substr($slice, $space + 1);
            }
            $slice = '… ' . $slice;
        }
        if ($start + $radius * 2 + 40 < mb_strlen($text)) {
            $slice = rtrim($slice, " ,;:.-") . ' …';
        }
        return $this->highlight($slice, $terms);
    }

    /** HTML-escapes text and wraps every search term in <mark>. */
    private function highlight(string $text, array $terms): string
    {
        $safe = htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $parts = array_map(static fn($t) => preg_quote(htmlspecialchars($t, ENT_QUOTES, 'UTF-8'), '/'), $terms);
        usort($parts, static fn($a, $b) => strlen($b) <=> strlen($a));
        return preg_replace('/(' . implode('|', $parts) . ')/iu', '<mark>$1</mark>', $safe) ?? $safe;
    }

    public function layoutSections($html): string
    {
        $html = (string) $html;
        if (trim($html) === '' || stripos($html, '<img') === false) {
            return $html;
        }
        $prev = libxml_use_internal_errors(true);
        $doc = new \DOMDocument('1.0', 'UTF-8');
        $doc->loadHTML('<?xml encoding="UTF-8"><div id="lsroot">' . $html . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);
        $root = $doc->getElementById('lsroot');
        if (!$root) {
            return $html;
        }

        // 1) group top-level nodes into sections
        $sections = [];
        $current = [];
        foreach (iterator_to_array($root->childNodes) as $node) {
            $isHeading = $node instanceof \DOMElement && in_array(strtolower($node->tagName), ['h2', 'h3'], true);
            if ($isHeading && $current) {
                $sections[] = $current;
                $current = [];
            }
            $current[] = $node;
        }
        if ($current) {
            $sections[] = $current;
        }

        // 2) rebuild, moving the first standalone picture of a section into an aside column
        $out = new \DOMDocument('1.0', 'UTF-8');
        $wrap = $out->createElement('div');
        $out->appendChild($wrap);
        $any = false;
        foreach ($sections as $nodes) {
            $aside = null;
            foreach ($nodes as $node) {
                if ($node instanceof \DOMElement && strtolower($node->tagName) === 'p') {
                    $imgs = $node->getElementsByTagName('img');
                    $text = trim($node->textContent);
                    if ($imgs->length === 1 && $text === '') {
                        $aside = $node;
                        break;
                    }
                }
            }
            if ($aside) {
                $any = true;
                $sec = $out->createElement('div');
                $sec->setAttribute('class', 'prose-sec has-aside');
                $txt = $out->createElement('div');
                $txt->setAttribute('class', 'ps-text');
                $fig = $out->createElement('figure');
                $fig->setAttribute('class', 'ps-aside');
                foreach ($nodes as $node) {
                    if ($node === $aside) {
                        $fig->appendChild($out->importNode($aside->getElementsByTagName('img')->item(0), true));
                    } else {
                        $txt->appendChild($out->importNode($node, true));
                    }
                }
                $sec->appendChild($txt);
                $sec->appendChild($fig);
                $wrap->appendChild($sec);
            } else {
                foreach ($nodes as $node) {
                    $wrap->appendChild($out->importNode($node, true));
                }
            }
        }
        if (!$any) {
            return $html;
        }
        $result = '';
        foreach ($wrap->childNodes as $child) {
            $result .= $out->saveHTML($child);
        }
        return '<!--has-asides-->' . $result;
    }
}
