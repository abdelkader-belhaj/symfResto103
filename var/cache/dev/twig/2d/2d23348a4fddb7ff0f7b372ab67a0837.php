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

/* chefs/edit.html.twig */
class __TwigTemplate_0927701dd5b6730e239e13e66744c0a9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chefs/edit.html.twig"));

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

        yield "Modifier Chef";
        
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
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 500px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Modifier un Chef</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Nom :</label>
                    <input type=\"text\" name=\"nom\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"titre\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image actuelle :</label><br>
                    ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chef"]) || array_key_exists("chef", $context) ? $context["chef"] : (function () { throw new RuntimeError('Variable "chef" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), "html", null, true);
            yield "\" alt=\"Photo actuelle\" class=\"rounded mb-2\" width=\"80\" height=\"80\" style=\"object-fit:cover;\"><br>
                    ";
        } else {
            // line 26
            yield "                        <span class=\"text-muted\">Aucune image</span><br>
                    ";
        }
        // line 28
        yield "                    <label class=\"form-label mt-2\">Changer l’image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_list");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
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
        return "chefs/edit.html.twig";
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
        return array (  128 => 32,  122 => 28,  118 => 26,  112 => 24,  110 => 23,  103 => 19,  96 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Modifier Chef{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 500px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Modifier un Chef</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Nom :</label>
                    <input type=\"text\" name=\"nom\" value=\"{{ chef.nom }}\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"titre\" value=\"{{ chef.titre }}\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image actuelle :</label><br>
                    {% if chef.image %}
                        <img src=\"{{ chef.image }}\" alt=\"Photo actuelle\" class=\"rounded mb-2\" width=\"80\" height=\"80\" style=\"object-fit:cover;\"><br>
                    {% else %}
                        <span class=\"text-muted\">Aucune image</span><br>
                    {% endif %}
                    <label class=\"form-label mt-2\">Changer l’image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('chefs_list') }}\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "chefs/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\chefs\\edit.html.twig");
    }
}
