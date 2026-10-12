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

/* partials/footer.html.twig */
class __TwigTemplate_3ea54ae24786258855389f88e04a0ee6_sourced extends Template
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
        yield "<footer class=\"site-footer\">
    <div class=\"container footer-grid\">
        <div class=\"f-col f-brand\">
            <p class=\"f-title\">";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</p>
            ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 7), "about", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"f-about\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 7), "about", [], "any", false, false, false, 7), "html", null, true);
            yield "</p>";
        }
        // line 8
        yield "            <ul class=\"f-contact\">
                <li>";
        // line 9
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(9))->call("icon", ["pin", 18], $context, 9, $this->source);
        yield "<span>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 9), "address", [], "any", false, false, false, 9), "html", null, true);
        yield "</span></li>
                <li>";
        // line 10
        yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", ["clock", 18], $context, 10, $this->source);
        yield "<span>Opening hours: ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 10), "hours", [], "any", false, false, false, 10), "html", null, true);
        yield "</span></li>
            </ul>
            ";
        // line 12
        $context["has_social"] = false;
        // line 13
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "social", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            if ((($tmp = $context["v"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["has_social"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 14
        yield "            ";
        if ((($tmp = ($context["has_social"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "            <ul class=\"social\" aria-label=\"Social media\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "social", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                if ((($tmp = $context["v"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "                <li><a href=\"";
                    yield (string) $this->escaper->escape($context["v"], "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noopener noreferrer\" aria-label=\"";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["k"]), "html", null, true);
                    yield "\">";
                    yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(17))->call("icon", [$context["k"], 20], $context, 17, $this->source);
                    yield "</a></li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 19
            yield "            </ul>
            ";
        }
        // line 21
        yield "        </div>

        <div class=\"f-col\">
            <p class=\"f-title\">Contact me</p>
            <a class=\"f-phone\" href=\"tel:";
        // line 25
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 25), "phone_intl", [], "any", false, false, false, 25), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        yield "</a>
            <a class=\"f-mail\" href=\"mailto:";
        // line 26
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</a>
            <a class=\"btn btn-light\" href=\"";
        // line 27
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("/contact"), "html", null, true);
        yield "\">Contact us</a>
            ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 28), "map_url", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"f-map\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "clinic", [], "any", false, false, false, 28), "map_url", [], "any", false, false, false, 28), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">Get directions ";
            yield (string) ($macros["m"] ?? $this->throwUninitializedMacroNamespace(28))->call("icon", ["arrow", 16], $context, 28, $this->source);
            yield "</a>";
        }
        // line 29
        yield "        </div>

        <div class=\"f-col\">
            <p class=\"f-title\">";
        // line 32
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 32), "links_title", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
            <ul class=\"f-links\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 34), "links", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 35
            yield "                <li><a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 35)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "label", [], "any", false, false, false, 35), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 37
        yield "            </ul>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container fb-inner\">
            <p>";
        // line 42
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 42), "copyright", [], "any", false, false, false, 42), ["{year}" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 42), "credit", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "footer", [], "any", false, false, false, 42), "credit", [], "any", false, false, false, 42), "html", null, true);
        }
        yield "</p>
        </div>
    </div>
</footer>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  191 => 42,  184 => 37,  172 => 35,  168 => 34,  163 => 32,  158 => 29,  150 => 28,  146 => 27,  140 => 26,  134 => 25,  128 => 21,  124 => 19,  109 => 17,  104 => 16,  101 => 15,  98 => 14,  85 => 13,  83 => 12,  76 => 10,  70 => 9,  67 => 8,  61 => 7,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27partials/macros.html.twig\x27 as m %}
{% set t = config.theme %}
<footer class=\"site-footer\">
    <div class=\"container footer-grid\">
        <div class=\"f-col f-brand\">
            <p class=\"f-title\">{{ t.clinic.name }}</p>
            {% if t.footer.about %}<p class=\"f-about\">{{ t.footer.about }}</p>{% endif %}
            <ul class=\"f-contact\">
                <li>{{ m.icon(\x27pin\x27, 18) }}<span>{{ t.clinic.address }}</span></li>
                <li>{{ m.icon(\x27clock\x27, 18) }}<span>Opening hours: {{ t.clinic.hours }}</span></li>
            </ul>
            {% set has_social = false %}
            {% for k, v in t.social %}{% if v %}{% set has_social = true %}{% endif %}{% endfor %}
            {% if has_social %}
            <ul class=\"social\" aria-label=\"Social media\">
                {% for k, v in t.social %}{% if v %}
                <li><a href=\"{{ v }}\" target=\"_blank\" rel=\"noopener noreferrer\" aria-label=\"{{ k|capitalize }}\">{{ m.icon(k, 20) }}</a></li>
                {% endif %}{% endfor %}
            </ul>
            {% endif %}
        </div>

        <div class=\"f-col\">
            <p class=\"f-title\">Contact me</p>
            <a class=\"f-phone\" href=\"tel:{{ t.clinic.phone_intl }}\">{{ t.clinic.phone }}</a>
            <a class=\"f-mail\" href=\"mailto:{{ t.clinic.email }}\">{{ t.clinic.email }}</a>
            <a class=\"btn btn-light\" href=\"{{ url(\x27/contact\x27) }}\">Contact us</a>
            {% if t.clinic.map_url %}<a class=\"f-map\" href=\"{{ t.clinic.map_url }}\" target=\"_blank\" rel=\"noopener noreferrer\">Get directions {{ m.icon(\x27arrow\x27, 16) }}</a>{% endif %}
        </div>

        <div class=\"f-col\">
            <p class=\"f-title\">{{ t.footer.links_title }}</p>
            <ul class=\"f-links\">
                {% for l in t.footer.links %}
                <li><a href=\"{{ url(l.url) }}\">{{ l.label }}</a></li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container fb-inner\">
            <p>{{ t.footer.copyright|replace({\x27{year}\x27: \x27now\x27|date(\x27Y\x27)}) }}{% if t.footer.credit %} | {{ t.footer.credit }}{% endif %}</p>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/footer.html.twig");
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
