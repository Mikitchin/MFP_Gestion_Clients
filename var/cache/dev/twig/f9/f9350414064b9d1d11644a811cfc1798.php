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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CRUC – Centre de Relation des Usagers Clients";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

                 <div class=\"col col-login mx-auto mt-7\">
                    <div class=\"text-center\">
                        <a href=\"#\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli.png"), "html", null, true);
        echo "\" class=\"header-brand-img\" alt=\"Logo CRUC\"></a>
                         
                    </div>
                </div>    

                <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        ";
        // line 21
        echo "                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

    <form method=\"post\">
    ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageKey", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageData", [], "any", false, false, false, 27), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 35
        echo "
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
    
    <div class=\"text-end pt-4\">
        <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
    </div>
                ";
        // line 49
        echo "                ";
        // line 53
        echo "                <div class=\"container-login100-form-btn\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Se connecter
                </button> 
                </div> 
        <div class=\"text-center pt-3\">
            <p class=\"text-dark mb-0\">Pas de compte?<a href=\"#\" class=\"text-primary ms-1\">S'inscrire</a></p>
        </div>
</form>

                            ";
        // line 74
        echo "                                            ";
        // line 80
        echo "                                            ";
        // line 98
        echo "                    ";
        
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
        return array (  177 => 98,  175 => 80,  173 => 74,  161 => 53,  159 => 49,  150 => 42,  142 => 37,  138 => 35,  130 => 32,  127 => 31,  125 => 30,  122 => 29,  116 => 27,  114 => 26,  107 => 21,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CRUC – Centre de Relation des Usagers Clients{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

                 <div class=\"col col-login mx-auto mt-7\">
                    <div class=\"text-center\">
                        <a href=\"#\"><img src=\"{{ asset('images/foncpubli.png') }}\" class=\"header-brand-img\" alt=\"Logo CRUC\"></a>
                         
                    </div>
                </div>    

                <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        {# <form class=\"login100-form validate-form\"> #}
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>

    <form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
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
                <div class=\"container-login100-form-btn\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Se connecter
                </button> 
                </div> 
        <div class=\"text-center pt-3\">
            <p class=\"text-dark mb-0\">Pas de compte?<a href=\"#\" class=\"text-primary ms-1\">S'inscrire</a></p>
        </div>
</form>

                            {# <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"tab5\">
                                            <div class=\"wrap-input100 validate-input input-group\" data-bs-validate=\"Valid email is required: ex@abc.xyz\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-email text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"matricule\" placeholder=\"Matricule\">
                                            </div> #}
                                            {# <div class=\"wrap-input100 validate-input input-group\" id=\"Password-toggle\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-eye text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"password\" placeholder=\"Mot de passe\">
                                            </div> #}
                                            {# <div class=\"text-end pt-4\">
                                                <p class=\"mb-0\"><a href=\"#\" class=\"text-primary ms-1\">Mot de passe oubli&eacute; ?</a></p>
                                            </div>
                                            <div class=\"container-login100-form-btn\">
                                                <a href=\"#\" class=\"login100-form-btn btn-green\">
                                                        Se connecter
                                                </a>
                                            </div>
                                            <div class=\"text-center pt-3\">
                                                <p class=\"text-dark mb-0\">Pas de compte?<a href=\"#\" class=\"text-primary ms-1\">S'inscrire</a></p>
                                            </div>
                                           
                                        </div>                                        
                                    </div>
                                </div>
                            </div>

                        </form> #}
                    {# </div>
                </div> #}
{% endblock %}






", "security/login.html.twig", "C:\\Users\\DELL\\Documents\\codes\\mfp_gestion_clients\\templates\\security\\login.html.twig");
    }
}
