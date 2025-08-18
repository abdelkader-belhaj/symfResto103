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

/* tableFirebase/edit.html.twig */
class __TwigTemplate_889e72c69670fdc777078030c205b515 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableFirebase/edit.html.twig"));

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

        yield "Modifier la Réservation";
        
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
        yield "<h1>Modifier la Réservation</h1>
<form method=\"post\">
    <div class=\"mb-3\">
        <label>Nom</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Email</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Téléphone</label>
        <input type=\"text\" name=\"tel\" class=\"form-control\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 18, $this->source); })()), "tel", [], "any", false, false, false, 18), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Date</label>
        <input type=\"date\" name=\"date\" class=\"form-control\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Heure</label>
        <input type=\"time\" name=\"time\" class=\"form-control\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 26, $this->source); })()), "time", [], "any", false, false, false, 26), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Nombre de personnes</label>
        <input type=\"number\" name=\"numberPeople\" class=\"form-control\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 30, $this->source); })()), "numberPeople", [], "any", false, false, false, 30), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"mb-3\">
        <label>Message</label>
        <textarea name=\"message\" class=\"form-control\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 34, $this->source); })()), "message", [], "any", false, false, false, 34), "html", null, true);
        yield "</textarea>
    </div>
    <button class=\"btn btn-success\">Enregistrer</button>
    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
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
        return "tableFirebase/edit.html.twig";
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
        return array (  139 => 37,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Modifier la Réservation{% endblock %}

{% block body %}
<h1>Modifier la Réservation</h1>
<form method=\"post\">
    <div class=\"mb-3\">
        <label>Nom</label>
        <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ table.name }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Email</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" value=\"{{ table.email }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Téléphone</label>
        <input type=\"text\" name=\"tel\" class=\"form-control\" value=\"{{ table.tel }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Date</label>
        <input type=\"date\" name=\"date\" class=\"form-control\" value=\"{{ table.date }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Heure</label>
        <input type=\"time\" name=\"time\" class=\"form-control\" value=\"{{ table.time }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Nombre de personnes</label>
        <input type=\"number\" name=\"numberPeople\" class=\"form-control\" value=\"{{ table.numberPeople }}\" required>
    </div>
    <div class=\"mb-3\">
        <label>Message</label>
        <textarea name=\"message\" class=\"form-control\">{{ table.message }}</textarea>
    </div>
    <button class=\"btn btn-success\">Enregistrer</button>
    <a href=\"{{ path('firebase_table_index') }}\" class=\"btn btn-secondary\">Retour</a>
</form>
{% endblock %}", "tableFirebase/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\tableFirebase\\edit.html.twig");
    }
}
