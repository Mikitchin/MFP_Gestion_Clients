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

/* registration/login.html.twig */
class __TwigTemplate_4e39e8c1cf713738c4cd56fef8b49f7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>

";
        // line 20
        echo "


 ";
        // line 25
        echo "
                <!-- CONTAINER OPEN -->
                 <div class=\"container-login100\">
                    <div class=\"text-center\">
                        <a href=\"index.html\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli.png"), "html", null, true);
        echo "\" class=\"header-brand-img\" alt=\"\"></a>
                    </div>
                </div> 

                <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        <form class=\"login100-form validate-form\">
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

                                                    ";
        // line 41
        echo "                                                    
                                                    ";
        // line 43
        echo "
                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"tab5\">
                                            Matricule
                                            <div class=\"wrap-input100 validate-input input-group\">
                                                ";
        // line 54
        echo "                                                
                                                <input class=\"input100 border-start-1 form-control ms-0\" type=\"texte\" placeholder=\"\">
                                            </div>
                                            Mot de passe
                                            <div class=\"wrap-input100 validate-input input-group\" id=\"Password-toggle\">
                                                ";
        // line 62
        echo "                                                <input class=\"input100 border-start-1 \" type=\"password\" placeholder=\"\">
                                            </div>
                                            <div class=\"text-end pt-4\">
                                                <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
                                            </div>
                                            <div class=\"container-login100-form-btn\">
                                                <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"login100-form-btn btn-green\">
                                                        Se connecter
                                                </a>
                                            </div>
                                            <div class=\"text-center pt-3\">
                                                <p class=\"text-dark mb-0\">Pas de compte?<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        echo "\" class=\"text-primary ms-1\">S'inscrire</a></p>
                                            </div>
                                           
                                        </div>                                        
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            ";
        // line 87
        echo "         </body>
</html>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formulaire d'authentification";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 14,  202 => 13,  189 => 10,  179 => 9,  160 => 5,  148 => 87,  133 => 73,  125 => 68,  117 => 62,  110 => 54,  100 => 43,  97 => 41,  83 => 29,  77 => 25,  72 => 20,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Formulaire d'authentification{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>

{# {% block title %}{% endblock %} #}



 {# <div class=\"page\">
            <div class=\"\"> #}

                <!-- CONTAINER OPEN -->
                 <div class=\"container-login100\">
                    <div class=\"text-center\">
                        <a href=\"index.html\"><img src=\"{{ asset('images/foncpubli.png') }}\" class=\"header-brand-img\" alt=\"\"></a>
                    </div>
                </div> 

                <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        <form class=\"login100-form validate-form\">
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

                                                    {# include du formulaire de connexion #}
                                                    
                                                    {# Fin de l'include du formulaire de connexion #}

                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"tab5\">
                                            Matricule
                                            <div class=\"wrap-input100 validate-input input-group\">
                                                {# <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-email text-muted\" aria-hidden=\"true\"></i>
                                                </a> #}
                                                
                                                <input class=\"input100 border-start-1 form-control ms-0\" type=\"texte\" placeholder=\"\">
                                            </div>
                                            Mot de passe
                                            <div class=\"wrap-input100 validate-input input-group\" id=\"Password-toggle\">
                                                {# <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-eye text-muted\" aria-hidden=\"true\"></i>
                                                </a> #}
                                                <input class=\"input100 border-start-1 \" type=\"password\" placeholder=\"\">
                                            </div>
                                            <div class=\"text-end pt-4\">
                                                <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
                                            </div>
                                            <div class=\"container-login100-form-btn\">
                                                <a href=\"{{ path('app_home') }}\" class=\"login100-form-btn btn-green\">
                                                        Se connecter
                                                </a>
                                            </div>
                                            <div class=\"text-center pt-3\">
                                                <p class=\"text-dark mb-0\">Pas de compte?<a href=\"{{ path('app_inscription') }}\" class=\"text-primary ms-1\">S'inscrire</a></p>
                                            </div>
                                           
                                        </div>                                        
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            {# </div>
        </div> #}
         </body>
</html>
        {# {% endblock %} #}", "registration/login.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\registration\\login.html.twig");
    }
}
