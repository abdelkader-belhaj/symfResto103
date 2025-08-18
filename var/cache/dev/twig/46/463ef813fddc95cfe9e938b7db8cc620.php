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

/* auth/login.html.twig */
class __TwigTemplate_131606504c3a27e4b48760db61dce682 extends Template
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
        // line 4
        return "baseLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent = $this->load("baseLogin.html.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "

";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 99
        yield "

<div class=\"auth-container\">
    <div class=\"flash-messages\">
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["error"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            yield "            <div class=\"alert-danger\">
                ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "        
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "flashes", ["success"], "method", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            yield "            <div class=\"alert-success\">
                ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "    </div>

    <form class=\"auth-form\" action=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_submit");
        yield "\" method=\"post\">
        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
        <input type=\"password\" id=\"pwd\" name=\"pwd\" placeholder=\"Mot de passe\" required>
        <button type=\"submit\">Se connecter</button>
    </form>

    <div class=\"auth-links\">
        <p>Pas encore de compte ? <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Inscrivez-vous</a></p>
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

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
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

    .flash-messages .alert-danger {
        background-color: rgba(255, 87, 87, 0.2);
        color: #ff5757;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .flash-messages .alert-success {
        background-color: rgba(87, 255, 87, 0.2);
        color: #57ff57;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .auth-links {
        text-align: center;
        margin-top: 20px;
        color: rgba(255, 255, 255, 0.7);
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
        return "auth/login.html.twig";
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
        return array (  178 => 11,  168 => 10,  151 => 8,  135 => 123,  125 => 116,  121 => 114,  112 => 111,  109 => 110,  105 => 109,  102 => 108,  93 => 105,  90 => 104,  86 => 103,  80 => 99,  78 => 10,  75 => 9,  73 => 8,  69 => 6,  59 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
 
 
{% extends 'baseLogin.html.twig' %}
 {% block body %}


{% block title %}Connexion{% endblock %}

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

    .flash-messages .alert-danger {
        background-color: rgba(255, 87, 87, 0.2);
        color: #ff5757;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .flash-messages .alert-success {
        background-color: rgba(87, 255, 87, 0.2);
        color: #57ff57;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .auth-links {
        text-align: center;
        margin-top: 20px;
        color: rgba(255, 255, 255, 0.7);
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
            <div class=\"alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        
        {% for message in app.flashes('success') %}
            <div class=\"alert-success\">
                {{ message }}
            </div>
        {% endfor %}
    </div>

    <form class=\"auth-form\" action=\"{{ path('app_login_submit') }}\" method=\"post\">
        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
        <input type=\"password\" id=\"pwd\" name=\"pwd\" placeholder=\"Mot de passe\" required>
        <button type=\"submit\">Se connecter</button>
    </form>

    <div class=\"auth-links\">
        <p>Pas encore de compte ? <a href=\"{{ path('app_register') }}\">Inscrivez-vous</a></p>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
 
", "auth/login.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\auth\\login.html.twig");
    }
}
