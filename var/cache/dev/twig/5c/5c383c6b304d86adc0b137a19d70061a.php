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

/* partties/edit.html.twig */
class __TwigTemplate_568d22ed146b0f269f8dec60dda2967d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partties/edit.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<h1>Modifier Parttie</h1>

<form action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partties_update", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 6, $this->source); })())]), "html", null, true);
        yield "\" method=\"post\">
    <input type=\"text\" name=\"titre\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
    <input type=\"number\" name=\"price\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 8, $this->source); })()), "price", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"debut\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 9, $this->source); })()), "debut", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"ligne1\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 10, $this->source); })()), "ligne1", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"ligne2\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 11, $this->source); })()), "ligne2", [], "any", false, false, false, 11), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"ligne3\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 12, $this->source); })()), "ligne3", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"final\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 13, $this->source); })()), "final", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"image\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parttie"]) || array_key_exists("parttie", $context) ? $context["parttie"] : (function () { throw new RuntimeError('Variable "parttie" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        yield "\">
    <button type=\"submit\">Modifier</button>
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
        return "partties/edit.html.twig";
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
        return array (  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
<h1>Modifier Parttie</h1>

<form action=\"{{ path('app_partties_update', {key: key}) }}\" method=\"post\">
    <input type=\"text\" name=\"titre\" value=\"{{ parttie.titre }}\">
    <input type=\"number\" name=\"price\" value=\"{{ parttie.price }}\">
    <input type=\"text\" name=\"debut\" value=\"{{ parttie.debut }}\">
    <input type=\"text\" name=\"ligne1\" value=\"{{ parttie.ligne1 }}\">
    <input type=\"text\" name=\"ligne2\" value=\"{{ parttie.ligne2 }}\">
    <input type=\"text\" name=\"ligne3\" value=\"{{ parttie.ligne3 }}\">
    <input type=\"text\" name=\"final\" value=\"{{ parttie.final }}\">
    <input type=\"text\" name=\"image\" value=\"{{ parttie.image }}\">
    <button type=\"submit\">Modifier</button>
</form>
{% endblock %}", "partties/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\partties\\edit.html.twig");
    }
}
