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

/* gallery/index.html.twig */
class __TwigTemplate_207babc4083086c1d2d068c0e2eed5b3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

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

        yield "Galerie";
        
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
        <h2>Gestion de la Galerie</h2>
        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_new");
        yield "\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Ajouter une image
        </a>
    </div>

    ";
        // line 30
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 30, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div class=\"row g-4\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 32, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["g"]) {
                // line 33
                yield "                <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"position-relative\">
                            <img src=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 36), "html", null, true);
                yield "\" class=\"card-img-top gallery-image\" alt=\"Image galerie\">
                            ";
                // line 37
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "category", [], "any", true, true, false, 37) && CoreExtension::getAttribute($this->env, $this->source, $context["g"], "category", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "                                <span class=\"position-absolute top-0 end-0 badge bg-primary m-2\">
                                    ";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "category", [], "any", false, false, false, 39), "html", null, true);
                    yield "
                                </span>
                            ";
                }
                // line 42
                yield "                        </div>
                        <div class=\"card-body\">
                            <h6 class=\"card-title text-truncate mb-2\">
                                ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, $context["g"], "title", [], "any", true, true, false, 45)) {
                    // line 46
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "title", [], "any", false, false, false, 46), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 48
                    yield "                                    Image ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
                    yield "
                                ";
                }
                // line 50
                yield "                            </h6>
                            ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", true, true, false, 51) && CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 51))) {
                    // line 52
                    yield "                                <p class=\"card-text small text-muted mb-3\">
                                    ";
                    // line 53
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 53)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 53), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 53), "html", null, true)));
                    yield "
                                </p>
                            ";
                }
                // line 56
                yield "                            <div class=\"d-flex justify-content-center gap-2\">
                        
                                <a href=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_edit", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                   class=\"btn btn-warning btn-xs px-2 py-1\"
                                   title=\"Modifier\"
                                   style=\"font-size: 0.75rem;\">
                                    <i class=\"fas fa-edit me-1\"></i>Modifier
                                </a>
                                <form action=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_delete", ["key" => $context["key"]]), "html", null, true);
                yield "\"
                                      method=\"post\"
                                      style=\"display:inline\"
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette image ?');\">
                                    <button type=\"submit\"
                                            class=\"btn btn-danger btn-xs px-2 py-1\"
                                            title=\"Supprimer\"
                                            style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-trash me-1\"></i>Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['g'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "        </div>
    ";
        } else {
            // line 82
            yield "        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-images fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucune image dans la galerie</h5>
                    <p class=\"text-muted mb-3\">Commencez par ajouter votre première image.</p>
                    <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter une image
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 95
        yield "
    <style>
    .gallery-image {
        height: 200px;
        object-fit: cover;
    }
    .card {
        transition: transform 0.2s ease-in-out;
        border: none;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-title {
        font-size: 0.95rem;
        font-weight: 600;
    }
    .badge {
        font-size: 0.7rem;
        font-weight: 500;
    }
    .btn-xs {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
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
        return "gallery/index.html.twig";
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
        return array (  293 => 95,  283 => 88,  275 => 82,  271 => 80,  241 => 64,  232 => 58,  228 => 56,  222 => 53,  219 => 52,  217 => 51,  214 => 50,  208 => 48,  202 => 46,  200 => 45,  195 => 42,  189 => 39,  186 => 38,  184 => 37,  180 => 36,  175 => 33,  158 => 32,  155 => 31,  153 => 30,  145 => 25,  141 => 23,  138 => 21,  132 => 20,  122 => 17,  118 => 15,  114 => 13,  112 => 12,  109 => 11,  107 => 10,  104 => 9,  102 => 8,  97 => 7,  92 => 6,  87 => 5,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Galerie{% endblock %}
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
        <h2>Gestion de la Galerie</h2>
        <a href=\"{{ path('gallery_new') }}\" class=\"btn btn-primary d-flex align-items-center\">
            <i class=\"fas fa-plus me-1\"></i>Ajouter une image
        </a>
    </div>

    {% if galleries is not empty %}
        <div class=\"row g-4\">
            {% for key, g in galleries %}
                <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"position-relative\">
                            <img src=\"{{ g.image }}\" class=\"card-img-top gallery-image\" alt=\"Image galerie\">
                            {% if g.category is defined and g.category %}
                                <span class=\"position-absolute top-0 end-0 badge bg-primary m-2\">
                                    {{ g.category }}
                                </span>
                            {% endif %}
                        </div>
                        <div class=\"card-body\">
                            <h6 class=\"card-title text-truncate mb-2\">
                                {% if g.title is defined %}
                                    {{ g.title }}
                                {% else %}
                                    Image {{ loop.index }}
                                {% endif %}
                            </h6>
                            {% if g.description is defined and g.description %}
                                <p class=\"card-text small text-muted mb-3\">
                                    {{ g.description|length > 50 ? g.description|slice(0, 50) ~ '...' : g.description }}
                                </p>
                            {% endif %}
                            <div class=\"d-flex justify-content-center gap-2\">
                        
                                <a href=\"{{ path('gallery_edit', {key: key}) }}\"
                                   class=\"btn btn-warning btn-xs px-2 py-1\"
                                   title=\"Modifier\"
                                   style=\"font-size: 0.75rem;\">
                                    <i class=\"fas fa-edit me-1\"></i>Modifier
                                </a>
                                <form action=\"{{ path('gallery_delete', {key: key}) }}\"
                                      method=\"post\"
                                      style=\"display:inline\"
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette image ?');\">
                                    <button type=\"submit\"
                                            class=\"btn btn-danger btn-xs px-2 py-1\"
                                            title=\"Supprimer\"
                                            style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-trash me-1\"></i>Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"text-center mt-4\">
            <div class=\"card\">
                <div class=\"card-body py-5\">
                    <i class=\"fas fa-images fa-3x text-muted mb-3\"></i>
                    <h5 class=\"text-muted\">Aucune image dans la galerie</h5>
                    <p class=\"text-muted mb-3\">Commencez par ajouter votre première image.</p>
                    <a href=\"{{ path('gallery_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter une image
                    </a>
                </div>
            </div>
        </div>
    {% endif %}

    <style>
    .gallery-image {
        height: 200px;
        object-fit: cover;
    }
    .card {
        transition: transform 0.2s ease-in-out;
        border: none;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-title {
        font-size: 0.95rem;
        font-weight: 600;
    }
    .badge {
        font-size: 0.7rem;
        font-weight: 500;
    }
    .btn-xs {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
    }
    .gap-2 {
        gap: 0.5rem;
    }
    </style>
{% endblock %}
", "gallery/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\gallery\\index.html.twig");
    }
}
