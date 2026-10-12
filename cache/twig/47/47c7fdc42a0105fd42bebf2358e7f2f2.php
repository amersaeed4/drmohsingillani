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

/* partials/page-hero.html.twig */
class __TwigTemplate_338a05041499df8d6345f352372296d2_sourced extends Template
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
        // line 2
        $context["hdr"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2);
        // line 3
        yield "<section class=\"page-hero\">
    <div class=\"container ph-inner\">
        <div class=\"ph-text\">
            ";
        // line 6
        yield from $this->load("partials/breadcrumbs.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "            <h1>";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "title_display", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "title_display", [], "any", false, false, false, 7), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true)));
        yield "</h1>
            ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "lead", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"lead\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "lead", [], "any", false, false, false, 8), "html", null, true);
            yield "</p>";
        }
        // line 9
        yield "        </div>
        ";
        // line 10
        $context["hero"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "hero_image", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 10)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "hero_image", [], "any", false, false, false, 10)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 11
        yield "        ";
        if ((($tmp = ($context["hero"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <div class=\"ph-media\">
            <img src=\"";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\" alt=\"";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "hero_alt", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hdr"] ?? null), "hero_alt", [], "any", false, false, false, 13), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true)));
            yield "\" width=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "width", [], "any", false, false, false, 13), "html", null, true);
            yield "\" height=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "height", [], "any", false, false, false, 13), "html", null, true);
            yield "\" fetchpriority=\"high\">
        </div>
        ";
        }
        // line 16
        yield "    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-hero.html.twig";
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
        return array (  91 => 16,  79 => 13,  76 => 12,  73 => 11,  71 => 10,  68 => 9,  62 => 8,  57 => 7,  55 => 6,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Page banner: breadcrumb, title and optional lead paragraph. #}
{% set hdr = page.header %}
<section class=\"page-hero\">
    <div class=\"container ph-inner\">
        <div class=\"ph-text\">
            {% include \x27partials/breadcrumbs.html.twig\x27 %}
            <h1>{{ hdr.title_display ?: page.title }}</h1>
            {% if hdr.lead %}<p class=\"lead\">{{ hdr.lead }}</p>{% endif %}
        </div>
        {% set hero = hdr.hero_image ? page.media[hdr.hero_image] : null %}
        {% if hero %}
        <div class=\"ph-media\">
            <img src=\"{{ hero.url }}\" alt=\"{{ hdr.hero_alt ?: page.title }}\" width=\"{{ hero.width }}\" height=\"{{ hero.height }}\" fetchpriority=\"high\">
        </div>
        {% endif %}
    </div>
</section>
", "partials/page-hero.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/page-hero.html.twig");
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
