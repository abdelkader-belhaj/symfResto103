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

/* front/front.html.twig */
class __TwigTemplate_54c01a52a98a306cc489040da30937ad extends Template
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
            'bodyy' => [$this, 'block_bodyy'],
            'bodyspec' => [$this, 'block_bodyspec'],
            'bodyparties' => [$this, 'block_bodyparties'],
            'bodyTable' => [$this, 'block_bodyTable'],
            'bodyGallery' => [$this, 'block_bodyGallery'],
            'bodyChefs' => [$this, 'block_bodyChefs'],
            'bodyContact' => [$this, 'block_bodyContact'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/front.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyy"));

        // line 4
        yield "<!-- Menu Section -->
<!-- Ajout des scripts Isotope -->
<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
<script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé');
    var grid = document.querySelector('.isotope-container');
    console.log('Grid element:', grid);
    
    if (!grid) {
        console.error('Élément .isotope-container non trouvé');
        return;
    }

    // Fonction pour activer un filtre
    function activateFilter(filterValue) {
        // Retirer la classe active de tous les boutons
        var filterButtons = document.querySelectorAll('.isotope-filters li');
        filterButtons.forEach(function(btn) {
            btn.classList.remove('filter-active');
        });

        // Trouver et activer le bouton correspondant au filtre
        var activeButton = document.querySelector('[data-filter=\"' + filterValue + '\"]');
        if (activeButton) {
            activeButton.classList.add('filter-active');
        }

        // Cacher le message de sélection
        var noFilterMessage = document.querySelector('.no-filter-message');
        if (noFilterMessage) {
            noFilterMessage.style.display = 'none';
        }

        // Afficher les éléments correspondants
        var items = grid.querySelectorAll('.isotope-item');
        items.forEach(function(item) {
            item.style.display = '';
        });
    }
    
    // Initialiser Isotope après le chargement des images
    imagesLoaded(grid, function() {
        console.log('Images chargées');
        
        var iso = new Isotope(grid, {
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows'
        });

        // Activer le filtre \"petit-dejeuner\" par défaut
        setTimeout(function() {
            activateFilter('.petit-dejeuner');
            iso.arrange({ filter: '.petit-dejeuner' });
        }, 100);
        
        // Gérer les clics sur les filtres
        var filterButtons = document.querySelectorAll('.isotope-filters li');
        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('filter-active');
                });
                // Ajouter la classe active au bouton cliqué
                this.classList.add('filter-active');
                
                // Afficher le message si aucun filtre n'est sélectionné
                var noFilterMessage = document.querySelector('.no-filter-message');
                if (filterValue === '*') {
                    noFilterMessage.style.display = 'block';
                } else {
                    noFilterMessage.style.display = 'none';
                }
                
                // Appliquer le filtre
                var filterValue = this.getAttribute('data-filter');
                console.log('Filtering by:', filterValue); // Debug
                
                // Debug: vérifions les éléments correspondant au filtre
                var allItems = grid.querySelectorAll('.isotope-item');
                console.log('Tous les éléments:', allItems.length);
                
                // Debug: afficher les classes des éléments qui devraient correspondre
                console.log('Recherche des éléments avec classe:', filterValue.replace('.filter-', '.'));
                
                var matchingItems = grid.querySelectorAll(filterValue !== '*' ? filterValue.replace('.filter-', '.') : '.isotope-item');
                console.log('Éléments correspondant au filtre:', matchingItems.length);
                matchingItems.forEach(function(item) {
                    console.log('Élément correspondant:', item.className);
                });
                
                iso.arrange({ filter: filterValue.replace('.filter-', '.') });
            });
        });
    });
});</script>



<section id=\"menu\" class=\"menu section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Menu</h2>
   
    <!-- Indice pour guider vers la commande -->
    <div class=\"menu-guidance\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      <div class=\"guidance-content\">
        <span class=\"guidance-icon\">📋</span>
        <span class=\"guidance-text\">
          Parcourez notre menu puis 
          <strong class=\"guidance-highlight\">descendez pour commander</strong>
        </span>
        <div class=\"guidance-arrow\">
          <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\">
            <path d=\"M7 13L12 18L17 13M7 6L12 11L17 6\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

    <!-- Filtres dynamiques -->
    <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-12 d-flex justify-content-center\">
        <ul class=\"menu-filters isotope-filters\">
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 134
            yield "              ";
            $context["type_class"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["type"], ["é" => "e", "è" => "e", "î" => "i", "ï" => "i", "û" => "u", "ù" => "u", "ô" => "o"])), [" " => "-"]);
            // line 135
            yield "              ";
            $context["type_label"] = Twig\Extension\CoreExtension::replace($context["type"], ["filter-" => ""]);
            // line 136
            yield "              ";
            $context["icon"] = "🍳";
            // line 137
            yield "              ";
            if (CoreExtension::inFilter("petit-dejeuner", (isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 137, $this->source); })()))) {
                // line 138
                yield "                ";
                $context["icon"] = "☕";
                // line 139
                yield "              ";
            } elseif (CoreExtension::inFilter("dejeuner", (isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 139, $this->source); })()))) {
                // line 140
                yield "                ";
                $context["icon"] = "🍽️";
                // line 141
                yield "              ";
            } elseif (CoreExtension::inFilter("diner", (isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 141, $this->source); })()))) {
                // line 142
                yield "                ";
                $context["icon"] = "🌙";
                // line 143
                yield "              ";
            } elseif (CoreExtension::inFilter("collation", (isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 143, $this->source); })()))) {
                // line 144
                yield "                ";
                $context["icon"] = "🥨";
                // line 145
                yield "              ";
            } elseif (CoreExtension::inFilter("brunch", (isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 145, $this->source); })()))) {
                // line 146
                yield "                ";
                $context["icon"] = "🥞";
                // line 147
                yield "              ";
            }
            // line 148
            yield "              <li class=\"menu-filter-item\" data-filter=\".";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "\">
                <div class=\"filter-icon\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 149, $this->source); })()), "html", null, true);
            yield "</div>
                <div class=\"filter-text\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_label"]) || array_key_exists("type_label", $context) ? $context["type_label"] : (function () { throw new RuntimeError('Variable "type_label" does not exist.', 150, $this->source); })()), "html", null, true);
            yield "</div>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "        </ul>
      </div>
    </div>

    <style>
    .menu-filters {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin: 30px 0;
      padding: 0;
      list-style: none;
    }

    .menu-filter-item {
      background: white;
      border: 2px solid #ff6b35;
      border-radius: 50px;
      padding: 12px 30px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }

    .menu-filter-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #ff6b35, #f7931e);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: 1;
    }

    .menu-filter-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255, 107, 53, 0.2);
    }

    .menu-filter-item:hover::before {
      opacity: 1;
    }

    .filter-icon {
      font-size: 1.5em;
      position: relative;
      z-index: 2;
      transition: transform 0.3s ease;
    }

    .menu-filter-item:hover .filter-icon {
      transform: scale(1.2);
    }

    .filter-text {
      color: #2c3e50;
      font-weight: 600;
      font-size: 1.1rem;
      position: relative;
      z-index: 2;
      transition: color 0.3s ease;
    }

    .menu-filter-item:hover .filter-text {
      color: white;
    }

    .menu-filter-item.filter-active {
      background: linear-gradient(135deg, #ff6b35, #f7931e);
      border-color: transparent;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255, 107, 53, 0.2);
    }

    .menu-filter-item.filter-active .filter-text {
      color: white;
    }

    @media (max-width: 768px) {
      .menu-filters {
        gap: 10px;
        padding: 0 15px;
      }

      .menu-filter-item {
        padding: 8px 20px;
      }

      .filter-text {
        font-size: 0.9rem;
      }

      .filter-icon {
        font-size: 1.2em;
      }
    }
    </style>

    <!-- Message quand aucun type n'est sélectionné -->
    <div class=\"no-filter-message text-center mt-4\">
        <div class=\"alert alert-info\">
            <i class=\"bi bi-info-circle me-2\"></i>
            Veuillez sélectionner un type de menu ci-dessus pour voir les plats disponibles
        </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 269, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 270
            yield "        ";
            $context["type_class"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "type", [], "any", false, false, false, 270), ["é" => "e", "è" => "e", "î" => "i", "ï" => "i", "û" => "u", "ù" => "u", "ô" => "o"])), [" " => "-"]);
            // line 271
            yield "        <div class=\"col-lg-6 menu-item isotope-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_class"]) || array_key_exists("type_class", $context) ? $context["type_class"] : (function () { throw new RuntimeError('Variable "type_class" does not exist.', 271, $this->source); })()), "html", null, true);
            yield "\">
          <img src=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "image", [], "any", false, false, false, 272), "html", null, true);
            yield "\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "titre", [], "any", false, false, false, 274), "html", null, true);
            yield "</a><span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "price", [], "any", false, false, false, 274), 2, ".", ","), "html", null, true);
            yield "&nbsp;DT</span>
          </div>
          <div class=\"menu-ingredients\">
            ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "description", [], "any", false, false, false, 277), "html", null, true);
            yield "
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 280
        if (!$context['_iterated']) {
            // line 281
            yield "        <p>Aucun menu trouvé.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "    </div>

    <!-- Séparateur Visuel avec Indication -->
    <div class=\"row mt-4\" data-aos=\"fade-up\" data-aos-delay=\"350\">
      <div class=\"col-12\">
        <div class=\"menu-separator\">
          <div class=\"separator-line\"></div>
          <div class=\"separator-text\">
            <span class=\"separator-icon\">👇</span>
            <span>Passez à l'étape suivante</span>
          </div>
          <div class=\"separator-line\"></div>
        </div>
      </div>
    </div>

    <!-- Call-to-Action Élégant - Version 2 -->
    <div class=\"row mt-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">
      <div class=\"col-12\">
        <div class=\"elegant-cta-container\">
          <!-- Particules décoratives -->
          <div class=\"particles\">
            <div class=\"particle particle-1\"></div>
            <div class=\"particle particle-2\"></div>
            <div class=\"particle particle-3\"></div>
            <div class=\"particle particle-4\"></div>
            <div class=\"particle particle-5\"></div>
          </div>

          <div class=\"cta-card\">
            <div class=\"cta-header\">
              <div class=\"cta-badge\">
                <span class=\"badge-text\">🔥 Offre spéciale</span>
              </div>
              <h3 class=\"cta-main-title\">
                Votre festin vous attend
              </h3>
              <p class=\"cta-subtitle\">
                Commandez maintenant et savourez l'excellence culinaire
              </p>
            </div>

            <div class=\"cta-features\">
              <div class=\"feature-grid\">
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">🍴</div>
                  <div class=\"feature-text\">
                    <strong>Saveurs authentiques</strong>
                    <span>Recettes traditionnelles</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">⏰</div>
                  <div class=\"feature-text\">
                    <strong>Livraison rapide</strong>
                    <span>En moins de 30min</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">✨</div>
                  <div class=\"feature-text\">
                    <strong>Qualité garantie</strong>
                    <span>Satisfaction 100%</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">💝</div>
                  <div class=\"feature-text\">
                    <strong>Service premium</strong>
                    <span>Support client 24/7</span>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"cta-action-zone\">
            <a href=\"javascript:void(0);\" onclick=\"checkAuthBeforeSubmit('";
        // line 359
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu_commande");
        yield "')\" class=\"elegant-order-btn\">
    <div class=\"btn-content\">
        <div class=\"btn-text-wrapper\">
            <span class=\"btn-main-text\">Je commande maintenant</span>
            <span class=\"btn-sub-text\">Cliquez pour continuer →</span>
        </div>
        <div class=\"btn-glow\"></div>
    </div>
</a>

              

              <div class=\"customer-reviews\">
                <div class=\"reviews-stars\">
                  ⭐⭐⭐⭐⭐
                </div>
                <p class=\"reviews-text\">
                  <strong>+1,200 clients satisfaits</strong> • \"Service exceptionnel et plats délicieux !\"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CSS pour l'indice de navigation -->
<style>
/* Indice de guidance dans l'en-tête */
.menu-guidance {
  margin-top: 20px;
  display: flex;
  justify-content: center;
}

.guidance-content {
  display: flex;
  align-items: center;
  gap: 12px;
  background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(247, 147, 30, 0.1));
  padding: 12px 25px;
  border-radius: 25px;
  border: 2px solid rgba(255, 107, 53, 0.2);
  font-size: 0.95rem;
  color: #555;
  font-weight: 500;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.1);
  transition: all 0.3s ease;
}

.guidance-content:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 107, 53, 0.2);
}

.guidance-icon {
  font-size: 1.3rem;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 3px 10px rgba(255, 107, 53, 0.3);
}

.guidance-text {
  color: #666;
  font-weight: 500;
}

.guidance-highlight {
  color: #ff6b35;
  font-weight: 700;
  text-decoration: underline;
  text-decoration-color: rgba(255, 107, 53, 0.3);
  text-underline-offset: 3px;
}

.guidance-arrow {
  color: #ff6b35;
  animation: guidanceArrow 2s ease-in-out infinite;
}

@keyframes guidanceArrow {
  0%, 100% { transform: translateY(0px); opacity: 0.7; }
  50% { transform: translateY(3px); opacity: 1; }
}

/* Séparateur avec indication */
.menu-separator {
  display: flex;
  align-items: center;
  margin: 40px 0 20px;
  opacity: 0.7;
}

.separator-line {
  flex: 1;
  height: 1px;
  background: linear-gradient(90deg, transparent, #ddd, transparent);
}

.separator-text {
  padding: 0 20px;
  font-size: 0.9rem;
  color: #666;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 8px;
}

.separator-icon {
  font-size: 1.2rem;
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-10px); }
  60% { transform: translateY(-5px); }
}

/* Container principal élégant */
.elegant-cta-container {
  position: relative;
  perspective: 1000px;
}

.particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  overflow: hidden;
}

.particle {
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(45deg, #ff6b35, #f7931e);
  border-radius: 50%;
  opacity: 0.3;
  animation: particleFloat 8s infinite linear;
}

.particle-1 { top: 10%; left: 10%; animation-delay: 0s; }
.particle-2 { top: 20%; right: 15%; animation-delay: 1.5s; }
.particle-3 { bottom: 30%; left: 20%; animation-delay: 3s; }
.particle-4 { top: 60%; right: 25%; animation-delay: 4.5s; }
.particle-5 { bottom: 15%; right: 10%; animation-delay: 6s; }

@keyframes particleFloat {
  0% { transform: translateY(0px) rotate(0deg); opacity: 0; }
  10% { opacity: 0.3; }
  90% { opacity: 0.3; }
  100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
}

.cta-card {
  background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
  border-radius: 25px;
  padding: 40px;
  box-shadow: 
    0 25px 50px rgba(0, 0, 0, 0.1),
    0 0 0 1px rgba(255, 255, 255, 0.8),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
  position: relative;
  overflow: hidden;
  transform-style: preserve-3d;
  transition: transform 0.3s ease;
}

.cta-card:hover {
  transform: rotateX(2deg) rotateY(2deg);
}

.cta-header {
  text-align: center;
  margin-bottom: 35px;
}

.cta-badge {
  display: inline-block;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  color: white;
  padding: 8px 20px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 20px;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
}

.cta-main-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 15px;
  background: linear-gradient(135deg, #2c3e50, #34495e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.cta-subtitle {
  font-size: 1.1rem;
  color: #7f8c8d;
  font-weight: 500;
  margin: 0;
}

.feature-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-bottom: 35px;
}

.feature-box {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: rgba(255, 107, 53, 0.05);
  border-radius: 15px;
  border-left: 4px solid #ff6b35;
  transition: all 0.3s ease;
}

.feature-box:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 107, 53, 0.15);
}

.feature-icon {
  font-size: 1.8rem;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  border-radius: 50%;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
}

.feature-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.feature-text strong {
  color: #2c3e50;
  font-size: 1rem;
  font-weight: 600;
}

.feature-text span {
  color: #7f8c8d;
  font-size: 0.85rem;
}

.cta-action-zone {
  text-align: center;
}

.elegant-order-btn {
  position: relative;
  display: inline-block;
  text-decoration: none;
  margin: 20px 0;
}

.btn-content {
  position: relative;
  background: linear-gradient(135deg, #ff6b35 0%, #f7931e 50%, #e67e22 100%);
  padding: 20px 50px;
  border-radius: 50px;
  color: white;
  font-weight: 700;
  text-align: center;
  overflow: hidden;
  box-shadow: 
    0 15px 35px rgba(255, 107, 53, 0.4),
    0 5px 15px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3);
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.elegant-order-btn:hover .btn-content {
  transform: translateY(-8px) scale(1.05);
  box-shadow: 
    0 25px 50px rgba(255, 107, 53, 0.5),
    0 10px 25px rgba(0, 0, 0, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.4);
}

.btn-text-wrapper {
  position: relative;
  z-index: 2;
}

.btn-main-text {
  display: block;
  font-size: 1.3rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 3px;
}

.btn-sub-text {
  display: block;
  font-size: 0.9rem;
  opacity: 0.9;
  font-weight: 500;
}

.btn-glow {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
  transform: scale(0);
  transition: transform 0.6s ease;
}

.elegant-order-btn:hover .btn-glow {
  transform: scale(1);
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { transform: scale(0.8); opacity: 1; }
  100% { transform: scale(1.2); opacity: 0; }
}

.customer-reviews {
  margin-top: 25px;
  padding: 20px;
  background: rgba(52, 152, 219, 0.05);
  border-radius: 15px;
  border-left: 4px solid #3498db;
}

.reviews-stars {
  font-size: 1.5rem;
  margin-bottom: 10px;
  filter: drop-shadow(0 2px 4px rgba(255, 193, 7, 0.3));
}

.reviews-text {
  color: #5a6c7d;
  font-size: 0.95rem;
  margin: 0;
  line-height: 1.4;
}

.reviews-text strong {
  color: #3498db;
}

/* Responsive Design */
@media (max-width: 768px) {
  .guidance-content {
    padding: 10px 20px;
    font-size: 0.9rem;
    flex-wrap: wrap;
    text-align: center;
  }
  
  .cta-card {
    padding: 25px 20px;
  }
  
  .cta-main-title {
    font-size: 1.8rem;
  }
  
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 15px;
  }
  
  .btn-content {
    padding: 18px 35px;
  }
  
  .btn-main-text {
    font-size: 1.1rem;
  }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 773
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyspec(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyspec"));

        // line 774
        yield "<!-- Specials Section -->
<section id=\"specials\" class=\"specials section\">
  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Specials</h2>
    <div> <span class=\"description-title\">Goûtez le monde</span> <span>sans quitter la table</span></div>
     
  </div><!-- End Section Title -->

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 787, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 788
            yield "            <li class=\"nav-item\">
              <a class=\"nav-link ";
            // line 789
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" data-bs-toggle=\"tab\" href=\"#specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 789), "html", null, true);
            yield "\">
                ";
            // line 790
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 790), "html", null, true);
            yield "
              </a>
            </li>
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
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        yield "        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          ";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specials"]) || array_key_exists("specials", $context) ? $context["specials"] : (function () { throw new RuntimeError('Variable "specials" does not exist.', 799, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["special"]) {
            // line 800
            yield "            <div class=\"tab-pane ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active show";
            }
            yield "\" id=\"specials-tab-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 800), "html", null, true);
            yield "\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>";
            // line 803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "title", [], "any", false, false, false, 803), "html", null, true);
            yield "</h3>
                  <p class=\"fst-italic\">";
            // line 804
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "sousTitre", [], "any", false, false, false, 804), "html", null, true);
            yield "</p>
                  <p>";
            // line 805
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "description", [], "any", false, false, false, 805), "html", null, true);
            yield "</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"";
            // line 808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["special"], "image", [], "any", false, false, false, 808), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
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
        unset($context['_seq'], $context['key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        yield "        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 826
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyparties(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyparties"));

        // line 827
        yield "<!-- Events Section -->
<section id=\"events\" class=\"events section\">
  <img class=\"slider-bg\" src=\"";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/events-bg.jpg"), "html", null, true);
        yield "\" alt=\"\" data-aos=\"fade-in\">

  <div class=\"container\">
    <div class=\"swiper init-swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <script type=\"application/json\" class=\"swiper-config\">
        {
          \"loop\": true,
          \"speed\": 600,
          \"autoplay\": {
            \"delay\": 5000
          },
          \"slidesPerView\": \"auto\",
          \"pagination\": {
            \"el\": \".swiper-pagination\",
            \"type\": \"bullets\",
            \"clickable\": true
          }
        }
      </script>

      <div class=\"swiper-wrapper\">
        ";
        // line 850
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partties"]) || array_key_exists("partties", $context) ? $context["partties"] : (function () { throw new RuntimeError('Variable "partties" does not exist.', 850, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 851
            yield "          <div class=\"swiper-slide\">
            <div class=\"row gy-4 event-item\">
              <div class=\"col-lg-6\">
                <img src=\"";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "image", [], "any", false, false, false, 854), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
              </div>
              <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                <h3>";
            // line 857
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "titre", [], "any", false, false, false, 857), "html", null, true);
            yield "</h3>
                <div class=\"price\">
                  <p><span>\$";
            // line 859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "price", [], "any", false, false, false, 859), "html", null, true);
            yield "</span></p>
                </div>
                <p class=\"fst-italic\">
                  ";
            // line 862
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "debut", [], "any", false, false, false, 862), "html", null, true);
            yield "
                </p>
                <ul>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 865
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne1", [], "any", false, false, false, 865), "html", null, true);
            yield "</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 866
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne2", [], "any", false, false, false, 866), "html", null, true);
            yield "</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>";
            // line 867
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "ligne3", [], "any", false, false, false, 867), "html", null, true);
            yield "</span></li>
                </ul>
                <p>";
            // line 869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["party"], "final", [], "any", false, false, false, 869), "html", null, true);
            yield "</p>
              </div>
            </div>
          </div><!-- End Slider item -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['party'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 874
        yield "      </div>

      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 888
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyTable(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyTable"));

        // line 889
        yield "<!-- Affichage des messages flash -->
";
        // line 890
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 890, $this->source); })()), "flashes", [], "any", false, false, false, 890));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 891
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 892
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        yield "
<!-- Book A Table Section -->
<section id=\"book-a-table\" class=\"book-a-table section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Réserver une table</h2> 
    <div><span>À table,</span> <span class=\"description-title\">c’est réservé !</span></div>
  </div>

  <div class=\"container\">
    <div class=\"row g-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-4 reservation-img\" style=\"background-image: url(assets/img/reservation.jpg);\"></div>

      <div class=\"col-lg-8 d-flex align-items-center reservation-form-bg\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <form action=\"";
        // line 908
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_new");
        yield "\" method=\"post\" role=\"form\" id=\"reservationForm\" novalidate>
          <div class=\"row gy-4\">
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Votre nom\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Votre adresse e-mail\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"date\" name=\"date\" class=\"form-control\" id=\"datePicker\">

            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"time\" name=\"time\" class=\"form-control\">
              
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"number\" name=\"people\" class=\"form-control\" placeholder=\"Nombre de personnes\">
            </div>
          </div>

          <div class=\"form-group mt-3\">
            <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\"></textarea>
          </div>

<div class=\"text-center mt-3\">
    <button type=\"button\" onclick=\"checkAuthBeforeSubmit('";
        // line 937
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("firebase_table_new");
        yield "', 'reservationForm')\" class=\"btn btn-primary\">Confirmer la réservation</button>
</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Script de validation JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('reservationForm');


// Empêche de sélectionner une date passée
const dateInput = document.getElementById('datePicker');
const today = new Date().toISOString().split('T')[0];
dateInput.setAttribute('min', today);

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = form.querySelector('[name=\"name\"]').value.trim();
      const email = form.querySelector('[name=\"email\"]').value.trim();
      const phone = form.querySelector('[name=\"phone\"]').value.trim();
      const date = form.querySelector('[name=\"date\"]').value;
      const time = form.querySelector('[name=\"time\"]').value;
      const people = form.querySelector('[name=\"people\"]').value.trim();

      function showAlert(message) {
        const alertBox = document.createElement('div');
        alertBox.style.position = 'fixed';
        alertBox.style.top = '50%';
        alertBox.style.left = '50%';
        alertBox.style.transform = 'translate(-50%, -50%)';
        alertBox.style.background = '#fff';
        alertBox.style.padding = '30px';
        alertBox.style.boxShadow = '0 0 15px rgba(0,0,0,0.3)';
        alertBox.style.borderRadius = '10px';
        alertBox.style.zIndex = 9999;
        alertBox.style.textAlign = 'center';
        alertBox.style.width = '300px';
        alertBox.innerHTML = `
          <h4 style=\"margin-bottom: 15px; color:#ff9900;\">⚠️ Erreur de saisie</h4>
          <p style=\"margin-bottom: 20px;\">\${message}</p>
          <button id=\"alertOkBtn\" style=\"
            background-color: #ff9900;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
          \">OK</button>
        `;
        document.body.appendChild(alertBox);

        document.getElementById('alertOkBtn').onclick = function () {
          alertBox.remove();
        };
      }

      // Vérification champs vides
      if (!name || !email || !phone || !date || !time || !people) {
        showAlert(\"Veuillez remplir tous les champs obligatoires.\");
        return;
      }

      // Email doit se terminer par @gmail.com
      if (!email.endsWith(\"@gmail.com\")) {
        showAlert(\"L'adresse e-mail doit se terminer par @gmail.com.\");
        return;
      }

      // Téléphone : exactement 8 chiffres
      const phoneRegex = /^[0-9]{8}\$/;
      if (!phoneRegex.test(phone)) {
        showAlert(\"Le numéro de téléphone doit contenir exactement 8 chiffres.\");
        return;
      }

      // Date : doit être dans le futur
      const selectedDate = new Date(date);
      const today = new Date();
      today.setHours(0, 0, 0, 0); // On ignore l'heure pour comparaison simple

      if (selectedDate <= today) {
        showAlert(\"La date doit être dans le futur.\");
        return;
      }

      // Heure : si la date est aujourd’hui, alors l’heure doit être future aussi
      const selectedDateTime = new Date(date + 'T' + time);
      const now = new Date();
      if (selectedDate.toDateString() === now.toDateString() && selectedDateTime <= now) {
        showAlert(\"L'heure doit être dans le futur.\");
        return;
      }

      // Nombre de personnes
      if (isNaN(people) || parseInt(people) <= 0) {
        showAlert(\"Le nombre de personnes doit être supérieur à 0.\");
        return;
      }

      // Si tout est valide, on envoie le formulaire
      form.submit();
    });
  });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1053
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyGallery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyGallery"));

        // line 1054
        yield "
<!-- Gallery Section -->
<section id=\"gallery\" class=\"gallery section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Gallery</h2>
    <div><span>Un aperçu en images</span> <span class=\"description-title\">de notre établissement</span></div>
     


  </div><!-- End Section Title -->

  <div class=\"container-fluid\" data-aos=\"fade-up\" data-aos-delay=\"100\">

    <div class=\"row g-0\">

      ";
        // line 1071
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new RuntimeError('Variable "galleries" does not exist.', 1071, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["g"]) {
            // line 1072
            yield "        <div class=\"col-lg-3 col-md-4\">
          <div class=\"gallery-item\">
            <a href=\"";
            // line 1074
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 1074), "html", null, true);
            yield "\" class=\"glightbox\" data-gallery=\"images-gallery\">
              <img src=\"";
            // line 1075
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 1075), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
            </a>
            
          </div>
        </div><!-- End Gallery Item -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1081
        yield "
    </div>

   

  </div>

</section><!-- /Gallery Section -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1094
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyChefs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyChefs"));

        // line 1095
        yield "


<!-- Chefs Section -->
<section id=\"chefs\" class=\"chefs section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Chefs</h2>
    <div><span>Les Maîtres Cuisiniers de Notre </span> <span class=\"description-title\">Équipe</span></div>
    
  </div><!-- End Section Title -->

  <div class=\"container\">
    <div class=\"row gy-5\">

      ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chefs"]) || array_key_exists("chefs", $context) ? $context["chefs"] : (function () { throw new RuntimeError('Variable "chefs" does not exist.', 1111, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["chef"]) {
            // line 1112
            yield "        <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1112) * 100), "html", null, true);
            yield "\">
          <div class=\"member\">
            <div class=\"pic\">
              ";
            // line 1115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 1115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1116
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "image", [], "any", false, false, false, 1116), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 1116), "html", null, true);
                yield "\">
              ";
            } else {
                // line 1118
                yield "                <span class=\"text-muted\">Aucune image</span>
              ";
            }
            // line 1120
            yield "            </div>
            <div class=\"member-info\">
              <h4>";
            // line 1122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "nom", [], "any", false, false, false, 1122), "html", null, true);
            yield "</h4>
              <span>";
            // line 1123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chef"], "titre", [], "any", false, false, false, 1123), "html", null, true);
            yield "</span>
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
              <div class=\"mt-2\">
             
                <form method=\"post\" action=\"";
            // line 1132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chefs_delete", ["key" => $context["key"]]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
              
                </form>
              </div>
            </div>
          </div>
        </div>
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
        // line 1139
        if (!$context['_iterated']) {
            // line 1140
            yield "        <div class=\"col-12 text-center text-muted\">
          Aucun chef trouvé.
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['chef'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1144
        yield "
    </div>
  </div>

</section><!-- /Chefs Section -->



    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bodyContact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContact"));

        // line 1155
        yield " <div class=\"col-lg-8\">
    <form action=\"";
        // line 1156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_contact_submit");
        yield "\" method=\"post\" role=\"form\" class=\"php-email-form\" id=\"contactForm\">
      <div class=\"row\">
        <div class=\"col-md-6 form-group\">
          <input
            type=\"text\"
            name=\"name\"
            class=\"form-control\"
            id=\"name\"
            placeholder=\"Votre nom\"
            required>
        </div>
        <div class=\"col-md-6 form-group mt-3 mt-md-0\">
          <input
            type=\"email\"
            class=\"form-control\"
            name=\"email\"
            id=\"email\"
            placeholder=\"Votre email\"
            required>
        </div>
      </div>
      <div class=\"form-group mt-3\">
        <input
          type=\"text\"
          class=\"form-control\"
          name=\"subject\"
          id=\"subject\"
          placeholder=\"Sujet\"
          required>
      </div>
      <div class=\"form-group mt-3\">
        <textarea
          class=\"form-control\"
          name=\"message\"
          placeholder=\"Message\"
          required></textarea>
      </div>
      <div class=\"my-3\">
        <div class=\"loading\">Loading</div>
        <div class=\"error-message\"></div>
        <div class=\"sent-message\">Your message has been sent. Thank you!</div>
      </div>
    
      <div class=\"text-center mt-3\">
    <button type=\"button\" onclick=\"checkAuthBeforeSubmit('";
        // line 1200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_index");
        yield "', 'contactForm')\" class=\"btn btn-primary\">Envoyer</button>
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
        return "front/front.html.twig";
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
        return array (  1651 => 1200,  1604 => 1156,  1601 => 1155,  1591 => 1154,  1575 => 1144,  1566 => 1140,  1564 => 1139,  1544 => 1132,  1532 => 1123,  1528 => 1122,  1524 => 1120,  1520 => 1118,  1512 => 1116,  1510 => 1115,  1503 => 1112,  1485 => 1111,  1467 => 1095,  1457 => 1094,  1440 => 1081,  1428 => 1075,  1424 => 1074,  1420 => 1072,  1416 => 1071,  1397 => 1054,  1387 => 1053,  1267 => 937,  1235 => 908,  1220 => 895,  1205 => 892,  1200 => 891,  1196 => 890,  1193 => 889,  1183 => 888,  1169 => 874,  1158 => 869,  1153 => 867,  1149 => 866,  1145 => 865,  1139 => 862,  1133 => 859,  1128 => 857,  1122 => 854,  1117 => 851,  1113 => 850,  1089 => 829,  1085 => 827,  1075 => 826,  1061 => 813,  1042 => 808,  1036 => 805,  1032 => 804,  1028 => 803,  1017 => 800,  1000 => 799,  993 => 794,  975 => 790,  967 => 789,  964 => 788,  947 => 787,  932 => 774,  922 => 773,  509 => 359,  431 => 283,  424 => 281,  422 => 280,  414 => 277,  406 => 274,  401 => 272,  396 => 271,  393 => 270,  388 => 269,  270 => 153,  261 => 150,  257 => 149,  250 => 148,  247 => 147,  244 => 146,  241 => 145,  238 => 144,  235 => 143,  232 => 142,  229 => 141,  226 => 140,  223 => 139,  220 => 138,  217 => 137,  214 => 136,  211 => 135,  208 => 134,  204 => 133,  73 => 4,  63 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block bodyy %}
<!-- Menu Section -->
<!-- Ajout des scripts Isotope -->
<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
<script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé');
    var grid = document.querySelector('.isotope-container');
    console.log('Grid element:', grid);
    
    if (!grid) {
        console.error('Élément .isotope-container non trouvé');
        return;
    }

    // Fonction pour activer un filtre
    function activateFilter(filterValue) {
        // Retirer la classe active de tous les boutons
        var filterButtons = document.querySelectorAll('.isotope-filters li');
        filterButtons.forEach(function(btn) {
            btn.classList.remove('filter-active');
        });

        // Trouver et activer le bouton correspondant au filtre
        var activeButton = document.querySelector('[data-filter=\"' + filterValue + '\"]');
        if (activeButton) {
            activeButton.classList.add('filter-active');
        }

        // Cacher le message de sélection
        var noFilterMessage = document.querySelector('.no-filter-message');
        if (noFilterMessage) {
            noFilterMessage.style.display = 'none';
        }

        // Afficher les éléments correspondants
        var items = grid.querySelectorAll('.isotope-item');
        items.forEach(function(item) {
            item.style.display = '';
        });
    }
    
    // Initialiser Isotope après le chargement des images
    imagesLoaded(grid, function() {
        console.log('Images chargées');
        
        var iso = new Isotope(grid, {
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows'
        });

        // Activer le filtre \"petit-dejeuner\" par défaut
        setTimeout(function() {
            activateFilter('.petit-dejeuner');
            iso.arrange({ filter: '.petit-dejeuner' });
        }, 100);
        
        // Gérer les clics sur les filtres
        var filterButtons = document.querySelectorAll('.isotope-filters li');
        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('filter-active');
                });
                // Ajouter la classe active au bouton cliqué
                this.classList.add('filter-active');
                
                // Afficher le message si aucun filtre n'est sélectionné
                var noFilterMessage = document.querySelector('.no-filter-message');
                if (filterValue === '*') {
                    noFilterMessage.style.display = 'block';
                } else {
                    noFilterMessage.style.display = 'none';
                }
                
                // Appliquer le filtre
                var filterValue = this.getAttribute('data-filter');
                console.log('Filtering by:', filterValue); // Debug
                
                // Debug: vérifions les éléments correspondant au filtre
                var allItems = grid.querySelectorAll('.isotope-item');
                console.log('Tous les éléments:', allItems.length);
                
                // Debug: afficher les classes des éléments qui devraient correspondre
                console.log('Recherche des éléments avec classe:', filterValue.replace('.filter-', '.'));
                
                var matchingItems = grid.querySelectorAll(filterValue !== '*' ? filterValue.replace('.filter-', '.') : '.isotope-item');
                console.log('Éléments correspondant au filtre:', matchingItems.length);
                matchingItems.forEach(function(item) {
                    console.log('Élément correspondant:', item.className);
                });
                
                iso.arrange({ filter: filterValue.replace('.filter-', '.') });
            });
        });
    });
});</script>



<section id=\"menu\" class=\"menu section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Menu</h2>
   
    <!-- Indice pour guider vers la commande -->
    <div class=\"menu-guidance\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      <div class=\"guidance-content\">
        <span class=\"guidance-icon\">📋</span>
        <span class=\"guidance-text\">
          Parcourez notre menu puis 
          <strong class=\"guidance-highlight\">descendez pour commander</strong>
        </span>
        <div class=\"guidance-arrow\">
          <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\">
            <path d=\"M7 13L12 18L17 13M7 6L12 11L17 6\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

    <!-- Filtres dynamiques -->
    <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-12 d-flex justify-content-center\">
        <ul class=\"menu-filters isotope-filters\">
            {% for type in types %}
              {% set type_class = type|replace({'é':'e', 'è':'e', 'î':'i', 'ï':'i', 'û':'u', 'ù':'u', 'ô':'o'})|lower|replace({' ':'-'}) %}
              {% set type_label = type|replace({'filter-':''}) %}
              {% set icon = '🍳' %}
              {% if 'petit-dejeuner' in type_class %}
                {% set icon = '☕' %}
              {% elseif 'dejeuner' in type_class %}
                {% set icon = '🍽️' %}
              {% elseif 'diner' in type_class %}
                {% set icon = '🌙' %}
              {% elseif 'collation' in type_class %}
                {% set icon = '🥨' %}
              {% elseif 'brunch' in type_class %}
                {% set icon = '🥞' %}
              {% endif %}
              <li class=\"menu-filter-item\" data-filter=\".{{ type_class }}\" data-type=\"{{ type_class }}\">
                <div class=\"filter-icon\">{{ icon }}</div>
                <div class=\"filter-text\">{{ type_label }}</div>
              </li>
            {% endfor %}
        </ul>
      </div>
    </div>

    <style>
    .menu-filters {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin: 30px 0;
      padding: 0;
      list-style: none;
    }

    .menu-filter-item {
      background: white;
      border: 2px solid #ff6b35;
      border-radius: 50px;
      padding: 12px 30px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }

    .menu-filter-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #ff6b35, #f7931e);
      opacity: 0;
      transition: opacity 0.3s ease;
      z-index: 1;
    }

    .menu-filter-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255, 107, 53, 0.2);
    }

    .menu-filter-item:hover::before {
      opacity: 1;
    }

    .filter-icon {
      font-size: 1.5em;
      position: relative;
      z-index: 2;
      transition: transform 0.3s ease;
    }

    .menu-filter-item:hover .filter-icon {
      transform: scale(1.2);
    }

    .filter-text {
      color: #2c3e50;
      font-weight: 600;
      font-size: 1.1rem;
      position: relative;
      z-index: 2;
      transition: color 0.3s ease;
    }

    .menu-filter-item:hover .filter-text {
      color: white;
    }

    .menu-filter-item.filter-active {
      background: linear-gradient(135deg, #ff6b35, #f7931e);
      border-color: transparent;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255, 107, 53, 0.2);
    }

    .menu-filter-item.filter-active .filter-text {
      color: white;
    }

    @media (max-width: 768px) {
      .menu-filters {
        gap: 10px;
        padding: 0 15px;
      }

      .menu-filter-item {
        padding: 8px 20px;
      }

      .filter-text {
        font-size: 0.9rem;
      }

      .filter-icon {
        font-size: 1.2em;
      }
    }
    </style>

    <!-- Message quand aucun type n'est sélectionné -->
    <div class=\"no-filter-message text-center mt-4\">
        <div class=\"alert alert-info\">
            <i class=\"bi bi-info-circle me-2\"></i>
            Veuillez sélectionner un type de menu ci-dessus pour voir les plats disponibles
        </div>
    </div>

    <!-- Affichage des menus -->
    <div class=\"row isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      {% for menu in menus %}
        {% set type_class = menu.type|replace({'é':'e', 'è':'e', 'î':'i', 'ï':'i', 'û':'u', 'ù':'u', 'ô':'o'})|lower|replace({' ':'-'}) %}
        <div class=\"col-lg-6 menu-item isotope-item {{ type_class }}\">
          <img src=\"{{ menu.image }}\" class=\"menu-img\" alt=\"\">
          <div class=\"menu-content\">
            <a href=\"#\">{{ menu.titre }}</a><span>{{ menu.price|number_format(2, '.', ',') }}&nbsp;DT</span>
          </div>
          <div class=\"menu-ingredients\">
            {{ menu.description }}
          </div>
        </div>
      {% else %}
        <p>Aucun menu trouvé.</p>
      {% endfor %}
    </div>

    <!-- Séparateur Visuel avec Indication -->
    <div class=\"row mt-4\" data-aos=\"fade-up\" data-aos-delay=\"350\">
      <div class=\"col-12\">
        <div class=\"menu-separator\">
          <div class=\"separator-line\"></div>
          <div class=\"separator-text\">
            <span class=\"separator-icon\">👇</span>
            <span>Passez à l'étape suivante</span>
          </div>
          <div class=\"separator-line\"></div>
        </div>
      </div>
    </div>

    <!-- Call-to-Action Élégant - Version 2 -->
    <div class=\"row mt-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">
      <div class=\"col-12\">
        <div class=\"elegant-cta-container\">
          <!-- Particules décoratives -->
          <div class=\"particles\">
            <div class=\"particle particle-1\"></div>
            <div class=\"particle particle-2\"></div>
            <div class=\"particle particle-3\"></div>
            <div class=\"particle particle-4\"></div>
            <div class=\"particle particle-5\"></div>
          </div>

          <div class=\"cta-card\">
            <div class=\"cta-header\">
              <div class=\"cta-badge\">
                <span class=\"badge-text\">🔥 Offre spéciale</span>
              </div>
              <h3 class=\"cta-main-title\">
                Votre festin vous attend
              </h3>
              <p class=\"cta-subtitle\">
                Commandez maintenant et savourez l'excellence culinaire
              </p>
            </div>

            <div class=\"cta-features\">
              <div class=\"feature-grid\">
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">🍴</div>
                  <div class=\"feature-text\">
                    <strong>Saveurs authentiques</strong>
                    <span>Recettes traditionnelles</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">⏰</div>
                  <div class=\"feature-text\">
                    <strong>Livraison rapide</strong>
                    <span>En moins de 30min</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">✨</div>
                  <div class=\"feature-text\">
                    <strong>Qualité garantie</strong>
                    <span>Satisfaction 100%</span>
                  </div>
                </div>
                <div class=\"feature-box\">
                  <div class=\"feature-icon\">💝</div>
                  <div class=\"feature-text\">
                    <strong>Service premium</strong>
                    <span>Support client 24/7</span>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"cta-action-zone\">
            <a href=\"javascript:void(0);\" onclick=\"checkAuthBeforeSubmit('{{ path('app_menu_commande') }}')\" class=\"elegant-order-btn\">
    <div class=\"btn-content\">
        <div class=\"btn-text-wrapper\">
            <span class=\"btn-main-text\">Je commande maintenant</span>
            <span class=\"btn-sub-text\">Cliquez pour continuer →</span>
        </div>
        <div class=\"btn-glow\"></div>
    </div>
</a>

              

              <div class=\"customer-reviews\">
                <div class=\"reviews-stars\">
                  ⭐⭐⭐⭐⭐
                </div>
                <p class=\"reviews-text\">
                  <strong>+1,200 clients satisfaits</strong> • \"Service exceptionnel et plats délicieux !\"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CSS pour l'indice de navigation -->
<style>
/* Indice de guidance dans l'en-tête */
.menu-guidance {
  margin-top: 20px;
  display: flex;
  justify-content: center;
}

.guidance-content {
  display: flex;
  align-items: center;
  gap: 12px;
  background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(247, 147, 30, 0.1));
  padding: 12px 25px;
  border-radius: 25px;
  border: 2px solid rgba(255, 107, 53, 0.2);
  font-size: 0.95rem;
  color: #555;
  font-weight: 500;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.1);
  transition: all 0.3s ease;
}

.guidance-content:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 107, 53, 0.2);
}

.guidance-icon {
  font-size: 1.3rem;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 3px 10px rgba(255, 107, 53, 0.3);
}

.guidance-text {
  color: #666;
  font-weight: 500;
}

.guidance-highlight {
  color: #ff6b35;
  font-weight: 700;
  text-decoration: underline;
  text-decoration-color: rgba(255, 107, 53, 0.3);
  text-underline-offset: 3px;
}

.guidance-arrow {
  color: #ff6b35;
  animation: guidanceArrow 2s ease-in-out infinite;
}

@keyframes guidanceArrow {
  0%, 100% { transform: translateY(0px); opacity: 0.7; }
  50% { transform: translateY(3px); opacity: 1; }
}

/* Séparateur avec indication */
.menu-separator {
  display: flex;
  align-items: center;
  margin: 40px 0 20px;
  opacity: 0.7;
}

.separator-line {
  flex: 1;
  height: 1px;
  background: linear-gradient(90deg, transparent, #ddd, transparent);
}

.separator-text {
  padding: 0 20px;
  font-size: 0.9rem;
  color: #666;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 8px;
}

.separator-icon {
  font-size: 1.2rem;
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
  40% { transform: translateY(-10px); }
  60% { transform: translateY(-5px); }
}

/* Container principal élégant */
.elegant-cta-container {
  position: relative;
  perspective: 1000px;
}

.particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  overflow: hidden;
}

.particle {
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(45deg, #ff6b35, #f7931e);
  border-radius: 50%;
  opacity: 0.3;
  animation: particleFloat 8s infinite linear;
}

.particle-1 { top: 10%; left: 10%; animation-delay: 0s; }
.particle-2 { top: 20%; right: 15%; animation-delay: 1.5s; }
.particle-3 { bottom: 30%; left: 20%; animation-delay: 3s; }
.particle-4 { top: 60%; right: 25%; animation-delay: 4.5s; }
.particle-5 { bottom: 15%; right: 10%; animation-delay: 6s; }

@keyframes particleFloat {
  0% { transform: translateY(0px) rotate(0deg); opacity: 0; }
  10% { opacity: 0.3; }
  90% { opacity: 0.3; }
  100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
}

.cta-card {
  background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
  border-radius: 25px;
  padding: 40px;
  box-shadow: 
    0 25px 50px rgba(0, 0, 0, 0.1),
    0 0 0 1px rgba(255, 255, 255, 0.8),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
  position: relative;
  overflow: hidden;
  transform-style: preserve-3d;
  transition: transform 0.3s ease;
}

.cta-card:hover {
  transform: rotateX(2deg) rotateY(2deg);
}

.cta-header {
  text-align: center;
  margin-bottom: 35px;
}

.cta-badge {
  display: inline-block;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  color: white;
  padding: 8px 20px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 20px;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
}

.cta-main-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 15px;
  background: linear-gradient(135deg, #2c3e50, #34495e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.cta-subtitle {
  font-size: 1.1rem;
  color: #7f8c8d;
  font-weight: 500;
  margin: 0;
}

.feature-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-bottom: 35px;
}

.feature-box {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: rgba(255, 107, 53, 0.05);
  border-radius: 15px;
  border-left: 4px solid #ff6b35;
  transition: all 0.3s ease;
}

.feature-box:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 107, 53, 0.15);
}

.feature-icon {
  font-size: 1.8rem;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #ff6b35, #f7931e);
  border-radius: 50%;
  box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
}

.feature-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.feature-text strong {
  color: #2c3e50;
  font-size: 1rem;
  font-weight: 600;
}

.feature-text span {
  color: #7f8c8d;
  font-size: 0.85rem;
}

.cta-action-zone {
  text-align: center;
}

.elegant-order-btn {
  position: relative;
  display: inline-block;
  text-decoration: none;
  margin: 20px 0;
}

.btn-content {
  position: relative;
  background: linear-gradient(135deg, #ff6b35 0%, #f7931e 50%, #e67e22 100%);
  padding: 20px 50px;
  border-radius: 50px;
  color: white;
  font-weight: 700;
  text-align: center;
  overflow: hidden;
  box-shadow: 
    0 15px 35px rgba(255, 107, 53, 0.4),
    0 5px 15px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3);
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.elegant-order-btn:hover .btn-content {
  transform: translateY(-8px) scale(1.05);
  box-shadow: 
    0 25px 50px rgba(255, 107, 53, 0.5),
    0 10px 25px rgba(0, 0, 0, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.4);
}

.btn-text-wrapper {
  position: relative;
  z-index: 2;
}

.btn-main-text {
  display: block;
  font-size: 1.3rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 3px;
}

.btn-sub-text {
  display: block;
  font-size: 0.9rem;
  opacity: 0.9;
  font-weight: 500;
}

.btn-glow {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
  transform: scale(0);
  transition: transform 0.6s ease;
}

.elegant-order-btn:hover .btn-glow {
  transform: scale(1);
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { transform: scale(0.8); opacity: 1; }
  100% { transform: scale(1.2); opacity: 0; }
}

.customer-reviews {
  margin-top: 25px;
  padding: 20px;
  background: rgba(52, 152, 219, 0.05);
  border-radius: 15px;
  border-left: 4px solid #3498db;
}

.reviews-stars {
  font-size: 1.5rem;
  margin-bottom: 10px;
  filter: drop-shadow(0 2px 4px rgba(255, 193, 7, 0.3));
}

.reviews-text {
  color: #5a6c7d;
  font-size: 0.95rem;
  margin: 0;
  line-height: 1.4;
}

.reviews-text strong {
  color: #3498db;
}

/* Responsive Design */
@media (max-width: 768px) {
  .guidance-content {
    padding: 10px 20px;
    font-size: 0.9rem;
    flex-wrap: wrap;
    text-align: center;
  }
  
  .cta-card {
    padding: 25px 20px;
  }
  
  .cta-main-title {
    font-size: 1.8rem;
  }
  
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 15px;
  }
  
  .btn-content {
    padding: 18px 35px;
  }
  
  .btn-main-text {
    font-size: 1.1rem;
  }
}
</style>
{% endblock %}









{% block bodyspec %}
<!-- Specials Section -->
<section id=\"specials\" class=\"specials section\">
  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Specials</h2>
    <div> <span class=\"description-title\">Goûtez le monde</span> <span>sans quitter la table</span></div>
     
  </div><!-- End Section Title -->

  <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <ul class=\"nav nav-tabs flex-column\">
          {% for key, special in specials %}
            <li class=\"nav-item\">
              <a class=\"nav-link {% if loop.first %}active show{% endif %}\" data-bs-toggle=\"tab\" href=\"#specials-tab-{{ loop.index }}\">
                {{ special.title }}
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>

      <div class=\"col-lg-9 mt-4 mt-lg-0\">
        <div class=\"tab-content\">
          {% for key, special in specials %}
            <div class=\"tab-pane {% if loop.first %}active show{% endif %}\" id=\"specials-tab-{{ loop.index }}\">
              <div class=\"row\">
                <div class=\"col-lg-8 details order-2 order-lg-1\">
                  <h3>{{ special.title }}</h3>
                  <p class=\"fst-italic\">{{ special.sousTitre }}</p>
                  <p>{{ special.description }}</p>
                </div>
                <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                  <img src=\"{{ special.image }}\" alt=\"\" class=\"img-fluid\">
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Specials Section -->
{% endblock %}






{% block bodyparties %}
<!-- Events Section -->
<section id=\"events\" class=\"events section\">
  <img class=\"slider-bg\" src=\"{{ asset('assets/img/events-bg.jpg') }}\" alt=\"\" data-aos=\"fade-in\">

  <div class=\"container\">
    <div class=\"swiper init-swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <script type=\"application/json\" class=\"swiper-config\">
        {
          \"loop\": true,
          \"speed\": 600,
          \"autoplay\": {
            \"delay\": 5000
          },
          \"slidesPerView\": \"auto\",
          \"pagination\": {
            \"el\": \".swiper-pagination\",
            \"type\": \"bullets\",
            \"clickable\": true
          }
        }
      </script>

      <div class=\"swiper-wrapper\">
        {% for party in partties %}
          <div class=\"swiper-slide\">
            <div class=\"row gy-4 event-item\">
              <div class=\"col-lg-6\">
                <img src=\"{{ party.image }}\" class=\"img-fluid\" alt=\"\">
              </div>
              <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                <h3>{{ party.titre }}</h3>
                <div class=\"price\">
                  <p><span>\${{ party.price }}</span></p>
                </div>
                <p class=\"fst-italic\">
                  {{ party.debut }}
                </p>
                <ul>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne1 }}</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne2 }}</span></li>
                  <li><i class=\"bi bi-check2-circle\"></i> <span>{{ party.ligne3 }}</span></li>
                </ul>
                <p>{{ party.final }}</p>
              </div>
            </div>
          </div><!-- End Slider item -->
        {% endfor %}
      </div>

      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
</section>
{% endblock %}







{% block bodyTable %}
<!-- Affichage des messages flash -->
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">{{ message }}</div>
    {% endfor %}
{% endfor %}

<!-- Book A Table Section -->
<section id=\"book-a-table\" class=\"book-a-table section\">
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Réserver une table</h2> 
    <div><span>À table,</span> <span class=\"description-title\">c’est réservé !</span></div>
  </div>

  <div class=\"container\">
    <div class=\"row g-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"col-lg-4 reservation-img\" style=\"background-image: url(assets/img/reservation.jpg);\"></div>

      <div class=\"col-lg-8 d-flex align-items-center reservation-form-bg\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <form action=\"{{ path('firebase_table_new') }}\" method=\"post\" role=\"form\" id=\"reservationForm\" novalidate>
          <div class=\"row gy-4\">
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Votre nom\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Votre adresse e-mail\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\">
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"date\" name=\"date\" class=\"form-control\" id=\"datePicker\">

            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"time\" name=\"time\" class=\"form-control\">
              
            </div>
            <div class=\"col-lg-4 col-md-6\">
              <input type=\"number\" name=\"people\" class=\"form-control\" placeholder=\"Nombre de personnes\">
            </div>
          </div>

          <div class=\"form-group mt-3\">
            <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\"></textarea>
          </div>

<div class=\"text-center mt-3\">
    <button type=\"button\" onclick=\"checkAuthBeforeSubmit('{{ path('firebase_table_new') }}', 'reservationForm')\" class=\"btn btn-primary\">Confirmer la réservation</button>
</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Script de validation JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('reservationForm');


// Empêche de sélectionner une date passée
const dateInput = document.getElementById('datePicker');
const today = new Date().toISOString().split('T')[0];
dateInput.setAttribute('min', today);

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = form.querySelector('[name=\"name\"]').value.trim();
      const email = form.querySelector('[name=\"email\"]').value.trim();
      const phone = form.querySelector('[name=\"phone\"]').value.trim();
      const date = form.querySelector('[name=\"date\"]').value;
      const time = form.querySelector('[name=\"time\"]').value;
      const people = form.querySelector('[name=\"people\"]').value.trim();

      function showAlert(message) {
        const alertBox = document.createElement('div');
        alertBox.style.position = 'fixed';
        alertBox.style.top = '50%';
        alertBox.style.left = '50%';
        alertBox.style.transform = 'translate(-50%, -50%)';
        alertBox.style.background = '#fff';
        alertBox.style.padding = '30px';
        alertBox.style.boxShadow = '0 0 15px rgba(0,0,0,0.3)';
        alertBox.style.borderRadius = '10px';
        alertBox.style.zIndex = 9999;
        alertBox.style.textAlign = 'center';
        alertBox.style.width = '300px';
        alertBox.innerHTML = `
          <h4 style=\"margin-bottom: 15px; color:#ff9900;\">⚠️ Erreur de saisie</h4>
          <p style=\"margin-bottom: 20px;\">\${message}</p>
          <button id=\"alertOkBtn\" style=\"
            background-color: #ff9900;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
          \">OK</button>
        `;
        document.body.appendChild(alertBox);

        document.getElementById('alertOkBtn').onclick = function () {
          alertBox.remove();
        };
      }

      // Vérification champs vides
      if (!name || !email || !phone || !date || !time || !people) {
        showAlert(\"Veuillez remplir tous les champs obligatoires.\");
        return;
      }

      // Email doit se terminer par @gmail.com
      if (!email.endsWith(\"@gmail.com\")) {
        showAlert(\"L'adresse e-mail doit se terminer par @gmail.com.\");
        return;
      }

      // Téléphone : exactement 8 chiffres
      const phoneRegex = /^[0-9]{8}\$/;
      if (!phoneRegex.test(phone)) {
        showAlert(\"Le numéro de téléphone doit contenir exactement 8 chiffres.\");
        return;
      }

      // Date : doit être dans le futur
      const selectedDate = new Date(date);
      const today = new Date();
      today.setHours(0, 0, 0, 0); // On ignore l'heure pour comparaison simple

      if (selectedDate <= today) {
        showAlert(\"La date doit être dans le futur.\");
        return;
      }

      // Heure : si la date est aujourd’hui, alors l’heure doit être future aussi
      const selectedDateTime = new Date(date + 'T' + time);
      const now = new Date();
      if (selectedDate.toDateString() === now.toDateString() && selectedDateTime <= now) {
        showAlert(\"L'heure doit être dans le futur.\");
        return;
      }

      // Nombre de personnes
      if (isNaN(people) || parseInt(people) <= 0) {
        showAlert(\"Le nombre de personnes doit être supérieur à 0.\");
        return;
      }

      // Si tout est valide, on envoie le formulaire
      form.submit();
    });
  });
</script>

{% endblock %}




{% block bodyGallery %}

<!-- Gallery Section -->
<section id=\"gallery\" class=\"gallery section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Gallery</h2>
    <div><span>Un aperçu en images</span> <span class=\"description-title\">de notre établissement</span></div>
     


  </div><!-- End Section Title -->

  <div class=\"container-fluid\" data-aos=\"fade-up\" data-aos-delay=\"100\">

    <div class=\"row g-0\">

      {% for key, g in galleries %}
        <div class=\"col-lg-3 col-md-4\">
          <div class=\"gallery-item\">
            <a href=\"{{ g.image }}\" class=\"glightbox\" data-gallery=\"images-gallery\">
              <img src=\"{{ g.image }}\" alt=\"\" class=\"img-fluid\">
            </a>
            
          </div>
        </div><!-- End Gallery Item -->
      {% endfor %}

    </div>

   

  </div>

</section><!-- /Gallery Section -->

{% endblock %}



{% block bodyChefs %}



<!-- Chefs Section -->
<section id=\"chefs\" class=\"chefs section\">

  <!-- Section Title -->
  <div class=\"container section-title\" data-aos=\"fade-up\">
    <h2>Chefs</h2>
    <div><span>Les Maîtres Cuisiniers de Notre </span> <span class=\"description-title\">Équipe</span></div>
    
  </div><!-- End Section Title -->

  <div class=\"container\">
    <div class=\"row gy-5\">

      {% for key, chef in chefs %}
        <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
          <div class=\"member\">
            <div class=\"pic\">
              {% if chef.image %}
                <img src=\"{{ chef.image }}\" class=\"img-fluid\" alt=\"Photo de {{ chef.nom }}\">
              {% else %}
                <span class=\"text-muted\">Aucune image</span>
              {% endif %}
            </div>
            <div class=\"member-info\">
              <h4>{{ chef.nom }}</h4>
              <span>{{ chef.titre }}</span>
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
              <div class=\"mt-2\">
             
                <form method=\"post\" action=\"{{ path('chefs_delete', {'key': key}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce chef ?');\">
              
                </form>
              </div>
            </div>
          </div>
        </div>
      {% else %}
        <div class=\"col-12 text-center text-muted\">
          Aucun chef trouvé.
        </div>
      {% endfor %}

    </div>
  </div>

</section><!-- /Chefs Section -->



    {% endblock %}

{% block bodyContact %}
 <div class=\"col-lg-8\">
    <form action=\"{{ path('front_contact_submit') }}\" method=\"post\" role=\"form\" class=\"php-email-form\" id=\"contactForm\">
      <div class=\"row\">
        <div class=\"col-md-6 form-group\">
          <input
            type=\"text\"
            name=\"name\"
            class=\"form-control\"
            id=\"name\"
            placeholder=\"Votre nom\"
            required>
        </div>
        <div class=\"col-md-6 form-group mt-3 mt-md-0\">
          <input
            type=\"email\"
            class=\"form-control\"
            name=\"email\"
            id=\"email\"
            placeholder=\"Votre email\"
            required>
        </div>
      </div>
      <div class=\"form-group mt-3\">
        <input
          type=\"text\"
          class=\"form-control\"
          name=\"subject\"
          id=\"subject\"
          placeholder=\"Sujet\"
          required>
      </div>
      <div class=\"form-group mt-3\">
        <textarea
          class=\"form-control\"
          name=\"message\"
          placeholder=\"Message\"
          required></textarea>
      </div>
      <div class=\"my-3\">
        <div class=\"loading\">Loading</div>
        <div class=\"error-message\"></div>
        <div class=\"sent-message\">Your message has been sent. Thank you!</div>
      </div>
    
      <div class=\"text-center mt-3\">
    <button type=\"button\" onclick=\"checkAuthBeforeSubmit('{{ path('front_index') }}', 'contactForm')\" class=\"btn btn-primary\">Envoyer</button>
      </div>
    </form>
</div>
{% endblock %}
", "front/front.html.twig", "C:\\Users\\21658\\Desktop\\1erCycleStage\\3A1Cycle - Copie (16) - Copie\\restorationSymf\\restorationSymf\\templates\\front\\front.html.twig");
    }
}
