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

/* _partials/_footer.html.twig */
class __TwigTemplate_ac598320bd7f7ac6c503255a02869ff9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"containerxd\">

      <ul class=\"footer-list\">

        <li class=\"footer-item\">
          <a href=\"#\" class=\"footer-link\">A propos du CRUC</a>
        </li>

        
        <li class=\"footer-item\">
          <a href=\"#\" class=\"footer-link\">Support</a>
        </li>


      </ul>

      <p class=\"copyright\">
        &copy; 2022 <a href=\"#\" class=\"copyright-link\">MFP</a>. Tous les droits sont réservés
      </p>

    </div>
  </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"containerxd\">

      <ul class=\"footer-list\">

        <li class=\"footer-item\">
          <a href=\"#\" class=\"footer-link\">A propos du CRUC</a>
        </li>

        
        <li class=\"footer-item\">
          <a href=\"#\" class=\"footer-link\">Support</a>
        </li>


      </ul>

      <p class=\"copyright\">
        &copy; 2022 <a href=\"#\" class=\"copyright-link\">MFP</a>. Tous les droits sont réservés
      </p>

    </div>
  </footer>", "_partials/_footer.html.twig", "C:\\Users\\DELL\\Documents\\CODES SYMFONY\\Mfp_gestion_clients\\templates\\_partials\\_footer.html.twig");
    }
}
