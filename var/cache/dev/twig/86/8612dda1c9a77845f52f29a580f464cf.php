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

/* special/edit.html.twig */
class __TwigTemplate_8768c7edce3535acdf022a6fed03ed70 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "special/edit.html.twig"));

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

        yield "Modifier Special";
        
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
        <div class=\"card-header bg-warning text-dark\">
            <h2 class=\"mb-0\">Modifier un Special</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"title\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Sous-titre :</label>
                    <input type=\"text\" name=\"sousTitre\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 18, $this->source); })()), "sousTitre", [], "any", false, false, false, 18), "html", null, true);
        yield "\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description :</label>
                    <textarea name=\"description\" class=\"form-control\" rows=\"4\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        yield "</textarea>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <div class=\"mt-2\">
                            <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), "html", null, true);
            yield "\" alt=\"Image\" style=\"max-width:120px; border-radius:8px;\">
                        </div>
                    ";
        }
        // line 32
        yield "                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>
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
        return "special/edit.html.twig";
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
        return array (  133 => 34,  129 => 32,  123 => 29,  120 => 28,  118 => 27,  110 => 22,  103 => 18,  96 => 14,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Modifier Special{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm mx-auto\" style=\"max-width: 600px;\">
        <div class=\"card-header bg-warning text-dark\">
            <h2 class=\"mb-0\">Modifier un Special</h2>
        </div>
        <div class=\"card-body\">
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"mb-3\">
                    <label class=\"form-label\">Titre :</label>
                    <input type=\"text\" name=\"title\" value=\"{{ special.title }}\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Sous-titre :</label>
                    <input type=\"text\" name=\"sousTitre\" value=\"{{ special.sousTitre }}\" class=\"form-control\">
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Description :</label>
                    <textarea name=\"description\" class=\"form-control\" rows=\"4\">{{ special.description }}</textarea>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image :</label>
                    <input type=\"file\" name=\"image\" class=\"form-control\">
                    {% if special.image %}
                        <div class=\"mt-2\">
                            <img src=\"{{ special.image }}\" alt=\"Image\" style=\"max-width:120px; border-radius:8px;\">
                        </div>
                    {% endif %}
                </div>
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('special_index') }}\" class=\"btn btn-outline-secondary\">Retour</a>
                    <button type=\"submit\" class=\"btn btn-warning\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "special/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\special\\edit.html.twig");
    }
}
