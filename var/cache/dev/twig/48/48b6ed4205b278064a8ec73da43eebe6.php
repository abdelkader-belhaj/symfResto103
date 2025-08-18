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

/* special/new.html.twig */
class __TwigTemplate_3960ed9d758add71970ffb7cd1d5c54b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "special/new.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Créer un Special";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Créer un Special</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"title\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Sous-titre :</label>
                    <input type=\"text\" name=\"sousTitre\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description :</label>
                    <textarea name=\"description\" class=\"form-control\" rows=\"4\"></textarea>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
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
        return "special/new.html.twig";
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
        return array (  111 => 29,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Créer un Special{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-primary text-white\">
            <h2 class=\"mb-0\">Créer un Special</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"title\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Sous-titre :</label>
                    <input type=\"text\" name=\"sousTitre\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description :</label>
                    <textarea name=\"description\" class=\"form-control\" rows=\"4\"></textarea>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('special_index') }}\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "special/new.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\special\\new.html.twig");
    }
}
