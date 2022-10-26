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

/* registration/inscription.html.twig */
class __TwigTemplate_887c65a3a10d0baaee54dae44c678664 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/inscription.html.twig"));

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
               
 <div class=\"container-login100\">
                    <div class=\"text-center\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/foncpubli.png"), "html", null, true);
        echo "\" class=\"header-brand-img\" alt=\"\">
                    </div>
                </div>
 <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        <form class=\"login100-form validate-form\">
                           
                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">           
                                        <div class=\"row\">
                                            <div class=\"col-xl-12 col-lg-12\">
                                                <div class=\"card\">
                                                 <div class=\"card-header\">
                                                    <h4 class=\"card-title\">CRUC - INSCRIPTION</h4>
                                                </div>
                                                    <div class=\"card-body\">
                                                        <form class=\"form-horizontal\">
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Nom : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                </div>
                                                            </div>                                       
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Prénom(s) :</label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                </div>
                                                            </div>
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Sexe :</label>
                                                                <div class=\"col-md-7\">
                                                                    <select name=\"sexe\" class=\"form-control form-select\" data-bs-placeholder=\"Selectionner le sexe\">
                                                                        <option value=\"br\">Selectionner le sexe</option>
                                                                        <option value=\"br\">Masculin</option>
                                                                        <option value=\"cz\">Féminin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Login :</label>
                                                                <div class=\"col-md-7\">                                                                    
                                                                    <input type=\"password\" class=\"form-control\" value=\"password\" autocomplete=\"new-password\">
                                               
                                                                </div>
                                                            </div>
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Mot de passe :</label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Numéro de pièce : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de pièce\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Adresse : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Adresse\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Structure : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Structure\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Fonction : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Fonction\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Téléphone : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Téléphone\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Mobile : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Mobile\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">E-mail : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"email\" id=\"example-email\" name=\"example-email\" class=\"form-control\" placeholder=\"Email\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Date de naissance : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"date\" class=\"form-control\" >
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Lieu de naissance : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Lieu de naissance\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Ville : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ville\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Commune : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Commune\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Quartier : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Quartier\">
                                                                </div>
                                                            </div>
                                                                                
                                                            <button class=\"btn btn-green mt-4 mb-0\">S'inscrire</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>    
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
</div>                        
</body>
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

        echo "Formulaire d'inscription";
        
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
        return "registration/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 14,  271 => 13,  258 => 10,  248 => 9,  229 => 5,  74 => 21,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Formulaire d'inscription{% endblock %}</title>
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
               
 <div class=\"container-login100\">
                    <div class=\"text-center\">
                        <img src=\"{{ asset('images/foncpubli.png') }}\" class=\"header-brand-img\" alt=\"\">
                    </div>
                </div>
 <div class=\"container-login100\">
                    <div class=\"wrap-login100 p-6\">
                        <form class=\"login100-form validate-form\">
                           
                            <div class=\"panel panel-primary\">
                               
                                <div class=\"panel-body tabs-menu-body p-0 pt-5\">
                                    <div class=\"tab-content\">           
                                        <div class=\"row\">
                                            <div class=\"col-xl-12 col-lg-12\">
                                                <div class=\"card\">
                                                 <div class=\"card-header\">
                                                    <h4 class=\"card-title\">CRUC - INSCRIPTION</h4>
                                                </div>
                                                    <div class=\"card-body\">
                                                        <form class=\"form-horizontal\">
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Nom : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                </div>
                                                            </div>                                       
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Prénom(s) :</label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Saisir le profil\">
                                                                </div>
                                                            </div>
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Sexe :</label>
                                                                <div class=\"col-md-7\">
                                                                    <select name=\"sexe\" class=\"form-control form-select\" data-bs-placeholder=\"Selectionner le sexe\">
                                                                        <option value=\"br\">Selectionner le sexe</option>
                                                                        <option value=\"br\">Masculin</option>
                                                                        <option value=\"cz\">Féminin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Login :</label>
                                                                <div class=\"col-md-7\">                                                                    
                                                                    <input type=\"password\" class=\"form-control\" value=\"password\" autocomplete=\"new-password\">
                                               
                                                                </div>
                                                            </div>
                                                            <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Mot de passe :</label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Numéro de pièce : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de pièce\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Adresse : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Adresse\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Structure : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Structure\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Fonction : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Fonction\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Téléphone : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Téléphone\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Mobile : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Mobile\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">E-mail : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"email\" id=\"example-email\" name=\"example-email\" class=\"form-control\" placeholder=\"Email\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Date de naissance : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"date\" class=\"form-control\" >
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Lieu de naissance : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Lieu de naissance\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Ville : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ville\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Commune : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Commune\">
                                                                </div>
                                                            </div>
                                                             <div class=\" row mb-4\">
                                                                <label class=\"col-md-5 form-label\">Quartier : </label>
                                                                <div class=\"col-md-7\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Quartier\">
                                                                </div>
                                                            </div>
                                                                                
                                                            <button class=\"btn btn-green mt-4 mb-0\">S'inscrire</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>    
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
</div>                        
</body>
</html>
", "registration/inscription.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\registration\\inscription.html.twig");
    }
}
