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

/* menuFirebase/add.html.twig */
class __TwigTemplate_84cfe577963e0b93a56ffca89e5f9e4f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/add.html.twig"));

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
        yield "<div class=\"container mt-5\">
    <h2 class=\"mb-4\">Ajouter un nouveau menu</h2>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "
    <form id=\"menuForm\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"card p-4 shadow-sm\">
        <div class=\"mb-3\">
            <label for=\"titre\" class=\"form-label\">Titre</label>
            <input type=\"text\" name=\"titre\" id=\"titre\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"description\" class=\"form-label\">Description</label>
            <input type=\"text\" name=\"description\" id=\"description\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"image\" class=\"form-label\">Image</label>
            <input type=\"file\" name=\"image\" id=\"image\" class=\"form-control\" accept=\"image/*\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Type</label>
            <select name=\"type\" id=\"type\" class=\"form-select\" required>
                <option value=\"\" disabled selected>Choisir un type</option>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 35
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["t"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </select>
        </div>

        <div class=\"mb-3\">
            <label for=\"price\" class=\"form-label\">Prix (TND)</label>
            <input type=\"number\" name=\"price\" id=\"price\" class=\"form-control\" step=\"0.01\" min=\"0\" required>
        </div>

        <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter Menu</button>
    </form>
</div>

<script>
    document.getElementById('menuForm').addEventListener('submit', function(event) {
        const titre = document.getElementById('titre').value.trim();
        const description = document.getElementById('description').value.trim();
        const image = document.getElementById('image').value;
        const type = document.getElementById('type').value;
        const price = document.getElementById('price').value.trim();

        if (titre && description && image && type && price) {
            const confirmation = confirm(\"Tous les champs sont remplis. Voulez-vous vraiment ajouter ce menu ?\");
            if (!confirmation) {
                event.preventDefault();
            }
        } else {
            event.preventDefault();
            alert(\"Veuillez remplir tous les champs avant de soumettre le formulaire.\");
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuFirebase/add.html.twig";
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
        return array (  140 => 37,  129 => 35,  125 => 34,  102 => 14,  99 => 13,  90 => 11,  85 => 10,  76 => 8,  72 => 7,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"mb-4\">Ajouter un nouveau menu</h2>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">{{ message }}</div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}

    <form id=\"menuForm\" action=\"{{ path('firebase_menu_add') }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"card p-4 shadow-sm\">
        <div class=\"mb-3\">
            <label for=\"titre\" class=\"form-label\">Titre</label>
            <input type=\"text\" name=\"titre\" id=\"titre\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"description\" class=\"form-label\">Description</label>
            <input type=\"text\" name=\"description\" id=\"description\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"image\" class=\"form-label\">Image</label>
            <input type=\"file\" name=\"image\" id=\"image\" class=\"form-control\" accept=\"image/*\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"type\" class=\"form-label\">Type</label>
            <select name=\"type\" id=\"type\" class=\"form-select\" required>
                <option value=\"\" disabled selected>Choisir un type</option>
                {% for t in types %}
                    <option value=\"{{ t }}\">{{ t }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"mb-3\">
            <label for=\"price\" class=\"form-label\">Prix (TND)</label>
            <input type=\"number\" name=\"price\" id=\"price\" class=\"form-control\" step=\"0.01\" min=\"0\" required>
        </div>

        <button type=\"submit\" class=\"btn btn-success w-100\">Ajouter Menu</button>
    </form>
</div>

<script>
    document.getElementById('menuForm').addEventListener('submit', function(event) {
        const titre = document.getElementById('titre').value.trim();
        const description = document.getElementById('description').value.trim();
        const image = document.getElementById('image').value;
        const type = document.getElementById('type').value;
        const price = document.getElementById('price').value.trim();

        if (titre && description && image && type && price) {
            const confirmation = confirm(\"Tous les champs sont remplis. Voulez-vous vraiment ajouter ce menu ?\");
            if (!confirmation) {
                event.preventDefault();
            }
        } else {
            event.preventDefault();
            alert(\"Veuillez remplir tous les champs avant de soumettre le formulaire.\");
        }
    });
</script>
{% endblock %}
", "menuFirebase/add.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\menuFirebase\\add.html.twig");
    }
}
