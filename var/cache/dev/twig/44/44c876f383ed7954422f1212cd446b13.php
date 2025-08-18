<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* special/showw.html.twig */
class __TwigTemplate_f1249746287f12dd01c75611791c873b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyspec' => [$this, 'block_bodyspec'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "special/showw.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyspec(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyspec"));

        // line 4
        yield "<!-- Specials Section -->
<section id=\"specials\" class=\"specials section\">
  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Specials</h2>
    <div><span>Check Our</span> <span class=\"description-title\">Specials</span></div>
  </div><!-- End Section Title -->

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 17
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link ";
            // line 18
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" data-bs-toggle=\"tab\" href=\"#specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "
              </a>
            </li>
          ";
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
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 28, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 29
            yield "            <div class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" id=\"specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "</h3>
                  <p class=\"fst-italic\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                  <p>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 37), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          ";
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
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "special/showw.html.twig";
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
    public function getDebugInfo(): array
    {
        return array (  195 => 42,  176 => 37,  170 => 34,  166 => 33,  162 => 32,  151 => 29,  134 => 28,  127 => 23,  109 => 19,  101 => 18,  98 => 17,  81 => 16,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyspec %}
<!-- Specials Section -->
<section id=\"specials\" class=\"specials section\">
  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Specials</h2>
    <div><span>Check Our</span> <span class=\"description-title\">Specials</span></div>
  </div><!-- End Section Title -->

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          {% for key, special in specials %}
            <li class=\"nav-item\">
              <a class=\"nav-link {% if loop.first %}active show{% endif %}\" data-bs-toggle=\"tab\" href=\"#specials-tab-{{ loop.index }}\">
                {{ special.title }}
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          {% for key, special in specials %}
            <div class=\"tab-pane {% if loop.first %}active show{% endif %}\" id=\"specials-tab-{{ loop.index }}\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>{{ special.title }}</h3>
                  <p class=\"fst-italic\">{{ special.sousTitre }}</p>
                  <p>{{ special.description }}</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"{{ special.image }}\" alt=\"\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
{% endblock %}
", "special/showw.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\special\\showw.html.twig");
    }
}
