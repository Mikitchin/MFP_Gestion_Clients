<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _partials/_agtnavbar.html.twig */
class __TwigTemplate_409a6180b487ecea9f436ac132df7a41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_agtnavbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_agtnavbar.html.twig"));

        // line 1
        echo "<header class=\"headerxd\" data-header>
    <div class=\"containerxd\">
      <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ahome");
        echo "\" class=\"logo\" title=\"Accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli1.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\"></a>


      <button class=\"menu-toggle-btn icon-box\" data-menu-toggle-btn aria-label=\"Toggle Menu\">
        <span class=\"material-symbols-rounded  icon\">menu</span>
      </button>

      <nav class=\"navbarxd\">
        <div class=\"containerxd\">

          <ul class=\"navbarxd-list\">

            <li>
              <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ahome");
        echo "\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">grid_view</span>

                <span>Accueil</span>
              </a>
            </li>
            
            <li>
              <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_createrdv");
        echo "\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">today</span>

                <span title=\"Prise de rendez-vous pour les usagers clients\">Prise de rendez-vous</span>
              </a>
            </li>

            <li>
              <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_listrdv");
        echo "\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">today</span>

                <span title=\"Afficher la liste des demandes de rendez-vous\">Demande de RDV</span>
              </a>
            </li>

            <li>
              <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statsrdv");
        echo "\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">Leaderboard</span>

                <span title=\"Afficher les statistiques des demandes de rendez-vous\">Statistiques</span>
              </a>
            </li> 

          </ul>

          <ul class=\"user-action-list\">

            <li>
              <a href=\"#\" class=\"notification icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Les notifications\">notifications</span>
              </a>
            </li>

            <li>
              <a href=\"#\" class=\"headerxd-profile\">

                <figure class=\"profile-avatar\">
                  <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Gomé Cyrille\" width=\"32\" height=\"32\">
                </figure>

                <div>
                 <p class=\"profile-title\">Gomé Cyrille</p>
                 <p class=\"profile-subtitle\">Agent d'accueil</p>                
                </div>

              </a>
            </li>

          </ul>

          <ul class=\"navbarxd-list\">
            <li>
              <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Se déconnecter\">power_rounded</span>
              </a>
            </li>
          </ul>
          
        </div>
      </nav>

    </div>
  </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_agtnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 61,  98 => 40,  87 => 32,  76 => 24,  65 => 16,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"headerxd\" data-header>
    <div class=\"containerxd\">
      <a href=\"{{ path('app_ahome') }}\" class=\"logo\" title=\"Accueil\"><img src=\"{{ asset('images/foncpubli1.png') }}\" class=\"logo\" alt=\"logo\"></a>


      <button class=\"menu-toggle-btn icon-box\" data-menu-toggle-btn aria-label=\"Toggle Menu\">
        <span class=\"material-symbols-rounded  icon\">menu</span>
      </button>

      <nav class=\"navbarxd\">
        <div class=\"containerxd\">

          <ul class=\"navbarxd-list\">

            <li>
              <a href=\"{{ path('app_ahome') }}\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">grid_view</span>

                <span>Accueil</span>
              </a>
            </li>
            
            <li>
              <a href=\"{{ path('app_createrdv') }}\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">today</span>

                <span title=\"Prise de rendez-vous pour les usagers clients\">Prise de rendez-vous</span>
              </a>
            </li>

            <li>
              <a href=\"{{ path('app_listrdv') }}\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">today</span>

                <span title=\"Afficher la liste des demandes de rendez-vous\">Demande de RDV</span>
              </a>
            </li>

            <li>
              <a href=\"{{ path('app_statsrdv') }}\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\">Leaderboard</span>

                <span title=\"Afficher les statistiques des demandes de rendez-vous\">Statistiques</span>
              </a>
            </li> 

          </ul>

          <ul class=\"user-action-list\">

            <li>
              <a href=\"#\" class=\"notification icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Les notifications\">notifications</span>
              </a>
            </li>

            <li>
              <a href=\"#\" class=\"headerxd-profile\">

                <figure class=\"profile-avatar\">
                  <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Gomé Cyrille\" width=\"32\" height=\"32\">
                </figure>

                <div>
                 <p class=\"profile-title\">Gomé Cyrille</p>
                 <p class=\"profile-subtitle\">Agent d'accueil</p>                
                </div>

              </a>
            </li>

          </ul>

          <ul class=\"navbarxd-list\">
            <li>
              <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Se déconnecter\">power_rounded</span>
              </a>
            </li>
          </ul>
          
        </div>
      </nav>

    </div>
  </header>", "_partials/_agtnavbar.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\_partials\\_agtnavbar.html.twig");
    }
}
