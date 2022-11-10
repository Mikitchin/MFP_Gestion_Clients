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

/* gestion/afficher_profil.html.twig */
class __TwigTemplate_8e0b5aa2a1fd25009ac9e13b914fd566 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/afficher_profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/afficher_profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion/afficher_profil.html.twig", 1);
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
 <!--app-content open-->
            ";
        // line 10
        echo "
                    <!-- CONTAINER -->
                    <div class=\"main-container container-fluidxd\">

                       <!-- PAGE-HEADER -->
                       <div class=\"page-header\">
                        <h1 class=\"page-title\">LISTE DES PROFILS</h1>                            
                       </div>
                    <!-- PAGE-HEADER END -->

                      <!-- Row -->
                      <div class=\"row row-sm\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">                                
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered text-nowrap border-bottom\" id=\"responsive-datatable\">
                                            <thead>
                                                <tr>
                                                    <!--<th class=\"wd-15p border-bottom-0\">N°</th>
                                                    <th class=\"wd-70p border-bottom-0\">Libellé</th>
                                                    <th class=\"wd-15p border-bottom-0\">Actions</th>-->
                                                    <th width=\"9%\">N°</th>
                                                    <th width=\"80%\">Libellé</th>
                                                    <th width=\"11%\">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                       1
                                                    
                                                    </td>
                                                    <td><a href=\"#\">Profil 1 </a></td>
                                                    <td>
                                                        <button id=\"bEdit\" style=\"float: left\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 2</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                       3
                                                    
                                                    </td>
                                                    <td>Profil 3</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class=\"custom-control custom-radio\">
                                                            <input type=\"radio\" class=\"custom-control-input\" name=\"profil4\" value=\"\">
                                                            <span class=\"custom-control-label\">4</span>
                                                        </label>
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 4 </td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class=\"custom-control custom-radio\">
                                                            <input type=\"radio\" class=\"custom-control-input\" name=\"profil5\" value=\"\">
                                                            <span class=\"custom-control-label\">5</span>
                                                        </label>
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 5</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>                                              
                                               
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\" row mb-4\">
                                        <label class=\"col-md-12\"><b> Droits rattachés au profil sélectionné :</b></label>
                                        
                                    </div>
                                    <div class=\" row mb-12\">
                                            <textarea class=\"form-control mb-4\" rows=\"4\">Action 1
Action 2
Action 3</textarea>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                
                    
                    </div>
                    <!-- End Row -->                      
                    </div>
                    <!-- CONTAINER END -->
                ";
        // line 151
        echo "            <!--app-content close-->


 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/afficher_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 151,  92 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CRUC – Centre de Relation des Usagers Clients{% endblock %}

{% block body %}

 <!--app-content open-->
            {# <div class=\"main-content app-content mt-0\">
                <div class=\"side-app\"> #}

                    <!-- CONTAINER -->
                    <div class=\"main-container container-fluidxd\">

                       <!-- PAGE-HEADER -->
                       <div class=\"page-header\">
                        <h1 class=\"page-title\">LISTE DES PROFILS</h1>                            
                       </div>
                    <!-- PAGE-HEADER END -->

                      <!-- Row -->
                      <div class=\"row row-sm\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">                                
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered text-nowrap border-bottom\" id=\"responsive-datatable\">
                                            <thead>
                                                <tr>
                                                    <!--<th class=\"wd-15p border-bottom-0\">N°</th>
                                                    <th class=\"wd-70p border-bottom-0\">Libellé</th>
                                                    <th class=\"wd-15p border-bottom-0\">Actions</th>-->
                                                    <th width=\"9%\">N°</th>
                                                    <th width=\"80%\">Libellé</th>
                                                    <th width=\"11%\">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                       1
                                                    
                                                    </td>
                                                    <td><a href=\"#\">Profil 1 </a></td>
                                                    <td>
                                                        <button id=\"bEdit\" style=\"float: left\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 2</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                       3
                                                    
                                                    </td>
                                                    <td>Profil 3</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class=\"custom-control custom-radio\">
                                                            <input type=\"radio\" class=\"custom-control-input\" name=\"profil4\" value=\"\">
                                                            <span class=\"custom-control-label\">4</span>
                                                        </label>
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 4 </td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class=\"custom-control custom-radio\">
                                                            <input type=\"radio\" class=\"custom-control-input\" name=\"profil5\" value=\"\">
                                                            <span class=\"custom-control-label\">5</span>
                                                        </label>
                                                    
                                                    
                                                    </td>
                                                    <td>Profil 5</td>
                                                    <td>
                                                        <button id=\"bEdit\" type=\"button\" class=\"btn btn-sm btn-primary\">
                                                            <span class=\"fe fe-edit\"> </span>
                                                        </button>
                                                        <button id=\"bDel\" type=\"button\" class=\"btn  btn-sm btn-danger\">
                                                            <span class=\"fe fe-trash-2\"> </span>
                                                        </button>
                                                    </td>
                                                </tr>                                              
                                               
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\" row mb-4\">
                                        <label class=\"col-md-12\"><b> Droits rattachés au profil sélectionné :</b></label>
                                        
                                    </div>
                                    <div class=\" row mb-12\">
                                            <textarea class=\"form-control mb-4\" rows=\"4\">Action 1
Action 2
Action 3</textarea>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                
                    
                    </div>
                    <!-- End Row -->                      
                    </div>
                    <!-- CONTAINER END -->
                {# </div>
            </div> #}
            <!--app-content close-->


 

{% endblock %}", "gestion/afficher_profil.html.twig", "C:\\Users\\DELL\\Documents\\CODES SYMFONY\\Mfp_gestion_clients\\templates\\gestion\\afficher_profil.html.twig");
    }
}
