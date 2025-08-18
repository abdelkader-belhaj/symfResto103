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

/* order/new_order.html.twig */
class __TwigTemplate_30e837b58f4e100d38748ab729c9856e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/new_order.html.twig"));

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

        yield "Nouvelle Commande";
        
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4\">Créer une nouvelle commande</h1>
    
    <form method=\"post\" class=\"needs-validation\" novalidate>
        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <h3>Informations du client</h3>
                <div class=\"mb-3\">
                    <label for=\"customerName\" class=\"form-label\">Nom du client</label>
                    <input type=\"text\" class=\"form-control\" id=\"customerName\" name=\"customerName\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"phone\" class=\"form-label\">Téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"address\" class=\"form-label\">Adresse</label>
                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"tableNumber\" class=\"form-label\">Numéro de table</label>
                    <input type=\"text\" class=\"form-control\" id=\"tableNumber\" name=\"tableNumber\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"orderType\" class=\"form-label\">Type de commande</label>
                    <select class=\"form-select\" id=\"orderType\" name=\"orderType\" required>
                        <option value=\"Sur place\">Sur place</option>
                        <option value=\"À emporter\">À emporter</option>
                        <option value=\"Livraison\">Livraison</option>
                    </select>
                </div>
            </div>

            <div class=\"col-md-6\">
                <h3>Détails de la commande</h3>
                <div class=\"mb-3\">
                    <label for=\"menuItem\" class=\"form-label\">Sélectionner un plat du menu</label>
                    <select class=\"form-select\" id=\"menuItem\" name=\"menuItem\" required>
                        <option value=\"\">Choisir un plat...</option>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menuItems"]) || array_key_exists("menuItems", $context) ? $context["menuItems"] : (function () { throw new RuntimeError('Variable "menuItems" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 46
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" 
                                    data-title=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47), "html", null, true);
            yield "\"
                                    data-category=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 48), "html", null, true);
            yield "\"
                                    data-price=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
                                ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 50), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 50), "html", null, true);
            yield ") - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 50), "html", null, true);
            yield " TND
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"title\" class=\"form-label\">Nom du plat</label>
                    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required readonly>
                </div>
                <div class=\"mb-3\">
                    <label for=\"category\" class=\"form-label\">Catégorie</label>
                    <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" required readonly>
                </div>
                <div class=\"mb-3\">
                    <label for=\"quantity\" class=\"form-label\">Quantité</label>
                    <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" min=\"1\" value=\"1\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"unitPrice\" class=\"form-label\">Prix unitaire (TND)</label>
                    <input type=\"number\" class=\"form-control\" id=\"unitPrice\" name=\"unitPrice\" step=\"0.01\" required readonly>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('menuItem').addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const title = selectedOption.dataset.title;
                const category = selectedOption.dataset.category;
                const price = selectedOption.dataset.price;

                document.getElementById('title').value = title;
                document.getElementById('category').value = category;
                document.getElementById('unitPrice').value = price;
            });
        </script>

        <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">Créer la commande</button>
            <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
        </div>
    </form>
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
        return "order/new_order.html.twig";
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
        return array (  198 => 89,  160 => 53,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  130 => 46,  126 => 45,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Nouvelle Commande{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4\">Créer une nouvelle commande</h1>
    
    <form method=\"post\" class=\"needs-validation\" novalidate>
        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <h3>Informations du client</h3>
                <div class=\"mb-3\">
                    <label for=\"customerName\" class=\"form-label\">Nom du client</label>
                    <input type=\"text\" class=\"form-control\" id=\"customerName\" name=\"customerName\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"phone\" class=\"form-label\">Téléphone</label>
                    <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"address\" class=\"form-label\">Adresse</label>
                    <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"tableNumber\" class=\"form-label\">Numéro de table</label>
                    <input type=\"text\" class=\"form-control\" id=\"tableNumber\" name=\"tableNumber\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"orderType\" class=\"form-label\">Type de commande</label>
                    <select class=\"form-select\" id=\"orderType\" name=\"orderType\" required>
                        <option value=\"Sur place\">Sur place</option>
                        <option value=\"À emporter\">À emporter</option>
                        <option value=\"Livraison\">Livraison</option>
                    </select>
                </div>
            </div>

            <div class=\"col-md-6\">
                <h3>Détails de la commande</h3>
                <div class=\"mb-3\">
                    <label for=\"menuItem\" class=\"form-label\">Sélectionner un plat du menu</label>
                    <select class=\"form-select\" id=\"menuItem\" name=\"menuItem\" required>
                        <option value=\"\">Choisir un plat...</option>
                        {% for id, item in menuItems %}
                            <option value=\"{{ id }}\" 
                                    data-title=\"{{ item.title }}\"
                                    data-category=\"{{ item.category }}\"
                                    data-price=\"{{ item.price }}\">
                                {{ item.title }} ({{ item.category }}) - {{ item.price }} TND
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"title\" class=\"form-label\">Nom du plat</label>
                    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required readonly>
                </div>
                <div class=\"mb-3\">
                    <label for=\"category\" class=\"form-label\">Catégorie</label>
                    <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" required readonly>
                </div>
                <div class=\"mb-3\">
                    <label for=\"quantity\" class=\"form-label\">Quantité</label>
                    <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\" min=\"1\" value=\"1\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"unitPrice\" class=\"form-label\">Prix unitaire (TND)</label>
                    <input type=\"number\" class=\"form-control\" id=\"unitPrice\" name=\"unitPrice\" step=\"0.01\" required readonly>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('menuItem').addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const title = selectedOption.dataset.title;
                const category = selectedOption.dataset.category;
                const price = selectedOption.dataset.price;

                document.getElementById('title').value = title;
                document.getElementById('category').value = category;
                document.getElementById('unitPrice').value = price;
            });
        </script>

        <div class=\"mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">Créer la commande</button>
            <a href=\"{{ path('admin_orders') }}\" class=\"btn btn-secondary\">Annuler</a>
        </div>
    </form>
</div>
{% endblock %}
", "order/new_order.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\order\\new_order.html.twig");
    }
}
