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

/* tableFirebase/show.html.twig */
class __TwigTemplate_7505a89ac24634d49b20feca03412473 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableFirebase/show.html.twig"));

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

        yield "Détail de la Réservation";
        
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
        yield "<h1>Détail de la Réservation</h1>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item\"><strong>Nom:</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Email:</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Téléphone:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()), "tel", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Date:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Heure:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })()), "time", [], "any", false, false, false, 12), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Nombre de personnes:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 13, $this->source); })()), "numberPeople", [], "any", false, false, false, 13), "html", null, true);
        yield "</li>
    <li class=\"list-group-item\"><strong>Message:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "message", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
</ul>
<a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_edit", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
<form method=\"post\" action=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_delete", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })())]), "html", null, true);
        yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()))), "html", null, true);
        yield "\">
    <button class=\"btn btn-danger\">Supprimer</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tableFirebase/show.html.twig";
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
        return array (  130 => 19,  126 => 18,  122 => 17,  118 => 16,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Détail de la Réservation{% endblock %}

{% block body %}
<h1>Détail de la Réservation</h1>
<ul class=\"list-group mb-3\">
    <li class=\"list-group-item\"><strong>Nom:</strong> {{ table.name }}</li>
    <li class=\"list-group-item\"><strong>Email:</strong> {{ table.email }}</li>
    <li class=\"list-group-item\"><strong>Téléphone:</strong> {{ table.tel }}</li>
    <li class=\"list-group-item\"><strong>Date:</strong> {{ table.date }}</li>
    <li class=\"list-group-item\"><strong>Heure:</strong> {{ table.time }}</li>
    <li class=\"list-group-item\"><strong>Nombre de personnes:</strong> {{ table.numberPeople }}</li>
    <li class=\"list-group-item\"><strong>Message:</strong> {{ table.message }}</li>
</ul>
<a href=\"{{ path('firebase_table_edit', {'key': key}) }}\" class=\"btn btn-warning\">Modifier</a>
<a href=\"{{ path('firebase_table_index') }}\" class=\"btn btn-secondary\">Retour</a>
<form method=\"post\" action=\"{{ path('firebase_table_delete', {'key': key}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ key) }}\">
    <button class=\"btn btn-danger\">Supprimer</button>
</form>
{% endblock %}
", "tableFirebase/show.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\tableFirebase\\show.html.twig");
    }
}
