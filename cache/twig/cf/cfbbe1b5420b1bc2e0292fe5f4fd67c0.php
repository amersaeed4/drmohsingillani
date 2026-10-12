<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/seo.html.twig */
class __TwigTemplate_332f1b88dac9aecf567500db1f6c2431_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["t"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 5);
        // line 6
        $context["hdr"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6);
        // line 7
        $context["is_home"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 7);
        // line 8
        $context["page_title"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8)) : ((((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 8), "home_title", [], "any", false, false, false, 8)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8) . " | ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 8), "title_suffix", [], "any", false, false, false, 8))))));
        // line 9
        yield "
";
        // line 10
        $context["auto_desc"] = $this->env->getFilter('trim_words')->getCallable()((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "lead", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "lead", [], "any", false, false, false, 10)) : ($this->env->getFilter('plain_text')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10)))), 158);
        // line 11
        $context["meta_desc"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11)) : ((((($tmp = ($context["auto_desc"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["auto_desc"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 11), "default_description", [], "any", false, false, false, 11)))));
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 12) == "error")) {
            $context["meta_desc"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 12), "default_description", [], "any", false, false, false, 12);
        }
        // line 13
        yield "
";
        // line 14
        $context["canonical"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 14), "canonical", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 14), "canonical", [], "any", false, false, false, 14)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 14)));
        // line 15
        $context["noindex"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 15), "noindex_site", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 15), "noindex", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 15) == "error"));
        // line 16
        $context["robots"] = (((($tmp = ($context["noindex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("noindex, nofollow") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 16), "robots", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 16), "robots", [], "any", false, false, false, 16)) : ("index, follow, max-image-preview:large, max-snippet:-1"))));
        // line 17
        yield "
";
        // line 19
        $context["img_name"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 19), "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 19), "image", [], "any", false, false, false, 19)) : (null));
        // line 20
        $context["img_obj"] = (((($tmp = ($context["img_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 20)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["img_name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 21
        $context["theme_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 21), "default_image", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 21), "default_image", [], "any", false, false, false, 21))) : (null));
        // line 22
        if ((($tmp = ($context["img_obj"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    ";
            $context["og_image"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, ($context["img_obj"] ?? null), "url", [], "any", false, false, false, 23), true);
        } elseif ((($tmp =         // line 24
($context["theme_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "    ";
            $context["og_image"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["theme_img"] ?? null), "name", [], "any", false, false, false, 25)), true);
        } else {
            // line 27
            yield "    ";
            $context["og_image"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/og-default.jpg", true);
        }
        // line 29
        yield "
<title>";
        // line 30
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html");
        yield "</title>
<meta name=\"description\" content=\"";
        // line 31
        yield (string) $this->escaper->escape(($context["meta_desc"] ?? null));
        yield "\">
";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 32), "keywords", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"keywords\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "metadata", [], "any", false, false, false, 32), "keywords", [], "any", false, false, false, 32));
            yield "\">";
        }
        // line 33
        yield "<meta name=\"robots\" content=\"";
        yield (string) $this->escaper->escape(($context["robots"] ?? null), "html", null, true);
        yield "\">
<meta name=\"author\" content=\"";
        // line 34
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 34), "author", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34));
        yield "\">
<meta name=\"theme-color\" content=\"";
        // line 35
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "brand", [], "any", false, false, false, 35), "navy", [], "any", false, false, false, 35), "html", null, true);
        yield "\">
<link rel=\"canonical\" href=\"";
        // line 36
        yield (string) $this->escaper->escape(($context["canonical"] ?? null), "html", null, true);
        yield "\">

<meta property=\"og:type\" content=\"";
        // line 38
        yield (string) (((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("website") : ("article"));
        yield "\">
<meta property=\"og:site_name\" content=\"";
        // line 39
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39));
        yield "\">
<meta property=\"og:locale\" content=\"en_US\">
<meta property=\"og:title\" content=\"";
        // line 41
        yield (string) $this->escaper->escape(($context["page_title"] ?? null));
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 42
        yield (string) $this->escaper->escape(($context["meta_desc"] ?? null));
        yield "\">
<meta property=\"og:url\" content=\"";
        // line 43
        yield (string) $this->escaper->escape(($context["canonical"] ?? null), "html", null, true);
        yield "\">
<meta property=\"og:image\" content=\"";
        // line 44
        yield (string) $this->escaper->escape(($context["og_image"] ?? null), "html", null, true);
        yield "\">
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"";
        // line 46
        yield (string) $this->escaper->escape(($context["page_title"] ?? null));
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 47
        yield (string) $this->escaper->escape(($context["meta_desc"] ?? null));
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 48
        yield (string) $this->escaper->escape(($context["og_image"] ?? null), "html", null, true);
        yield "\">
";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 49), "twitter", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"twitter:site\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 49), "twitter", [], "any", false, false, false, 49));
            yield "\">";
        }
        // line 50
        if ( !(($tmp = ($context["noindex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("/sitemap.xml", true), "html", null, true);
            yield "\">";
        }
        // line 51
        yield "
";
        // line 52
        yield from $this->load("partials/schema.html.twig", 52)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/seo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 52,  185 => 51,  179 => 50,  173 => 49,  169 => 48,  165 => 47,  161 => 46,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  139 => 39,  135 => 38,  130 => 36,  126 => 35,  122 => 34,  117 => 33,  111 => 32,  107 => 31,  103 => 30,  100 => 29,  96 => 27,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  83 => 21,  81 => 20,  79 => 19,  76 => 17,  74 => 16,  72 => 15,  70 => 14,  67 => 13,  63 => 12,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  SEO head tags. Every value can be overridden per page in Admin → page → \"SEO\" tab.
  Site-wide defaults live in Admin → Themes → Dr Mohsin Gillani → Default SEO.
#}
{% set t = config.theme %}
{% set hdr = page.header %}
{% set is_home = page.home %}
{% set page_title = hdr.seo.title ?: (is_home ? t.seo.home_title : (page.title ~ \x27 | \x27 ~ t.seo.title_suffix)) %}

{% set auto_desc = (hdr.lead ?: (page.content|plain_text))|trim_words(158) %}
{% set meta_desc = hdr.metadata.description ?: (auto_desc ?: t.seo.default_description) %}
{% if page.template == \x27error\x27 %}{% set meta_desc = t.seo.default_description %}{% endif %}

{% set canonical = hdr.seo.canonical ?: page.url(true, true) %}
{% set noindex = t.seo.noindex_site or hdr.seo.noindex or page.template == \x27error\x27 %}
{% set robots = noindex ? \x27noindex, nofollow\x27 : (hdr.metadata.robots ?: \x27index, follow, max-image-preview:large, max-snippet:-1\x27) %}

{# Share image: the page\x27s own SEO image, otherwise the site-wide default #}
{% set img_name = hdr.seo.image ?: null %}
{% set img_obj = img_name ? page.media[img_name] : null %}
{% set theme_img = t.seo.default_image ? (t.seo.default_image|first) : null %}
{% if img_obj %}
    {% set og_image = url(img_obj.url, true) %}
{% elseif theme_img %}
    {% set og_image = url(\x27theme://images/uploads/\x27 ~ theme_img.name, true) %}
{% else %}
    {% set og_image = url(\x27theme://images/og-default.jpg\x27, true) %}
{% endif %}

<title>{{ page_title|e(\x27html\x27) }}</title>
<meta name=\"description\" content=\"{{ meta_desc|e }}\">
{% if hdr.metadata.keywords %}<meta name=\"keywords\" content=\"{{ hdr.metadata.keywords|e }}\">{% endif %}
<meta name=\"robots\" content=\"{{ robots }}\">
<meta name=\"author\" content=\"{{ config.site.author.name|e }}\">
<meta name=\"theme-color\" content=\"{{ t.brand.navy }}\">
<link rel=\"canonical\" href=\"{{ canonical }}\">

<meta property=\"og:type\" content=\"{{ is_home ? \x27website\x27 : \x27article\x27 }}\">
<meta property=\"og:site_name\" content=\"{{ config.site.title|e }}\">
<meta property=\"og:locale\" content=\"en_US\">
<meta property=\"og:title\" content=\"{{ page_title|e }}\">
<meta property=\"og:description\" content=\"{{ meta_desc|e }}\">
<meta property=\"og:url\" content=\"{{ canonical }}\">
<meta property=\"og:image\" content=\"{{ og_image }}\">
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"{{ page_title|e }}\">
<meta name=\"twitter:description\" content=\"{{ meta_desc|e }}\">
<meta name=\"twitter:image\" content=\"{{ og_image }}\">
{% if t.seo.twitter %}<meta name=\"twitter:site\" content=\"{{ t.seo.twitter|e }}\">{% endif %}
{% if not noindex %}<link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"{{ url(\x27/sitemap.xml\x27, true) }}\">{% endif %}

{% include \x27partials/schema.html.twig\x27 %}
", "partials/seo.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/seo.html.twig");
    }
    
    public function ensureSecurityCheckedOrHandOver(): ?\Twig\Template
    {
        if (!$this->sandbox->isSandboxed()) {
            return null;
        }

        return $this->loadSecurityCheckedTemplate() ?? throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed()) {
            throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
        }
    }
}
