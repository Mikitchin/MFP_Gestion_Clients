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

/* security/login.html.twig */
class __TwigTemplate_b7c0f4998a311cc2b2e3278b1c3d3edc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        // line 23
        echo "
                <!-- CONTAINER OPEN -->
                 <div class=\"container-login100\">
                    <div class=\"text-center\">
                        <a href=\"index.html\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli.png"), "html", null, true);
        echo "\" class=\"header-brand-img\" alt=\"\"></a>
                    </div>
                </div> 

                <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        ";
        // line 34
        echo "                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

                                                    ";
        // line 39
        echo "                                                    
                                                    <form method=\"post\">
                                                    ";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageKey", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageData", [], "any", false, false, false, 42), "security"), "html", null, true);
            echo "</div>
                                                    ";
        }
        // line 44
        echo "                                        
                                                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                                                        <div class=\"mb-3\">
                                                            Vous êtes connecté(e) comme ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "userIdentifier", [], "any", false, false, false, 47), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                                                        </div>
                                                    ";
        }
        // line 50
        echo "                                                        <div class=\"panel panel-primary\">
                                                                                
                                                        <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"tab5\">
                                        
                                                            <label for=\"inputEmail\">Email</label>
                                                            <input type=\"email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                            <label for=\"inputPassword\">Mot de passe</label>
                                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                        
                                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                                value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                                            >
                                        
                                                            <div class=\"text-end pt-4\">
                                                                <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
                                                            </div>
                                                                        ";
        // line 69
        echo "                                                                            ";
        // line 73
        echo "                                                            ";
        // line 74
        echo "                                                            <button class=\"btn btn-green mt-3\" type=\"submit\">
                                                                Se connecter
                                                            </button> 
                                                             
                                                            <div class=\"text-center pt-3\">
                                                            <p class=\"text-dark mb-0\">Pas de compte ?<a href=\"";
        // line 79
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
        // line 94
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 14,  231 => 13,  218 => 10,  208 => 9,  189 => 5,  177 => 94,  161 => 79,  154 => 74,  152 => 73,  150 => 69,  141 => 62,  133 => 57,  124 => 50,  116 => 47,  113 => 46,  111 => 45,  108 => 44,  102 => 42,  100 => 41,  96 => 39,  90 => 34,  81 => 27,  75 => 23,  72 => 20,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 5,  46 => 1,);
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
                        {# <form class=\"login100-form validate-form\"> #}
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

                                                    {# include du formulaire de connexion #}
                                                    
                                                    <form method=\"post\">
                                                    {% if error %}
                                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                                    {% endif %}
                                        
                                                    {% if app.user %}
                                                        <div class=\"mb-3\">
                                                            Vous êtes connecté(e) comme {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                                                        </div>
                                                    {% endif %}
                                                        <div class=\"panel panel-primary\">
                                                                                
                                                        <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                                        <div class=\"tab-content\">
                                                            <div class=\"tab-pane active\" id=\"tab5\">
                                        
                                                            <label for=\"inputEmail\">Email</label>
                                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                            <label for=\"inputPassword\">Mot de passe</label>
                                                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                        
                                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                                value=\"{{ csrf_token('authenticate') }}\"
                                                            >
                                        
                                                            <div class=\"text-end pt-4\">
                                                                <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
                                                            </div>
                                                                        {# <div class=\"container-login100-form-btn\"> #}
                                                                            {# <a href=\"#\" class=\"login100-form-btn btn-green\">
                                                                                        Se connecter
                                                                                    </a>
                                                                            </div> #}
                                                            {# <div class=\"container-login100-form-btn\"> #}
                                                            <button class=\"btn btn-green mt-3\" type=\"submit\">
                                                                Se connecter
                                                            </button> 
                                                             
                                                            <div class=\"text-center pt-3\">
                                                            <p class=\"text-dark mb-0\">Pas de compte ?<a href=\"{{ path('app_inscription') }}\" class=\"text-primary ms-1\">S'inscrire</a></p>
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
        ", "security/login.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\security\\login.html.twig");
    }
}
