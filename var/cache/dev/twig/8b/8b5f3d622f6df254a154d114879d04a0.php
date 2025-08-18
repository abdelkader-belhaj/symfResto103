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

/* tableFirebase/index.html.twig */
class __TwigTemplate_5da83fc49b2ba05cede3750d5b1f6b75 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tableFirebase/index.html.twig"));

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

        yield "Liste des Réservations";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h2 class=\"mb-1\">Gestion des Réservations</h2>
            <p class=\"text-muted mb-0\">Gérez toutes vos réservations de table</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus-circle me-2\"></i>
            Nouvelle réservation
        </a>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"border-top-0 px-4 py-3\">Client</th>
                            <th class=\"border-top-0 py-3\">Contact</th>
                            <th class=\"border-top-0 py-3\">Réservation</th>
                            <th class=\"border-top-0 py-3\">Personnes</th>
                            <th class=\"border-top-0 py-3\">Message</th>
                            <th class=\"border-top-0 py-3 text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["table"]) {
            // line 34
            yield "                        <tr>
                            <td class=\"px-4 py-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar-circle bg-primary text-white me-3\">
                                        ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["table"], "name", [], "any", false, false, false, 38), 0, 1)), "html", null, true);
            yield "
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "name", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "name", [], "any", false, false, false, 41), "N/A")) : ("N/A")), "html", null, true);
            yield "</h6>
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <div>
                                    <div class=\"small text-muted mb-1\">
                                        <i class=\"fas fa-envelope me-1\"></i>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "email", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "email", [], "any", false, false, false, 48), "N/A")) : ("N/A")), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-phone me-1\"></i>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "tel", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "tel", [], "any", false, false, false, 51), "N/A")) : ("N/A")), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <div class=\"small\">
                                    <div class=\"mb-1\">
                                        <i class=\"far fa-calendar me-1\"></i>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "date", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "date", [], "any", false, false, false, 58), "N/A")) : ("N/A")), "html", null, true);
            yield "
                                    </div>
                                    <div>
                                        <i class=\"far fa-clock me-1\"></i>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "time", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "time", [], "any", false, false, false, 61), "N/A")) : ("N/A")), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <span class=\"badge bg-info\">
                                    <i class=\"fas fa-users me-1\"></i>
                                    ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "numberPeople", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "numberPeople", [], "any", false, false, false, 68), "0")) : ("0")), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td class=\"py-3\">
                                <div class=\"text-truncate\" style=\"max-width: 200px;\" title=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "message", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "message", [], "any", false, false, false, 72), "Aucun message")) : ("Aucun message")), "html", null, true);
            yield "\">
                                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "message", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "message", [], "any", false, false, false, 73), "Aucun message")) : ("Aucun message")), "html", null, true);
            yield "
                                </div>
                            </td>
                            <td class=\"text-end pe-4 py-3\">
                                <div class=\"d-flex gap-2 justify-content-end\">
                                    <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_edit", ["key" => $context["key"]]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-warning btn-sm d-flex align-items-center\">
                                        <i class=\"fas fa-edit me-2\"></i>
                                        <span>Modifier</span>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" 
                                          class=\"d-inline\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . $context["key"])), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm d-flex align-items-center\">
                                            <i class=\"fas fa-trash-alt me-2\"></i>
                                            <span>Supprimer</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 95
        if (!$context['_iterated']) {
            // line 96
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                <i class=\"fas fa-calendar-times fa-3x mb-3\"></i>
                                <p class=\"mb-0\">Aucune réservation trouvée</p>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['table'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
}

.card {
    border: none;
    border-radius: 10px;
}

.table th {
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #f0f0f0;
}

.btn-light:hover {
    background-color: #e9ecef;
    border-color: #e9ecef;
}

.table-hover tbody tr:hover {
    background-color: #f8f9fa;
}

.badge {
    padding: 0.5em 0.8em;
    font-weight: 500;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
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
        return "tableFirebase/index.html.twig";
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
        return array (  237 => 103,  225 => 96,  223 => 95,  209 => 86,  203 => 83,  195 => 78,  187 => 73,  183 => 72,  176 => 68,  166 => 61,  160 => 58,  150 => 51,  144 => 48,  134 => 41,  128 => 38,  122 => 34,  117 => 33,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h2 class=\"mb-1\">Gestion des Réservations</h2>
            <p class=\"text-muted mb-0\">Gérez toutes vos réservations de table</p>
        </div>
        <a href=\"{{ path('firebase_table_new') }}\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus-circle me-2\"></i>
            Nouvelle réservation
        </a>
    </div>

    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"border-top-0 px-4 py-3\">Client</th>
                            <th class=\"border-top-0 py-3\">Contact</th>
                            <th class=\"border-top-0 py-3\">Réservation</th>
                            <th class=\"border-top-0 py-3\">Personnes</th>
                            <th class=\"border-top-0 py-3\">Message</th>
                            <th class=\"border-top-0 py-3 text-end pe-4\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for key, table in tables %}
                        <tr>
                            <td class=\"px-4 py-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar-circle bg-primary text-white me-3\">
                                        {{ table.name|slice(0,1)|upper }}
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\">{{ table.name|default('N/A') }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <div>
                                    <div class=\"small text-muted mb-1\">
                                        <i class=\"fas fa-envelope me-1\"></i>{{ table.email|default('N/A') }}
                                    </div>
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-phone me-1\"></i>{{ table.tel|default('N/A') }}
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <div class=\"small\">
                                    <div class=\"mb-1\">
                                        <i class=\"far fa-calendar me-1\"></i>{{ table.date|default('N/A') }}
                                    </div>
                                    <div>
                                        <i class=\"far fa-clock me-1\"></i>{{ table.time|default('N/A') }}
                                    </div>
                                </div>
                            </td>
                            <td class=\"py-3\">
                                <span class=\"badge bg-info\">
                                    <i class=\"fas fa-users me-1\"></i>
                                    {{ table.numberPeople|default('0') }}
                                </span>
                            </td>
                            <td class=\"py-3\">
                                <div class=\"text-truncate\" style=\"max-width: 200px;\" title=\"{{ table.message|default('Aucun message') }}\">
                                    {{ table.message|default('Aucun message') }}
                                </div>
                            </td>
                            <td class=\"text-end pe-4 py-3\">
                                <div class=\"d-flex gap-2 justify-content-end\">
                                    <a href=\"{{ path('firebase_table_edit', {'key': key}) }}\" 
                                       class=\"btn btn-warning btn-sm d-flex align-items-center\">
                                        <i class=\"fas fa-edit me-2\"></i>
                                        <span>Modifier</span>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('firebase_table_delete', {'key': key}) }}\" 
                                          class=\"d-inline\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ key) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm d-flex align-items-center\">
                                            <i class=\"fas fa-trash-alt me-2\"></i>
                                            <span>Supprimer</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5 text-muted\">
                                <i class=\"fas fa-calendar-times fa-3x mb-3\"></i>
                                <p class=\"mb-0\">Aucune réservation trouvée</p>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
}

.card {
    border: none;
    border-radius: 10px;
}

.table th {
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-light {
    background-color: #f8f9fa;
    border-color: #f0f0f0;
}

.btn-light:hover {
    background-color: #e9ecef;
    border-color: #e9ecef;
}

.table-hover tbody tr:hover {
    background-color: #f8f9fa;
}

.badge {
    padding: 0.5em 0.8em;
    font-weight: 500;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
{% endblock %}", "tableFirebase/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\tableFirebase\\index.html.twig");
    }
}
