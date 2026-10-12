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

/* partials/header.html.twig */
class __TwigTemplate_57c1280b90d76dc3270b133fdc27da7a_sourced extends Template
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
        // line 1
        $macros["m"] = $this->macros["m"] = $this->load("partials/macros.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["t"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 2);
        // line 3
        yield "<header class=\"site-header\" id=\"site-header\">
    <div class=\"container header-inner\">
        <a class=\"brand\" href=\"";
        // line 5
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5));
        yield " – home\">
            <img src=\"";
        // line 6
        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "site", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6));
        yield "\" width=\"359\" height=\"71\">
        </a>

        <nav class=\"primary-nav\" aria-label=\"Primary\">
            ";
        // line 10
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(10))->call("nav", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 10), "visible", [], "any", false, false, false, 10)], $context, 10, $this->source);
        yield "
        </nav>

        <div class=\"header-actions\">
            <a class=\"header-phone\" href=\"tel:";
        // line 14
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 14), "phone_intl", [], "any", false, false, false, 14), "html", null, true);
        yield "\">
                <span class=\"hp-icon\">";
        // line 15
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["phone", 18], $context, 15, $this->source);
        yield "</span>
                <span class=\"hp-text\"><small>Call us</small><strong>";
        // line 16
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 16), "phone", [], "any", false, false, false, 16), "html", null, true);
        yield "</strong></span>
            </a>
            <a class=\"btn btn-primary header-cta\" href=\"";
        // line 18
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "header", [], "any", false, false, false, 18), "cta_link", [], "any", false, false, false, 18)), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "header", [], "any", false, false, false, 18), "cta_label", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
            <button type=\"button\" class=\"nav-toggle\" id=\"nav-toggle\" aria-expanded=\"false\" aria-controls=\"mobile-menu\" aria-label=\"Open menu\">
                <span class=\"nt-open\">";
        // line 20
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(20))->call("icon", ["menu", 26], $context, 20, $this->source);
        yield "</span>
                <span class=\"nt-close\">";
        // line 21
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["close", 26], $context, 21, $this->source);
        yield "</span>
            </button>
        </div>
    </div>

    <div class=\"mobile-menu\" id=\"mobile-menu\" hidden>
        <div class=\"container\">
            <nav aria-label=\"Mobile\">
                ";
        // line 29
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(29))->call("mobile_nav", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 29), "visible", [], "any", false, false, false, 29)], $context, 29, $this->source);
        yield "
            </nav>
            <div class=\"mm-actions\">
                <a class=\"btn btn-primary btn-block\" href=\"";
        // line 32
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "header", [], "any", false, false, false, 32), "cta_link", [], "any", false, false, false, 32)), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "header", [], "any", false, false, false, 32), "cta_label", [], "any", false, false, false, 32), "html", null, true);
        yield "</a>
                <a class=\"btn btn-outline btn-block\" href=\"tel:";
        // line 33
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 33), "phone_intl", [], "any", false, false, false, 33), "html", null, true);
        yield "\">";
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(33))->call("icon", ["phone", 18], $context, 33, $this->source);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 33), "phone", [], "any", false, false, false, 33), "html", null, true);
        yield "</a>
            </div>
        </div>
    </div>
</header>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  125 => 33,  119 => 32,  113 => 29,  102 => 21,  98 => 20,  91 => 18,  86 => 16,  82 => 15,  78 => 14,  71 => 10,  62 => 6,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27partials/macros.html.twig\x27 as m %}
{% set t = config.theme %}
<header class=\"site-header\" id=\"site-header\">
    <div class=\"container header-inner\">
        <a class=\"brand\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\" aria-label=\"{{ config.site.title|e }} – home\">
            <img src=\"{{ logo_url }}\" alt=\"{{ config.site.title|e }}\" width=\"359\" height=\"71\">
        </a>

        <nav class=\"primary-nav\" aria-label=\"Primary\">
            {{ m.nav(pages.children.visible) }}
        </nav>

        <div class=\"header-actions\">
            <a class=\"header-phone\" href=\"tel:{{ t.clinic.phone_intl }}\">
                <span class=\"hp-icon\">{{ m.icon(\x27phone\x27, 18) }}</span>
                <span class=\"hp-text\"><small>Call us</small><strong>{{ t.clinic.phone }}</strong></span>
            </a>
            <a class=\"btn btn-primary header-cta\" href=\"{{ url(t.header.cta_link) }}\">{{ t.header.cta_label }}</a>
            <button type=\"button\" class=\"nav-toggle\" id=\"nav-toggle\" aria-expanded=\"false\" aria-controls=\"mobile-menu\" aria-label=\"Open menu\">
                <span class=\"nt-open\">{{ m.icon(\x27menu\x27, 26) }}</span>
                <span class=\"nt-close\">{{ m.icon(\x27close\x27, 26) }}</span>
            </button>
        </div>
    </div>

    <div class=\"mobile-menu\" id=\"mobile-menu\" hidden>
        <div class=\"container\">
            <nav aria-label=\"Mobile\">
                {{ m.mobile_nav(pages.children.visible) }}
            </nav>
            <div class=\"mm-actions\">
                <a class=\"btn btn-primary btn-block\" href=\"{{ url(t.header.cta_link) }}\">{{ t.header.cta_label }}</a>
                <a class=\"btn btn-outline btn-block\" href=\"tel:{{ t.clinic.phone_intl }}\">{{ m.icon(\x27phone\x27, 18) }} {{ t.clinic.phone }}</a>
            </div>
        </div>
    </div>
</header>
", "partials/header.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/header.html.twig");
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
