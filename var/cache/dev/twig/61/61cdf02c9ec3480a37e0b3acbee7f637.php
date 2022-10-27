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
class __TwigTemplate_16cbebf0436399e0f520e3fd736190c2 extends Template
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

 <main>
    <article class=\"container article\">

      <h2 class=\"h2 article-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h2>

      <p class=\"article-subtitle\">Bienvenue sur le tableau de bord !</p>

      <!-- 
        - #HOME
      -->

      <section class=\"home\">

        <div class=\"card profile-card\">

          <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
            <span class=\"material-symbols-rounded  icon\">more_horiz</span>
          </button>

          <ul class=\"ctx-menu\">

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                <span class=\"ctx-menu-text\">Edit</span>
              </button>
            </li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">cached</span>

                <span class=\"ctx-menu-text\">Refresh</span>
              </button>
            </li>

            <li class=\"divider\"></li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn red icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                <span class=\"ctx-menu-text\">Deactivate</span>
              </button>
            </li>

          </ul>

          <div class=\"profile-card-wrapper\">

            <figure class=\"card-avatar\">
              <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Elizabeth Foster\" width=\"48\" height=\"48\">
            </figure>

            <div>
              <p class=\"card-title\">Elizabeth Foster</p>

              <p class=\"card-subtitle\">Web & Graphic Designer</p>
            </div>

          </div>

          <ul class=\"contact-list\">

            <li>
              <a href=\"mailto:xyz@mail.com\" class=\"contact-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">mail</span>

                <p class=\"text\">xyz@mail.com</p>
              </a>
            </li>

            <li>
              <a href=\"tel:00123456789\" class=\"contact-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">call</span>

                <p class=\"text\">+00 123-456-789</p>
              </a>
            </li>

          </ul>

          <div class=\"divider card-divider\"></div>

          <ul class=\"progress-list\">

            <li class=\"progress-item\">

              <div class=\"progress-label\">
                <p class=\"progress-title\">Project Completion</p>

                <data class=\"progress-data\" value=\"85\">85%</data>
              </div>

              <div class=\"progress-bar\">
                <div class=\"progress\" style=\"--width: 85%; --bg: var(--blue-ryb);\"></div>
              </div>

            </li>

            <li class=\"progress-item\">

              <div class=\"progress-label\">
                <p class=\"progress-title\">Overall Rating</p>

                <data class=\"progress-data\" value=\"7.5\">7.5</data>
              </div>

              <div class=\"progress-bar\">
                <div class=\"progress\" style=\"--width: 75%; --bg: var(--coral);\"></div>
              </div>

            </li>

          </ul>

        </div>

        <div class=\"card-wrapper\">

          <div class=\"card task-card\">

            <div class=\"card-icon icon-box green\">
              <span class=\"material-symbols-rounded  icon\">task_alt</span>
            </div>

            <div>
              <data class=\"card-data\" value=\"21\">21</data>

              <p class=\"card-text\">Demandes traitées</p>
            </div>

          </div>

          <div class=\"card task-card\">

            <div class=\"card-icon icon-box blue\">
              <span class=\"material-symbols-rounded  icon\">drive_file_rename_outline</span>
            </div>

            <div>
              <data class=\"card-data\" value=\"21\">21</data>

              <p class=\"card-text\">Demandes en cours de traitements</p>
            </div>

          </div>

        </div>

        <div class=\"card revenue-card\">

          <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
            <span class=\"material-symbols-rounded  icon\">more_horiz</span>
          </button>

          <ul class=\"ctx-menu\">

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                <span class=\"ctx-menu-text\">Edit</span>
              </button>
            </li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">cached</span>

                <span class=\"ctx-menu-text\">Refresh</span>
              </button>
            </li>

          </ul>

          <p class=\"card-title\">Revenue</p>

          <data class=\"card-price\" value=\"2100\">\$2,100</data>

          <p class=\"card-text\">Last Week</p>

          <div class=\"divider card-divider\"></div>

          <ul class=\"revenue-list\">

            <li class=\"revenue-item icon-box\">

              <span class=\"material-symbols-rounded  icon  green\">trending_up</span>

              <div>
                <data class=\"revenue-item-data\" value=\"15\">15%</data>

                <p class=\"revenue-item-text\">Prev Week</p>
              </div>

            </li>

            <li class=\"revenue-item icon-box\">

              <span class=\"material-symbols-rounded  icon  red\">trending_down</span>

              <div>
                <data class=\"revenue-item-data\" value=\"10\">10%</data>

                <p class=\"revenue-item-text\">Prev Month</p>
              </div>

            </li>

          </ul>

        </div>

      </section>




      <!-- 
        - #PROJECTS
      -->

      <section class=\"projects\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Demandes de rendez-vous en cours de traitements </h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"project-list\">

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Shreyu - Design Updates</a>
              </h3>

              <div class=\"card-badge blue\">Designing</div>

              <p class=\"card-text\">
                Update shreyu with modern and latest trends...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"75\">75%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 75%; --bg: var(--emerald);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Prompt v2.0</a>
              </h3>

              <div class=\"card-badge orange\">Planning</div>

              <p class=\"card-text\">
                Plan new features and functionality for prompt...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"50\">50%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 50%; --bg: var(--imperial-red);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Hyper React v4.0</a>
              </h3>

              <div class=\"card-badge cyan\">Development</div>

              <p class=\"card-text\">
                Update shreyu with modern and latest trends...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"60\">60%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 60%; --bg: var(--sunglow);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

        </ul>

      </section>




      <!-- 
        - #TASKS
      -->

      <section class=\"tasks\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Demandes de rendez-vous en attente</h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"tasks-list\">

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-1\" id=\"task-1\">

                <label for=\"task-1\" class=\"task-label\">
                  Draft the new contract document for sales team
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Today 10pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>3/7</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"21\">21</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge red\">High</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-2\" id=\"task-2\">

                <label for=\"task-2\" class=\"task-label\">
                  iOS App home page design
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Today 5pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>10/11</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"5\">5</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge orange\">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-3\" id=\"task-3\">

                <label for=\"task-3\" class=\"task-label\">
                  Enable analytics tracking
                </label>
              </div>

              <div class=\"card-badge radius-pill\">Tomorrow 5pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>5/11</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"7\">7</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge orange\">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-4\" id=\"task-4\">

                <label for=\"task-4\" class=\"task-label\">
                  Kanban board design
                </label>
              </div>

              <div class=\"card-badge radius-pill\">Sep 11, 3pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>0/5</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"3\">3</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge green\">Low</div>
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
        return "gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 486,  579 => 480,  500 => 404,  491 => 398,  412 => 322,  403 => 316,  147 => 63,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

 <main>
    <article class=\"container article\">

      <h2 class=\"h2 article-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h2>

      <p class=\"article-subtitle\">Bienvenue sur le tableau de bord !</p>

      <!-- 
        - #HOME
      -->

      <section class=\"home\">

        <div class=\"card profile-card\">

          <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
            <span class=\"material-symbols-rounded  icon\">more_horiz</span>
          </button>

          <ul class=\"ctx-menu\">

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                <span class=\"ctx-menu-text\">Edit</span>
              </button>
            </li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">cached</span>

                <span class=\"ctx-menu-text\">Refresh</span>
              </button>
            </li>

            <li class=\"divider\"></li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn red icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                <span class=\"ctx-menu-text\">Deactivate</span>
              </button>
            </li>

          </ul>

          <div class=\"profile-card-wrapper\">

            <figure class=\"card-avatar\">
              <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Elizabeth Foster\" width=\"48\" height=\"48\">
            </figure>

            <div>
              <p class=\"card-title\">Elizabeth Foster</p>

              <p class=\"card-subtitle\">Web & Graphic Designer</p>
            </div>

          </div>

          <ul class=\"contact-list\">

            <li>
              <a href=\"mailto:xyz@mail.com\" class=\"contact-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">mail</span>

                <p class=\"text\">xyz@mail.com</p>
              </a>
            </li>

            <li>
              <a href=\"tel:00123456789\" class=\"contact-link icon-box\">
                <span class=\"material-symbols-rounded  icon\">call</span>

                <p class=\"text\">+00 123-456-789</p>
              </a>
            </li>

          </ul>

          <div class=\"divider card-divider\"></div>

          <ul class=\"progress-list\">

            <li class=\"progress-item\">

              <div class=\"progress-label\">
                <p class=\"progress-title\">Project Completion</p>

                <data class=\"progress-data\" value=\"85\">85%</data>
              </div>

              <div class=\"progress-bar\">
                <div class=\"progress\" style=\"--width: 85%; --bg: var(--blue-ryb);\"></div>
              </div>

            </li>

            <li class=\"progress-item\">

              <div class=\"progress-label\">
                <p class=\"progress-title\">Overall Rating</p>

                <data class=\"progress-data\" value=\"7.5\">7.5</data>
              </div>

              <div class=\"progress-bar\">
                <div class=\"progress\" style=\"--width: 75%; --bg: var(--coral);\"></div>
              </div>

            </li>

          </ul>

        </div>

        <div class=\"card-wrapper\">

          <div class=\"card task-card\">

            <div class=\"card-icon icon-box green\">
              <span class=\"material-symbols-rounded  icon\">task_alt</span>
            </div>

            <div>
              <data class=\"card-data\" value=\"21\">21</data>

              <p class=\"card-text\">Demandes traitées</p>
            </div>

          </div>

          <div class=\"card task-card\">

            <div class=\"card-icon icon-box blue\">
              <span class=\"material-symbols-rounded  icon\">drive_file_rename_outline</span>
            </div>

            <div>
              <data class=\"card-data\" value=\"21\">21</data>

              <p class=\"card-text\">Demandes en cours de traitements</p>
            </div>

          </div>

        </div>

        <div class=\"card revenue-card\">

          <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
            <span class=\"material-symbols-rounded  icon\">more_horiz</span>
          </button>

          <ul class=\"ctx-menu\">

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                <span class=\"ctx-menu-text\">Edit</span>
              </button>
            </li>

            <li class=\"ctx-item\">
              <button class=\"ctx-menu-btn icon-box\">
                <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">cached</span>

                <span class=\"ctx-menu-text\">Refresh</span>
              </button>
            </li>

          </ul>

          <p class=\"card-title\">Revenue</p>

          <data class=\"card-price\" value=\"2100\">\$2,100</data>

          <p class=\"card-text\">Last Week</p>

          <div class=\"divider card-divider\"></div>

          <ul class=\"revenue-list\">

            <li class=\"revenue-item icon-box\">

              <span class=\"material-symbols-rounded  icon  green\">trending_up</span>

              <div>
                <data class=\"revenue-item-data\" value=\"15\">15%</data>

                <p class=\"revenue-item-text\">Prev Week</p>
              </div>

            </li>

            <li class=\"revenue-item icon-box\">

              <span class=\"material-symbols-rounded  icon  red\">trending_down</span>

              <div>
                <data class=\"revenue-item-data\" value=\"10\">10%</data>

                <p class=\"revenue-item-text\">Prev Month</p>
              </div>

            </li>

          </ul>

        </div>

      </section>




      <!-- 
        - #PROJECTS
      -->

      <section class=\"projects\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Demandes de rendez-vous en cours de traitements </h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"project-list\">

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Shreyu - Design Updates</a>
              </h3>

              <div class=\"card-badge blue\">Designing</div>

              <p class=\"card-text\">
                Update shreyu with modern and latest trends...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"75\">75%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 75%; --bg: var(--emerald);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-2.jpg') }}\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Prompt v2.0</a>
              </h3>

              <div class=\"card-badge orange\">Planning</div>

              <p class=\"card-text\">
                Plan new features and functionality for prompt...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"50\">50%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 50%; --bg: var(--imperial-red);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-2.jpg') }}\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"project-item\">
            <div class=\"card project-card\">

              <button class=\"card-menu-btn icon-box\" aria-label=\"More\" data-menu-btn>
                <span class=\"material-symbols-rounded  icon\">more_horiz</span>
              </button>

              <ul class=\"ctx-menu\">

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">visibility</span>

                    <span class=\"ctx-menu-text\">View</span>
                  </button>
                </li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">edit</span>

                    <span class=\"ctx-menu-text\">Edit</span>
                  </button>
                </li>

                <li class=\"divider\"></li>

                <li class=\"ctx-item\">
                  <button class=\"ctx-menu-btn red icon-box\">
                    <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">delete</span>

                    <span class=\"ctx-menu-text\">Delete</span>
                  </button>
                </li>

              </ul>

              <time class=\"card-date\" datetime=\"2022-04-09\">Apr 09, 2022</time>

              <h3 class=\"card-title\">
                <a href=\"#\">Hyper React v4.0</a>
              </h3>

              <div class=\"card-badge cyan\">Development</div>

              <p class=\"card-text\">
                Update shreyu with modern and latest trends...
              </p>

              <div class=\"card-progress-box\">

                <div class=\"progress-label\">
                  <span class=\"progress-title\">Progress</span>

                  <data class=\"progress-data\" value=\"60\">60%</data>
                </div>

                <div class=\"progress-bar\">
                  <div class=\"progress\" style=\"--width: 60%; --bg: var(--sunglow);\"></div>
                </div>

              </div>

              <ul class=\"card-avatar-list\">

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-1.jpg') }}\" alt=\"Elizabeth Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

                <li class=\"card-avatar-item\">
                  <a href=\"#\">
                    <img src=\"{{ asset('images/avatar-2.jpg') }}\" alt=\"John Foster\" width=\"32\" height=\"32\">
                  </a>
                </li>

              </ul>

            </div>
          </li>

        </ul>

      </section>




      <!-- 
        - #TASKS
      -->

      <section class=\"tasks\">

        <div class=\"section-title-wrapper\">
          <h2 class=\"section-title\">Demandes de rendez-vous en attente</h2>

          <button class=\"btn btn-link icon-box\">
            <span>Voir tout</span>

            <span class=\"material-symbols-rounded  icon\" aria-hidden=\"true\">arrow_forward</span>
          </button>
        </div>

        <ul class=\"tasks-list\">

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-1\" id=\"task-1\">

                <label for=\"task-1\" class=\"task-label\">
                  Draft the new contract document for sales team
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Today 10pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>3/7</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"21\">21</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge red\">High</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-2\" id=\"task-2\">

                <label for=\"task-2\" class=\"task-label\">
                  iOS App home page design
                </label>
              </div>

              <div class=\"card-badge cyan radius-pill\">Today 5pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>10/11</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"5\">5</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge orange\">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-3\" id=\"task-3\">

                <label for=\"task-3\" class=\"task-label\">
                  Enable analytics tracking
                </label>
              </div>

              <div class=\"card-badge radius-pill\">Tomorrow 5pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>5/11</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"7\">7</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge orange\">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class=\"tasks-item\">
            <div class=\"card task-card\">

              <div class=\"card-input\">
                <input type=\"checkbox\" name=\"task-4\" id=\"task-4\">

                <label for=\"task-4\" class=\"task-label\">
                  Kanban board design
                </label>
              </div>

              <div class=\"card-badge radius-pill\">Sep 11, 3pm</div>

              <ul class=\"card-meta-list\">

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">list</span>

                    <span>0/5</span>
                  </div>
                </li>

                <li>
                  <div class=\"meta-box icon-box\">
                    <span class=\"material-symbols-rounded  icon\">comment</span>

                    <data value=\"3\">3</data>
                  </div>
                </li>

                <li>
                  <div class=\"card-badge green\">Low</div>
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

{% endblock %}
", "gestion/index.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\gestion\\index.html.twig");
    }
}
