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

/* gestion/index.html.twig */
class __TwigTemplate_0c71501d636492e6c008ad4aad2ce5f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion/index.html.twig", 1);
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
                        <form class=\"login100-form validate-form\">
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>
                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"tab5\">
                                            <div class=\"wrap-input100 validate-input input-group\" data-bs-validate=\"Valid email is required: ex@abc.xyz\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-email text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"matricule\" placeholder=\"Matricule\">
                                            </div>
                                            <div class=\"wrap-input100 validate-input input-group\" id=\"Password-toggle\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-eye text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"password\" placeholder=\"Mot de passe\">
                                            </div>
                                            <div class=\"text-end pt-4\">
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

                        </form>
                    </div>
                </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <form class=\"login100-form validate-form\">
                            <span class=\"login100-form-title pb-5\">
                                CRUC - Authentification
                            </span>
                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"tab5\">
                                            <div class=\"wrap-input100 validate-input input-group\" data-bs-validate=\"Valid email is required: ex@abc.xyz\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-email text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"matricule\" placeholder=\"Matricule\">
                                            </div>
                                            <div class=\"wrap-input100 validate-input input-group\" id=\"Password-toggle\">
                                                <a href=\"javascript:void(0)\" class=\"input-group-text bg-white text-muted\">
                                                    <i class=\"zmdi zmdi-eye text-muted\" aria-hidden=\"true\"></i>
                                                </a>
                                                <input class=\"input100 border-start-0 form-control ms-0\" type=\"password\" placeholder=\"Mot de passe\">
                                            </div>
                                            <div class=\"text-end pt-4\">
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

                        </form>
                    </div>
                </div>
{% endblock %}
", "gestion/index.html.twig", "C:\\Users\\DELL\\Documents\\codes\\mfp_gestion_clients\\templates\\gestion\\index.html.twig");
    }
}
