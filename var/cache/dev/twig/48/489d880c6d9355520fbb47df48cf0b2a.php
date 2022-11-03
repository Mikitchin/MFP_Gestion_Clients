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

/* agent/rdv_form.html.twig */
class __TwigTemplate_5b616266d6b2ebd4f4c567f75c5994bb extends Template
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
        return "agent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/rdv_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/rdv_form.html.twig"));

        $this->parent = $this->loadTemplate("agent.html.twig", "agent/rdv_form.html.twig", 1);
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
        echo " <main>
    <article class=\"containerxd article\">

      <h2 class=\"h2 article-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h2>

      <p class=\"article-subtitle\">Formulaire de prise de rendez-vous pour les usagers clients !</p>

     
      <form class=\"form-horizontal\">
            <!-- Row -->
 <div class=\"row\">
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Nouvelle demande de rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Motif de la visite :</label>
                        <div class=\"col-md-9\">
                            <select name=\"motif\" class=\"form-control form-select\" data-bs-placeholder=\"Sélectionner un motif\">
                                <option value=\"\" selected>Sélectionner un motif</option>
                                <option value=\"\">Motif 1</option>
                                <option value=\"\">Motif 2</option>
                                <option value=\"\">Motif 3</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <label class=\"col-md-3 form-label\" for=\"example-email\">Direction / Service demandé :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"direction\" value=\"\">                                    
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Autre motif :</label>
                        <div class=\"col-md-9\">
                            <textarea class=\"form-control mb-4\" placeholder=\"\" rows=\"4\" name=\"autre_motif\"> </textarea>
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de rendez-vous :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_rdv\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Heure de rendez-vous :</label>
                        <div class=\"col-md-9\">
                            <select name=\"heure_rdv\" class=\"form-control form-select\" data-bs-placeholder=\"Sélectionner une heure\">
                                <option value=\"\" selected>Sélectionner une heure</option>
                                <option value=\"\">8H</option>
                                <option value=\"\">9H</option>
                                <option value=\"\">10H</option>
                                <option value=\"\">11H</option>
                                <option value=\"\">12H</option>
                                <option value=\"\">14H</option>
                                <option value=\"\">15H</option>
                                <option value=\"\">16H</option>                                        
                            </select>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Usager-Client</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Matricule :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"matricule\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Nom :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"nom\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Prénom(s) :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"prenom\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_naiss\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Lieu de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"lieu_naiss\">
                        </div>
                    </div>                        
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Mobile : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"mobile\">
                        </div>
                    </div>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Informations sur l'usager-client</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Ministère / Entreprise :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"structure\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Nom et prénom(s) :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"nom_prenom\">
                        </div>
                    </div>                
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_nais\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Lieu de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"lieu_nais\">
                        </div>
                    </div> 
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Fonction :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"fonction\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Ville :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"ville\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Commune :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"commune\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Quartier :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"quartier\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Adresse Postale :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"bp\">
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <label class=\"col-md-3 form-label\" for=\"example-email\">Email</label>
                        <div class=\"col-md-9\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\">
                        </div>
                    </div>                         
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Téléphone : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"telephone\">
                        </div>
                    </div>
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Mobile : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"mobil\">
                        </div>
                    </div>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<input style=\"margin-top: 10px;\" type=\"button\" value=\"Enregistrer\"> 
<!-- Row -->
      </form> 
         
 

    </article>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "agent/rdv_form.html.twig";
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
        return new Source("{% extends 'agent.html.twig' %}

{% block title %}CRUC – Centre de Relation des Usagers Clients{% endblock %}

{% block body %}
 <main>
    <article class=\"containerxd article\">

      <h2 class=\"h2 article-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h2>

      <p class=\"article-subtitle\">Formulaire de prise de rendez-vous pour les usagers clients !</p>

     
      <form class=\"form-horizontal\">
            <!-- Row -->
 <div class=\"row\">
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Nouvelle demande de rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Motif de la visite :</label>
                        <div class=\"col-md-9\">
                            <select name=\"motif\" class=\"form-control form-select\" data-bs-placeholder=\"Sélectionner un motif\">
                                <option value=\"\" selected>Sélectionner un motif</option>
                                <option value=\"\">Motif 1</option>
                                <option value=\"\">Motif 2</option>
                                <option value=\"\">Motif 3</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <label class=\"col-md-3 form-label\" for=\"example-email\">Direction / Service demandé :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"direction\" value=\"\">                                    
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Autre motif :</label>
                        <div class=\"col-md-9\">
                            <textarea class=\"form-control mb-4\" placeholder=\"\" rows=\"4\" name=\"autre_motif\"> </textarea>
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de rendez-vous :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_rdv\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Heure de rendez-vous :</label>
                        <div class=\"col-md-9\">
                            <select name=\"heure_rdv\" class=\"form-control form-select\" data-bs-placeholder=\"Sélectionner une heure\">
                                <option value=\"\" selected>Sélectionner une heure</option>
                                <option value=\"\">8H</option>
                                <option value=\"\">9H</option>
                                <option value=\"\">10H</option>
                                <option value=\"\">11H</option>
                                <option value=\"\">12H</option>
                                <option value=\"\">14H</option>
                                <option value=\"\">15H</option>
                                <option value=\"\">16H</option>                                        
                            </select>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Usager-Client</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Matricule :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"matricule\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Nom :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"nom\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Prénom(s) :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"prenom\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_naiss\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Lieu de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"lieu_naiss\">
                        </div>
                    </div>                        
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Mobile : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"mobile\">
                        </div>
                    </div>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xl-6 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-headerxd\">
                <h4 class=\"card-titlexd\">Informations sur l'usager-client</h4>
            </div>
            <div class=\"card-body\">
                <!-- <form class=\"form-horizontal\"> -->
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Ministère / Entreprise :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"structure\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Nom et prénom(s) :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"nom_prenom\">
                        </div>
                    </div>                
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Date de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"date\" class=\"form-control\" name=\"date_nais\">
                        </div>
                    </div>
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Lieu de naissance :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"lieu_nais\">
                        </div>
                    </div> 
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Fonction :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"fonction\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Ville :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"ville\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Commune :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"commune\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Quartier :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"quartier\">
                        </div>
                    </div>  
                    <div class=\" row mb-4\">
                        <label class=\"col-md-3 form-label\">Adresse Postale :</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" value=\"\" name=\"bp\">
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <label class=\"col-md-3 form-label\" for=\"example-email\">Email</label>
                        <div class=\"col-md-9\">
                            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\">
                        </div>
                    </div>                         
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Téléphone : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"telephone\">
                        </div>
                    </div>
                    <div class=\" row mb-4 mb-4\">
                        <label class=\"col-md-3 form-label\">Mobile : </label>
                        <div class=\"col-md-9\">
                            <input class=\"form-control\" type=\"tel\" name=\"mobil\">
                        </div>
                    </div>
                    
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<input style=\"margin-top: 10px;\" type=\"button\" value=\"Enregistrer\"> 
<!-- Row -->
      </form> 
         
 

    </article>
  </main>
{% endblock %}", "agent/rdv_form.html.twig", "C:\\Users\\DELL\\Documents\\CODES SYMFONY\\Mfp_gestion_clients\\templates\\agent\\rdv_form.html.twig");
    }
}
