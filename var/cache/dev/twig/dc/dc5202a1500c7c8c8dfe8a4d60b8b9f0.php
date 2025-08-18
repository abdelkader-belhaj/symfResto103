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

/* menuFirebase/showw.html.twig */
class __TwigTemplate_eb10a289a4ed55710b6823c4aba8f0da extends Template
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
            'bodyy' => [$this, 'block_bodyy'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/showw.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyy"));

        // line 4
        yield "<!-- Menu Section -->
<section id=\"menu\" class=\"menu section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Menu</h2>
    <div><span>Check Our Tasty</span> <span class=\"description-title\">Menu</span></div>
  </div>

  <div class=\"container isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

    <!-- Filtres dynamiques -->
    <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-12 d-flex justify-content-center\">
        <ul class=\"menu-filters isotope-filters\">
          <li data-filter=\"*\" class=\"filter-active\">Tous</li>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 19
            yield "            <li data-filter=\".";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["type"], ["filter-" => ""])), "html", null, true);
            yield "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        </ul>
      </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 28
            yield "        <div class=\"col-lg-6 menu-item isotope-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
          <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 31), "html", null, true);
            yield "</a><span>\$9.95</span>
          </div>
          <div class=\"menu-ingredients\">
            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "        <p>Aucun menu trouvé.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    </div>

  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuFirebase/showw.html.twig";
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
        return array (  144 => 40,  137 => 38,  135 => 37,  127 => 34,  121 => 31,  116 => 29,  111 => 28,  106 => 27,  98 => 21,  87 => 19,  83 => 18,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyy %}
<!-- Menu Section -->
<section id=\"menu\" class=\"menu section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Menu</h2>
    <div><span>Check Our Tasty</span> <span class=\"description-title\">Menu</span></div>
  </div>

  <div class=\"container isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

    <!-- Filtres dynamiques -->
    <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-12 d-flex justify-content-center\">
        <ul class=\"menu-filters isotope-filters\">
          <li data-filter=\"*\" class=\"filter-active\">Tous</li>
          {% for type in types %}
            <li data-filter=\".{{ type }}\">{{ type|replace({'filter-':''})|capitalize }}</li>
          {% endfor %}
        </ul>
      </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      {% for menu in menus %}
        <div class=\"col-lg-6 menu-item isotope-item {{ menu.type }}\">
          <img src=\"{{ menu.image }}\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">{{ menu.titre }}</a><span>\$9.95</span>
          </div>
          <div class=\"menu-ingredients\">
            {{ menu.description }}
          </div>
        </div>
      {% else %}
        <p>Aucun menu trouvé.</p>
      {% endfor %}
    </div>

  </div>
</section>
{% endblock %}
", "menuFirebase/showw.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\menuFirebase\\showw.html.twig");
    }
}
