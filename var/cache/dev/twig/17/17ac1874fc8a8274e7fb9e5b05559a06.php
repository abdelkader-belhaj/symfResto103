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

/* dashboard/index.html.twig */
class __TwigTemplate_96cfc16844cfd683c50f36519dba0b63 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Tableau de Bord - Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<style>
    .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(145deg, #ffffff                                 <div class=\"col-6 col-md-3\">
                                    <div class=\"p-3 bg-warning bg-opacity-10 rounded-3 text-center\">
                                        <div class=\"text-warning mb-1\"><i class=\"fas fa-clock\"></i></div>
                                        <h6 class=\"mb-0\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "tables", [], "any", false, false, false, 15), "reserved", [], "any", false, false, false, 15), "html", null, true);
        yield "</h6>
                                        <small class=\"text-muted\">Réservées</small>
                                    </div>
                                </div>f9fa 100%);
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    .stat-icon {
        width: 64px;
        height: 64px;
        border-radius:                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(data => {
                            throw new Error(data.error || 'Une erreur est survenue lors de la mise à jour du statut.');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    alert(data.message);
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert(error.message || 'Une erreur est survenue lors de la mise à jour du statut.');
                });   display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    .stat-icon i {
        font-size: 1.8rem;
        color: white;
    }
    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.5rem 0;
        background: linear-gradient(120deg, #4a90e2, #357abd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .stat-label {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6c757d;
    }
    .dashboard-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
    }
    .dashboard-card h3 {
        color: #2c3e50;
        font-weight: 600;
        border-bottom: 2px solid #f8f9fa;
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
    }
    .table {
        border-collapse: separate;
        border-spacing: 0;
    }
    .table thead th {
        background: #f8f9fa;
        border: none;
        padding: 1rem;
        font-weight: 600;
        color: #2c3e50;
    }
    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-top: 1px solid #f1f1f1;
    }
    .badge {
        padding: 0.5rem 1rem;
        font-weight: 500;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }
    .btn {
        padding: 0.4rem 0.8rem;
        transition: all 0.2s;
    }
    .btn i {
        font-size: 0.875rem;
    }
    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-info {
        color: #fff;
    }
    .btn-info:hover {
        color: #fff;
    }
    .table td .d-flex.gap-2 {
        margin: -0.25rem;
    }
    .table td .d-flex.gap-2 > * {
        margin: 0.25rem;
    }
    .status-available {
        background: linear-gradient(145deg, #28a745 0%, #218838 100%);
        color: white;
    }
    .status-reserved {
        background: linear-gradient(145deg, #ffc107 0%, #ffdb4d 100%);
        color: #876500;
    }
    .status-occupied {
        background: linear-gradient(145deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .status-maintenance {
        background: linear-gradient(145deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    #salesChart {
        min-height: 100px;
    }
    .progress {
        height: 8px;
        margin-top: 0.5rem;
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 162
        yield "<div class=\"container-fluid px-4 py-5\">
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Tableau de Bord</h1>
        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
            <i class=\"fas fa-download fa-sm text-white-50 me-2\"></i>Télécharger le rapport
        </a>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon bg-primary\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 180, $this->source); })()), "totalOrders", [], "any", false, false, false, 180), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Commandes</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 75%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #00a65a, #00c853);\">
                            <i class=\"fas fa-euro-sign\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 198, $this->source); })()), "totalRevenue", [], "any", false, false, false, 198), 2, ".", " "), "html", null, true);
        yield " €</div>
                            <div class=\"stat-label\">Revenus</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-success\" style=\"width: 65%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #f39c12, #f1c40f);\">
                            <i class=\"fas fa-calendar-check\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 216, $this->source); })()), "pendingReservations", [], "any", false, false, false, 216), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Réservations</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #605ca8, #7c4dff);\">
                            <i class=\"fas fa-users\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 234, $this->source); })())), "html", null, true);
        yield "</div>
                            <div class=\"stat-label\">Tables</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-info\" style=\"width: 85%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques et Tables -->
    <div class=\"row g-4\">
        <!-- Graphique des ventes -->
        <div class=\"col-xl-8\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Évolution des Ventes</h6>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-link text-dark p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-download me-2\"></i>Télécharger</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-print me-2\"></i>Imprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"salesChart\"></canvas>
                </div>
            </div>
        </div>

        <!-- Plats populaires -->
        <div class=\"col-xl-4\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-crown text-warning me-2\"></i>Top Plats
                    </h6>
                    <div class=\"bg-light rounded-pill px-3 py-1 small\">
                        <i class=\"fas fa-chart-line text-success me-1\"></i>
                        <span class=\"text-muted\">Meilleurs vendeurs</span>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 282
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 282, $this->source); })()))) {
            // line 283
            yield "                        <div class=\"text-center py-5\">
                            <div class=\"mb-3\">
                                <i class=\"fas fa-utensils fa-3x text-muted opacity-50\"></i>
                            </div>
                            <h6 class=\"text-muted mb-2\">Aucun plat commandé</h6>
                            <p class=\"text-muted small mb-0\">Les plats les plus populaires apparaîtront ici</p>
                        </div>
                    ";
        } else {
            // line 291
            yield "                        <div class=\"top-2-dishes mb-4\">
                            ";
            // line 293
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 293, $this->source); })()), 0, 2));
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
            foreach ($context['_seq'] as $context["dishId"] => $context["count"]) {
                // line 294
                yield "                                ";
                $context["dish"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 294, $this->source); })()), $context["dishId"], [], "array", false, false, false, 294);
                // line 295
                yield "                                ";
                $context["position"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 295);
                // line 296
                yield "                                <div class=\"dish-card p-3 mb-3 bg-light rounded-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"position-indicator me-3\">
                                            ";
                // line 299
                if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 299, $this->source); })()) == 1)) {
                    // line 300
                    yield "                                                <i class=\"fas fa-trophy text-warning fa-2x\"></i>
                                            ";
                } else {
                    // line 302
                    yield "                                                <i class=\"fas fa-medal text-secondary fa-2x\"></i>
                                            ";
                }
                // line 304
                yield "                                        </div>
                                        
                                        <div class=\"dish-info flex-grow-1\">
                                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                                <h6 class=\"mb-0 fw-bold\">
                                                    ";
                // line 309
                if (array_key_exists("dish", $context)) {
                    // line 310
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "titre", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 310, $this->source); })()), "titre", [], "any", false, false, false, 310), ("Plat #" . Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8)))) : (("Plat #" . Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8)))), "html", null, true);
                    yield "
                                                    ";
                } else {
                    // line 312
                    yield "                                                        Plat #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8), "html", null, true);
                    yield "
                                                    ";
                }
                // line 314
                yield "                                                </h6>
                                                <span class=\"badge bg-primary rounded-pill ms-2\">
                                                    ";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield " commandes
                                                </span>
                                            </div>
                                            
                                            <div class=\"progress\" style=\"height: 8px;\">
                                                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\"
                                                     role=\"progressbar\"
                                                     style=\"width: ";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 323, $this->source); })()))) * 100)), "html", null, true);
                yield "%\">
                                                </div>
                                            </div>
                                            
                                            <div class=\"mt-2 small\">
                                                <i class=\"fas fa-chart-line text-success me-1\"></i>
                                                <span class=\"text-muted\">";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 329, $this->source); })()))) * 100)), "html", null, true);
                yield "% des ventes</span>
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
            unset($context['_seq'], $context['dishId'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            yield "                        </div>

                        ";
            // line 338
            yield "                        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 338, $this->source); })())) > 2)) {
                // line 339
                yield "                            <div class=\"other-dishes mt-3\">
                                <div class=\"text-muted mb-2\">
                                    <i class=\"fas fa-list me-2\"></i>Autres plats populaires
                                </div>
                                <div id=\"otherDishesCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
                                    <div class=\"carousel-inner\">
                                        ";
                // line 345
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 345, $this->source); })()), 2));
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
                foreach ($context['_seq'] as $context["dishId"] => $context["count"]) {
                    // line 346
                    yield "                                            ";
                    $context["dish"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 346, $this->source); })()), $context["dishId"], [], "array", false, false, false, 346);
                    // line 347
                    yield "                                            ";
                    $context["position"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 347) + 3);
                    // line 348
                    yield "                                            <div class=\"carousel-item ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active";
                    }
                    yield "\">
                                                <div class=\"dish-card p-3\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"position-number me-3\">
                                                            <span class=\"fw-bold text-muted\">#";
                    // line 352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 352, $this->source); })()), "html", null, true);
                    yield "</span>
                                                        </div>
                                                        
                                                        <div class=\"dish-info flex-grow-1\">
                                                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                                                <h6 class=\"mb-0 fw-bold\">
                                                                    ";
                    // line 358
                    if (array_key_exists("dish", $context)) {
                        // line 359
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["dish"] ?? null), "titre", [], "any", true, true, false, 359)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dish"]) || array_key_exists("dish", $context) ? $context["dish"] : (function () { throw new RuntimeError('Variable "dish" does not exist.', 359, $this->source); })()), "titre", [], "any", false, false, false, 359), ("Plat #" . Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8)))) : (("Plat #" . Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8)))), "html", null, true);
                        yield "
                                                                    ";
                    } else {
                        // line 361
                        yield "                                                                        Plat #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["dishId"], 0, 8), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 363
                    yield "                                                                </h6>
                                                                <span class=\"badge bg-primary rounded-pill ms-2\">
                                                                    ";
                    // line 365
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                    yield " commandes
                                                                </span>
                                                            </div>
                                                            
                                                            <div class=\"progress\" style=\"height: 8px;\">
                                                                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-primary\"
                                                                     role=\"progressbar\"
                                                                     style=\"width: ";
                    // line 372
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["popularDishes"]) || array_key_exists("popularDishes", $context) ? $context["popularDishes"] : (function () { throw new RuntimeError('Variable "popularDishes" does not exist.', 372, $this->source); })()))) * 100)), "html", null, true);
                    yield "%\">
                                                                </div>
                                                            </div>
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
                unset($context['_seq'], $context['dishId'], $context['count'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 380
                yield "                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#otherDishesCarousel\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                        <span class=\"visually-hidden\">Précédent</span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#otherDishesCarousel\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                        <span class=\"visually-hidden\">Suivant</span>
                                    </button>
                                </div>
                            </div>
                        ";
            }
            // line 392
            yield "                    ";
        }
        // line 393
        yield "                </div>
            </div>
            <style>
                .text-bronze {
                    color: #cd7f32;
                }
                .dish-card {
                    transition: transform 0.2s ease-in-out;
                }
                .dish-card:hover {
                    transform: translateY(-2px);
                }
                .progress-bar-animated {
                    animation: progress-bar-stripes 1s linear infinite;
                }
            </style>
        </div>

        <!-- Dernières commandes -->
        <div class=\"col-xl-8\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Dernières Commandes</h6>
                    <a href=\"/admin/orders\" class=\"btn btn-sm btn-primary\">
                        Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                    </a>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID Commande</th>
                                    <th>Client</th>
                                    <th>Total</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 433
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recentOrders"]) || array_key_exists("recentOrders", $context) ? $context["recentOrders"] : (function () { throw new RuntimeError('Variable "recentOrders" does not exist.', 433, $this->source); })()))) {
            // line 434
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <i class=\"fas fa-inbox fa-2x text-muted mb-3\"></i>
                                            <p class=\"text-muted\">Aucune commande récente</p>
                                        </td>
                                    </tr>
                                ";
        } else {
            // line 441
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentOrders"]) || array_key_exists("recentOrders", $context) ? $context["recentOrders"] : (function () { throw new RuntimeError('Variable "recentOrders" does not exist.', 441, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["order"]) {
                // line 442
                yield "                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <i class=\"fas fa-shopping-bag text-primary me-2\"></i>
                                                #";
                // line 446
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["id"], 0, 8), "html", null, true);
                yield "
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"rounded-circle bg-light p-2 me-2\">
                                                    <i class=\"fas fa-user text-primary\"></i>
                                                </div>
                                                <div>
                                                    <span class=\"fw-medium\">";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 455), "Client inconnu")) : ("Client inconnu")), "html", null, true);
                yield "</span>
                                                    ";
                // line 456
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "phone", [], "any", false, false, false, 456)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 457
                    yield "                                                        <br>
                                                        <small class=\"text-muted\">";
                    // line 458
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "phone", [], "any", false, false, false, 458), "html", null, true);
                    yield "</small>
                                                    ";
                }
                // line 460
                yield "                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"fw-bold\">";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderSummary", [], "any", false, true, false, 464), "totalAmount", [], "any", true, true, false, 464)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderSummary", [], "any", false, false, false, 464), "totalAmount", [], "any", false, false, false, 464), ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", true, true, false, 464)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 464), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", true, true, false, 464)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 464), 0)) : (0)))), 2, ".", " "), "html", null, true);
                yield " €</span>
                                        </td>
                                        <td>
                                            ";
                // line 467
                $context["orderStatus"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderSummary", [], "any", false, true, false, 467), "status", [], "any", true, true, false, 467)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderSummary", [], "any", false, false, false, 467), "status", [], "any", false, false, false, 467), ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", true, true, false, 467)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 467), "pending")) : ("pending")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", true, true, false, 467)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 467), "pending")) : ("pending"))));
                // line 468
                yield "                                            ";
                $context["statusLabels"] = ["pending" => "En attente", "validated" => "Validé", "delivered" => "Livré", "rejected" => "Refusé"];
                // line 474
                yield "                                            ";
                $context["statusClasses"] = ["pending" => "warning", "validated" => "info", "delivered" => "success", "rejected" => "danger"];
                // line 480
                yield "                                            <span class=\"badge bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusClasses"] ?? null), (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 480, $this->source); })()), [], "array", true, true, false, 480)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusClasses"]) || array_key_exists("statusClasses", $context) ? $context["statusClasses"] : (function () { throw new RuntimeError('Variable "statusClasses" does not exist.', 480, $this->source); })()), (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 480, $this->source); })()), [], "array", false, false, false, 480), "warning")) : ("warning")), "html", null, true);
                yield "\">
                                                ";
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 481, $this->source); })()), [], "array", true, true, false, 481)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 481, $this->source); })()), (isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 481, $this->source); })()), [], "array", false, false, false, 481), "En attente")) : ("En attente")), "html", null, true);
                yield "
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center justify-content-end gap-2\">
                                                <button type=\"button\" class=\"btn btn-sm btn-info view-order-details\" data-order-id=\"";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                yield "\" title=\"Voir les détails\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </button>
                                                ";
                // line 489
                if (((isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 489, $this->source); })()) == "pending")) {
                    // line 490
                    yield "                                                    <button type=\"button\" class=\"btn btn-sm btn-success update-status\" data-order-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\" data-status=\"validated\" title=\"Valider la commande\">
                                                        <i class=\"fas fa-check\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-sm btn-danger update-status\" data-order-id=\"";
                    // line 493
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\" data-status=\"rejected\" title=\"Refuser la commande\">
                                                        <i class=\"fas fa-times\"></i>
                                                    </button>
                                                ";
                }
                // line 497
                yield "                                                ";
                if (((isset($context["orderStatus"]) || array_key_exists("orderStatus", $context) ? $context["orderStatus"] : (function () { throw new RuntimeError('Variable "orderStatus" does not exist.', 497, $this->source); })()) == "validated")) {
                    // line 498
                    yield "                                                    <button type=\"button\" class=\"btn btn-sm btn-success update-status\" data-order-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\" data-status=\"delivered\" title=\"Marquer comme livrée\">
                                                        <i class=\"fas fa-truck\"></i>
                                                    </button>
                                                ";
                }
                // line 502
                yield "                                            </div>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 506
            yield "                                ";
        }
        // line 507
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- État des tables -->
        <div class=\"col-xl-4\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">État des Tables</h6>
                    <a href=\"/tables\" class=\"btn btn-sm btn-primary\">
                        Gérer <i class=\"fas fa-cog ms-1\"></i>
                    </a>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 524
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 524, $this->source); })()))) {
            // line 525
            yield "                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-chair fa-3x mb-3\"></i>
                            <p>Aucune table configurée</p>
                        </div>
                    ";
        } else {
            // line 530
            yield "                        <!-- Légende des statuts -->
                        <div class=\"status-legend p-3 border-bottom\">
                            <div class=\"row g-2\">
                                <div class=\"col-12 mb-2\">
                                    <h6 class=\"text-muted mb-0 small\">Légende des statuts :</h6>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-success rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 540, $this->source); })()), "tables", [], "any", false, false, false, 540), "available", [], "any", false, false, false, 540), "html", null, true);
            yield "</div>
                                            <div class=\"status-label small\">Disponibles</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-warning rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 549, $this->source); })()), "tables", [], "any", false, false, false, 549), "reserved", [], "any", false, false, false, 549), "html", null, true);
            yield "</div>
                                            <div class=\"status-label small\">Réservées</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-info rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 558, $this->source); })()), "tables", [], "any", false, false, false, 558), "occupied", [], "any", false, false, false, 558), "html", null, true);
            yield "</div>
                                            <div class=\"status-label small\">Occupées</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-danger rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 567, $this->source); })()), "tables", [], "any", false, false, false, 567), "maintenance", [], "any", false, false, false, 567), "html", null, true);
            yield "</div>
                                            <div class=\"status-label small\">Maintenance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"tablesCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
                            <div class=\"carousel-inner\">
                                ";
            // line 577
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch((isset($context["tables"]) || array_key_exists("tables", $context) ? $context["tables"] : (function () { throw new RuntimeError('Variable "tables" does not exist.', 577, $this->source); })()), 4));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tables_chunk"]) {
                // line 578
                yield "                                    <div class=\"carousel-item ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 578)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "active";
                }
                yield "\">
                                        <div class=\"tables-grid p-3\">
                                            ";
                // line 580
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["tables_chunk"]);
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
                foreach ($context['_seq'] as $context["id"] => $context["table"]) {
                    // line 581
                    yield "                                                <div class=\"table-card mb-2 border rounded ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 581)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "border-bottom";
                    }
                    yield " bg-white\">
                                                    <div class=\"d-flex align-items-center p-2\">
                                                        <div class=\"table-info flex-grow-1\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <span class=\"status-dot 
                                                                    ";
                    // line 586
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 586) == "available")) {
                        yield "bg-success
                                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 587
$context["table"], "status", [], "any", false, false, false, 587) == "reserved")) {
                        yield "bg-warning
                                                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 588
$context["table"], "status", [], "any", false, false, false, 588) == "occupied")) {
                        yield "bg-info
                                                                    ";
                    } else {
                        // line 589
                        yield "bg-danger";
                    }
                    yield "\">
                                                                </span>
                                                                <span class=\"table-number ms-2\">Table ";
                    // line 591
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "number", [], "any", false, false, false, 591), "html", null, true);
                    yield "</span>
                                                                <span class=\"capacity ms-2 text-muted\">
                                                                    <i class=\"fas fa-users small\"></i> ";
                    // line 593
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "capacity", [], "any", false, false, false, 593), "html", null, true);
                    yield "
                                                                </span>
                                                            </div>
                                                            ";
                    // line 596
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 596) == "reserved") && CoreExtension::getAttribute($this->env, $this->source, $context["table"], "reservation", [], "any", true, true, false, 596))) {
                        // line 597
                        yield "                                                                <div class=\"reservation-info small text-warning mt-1\">
                                                                    <i class=\"fas fa-user me-1\"></i>";
                        // line 598
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["table"], "reservation", [], "any", false, false, false, 598), "customerName", [], "any", false, false, false, 598), "html", null, true);
                        yield "
                                                                    (";
                        // line 599
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["table"], "reservation", [], "any", false, false, false, 599), "persons", [], "any", false, false, false, 599), "html", null, true);
                        yield " pers.)
                                                                </div>
                                                            ";
                    }
                    // line 602
                    yield "                                                        </div>
                                                        <div class=\"table-actions\">
                                                            <div class=\"status-actions\">
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status ";
                    // line 606
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 606) == "available")) {
                        yield "active";
                    }
                    yield "\"
                                                                        data-table-id=\"";
                    // line 607
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "id", [], "any", false, false, false, 607), "html", null, true);
                    yield "\" 
                                                                        data-status=\"available\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme disponible\"
                                                                        ";
                    // line 611
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 611) == "available")) {
                        yield "disabled";
                    }
                    yield ">
                                                                    <span class=\"status-icon bg-success\">
                                                                        <i class=\"fas fa-check\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status ";
                    // line 617
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 617) == "reserved")) {
                        yield "active";
                    }
                    yield "\"
                                                                        data-table-id=\"";
                    // line 618
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "id", [], "any", false, false, false, 618), "html", null, true);
                    yield "\" 
                                                                        data-status=\"reserved\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme réservée\"
                                                                        ";
                    // line 622
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 622) == "reserved")) {
                        yield "disabled";
                    }
                    yield ">
                                                                    <span class=\"status-icon bg-warning\">
                                                                        <i class=\"fas fa-clock\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status ";
                    // line 628
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 628) == "occupied")) {
                        yield "active";
                    }
                    yield "\"
                                                                        data-table-id=\"";
                    // line 629
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "id", [], "any", false, false, false, 629), "html", null, true);
                    yield "\" 
                                                                        data-status=\"occupied\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme occupée\"
                                                                        ";
                    // line 633
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 633) == "occupied")) {
                        yield "disabled";
                    }
                    yield ">
                                                                    <span class=\"status-icon bg-info\">
                                                                        <i class=\"fas fa-users\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status ";
                    // line 639
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 639) == "maintenance")) {
                        yield "active";
                    }
                    yield "\"
                                                                        data-table-id=\"";
                    // line 640
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "id", [], "any", false, false, false, 640), "html", null, true);
                    yield "\" 
                                                                        data-status=\"maintenance\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Mettre en maintenance\"
                                                                        ";
                    // line 644
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["table"], "status", [], "any", false, false, false, 644) == "maintenance")) {
                        yield "disabled";
                    }
                    yield ">
                                                                    <span class=\"status-icon bg-danger\">
                                                                        <i class=\"fas fa-tools\"></i>
                                                                    </span>
                                                                </button>
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
                unset($context['_seq'], $context['id'], $context['table'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 654
                yield "                                        </div>
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
            unset($context['_seq'], $context['_key'], $context['tables_chunk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 657
            yield "                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#tablesCarousel\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Précédent</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#tablesCarousel\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Suivant</span>
                            </button>
                        </div>
                        
                        <style>
                            .status-legend {
                                background-color: #f8f9fa;
                            }
                            .status-indicator {
                                width: 12px;
                                height: 12px;
                                min-width: 12px;
                            }
                            .status-info {
                                line-height: 1.2;
                            }
                            .status-count {
                                color: #333;
                            }
                            .status-label {
                                color: #666;
                            }
                            .status-dot {
                                width: 8px;
                                height: 8px;
                                border-radius: 50%;
                                display: inline-block;
                            }
                            .table-card {
                                transition: transform 0.2s;
                            }
                            .table-card:hover {
                                transform: translateY(-2px);
                            }
                            .carousel-control-prev,
                            .carousel-control-next {
                                width: 10%;
                                background: rgba(0,0,0,0.1);
                                border-radius: 4px;
                                height: 40px;
                                top: 50%;
                                transform: translateY(-50%);
                            }
                            .carousel-control-prev-icon,
                            .carousel-control-next-icon {
                                background-color: rgba(0,0,0,0.5);
                                border-radius: 50%;
                                padding: 10px;
                            }
                            .status-actions {
                                display: flex;
                                gap: 5px;
                            }
                            .action-btn {
                                border: none;
                                background: none;
                                padding: 0;
                                cursor: pointer;
                                opacity: 0.5;
                                transition: all 0.2s ease;
                            }
                            .action-btn:hover {
                                opacity: 0.8;
                                transform: translateY(-2px);
                            }
                            .action-btn.active {
                                opacity: 1;
                            }
                            .status-icon {
                                width: 30px;
                                height: 30px;
                                border-radius: 8px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                color: white;
                            }
                            .status-icon i {
                                font-size: 0.9rem;
                            }
                            .table-number {
                                font-weight: 600;
                            }
                            .capacity {
                                font-size: 0.85rem;
                            }
                            .reservation-info {
                                opacity: 0.8;
                            }
                        </style>
                    ";
        }
        // line 755
        yield "                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            placement: 'top',
            trigger: 'hover'
        });
    });
    // Graphique des ventes
    const salesData = ";
        // line 772
        yield json_encode((isset($context["salesData"]) || array_key_exists("salesData", $context) ? $context["salesData"] : (function () { throw new RuntimeError('Variable "salesData" does not exist.', 772, $this->source); })()));
        yield ";
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    // Filtrer les jours avec ventes
    const filteredLabels = Object.keys(salesData).filter(date => salesData[date] > 0);
    const filteredData = filteredLabels.map(date => salesData[date]);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: filteredLabels.map(date => {
                const d = new Date(date);
                return d.toLocaleDateString('fr-FR', {day: 'numeric', month: 'short'});
            }),
            datasets: [{
                label: 'Ventes quotidiennes (€)',
                data: filteredData,
                backgroundColor: (context) => {
                    const ctx = context.chart.ctx;
                    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
                    gradient.addColorStop(0, 'rgba(47, 97, 255, 0.7)');
                    gradient.addColorStop(1, 'rgba(47, 97, 255, 0.1)');
                    return gradient;
                },
                borderRadius: 6,
                maxBarThickness: 24
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            family: \"'Segoe UI', sans-serif\",
                            size: 13
                        },
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    titleColor: '#000',
                    titleFont: {
                        size: 13,
                        family: \"'Segoe UI', sans-serif\",
                        weight: '600'
                    },
                    bodyColor: '#666',
                    bodyFont: {
                        size: 12,
                        family: \"'Segoe UI', sans-serif\"
                    },
                    borderColor: 'rgba(47, 97, 255, 0.3)',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: false,
                    callbacks: {
                        title: function(tooltipItems) {
                            const date = new Date(filteredLabels[tooltipItems[0].dataIndex]);
                            return date.toLocaleDateString('fr-FR', {
                                weekday: 'long',
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            });
                        },
                        label: function(context) {
                            return 'Ventes: ' + context.parsed.y.toLocaleString('fr-FR') + ' €';
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 11,
                            family: \"'Segoe UI', sans-serif\"
                        },
                        color: '#666'
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        font: {
                            size: 11,
                            family: \"'Segoe UI', sans-serif\"
                        },
                        color: '#666',
                        callback: function(value) {
                            return value.toLocaleString('fr-FR') + ' €';
                        }
                    }
                }
            }
        }
    });

    // Gestion des mises à jour de statut
    document.querySelectorAll('.update-status').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const orderId = this.dataset.orderId;
            const newStatus = this.dataset.status;
            
            if (confirm('Voulez-vous vraiment modifier le statut de cette commande ?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '";
        // line 891
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_order_status", ["orderId" => "ORDER_ID"]);
        yield "'.replace('ORDER_ID', orderId);
                
                const statusInput = document.createElement('input');
                statusInput.type = 'hidden';
                statusInput.name = 'status';
                statusInput.value = newStatus;
                
                form.appendChild(statusInput);
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Gestion des détails des commandes
    const orders = ";
        // line 906
        yield json_encode((isset($context["recentOrders"]) || array_key_exists("recentOrders", $context) ? $context["recentOrders"] : (function () { throw new RuntimeError('Variable "recentOrders" does not exist.', 906, $this->source); })()));
        yield ";
    document.querySelectorAll('.view-order-details').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const orderId = this.dataset.orderId;
            const order = orders[orderId];
            
            let itemsHtml = '';
            if (order.items) {
                itemsHtml = order.items.map(item => `
                    <tr>
                        <td>\${item.title}</td>
                        <td>\${item.quantity}</td>
                        <td>\${item.unitPrice} €</td>
                        <td>\${item.totalPrice} €</td>
                    </tr>
                `).join('');
            }

            const modalHtml = `
                <div class=\"modal fade\" id=\"orderDetailsModal\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">Détails de la commande #\${orderId.slice(0, 8)}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row mb-4\">
                                    <div class=\"col-md-6\">
                                        <h6>Informations client</h6>
                                        <p><strong>Nom:</strong> \${order.customerName || 'Non spécifié'}</p>
                                        <p><strong>Téléphone:</strong> \${order.phone || 'Non spécifié'}</p>
                                        <p><strong>Table:</strong> \${order.tableNumber || 'Non spécifié'}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Informations commande</h6>
                                        <p><strong>Date:</strong> \${order.orderDate || 'Non spécifié'}</p>
                                        <p><strong>Type:</strong> \${order.orderType || 'Sur place'}</p>
                                        <p><strong>Statut:</strong> \${order.status || 'En attente'}</p>
                                    </div>
                                </div>
                                <h6>Articles commandés</h6>
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Article</th>
                                                <th>Quantité</th>
                                                <th>Prix unitaire</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            \${itemsHtml}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"text-end mt-3\">
                                    <h5>Total: \${order.orderSummary?.totalAmount || order.total || 0} €</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Supprimer l'ancien modal s'il existe
            const oldModal = document.getElementById('orderDetailsModal');
            if (oldModal) {
                oldModal.remove();
            }

            // Ajouter le nouveau modal
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            
            // Afficher le modal
            const modal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
            modal.show();
        });
    });

    // Gestion des changements de statut des tables
    document.querySelectorAll('.update-table-status').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const tableId = this.dataset.tableId;
            const newStatus = this.dataset.status;
            
            if (confirm('Voulez-vous vraiment changer le statut de cette table ?')) {
                fetch(`";
        // line 996
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_table_status", ["tableId" => "TABLE_ID"]);
        yield "`.replace('TABLE_ID', tableId), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '";
        // line 1000
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-table-status"), "html", null, true);
        yield "'
                    },
                    body: JSON.stringify({
                        status: newStatus
                    })
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        alert('Une erreur est survenue lors de la mise à jour du statut.');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue lors de la mise à jour du statut.');
                });
            }
        });
    });
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
        return "dashboard/index.html.twig";
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
        return array (  1484 => 1000,  1477 => 996,  1384 => 906,  1366 => 891,  1244 => 772,  1225 => 755,  1125 => 657,  1109 => 654,  1083 => 644,  1076 => 640,  1070 => 639,  1059 => 633,  1052 => 629,  1046 => 628,  1035 => 622,  1028 => 618,  1022 => 617,  1011 => 611,  1004 => 607,  998 => 606,  992 => 602,  986 => 599,  982 => 598,  979 => 597,  977 => 596,  971 => 593,  966 => 591,  960 => 589,  955 => 588,  951 => 587,  947 => 586,  936 => 581,  919 => 580,  911 => 578,  894 => 577,  881 => 567,  869 => 558,  857 => 549,  845 => 540,  833 => 530,  826 => 525,  824 => 524,  805 => 507,  802 => 506,  793 => 502,  785 => 498,  782 => 497,  775 => 493,  768 => 490,  766 => 489,  760 => 486,  752 => 481,  747 => 480,  744 => 474,  741 => 468,  739 => 467,  733 => 464,  727 => 460,  722 => 458,  719 => 457,  717 => 456,  713 => 455,  701 => 446,  695 => 442,  690 => 441,  681 => 434,  679 => 433,  637 => 393,  634 => 392,  620 => 380,  598 => 372,  588 => 365,  584 => 363,  578 => 361,  572 => 359,  570 => 358,  561 => 352,  551 => 348,  548 => 347,  545 => 346,  528 => 345,  520 => 339,  517 => 338,  513 => 335,  493 => 329,  484 => 323,  474 => 316,  470 => 314,  464 => 312,  458 => 310,  456 => 309,  449 => 304,  445 => 302,  441 => 300,  439 => 299,  434 => 296,  431 => 295,  428 => 294,  410 => 293,  407 => 291,  397 => 283,  395 => 282,  344 => 234,  323 => 216,  302 => 198,  281 => 180,  261 => 162,  251 => 161,  98 => 15,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Tableau de Bord - Administration{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<style>
    .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(145deg, #ffffff                                 <div class=\"col-6 col-md-3\">
                                    <div class=\"p-3 bg-warning bg-opacity-10 rounded-3 text-center\">
                                        <div class=\"text-warning mb-1\"><i class=\"fas fa-clock\"></i></div>
                                        <h6 class=\"mb-0\">{{ stats.tables.reserved }}</h6>
                                        <small class=\"text-muted\">Réservées</small>
                                    </div>
                                </div>f9fa 100%);
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    .stat-icon {
        width: 64px;
        height: 64px;
        border-radius:                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(data => {
                            throw new Error(data.error || 'Une erreur est survenue lors de la mise à jour du statut.');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    alert(data.message);
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert(error.message || 'Une erreur est survenue lors de la mise à jour du statut.');
                });   display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    .stat-icon i {
        font-size: 1.8rem;
        color: white;
    }
    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        margin: 0.5rem 0;
        background: linear-gradient(120deg, #4a90e2, #357abd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .stat-label {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6c757d;
    }
    .dashboard-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
    }
    .dashboard-card h3 {
        color: #2c3e50;
        font-weight: 600;
        border-bottom: 2px solid #f8f9fa;
        padding-bottom: 1rem;
        margin-bottom: 1.5rem;
    }
    .table {
        border-collapse: separate;
        border-spacing: 0;
    }
    .table thead th {
        background: #f8f9fa;
        border: none;
        padding: 1rem;
        font-weight: 600;
        color: #2c3e50;
    }
    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-top: 1px solid #f1f1f1;
    }
    .badge {
        padding: 0.5rem 1rem;
        font-weight: 500;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }
    .btn {
        padding: 0.4rem 0.8rem;
        transition: all 0.2s;
    }
    .btn i {
        font-size: 0.875rem;
    }
    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-info {
        color: #fff;
    }
    .btn-info:hover {
        color: #fff;
    }
    .table td .d-flex.gap-2 {
        margin: -0.25rem;
    }
    .table td .d-flex.gap-2 > * {
        margin: 0.25rem;
    }
    .status-available {
        background: linear-gradient(145deg, #28a745 0%, #218838 100%);
        color: white;
    }
    .status-reserved {
        background: linear-gradient(145deg, #ffc107 0%, #ffdb4d 100%);
        color: #876500;
    }
    .status-occupied {
        background: linear-gradient(145deg, #17a2b8 0%, #138496 100%);
        color: white;
    }
    .status-maintenance {
        background: linear-gradient(145deg, #dc3545 0%, #c82333 100%);
        color: white;
    }
    #salesChart {
        min-height: 100px;
    }
    .progress {
        height: 8px;
        margin-top: 0.5rem;
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-5\">
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Tableau de Bord</h1>
        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
            <i class=\"fas fa-download fa-sm text-white-50 me-2\"></i>Télécharger le rapport
        </a>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-4 mb-4\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon bg-primary\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">{{ stats.totalOrders }}</div>
                            <div class=\"stat-label\">Commandes</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-primary\" style=\"width: 75%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #00a65a, #00c853);\">
                            <i class=\"fas fa-euro-sign\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">{{ stats.totalRevenue|number_format(2, '.', ' ') }} €</div>
                            <div class=\"stat-label\">Revenus</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-success\" style=\"width: 65%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #f39c12, #f1c40f);\">
                            <i class=\"fas fa-calendar-check\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">{{ stats.pendingReservations }}</div>
                            <div class=\"stat-label\">Réservations</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"stat-icon\" style=\"background: linear-gradient(45deg, #605ca8, #7c4dff);\">
                            <i class=\"fas fa-users\"></i>
                        </div>
                        <div class=\"ms-3\">
                            <div class=\"stat-value\">{{ tables|length }}</div>
                            <div class=\"stat-label\">Tables</div>
                        </div>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-info\" style=\"width: 85%\" role=\"progressbar\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques et Tables -->
    <div class=\"row g-4\">
        <!-- Graphique des ventes -->
        <div class=\"col-xl-8\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Évolution des Ventes</h6>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-link text-dark p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-download me-2\"></i>Télécharger</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-print me-2\"></i>Imprimer</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"salesChart\"></canvas>
                </div>
            </div>
        </div>

        <!-- Plats populaires -->
        <div class=\"col-xl-4\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex justify-content-between align-items-center\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">
                        <i class=\"fas fa-crown text-warning me-2\"></i>Top Plats
                    </h6>
                    <div class=\"bg-light rounded-pill px-3 py-1 small\">
                        <i class=\"fas fa-chart-line text-success me-1\"></i>
                        <span class=\"text-muted\">Meilleurs vendeurs</span>
                    </div>
                </div>
                <div class=\"card-body\">
                    {% if popularDishes is empty %}
                        <div class=\"text-center py-5\">
                            <div class=\"mb-3\">
                                <i class=\"fas fa-utensils fa-3x text-muted opacity-50\"></i>
                            </div>
                            <h6 class=\"text-muted mb-2\">Aucun plat commandé</h6>
                            <p class=\"text-muted small mb-0\">Les plats les plus populaires apparaîtront ici</p>
                        </div>
                    {% else %}
                        <div class=\"top-2-dishes mb-4\">
                            {# Affichage des 2 premiers plats uniquement #}
                            {% for dishId, count in popularDishes|slice(0, 2) %}
                                {% set dish = menu[dishId] %}
                                {% set position = loop.index %}
                                <div class=\"dish-card p-3 mb-3 bg-light rounded-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"position-indicator me-3\">
                                            {% if position == 1 %}
                                                <i class=\"fas fa-trophy text-warning fa-2x\"></i>
                                            {% else %}
                                                <i class=\"fas fa-medal text-secondary fa-2x\"></i>
                                            {% endif %}
                                        </div>
                                        
                                        <div class=\"dish-info flex-grow-1\">
                                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                                <h6 class=\"mb-0 fw-bold\">
                                                    {% if dish is defined %}
                                                        {{ dish.titre|default('Plat #' ~ dishId|slice(0, 8)) }}
                                                    {% else %}
                                                        Plat #{{ dishId|slice(0, 8) }}
                                                    {% endif %}
                                                </h6>
                                                <span class=\"badge bg-primary rounded-pill ms-2\">
                                                    {{ count }} commandes
                                                </span>
                                            </div>
                                            
                                            <div class=\"progress\" style=\"height: 8px;\">
                                                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\"
                                                     role=\"progressbar\"
                                                     style=\"width: {{ (count / popularDishes|first * 100)|round }}%\">
                                                </div>
                                            </div>
                                            
                                            <div class=\"mt-2 small\">
                                                <i class=\"fas fa-chart-line text-success me-1\"></i>
                                                <span class=\"text-muted\">{{ (count / popularDishes|first * 100)|round }}% des ventes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>

                        {# Carrousel pour tous les plats après le top 2 #}
                        {% if popularDishes|length > 2 %}
                            <div class=\"other-dishes mt-3\">
                                <div class=\"text-muted mb-2\">
                                    <i class=\"fas fa-list me-2\"></i>Autres plats populaires
                                </div>
                                <div id=\"otherDishesCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
                                    <div class=\"carousel-inner\">
                                        {% for dishId, count in popularDishes|slice(2) %}
                                            {% set dish = menu[dishId] %}
                                            {% set position = loop.index + 3 %}
                                            <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                                <div class=\"dish-card p-3\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"position-number me-3\">
                                                            <span class=\"fw-bold text-muted\">#{{ position }}</span>
                                                        </div>
                                                        
                                                        <div class=\"dish-info flex-grow-1\">
                                                            <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                                                <h6 class=\"mb-0 fw-bold\">
                                                                    {% if dish is defined %}
                                                                        {{ dish.titre|default('Plat #' ~ dishId|slice(0, 8)) }}
                                                                    {% else %}
                                                                        Plat #{{ dishId|slice(0, 8) }}
                                                                    {% endif %}
                                                                </h6>
                                                                <span class=\"badge bg-primary rounded-pill ms-2\">
                                                                    {{ count }} commandes
                                                                </span>
                                                            </div>
                                                            
                                                            <div class=\"progress\" style=\"height: 8px;\">
                                                                <div class=\"progress-bar progress-bar-striped progress-bar-animated bg-primary\"
                                                                     role=\"progressbar\"
                                                                     style=\"width: {{ (count / popularDishes|first * 100)|round }}%\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#otherDishesCarousel\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                        <span class=\"visually-hidden\">Précédent</span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#otherDishesCarousel\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                        <span class=\"visually-hidden\">Suivant</span>
                                    </button>
                                </div>
                            </div>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
            <style>
                .text-bronze {
                    color: #cd7f32;
                }
                .dish-card {
                    transition: transform 0.2s ease-in-out;
                }
                .dish-card:hover {
                    transform: translateY(-2px);
                }
                .progress-bar-animated {
                    animation: progress-bar-stripes 1s linear infinite;
                }
            </style>
        </div>

        <!-- Dernières commandes -->
        <div class=\"col-xl-8\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Dernières Commandes</h6>
                    <a href=\"/admin/orders\" class=\"btn btn-sm btn-primary\">
                        Voir tout <i class=\"fas fa-arrow-right ms-1\"></i>
                    </a>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle mb-0\">
                            <thead class=\"bg-light\">
                                <tr>
                                    <th>ID Commande</th>
                                    <th>Client</th>
                                    <th>Total</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% if recentOrders is empty %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <i class=\"fas fa-inbox fa-2x text-muted mb-3\"></i>
                                            <p class=\"text-muted\">Aucune commande récente</p>
                                        </td>
                                    </tr>
                                {% else %}
                                    {% for id, order in recentOrders %}
                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <i class=\"fas fa-shopping-bag text-primary me-2\"></i>
                                                #{{ id|slice(0, 8) }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"rounded-circle bg-light p-2 me-2\">
                                                    <i class=\"fas fa-user text-primary\"></i>
                                                </div>
                                                <div>
                                                    <span class=\"fw-medium\">{{ order.customerName|default('Client inconnu') }}</span>
                                                    {% if order.phone %}
                                                        <br>
                                                        <small class=\"text-muted\">{{ order.phone }}</small>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"fw-bold\">{{ ((order.orderSummary.totalAmount|default(order.total|default(0)))|number_format(2, '.', ' ')) }} €</span>
                                        </td>
                                        <td>
                                            {% set orderStatus = order.orderSummary.status|default(order.status|default('pending')) %}
                                            {% set statusLabels = {
                                                'pending': 'En attente',
                                                'validated': 'Validé',
                                                'delivered': 'Livré',
                                                'rejected': 'Refusé'
                                            } %}
                                            {% set statusClasses = {
                                                'pending': 'warning',
                                                'validated': 'info',
                                                'delivered': 'success',
                                                'rejected': 'danger'
                                            } %}
                                            <span class=\"badge bg-{{ statusClasses[orderStatus]|default('warning') }}\">
                                                {{ statusLabels[orderStatus]|default('En attente') }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center justify-content-end gap-2\">
                                                <button type=\"button\" class=\"btn btn-sm btn-info view-order-details\" data-order-id=\"{{ id }}\" title=\"Voir les détails\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </button>
                                                {% if orderStatus == 'pending' %}
                                                    <button type=\"button\" class=\"btn btn-sm btn-success update-status\" data-order-id=\"{{ id }}\" data-status=\"validated\" title=\"Valider la commande\">
                                                        <i class=\"fas fa-check\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-sm btn-danger update-status\" data-order-id=\"{{ id }}\" data-status=\"rejected\" title=\"Refuser la commande\">
                                                        <i class=\"fas fa-times\"></i>
                                                    </button>
                                                {% endif %}
                                                {% if orderStatus == 'validated' %}
                                                    <button type=\"button\" class=\"btn btn-sm btn-success update-status\" data-order-id=\"{{ id }}\" data-status=\"delivered\" title=\"Marquer comme livrée\">
                                                        <i class=\"fas fa-truck\"></i>
                                                    </button>
                                                {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- État des tables -->
        <div class=\"col-xl-4\">
            <div class=\"card dashboard-card h-100\">
                <div class=\"card-header bg-transparent py-3 d-flex align-items-center justify-content-between\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">État des Tables</h6>
                    <a href=\"/tables\" class=\"btn btn-sm btn-primary\">
                        Gérer <i class=\"fas fa-cog ms-1\"></i>
                    </a>
                </div>
                <div class=\"card-body p-0\">
                    {% if tables is empty %}
                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-chair fa-3x mb-3\"></i>
                            <p>Aucune table configurée</p>
                        </div>
                    {% else %}
                        <!-- Légende des statuts -->
                        <div class=\"status-legend p-3 border-bottom\">
                            <div class=\"row g-2\">
                                <div class=\"col-12 mb-2\">
                                    <h6 class=\"text-muted mb-0 small\">Légende des statuts :</h6>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-success rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">{{ stats.tables.available }}</div>
                                            <div class=\"status-label small\">Disponibles</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-warning rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">{{ stats.tables.reserved }}</div>
                                            <div class=\"status-label small\">Réservées</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-info rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">{{ stats.tables.occupied }}</div>
                                            <div class=\"status-label small\">Occupées</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"status-item d-flex align-items-center\">
                                        <div class=\"status-indicator bg-danger rounded-circle me-2\"></div>
                                        <div class=\"status-info\">
                                            <div class=\"status-count fw-bold\">{{ stats.tables.maintenance }}</div>
                                            <div class=\"status-label small\">Maintenance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"tablesCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
                            <div class=\"carousel-inner\">
                                {% for tables_chunk in tables|batch(4) %}
                                    <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                        <div class=\"tables-grid p-3\">
                                            {% for id, table in tables_chunk %}
                                                <div class=\"table-card mb-2 border rounded {% if not loop.last %}border-bottom{% endif %} bg-white\">
                                                    <div class=\"d-flex align-items-center p-2\">
                                                        <div class=\"table-info flex-grow-1\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <span class=\"status-dot 
                                                                    {% if table.status == 'available' %}bg-success
                                                                    {% elseif table.status == 'reserved' %}bg-warning
                                                                    {% elseif table.status == 'occupied' %}bg-info
                                                                    {% else %}bg-danger{% endif %}\">
                                                                </span>
                                                                <span class=\"table-number ms-2\">Table {{ table.number }}</span>
                                                                <span class=\"capacity ms-2 text-muted\">
                                                                    <i class=\"fas fa-users small\"></i> {{ table.capacity }}
                                                                </span>
                                                            </div>
                                                            {% if table.status == 'reserved' and table.reservation is defined %}
                                                                <div class=\"reservation-info small text-warning mt-1\">
                                                                    <i class=\"fas fa-user me-1\"></i>{{ table.reservation.customerName }}
                                                                    ({{ table.reservation.persons }} pers.)
                                                                </div>
                                                            {% endif %}
                                                        </div>
                                                        <div class=\"table-actions\">
                                                            <div class=\"status-actions\">
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status {% if table.status == 'available' %}active{% endif %}\"
                                                                        data-table-id=\"{{ table.id }}\" 
                                                                        data-status=\"available\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme disponible\"
                                                                        {% if table.status == 'available' %}disabled{% endif %}>
                                                                    <span class=\"status-icon bg-success\">
                                                                        <i class=\"fas fa-check\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status {% if table.status == 'reserved' %}active{% endif %}\"
                                                                        data-table-id=\"{{ table.id }}\" 
                                                                        data-status=\"reserved\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme réservée\"
                                                                        {% if table.status == 'reserved' %}disabled{% endif %}>
                                                                    <span class=\"status-icon bg-warning\">
                                                                        <i class=\"fas fa-clock\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status {% if table.status == 'occupied' %}active{% endif %}\"
                                                                        data-table-id=\"{{ table.id }}\" 
                                                                        data-status=\"occupied\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Marquer comme occupée\"
                                                                        {% if table.status == 'occupied' %}disabled{% endif %}>
                                                                    <span class=\"status-icon bg-info\">
                                                                        <i class=\"fas fa-users\"></i>
                                                                    </span>
                                                                </button>
                                                                <button type=\"button\" 
                                                                        class=\"action-btn update-table-status {% if table.status == 'maintenance' %}active{% endif %}\"
                                                                        data-table-id=\"{{ table.id }}\" 
                                                                        data-status=\"maintenance\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        data-bs-title=\"Mettre en maintenance\"
                                                                        {% if table.status == 'maintenance' %}disabled{% endif %}>
                                                                    <span class=\"status-icon bg-danger\">
                                                                        <i class=\"fas fa-tools\"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#tablesCarousel\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Précédent</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#tablesCarousel\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Suivant</span>
                            </button>
                        </div>
                        
                        <style>
                            .status-legend {
                                background-color: #f8f9fa;
                            }
                            .status-indicator {
                                width: 12px;
                                height: 12px;
                                min-width: 12px;
                            }
                            .status-info {
                                line-height: 1.2;
                            }
                            .status-count {
                                color: #333;
                            }
                            .status-label {
                                color: #666;
                            }
                            .status-dot {
                                width: 8px;
                                height: 8px;
                                border-radius: 50%;
                                display: inline-block;
                            }
                            .table-card {
                                transition: transform 0.2s;
                            }
                            .table-card:hover {
                                transform: translateY(-2px);
                            }
                            .carousel-control-prev,
                            .carousel-control-next {
                                width: 10%;
                                background: rgba(0,0,0,0.1);
                                border-radius: 4px;
                                height: 40px;
                                top: 50%;
                                transform: translateY(-50%);
                            }
                            .carousel-control-prev-icon,
                            .carousel-control-next-icon {
                                background-color: rgba(0,0,0,0.5);
                                border-radius: 50%;
                                padding: 10px;
                            }
                            .status-actions {
                                display: flex;
                                gap: 5px;
                            }
                            .action-btn {
                                border: none;
                                background: none;
                                padding: 0;
                                cursor: pointer;
                                opacity: 0.5;
                                transition: all 0.2s ease;
                            }
                            .action-btn:hover {
                                opacity: 0.8;
                                transform: translateY(-2px);
                            }
                            .action-btn.active {
                                opacity: 1;
                            }
                            .status-icon {
                                width: 30px;
                                height: 30px;
                                border-radius: 8px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                color: white;
                            }
                            .status-icon i {
                                font-size: 0.9rem;
                            }
                            .table-number {
                                font-weight: 600;
                            }
                            .capacity {
                                font-size: 0.85rem;
                            }
                            .reservation-info {
                                opacity: 0.8;
                            }
                        </style>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            placement: 'top',
            trigger: 'hover'
        });
    });
    // Graphique des ventes
    const salesData = {{ salesData|json_encode|raw }};
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    // Filtrer les jours avec ventes
    const filteredLabels = Object.keys(salesData).filter(date => salesData[date] > 0);
    const filteredData = filteredLabels.map(date => salesData[date]);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: filteredLabels.map(date => {
                const d = new Date(date);
                return d.toLocaleDateString('fr-FR', {day: 'numeric', month: 'short'});
            }),
            datasets: [{
                label: 'Ventes quotidiennes (€)',
                data: filteredData,
                backgroundColor: (context) => {
                    const ctx = context.chart.ctx;
                    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
                    gradient.addColorStop(0, 'rgba(47, 97, 255, 0.7)');
                    gradient.addColorStop(1, 'rgba(47, 97, 255, 0.1)');
                    return gradient;
                },
                borderRadius: 6,
                maxBarThickness: 24
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            family: \"'Segoe UI', sans-serif\",
                            size: 13
                        },
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    titleColor: '#000',
                    titleFont: {
                        size: 13,
                        family: \"'Segoe UI', sans-serif\",
                        weight: '600'
                    },
                    bodyColor: '#666',
                    bodyFont: {
                        size: 12,
                        family: \"'Segoe UI', sans-serif\"
                    },
                    borderColor: 'rgba(47, 97, 255, 0.3)',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: false,
                    callbacks: {
                        title: function(tooltipItems) {
                            const date = new Date(filteredLabels[tooltipItems[0].dataIndex]);
                            return date.toLocaleDateString('fr-FR', {
                                weekday: 'long',
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            });
                        },
                        label: function(context) {
                            return 'Ventes: ' + context.parsed.y.toLocaleString('fr-FR') + ' €';
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 11,
                            family: \"'Segoe UI', sans-serif\"
                        },
                        color: '#666'
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        font: {
                            size: 11,
                            family: \"'Segoe UI', sans-serif\"
                        },
                        color: '#666',
                        callback: function(value) {
                            return value.toLocaleString('fr-FR') + ' €';
                        }
                    }
                }
            }
        }
    });

    // Gestion des mises à jour de statut
    document.querySelectorAll('.update-status').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const orderId = this.dataset.orderId;
            const newStatus = this.dataset.status;
            
            if (confirm('Voulez-vous vraiment modifier le statut de cette commande ?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ path('admin_update_order_status', {'orderId': 'ORDER_ID'}) }}'.replace('ORDER_ID', orderId);
                
                const statusInput = document.createElement('input');
                statusInput.type = 'hidden';
                statusInput.name = 'status';
                statusInput.value = newStatus;
                
                form.appendChild(statusInput);
                document.body.appendChild(form);
                form.submit();
            }
        });
    });

    // Gestion des détails des commandes
    const orders = {{ recentOrders|json_encode|raw }};
    document.querySelectorAll('.view-order-details').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const orderId = this.dataset.orderId;
            const order = orders[orderId];
            
            let itemsHtml = '';
            if (order.items) {
                itemsHtml = order.items.map(item => `
                    <tr>
                        <td>\${item.title}</td>
                        <td>\${item.quantity}</td>
                        <td>\${item.unitPrice} €</td>
                        <td>\${item.totalPrice} €</td>
                    </tr>
                `).join('');
            }

            const modalHtml = `
                <div class=\"modal fade\" id=\"orderDetailsModal\" tabindex=\"-1\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">Détails de la commande #\${orderId.slice(0, 8)}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"row mb-4\">
                                    <div class=\"col-md-6\">
                                        <h6>Informations client</h6>
                                        <p><strong>Nom:</strong> \${order.customerName || 'Non spécifié'}</p>
                                        <p><strong>Téléphone:</strong> \${order.phone || 'Non spécifié'}</p>
                                        <p><strong>Table:</strong> \${order.tableNumber || 'Non spécifié'}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Informations commande</h6>
                                        <p><strong>Date:</strong> \${order.orderDate || 'Non spécifié'}</p>
                                        <p><strong>Type:</strong> \${order.orderType || 'Sur place'}</p>
                                        <p><strong>Statut:</strong> \${order.status || 'En attente'}</p>
                                    </div>
                                </div>
                                <h6>Articles commandés</h6>
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Article</th>
                                                <th>Quantité</th>
                                                <th>Prix unitaire</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            \${itemsHtml}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"text-end mt-3\">
                                    <h5>Total: \${order.orderSummary?.totalAmount || order.total || 0} €</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            // Supprimer l'ancien modal s'il existe
            const oldModal = document.getElementById('orderDetailsModal');
            if (oldModal) {
                oldModal.remove();
            }

            // Ajouter le nouveau modal
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            
            // Afficher le modal
            const modal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
            modal.show();
        });
    });

    // Gestion des changements de statut des tables
    document.querySelectorAll('.update-table-status').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const tableId = this.dataset.tableId;
            const newStatus = this.dataset.status;
            
            if (confirm('Voulez-vous vraiment changer le statut de cette table ?')) {
                fetch(`{{ path('admin_update_table_status', {'tableId': 'TABLE_ID'}) }}`.replace('TABLE_ID', tableId), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token('update-table-status') }}'
                    },
                    body: JSON.stringify({
                        status: newStatus
                    })
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    } else {
                        alert('Une erreur est survenue lors de la mise à jour du statut.');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue lors de la mise à jour du statut.');
                });
            }
        });
    });
});
</script>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\dashboard\\index.html.twig");
    }
}
