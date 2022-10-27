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

/* agent/stats.html.twig */
class __TwigTemplate_0169d9c39c1a1cfb2cac258e13a032aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/stats.html.twig"));

        $this->parent = $this->loadTemplate("agent.html.twig", "agent/stats.html.twig", 1);
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
  <main>
    <article class=\"containerxd article\">

      <h2 class=\"h2 article-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h2>

      <p class=\"article-subtitle\">Bienvenue !</p>

     
      <!-- 
        - #RDV
      -->

      <section class=\"tasks\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Les statistiques des demandes de rendez-vous</h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"tasks-list\">

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 1 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbar-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 2 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 3 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 4 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          

        </ul>

        <button class=\"btn btn-primary\" data-load-more>
          <span class=\"spiner\"></span>

          <span>Charger plus</span>
        </button>

      </section>

    </article>
  </main>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "agent/stats.html.twig";
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

      <p class=\"article-subtitle\">Bienvenue !</p>

     
      <!-- 
        - #RDV
      -->

      <section class=\"tasks\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Les statistiques des demandes de rendez-vous</h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"tasks-list\">

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 1 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbar-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 2 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 3 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <label for=\"task-1\" class=\"task-label\">
                  Motif 4 de la demande de rendez-vous
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Date et Heure</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Accepter\" class=\"material-symbols-rounded  icon\">done</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Transférer\" class=\"material-symbols-rounded  icon\">send</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Modifier\" class=\"material-symbols-rounded  icon\">edit</span>
                    </a>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Alerter\" class=\"material-symbols-rounded  icon\">Notifications</span>
                    </a>
                  </div>
                </li>
                <li>
                  <div class=\"meta-box icon-box\">
                    <a href=\"#\" class=\"navbarxd-link activexd icon-box\">
                      <span title=\"Annuler\" class=\"material-symbols-rounded  icon\">Cancel</span>
                    </a>
                  </div>
                </li>

              </ul>

            </div>
          </li>

          

        </ul>

        <button class=\"btn btn-primary\" data-load-more>
          <span class=\"spiner\"></span>

          <span>Charger plus</span>
        </button>

      </section>

    </article>
  </main>


{% endblock %}", "agent/stats.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\agent\\stats.html.twig");
    }
}
