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

/* special/show.html.twig */
class __TwigTemplate_99c578d6b29b3a5b9888cb4669201246 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "special/show.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails du Special";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-info text-white\">
            <h2 class=\"mb-0\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
        </div>
        <div class=\"card-body\">
            <h5 class=\"text-muted\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 12, $this->source); })()), "sousTitre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
            <p>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
            ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
            yield "\" alt=\"Image\" class=\"img-fluid rounded mb-3\" style=\"max-width:250px;\">
            ";
        }
        // line 17
        yield "            <div class=\"d-flex justify-content-between mt-3\">
                <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_edit", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <form action=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_delete", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 21, $this->source); })())]), "html", null, true);
        yield "\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce special ?');\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour à la liste</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "special/show.html.twig";
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
        return array (  129 => 26,  121 => 21,  115 => 18,  112 => 17,  106 => 15,  104 => 14,  100 => 13,  96 => 12,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Détails du Special{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-info text-white\">
            <h2 class=\"mb-0\">{{ special.title }}</h2>
        </div>
        <div class=\"card-body\">
            <h5 class=\"text-muted\">{{ special.sousTitre }}</h5>
            <p>{{ special.description }}</p>
            {% if special.image %}
                <img src=\"{{ special.image }}\" alt=\"Image\" class=\"img-fluid rounded mb-3\" style=\"max-width:250px;\">
            {% endif %}
            <div class=\"d-flex justify-content-between mt-3\">
                <a href=\"{{ path('special_edit', {'key': key}) }}\" class=\"btn btn-warning\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <form action=\"{{ path('special_delete', {'key': key}) }}\" method=\"post\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce special ?');\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
                <a href=\"{{ path('special_index') }}\" class=\"btn btn-outline-secondary\">Retour à la liste</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "special/show.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\special\\show.html.twig");
    }
}
