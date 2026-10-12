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

/* partials/schema.html.twig */
class __TwigTemplate_9d82bad639bc9a53393277056f23a277_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["t"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 2);
        // line 3
        $context["hdr"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3);
        // line 4
        $context["site_url"] = Twig\Extension\CoreExtension::trim($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("/", true), "/", "right");
        // line 5
        $context["org_id"] = (($context["site_url"] ?? null) . "/#organization");
        // line 6
        $context["logo_file"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_logo", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_logo", [], "any", false, false, false, 6))) : (null));
        // line 7
        $context["logo_url"] = (((($tmp = ($context["logo_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["logo_file"] ?? null), "name", [], "any", false, false, false, 7)), true)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/logo.png", true)));
        // line 8
        yield "
";
        // line 9
        $context["same_as"] = [];
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "social", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            if ((($tmp = $context["v"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["same_as"] = Twig\Extension\CoreExtension::merge(($context["same_as"] ?? null), [$context["v"]]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 11
        yield "
";
        // line 12
        $context["org"] = ["@type" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["t"] ?? null), "seo", [], "any", false, false, false, 13), "schema_type", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 13), "schema_type", [], "any", false, false, false, 13)) : ("Physician")), "@id" =>         // line 14
($context["org_id"] ?? null), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["t"] ?? null), "clinic", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "url" => (        // line 16
($context["site_url"] ?? null) . "/"), "logo" =>         // line 17
($context["logo_url"] ?? null), "image" =>         // line 18
($context["logo_url"] ?? null), "telephone" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["t"] ?? null), "clinic", [], "any", false, false, false, 19), "phone_intl", [], "any", false, false, false, 19), "email" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["t"] ?? null), "clinic", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "description" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["t"] ?? null), "seo", [], "any", false, false, false, 21), "default_description", [], "any", false, false, false, 21), "medicalSpecialty" => ["Surgical", "Endocrine", "Gastroenterologic"], "priceRange" => "\$\$", "openingHours" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["t"] ?? null), "clinic", [], "any", false, false, false, 24), "hours_schema", [], "any", false, false, false, 24), "address" => ["@type" => "PostalAddress", "streetAddress" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["t"] ?? null), "clinic", [], "any", false, false, false, 27), "address", [], "any", false, false, false, 27), "addressLocality" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["t"] ?? null), "clinic", [], "any", false, false, false, 28), "locality", [], "any", false, false, false, 28), "addressRegion" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["t"] ?? null), "clinic", [], "any", false, false, false, 29), "region", [], "any", false, false, false, 29), "addressCountry" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["t"] ?? null), "clinic", [], "any", false, false, false, 30), "country", [], "any", false, false, false, 30)]];
        // line 33
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["same_as"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["org"] = Twig\Extension\CoreExtension::merge(($context["org"] ?? null), ["sameAs" => ($context["same_as"] ?? null)]);
        }
        // line 34
        yield "
";
        // line 35
        $context["page_type"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 35), "schema_type", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 35), "schema_type", [], "any", false, false, false, 35) != "auto"))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 35), "schema_type", [], "any", false, false, false, 35)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 35) == "contact")) ? ("ContactPage") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 35) == "team")) ? ("AboutPage") : ("WebPage"))))));
        // line 36
        $context["webpage"] = ["@type" =>         // line 37
($context["page_type"] ?? null), "@id" => (CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["page"] ?? null), "url", [true, true], "method", false, false, false, 38) . "#webpage"), "url" => CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["page"] ?? null), "url", [true, true], "method", false, false, false, 39), "name" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["hdr"] ?? null), "seo", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "seo", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 40))), "isPartOf" => ["@id" => (        // line 41
($context["site_url"] ?? null) . "/#website")], "about" => ["@id" =>         // line 42
($context["org_id"] ?? null)], "inLanguage" => "en", "datePublished" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["page"] ?? null), "date", [], "any", false, false, false, 44), "c"), "dateModified" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["page"] ?? null), "modified", [], "any", false, false, false, 45), "c")];
        // line 47
        yield "
";
        // line 49
        $context["chain"] = [];
        // line 50
        $context["cur"] = ($context["page"] ?? null);
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            yield "    ";
            if (((((($tmp = ($context["cur"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "route", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "route", [], "any", false, false, false, 52) != "/")) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "root", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 53
                yield "        ";
                $context["chain"] = Twig\Extension\CoreExtension::merge([($context["cur"] ?? null)], ($context["chain"] ?? null));
                // line 54
                yield "        ";
                $context["cur"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "parent", [], "any", false, false, false, 54);
                // line 55
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 57
        $context["items"] = [["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => (($context["site_url"] ?? null) . "/")]];
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chain"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 59
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "home", [], "any", false, false, false, 59) == false)) {
                // line 60
                yield "    ";
                $context["items"] = Twig\Extension\CoreExtension::merge(($context["items"] ?? null), [["@type" => "ListItem", "position" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null)) + 1), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 60), "item" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [true, true], "method", false, false, false, 60)]]);
                // line 61
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 63
        yield "
";
        // line 64
        $context["graph"] = [        // line 65
($context["org"] ?? null), ["@type" => "WebSite", "@id" => (        // line 66
($context["site_url"] ?? null) . "/#website"), "url" => (($context["site_url"] ?? null) . "/"), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), "publisher" => ["@id" => ($context["org_id"] ?? null)], "inLanguage" => "en"],         // line 67
($context["webpage"] ?? null)];
        // line 69
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "BreadcrumbList", "itemListElement" => ($context["items"] ?? null)]]);
        }
        // line 70
        yield "
<script type=\"application/ld+json\">";
        // line 71
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ["@context" => "https://schema.org", "@graph" => ($context["graph"] ?? null)], (Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")));
        yield "</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/schema.html.twig";
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
        return array (  175 => 71,  172 => 70,  168 => 69,  166 => 67,  165 => 66,  164 => 65,  163 => 64,  160 => 63,  152 => 61,  149 => 60,  146 => 59,  142 => 58,  140 => 57,  132 => 55,  129 => 54,  126 => 53,  123 => 52,  119 => 51,  117 => 50,  115 => 49,  112 => 47,  110 => 45,  109 => 44,  108 => 42,  107 => 41,  106 => 40,  105 => 39,  104 => 38,  103 => 37,  102 => 36,  100 => 35,  97 => 34,  93 => 33,  91 => 30,  90 => 29,  89 => 28,  88 => 27,  87 => 24,  86 => 21,  85 => 20,  84 => 19,  83 => 18,  82 => 17,  81 => 16,  80 => 15,  79 => 14,  78 => 13,  77 => 12,  74 => 11,  62 => 10,  60 => 9,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# JSON-LD structured data: clinic/physician, website, page and breadcrumbs. #}
{% set t = config.theme %}
{% set hdr = page.header %}
{% set site_url = url(\x27/\x27, true)|trim(\x27/\x27, \x27right\x27) %}
{% set org_id = site_url ~ \x27/#organization\x27 %}
{% set logo_file = t.custom_logo ? (t.custom_logo|first) : null %}
{% set logo_url = logo_file ? url(\x27theme://images/uploads/\x27 ~ logo_file.name, true) : url(\x27theme://images/logo.png\x27, true) %}

{% set same_as = [] %}
{% for k, v in t.social %}{% if v %}{% set same_as = same_as|merge([v]) %}{% endif %}{% endfor %}

{% set org = {
    \x27@type\x27: t.seo.schema_type ?: \x27Physician\x27,
    \x27@id\x27: org_id,
    \x27name\x27: t.clinic.name,
    \x27url\x27: site_url ~ \x27/\x27,
    \x27logo\x27: logo_url,
    \x27image\x27: logo_url,
    \x27telephone\x27: t.clinic.phone_intl,
    \x27email\x27: t.clinic.email,
    \x27description\x27: t.seo.default_description,
    \x27medicalSpecialty\x27: [\x27Surgical\x27, \x27Endocrine\x27, \x27Gastroenterologic\x27],
    \x27priceRange\x27: \x27\$\$\x27,
    \x27openingHours\x27: t.clinic.hours_schema,
    \x27address\x27: {
        \x27@type\x27: \x27PostalAddress\x27,
        \x27streetAddress\x27: t.clinic.address,
        \x27addressLocality\x27: t.clinic.locality,
        \x27addressRegion\x27: t.clinic.region,
        \x27addressCountry\x27: t.clinic.country
    }
} %}
{% if same_as|length %}{% set org = org|merge({\x27sameAs\x27: same_as}) %}{% endif %}

{% set page_type = (hdr.seo.schema_type and hdr.seo.schema_type != \x27auto\x27) ? hdr.seo.schema_type : (page.template == \x27contact\x27 ? \x27ContactPage\x27 : (page.template == \x27team\x27 ? \x27AboutPage\x27 : \x27WebPage\x27)) %}
{% set webpage = {
    \x27@type\x27: page_type,
    \x27@id\x27: page.url(true, true) ~ \x27#webpage\x27,
    \x27url\x27: page.url(true, true),
    \x27name\x27: hdr.seo.title ?: page.title,
    \x27isPartOf\x27: {\x27@id\x27: site_url ~ \x27/#website\x27},
    \x27about\x27: {\x27@id\x27: org_id},
    \x27inLanguage\x27: \x27en\x27,
    \x27datePublished\x27: page.date|date(\x27c\x27),
    \x27dateModified\x27: page.modified|date(\x27c\x27)
} %}

{# Breadcrumbs from the page tree #}
{% set chain = [] %}
{% set cur = page %}
{% for i in 1..6 %}
    {% if cur and cur.route and cur.route != \x27/\x27 and not cur.root %}
        {% set chain = [cur]|merge(chain) %}
        {% set cur = cur.parent %}
    {% endif %}
{% endfor %}
{% set items = [{\x27@type\x27: \x27ListItem\x27, \x27position\x27: 1, \x27name\x27: \x27Home\x27, \x27item\x27: site_url ~ \x27/\x27}] %}
{% for c in chain %}
    {% if c.home == false %}
    {% set items = items|merge([{\x27@type\x27: \x27ListItem\x27, \x27position\x27: items|length + 1, \x27name\x27: c.title, \x27item\x27: c.url(true, true)}]) %}
    {% endif %}
{% endfor %}

{% set graph = [
    org,
    {\x27@type\x27: \x27WebSite\x27, \x27@id\x27: site_url ~ \x27/#website\x27, \x27url\x27: site_url ~ \x27/\x27, \x27name\x27: config.site.title, \x27publisher\x27: {\x27@id\x27: org_id}, \x27inLanguage\x27: \x27en\x27},
    webpage
] %}
{% if not page.home %}{% set graph = graph|merge([{\x27@type\x27: \x27BreadcrumbList\x27, \x27itemListElement\x27: items}]) %}{% endif %}

<script type=\"application/ld+json\">{{ {\x27@context\x27: \x27https://schema.org\x27, \x27@graph\x27: graph}|json_encode(constant(\x27JSON_UNESCAPED_SLASHES\x27) b-or constant(\x27JSON_UNESCAPED_UNICODE\x27))|raw }}</script>
", "partials/schema.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/schema.html.twig");
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
