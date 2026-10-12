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

/* partials/macros.html.twig */
class __TwigTemplate_a5e920f6cf02c4a8333e403ceec6595d_sourced extends Template
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
        // line 25
        yield "
";
        // line 43
        yield "
";
        // line 63
        yield "
";
        // line 66
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "icon" => new \Twig\TwigMacro("icon", function ($name = null, $size = null, ...$varargs): string|Markup {
                // line 2
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "size" => $size,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 3
                    $context["s"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), 20)) : (20));
                    // line 4
                    yield "<svg class=\"icon icon-";
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" width=\"";
                    yield (string) $this->escaper->escape(($context["s"] ?? null), "html", null, true);
                    yield "\" height=\"";
                    yield (string) $this->escaper->escape(($context["s"] ?? null), "html", null, true);
                    yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\">";
                    // line 5
                    if ((($context["name"] ?? null) == "phone")) {
                        yield "<path d=\"M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z\"/>";
                    } elseif ((                    // line 6
($context["name"] ?? null) == "mail")) {
                        yield "<rect x=\"2\" y=\"4\" width=\"20\" height=\"16\" rx=\"2\"/><path d=\"m22 7-10 6L2 7\"/>";
                    } elseif ((                    // line 7
($context["name"] ?? null) == "pin")) {
                        yield "<path d=\"M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>";
                    } elseif ((                    // line 8
($context["name"] ?? null) == "clock")) {
                        yield "<circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 6v6l4 2\"/>";
                    } elseif ((                    // line 9
($context["name"] ?? null) == "chevron")) {
                        yield "<path d=\"m6 9 6 6 6-6\"/>";
                    } elseif ((                    // line 10
($context["name"] ?? null) == "arrow")) {
                        yield "<path d=\"M5 12h14M13 6l6 6-6 6\"/>";
                    } elseif ((                    // line 11
($context["name"] ?? null) == "menu")) {
                        yield "<path d=\"M4 7h16M4 12h16M4 17h16\"/>";
                    } elseif ((                    // line 12
($context["name"] ?? null) == "close")) {
                        yield "<path d=\"M6 6l12 12M18 6 6 18\"/>";
                    } elseif ((                    // line 13
($context["name"] ?? null) == "check")) {
                        yield "<path d=\"m20 6-11 11-5-5\"/>";
                    } elseif ((                    // line 14
($context["name"] ?? null) == "calendar")) {
                        yield "<rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><path d=\"M16 2v4M8 2v4M3 10h18\"/>";
                    } elseif ((                    // line 15
($context["name"] ?? null) == "facebook")) {
                        yield "<path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/>";
                    } elseif ((                    // line 16
($context["name"] ?? null) == "instagram")) {
                        yield "<rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"4\"/><circle cx=\"17.5\" cy=\"6.5\" r=\".6\" fill=\"currentColor\"/>";
                    } elseif ((                    // line 17
($context["name"] ?? null) == "youtube")) {
                        yield "<path d=\"M22.5 7.2a2.5 2.5 0 0 0-1.8-1.8C19.1 5 12 5 12 5s-7.1 0-8.7.4A2.5 2.5 0 0 0 1.5 7.2 26 26 0 0 0 1.1 12c0 1.6.1 3.2.4 4.8a2.5 2.5 0 0 0 1.8 1.8C4.9 19 12 19 12 19s7.1 0 8.7-.4a2.5 2.5 0 0 0 1.8-1.8c.3-1.6.4-3.2.4-4.8 0-1.6-.1-3.2-.4-4.8z\"/><path d=\"m10 15 5-3-5-3z\"/>";
                    } elseif ((                    // line 18
($context["name"] ?? null) == "linkedin")) {
                        yield "<path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z\"/><circle cx=\"4\" cy=\"4\" r=\"2\"/>";
                    } elseif ((                    // line 19
($context["name"] ?? null) == "pinterest")) {
                        yield "<circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M10.5 20.5 13 11M9 14c-1-3 .5-6 3.5-6 2.5 0 3.5 2 3 4s-2 3.5-3.5 3.5c-1 0-1.7-.6-2-1.5\"/>";
                    } elseif ((                    // line 20
($context["name"] ?? null) == "x")) {
                        yield "<path d=\"M4 4l16 16M20 4 4 20\"/>";
                    } elseif ((                    // line 21
($context["name"] ?? null) == "cross")) {
                        yield "<path d=\"M9 3h6v6h6v6h-6v6H9v-6H3V9h6z\"/>";
                    }
                    // line 23
                    yield "</svg>";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "size" => false], false),
            "nav" => new \Twig\TwigMacro("nav", function ($items = null, $depth = null, ...$varargs): string|Markup {
                // line 27
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "depth" => $depth,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 28
                    $macros["m"] = $this->getMacroNamespace();
                    // line 29
                    $context["depth"] = ((array_key_exists("depth", $context)) ? (Twig\Extension\CoreExtension::default(($context["depth"] ?? null), 0)) : (0));
                    // line 30
                    yield "<ul class=\"";
                    yield (string) (((($context["depth"] ?? null) == 0)) ? ("nav-list") : ($this->escaper->escape(("sub-menu sub-" . ($context["depth"] ?? null)), "html", null, true)));
                    yield "\"";
                    if ((($context["depth"] ?? null) > 0)) {
                        yield " role=\"menu\"";
                    }
                    yield ">
";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 32
                        yield "    ";
                        $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 32), "visible", [], "any", false, false, false, 32);
                        // line 33
                        yield "    <li class=\"nav-item";
                        yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-children") : (""));
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active-parent") : (""));
                        yield "\">
        <a href=\"";
                        // line 34
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 34), "html", null, true);
                        yield "\"";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " aria-current=\"page\"";
                        }
                        yield ">
            <span>";
                        // line 35
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 35), "html", null, true);
                        yield "</span>
            ";
                        // line 36
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(36))->call("icon", ["chevron", 14], $context, 36, $this->source);
                        }
                        // line 37
                        yield "        </a>
        ";
                        // line 38
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(38))->call("nav", [($context["kids"] ?? null), (($context["depth"] ?? null) + 1)], $context, 38, $this->source);
                        }
                        // line 39
                        yield "    </li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 41
                    yield "</ul>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "depth" => false], false),
            "mobile_nav" => new \Twig\TwigMacro("mobile_nav", function ($items = null, $depth = null, ...$varargs): string|Markup {
                // line 45
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "depth" => $depth,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 46
                    $macros["m"] = $this->getMacroNamespace();
                    // line 47
                    $context["depth"] = ((array_key_exists("depth", $context)) ? (Twig\Extension\CoreExtension::default(($context["depth"] ?? null), 0)) : (0));
                    // line 48
                    yield "<ul class=\"m-list m-depth-";
                    yield (string) $this->escaper->escape(($context["depth"] ?? null), "html", null, true);
                    yield "\">
";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 50
                        yield "    ";
                        $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 50), "visible", [], "any", false, false, false, 50);
                        // line 51
                        yield "    <li class=\"m-item";
                        yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-children") : (""));
                        yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" open") : (""));
                        yield "\">
        <div class=\"m-row\">
            <a href=\"";
                        // line 53
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 53), "html", null, true);
                        yield "\"";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " aria-current=\"page\"";
                        }
                        yield ">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 53), "html", null, true);
                        yield "</a>
            ";
                        // line 54
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 55
                            yield "            <button type=\"button\" class=\"m-toggle\" aria-expanded=\"";
                            yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("true") : ("false"));
                            yield "\" aria-label=\"Toggle ";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 55));
                            yield " submenu\">";
                            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(55))->call("icon", ["chevron", 18], $context, 55, $this->source);
                            yield "</button>
            ";
                        }
                        // line 57
                        yield "        </div>
        ";
                        // line 58
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(58))->call("mobile_nav", [($context["kids"] ?? null), (($context["depth"] ?? null) + 1)], $context, 58, $this->source);
                        }
                        // line 59
                        yield "    </li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 61
                    yield "</ul>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "depth" => false], false),
            "abs" => new \Twig\TwigMacro("abs", function ($path = null, ...$varargs): string|Markup {
                // line 65
                $macros = $this->macros;
                $context = [
                    "path" => $path,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(($context["path"] ?? null), true), "html", null, true);
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["path" => false], false),
            "sidetree" => new \Twig\TwigMacro("sidetree", function ($items = null, $current = null, ...$varargs): string|Markup {
                // line 68
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "current" => $current,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 69
                    $macros["m"] = $this->getMacroNamespace();
                    // line 70
                    yield "<ul>
";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 72
                        yield "    <li class=\"";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "route", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "route", [], "any", false, false, false, 72))) ? ("is-current") : (""));
                        yield "\">
        <a href=\"";
                        // line 73
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 73), "html", null, true);
                        yield "\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "route", [], "any", false, false, false, 73) == CoreExtension::getAttribute($this->env, $this->source, ($context["current"] ?? null), "route", [], "any", false, false, false, 73))) {
                            yield " aria-current=\"page\"";
                        }
                        yield ">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 73), "html", null, true);
                        yield "</a>
        ";
                        // line 74
                        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 74), "visible", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(74))->call("sidetree", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 74), "visible", [], "any", false, false, false, 74), ($context["current"] ?? null)], $context, 74, $this->source);
                        }
                        // line 75
                        yield "    </li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 77
                    yield "</ul>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "current" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/macros.html.twig";
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
        return array (  362 => 77,  354 => 75,  350 => 74,  340 => 73,  335 => 72,  331 => 71,  328 => 70,  326 => 69,  315 => 68,  300 => 65,  293 => 61,  285 => 59,  281 => 58,  278 => 57,  268 => 55,  266 => 54,  256 => 53,  249 => 51,  246 => 50,  242 => 49,  237 => 48,  235 => 47,  233 => 46,  222 => 45,  215 => 41,  207 => 39,  203 => 38,  200 => 37,  196 => 36,  192 => 35,  184 => 34,  177 => 33,  174 => 32,  170 => 31,  161 => 30,  159 => 29,  157 => 28,  146 => 27,  140 => 23,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  124 => 17,  121 => 16,  118 => 15,  115 => 14,  112 => 13,  109 => 12,  106 => 11,  103 => 10,  100 => 9,  97 => 8,  94 => 7,  91 => 6,  88 => 5,  80 => 4,  78 => 3,  67 => 2,  57 => 66,  54 => 63,  51 => 43,  48 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Inline SVG icons (stroke style). Usage: {{ m.icon(\x27phone\x27) }} #}
{% macro icon(name, size) %}
{%- set s = size|default(20) -%}
<svg class=\"icon icon-{{ name }}\" width=\"{{ s }}\" height=\"{{ s }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\">
{%- if name == \x27phone\x27 -%}<path d=\"M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z\"/>
{%- elseif name == \x27mail\x27 -%}<rect x=\"2\" y=\"4\" width=\"20\" height=\"16\" rx=\"2\"/><path d=\"m22 7-10 6L2 7\"/>
{%- elseif name == \x27pin\x27 -%}<path d=\"M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z\"/><circle cx=\"12\" cy=\"10\" r=\"3\"/>
{%- elseif name == \x27clock\x27 -%}<circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M12 6v6l4 2\"/>
{%- elseif name == \x27chevron\x27 -%}<path d=\"m6 9 6 6 6-6\"/>
{%- elseif name == \x27arrow\x27 -%}<path d=\"M5 12h14M13 6l6 6-6 6\"/>
{%- elseif name == \x27menu\x27 -%}<path d=\"M4 7h16M4 12h16M4 17h16\"/>
{%- elseif name == \x27close\x27 -%}<path d=\"M6 6l12 12M18 6 6 18\"/>
{%- elseif name == \x27check\x27 -%}<path d=\"m20 6-11 11-5-5\"/>
{%- elseif name == \x27calendar\x27 -%}<rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\"/><path d=\"M16 2v4M8 2v4M3 10h18\"/>
{%- elseif name == \x27facebook\x27 -%}<path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/>
{%- elseif name == \x27instagram\x27 -%}<rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"4\"/><circle cx=\"17.5\" cy=\"6.5\" r=\".6\" fill=\"currentColor\"/>
{%- elseif name == \x27youtube\x27 -%}<path d=\"M22.5 7.2a2.5 2.5 0 0 0-1.8-1.8C19.1 5 12 5 12 5s-7.1 0-8.7.4A2.5 2.5 0 0 0 1.5 7.2 26 26 0 0 0 1.1 12c0 1.6.1 3.2.4 4.8a2.5 2.5 0 0 0 1.8 1.8C4.9 19 12 19 12 19s7.1 0 8.7-.4a2.5 2.5 0 0 0 1.8-1.8c.3-1.6.4-3.2.4-4.8 0-1.6-.1-3.2-.4-4.8z\"/><path d=\"m10 15 5-3-5-3z\"/>
{%- elseif name == \x27linkedin\x27 -%}<path d=\"M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z\"/><circle cx=\"4\" cy=\"4\" r=\"2\"/>
{%- elseif name == \x27pinterest\x27 -%}<circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M10.5 20.5 13 11M9 14c-1-3 .5-6 3.5-6 2.5 0 3.5 2 3 4s-2 3.5-3.5 3.5c-1 0-1.7-.6-2-1.5\"/>
{%- elseif name == \x27x\x27 -%}<path d=\"M4 4l16 16M20 4 4 20\"/>
{%- elseif name == \x27cross\x27 -%}<path d=\"M9 3h6v6h6v6h-6v6H9v-6H3V9h6z\"/>
{%- endif -%}
</svg>
{%- endmacro %}

{# Recursive desktop navigation list #}
{% macro nav(items, depth) %}
{% import _self as m %}
{% set depth = depth|default(0) %}
<ul class=\"{{ depth == 0 ? \x27nav-list\x27 : \x27sub-menu sub-\x27 ~ depth }}\"{% if depth > 0 %} role=\"menu\"{% endif %}>
{% for p in items %}
    {% set kids = p.children.visible %}
    <li class=\"nav-item{{ kids|length ? \x27 has-children\x27 : \x27\x27 }}{{ p.active ? \x27 is-active\x27 : \x27\x27 }}{{ p.activeChild ? \x27 is-active-parent\x27 : \x27\x27 }}\">
        <a href=\"{{ p.url }}\"{% if p.active %} aria-current=\"page\"{% endif %}>
            <span>{{ p.menu }}</span>
            {% if kids|length %}{{ m.icon(\x27chevron\x27, 14) }}{% endif %}
        </a>
        {% if kids|length %}{{ m.nav(kids, depth + 1) }}{% endif %}
    </li>
{% endfor %}
</ul>
{% endmacro %}

{# Recursive mobile navigation list (accordion) #}
{% macro mobile_nav(items, depth) %}
{% import _self as m %}
{% set depth = depth|default(0) %}
<ul class=\"m-list m-depth-{{ depth }}\">
{% for p in items %}
    {% set kids = p.children.visible %}
    <li class=\"m-item{{ kids|length ? \x27 has-children\x27 : \x27\x27 }}{{ p.active or p.activeChild ? \x27 open\x27 : \x27\x27 }}\">
        <div class=\"m-row\">
            <a href=\"{{ p.url }}\"{% if p.active %} aria-current=\"page\"{% endif %}>{{ p.menu }}</a>
            {% if kids|length %}
            <button type=\"button\" class=\"m-toggle\" aria-expanded=\"{{ p.active or p.activeChild ? \x27true\x27 : \x27false\x27 }}\" aria-label=\"Toggle {{ p.menu|e }} submenu\">{{ m.icon(\x27chevron\x27, 18) }}</button>
            {% endif %}
        </div>
        {% if kids|length %}{{ m.mobile_nav(kids, depth + 1) }}{% endif %}
    </li>
{% endfor %}
</ul>
{% endmacro %}

{# Absolute URL for a local path or media url #}
{% macro abs(path) %}{{ url(path, true) }}{% endmacro %}

{# Recursive \"in this section\" tree; only expands the branch containing the current page #}
{% macro sidetree(items, current) %}
{% import _self as m %}
<ul>
{% for p in items %}
    <li class=\"{{ p.route == current.route ? \x27is-current\x27 : \x27\x27 }}\">
        <a href=\"{{ p.url }}\"{% if p.route == current.route %} aria-current=\"page\"{% endif %}>{{ p.menu }}</a>
        {% if (p.active or p.activeChild) and p.children.visible|length %}{{ m.sidetree(p.children.visible, current) }}{% endif %}
    </li>
{% endfor %}
</ul>
{% endmacro %}
", "partials/macros.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/macros.html.twig");
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
