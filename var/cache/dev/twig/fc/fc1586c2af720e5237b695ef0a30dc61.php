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

/* auth/register.html.twig */
class __TwigTemplate_1ecc50bf3698a66cad931c47b2ebef15 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "baseLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent = $this->load("baseLogin.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "

";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 10
        yield "
";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 91
        yield "

<div class=\"auth-container\">
    <div class=\"flash-messages\">
        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", ["error"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            yield "            <div class=\"alert\">
                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>

    <form class=\"auth-form\" action=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_submit");
        yield "\" method=\"post\">
        <input type=\"text\" id=\"nomComplete\" name=\"nomComplete\" placeholder=\"Nom complet\" required>
        <input type=\"tel\" id=\"tel\" name=\"tel\" placeholder=\"Téléphone\" required>
        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
        <input type=\"password\" id=\"pwd\" name=\"pwd\" placeholder=\"Mot de passe\" required>
        <button type=\"submit\">S'inscrire</button>
    </form>

    <div class=\"auth-links\">
        <p>Déjà un compte ? <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a></p>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/assetsA/img/hero-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .auth-container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
    }

    .auth-form input {
        width: 100%;
        padding: 12px 15px;
        margin: 8px 0;
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 25px;
        color: white;
        font-size: 16px;
        outline: none;
    }

    .auth-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .auth-form button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        border: none;
        border-radius: 25px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.2s;
    }

    .auth-form button:hover {
        transform: translateY(-2px);
    }

    .flash-messages {
        margin-bottom: 20px;
    }

    .flash-messages .alert {
        background-color: rgba(255, 87, 87, 0.2);
        color: #ff5757;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .auth-links {
        text-align: center;
        margin-top: 20px;
    }

    .auth-links a {
        color: #667eea;
        text-decoration: none;
    }

    .auth-links a:hover {
        text-decoration: underline;
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
        return "auth/register.html.twig";
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
        return array (  161 => 12,  151 => 11,  134 => 9,  118 => 111,  106 => 102,  102 => 100,  93 => 97,  90 => 96,  86 => 95,  80 => 91,  78 => 11,  75 => 10,  73 => 9,  69 => 7,  59 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'baseLogin.html.twig' %}



{% block body %}


{% block title %}Inscription{% endblock %}

{% block stylesheets %}
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/assetsA/img/hero-bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .auth-container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
    }

    .auth-form input {
        width: 100%;
        padding: 12px 15px;
        margin: 8px 0;
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 25px;
        color: white;
        font-size: 16px;
        outline: none;
    }

    .auth-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .auth-form button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        border: none;
        border-radius: 25px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.2s;
    }

    .auth-form button:hover {
        transform: translateY(-2px);
    }

    .flash-messages {
        margin-bottom: 20px;
    }

    .flash-messages .alert {
        background-color: rgba(255, 87, 87, 0.2);
        color: #ff5757;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .auth-links {
        text-align: center;
        margin-top: 20px;
    }

    .auth-links a {
        color: #667eea;
        text-decoration: none;
    }

    .auth-links a:hover {
        text-decoration: underline;
    }
</style>
{% endblock %}


<div class=\"auth-container\">
    <div class=\"flash-messages\">
        {% for message in app.flashes('error') %}
            <div class=\"alert\">
                {{ message }}
            </div>
        {% endfor %}
    </div>

    <form class=\"auth-form\" action=\"{{ path('app_register_submit') }}\" method=\"post\">
        <input type=\"text\" id=\"nomComplete\" name=\"nomComplete\" placeholder=\"Nom complet\" required>
        <input type=\"tel\" id=\"tel\" name=\"tel\" placeholder=\"Téléphone\" required>
        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
        <input type=\"password\" id=\"pwd\" name=\"pwd\" placeholder=\"Mot de passe\" required>
        <button type=\"submit\">S'inscrire</button>
    </form>

    <div class=\"auth-links\">
        <p>Déjà un compte ? <a href=\"{{ path('app_login') }}\">Connectez-vous</a></p>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "auth/register.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\auth\\register.html.twig");
    }
}
