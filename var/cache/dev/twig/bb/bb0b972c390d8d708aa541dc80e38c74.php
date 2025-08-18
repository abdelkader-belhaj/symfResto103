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

/* contacts/index.html.twig */
class __TwigTemplate_d50242b10fc0f523a21610d6f9d8851d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

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

        yield "Liste des Contacts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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
        yield "    ";
        // line 5
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\" role=\"alert\">
                ";
                // line 8
                if (($context["label"] == "success")) {
                    // line 9
                    yield "                    <i class=\"fas fa-check-circle me-2\"></i>
                ";
                } elseif ((                // line 10
$context["label"] == "warning")) {
                    // line 11
                    yield "                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                ";
                } elseif ((                // line 12
$context["label"] == "danger")) {
                    // line 13
                    yield "                    <i class=\"fas fa-times-circle me-2\"></i>
                ";
                } else {
                    // line 15
                    yield "                    <i class=\"fas fa-info-circle me-2\"></i>
                ";
                }
                // line 17
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    ";
        // line 23
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2>Gestion des Contacts</h2>
        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Nouveau Contact
        </a>
    </div>

    ";
        // line 30
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 30, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div class=\"card\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table align-items-center mb-0\">
                        <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Contact</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Email</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Date</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Statut</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center\" style=\"min-width: 140px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["contact"]) {
                // line 46
                yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex px-3 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 50), "html", null, true);
                yield "</h6>
                                                ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", true, true, false, 51)) {
                    // line 52
                    yield "                                                    <p class=\"text-xs text-secondary mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 52), "html", null, true);
                    yield "</p>
                                                ";
                }
                // line 54
                yield "                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-sm mb-0\">";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 58), "html", null, true);
                yield "</p>
                                    </td>
                                    <td>
                                        <p class=\"text-sm mb-0\">
                                            ";
                // line 62
                if (CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "date", [], "any", true, true, false, 62)) {
                    // line 63
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "date", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 65
                    yield "                                                -
                                            ";
                }
                // line 67
                yield "                                        </p>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-success\">Nouveau</span>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <div class=\"d-flex justify-content-center gap-2\">
                                            <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                               class=\"btn btn-info btn-xs px-2 py-1\"
                                               title=\"Voir\"
                                               style=\"font-size: 0.75rem;\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                               class=\"btn btn-warning btn-xs px-2 py-1\"
                                               title=\"Modifier\"
                                               style=\"font-size: 0.75rem;\">
                                                <i class=\"fas fa-edit me-1\"></i>Modifier
                                            </a>
                                            <form method=\"post\" 
                                                  action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\" 
                                                  style=\"display:inline;\" 
                                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 107
            yield "        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-envelope fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun contact trouvé</h5>
                    <p class=\"text-muted mb-3\">Il n'y a pas encore de contacts enregistrés.</p>
                    <a href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter un contact
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 120
        yield "
    <style>
    .badge {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 5px 10px;
    }
    .btn-xs {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
    .table th {
        font-size: 0.65rem;
        font-weight: 700;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        letter-spacing: 0.05rem;
        text-transform: uppercase;
        border-bottom: 1px solid #e9ecef;
    }
    .table td {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #e9ecef;
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
        return "contacts/index.html.twig";
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
        return array (  292 => 120,  282 => 113,  274 => 107,  266 => 101,  246 => 87,  236 => 80,  227 => 74,  218 => 67,  214 => 65,  208 => 63,  206 => 62,  199 => 58,  193 => 54,  187 => 52,  185 => 51,  181 => 50,  175 => 46,  171 => 45,  155 => 31,  153 => 30,  145 => 25,  141 => 23,  138 => 21,  132 => 20,  122 => 17,  118 => 15,  114 => 13,  112 => 12,  109 => 11,  107 => 10,  104 => 9,  102 => 8,  97 => 7,  92 => 6,  87 => 5,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Liste des Contacts{% endblock %}
{% block body %}
    {# Flash messages #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} mb-3\" role=\"alert\">
                {% if label == 'success' %}
                    <i class=\"fas fa-check-circle me-2\"></i>
                {% elseif label == 'warning' %}
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                {% elseif label == 'danger' %}
                    <i class=\"fas fa-times-circle me-2\"></i>
                {% else %}
                    <i class=\"fas fa-info-circle me-2\"></i>
                {% endif %}
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {# Header avec bouton d'ajout #}
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2>Gestion des Contacts</h2>
        <a href=\"{{ path('contact_new') }}\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Nouveau Contact
        </a>
    </div>

    {% if contacts is not empty %}
        <div class=\"card\">
            <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                    <table class=\"table align-items-center mb-0\">
                        <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Contact</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Email</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Date</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Statut</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center\" style=\"min-width: 140px;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for key, contact in contacts %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex px-3 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">{{ contact.name }}</h6>
                                                {% if contact.phone is defined %}
                                                    <p class=\"text-xs text-secondary mb-0\">{{ contact.phone }}</p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-sm mb-0\">{{ contact.email }}</p>
                                    </td>
                                    <td>
                                        <p class=\"text-sm mb-0\">
                                            {% if contact.date is defined %}
                                                {{ contact.date|date('d/m/Y') }}
                                            {% else %}
                                                -
                                            {% endif %}
                                        </p>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-success\">Nouveau</span>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <div class=\"d-flex justify-content-center gap-2\">
                                            <a href=\"{{ path('contact_show', { key: key }) }}\"
                                               class=\"btn btn-info btn-xs px-2 py-1\"
                                               title=\"Voir\"
                                               style=\"font-size: 0.75rem;\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <a href=\"{{ path('contact_edit', { key: key }) }}\"
                                               class=\"btn btn-warning btn-xs px-2 py-1\"
                                               title=\"Modifier\"
                                               style=\"font-size: 0.75rem;\">
                                                <i class=\"fas fa-edit me-1\"></i>Modifier
                                            </a>
                                            <form method=\"post\" 
                                                  action=\"{{ path('contact_delete', { key: key }) }}\" 
                                                  style=\"display:inline;\" 
                                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
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
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-envelope fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun contact trouvé</h5>
                    <p class=\"text-muted mb-3\">Il n'y a pas encore de contacts enregistrés.</p>
                    <a href=\"{{ path('contact_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter un contact
                    </a>
                </div>
            </div>
        </div>
    {% endif %}

    <style>
    .badge {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 5px 10px;
    }
    .btn-xs {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
    .table th {
        font-size: 0.65rem;
        font-weight: 700;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        letter-spacing: 0.05rem;
        text-transform: uppercase;
        border-bottom: 1px solid #e9ecef;
    }
    .table td {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #e9ecef;
    }
    </style>
{% endblock %}
", "contacts/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\contacts\\index.html.twig");
    }
}
