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

/* contacts/show.html.twig */
class __TwigTemplate_7cfc24620b29ec1a012ece676f4bfcc9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/show.html.twig"));

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

        yield "Détails du Contact";
        
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
        yield "    ";
        // line 7
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mb-3\" role=\"alert\">
                ";
                // line 10
                if (($context["label"] == "success")) {
                    // line 11
                    yield "                    <i class=\"fas fa-check-circle me-2\"></i>
                ";
                } elseif ((                // line 12
$context["label"] == "warning")) {
                    // line 13
                    yield "                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                ";
                } elseif ((                // line 14
$context["label"] == "danger")) {
                    // line 15
                    yield "                    <i class=\"fas fa-times-circle me-2\"></i>
                ";
                } else {
                    // line 17
                    yield "                    <i class=\"fas fa-info-circle me-2\"></i>
                ";
                }
                // line 19
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Détails du Contact</h2>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_index");
        yield "\" class=\"btn btn-secondary d-flex align-items-center\">
                <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
            </a>
        </div>

        <div class=\"row\">
            <div class=\"col-12 col-xl-8\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex align-items-center\">
                            <h5 class=\"mb-0\">Informations du Contact</h5>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Nom</label>
                                    <p class=\"form-control-static mb-3 text-sm\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Email</label>
                                    <p class=\"form-control-static mb-3 text-sm\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Sujet</label>
                                    <p class=\"form-control-static mb-3 text-sm\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 56, $this->source); })()), "subject", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Message</label>
                                    <div class=\"p-3 bg-light rounded mb-3\">
                                        <p class=\"text-sm mb-0\">";
        // line 63
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 63, $this->source); })()), "message", [], "any", false, false, false, 63), "html", null, true));
        yield "</p>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "date", [], "any", true, true, false, 67)) {
            // line 68
            yield "                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Date de contact</label>
                                    <p class=\"form-control-static mb-3 text-sm\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 71, $this->source); })()), "date", [], "any", false, false, false, 71), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            ";
        }
        // line 75
        yield "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h5 class=\"mb-0\">Actions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex flex-column gap-2\">
                            <a href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 86, $this->source); })())]), "html", null, true);
        yield "\" 
                               class=\"btn btn-warning w-100 mb-0 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-edit me-2\"></i>Modifier
                            </a>
                            <form method=\"post\" 
                                  action=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_delete", ["key" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 91, $this->source); })())]), "html", null, true);
        yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
                                <button type=\"submit\" class=\"btn btn-danger w-100 mb-0 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-trash me-2\"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .form-control-label {
        margin-bottom: 0.5rem;
        display: block;
    }
    .form-control-static {
        font-weight: 500;
    }
    .card {
        margin-bottom: 1.5rem;
    }
    .bg-light {
        background-color: #f8f9fa !important;
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
        return "contacts/show.html.twig";
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
        return array (  234 => 91,  226 => 86,  213 => 75,  206 => 71,  201 => 68,  199 => 67,  192 => 63,  182 => 56,  173 => 50,  164 => 44,  143 => 26,  138 => 23,  132 => 22,  122 => 19,  118 => 17,  114 => 15,  112 => 14,  109 => 13,  107 => 12,  104 => 11,  102 => 10,  97 => 9,  92 => 8,  87 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Détails du Contact{% endblock %}

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
    <div class=\"container-fluid py-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Détails du Contact</h2>
            <a href=\"{{ path('contact_index') }}\" class=\"btn btn-secondary d-flex align-items-center\">
                <i class=\"fas fa-arrow-left me-1\"></i>Retour à la liste
            </a>
        </div>

        <div class=\"row\">
            <div class=\"col-12 col-xl-8\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex align-items-center\">
                            <h5 class=\"mb-0\">Informations du Contact</h5>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Nom</label>
                                    <p class=\"form-control-static mb-3 text-sm\">{{ contact.name }}</p>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Email</label>
                                    <p class=\"form-control-static mb-3 text-sm\">{{ contact.email }}</p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Sujet</label>
                                    <p class=\"form-control-static mb-3 text-sm\">{{ contact.subject }}</p>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Message</label>
                                    <div class=\"p-3 bg-light rounded mb-3\">
                                        <p class=\"text-sm mb-0\">{{ contact.message|nl2br }}</p>
                                    </div>
                                </div>
                            </div>
                            {% if contact.date is defined %}
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label text-uppercase text-xxs font-weight-bolder opacity-7\">Date de contact</label>
                                    <p class=\"form-control-static mb-3 text-sm\">{{ contact.date|date('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h5 class=\"mb-0\">Actions</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex flex-column gap-2\">
                            <a href=\"{{ path('contact_edit', {'key': key}) }}\" 
                               class=\"btn btn-warning w-100 mb-0 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-edit me-2\"></i>Modifier
                            </a>
                            <form method=\"post\" 
                                  action=\"{{ path('contact_delete', {'key': key}) }}\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');\">
                                <button type=\"submit\" class=\"btn btn-danger w-100 mb-0 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-trash me-2\"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .form-control-label {
        margin-bottom: 0.5rem;
        display: block;
    }
    .form-control-static {
        font-weight: 500;
    }
    .card {
        margin-bottom: 1.5rem;
    }
    .bg-light {
        background-color: #f8f9fa !important;
    }
    </style>
{% endblock %}
", "contacts/show.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\contacts\\show.html.twig");
    }
}
