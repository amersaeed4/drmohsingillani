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
}
