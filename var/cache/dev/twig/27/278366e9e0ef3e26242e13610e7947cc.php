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

/* menuFirebase/edit.html.twig */
class __TwigTemplate_c24555c0716e68eee39b207baa69e026 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/edit.html.twig"));

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
        yield "<h1>Modifier le Menu</h1>

<form action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_edit", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 6, $this->source); })())]), "html", null, true);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <label for=\"titre\">Titre :</label>
        <input type=\"text\" id=\"titre\" name=\"titre\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"description\">Description :</label>
        <textarea id=\"description\" name=\"description\" required>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        yield "</textarea>
    </div>

    <div class=\"form-group\">
        <label for=\"price\">Prix :</label>
        <input type=\"number\" id=\"price\" name=\"price\" step=\"0.01\" value=\"";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "price", [], "any", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), "html", null, true)) : (""));
        yield "\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"image\">Image :</label>
        ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "            <div class=\"current-image\">
                <p>Image actuelle :</p>
                <img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27), "html", null, true);
            yield "\" width=\"150\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
            </div>
        ";
        }
        // line 30
        yield "        <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">
        <small>Laissez vide pour conserver l'image actuelle</small>
    </div>
    
    <div class=\"form-group\">
        <label for=\"type\">Type :</label>
        <select name=\"type\" id=\"type\" required>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 38
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "type", [], "any", true, true, false, 38) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38) == $context["t"]))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </select>
    </div>

    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn btn-success\">Mettre à jour</button>
        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
    </div>
</form>

<style>
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group input, .form-group textarea, .form-group select {
    width: 100%;
    max-width: 400px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-group textarea {
    height: 80px;
    resize: vertical;
}
.current-image {
    margin: 10px 0;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 4px;
}
.current-image img {
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-actions {
    margin-top: 20px;
}
.btn {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}
.btn-success {
    background-color: #28a745;
    color: white;
}
.btn-secondary {
    background-color: #6c757d;
    color: white;
}
small {
    color: #666;
    font-size: 0.9em;
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuFirebase/edit.html.twig";
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
        return array (  150 => 45,  143 => 40,  128 => 38,  124 => 37,  115 => 30,  107 => 27,  103 => 25,  101 => 24,  93 => 19,  85 => 14,  77 => 9,  71 => 6,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
<h1>Modifier le Menu</h1>

<form action=\"{{ path('firebase_menu_edit', {'key': key}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"form-group\">
        <label for=\"titre\">Titre :</label>
        <input type=\"text\" id=\"titre\" name=\"titre\" value=\"{{ menu.titre }}\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"description\">Description :</label>
        <textarea id=\"description\" name=\"description\" required>{{ menu.description }}</textarea>
    </div>

    <div class=\"form-group\">
        <label for=\"price\">Prix :</label>
        <input type=\"number\" id=\"price\" name=\"price\" step=\"0.01\" value=\"{{ menu.price ?? '' }}\" required>
    </div>
    
    <div class=\"form-group\">
        <label for=\"image\">Image :</label>
        {% if menu.image %}
            <div class=\"current-image\">
                <p>Image actuelle :</p>
                <img src=\"{{ menu.image }}\" width=\"150\" alt=\"{{ menu.titre }}\">
            </div>
        {% endif %}
        <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\">
        <small>Laissez vide pour conserver l'image actuelle</small>
    </div>
    
    <div class=\"form-group\">
        <label for=\"type\">Type :</label>
        <select name=\"type\" id=\"type\" required>
            {% for t in types %}
                <option value=\"{{ t }}\" {% if menu.type is defined and menu.type == t %}selected{% endif %}>{{ t }}</option>
            {% endfor %}
        </select>
    </div>

    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn btn-success\">Mettre à jour</button>
        <a href=\"{{ path('firebase_menu_index') }}\" class=\"btn btn-secondary\">Annuler</a>
    </div>
</form>

<style>
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.form-group input, .form-group textarea, .form-group select {
    width: 100%;
    max-width: 400px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-group textarea {
    height: 80px;
    resize: vertical;
}
.current-image {
    margin: 10px 0;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 4px;
}
.current-image img {
    border: 1px solid #ddd;
    border-radius: 4px;
}
.form-actions {
    margin-top: 20px;
}
.btn {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
}
.btn-success {
    background-color: #28a745;
    color: white;
}
.btn-secondary {
    background-color: #6c757d;
    color: white;
}
small {
    color: #666;
    font-size: 0.9em;
}
</style>

{% endblock %}
", "menuFirebase/edit.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\menuFirebase\\edit.html.twig");
    }
}
