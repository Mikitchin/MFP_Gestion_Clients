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

/* _partials/_navbar.html.twig */
class __TwigTemplate_6093e16eb56c7896187eb7b202c72598 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navbar.html.twig"));

        // line 1
        echo " <header class=\"headerxd\" data-header>
    <div class=\"containerxd\">
      <a href=\"#\" class=\"logo\" title=\"Accueil\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli1.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\"></a>

        <button class=\"menu-toggle-btn icon-box\" data-menu-toggle-btn aria-label=\"Toggle Menu\">
        <span class=\"material-symbols-rounded  icon\">menu</span>
      </button>

      <nav class=\"navbarxd\">
        <div class=\"containerxd\">

          <ul class=\"navbarxd-list\">

            <li>
              <a href=\"#\" class=\"navbarxd-link active icon-box\">
                <span class=\"material-symbols-rounded  icon\">grid_view</span>

                <span>Accueil</span>
              </a>
            </li>           

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">settings</span>

                <span>Paramêtres</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"#\">Cr&eacute;er</a></li>
                <li><a href=\"#\">Afficher</a></li>
              </ul>
            </li>

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">Rule</span>

                <span>Profils</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajoutprofil");
        echo "\">Cr&eacute;er</a></li>
                <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
        echo "\">Afficher</a></li>
              </ul>
            </li>

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">Group</span>

                <span>Utilisateurs</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"#\">Cr&eacute;er</a></li>
                <li><a href=\"#\">Afficher</a></li>
              </ul>
            </li>

          </ul>

          <ul class=\"user-action-list\">

            <li>
              <a href=\"#\" class=\"notification icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Les notifications\">notifications</span>
              </a>
            </li>

            ";
        // line 68
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            echo "
            <li class=\"nav-item\">
                <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">
                    CONNEXION
                </a>
            </li>

            ";
        } else {
            // line 77
            echo "
            <li>
              <a href=\"#\" class=\"headerxd-profile\">

                <figure class=\"profile-avatar\">
                  <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
            echo "\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                </figure>

                <div>
                 <p class=\"profile-title\">Gomé Cyrille</p>
                  <p class=\"profile-subtitle\">Super Admin</p>
                </div>

              </a>
            </li>
            ";
            // line 96
            echo "
          </ul>

          <ul class=\"navbarxd-list\">
            <li>
              <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Se déconnecter\">power_rounded</span>
              </a>
            </li>
          </ul>

        ";
        }
        // line 108
        echo "        
      </div>
      </nav>

    </div>
  </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 108,  163 => 101,  156 => 96,  143 => 82,  136 => 77,  127 => 71,  123 => 69,  121 => 68,  92 => 42,  88 => 41,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <header class=\"headerxd\" data-header>
    <div class=\"containerxd\">
      <a href=\"#\" class=\"logo\" title=\"Accueil\"><img src=\"{{ asset('images/foncpubli1.png') }}\" class=\"logo\" alt=\"logo\"></a>

        <button class=\"menu-toggle-btn icon-box\" data-menu-toggle-btn aria-label=\"Toggle Menu\">
        <span class=\"material-symbols-rounded  icon\">menu</span>
      </button>

      <nav class=\"navbarxd\">
        <div class=\"containerxd\">

          <ul class=\"navbarxd-list\">

            <li>
              <a href=\"#\" class=\"navbarxd-link active icon-box\">
                <span class=\"material-symbols-rounded  icon\">grid_view</span>

                <span>Accueil</span>
              </a>
            </li>           

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">settings</span>

                <span>Paramêtres</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"#\">Cr&eacute;er</a></li>
                <li><a href=\"#\">Afficher</a></li>
              </ul>
            </li>

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">Rule</span>

                <span>Profils</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"{{ path('app_ajoutprofil') }}\">Cr&eacute;er</a></li>
                <li><a href=\"{{ path('app_profil') }}\">Afficher</a></li>
              </ul>
            </li>

            <li class=\"menu-deroulant\">
              <a href=\"#\" class=\"navbarxd-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">Group</span>

                <span>Utilisateurs</span>
              </a>
              <ul class=\"sous-menu\">
                <li><a href=\"#\">Cr&eacute;er</a></li>
                <li><a href=\"#\">Afficher</a></li>
              </ul>
            </li>

          </ul>

          <ul class=\"user-action-list\">

            <li>
              <a href=\"#\" class=\"notification icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Les notifications\">notifications</span>
              </a>
            </li>

            {% if not app.user %}

            <li class=\"nav-item\">
                <a href=\"{{ path('app_login') }}\" class=\"nav-link\">
                    CONNEXION
                </a>
            </li>

            {% else %}

            <li>
              <a href=\"#\" class=\"headerxd-profile\">

                <figure class=\"profile-avatar\">
                  <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                </figure>

                <div>
                 <p class=\"profile-title\">Gomé Cyrille</p>
                  <p class=\"profile-subtitle\">Super Admin</p>
                </div>

              </a>
            </li>
            {# 
            <li class=\"nav-item\">
                <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">DECONNEXION</a>
            </li> #}

          </ul>

          <ul class=\"navbarxd-list\">
            <li>
              <a href=\"{{ path('app_logout') }}\" class=\"navbarxd-link activexd icon-box\">
                <span class=\"material-symbols-rounded  icon\" title=\"Se déconnecter\">power_rounded</span>
              </a>
            </li>
          </ul>

        {% endif %}
        
      </div>
      </nav>

    </div>
  </header>", "_partials/_navbar.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\_partials\\_navbar.html.twig");
    }
}
