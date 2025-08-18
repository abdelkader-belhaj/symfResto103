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

/* baseLogin.html.twig */
class __TwigTemplate_fa8c2b6fc4c3bda8e63af417e56d6d0d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseLogin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Marketing Background - Délices Resto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .marketing-background {
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1e3a5f 0%, #2c5530 50%, #8b4513 100%);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                rgba(30, 58, 95, 0.9) 0%,
                rgba(44, 85, 48, 0.8) 50%,
                rgba(139, 69, 19, 0.7) 100%
            );
            z-index: 1;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .food-icon {
            position: absolute;
            color: rgba(255, 193, 7, 0.4);
            font-size: 4rem;
            animation: float 6s ease-in-out infinite;
            text-shadow: 0 0 20px rgba(255, 193, 7, 0.6);
            filter: drop-shadow(0 0 15px rgba(255, 193, 7, 0.8));
        }

        .food-icon:nth-child(1) {
            top: 10%;
            left: 15%;
            animation-delay: 0s;
        }

        .food-icon:nth-child(2) {
            top: 20%;
            right: 10%;
            animation-delay: 1s;
        }

        .food-icon:nth-child(3) {
            bottom: 25%;
            left: 8%;
            animation-delay: 2s;
        }

        .food-icon:nth-child(4) {
            bottom: 15%;
            right: 20%;
            animation-delay: 3s;
        }

        .food-icon:nth-child(5) {
            top: 45%;
            left: 5%;
            animation-delay: 4s;
        }

        .food-icon:nth-child(7) {
            top: 35%;
            right: 15%;
            animation-delay: 2.5s;
        }

        .food-icon:nth-child(8) {
            bottom: 40%;
            left: 25%;
            animation-delay: 4.5s;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg) scale(1); 
                opacity: 0.4; 
            }
            50% { 
                transform: translateY(-30px) rotate(10deg) scale(1.2); 
                opacity: 0.8; 
            }
        }

        .geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 193, 7, 0.1), rgba(255, 255, 255, 0.05));
            animation: pulse 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -200px;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 320px;
            height: 320px;
            top: 15%;
            right: -160px;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 350px;
            height: 350px;
            bottom: -175px;
            left: 25%;
            animation-delay: 4s;
        }

        .shape:nth-child(4) {
            width: 280px;
            height: 280px;
            bottom: 25%;
            right: -140px;
            animation-delay: 6s;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.1; }
            50% { transform: scale(1.1) rotate(10deg); opacity: 0.2; }
        }

        .content-area {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
            color: white;
            max-width: 400px;
            width: 90%;
        }

        .brand-logo {
            font-family: 'Georgia', serif;
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffc107, #ffffff, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 40px rgba(255, 193, 7, 0.8);
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 20px rgba(255, 193, 7, 0.8)); }
            to { filter: drop-shadow(0 0 30px rgba(255, 193, 7, 1)); }
        }

        .tagline {
            font-family: 'Arial', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            font-weight: 300;
            letter-spacing: 2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInOut 4s ease-in-out infinite;
        }

        @keyframes fadeInOut {
            0%, 100% { opacity: 0.95; }
            50% { opacity: 1; }
        }

        .login-form-placeholder {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 193, 7, 0.3);
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            animation: pulse-glow 6s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% { 
                box-shadow: 
                    0 25px 50px rgba(0, 0, 0, 0.4),
                    0 0 20px rgba(255, 193, 7, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }
            50% { 
                box-shadow: 
                    0 30px 60px rgba(0, 0, 0, 0.5),
                    0 0 40px rgba(255, 193, 7, 0.6),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
            }
        }

        .form-note {
            font-size: 0.9rem;
            opacity: 0.7;
            margin-top: 1rem;
            font-style: italic;
        }

        .sparkles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 3;
        }

        .sparkle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: linear-gradient(45deg, #ffc107, #ffffff);
            border-radius: 50%;
            animation: sparkle 4s linear infinite;
            box-shadow: 0 0 10px #ffc107, 0 0 20px #ffc107, 0 0 30px #ffc107;
        }

        .sparkle:nth-child(1) { top: 20%; left: 25%; animation-delay: 0s; }
        .sparkle:nth-child(2) { top: 40%; left: 70%; animation-delay: 1s; }
        .sparkle:nth-child(3) { top: 60%; left: 15%; animation-delay: 2s; }
        .sparkle:nth-child(4) { top: 80%; left: 80%; animation-delay: 3s; }
        .sparkle:nth-child(5) { top: 10%; left: 60%; animation-delay: 0.5s; }
        .sparkle:nth-child(6) { top: 70%; left: 45%; animation-delay: 1.5s; }

        @keyframes sparkle {
            0%, 100% { transform: scale(0) rotate(0deg); opacity: 0; }
            50% { transform: scale(1) rotate(180deg); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .brand-logo {
                font-size: 2rem;
            }
            .tagline {
                font-size: 1rem;
            }
            .food-icon {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"marketing-background\">
        <!-- Geometric Shapes -->
        <div class=\"geometric-shapes\">
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
        </div>

        <!-- Overlay -->
        <div class=\"overlay\"></div>

            <!-- Floating Food Elements -->
        <div class=\"floating-elements\">
            <div class=\"food-icon\">🍽️</div>
            <div class=\"food-icon\">🥘</div>
            <div class=\"food-icon\">🍷</div>
            <div class=\"food-icon\">👨‍🍳</div>
            <div class=\"food-icon\">🥗</div>
            <div class=\"food-icon\">🍰</div>
            <div class=\"food-icon\">🍕</div>
            <div class=\"food-icon\">🥖</div>
        </div>

        <!-- Sparkles -->
        <div class=\"sparkles\">
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
        </div>

        <!-- Content Area -->
        <div class=\"content-area\">
            <div class=\"brand-logo\">Délicieux</div>
            <div class=\"tagline\">Savourez l'Excellence Culinaire</div>
            
            <div class=\"login-form-placeholder\">
                <div class=\"form-note\">
                    ";
        // line 323
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 326
        yield "                </div>
            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 324
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "baseLogin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  395 => 324,  385 => 323,  372 => 326,  370 => 323,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Marketing Background - Délices Resto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .marketing-background {
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1e3a5f 0%, #2c5530 50%, #8b4513 100%);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                rgba(30, 58, 95, 0.9) 0%,
                rgba(44, 85, 48, 0.8) 50%,
                rgba(139, 69, 19, 0.7) 100%
            );
            z-index: 1;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .food-icon {
            position: absolute;
            color: rgba(255, 193, 7, 0.4);
            font-size: 4rem;
            animation: float 6s ease-in-out infinite;
            text-shadow: 0 0 20px rgba(255, 193, 7, 0.6);
            filter: drop-shadow(0 0 15px rgba(255, 193, 7, 0.8));
        }

        .food-icon:nth-child(1) {
            top: 10%;
            left: 15%;
            animation-delay: 0s;
        }

        .food-icon:nth-child(2) {
            top: 20%;
            right: 10%;
            animation-delay: 1s;
        }

        .food-icon:nth-child(3) {
            bottom: 25%;
            left: 8%;
            animation-delay: 2s;
        }

        .food-icon:nth-child(4) {
            bottom: 15%;
            right: 20%;
            animation-delay: 3s;
        }

        .food-icon:nth-child(5) {
            top: 45%;
            left: 5%;
            animation-delay: 4s;
        }

        .food-icon:nth-child(7) {
            top: 35%;
            right: 15%;
            animation-delay: 2.5s;
        }

        .food-icon:nth-child(8) {
            bottom: 40%;
            left: 25%;
            animation-delay: 4.5s;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg) scale(1); 
                opacity: 0.4; 
            }
            50% { 
                transform: translateY(-30px) rotate(10deg) scale(1.2); 
                opacity: 0.8; 
            }
        }

        .geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 193, 7, 0.1), rgba(255, 255, 255, 0.05));
            animation: pulse 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -200px;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 320px;
            height: 320px;
            top: 15%;
            right: -160px;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 350px;
            height: 350px;
            bottom: -175px;
            left: 25%;
            animation-delay: 4s;
        }

        .shape:nth-child(4) {
            width: 280px;
            height: 280px;
            bottom: 25%;
            right: -140px;
            animation-delay: 6s;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.1; }
            50% { transform: scale(1.1) rotate(10deg); opacity: 0.2; }
        }

        .content-area {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
            color: white;
            max-width: 400px;
            width: 90%;
        }

        .brand-logo {
            font-family: 'Georgia', serif;
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffc107, #ffffff, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 40px rgba(255, 193, 7, 0.8);
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { filter: drop-shadow(0 0 20px rgba(255, 193, 7, 0.8)); }
            to { filter: drop-shadow(0 0 30px rgba(255, 193, 7, 1)); }
        }

        .tagline {
            font-family: 'Arial', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            font-weight: 300;
            letter-spacing: 2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInOut 4s ease-in-out infinite;
        }

        @keyframes fadeInOut {
            0%, 100% { opacity: 0.95; }
            50% { opacity: 1; }
        }

        .login-form-placeholder {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 193, 7, 0.3);
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            animation: pulse-glow 6s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% { 
                box-shadow: 
                    0 25px 50px rgba(0, 0, 0, 0.4),
                    0 0 20px rgba(255, 193, 7, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }
            50% { 
                box-shadow: 
                    0 30px 60px rgba(0, 0, 0, 0.5),
                    0 0 40px rgba(255, 193, 7, 0.6),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
            }
        }

        .form-note {
            font-size: 0.9rem;
            opacity: 0.7;
            margin-top: 1rem;
            font-style: italic;
        }

        .sparkles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 3;
        }

        .sparkle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: linear-gradient(45deg, #ffc107, #ffffff);
            border-radius: 50%;
            animation: sparkle 4s linear infinite;
            box-shadow: 0 0 10px #ffc107, 0 0 20px #ffc107, 0 0 30px #ffc107;
        }

        .sparkle:nth-child(1) { top: 20%; left: 25%; animation-delay: 0s; }
        .sparkle:nth-child(2) { top: 40%; left: 70%; animation-delay: 1s; }
        .sparkle:nth-child(3) { top: 60%; left: 15%; animation-delay: 2s; }
        .sparkle:nth-child(4) { top: 80%; left: 80%; animation-delay: 3s; }
        .sparkle:nth-child(5) { top: 10%; left: 60%; animation-delay: 0.5s; }
        .sparkle:nth-child(6) { top: 70%; left: 45%; animation-delay: 1.5s; }

        @keyframes sparkle {
            0%, 100% { transform: scale(0) rotate(0deg); opacity: 0; }
            50% { transform: scale(1) rotate(180deg); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .brand-logo {
                font-size: 2rem;
            }
            .tagline {
                font-size: 1rem;
            }
            .food-icon {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"marketing-background\">
        <!-- Geometric Shapes -->
        <div class=\"geometric-shapes\">
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
            <div class=\"shape\"></div>
        </div>

        <!-- Overlay -->
        <div class=\"overlay\"></div>

            <!-- Floating Food Elements -->
        <div class=\"floating-elements\">
            <div class=\"food-icon\">🍽️</div>
            <div class=\"food-icon\">🥘</div>
            <div class=\"food-icon\">🍷</div>
            <div class=\"food-icon\">👨‍🍳</div>
            <div class=\"food-icon\">🥗</div>
            <div class=\"food-icon\">🍰</div>
            <div class=\"food-icon\">🍕</div>
            <div class=\"food-icon\">🥖</div>
        </div>

        <!-- Sparkles -->
        <div class=\"sparkles\">
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
            <div class=\"sparkle\"></div>
        </div>

        <!-- Content Area -->
        <div class=\"content-area\">
            <div class=\"brand-logo\">Délicieux</div>
            <div class=\"tagline\">Savourez l'Excellence Culinaire</div>
            
            <div class=\"login-form-placeholder\">
                <div class=\"form-note\">
                    {% block body %}

{% endblock %}
                </div>
            </div>
        </div>
    </div>
</body>
</html>", "baseLogin.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\baseLogin.html.twig");
    }
}
