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

/* registration/register.html.twig */
class __TwigTemplate_34f7c9b697fae0a7b3dded546ffbccca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
                ";
        // line 27
        echo "                    
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
                                                        ";
        // line 41
        echo "                                                            
                                                             ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
                                                            ";
        // line 46
        echo "                                                                    <div class=\" row mb-4\">
                                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "structure", [], "any", false, false, false, 47), 'row', ["label" => "Structure", "attr" => ["placeholder" => "Structure"]]);
        // line 48
        echo "
                                                                </div>

                                                                <div class=\" row mb-4\">
                                                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Nom d'utilisateur ..."]]);
        // line 53
        echo "
                                                                </div>
                                                                <div class=\" row mb-4\">
                                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), 'row', ["label" => "Prenom d'utilisateur", "attr" => ["placeholder" => "Prenom d'utilisateur ..."]]);
        // line 57
        echo "
                                                                </div>

                                                            <div class=\" row mb-4\">
                                                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "dateNaissance", [], "any", false, false, false, 61), 'row', ["label" => "Date de naissance", "attr" => ["placeholder" => "Entrer votre matricule"]]);
        // line 62
        echo "
                                                                ";
        // line 65
        echo "                                                            </div>

                                                            <div class=\" row mb-4\">
                                                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 68), 'row', ["label" => "Lieu de naissance", "attr" => ["placeholder" => "Lieu de naissance"]]);
        // line 69
        echo "
                                                                </div>

                                                                <div class=\" row mb-4\">
                                                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "fonction", [], "any", false, false, false, 73), 'row', ["label" => "Fonction", "attr" => ["placeholder" => "Fonction"]]);
        // line 74
        echo "
                                                                </div>
                                                                

                                                             ";
        // line 79
        echo "                                                             ";
        // line 80
        echo "                                                             ";
        // line 81
        echo "                                                            <div class=\" row mb-4\">
                                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "matricule", [], "any", false, false, false, 82), 'row', ["label" => "Matricule", "attr" => ["placeholder" => "Entrer votre matricule"]]);
        // line 83
        echo "
                                                        </div>
                                                        <div class=\" row mb-4\">
                                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "contact", [], "any", false, false, false, 86), 'row', ["label" => "Contact", "attr" => ["placeholder" => "Entrer votre contact"]]);
        // line 87
        echo "
                                                    </div>
                                                            <div class=\" row mb-4\">
                                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'row', ["label" => "Adresse email", "attr" => ["placeholder" => "Adresse email ..."]]);
        // line 91
        echo "
                                                        </div>
                                                        
                                                        <div class=\" row mb-4\">
                                                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "ville", [], "any", false, false, false, 95), 'row', ["label" => "Ville", "attr" => ["placeholder" => "Ville"]]);
        // line 96
        echo "
                                                                </div>
                                                            ";
        // line 99
        echo "                                                            
                                                            <div class=\" row mb-4\">
                                                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "plainPassword", [], "any", false, false, false, 101), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe ..."]]);
        // line 102
        echo "
                                                            ";
        // line 105
        echo "                                                        </div>
                                                            <div class=\" row mb-4\">
                                                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "agreeTerms", [], "any", false, false, false, 107), 'row');
        echo "
                                                        </div>
                                                        <div class=\" row mb-4\">
                                                            <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
                                                        </div>
                                            
                                                ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_end');
        echo "
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>    
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        ";
        // line 124
        echo "                    </div>
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 14,  282 => 13,  269 => 10,  259 => 9,  240 => 5,  226 => 124,  213 => 113,  204 => 107,  200 => 105,  197 => 102,  195 => 101,  191 => 99,  187 => 96,  185 => 95,  179 => 91,  177 => 90,  172 => 87,  170 => 86,  165 => 83,  163 => 82,  160 => 81,  158 => 80,  156 => 79,  150 => 74,  148 => 73,  142 => 69,  140 => 68,  135 => 65,  132 => 62,  130 => 61,  124 => 57,  122 => 56,  117 => 53,  115 => 52,  109 => 48,  107 => 47,  104 => 46,  100 => 42,  97 => 41,  82 => 27,  74 => 21,  67 => 16,  65 => 13,  62 => 12,  60 => 9,  57 => 8,  52 => 5,  46 => 1,);
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
                {# <form class=\"login100-form validate-form\"> #}
                    
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
                                                        {# <form class=\"form-horizontal\"> #}
                                                            
                                                             {{ form_start(registrationForm) }}
                                                            {# <fieldset class=\"mb-3\">
                                                                <legend>Mon identité</legend>
                                                                 #}
                                                                    <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.structure, {'label': 'Structure', 'attr':
                                                                {'placeholder': 'Structure'}}) }}
                                                                </div>

                                                                <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.nom, {'label': 'Nom d\\'utilisateur', 'attr':
                                                                {'placeholder': 'Nom d\\'utilisateur ...'}}) }}
                                                                </div>
                                                                <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.prenom, {'label': 'Prenom d\\'utilisateur', 'attr':
                                                                {'placeholder': 'Prenom d\\'utilisateur ...'}}) }}
                                                                </div>

                                                            <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.dateNaissance, {'label': 'Date de naissance', 'attr':
                                                                {'placeholder': 'Entrer votre matricule'}})  }}
                                                                {# {{ form_row(registrationForm.structure, {'label': 'Entrer votre structure', 'attr':
                                                                {'placeholder': 'Structure ...'}})  }} #}
                                                            </div>

                                                            <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.lieuNaissance, {'label': 'Lieu de naissance', 'attr':
                                                                {'placeholder': 'Lieu de naissance'}}) }}
                                                                </div>

                                                                <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.fonction, {'label': 'Fonction', 'attr':
                                                                {'placeholder': 'Fonction'}}) }}
                                                                </div>
                                                                

                                                             {# </fieldset> #}
                                                             {# <fieldset class=\"mb-3\"> #}
                                                             {# <legend>Mes coordonnées</legend> #}
                                                            <div class=\" row mb-4\">
                                                            {{ form_row(registrationForm.matricule, {'label': 'Matricule', 'attr':
                                                            {'placeholder': 'Entrer votre matricule'}})  }}
                                                        </div>
                                                        <div class=\" row mb-4\">
                                                        {{ form_row(registrationForm.contact, {'label': 'Contact', 'attr':
                                                        {'placeholder': 'Entrer votre contact'}})  }}
                                                    </div>
                                                            <div class=\" row mb-4\">
                                                            {{ form_row(registrationForm.email, {'label': 'Adresse email', 'attr':
                                                            {'placeholder': 'Adresse email ...'}})  }}
                                                        </div>
                                                        
                                                        <div class=\" row mb-4\">
                                                                {{ form_row(registrationForm.ville, {'label': 'Ville', 'attr':
                                                                {'placeholder': 'Ville'}}) }}
                                                                </div>
                                                            {# </fieldset> #}
                                                            
                                                            <div class=\" row mb-4\">
                                                            {{ form_row(registrationForm.plainPassword,{'label': 'Mot de passe', 'attr':
                                                            {'placeholder': 'Mot de passe ...'}}) }}
                                                            {# {{ form_row(registrationForm.confirm_plainPassword, {'label': 'Confirmation du mot de passe', 'attr':
                                                            {'placeholder': 'Répétez votre mot de passe ....'}}) }} #}
                                                        </div>
                                                            <div class=\" row mb-4\">
                                                            {{ form_row(registrationForm.agreeTerms) }}
                                                        </div>
                                                        <div class=\" row mb-4\">
                                                            <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
                                                        </div>
                                            
                                                {{ form_end(registrationForm) }}
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>    
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        {# </form> #}
                    </div>
</div>                        
</body>
</html>
", "registration/register.html.twig", "C:\\Users\\DELL\\Documents\\CODES SYMFONY\\Mfp_gestion_clients\\templates\\registration\\register.html.twig");
    }
}
