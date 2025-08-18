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

/* special/index.html.twig */
class __TwigTemplate_ed0d668b0f2ea9016d730ba32c14ef9d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "special/index.html.twig"));

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
        <h2>Gestion des Specials</h2>
        <div>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_new");
        yield "\" class=\"btn btn-primary me-2 d-flex align-items-center\">
                <i class=\"fas fa-plus me-1\"></i> <span>Créer un special</span>
            </a>
           
        </div>
    </div>

    ";
        // line 33
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 33, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "        <div class=\"card\">
            <div class=\"card-body p-0\">
                <table class=\"table align-items-center justify-content-center mb-0\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Image</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Sous-titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["special"]) {
                // line 47
                yield "                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 align-items-center\">
                                        <div class=\"me-3\">
                                            ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", true, true, false, 51) && CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 51))) {
                    // line 52
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" class=\"menu-image\" alt=\"Special Image\">
                                            ";
                } else {
                    // line 54
                    yield "                                                <div class=\"menu-placeholder d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                    ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 56), 0, 1)), "html", null, true);
                    yield "
                                                </div>
                                            ";
                }
                // line 59
                yield "                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class=\"mb-0 text-sm\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 63), "html", null, true);
                yield "</h6>
                                </td>
                                <td>
                                    ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", true, true, false, 66) && CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 66))) {
                    // line 67
                    yield "                                        <p class=\"text-sm mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 67), "html", null, true);
                    yield "</p>
                                    ";
                } else {
                    // line 69
                    yield "                                        <span class=\"text-muted text-xs\">Non spécifié</span>
                                    ";
                }
                // line 71
                yield "                                </td>
                                <td class=\"align-middle text-center\">
                                    <div class=\"d-flex justify-content-center gap-2\">
                                        <a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_show", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                           class=\"btn btn-info btn-xs px-2 py-1\"
                                           title=\"Afficher\"
                                           style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-eye me-1\"></i>Voir
                                        </a>
                                        <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                           class=\"btn btn-warning btn-xs px-2 py-1\"
                                           title=\"Modifier\"
                                           style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-edit me-1\"></i>Modifier
                                        </a>
                                        <form method=\"POST\"
                                              action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                              style=\"display: inline;\"
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce special ?');\">
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
            unset($context['_seq'], $context['key'], $context['special'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                    </tbody>
                </table>
            </div>
        </div>
    ";
        } else {
            // line 106
            yield "        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-star fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun special trouvé</h5>
                    <p class=\"text-muted mb-3\">Commencez par créer un nouveau special.</p>
                    <a href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("special_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Créer un special
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 119
        yield "
    <style>
    .menu-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 8px;
    }
    .table th {
        border-bottom: 1px solid #e9ecef;
        font-weight: 600;
    }
    .gap-2 {
        gap: 0.5rem;
    }
    .btn-info:hover, .btn-warning:hover, .btn-danger:hover, .btn-primary:hover, .btn-outline-secondary:hover {
        filter: brightness(0.95);
        opacity: 0.9;
        transition: 0.2s;
    }
    .btn span {
        font-weight: 500;
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
        return "special/index.html.twig";
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
        return array (  275 => 119,  265 => 112,  257 => 106,  250 => 101,  230 => 87,  220 => 80,  211 => 74,  206 => 71,  202 => 69,  196 => 67,  194 => 66,  188 => 63,  182 => 59,  176 => 56,  172 => 54,  166 => 52,  164 => 51,  158 => 47,  154 => 46,  140 => 34,  138 => 33,  128 => 26,  123 => 23,  120 => 21,  114 => 20,  104 => 17,  100 => 15,  96 => 13,  94 => 12,  91 => 11,  89 => 10,  86 => 9,  84 => 8,  79 => 7,  74 => 6,  69 => 5,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

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
        <h2>Gestion des Specials</h2>
        <div>
            <a href=\"{{ path('special_new') }}\" class=\"btn btn-primary me-2 d-flex align-items-center\">
                <i class=\"fas fa-plus me-1\"></i> <span>Créer un special</span>
            </a>
           
        </div>
    </div>

    {% if specials is not empty %}
        <div class=\"card\">
            <div class=\"card-body p-0\">
                <table class=\"table align-items-center justify-content-center mb-0\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Image</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Sous-titre</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key, special in specials %}
                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 align-items-center\">
                                        <div class=\"me-3\">
                                            {% if special.image is defined and special.image %}
                                                <img src=\"{{ special.image }}\" class=\"menu-image\" alt=\"Special Image\">
                                            {% else %}
                                                <div class=\"menu-placeholder d-flex align-items-center justify-content-center\"
                                                     style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                    {{ special.title|slice(0, 1)|upper }}
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class=\"mb-0 text-sm\">{{ special.title }}</h6>
                                </td>
                                <td>
                                    {% if special.sousTitre is defined and special.sousTitre %}
                                        <p class=\"text-sm mb-0\">{{ special.sousTitre }}</p>
                                    {% else %}
                                        <span class=\"text-muted text-xs\">Non spécifié</span>
                                    {% endif %}
                                </td>
                                <td class=\"align-middle text-center\">
                                    <div class=\"d-flex justify-content-center gap-2\">
                                        <a href=\"{{ path('special_show', {'key': key}) }}\"
                                           class=\"btn btn-info btn-xs px-2 py-1\"
                                           title=\"Afficher\"
                                           style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-eye me-1\"></i>Voir
                                        </a>
                                        <a href=\"{{ path('special_edit', {'key': key}) }}\"
                                           class=\"btn btn-warning btn-xs px-2 py-1\"
                                           title=\"Modifier\"
                                           style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-edit me-1\"></i>Modifier
                                        </a>
                                        <form method=\"POST\"
                                              action=\"{{ path('special_delete', {'key': key}) }}\"
                                              style=\"display: inline;\"
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce special ?');\">
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
    {% else %}
        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-star fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucun special trouvé</h5>
                    <p class=\"text-muted mb-3\">Commencez par créer un nouveau special.</p>
                    <a href=\"{{ path('special_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Créer un special
                    </a>
                </div>
            </div>
        </div>
    {% endif %}

    <style>
    .menu-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 8px;
    }
    .table th {
        border-bottom: 1px solid #e9ecef;
        font-weight: 600;
    }
    .gap-2 {
        gap: 0.5rem;
    }
    .btn-info:hover, .btn-warning:hover, .btn-danger:hover, .btn-primary:hover, .btn-outline-secondary:hover {
        filter: brightness(0.95);
        opacity: 0.9;
        transition: 0.2s;
    }
    .btn span {
        font-weight: 500;
    }
    </style>
{% endblock %}
", "special/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\special\\index.html.twig");
    }
}
