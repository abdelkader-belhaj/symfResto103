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

/* order/admin_orders.html.twig */
class __TwigTemplate_942a7717fba843ff6bf17897c5187f81 extends Template
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
        // line 2
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/admin_orders.html.twig"));

        $this->parent = $this->load("baseAdmin.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Gestion des Commandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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
        yield "<!-- Script pour la fonction d'impression -->
<style>
    .icon-shape {
        width: 36px;
        height: 36px;
        padding: 0;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .icon-shape:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .icon-shape i {
        font-size: 14px;
        opacity: 1;
    }
    .bg-gradient-primary {
        background: linear-gradient(135deg, #5e72e4, #825ee4);
    }
    .bg-gradient-danger {
        background: linear-gradient(135deg, #f5365c, #f56036);
    }
</style>
<script>
function printOrder(orderId) {
    console.log('Impression de la commande:', orderId);
    
    // Récupération des données de la commande
    const orderRow = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
    if (!orderRow) {
        console.error('Commande non trouvée');
        return;
    }

    const currentDate = new Date();
    const formattedDate = currentDate.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric', 
        hour: '2-digit', 
        minute: '2-digit'
    });

    // Construction du contenu à imprimer
    const printContent = `
        <div style=\"padding: 20px; font-family: 'Arial', sans-serif; max-width: 800px; margin: 0 auto;\">
            <!-- En-tête -->
            <div style=\"text-align: center; margin-bottom: 30px; padding: 20px; border-bottom: 2px solid #344767;\">
                <div style=\"margin-bottom: 10px;\">
                    <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsA/img/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"max-height: 60px;\">
                </div>
                <h1 style=\"color: #344767; margin: 0; font-size: 24px;\">Restaurant Délicieux</h1>
                <p style=\"color: #666; margin: 5px 0;\">123 Avenue de la Gastronomie</p>
                <p style=\"color: #666; margin: 5px 0;\">75000 Paris, France</p>
                <p style=\"color: #666; margin: 5px 0;\">Tél: +33 1 23 45 67 89</p>
            </div>

            <!-- Informations de la commande -->
            <div style=\"margin-bottom: 30px;\">
                <div style=\"display: flex; justify-content: space-between; margin-bottom: 20px;\">
                    <div>
                        <h2 style=\"color: #344767; margin: 0; font-size: 20px;\">Bon de Commande #\${orderId}</h2>
                        <p style=\"color: #666; margin: 5px 0;\">Date d'impression: \${formattedDate}</p>
                    </div>
                    <div style=\"text-align: right;\">
                        <p style=\"color: #666; margin: 5px 0;\">Date de commande:<br>\${orderRow.querySelector('[data-date]')?.textContent.trim() || 'N/A'}</p>
                    </div>
                </div>

                <div style=\"background-color: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 20px;\">
                    <div style=\"display: flex; justify-content: space-between;\">
                        <div style=\"flex: 1;\">
                            <h3 style=\"color: #344767; margin: 0 0 10px 0; font-size: 16px;\">Informations Client</h3>
                            <p style=\"margin: 5px 0;\"><strong>Nom:</strong> \${orderRow.querySelector('[data-customer]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Téléphone:</strong> \${orderRow.querySelector('[data-phone]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Adresse:</strong> \${orderRow.querySelector('[data-location]')?.textContent.trim() || 'N/A'}</p>
                        </div>
                        <div style=\"flex: 1; text-align: right;\">
                            <h3 style=\"color: #344767; margin: 0 0 10px 0; font-size: 16px;\">Détails Commande</h3>
                            <p style=\"margin: 5px 0;\"><strong>Type:</strong> \${orderRow.querySelector('[data-type]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Statut:</strong> \${orderRow.querySelector('[data-status]')?.textContent.trim() || 'N/A'}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles -->
            <div style=\"margin-bottom: 30px;\">
                <h3 style=\"color: #344767; margin-bottom: 15px; font-size: 18px;\">Détail des Articles</h3>
                <table style=\"width: 100%; border-collapse: collapse;\">
                    <thead>
                        <tr style=\"background-color: #344767; color: white;\">
                            <th style=\"padding: 12px; text-align: left; border: 1px solid #dee2e6;\">Article</th>
                            <th style=\"padding: 12px; text-align: center; border: 1px solid #dee2e6;\">Quantité</th>
                            <th style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">Prix Unitaire</th>
                            <th style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${Array.from(orderRow.querySelectorAll('#details-' + orderId + ' tbody tr')).map(row => {
                            const quantity = row.querySelector('.badge')?.textContent.trim().replace('x', '') || '';
                            const priceText = row.querySelector('.text-secondary')?.textContent.trim() || '';
                            const price = parseFloat(priceText.replace('TND', '').trim());
                            const unitPrice = quantity ? (price / parseInt(quantity)).toFixed(2) : '0.00';
                            return `
                                <tr>
                                    <td style=\"padding: 12px; border: 1px solid #dee2e6;\">
                                        <div style=\"font-weight: bold;\">\${row.querySelector('h6')?.textContent.trim() || ''}</div>
                                        <div style=\"color: #666; font-size: 0.9em;\">\${row.querySelector('.text-xs')?.textContent.trim() || ''}</div>
                                    </td>
                                    <td style=\"padding: 12px; text-align: center; border: 1px solid #dee2e6;\">\${quantity}</td>
                                    <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">\${unitPrice} TND</td>
                                    <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">\${priceText}</td>
                                </tr>
                            `;
                        }).join('')}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"3\" style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\"><strong>Total</strong></td>
                            <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6; font-weight: bold; font-size: 1.1em;\">\${orderRow.querySelector('h4')?.textContent.trim() || 'N/A'}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Notes et conditions -->
            <div style=\"margin-top: 30px; font-size: 0.9em; color: #666;\">
                <div style=\"margin-bottom: 20px;\">
                    <h3 style=\"color: #344767; margin-bottom: 10px; font-size: 16px;\">Notes</h3>
                    <p>Merci de votre confiance! Pour toute question concernant votre commande, n'hésitez pas à nous contacter.</p>
                </div>
                <div style=\"border-top: 1px solid #dee2e6; padding-top: 20px; text-align: center; font-size: 0.8em;\">
                    <p style=\"margin: 5px 0;\">Restaurant Délicieux - SIRET: 123 456 789 00001</p>
                    <p style=\"margin: 5px 0;\">TVA Intracommunautaire: FR 12 345 678 901</p>
                    <p style=\"margin: 5px 0;\">www.restaurant-delicieux.fr</p>
                </div>
            </div>
        </div>
    `;

    // Ouverture d'une nouvelle fenêtre pour l'impression
    const printWindow = window.open('', '', 'width=800,height=600');
    printWindow.document.write(`
        <!DOCTYPE html>
        <html>
            <head>
                <title>Bon de Commande #\${orderId} - Restaurant Délicieux</title>
                <meta charset=\"UTF-8\">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
                    
                    body {
                        margin: 0;
                        padding: 20px;
                        background-color: #f8f9fa;
                        font-family: 'Inter', sans-serif;
                    }
                    
                    @media print {
                        body {
                            background-color: white;
                            padding: 0;
                        }
                        .no-print {
                            display: none;
                        }
                        @page {
                            size: A4;
                            margin: 2cm;
                        }
                    }

                    .print-container {
                        background-color: white;
                        box-shadow: 0 0 20px rgba(0,0,0,0.1);
                        border-radius: 10px;
                        padding: 40px;
                        max-width: 210mm;
                        margin: 0 auto;
                    }

                    @media print {
                        .print-container {
                            box-shadow: none;
                            padding: 0;
                            max-width: none;
                        }
                    }
                </style>
            </head>
            <body>
                <div class=\"print-container\">
                    \${printContent}
                </div>
                <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                    <button onclick=\"window.print();\" 
                            style=\"padding: 12px 24px; background-color: #344767; color: white; 
                                   border: none; border-radius: 5px; cursor: pointer;
                                   font-family: 'Inter', sans-serif; font-weight: 600;
                                   margin-right: 10px;\">
                        <span style=\"margin-right: 8px;\">🖨️</span> Imprimer
                    </button>
                    <button onclick=\"window.close();\" 
                            style=\"padding: 12px 24px; background-color: #dc3545; color: white; 
                                   border: none; border-radius: 5px; cursor: pointer;
                                   font-family: 'Inter', sans-serif; font-weight: 600;\">
                        <span style=\"margin-right: 8px;\">✕</span> Fermer
                    </button>
                </div>
            </body>
        </html>
    `);
    printWindow.document.close();
}
</script>

<div class=\"container-fluid py-4\">
    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "flashes", ["success"], "method", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 227
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "    
    <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h4>Gestion des Commandes</h4>
                </div>
                <div class=\"col-md-6 text-end\">
                    <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new_order");
        yield "\" class=\"btn btn-primary btn-sm ms-auto\">
                        <i class=\"fas fa-plus\"></i> Nouvelle Commande
                    </a>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        <input type=\"text\" class=\"form-control\" id=\"orderSearch\" placeholder=\"Rechercher...\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"pending\">En attente</option>
                        <option value=\"validated\">Validée</option>
                        <option value=\"refused\">Refusée</option>
                        <option value=\"delivered\">Livrée</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <select class=\"form-select\" id=\"typeFilter\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"sur_place\">Sur place</option>
                        <option value=\"livraison\">Livraison</option>
                        <option value=\"emporter\">À emporter</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <input type=\"date\" class=\"form-control\" id=\"dateFilter\">
                </div>
            </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle\" id=\"ordersTable\">
            <thead>
                <tr>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">#</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Date</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Client</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Contact</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Détails</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Type</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Statut</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Résumé</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 291, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["key"] => $context["order"]) {
            // line 292
            yield "                <tr data-order-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\">#";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 296), "html", null, true);
            yield "</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\" data-date>";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderDate", [], "any", false, false, false, 303), "html", null, true);
            yield "</h6>
                                <p class=\"text-xs text-secondary mb-0\">";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderDate", [], "any", false, false, false, 304), "H:i"), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\" data-customer>";
            // line 311
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", true, true, false, 311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 311)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 311), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, true, false, 311), "name", [], "any", true, true, false, 311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 311), "name", [], "any", false, false, false, 311)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 311), "name", [], "any", false, false, false, 311), "html", null, true)) : ("-"))));
            yield "</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <p class=\"text-xs text-secondary mb-0\" data-phone>
                                    ";
            // line 319
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, true, false, 319), "phone", [], "any", true, true, false, 319) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 319), "phone", [], "any", false, false, false, 319))) {
                // line 320
                yield "                                        <i class=\"fas fa-phone me-2\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 320), "phone", [], "any", false, false, false, 320), "html", null, true);
                yield "
                                    ";
            }
            // line 322
            yield "                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\" data-location>
                                ";
            // line 329
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, true, false, 329), "tableNumber", [], "any", true, true, false, 329) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 329), "tableNumber", [], "any", false, false, false, 329))) {
                // line 330
                yield "                                    <p class=\"text-xs mb-0\">Table: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 330), "tableNumber", [], "any", false, false, false, 330), "html", null, true);
                yield "</p>
                                ";
            }
            // line 332
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, true, false, 332), "address", [], "any", true, true, false, 332) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 332), "address", [], "any", false, false, false, 332))) {
                // line 333
                yield "                                    <p class=\"text-xs text-secondary mb-0\">
                                        <i class=\"fas fa-map-marker-alt me-2\">address: </i>";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerInfo", [], "any", false, false, false, 334), "address", [], "any", false, false, false, 334), "html", null, true);
                yield "
                                    </p>
                                ";
            }
            // line 337
            yield "                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <span class=\"badge badge-sm 
                                ";
            // line 343
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderType", [], "any", false, false, false, 343) == "sur_place")) {
                yield "bg-primary
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 344
$context["order"], "orderType", [], "any", false, false, false, 344) == "livraison")) {
                yield "bg-info
                                ";
            } else {
                // line 345
                yield "bg-secondary";
            }
            yield "\"
                                data-type>
                                ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderType", [], "any", false, false, false, 347)), "html", null, true);
            yield "
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <span class=\"badge badge-sm
                                ";
            // line 354
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 354) == "pending")) {
                yield "bg-warning
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 355
$context["order"], "status", [], "any", false, false, false, 355) == "validated")) {
                yield "bg-success
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 356
$context["order"], "status", [], "any", false, false, false, 356) == "refused")) {
                yield "bg-danger
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 357
$context["order"], "status", [], "any", false, false, false, 357) == "delivered")) {
                yield "bg-info
                                ";
            } else {
                // line 358
                yield "bg-secondary";
            }
            yield "\"
                                data-status>
                                ";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 360)), "html", null, true);
            yield "
                            </span>
                        <div class=\"ms-2\">
                            <form method=\"post\" action=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_order_status", ["orderId" => $context["key"]]), "html", null, true);
            yield "\" class=\"d-inline\">
                                <select name=\"status\" class=\"form-select form-select-sm bg-gradient-light\" style=\"cursor: pointer;\" onchange=\"this.form.submit()\">
                                    <option value=\"pending\" ";
            // line 365
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 365) == "pending")) {
                yield "selected";
            }
            yield ">En attente</option>
                                    <option value=\"validated\" ";
            // line 366
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 366) == "validated")) {
                yield "selected";
            }
            yield ">Validée</option>
                                    <option value=\"refused\" ";
            // line 367
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 367) == "refused")) {
                yield "selected";
            }
            yield ">Refusée</option>
                                    <option value=\"delivered\" ";
            // line 368
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 368) == "delivered")) {
                yield "selected";
            }
            yield ">Livrée</option>
                                </select>
                            </form>
                        </div>
                    </td>
                    <td>
                        <button class=\"btn btn-sm bg-gradient-info mb-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#details-";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"details-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                            <i class=\"fas fa-info-circle me-2\"></i>Détails
                        </button>
                        <div class=\"collapse\" id=\"details-";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                            <div class=\"card card-body mt-2\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-items-center mb-0\">
                                        <thead>
                                            <tr>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Article</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Qté</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 389
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "items", [], "any", false, false, false, 389));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 390
                yield "                                                <tr>
                                                    <td>
                                                        <div class=\"d-flex px-2 py-1\">
                                                            <div class=\"d-flex flex-column justify-content-center\">
                                                                <h6 class=\"mb-0 text-sm\">";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 394), "html", null, true);
                yield "</h6>
                                                                <p class=\"text-xs text-secondary mb-0\">";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 395), "html", null, true);
                yield "</p>
                                                                ";
                // line 396
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "customizations", [], "any", true, true, false, 396) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "customizations", [], "any", false, false, false, 396)))) {
                    // line 397
                    yield "                                                                    <p class=\"text-xs text-info mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "customizations", [], "any", false, false, false, 397), ", "), "html", null, true);
                    yield "</p>
                                                                ";
                }
                // line 399
                yield "                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class=\"badge badge-sm bg-gradient-success\">x";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 403), "html", null, true);
                yield "</span>
                                                    </td>
                                                    <td>
                                                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 406), 2, ".", " "), "html", null, true);
                yield " TND</span>
                                                    </td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 410
            yield "                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"d-flex justify-content-end mt-3\">
                                    <div class=\"text-end\">
                                        <p class=\"text-secondary mb-0\">Total</p>
                                        <h4 class=\"font-weight-bold mb-0\">";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderSummary", [], "any", false, false, false, 416), "totalAmount", [], "any", false, false, false, 416), 2, ".", " "), "html", null, true);
            yield " TND</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center\" onclick=\"printOrder('";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "');\" title=\"Imprimer\" style=\"cursor: pointer;\">
                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <title>print</title>
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <path class=\"color-background\" d=\"M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z\" fill=\"#5e72e4\"/>
                                    </g>
                                </svg>
                            </div>
                            <form action=\"";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_order", ["orderId" => $context["key"]]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?');\" class=\"d-inline\">
                                <div class=\"icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center\" style=\"cursor: pointer;\" onclick=\"this.closest('form').submit(); return false;\" title=\"Supprimer\">
                                    <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <title>delete</title>
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <path class=\"color-background\" d=\"M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z\" fill=\"#f5365c\"/>
                                        </g>
                                    </svg>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 445
        if (!$context['_iterated']) {
            // line 446
            yield "                <tr>
                    <td colspan=\"9\" class=\"text-center\">
                        <div class=\"d-flex flex-column align-items-center py-5\">
                            <i class=\"fas fa-inbox fa-3x text-secondary mb-3\"></i>
                            <h6 class=\"text-secondary\">Aucune commande trouvée</h6>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['order'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "            </tbody>
        </table>
    </div>
</div>
</div>

";
        // line 462
        yield "<div id=\"printTemplate\" style=\"display: none;\">
    <div class=\"print-order\" id=\"printContent\">
        <div style=\"text-align: center; margin-bottom: 20px;\">
            <h2 style=\"color: #344767;\">Détails de la Commande</h2>
            <hr style=\"border: 1px solid #344767;\">
        </div>
        <div class=\"order-info\" style=\"margin-bottom: 20px;\">
            <table style=\"width: 100%; margin-bottom: 20px;\">
                <tr>
                    <td style=\"width: 50%; padding: 8px;\">
                        <strong>Client:</strong> <span id=\"print-customer\"></span>
                    </td>
                    <td style=\"width: 50%; padding: 8px;\">
                        <strong>Date:</strong> <span id=\"print-date\"></span>
                    </td>
                </tr>
                <tr>
                    <td style=\"padding: 8px;\">
                        <strong>Téléphone:</strong> <span id=\"print-phone\"></span>
                    </td>
                    <td style=\"padding: 8px;\">
                        <strong>Type:</strong> <span id=\"print-type\"></span>
                    </td>
                </tr>
                <tr>
                    <td style=\"padding: 8px;\">
                        <strong>Table/Adresse:</strong> <span id=\"print-location\"></span>
                    </td>
                    <td style=\"padding: 8px;\">
                        <strong>Statut:</strong> <span id=\"print-status\"></span>
                    </td>
                </tr>
            </table>
        </div>
        <div class=\"order-items\" style=\"margin-bottom: 20px;\">
            <h3 style=\"color: #344767; margin-bottom: 10px;\">Articles commandés</h3>
            <table style=\"width: 100%; border-collapse: collapse;\">
                <thead>
                    <tr style=\"background-color: #f8f9fa;\">
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: left;\">Article</th>
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: center;\">Quantité</th>
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">Prix</th>
                    </tr>
                </thead>
                <tbody id=\"print-items\">
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\" style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">
                            <strong>Total:</strong>
                        </td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">
                            <strong id=\"print-total\"></strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

";
        // line 524
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
// Fonction d'impression globale
function printOrder(orderId) {
    console.log('Fonction printOrder appelée avec orderId:', orderId);
    
    // Trouver la ligne de la commande
    const row = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
    if (!row) {
        console.error('Ligne de commande non trouvée:', orderId);
        return;
    }

    // Récupérer les données
    const orderData = {
        customer: row.querySelector('[data-customer]')?.textContent.trim() || 'N/A',
        date: row.querySelector('[data-date]')?.textContent.trim() || 'N/A',
        phone: row.querySelector('[data-phone]')?.textContent.trim() || 'N/A',
        type: row.querySelector('[data-type]')?.textContent.trim() || 'N/A',
        status: row.querySelector('[data-status]')?.textContent.trim() || 'N/A',
        location: row.querySelector('[data-location]')?.textContent.trim() || 'N/A'
    };

    console.log('Données récupérées:', orderData);

    // Récupérer les articles
    const items = [];
    const itemsTable = row.querySelector(`#details-\${orderId} tbody`);
    if (itemsTable) {
        itemsTable.querySelectorAll('tr').forEach(tr => {
            const item = {
                name: tr.querySelector('h6')?.textContent.trim() || '',
                quantity: tr.querySelector('.badge')?.textContent.replace('x', '').trim() || '',
                price: tr.querySelector('.text-secondary')?.textContent.trim() || ''
            };
            if (item.name && item.quantity && item.price) {
                items.push(item);
            }
        });
    }

    console.log('Articles récupérés:', items);

    // Créer le contenu HTML pour l'impression
    const printContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Commande #\${orderId}</title>
            <meta charset=\"UTF-8\">
            <style>
                body { 
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    color: #344767;
                }
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                }
                .order-info {
                    margin-bottom: 30px;
                }
                .order-info table {
                    width: 100%;
                    margin-bottom: 20px;
                }
                .order-items {
                    margin-bottom: 30px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid #ddd;
                    text-align: left;
                }
                th {
                    background-color: #f8f9fa;
                }
                .total {
                    text-align: right;
                    font-weight: bold;
                    font-size: 1.2em;
                    margin-top: 20px;
                }
                @media print {
                    .no-print { display: none; }
                }
            </style>
        </head>
        <body>
            <div class=\"header\">
                <h1>Détails de la Commande #\${orderId}</h1>
            </div>
            <div class=\"order-info\">
                <table>
                    <tr>
                        <td><strong>Client:</strong> \${orderData.customer}</td>
                        <td><strong>Date:</strong> \${orderData.date}</td>
                    </tr>
                    <tr>
                        <td><strong>Téléphone:</strong> \${orderData.phone}</td>
                        <td><strong>Type:</strong> \${orderData.type}</td>
                    </tr>
                    <tr>
                        <td><strong>Localisation:</strong> \${orderData.location}</td>
                        <td><strong>Statut:</strong> \${orderData.status}</td>
                    </tr>
                </table>
            </div>
            <div class=\"order-items\">
                <h2>Articles commandés</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${items.map(item => `
                            <tr>
                                <td>\${item.name}</td>
                                <td>\${item.quantity}</td>
                                <td>\${item.price}</td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                <div class=\"total\">
                    Total: \${row.querySelector('h4')?.textContent.trim() || 'N/A'}
                </div>
            </div>
            <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                <button onclick=\"window.print();return false;\" style=\"padding: 10px 20px; cursor: pointer;\">
                    Imprimer
                </button>
            </div>
        </body>
        </html>
    `;

    // Ouvrir la fenêtre d'impression
    const printWindow = window.open('', '_blank');
    if (printWindow) {
        printWindow.document.write(printContent);
        printWindow.document.close();
    } else {
        alert(\"Veuillez autoriser les popups pour l'impression\");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('orderSearch');
    const statusFilter = document.getElementById('statusFilter');
    const typeFilter = document.getElementById('typeFilter');
    const dateFilter = document.getElementById('dateFilter');
    const table = document.getElementById('ordersTable');
    const rows = table.getElementsByTagName('tr');

    function filterTable() {
        const searchText = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const typeValue = typeFilter.value.toLowerCase();
        const dateValue = dateFilter.value;

        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            if (cells.length === 0) continue;

            const customerName = cells[2].textContent.toLowerCase();
            const status = cells[6].textContent.toLowerCase();
            const type = cells[5].textContent.toLowerCase();
            const date = cells[1].textContent;

            const matchesSearch = searchText === '' || customerName.includes(searchText);
            const matchesStatus = statusValue === '' || status.includes(statusValue);
            const matchesType = typeValue === '' || type.includes(typeValue);
            const matchesDate = dateValue === '' || date.includes(dateValue);

            row.style.display = (matchesSearch && matchesStatus && matchesType && matchesDate) ? '' : 'none';
        }
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    dateFilter.addEventListener('input', filterTable);

    // Fonction pour imprimer une commande spécifique
    window.printOrder = function(orderId) {
        console.log(\"Printing order:\", orderId); // Debug log
        
        // Récupérer les données de la commande
        const row = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
        if (!row) {
            console.error(\"Row not found for order:\", orderId);
            return;
        }

        try {
            // Remplir le template d'impression
            const customerElement = row.querySelector('[data-customer]');
            const dateElement = row.querySelector('[data-date]');
            const phoneElement = row.querySelector('[data-phone]');
            const typeElement = row.querySelector('[data-type]');
            const locationElement = row.querySelector('[data-location]');
            const statusElement = row.querySelector('[data-status]');

            if (!customerElement || !dateElement || !typeElement || !statusElement) {
                console.error(\"Required elements not found\");
                return;
            }

            document.getElementById('print-customer').textContent = customerElement.textContent.trim();
            document.getElementById('print-date').textContent = dateElement.textContent.trim();
            document.getElementById('print-phone').textContent = phoneElement ? phoneElement.textContent.trim() : 'N/A';
            document.getElementById('print-type').textContent = typeElement.textContent.trim();
            document.getElementById('print-location').textContent = locationElement ? locationElement.textContent.trim() : 'N/A';
            document.getElementById('print-status').textContent = statusElement.textContent.trim();

        try {
            // Récupérer les articles
            const itemsContainer = row.querySelector(`#details-\${orderId}`);
            if (!itemsContainer) {
                console.error(\"Items container not found\");
                return;
            }

            const printItemsBody = document.getElementById('print-items');
            if (!printItemsBody) {
                console.error(\"Print items body not found\");
                return;
            }

            printItemsBody.innerHTML = '';

            const items = itemsContainer.querySelectorAll('tbody tr');
            items.forEach(item => {
                try {
                    const titleElement = item.querySelector('h6');
                    const quantityElement = item.querySelector('.badge');
                    const priceElement = item.querySelector('.text-secondary');

                    if (!titleElement || !quantityElement || !priceElement) {
                        console.error(\"Item elements not found\");
                        return;
                    }

                    const title = titleElement.textContent.trim();
                    const quantity = quantityElement.textContent.replace('x', '').trim();
                    const price = priceElement.textContent.trim();

                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td style=\"padding: 12px; border: 1px solid #dee2e6;\">\${title}</td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: center;\">\${quantity}</td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">\${price}</td>
                    `;
                    printItemsBody.appendChild(tr);
                } catch (error) {
                    console.error(\"Error processing item:\", error);
                }
            });

            // Mettre à jour le total
            const totalElement = itemsContainer.querySelector('h4');
            if (!totalElement) {
                console.error(\"Total element not found\");
                return;
            }
            document.getElementById('print-total').textContent = totalElement.textContent.trim();

        try {
            // Créer une nouvelle fenêtre pour l'impression
            const printTemplate = document.getElementById('printTemplate');
            if (!printTemplate) {
                console.error(\"Print template not found\");
                return;
            }

            const printWindow = window.open('', '_blank');
            if (!printWindow) {
                alert(\"Veuillez autoriser les popups pour l'impression\");
                return;
            }

            const printContent = document.getElementById('printContent');
            if (!printContent) {
                console.error(\"Print content not found\");
                return;
            }

            printWindow.document.write(`
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>Impression Commande #\${orderId}</title>
                        <meta charset=\"UTF-8\">
                        <style>
                            body { 
                                font-family: Arial, sans-serif;
                                margin: 20px;
                                color: #344767;
                            }
                            table { 
                                width: 100%;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                            }
                            th, td {
                                padding: 12px;
                                border: 1px solid #dee2e6;
                            }
                            th {
                                background-color: #f8f9fa;
                                text-align: left;
                            }
                            .print-order {
                                max-width: 800px;
                                margin: 0 auto;
                            }
                            @media print {
                                .no-print { display: none; }
                                body { margin: 0; }
                                @page { margin: 2cm; }
                            }
                        </style>
                    </head>
                    <body>
                        \${printContent.outerHTML}
                        <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                            <button onclick=\"window.print();window.close();\" 
                                    style=\"padding: 10px 20px; cursor: pointer;\">
                                Imprimer
                            </button>
                        </div>
                    </body>
                </html>
            `);
            printWindow.document.close();
        } catch (error) {
            console.error(\"Error creating print window:\", error);
            alert(\"Une erreur s'est produite lors de la préparation de l'impression\");
        }
    };
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "order/admin_orders.html.twig";
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
        return array (  798 => 524,  735 => 462,  727 => 455,  713 => 446,  711 => 445,  685 => 432,  674 => 424,  663 => 416,  655 => 410,  645 => 406,  639 => 403,  633 => 399,  627 => 397,  625 => 396,  621 => 395,  617 => 394,  611 => 390,  607 => 389,  592 => 377,  584 => 374,  573 => 368,  567 => 367,  561 => 366,  555 => 365,  550 => 363,  544 => 360,  538 => 358,  533 => 357,  529 => 356,  525 => 355,  521 => 354,  511 => 347,  505 => 345,  500 => 344,  496 => 343,  488 => 337,  482 => 334,  479 => 333,  476 => 332,  470 => 330,  468 => 329,  459 => 322,  453 => 320,  451 => 319,  440 => 311,  430 => 304,  426 => 303,  416 => 296,  408 => 292,  390 => 291,  336 => 240,  326 => 232,  316 => 228,  313 => 227,  309 => 226,  137 => 57,  85 => 7,  75 => 6,  58 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/order/admin_orders.html.twig #}
{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des Commandes{% endblock %}

{% block body %}
<!-- Script pour la fonction d'impression -->
<style>
    .icon-shape {
        width: 36px;
        height: 36px;
        padding: 0;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .icon-shape:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .icon-shape i {
        font-size: 14px;
        opacity: 1;
    }
    .bg-gradient-primary {
        background: linear-gradient(135deg, #5e72e4, #825ee4);
    }
    .bg-gradient-danger {
        background: linear-gradient(135deg, #f5365c, #f56036);
    }
</style>
<script>
function printOrder(orderId) {
    console.log('Impression de la commande:', orderId);
    
    // Récupération des données de la commande
    const orderRow = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
    if (!orderRow) {
        console.error('Commande non trouvée');
        return;
    }

    const currentDate = new Date();
    const formattedDate = currentDate.toLocaleDateString('fr-FR', { 
        day: '2-digit', 
        month: '2-digit', 
        year: 'numeric', 
        hour: '2-digit', 
        minute: '2-digit'
    });

    // Construction du contenu à imprimer
    const printContent = `
        <div style=\"padding: 20px; font-family: 'Arial', sans-serif; max-width: 800px; margin: 0 auto;\">
            <!-- En-tête -->
            <div style=\"text-align: center; margin-bottom: 30px; padding: 20px; border-bottom: 2px solid #344767;\">
                <div style=\"margin-bottom: 10px;\">
                    <img src=\"{{ asset('assetsA/img/logo.png') }}\" alt=\"Logo\" style=\"max-height: 60px;\">
                </div>
                <h1 style=\"color: #344767; margin: 0; font-size: 24px;\">Restaurant Délicieux</h1>
                <p style=\"color: #666; margin: 5px 0;\">123 Avenue de la Gastronomie</p>
                <p style=\"color: #666; margin: 5px 0;\">75000 Paris, France</p>
                <p style=\"color: #666; margin: 5px 0;\">Tél: +33 1 23 45 67 89</p>
            </div>

            <!-- Informations de la commande -->
            <div style=\"margin-bottom: 30px;\">
                <div style=\"display: flex; justify-content: space-between; margin-bottom: 20px;\">
                    <div>
                        <h2 style=\"color: #344767; margin: 0; font-size: 20px;\">Bon de Commande #\${orderId}</h2>
                        <p style=\"color: #666; margin: 5px 0;\">Date d'impression: \${formattedDate}</p>
                    </div>
                    <div style=\"text-align: right;\">
                        <p style=\"color: #666; margin: 5px 0;\">Date de commande:<br>\${orderRow.querySelector('[data-date]')?.textContent.trim() || 'N/A'}</p>
                    </div>
                </div>

                <div style=\"background-color: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 20px;\">
                    <div style=\"display: flex; justify-content: space-between;\">
                        <div style=\"flex: 1;\">
                            <h3 style=\"color: #344767; margin: 0 0 10px 0; font-size: 16px;\">Informations Client</h3>
                            <p style=\"margin: 5px 0;\"><strong>Nom:</strong> \${orderRow.querySelector('[data-customer]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Téléphone:</strong> \${orderRow.querySelector('[data-phone]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Adresse:</strong> \${orderRow.querySelector('[data-location]')?.textContent.trim() || 'N/A'}</p>
                        </div>
                        <div style=\"flex: 1; text-align: right;\">
                            <h3 style=\"color: #344767; margin: 0 0 10px 0; font-size: 16px;\">Détails Commande</h3>
                            <p style=\"margin: 5px 0;\"><strong>Type:</strong> \${orderRow.querySelector('[data-type]')?.textContent.trim() || 'N/A'}</p>
                            <p style=\"margin: 5px 0;\"><strong>Statut:</strong> \${orderRow.querySelector('[data-status]')?.textContent.trim() || 'N/A'}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles -->
            <div style=\"margin-bottom: 30px;\">
                <h3 style=\"color: #344767; margin-bottom: 15px; font-size: 18px;\">Détail des Articles</h3>
                <table style=\"width: 100%; border-collapse: collapse;\">
                    <thead>
                        <tr style=\"background-color: #344767; color: white;\">
                            <th style=\"padding: 12px; text-align: left; border: 1px solid #dee2e6;\">Article</th>
                            <th style=\"padding: 12px; text-align: center; border: 1px solid #dee2e6;\">Quantité</th>
                            <th style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">Prix Unitaire</th>
                            <th style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${Array.from(orderRow.querySelectorAll('#details-' + orderId + ' tbody tr')).map(row => {
                            const quantity = row.querySelector('.badge')?.textContent.trim().replace('x', '') || '';
                            const priceText = row.querySelector('.text-secondary')?.textContent.trim() || '';
                            const price = parseFloat(priceText.replace('TND', '').trim());
                            const unitPrice = quantity ? (price / parseInt(quantity)).toFixed(2) : '0.00';
                            return `
                                <tr>
                                    <td style=\"padding: 12px; border: 1px solid #dee2e6;\">
                                        <div style=\"font-weight: bold;\">\${row.querySelector('h6')?.textContent.trim() || ''}</div>
                                        <div style=\"color: #666; font-size: 0.9em;\">\${row.querySelector('.text-xs')?.textContent.trim() || ''}</div>
                                    </td>
                                    <td style=\"padding: 12px; text-align: center; border: 1px solid #dee2e6;\">\${quantity}</td>
                                    <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">\${unitPrice} TND</td>
                                    <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\">\${priceText}</td>
                                </tr>
                            `;
                        }).join('')}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"3\" style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6;\"><strong>Total</strong></td>
                            <td style=\"padding: 12px; text-align: right; border: 1px solid #dee2e6; font-weight: bold; font-size: 1.1em;\">\${orderRow.querySelector('h4')?.textContent.trim() || 'N/A'}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Notes et conditions -->
            <div style=\"margin-top: 30px; font-size: 0.9em; color: #666;\">
                <div style=\"margin-bottom: 20px;\">
                    <h3 style=\"color: #344767; margin-bottom: 10px; font-size: 16px;\">Notes</h3>
                    <p>Merci de votre confiance! Pour toute question concernant votre commande, n'hésitez pas à nous contacter.</p>
                </div>
                <div style=\"border-top: 1px solid #dee2e6; padding-top: 20px; text-align: center; font-size: 0.8em;\">
                    <p style=\"margin: 5px 0;\">Restaurant Délicieux - SIRET: 123 456 789 00001</p>
                    <p style=\"margin: 5px 0;\">TVA Intracommunautaire: FR 12 345 678 901</p>
                    <p style=\"margin: 5px 0;\">www.restaurant-delicieux.fr</p>
                </div>
            </div>
        </div>
    `;

    // Ouverture d'une nouvelle fenêtre pour l'impression
    const printWindow = window.open('', '', 'width=800,height=600');
    printWindow.document.write(`
        <!DOCTYPE html>
        <html>
            <head>
                <title>Bon de Commande #\${orderId} - Restaurant Délicieux</title>
                <meta charset=\"UTF-8\">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
                    
                    body {
                        margin: 0;
                        padding: 20px;
                        background-color: #f8f9fa;
                        font-family: 'Inter', sans-serif;
                    }
                    
                    @media print {
                        body {
                            background-color: white;
                            padding: 0;
                        }
                        .no-print {
                            display: none;
                        }
                        @page {
                            size: A4;
                            margin: 2cm;
                        }
                    }

                    .print-container {
                        background-color: white;
                        box-shadow: 0 0 20px rgba(0,0,0,0.1);
                        border-radius: 10px;
                        padding: 40px;
                        max-width: 210mm;
                        margin: 0 auto;
                    }

                    @media print {
                        .print-container {
                            box-shadow: none;
                            padding: 0;
                            max-width: none;
                        }
                    }
                </style>
            </head>
            <body>
                <div class=\"print-container\">
                    \${printContent}
                </div>
                <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                    <button onclick=\"window.print();\" 
                            style=\"padding: 12px 24px; background-color: #344767; color: white; 
                                   border: none; border-radius: 5px; cursor: pointer;
                                   font-family: 'Inter', sans-serif; font-weight: 600;
                                   margin-right: 10px;\">
                        <span style=\"margin-right: 8px;\">🖨️</span> Imprimer
                    </button>
                    <button onclick=\"window.close();\" 
                            style=\"padding: 12px 24px; background-color: #dc3545; color: white; 
                                   border: none; border-radius: 5px; cursor: pointer;
                                   font-family: 'Inter', sans-serif; font-weight: 600;\">
                        <span style=\"margin-right: 8px;\">✕</span> Fermer
                    </button>
                </div>
            </body>
        </html>
    `);
    printWindow.document.close();
}
</script>

<div class=\"container-fluid py-4\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
    
    <div class=\"card mb-4\">
        <div class=\"card-header pb-0\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h4>Gestion des Commandes</h4>
                </div>
                <div class=\"col-md-6 text-end\">
                    <a href=\"{{ path('admin_new_order') }}\" class=\"btn btn-primary btn-sm ms-auto\">
                        <i class=\"fas fa-plus\"></i> Nouvelle Commande
                    </a>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-3\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        <input type=\"text\" class=\"form-control\" id=\"orderSearch\" placeholder=\"Rechercher...\">
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"pending\">En attente</option>
                        <option value=\"validated\">Validée</option>
                        <option value=\"refused\">Refusée</option>
                        <option value=\"delivered\">Livrée</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <select class=\"form-select\" id=\"typeFilter\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"sur_place\">Sur place</option>
                        <option value=\"livraison\">Livraison</option>
                        <option value=\"emporter\">À emporter</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <input type=\"date\" class=\"form-control\" id=\"dateFilter\">
                </div>
            </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover align-middle\" id=\"ordersTable\">
            <thead>
                <tr>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">#</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Date</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Client</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Contact</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Détails</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Type</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Statut</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Résumé</th>
                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for key, order in orders %}
                <tr data-order-id=\"{{ key }}\">
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\">#{{ loop.index }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\" data-date>{{ order.orderDate }}</h6>
                                <p class=\"text-xs text-secondary mb-0\">{{ order.orderDate|date('H:i') }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <h6 class=\"mb-0 text-sm\" data-customer>{{ order.customerName ?? order.customerInfo.name ?? '-' }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\">
                                <p class=\"text-xs text-secondary mb-0\" data-phone>
                                    {% if order.customerInfo.phone is defined and order.customerInfo.phone %}
                                        <i class=\"fas fa-phone me-2\"></i>{{ order.customerInfo.phone }}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <div class=\"d-flex flex-column justify-content-center\" data-location>
                                {% if order.customerInfo.tableNumber is defined and order.customerInfo.tableNumber %}
                                    <p class=\"text-xs mb-0\">Table: {{ order.customerInfo.tableNumber }}</p>
                                {% endif %}
                                {% if order.customerInfo.address is defined and order.customerInfo.address %}
                                    <p class=\"text-xs text-secondary mb-0\">
                                        <i class=\"fas fa-map-marker-alt me-2\">address: </i>{{ order.customerInfo.address }}
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <span class=\"badge badge-sm 
                                {% if order.orderType == 'sur_place' %}bg-primary
                                {% elseif order.orderType == 'livraison' %}bg-info
                                {% else %}bg-secondary{% endif %}\"
                                data-type>
                                {{ order.orderType|capitalize }}
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex px-2 py-1\">
                            <span class=\"badge badge-sm
                                {% if order.status == 'pending' %}bg-warning
                                {% elseif order.status == 'validated' %}bg-success
                                {% elseif order.status == 'refused' %}bg-danger
                                {% elseif order.status == 'delivered' %}bg-info
                                {% else %}bg-secondary{% endif %}\"
                                data-status>
                                {{ order.status|capitalize }}
                            </span>
                        <div class=\"ms-2\">
                            <form method=\"post\" action=\"{{ path('admin_update_order_status', {'orderId': key}) }}\" class=\"d-inline\">
                                <select name=\"status\" class=\"form-select form-select-sm bg-gradient-light\" style=\"cursor: pointer;\" onchange=\"this.form.submit()\">
                                    <option value=\"pending\" {% if order.status == 'pending' %}selected{% endif %}>En attente</option>
                                    <option value=\"validated\" {% if order.status == 'validated' %}selected{% endif %}>Validée</option>
                                    <option value=\"refused\" {% if order.status == 'refused' %}selected{% endif %}>Refusée</option>
                                    <option value=\"delivered\" {% if order.status == 'delivered' %}selected{% endif %}>Livrée</option>
                                </select>
                            </form>
                        </div>
                    </td>
                    <td>
                        <button class=\"btn btn-sm bg-gradient-info mb-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#details-{{ key }}\" aria-expanded=\"false\" aria-controls=\"details-{{ key }}\">
                            <i class=\"fas fa-info-circle me-2\"></i>Détails
                        </button>
                        <div class=\"collapse\" id=\"details-{{ key }}\">
                            <div class=\"card card-body mt-2\">
                                <div class=\"table-responsive\">
                                    <table class=\"table align-items-center mb-0\">
                                        <thead>
                                            <tr>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Article</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Qté</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for item in order.items %}
                                                <tr>
                                                    <td>
                                                        <div class=\"d-flex px-2 py-1\">
                                                            <div class=\"d-flex flex-column justify-content-center\">
                                                                <h6 class=\"mb-0 text-sm\">{{ item.title }}</h6>
                                                                <p class=\"text-xs text-secondary mb-0\">{{ item.category }}</p>
                                                                {% if item.customizations is defined and item.customizations is not empty %}
                                                                    <p class=\"text-xs text-info mb-0\">{{ item.customizations|join(', ') }}</p>
                                                                {% endif %}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class=\"badge badge-sm bg-gradient-success\">x{{ item.quantity }}</span>
                                                    </td>
                                                    <td>
                                                        <span class=\"text-secondary text-xs font-weight-bold\">{{ item.totalPrice|number_format(2, '.', ' ') }} TND</span>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"d-flex justify-content-end mt-3\">
                                    <div class=\"text-end\">
                                        <p class=\"text-secondary mb-0\">Total</p>
                                        <h4 class=\"font-weight-bold mb-0\">{{ order.orderSummary.totalAmount|number_format(2, '.', ' ') }} TND</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center\" onclick=\"printOrder('{{ key }}');\" title=\"Imprimer\" style=\"cursor: pointer;\">
                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <title>print</title>
                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                        <path class=\"color-background\" d=\"M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z\" fill=\"#5e72e4\"/>
                                    </g>
                                </svg>
                            </div>
                            <form action=\"{{ path('admin_delete_order', {'orderId': key}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?');\" class=\"d-inline\">
                                <div class=\"icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center\" style=\"cursor: pointer;\" onclick=\"this.closest('form').submit(); return false;\" title=\"Supprimer\">
                                    <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <title>delete</title>
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <path class=\"color-background\" d=\"M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z\" fill=\"#f5365c\"/>
                                        </g>
                                    </svg>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"9\" class=\"text-center\">
                        <div class=\"d-flex flex-column align-items-center py-5\">
                            <i class=\"fas fa-inbox fa-3x text-secondary mb-3\"></i>
                            <h6 class=\"text-secondary\">Aucune commande trouvée</h6>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
</div>

{# Template for printing order details #}
<div id=\"printTemplate\" style=\"display: none;\">
    <div class=\"print-order\" id=\"printContent\">
        <div style=\"text-align: center; margin-bottom: 20px;\">
            <h2 style=\"color: #344767;\">Détails de la Commande</h2>
            <hr style=\"border: 1px solid #344767;\">
        </div>
        <div class=\"order-info\" style=\"margin-bottom: 20px;\">
            <table style=\"width: 100%; margin-bottom: 20px;\">
                <tr>
                    <td style=\"width: 50%; padding: 8px;\">
                        <strong>Client:</strong> <span id=\"print-customer\"></span>
                    </td>
                    <td style=\"width: 50%; padding: 8px;\">
                        <strong>Date:</strong> <span id=\"print-date\"></span>
                    </td>
                </tr>
                <tr>
                    <td style=\"padding: 8px;\">
                        <strong>Téléphone:</strong> <span id=\"print-phone\"></span>
                    </td>
                    <td style=\"padding: 8px;\">
                        <strong>Type:</strong> <span id=\"print-type\"></span>
                    </td>
                </tr>
                <tr>
                    <td style=\"padding: 8px;\">
                        <strong>Table/Adresse:</strong> <span id=\"print-location\"></span>
                    </td>
                    <td style=\"padding: 8px;\">
                        <strong>Statut:</strong> <span id=\"print-status\"></span>
                    </td>
                </tr>
            </table>
        </div>
        <div class=\"order-items\" style=\"margin-bottom: 20px;\">
            <h3 style=\"color: #344767; margin-bottom: 10px;\">Articles commandés</h3>
            <table style=\"width: 100%; border-collapse: collapse;\">
                <thead>
                    <tr style=\"background-color: #f8f9fa;\">
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: left;\">Article</th>
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: center;\">Quantité</th>
                        <th style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">Prix</th>
                    </tr>
                </thead>
                <tbody id=\"print-items\">
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\" style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">
                            <strong>Total:</strong>
                        </td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">
                            <strong id=\"print-total\"></strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{# Add JavaScript for filtering and search functionality #}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
// Fonction d'impression globale
function printOrder(orderId) {
    console.log('Fonction printOrder appelée avec orderId:', orderId);
    
    // Trouver la ligne de la commande
    const row = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
    if (!row) {
        console.error('Ligne de commande non trouvée:', orderId);
        return;
    }

    // Récupérer les données
    const orderData = {
        customer: row.querySelector('[data-customer]')?.textContent.trim() || 'N/A',
        date: row.querySelector('[data-date]')?.textContent.trim() || 'N/A',
        phone: row.querySelector('[data-phone]')?.textContent.trim() || 'N/A',
        type: row.querySelector('[data-type]')?.textContent.trim() || 'N/A',
        status: row.querySelector('[data-status]')?.textContent.trim() || 'N/A',
        location: row.querySelector('[data-location]')?.textContent.trim() || 'N/A'
    };

    console.log('Données récupérées:', orderData);

    // Récupérer les articles
    const items = [];
    const itemsTable = row.querySelector(`#details-\${orderId} tbody`);
    if (itemsTable) {
        itemsTable.querySelectorAll('tr').forEach(tr => {
            const item = {
                name: tr.querySelector('h6')?.textContent.trim() || '',
                quantity: tr.querySelector('.badge')?.textContent.replace('x', '').trim() || '',
                price: tr.querySelector('.text-secondary')?.textContent.trim() || ''
            };
            if (item.name && item.quantity && item.price) {
                items.push(item);
            }
        });
    }

    console.log('Articles récupérés:', items);

    // Créer le contenu HTML pour l'impression
    const printContent = `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Commande #\${orderId}</title>
            <meta charset=\"UTF-8\">
            <style>
                body { 
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    color: #344767;
                }
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                }
                .order-info {
                    margin-bottom: 30px;
                }
                .order-info table {
                    width: 100%;
                    margin-bottom: 20px;
                }
                .order-items {
                    margin-bottom: 30px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid #ddd;
                    text-align: left;
                }
                th {
                    background-color: #f8f9fa;
                }
                .total {
                    text-align: right;
                    font-weight: bold;
                    font-size: 1.2em;
                    margin-top: 20px;
                }
                @media print {
                    .no-print { display: none; }
                }
            </style>
        </head>
        <body>
            <div class=\"header\">
                <h1>Détails de la Commande #\${orderId}</h1>
            </div>
            <div class=\"order-info\">
                <table>
                    <tr>
                        <td><strong>Client:</strong> \${orderData.customer}</td>
                        <td><strong>Date:</strong> \${orderData.date}</td>
                    </tr>
                    <tr>
                        <td><strong>Téléphone:</strong> \${orderData.phone}</td>
                        <td><strong>Type:</strong> \${orderData.type}</td>
                    </tr>
                    <tr>
                        <td><strong>Localisation:</strong> \${orderData.location}</td>
                        <td><strong>Statut:</strong> \${orderData.status}</td>
                    </tr>
                </table>
            </div>
            <div class=\"order-items\">
                <h2>Articles commandés</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${items.map(item => `
                            <tr>
                                <td>\${item.name}</td>
                                <td>\${item.quantity}</td>
                                <td>\${item.price}</td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                <div class=\"total\">
                    Total: \${row.querySelector('h4')?.textContent.trim() || 'N/A'}
                </div>
            </div>
            <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                <button onclick=\"window.print();return false;\" style=\"padding: 10px 20px; cursor: pointer;\">
                    Imprimer
                </button>
            </div>
        </body>
        </html>
    `;

    // Ouvrir la fenêtre d'impression
    const printWindow = window.open('', '_blank');
    if (printWindow) {
        printWindow.document.write(printContent);
        printWindow.document.close();
    } else {
        alert(\"Veuillez autoriser les popups pour l'impression\");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('orderSearch');
    const statusFilter = document.getElementById('statusFilter');
    const typeFilter = document.getElementById('typeFilter');
    const dateFilter = document.getElementById('dateFilter');
    const table = document.getElementById('ordersTable');
    const rows = table.getElementsByTagName('tr');

    function filterTable() {
        const searchText = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const typeValue = typeFilter.value.toLowerCase();
        const dateValue = dateFilter.value;

        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            if (cells.length === 0) continue;

            const customerName = cells[2].textContent.toLowerCase();
            const status = cells[6].textContent.toLowerCase();
            const type = cells[5].textContent.toLowerCase();
            const date = cells[1].textContent;

            const matchesSearch = searchText === '' || customerName.includes(searchText);
            const matchesStatus = statusValue === '' || status.includes(statusValue);
            const matchesType = typeValue === '' || type.includes(typeValue);
            const matchesDate = dateValue === '' || date.includes(dateValue);

            row.style.display = (matchesSearch && matchesStatus && matchesType && matchesDate) ? '' : 'none';
        }
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    dateFilter.addEventListener('input', filterTable);

    // Fonction pour imprimer une commande spécifique
    window.printOrder = function(orderId) {
        console.log(\"Printing order:\", orderId); // Debug log
        
        // Récupérer les données de la commande
        const row = document.querySelector(`tr[data-order-id=\"\${orderId}\"]`);
        if (!row) {
            console.error(\"Row not found for order:\", orderId);
            return;
        }

        try {
            // Remplir le template d'impression
            const customerElement = row.querySelector('[data-customer]');
            const dateElement = row.querySelector('[data-date]');
            const phoneElement = row.querySelector('[data-phone]');
            const typeElement = row.querySelector('[data-type]');
            const locationElement = row.querySelector('[data-location]');
            const statusElement = row.querySelector('[data-status]');

            if (!customerElement || !dateElement || !typeElement || !statusElement) {
                console.error(\"Required elements not found\");
                return;
            }

            document.getElementById('print-customer').textContent = customerElement.textContent.trim();
            document.getElementById('print-date').textContent = dateElement.textContent.trim();
            document.getElementById('print-phone').textContent = phoneElement ? phoneElement.textContent.trim() : 'N/A';
            document.getElementById('print-type').textContent = typeElement.textContent.trim();
            document.getElementById('print-location').textContent = locationElement ? locationElement.textContent.trim() : 'N/A';
            document.getElementById('print-status').textContent = statusElement.textContent.trim();

        try {
            // Récupérer les articles
            const itemsContainer = row.querySelector(`#details-\${orderId}`);
            if (!itemsContainer) {
                console.error(\"Items container not found\");
                return;
            }

            const printItemsBody = document.getElementById('print-items');
            if (!printItemsBody) {
                console.error(\"Print items body not found\");
                return;
            }

            printItemsBody.innerHTML = '';

            const items = itemsContainer.querySelectorAll('tbody tr');
            items.forEach(item => {
                try {
                    const titleElement = item.querySelector('h6');
                    const quantityElement = item.querySelector('.badge');
                    const priceElement = item.querySelector('.text-secondary');

                    if (!titleElement || !quantityElement || !priceElement) {
                        console.error(\"Item elements not found\");
                        return;
                    }

                    const title = titleElement.textContent.trim();
                    const quantity = quantityElement.textContent.replace('x', '').trim();
                    const price = priceElement.textContent.trim();

                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td style=\"padding: 12px; border: 1px solid #dee2e6;\">\${title}</td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: center;\">\${quantity}</td>
                        <td style=\"padding: 12px; border: 1px solid #dee2e6; text-align: right;\">\${price}</td>
                    `;
                    printItemsBody.appendChild(tr);
                } catch (error) {
                    console.error(\"Error processing item:\", error);
                }
            });

            // Mettre à jour le total
            const totalElement = itemsContainer.querySelector('h4');
            if (!totalElement) {
                console.error(\"Total element not found\");
                return;
            }
            document.getElementById('print-total').textContent = totalElement.textContent.trim();

        try {
            // Créer une nouvelle fenêtre pour l'impression
            const printTemplate = document.getElementById('printTemplate');
            if (!printTemplate) {
                console.error(\"Print template not found\");
                return;
            }

            const printWindow = window.open('', '_blank');
            if (!printWindow) {
                alert(\"Veuillez autoriser les popups pour l'impression\");
                return;
            }

            const printContent = document.getElementById('printContent');
            if (!printContent) {
                console.error(\"Print content not found\");
                return;
            }

            printWindow.document.write(`
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>Impression Commande #\${orderId}</title>
                        <meta charset=\"UTF-8\">
                        <style>
                            body { 
                                font-family: Arial, sans-serif;
                                margin: 20px;
                                color: #344767;
                            }
                            table { 
                                width: 100%;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                            }
                            th, td {
                                padding: 12px;
                                border: 1px solid #dee2e6;
                            }
                            th {
                                background-color: #f8f9fa;
                                text-align: left;
                            }
                            .print-order {
                                max-width: 800px;
                                margin: 0 auto;
                            }
                            @media print {
                                .no-print { display: none; }
                                body { margin: 0; }
                                @page { margin: 2cm; }
                            }
                        </style>
                    </head>
                    <body>
                        \${printContent.outerHTML}
                        <div class=\"no-print\" style=\"text-align: center; margin-top: 20px;\">
                            <button onclick=\"window.print();window.close();\" 
                                    style=\"padding: 10px 20px; cursor: pointer;\">
                                Imprimer
                            </button>
                        </div>
                    </body>
                </html>
            `);
            printWindow.document.close();
        } catch (error) {
            console.error(\"Error creating print window:\", error);
            alert(\"Une erreur s'est produite lors de la préparation de l'impression\");
        }
    };
});
</script>
{% endblock %}
", "order/admin_orders.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\order\\admin_orders.html.twig");
    }
}
