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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_d0f2aebbf6609ea327b3872bc4295249_sourced extends Template
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
        $context["chain"] = [];
        // line 2
        $context["cur"] = ($context["page"] ?? null);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            yield "    ";
            if (((((($tmp = ($context["cur"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "route", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "route", [], "any", false, false, false, 4) != "/")) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "root", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 5
                yield "        ";
                $context["chain"] = Twig\Extension\CoreExtension::merge([($context["cur"] ?? null)], ($context["chain"] ?? null));
                // line 6
                yield "        ";
                $context["cur"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "parent", [], "any", false, false, false, 6);
                // line 7
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 9
        yield "<nav class=\"breadcrumbs\" aria-label=\"Breadcrumb\">
    <ol>
        <li><a href=\"";
        // line 11
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\">Home</a></li>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chain"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "            <li aria-current=\"page\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 14), "html", null, true);
                yield "</li>
            ";
            } else {
                // line 16
                yield "            <li><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 16), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 16), "html", null, true);
                yield "</a></li>
            ";
            }
            // line 18
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 19
        yield "    </ol>
</nav>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/breadcrumbs.html.twig";
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
        return array (  130 => 19,  115 => 18,  107 => 16,  101 => 14,  98 => 13,  81 => 12,  77 => 11,  73 => 9,  65 => 7,  62 => 6,  59 => 5,  56 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set chain = [] %}
{% set cur = page %}
{% for i in 1..6 %}
    {% if cur and cur.route and cur.route != \x27/\x27 and not cur.root %}
        {% set chain = [cur]|merge(chain) %}
        {% set cur = cur.parent %}
    {% endif %}
{% endfor %}
<nav class=\"breadcrumbs\" aria-label=\"Breadcrumb\">
    <ol>
        <li><a href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\">Home</a></li>
        {% for c in chain %}
            {% if loop.last %}
            <li aria-current=\"page\">{{ c.title }}</li>
            {% else %}
            <li><a href=\"{{ c.url }}\">{{ c.title }}</a></li>
            {% endif %}
        {% endfor %}
    </ol>
</nav>
", "partials/breadcrumbs.html.twig", "/Users/amer/Sites/drmohsingillani/user/themes/drmohsin/templates/partials/breadcrumbs.html.twig");
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
