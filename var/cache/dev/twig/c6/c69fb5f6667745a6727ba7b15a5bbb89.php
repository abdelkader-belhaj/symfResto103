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

/* menuFirebase/index.html.twig */
class __TwigTemplate_ac54338ddedfe20cc4ace4c5d21b8f47 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menuFirebase/index.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\" role=\"alert\">
            ";
                // line 7
                if (($context["label"] == "success")) {
                    // line 8
                    yield "                <i class=\"fas fa-check-circle me-2\"></i>
            ";
                } elseif ((                // line 9
$context["label"] == "warning")) {
                    // line 10
                    yield "                <i class=\"fas fa-exclamation-triangle me-2\"></i>
            ";
                } elseif ((                // line 11
$context["label"] == "danger")) {
                    // line 12
                    yield "                <i class=\"fas fa-times-circle me-2\"></i>
            ";
                } else {
                    // line 14
                    yield "                <i class=\"fas fa-info-circle me-2\"></i>
            ";
                }
                // line 16
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h2>Gestion des Menus</h2>
    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
        yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
    </a>
</div>

";
        // line 28
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 28, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "    <div class=\"card\">
        <div class=\"card-body p-0\">
            <table class=\"table align-items-center justify-content-center mb-0\">
                <thead>
                    <tr>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Menu</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Type</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Description</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prix</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 43
                yield "                        <tr>
                            <td>
                                <div class=\"d-flex px-2 align-items-center\">
                                    <div class=\"me-3\">
                                        ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 48), "html", null, true);
                    yield "\" class=\"menu-image\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 48), "html", null, true);
                    yield "\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 8px;\">
                                        ";
                } else {
                    // line 50
                    yield "                                            <div class=\"menu-placeholder d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                ";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 52), 0, 1)), "html", null, true);
                    yield "
                                            </div>
                                        ";
                }
                // line 55
                yield "                                    </div>
                                    <div class=\"my-auto\">
                                        <h6 class=\"mb-0 text-sm\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 57), "html", null, true);
                yield "</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                ";
                // line 62
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                                    <span class=\"badge bg-primary text-xs font-weight-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
                                ";
                } else {
                    // line 65
                    yield "                                    <span class=\"text-muted text-xs\">Non spécifié</span>
                                ";
                }
                // line 67
                yield "                            </td>
                            <td>
                                <p class=\"text-sm mb-0\">
                                    ";
                // line 70
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 71
                    yield "                                        ";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 71)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 71), 0, 80) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 71), "html", null, true)));
                    yield "
                                    ";
                } else {
                    // line 73
                    yield "                                        <span class=\"text-muted\">Aucune description</span>
                                    ";
                }
                // line 75
                yield "                                </p>
                            </td>
                            <td>
                                ";
                // line 78
                if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "price", [], "any", true, true, false, 78)) {
                    // line 79
                    yield "                                    <span class=\"text-sm\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "price", [], "any", false, false, false, 79), 2, ".", " "), "html", null, true);
                    yield " TND</span>
                                ";
                } else {
                    // line 81
                    yield "                                    <span class=\"text-muted text-sm\">—</span>
                                ";
                }
                // line 83
                yield "                            </td>
                            <td class=\"align-middle text-center\">
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-warning btn-xs px-2 py-1\" 
                                       title=\"Modifier\"
                                       style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-edit me-1\"></i>
                                        Modifier
                                    </a>
                                    <form method=\"POST\" 
                                          action=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\" 
                                          style=\"display: inline;\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer le menu « ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 96), "html", null, true);
                yield " » ?');\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-xs px-2 py-1\" 
                                                title=\"Supprimer\"
                                                style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-trash me-1\"></i>
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['menu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                </tbody>
            </table>
        </div>
    </div>
";
        } else {
            // line 114
            yield "    <div class=\"text-center mt-4\">
        <div class=\"card\">
            <div class=\"card-body py-5\">
                <i class=\"fas fa-utensils fa-3x text-muted mb-3\"></i>
                <h5 class=\"text-muted\">Aucun menu trouvé</h5>
                <p class=\"text-muted mb-3\">Commencez par ajouter votre premier menu.</p>
                <a href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_menu_add");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 127
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
        return "menuFirebase/index.html.twig";
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
        return array (  301 => 127,  291 => 120,  283 => 114,  276 => 109,  257 => 96,  252 => 94,  241 => 86,  236 => 83,  232 => 81,  226 => 79,  224 => 78,  219 => 75,  215 => 73,  209 => 71,  207 => 70,  202 => 67,  198 => 65,  192 => 63,  190 => 62,  182 => 57,  178 => 55,  172 => 52,  168 => 50,  160 => 48,  158 => 47,  152 => 43,  148 => 42,  133 => 29,  131 => 28,  123 => 23,  118 => 20,  104 => 16,  100 => 14,  96 => 12,  94 => 11,  91 => 10,  89 => 9,  86 => 8,  84 => 7,  79 => 6,  74 => 5,  70 => 4,  67 => 3,  57 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}

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

<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h2>Gestion des Menus</h2>
    <a href=\"{{ path('firebase_menu_add') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
    </a>
</div>

{% if menus is not empty %}
    <div class=\"card\">
        <div class=\"card-body p-0\">
            <table class=\"table align-items-center justify-content-center mb-0\">
                <thead>
                    <tr>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Menu</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Type</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Description</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prix</th>
                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2\" style=\"min-width: 120px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for key, menu in menus %}
                        <tr>
                            <td>
                                <div class=\"d-flex px-2 align-items-center\">
                                    <div class=\"me-3\">
                                        {% if menu.image %}
                                            <img src=\"{{ menu.image }}\" class=\"menu-image\" alt=\"{{ menu.titre }}\" style=\"width: 50px; height: 50px; object-fit: cover; border-radius: 8px;\">
                                        {% else %}
                                            <div class=\"menu-placeholder d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 50px; height: 50px; background-color: #6c757d; color: white; border-radius: 8px; font-weight: bold;\">
                                                {{ menu.titre|slice(0, 1)|upper }}
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"my-auto\">
                                        <h6 class=\"mb-0 text-sm\">{{ menu.titre }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {% if menu.type %}
                                    <span class=\"badge bg-primary text-xs font-weight-bold\">{{ menu.type }}</span>
                                {% else %}
                                    <span class=\"text-muted text-xs\">Non spécifié</span>
                                {% endif %}
                            </td>
                            <td>
                                <p class=\"text-sm mb-0\">
                                    {% if menu.description %}
                                        {{ menu.description|length > 80 ? menu.description|slice(0, 80) ~ '...' : menu.description }}
                                    {% else %}
                                        <span class=\"text-muted\">Aucune description</span>
                                    {% endif %}
                                </p>
                            </td>
                            <td>
                                {% if menu.price is defined %}
                                    <span class=\"text-sm\">{{ menu.price|number_format(2, '.', ' ') }} TND</span>
                                {% else %}
                                    <span class=\"text-muted text-sm\">—</span>
                                {% endif %}
                            </td>
                            <td class=\"align-middle text-center\">
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"{{ path('firebase_menu_edit', {'key': key}) }}\" 
                                       class=\"btn btn-warning btn-xs px-2 py-1\" 
                                       title=\"Modifier\"
                                       style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-edit me-1\"></i>
                                        Modifier
                                    </a>
                                    <form method=\"POST\" 
                                          action=\"{{ path('firebase_menu_delete', {'key': key}) }}\" 
                                          style=\"display: inline;\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer le menu « {{ menu.titre }} » ?');\">
                                        <button type=\"submit\" 
                                                class=\"btn btn-danger btn-xs px-2 py-1\" 
                                                title=\"Supprimer\"
                                                style=\"font-size: 0.75rem;\">
                                            <i class=\"fas fa-trash me-1\"></i>
                                            Supprimer
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
                <i class=\"fas fa-utensils fa-3x text-muted mb-3\"></i>
                <h5 class=\"text-muted\">Aucun menu trouvé</h5>
                <p class=\"text-muted mb-3\">Commencez par ajouter votre premier menu.</p>
                <a href=\"{{ path('firebase_menu_add') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter un menu
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
</style>

{% endblock %}
", "menuFirebase/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\menuFirebase\\index.html.twig");
    }
}
