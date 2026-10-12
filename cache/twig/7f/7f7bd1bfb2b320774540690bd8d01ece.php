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

/* contact.html.twig */
class __TwigTemplate_b194aa064b7602d3528342354dbf4120_sourced extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["m"] = $this->macros["m"] = $this->load("partials/macros.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["t"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 4);
        // line 5
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "<section class=\"content-section\">
    <div class=\"container contact-layout\">
        <div class=\"contact-info\">
            <h2>";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
            <ul class=\"contact-list\">
                <li>";
        // line 11
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(11))->call("icon", ["pin", 22], $context, 11, $this->source);
        yield "<div><strong>Visit</strong><span>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 11), "address", [], "any", false, false, false, 11), "html", null, true);
        yield "</span>";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 11), "map_url", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 11), "map_url", [], "any", false, false, false, 11), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">Get directions</a>";
        }
        yield "</div></li>
                <li>";
        // line 12
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(12))->call("icon", ["phone", 22], $context, 12, $this->source);
        yield "<div><strong>Call us</strong><a href=\"tel:";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 12), "phone_intl", [], "any", false, false, false, 12), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 12), "phone", [], "any", false, false, false, 12), "html", null, true);
        yield "</a></div></li>
                <li>";
        // line 13
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["mail", 22], $context, 13, $this->source);
        yield "<div><strong>Or write</strong><a href=\"mailto:";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 13), "email", [], "any", false, false, false, 13), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 13), "email", [], "any", false, false, false, 13), "html", null, true);
        yield "</a></div></li>
                <li>";
        // line 14
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(14))->call("icon", ["clock", 22], $context, 14, $this->source);
        yield "<div><strong>Opening hours</strong><span>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 14), "hours", [], "any", false, false, false, 14), "html", null, true);
        yield "</span></div></li>
            </ul>
            ";
        // line 16
        if ((($tmp = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"prose\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 16);
            yield "</div>";
        }
        // line 17
        yield "        </div>

        <div class=\"contact-form\" id=\"appointment\">
            <h2>";
        // line 20
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "form_title", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "form_title", [], "any", false, false, false, 20), "html", null, true)) : ("Get in touch"));
        yield "</h2>
            ";
        // line 21
        yield from $this->load("forms/form.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "        </div>
    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact.html.twig";
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
        return array (  133 => 22,  131 => 21,  127 => 20,  122 => 17,  116 => 16,  109 => 14,  101 => 13,  93 => 12,  81 => 11,  76 => 9,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27partials/macros.html.twig\x27 as m %}
{% block content %}
{% set t = config.theme %}
{% include \x27partials/page-hero.html.twig\x27 %}
<section class=\"content-section\">
    <div class=\"container contact-layout\">
        <div class=\"contact-info\">
            <h2>{{ t.clinic.name }}</h2>
            <ul class=\"contact-list\">
                <li>{{ m.icon(\x27pin\x27, 22) }}<div><strong>Visit</strong><span>{{ t.clinic.address }}</span>{% if t.clinic.map_url %}<a href=\"{{ t.clinic.map_url }}\" target=\"_blank\" rel=\"noopener noreferrer\">Get directions</a>{% endif %}</div></li>
                <li>{{ m.icon(\x27phone\x27, 22) }}<div><strong>Call us</strong><a href=\"tel:{{ t.clinic.phone_intl }}\">{{ t.clinic.phone }}</a></div></li>
                <li>{{ m.icon(\x27mail\x27, 22) }}<div><strong>Or write</strong><a href=\"mailto:{{ t.clinic.email }}\">{{ t.clinic.email }}</a></div></li>
                <li>{{ m.icon(\x27clock\x27, 22) }}<div><strong>Opening hours</strong><span>{{ t.clinic.hours }}</span></div></li>
            </ul>
            {% if page.content|trim %}<div class=\"prose\">{{ page.content|raw }}</div>{% endif %}
        </div>

        <div class=\"contact-form\" id=\"appointment\">
            <h2>{{ page.header.form_title ?: \x27Get in touch\x27 }}</h2>
            {% include \x27forms/form.html.twig\x27 %}
        </div>
    </div>
</section>
{% endblock %}
", "contact.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/contact.html.twig");
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
