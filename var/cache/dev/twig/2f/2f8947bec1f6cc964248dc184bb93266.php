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

/* gestion/ajouter_profil.html.twig */
class __TwigTemplate_741b06e225ff5f13d9aff16f8dff8833 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/ajouter_profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/ajouter_profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion/ajouter_profil.html.twig", 1);
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
        echo "

<div class=\"form-container\">
    <div class=\"wrap-login100 p-6\">
        <form class=\"login100-form validate-form\">                           
            <div class=\"panel panel-primary\">                               
                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                    <div class=\"tab-content\">           
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h4 class=\"card-title\">Créer un profil</h4>
                                    </div>
                                        <div class=\"card-body\">
                                            <form class=\"form-horizontal\">
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Groupe :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <select name=\"groupe\" class=\"form-control form-select\" data-bs-placeholder=\"Selectionner un groupe...\">
                                                                            <option value=\"\" selected>Selectionner un groupe...</option>
                                                                            <option value=\"group1\">Groupe 1</option>
                                                                            <option value=\"group2\">Groupe 2</option>
                                                                            <option value=\"group3\">Groupe 3</option>
                                                                            <option value=\"group3\">Groupe 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>                                       
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Nom du profil :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                    </div>
                                                                </div>
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Description du profil :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <textarea class=\"form-control mb-4\" placeholder=\"Saisir la description du profil\" rows=\"4\"></textarea>
                                                                    </div>
                                                                </div>                                                                
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Droits :</label>
                                                                    <div class=\"col-md-7\">                                                                    
                                                                        <select id=\"multiple-checkboxes\" multiple=\"multiple\">
                                                                            <option value=\"droit1\">Droit 1</option>
                                                                            <option value=\"droi2\">Droit 2</option>
                                                                            <option value=\"droit3\">Droit 3</option>
                                                                            <option value=\"droit4\">Droit 4</option>
                                                                            <option value=\"droit5\">Droit 5</option>
                                                                            <option value=\"droit6\">Droit 6</option>
                                                                        </select>                                                 
                                                                    </div>
                                                                </div>                                                 
                                                                                    
                                                                <button class=\"btn btn-green mt-4 mb-0\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>    
                                        <!-- End Row -->
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
        return "gestion/ajouter_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CRUC – Centre de Relation des Usagers Clients{% endblock %}

{% block body %}


<div class=\"form-container\">
    <div class=\"wrap-login100 p-6\">
        <form class=\"login100-form validate-form\">                           
            <div class=\"panel panel-primary\">                               
                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                    <div class=\"tab-content\">           
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h4 class=\"card-title\">Créer un profil</h4>
                                    </div>
                                        <div class=\"card-body\">
                                            <form class=\"form-horizontal\">
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Groupe :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <select name=\"groupe\" class=\"form-control form-select\" data-bs-placeholder=\"Selectionner un groupe...\">
                                                                            <option value=\"\" selected>Selectionner un groupe...</option>
                                                                            <option value=\"group1\">Groupe 1</option>
                                                                            <option value=\"group2\">Groupe 2</option>
                                                                            <option value=\"group3\">Groupe 3</option>
                                                                            <option value=\"group3\">Groupe 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>                                       
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Nom du profil :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                    </div>
                                                                </div>
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Description du profil :</label>
                                                                    <div class=\"col-md-7\">
                                                                        <textarea class=\"form-control mb-4\" placeholder=\"Saisir la description du profil\" rows=\"4\"></textarea>
                                                                    </div>
                                                                </div>                                                                
                                                                <div class=\" row mb-4\">
                                                                    <label class=\"col-md-5 form-label\">Droits :</label>
                                                                    <div class=\"col-md-7\">                                                                    
                                                                        <select id=\"multiple-checkboxes\" multiple=\"multiple\">
                                                                            <option value=\"droit1\">Droit 1</option>
                                                                            <option value=\"droi2\">Droit 2</option>
                                                                            <option value=\"droit3\">Droit 3</option>
                                                                            <option value=\"droit4\">Droit 4</option>
                                                                            <option value=\"droit5\">Droit 5</option>
                                                                            <option value=\"droit6\">Droit 6</option>
                                                                        </select>                                                 
                                                                    </div>
                                                                </div>                                                 
                                                                                    
                                                                <button class=\"btn btn-green mt-4 mb-0\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>    
                                        <!-- End Row -->
                        </div>
                    </div>
                </div>
            </div>    
        </form>
     </div>
</div>     


{% endblock %}", "gestion/ajouter_profil.html.twig", "C:\\Users\\DELL\\Documents\\CODES SYMFONY\\Mfp_gestion_clients\\templates\\gestion\\ajouter_profil.html.twig");
    }
}
