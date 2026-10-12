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

/* partials/base.html.twig */
class __TwigTemplate_1301ba9b9e0e4e59964c3ade6a6552e5_sourced extends Template
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
            'content' => [$this, 'block_content'],
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
        $context["logo_file"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_logo", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_logo", [], "any", false, false, false, 3))) : (null));
        // line 4
        $context["fav_file"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_favicon", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "custom_favicon", [], "any", false, false, false, 4))) : (null));
        // line 5
        $context["logo_url"] = (((($tmp = ($context["logo_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["logo_file"] ?? null), "name", [], "any", false, false, false, 5)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/logo.png")));
        // line 6
        $context["fav_url"] = (((($tmp = ($context["fav_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["fav_file"] ?? null), "name", [], "any", false, false, false, 6)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png")));
        // line 7
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        yield from $this->load("partials/seo.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "    <link rel=\"icon\" href=\"";
        yield (string) $this->escaper->escape(($context["fav_url"] ?? null), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 14
        yield (string) $this->escaper->escape(($context["fav_url"] ?? null), "html", null, true);
        yield "\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\">

    <style>
        :root {
            --primary: ";
        // line 22
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "brand", [], "any", false, false, false, 22), "primary", [], "any", false, false, false, 22), "html", null, true);
        yield ";
            --navy: ";
        // line 23
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "brand", [], "any", false, false, false, 23), "navy", [], "any", false, false, false, 23), "html", null, true);
        yield ";
            --accent: ";
        // line 24
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "brand", [], "any", false, false, false, 24), "accent", [], "any", false, false, false, 24), "html", null, true);
        yield ";
        }
    </style>
    ";
        // line 27
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/theme.css", 100], "method", false, false, false, 27);
        // line 28
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 28);
        yield "
    <script>document.documentElement.classList.remove(\x27no-js\x27);</script>
</head>
<body class=\"tpl-";
        // line 31
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 31), "html", null, true);
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-home") : (""));
        yield "\">
    <a class=\"skip-link\" href=\"#main\">Skip to main content</a>

    ";
        // line 34
        yield from $this->load("partials/header.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "
    <main id=\"main\">
        ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "    </main>

    ";
        // line 40
        yield from $this->load("partials/footer.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "
    <nav class=\"mobile-bar\" aria-label=\"Quick actions\">
        <a href=\"tel:";
        // line 43
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 43), "phone_intl", [], "any", false, false, false, 43), "html", null, true);
        yield "\" class=\"mb-call\">";
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(43))->call("icon", ["phone", 18], $context, 43, $this->source);
        yield " Call</a>
        <a href=\"";
        // line 44
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "header", [], "any", false, false, false, 44), "cta_link", [], "any", false, false, false, 44)), "html", null, true);
        yield "\" class=\"mb-book\">";
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(44))->call("icon", ["calendar", 18], $context, 44, $this->source);
        yield " Book</a>
    </nav>

    ";
        // line 47
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 47);
        // line 48
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 48);
        yield "
</body>
</html>
";
        return; yield;
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  160 => 37,  150 => 48,  148 => 47,  140 => 44,  134 => 43,  130 => 41,  128 => 40,  124 => 38,  122 => 37,  118 => 35,  116 => 34,  109 => 31,  102 => 28,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  75 => 14,  70 => 13,  68 => 12,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27partials/macros.html.twig\x27 as m %}
{% set t = config.theme %}
{% set logo_file = t.custom_logo ? (t.custom_logo|first) : null %}
{% set fav_file = t.custom_favicon ? (t.custom_favicon|first) : null %}
{% set logo_url = logo_file ? url(\x27theme://images/uploads/\x27 ~ logo_file.name) : url(\x27theme://images/logo.png\x27) %}
{% set fav_url = fav_file ? url(\x27theme://images/uploads/\x27 ~ fav_file.name) : url(\x27theme://images/favicon.png\x27) %}
<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include \x27partials/seo.html.twig\x27 %}
    <link rel=\"icon\" href=\"{{ fav_url }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ fav_url }}\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\">

    <style>
        :root {
            --primary: {{ t.brand.primary }};
            --navy: {{ t.brand.navy }};
            --accent: {{ t.brand.accent }};
        }
    </style>
    {% do assets.addCss(\x27theme://css/theme.css\x27, 100) %}
    {{ assets.css()|raw }}
    <script>document.documentElement.classList.remove(\x27no-js\x27);</script>
</head>
<body class=\"tpl-{{ page.template }}{{ page.home ? \x27 is-home\x27 : \x27\x27 }}\">
    <a class=\"skip-link\" href=\"#main\">Skip to main content</a>

    {% include \x27partials/header.html.twig\x27 %}

    <main id=\"main\">
        {% block content %}{% endblock %}
    </main>

    {% include \x27partials/footer.html.twig\x27 %}

    <nav class=\"mobile-bar\" aria-label=\"Quick actions\">
        <a href=\"tel:{{ t.clinic.phone_intl }}\" class=\"mb-call\">{{ m.icon(\x27phone\x27, 18) }} Call</a>
        <a href=\"{{ url(t.header.cta_link) }}\" class=\"mb-book\">{{ m.icon(\x27calendar\x27, 18) }} Book</a>
    </nav>

    {% do assets.addJs(\x27theme://js/site.js\x27, {group: \x27bottom\x27, loading: \x27defer\x27}) %}
    {{ assets.js(\x27bottom\x27)|raw }}
</body>
</html>
", "partials/base.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/base.html.twig");
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
