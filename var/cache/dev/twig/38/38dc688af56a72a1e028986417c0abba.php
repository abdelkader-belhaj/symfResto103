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

/* chefs/index.html.twig */
class __TwigTemplate_0e7dd3a390d11780f296bde0f616b9cd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chefs/index.html.twig"));

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

        yield "Liste des Chefs";
        
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2>Gestion des Chefs</h2>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_create");
        yield "\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Ajouter un chef
        </a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Titre</th>
                        <th style=\"width: 180px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chefs"]) || array_key_exists("chefs", $context) ? $context["chefs"] : (function () { throw new RuntimeError('Variable "chefs" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["chef"]) {
            // line 26
            yield "                        <tr>
                            <td>
                                ";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 29), "html", null, true);
                yield "\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit:cover;\">
                                ";
            } else {
                // line 31
                yield "                                    <span class=\"text-muted\">Aucune image</span>
                                ";
            }
            // line 33
            yield "                            </td>
                            <td class=\"fw-bold\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"d-flex justify-content-start gap-2\">
                                    <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-warning btn-xs px-2 py-1\"
                                       title=\"Modifier\"
                                       style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-edit me-1\"></i>Modifier
                                    </a>
                                    <form method=\"post\" 
                                          action=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" 
                                          style=\"display:inline;\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-xs px-2 py-1\"
                                                title=\"Supprimer\"
                                                style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-trash me-1\"></i>Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucun chef trouvé.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['chef'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </tbody>
            </table>
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
        return "chefs/index.html.twig";
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
        return array (  184 => 63,  175 => 59,  173 => 58,  155 => 45,  145 => 38,  139 => 35,  135 => 34,  132 => 33,  128 => 31,  120 => 29,  118 => 28,  114 => 26,  109 => 25,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Liste des Chefs{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2>Gestion des Chefs</h2>
        <a href=\"{{ path('chefs_create') }}\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Ajouter un chef
        </a>
    </div>
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Titre</th>
                        <th style=\"width: 180px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for key, chef in chefs %}
                        <tr>
                            <td>
                                {% if chef.image %}
                                    <img src=\"{{ chef.image }}\" alt=\"Photo de {{ chef.nom }}\" class=\"rounded-circle\" width=\"60\" height=\"60\" style=\"object-fit:cover;\">
                                {% else %}
                                    <span class=\"text-muted\">Aucune image</span>
                                {% endif %}
                            </td>
                            <td class=\"fw-bold\">{{ chef.nom }}</td>
                            <td>{{ chef.titre }}</td>
                            <td>
                                <div class=\"d-flex justify-content-start gap-2\">
                                    <a href=\"{{ path('chefs_edit', {'key': key}) }}\" 
                                       class=\"btn btn-warning btn-xs px-2 py-1\"
                                       title=\"Modifier\"
                                       style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-edit me-1\"></i>Modifier
                                    </a>
                                    <form method=\"post\" 
                                          action=\"{{ path('chefs_delete', {'key': key}) }}\" 
                                          style=\"display:inline;\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-xs px-2 py-1\"
                                                title=\"Supprimer\"
                                                style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-trash me-1\"></i>Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucun chef trouvé.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "chefs/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\chefs\\index.html.twig");
    }
}
