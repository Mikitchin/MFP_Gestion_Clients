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

/* gestion/home.html.twig */
class __TwigTemplate_9d2d1df0bbe728b54b9a0342f3464142 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion/home.html.twig", 1);
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
<!-- PAGE -->
    <div class=\"page\">
        <div class=\"page-main\">

            <!-- app-Header -->
            <div class=\"app-header header sticky\">
                <div class=\"container-fluid main-container\">
                    <div class=\"d-flex\">
                        <a aria-label=\"Hide Sidebar\" class=\"app-sidebar__toggle\" data-bs-toggle=\"sidebar\" href=\"javascript:void(0)\"></a>
                        <!-- sidebar-toggle-->
                        <a class=\"logo-horizontal \" href=\"index.html\">
                            <img src=\"../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                            <img src=\"../assets/images/foncpubli1.png\" class=\"header-brand-img light-logo1\" alt=\"logo\">
                        </a>
                        <!-- LOGO -->
                        <div class=\"main-header-center ms-3 d-none d-lg-block\">
                            <input type=\"text\" class=\"form-control\" id=\"typehead\" placeholder=\"Recherche...\">
                            <button class=\"btn px-0 pt-2\"><i class=\"fe fe-search\" aria-hidden=\"true\"></i></button>
                        </div>
                        <div class=\"d-flex order-lg-2 ms-auto header-right-icons\">
                            <!-- SEARCH -->
                            <button class=\"navbar-toggler navresponsive-toggler d-lg-none ms-auto\" type=\"button\"
                                data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent-4\"
                                aria-controls=\"navbarSupportedContent-4\" aria-expanded=\"false\"
                                aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon fe fe-more-vertical\"></span>
                            </button>
                            <div class=\"navbar navbar-collapse responsive-navbar p-0\">
                                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-4\">
                                    <div class=\"d-flex order-lg-2\">
                                        <div class=\"dropdown d-lg-none d-flex\">
                                            <a href=\"javascript:void(0)\" class=\"nav-link icon\" data-bs-toggle=\"dropdown\">
                                                <i class=\"fe fe-search\"></i>
                                            </a>
                                            <div class=\"dropdown-menu header-search dropdown-menu-start\">
                                                <div class=\"input-group w-100 p-2\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search....\">
                                                    <div class=\"input-group-text btn btn-primary\">
                                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                      
                                      
                                        <div class=\"dropdown  d-flex notifications\">
                                            <a class=\"nav-link icon\" data-bs-toggle=\"dropdown\"><i
                                                    class=\"fe fe-bell\"></i><span class=\" pulse\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                                <div class=\"drop-heading border-bottom\">
                                                    <div class=\"d-flex\">
                                                        <h6 class=\"mt-1 mb-0 fs-16 fw-semibold text-dark\">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class=\"notifications-menu\">
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-primary brround box-shadow-primary\">
                                                            <i class=\"fe fe-mail\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">New Application received
                                                            </h5>
                                                            <span class=\"notification-subtext\">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-secondary brround box-shadow-secondary\">
                                                            <i class=\"fe fe-check-circle\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Project has been
                                                                approved</h5>
                                                            <span class=\"notification-subtext\">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-success brround box-shadow-success\">
                                                            <i class=\"fe fe-shopping-cart\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Your Product Delivered
                                                            </h5>
                                                            <span class=\"notification-subtext\">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg bg-pink brround box-shadow-pink\">
                                                            <i class=\"fe fe-user-plus\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Friend Requests</h5>
                                                            <span class=\"notification-subtext\">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-divider m-0\"></div>
                                                <a href=\"#\"
                                                    class=\"dropdown-item text-center p-3 text-muted\">toutess les notifications</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                       
                                       
                                        <div class=\"dropdown d-flex profile-1\">
                                            <a href=\"javascript:void(0)\" data-bs-toggle=\"dropdown\" class=\"nav-link leading-none d-flex\">
                                                <img src=\"../assets/images/users/21.jpg\" alt=\"profile-user\"
                                                    class=\"avatar  profile-user brround cover-image\">
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                                <div class=\"drop-heading\">
                                                    <div class=\"text-center\">
                                                        <h5 class=\"text-dark mb-0 fs-14 fw-semibold\">YAPO Adoux</h5>
                                                        <small class=\"text-muted\">Super Administrateur</small>
                                                    </div>
                                                </div>
                                                <div class=\"dropdown-divider m-0\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"dropdown-icon fe fe-user\"></i> Profil
                                                </a>                                                
                                                <a class=\"dropdown-item\" href=\"login.html\">
                                                    <i class=\"dropdown-icon fe fe-alert-circle\"></i> Déconnexion
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class=\"sticky\">
                <div class=\"app-sidebar__overlay\" data-bs-toggle=\"sidebar\"></div>
                <div class=\"app-sidebar\">
                    <div class=\"side-header\">
                        <a class=\"header-brand1\" href=\"index.html\">
                            <img src=\"../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                            <img src=\"../assets/images/brand/logo-1.png\" class=\"header-brand-img toggle-logo\"
                                alt=\"logo\">
                            <img src=\"../assets/images/brand/logo-2.png\" class=\"header-brand-img light-logo\" alt=\"logo\">
                            <img src=\"../assets/images/foncpubli1.png\" class=\"header-brand-img light-logo1\" alt=\"logo\">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class=\"main-sidemenu\">
                        <div class=\"slide-left disabled\" id=\"slide-left\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\" />
                            </svg></div>
                        <ul class=\"side-menu\">                            
                            <li class=\"sub-category\">
                                <h3>ADMINISTRATEUR</h3>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-slack\"></i><span
                                        class=\"side-menu__label\">Gestion des paramêtres</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des paramêtres</a></li>
                                    <li><a href=\"add-parameter.html\" class=\"slide-item\"> Saisir un paramêtre</a></li>
                                    <li><a href=\"add-parameter.html\" class=\"slide-item\"> Afficher les paramêtres</a></li>                                    
                                </ul>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-package\"></i><span
                                        class=\"side-menu__label\">Gestion des profils</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu mega-slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des profils</a></li>
                                    <div class=\"mega-menu\">
                                        <div class=\"\">
                                            <ul>
                                                <li><a href=\"add-profile.html\" class=\"slide-item\"> Créer un profil</a></li>
                                                <li><a href=\"list-profiles.html\" class=\"slide-item\"> Afficher les profils</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-package\"></i><span
                                        class=\"side-menu__label\">Gestion des utilisateurs</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu mega-slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des utilisateurs</a></li>
                                    <div class=\"mega-menu\">
                                        <div class=\"\">
                                            <ul>
                                                <li><a href=\"add-user.html\" class=\"slide-item\"> Créer un utilisateur</a></li>
                                                <li><a href=\"list-users.html\" class=\"slide-item\"> Afficher les utilisateurs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>                            
                           
                        </ul>
                        <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\"
                                width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class=\"main-content app-content mt-0\">
                <div class=\"side-app\">

                    <!-- CONTAINER -->
                    <div class=\"main-container container-fluid\">

                        <!-- PAGE-HEADER -->
                        <div class=\"page-header\">
                            <h1 class=\"page-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h1>
                            <div>
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Accueil</a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Tableau de bord</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xl-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Total des utilisateurs</h6>
                                                        <h2 class=\"mb-0 number-font\">15</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"saleschart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-secondary\"><i
                                                            class=\"fe fe-arrow-up-circle  text-secondary\"></i> 5%</span>
                                                    Semaine dernière</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Demandes traitées</h6>
                                                        <h2 class=\"mb-0 number-font\">70</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"leadschart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-pink\"><i
                                                            class=\"fe fe-arrow-down-circle text-pink\"></i> 0.75%</span>
                                                    Les six(6) derniers jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Demande en attente</h6>
                                                        <h2 class=\"mb-0 number-font\">80</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"profitchart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-green\"><i
                                                            class=\"fe fe-arrow-up-circle text-green\"></i> 0.9%</span>
                                                    Les neuf(9) derniers jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Total des demandes</h6>
                                                        <h2 class=\"mb-0 number-font\">59765</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"costchart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-warning\"><i
                                                            class=\"fe fe-arrow-up-circle text-warning\"></i> 0.6%</span>
                                                    Année N-1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 -->
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-9\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Statistiques des demandes</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex mx-auto text-center justify-content-center mb-4\">
                                            <div class=\"d-flex text-center justify-content-center me-3\"><span
                                                    class=\"dot-label bg-primary my-auto\"></span>Total des demandes</div>
                                            <div class=\"d-flex text-center justify-content-center\"><span
                                                    class=\"dot-label bg-secondary my-auto\"></span>Demandes traitées</div>
                                        </div>
                                        <div class=\"chartjs-wrapper-demo\">
                                            <canvas id=\"transactions\" class=\"chart-dropshadow\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-3\">
                                <div class=\"card overflow-hidden\">
                                    <div class=\"card-body pb-0 bg-recentorder\">
                                        <h3 class=\"card-title text-white\">Nouvelles demandes</h3>
                                        <div class=\"chartjs-wrapper-demo\">
                                            <canvas id=\"recentorders\" class=\"chart-dropshadow\"></canvas>
                                        </div>
                                    </div>
                                    <div id=\"flotback-chart\" class=\"flot-background\"></div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex mb-4 mt-3\">
                                            <div
                                                class=\"avatar avatar-md bg-secondary-transparent text-secondary bradius me-3\">
                                                <i class=\"fe fe-check\"></i>
                                            </div>
                                            <div class=\"\">
                                                <h6 class=\"mb-1 fw-semibold\">Demande traitées</h6>
                                                <p class=\"fw-normal fs-12\"> <span class=\"text-success\">3.5%</span>
                                                    increased </p>
                                            </div>
                                            <div class=\" ms-auto my-auto\">
                                                <p class=\"fw-bold fs-20\"> 1,768 </p>
                                            </div>
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"avatar  avatar-md bg-pink-transparent text-pink bradius me-3\">
                                                <i class=\"fe fe-x\"></i>
                                            </div>
                                            <div class=\"\">
                                                <h6 class=\"mb-1 fw-semibold\">Demande rejetées</h6>
                                                <p class=\"fw-normal fs-12\"> <span class=\"text-success\">1.2%</span>
                                                    increased </p>
                                            </div>
                                            <div class=\" ms-auto my-auto\">
                                                <p class=\"fw-bold fs-20 mb-0\"> 3,675 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>                       
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

       

        <!-- FOOTER -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row align-items-center flex-row-reverse\">
                    <div class=\"col-md-12 col-sm-12 text-center\">
                        Copyright © <span id=\"year\"></span> <a href=\"javascript:void(0)\">MFP</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion/home.html.twig";
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
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<!-- PAGE -->
    <div class=\"page\">
        <div class=\"page-main\">

            <!-- app-Header -->
            <div class=\"app-header header sticky\">
                <div class=\"container-fluid main-container\">
                    <div class=\"d-flex\">
                        <a aria-label=\"Hide Sidebar\" class=\"app-sidebar__toggle\" data-bs-toggle=\"sidebar\" href=\"javascript:void(0)\"></a>
                        <!-- sidebar-toggle-->
                        <a class=\"logo-horizontal \" href=\"index.html\">
                            <img src=\"../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                            <img src=\"../assets/images/foncpubli1.png\" class=\"header-brand-img light-logo1\" alt=\"logo\">
                        </a>
                        <!-- LOGO -->
                        <div class=\"main-header-center ms-3 d-none d-lg-block\">
                            <input type=\"text\" class=\"form-control\" id=\"typehead\" placeholder=\"Recherche...\">
                            <button class=\"btn px-0 pt-2\"><i class=\"fe fe-search\" aria-hidden=\"true\"></i></button>
                        </div>
                        <div class=\"d-flex order-lg-2 ms-auto header-right-icons\">
                            <!-- SEARCH -->
                            <button class=\"navbar-toggler navresponsive-toggler d-lg-none ms-auto\" type=\"button\"
                                data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent-4\"
                                aria-controls=\"navbarSupportedContent-4\" aria-expanded=\"false\"
                                aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon fe fe-more-vertical\"></span>
                            </button>
                            <div class=\"navbar navbar-collapse responsive-navbar p-0\">
                                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-4\">
                                    <div class=\"d-flex order-lg-2\">
                                        <div class=\"dropdown d-lg-none d-flex\">
                                            <a href=\"javascript:void(0)\" class=\"nav-link icon\" data-bs-toggle=\"dropdown\">
                                                <i class=\"fe fe-search\"></i>
                                            </a>
                                            <div class=\"dropdown-menu header-search dropdown-menu-start\">
                                                <div class=\"input-group w-100 p-2\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search....\">
                                                    <div class=\"input-group-text btn btn-primary\">
                                                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                      
                                      
                                        <div class=\"dropdown  d-flex notifications\">
                                            <a class=\"nav-link icon\" data-bs-toggle=\"dropdown\"><i
                                                    class=\"fe fe-bell\"></i><span class=\" pulse\"></span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                                <div class=\"drop-heading border-bottom\">
                                                    <div class=\"d-flex\">
                                                        <h6 class=\"mt-1 mb-0 fs-16 fw-semibold text-dark\">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class=\"notifications-menu\">
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-primary brround box-shadow-primary\">
                                                            <i class=\"fe fe-mail\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">New Application received
                                                            </h5>
                                                            <span class=\"notification-subtext\">3 days ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-secondary brround box-shadow-secondary\">
                                                            <i class=\"fe fe-check-circle\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Project has been
                                                                approved</h5>
                                                            <span class=\"notification-subtext\">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg  bg-success brround box-shadow-success\">
                                                            <i class=\"fe fe-shopping-cart\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Your Product Delivered
                                                            </h5>
                                                            <span class=\"notification-subtext\">30 min ago</span>
                                                        </div>
                                                    </a>
                                                    <a class=\"dropdown-item d-flex\" href=\"notify-list.html\">
                                                        <div class=\"me-3 notifyimg bg-pink brround box-shadow-pink\">
                                                            <i class=\"fe fe-user-plus\"></i>
                                                        </div>
                                                        <div class=\"mt-1 wd-80p\">
                                                            <h5 class=\"notification-label mb-1\">Friend Requests</h5>
                                                            <span class=\"notification-subtext\">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-divider m-0\"></div>
                                                <a href=\"#\"
                                                    class=\"dropdown-item text-center p-3 text-muted\">toutess les notifications</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                       
                                       
                                        <div class=\"dropdown d-flex profile-1\">
                                            <a href=\"javascript:void(0)\" data-bs-toggle=\"dropdown\" class=\"nav-link leading-none d-flex\">
                                                <img src=\"../assets/images/users/21.jpg\" alt=\"profile-user\"
                                                    class=\"avatar  profile-user brround cover-image\">
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                                <div class=\"drop-heading\">
                                                    <div class=\"text-center\">
                                                        <h5 class=\"text-dark mb-0 fs-14 fw-semibold\">YAPO Adoux</h5>
                                                        <small class=\"text-muted\">Super Administrateur</small>
                                                    </div>
                                                </div>
                                                <div class=\"dropdown-divider m-0\"></div>
                                                <a class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"dropdown-icon fe fe-user\"></i> Profil
                                                </a>                                                
                                                <a class=\"dropdown-item\" href=\"login.html\">
                                                    <i class=\"dropdown-icon fe fe-alert-circle\"></i> Déconnexion
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class=\"sticky\">
                <div class=\"app-sidebar__overlay\" data-bs-toggle=\"sidebar\"></div>
                <div class=\"app-sidebar\">
                    <div class=\"side-header\">
                        <a class=\"header-brand1\" href=\"index.html\">
                            <img src=\"../assets/images/brand/logo.png\" class=\"header-brand-img desktop-logo\" alt=\"logo\">
                            <img src=\"../assets/images/brand/logo-1.png\" class=\"header-brand-img toggle-logo\"
                                alt=\"logo\">
                            <img src=\"../assets/images/brand/logo-2.png\" class=\"header-brand-img light-logo\" alt=\"logo\">
                            <img src=\"../assets/images/foncpubli1.png\" class=\"header-brand-img light-logo1\" alt=\"logo\">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class=\"main-sidemenu\">
                        <div class=\"slide-left disabled\" id=\"slide-left\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                fill=\"#7b8191\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                <path d=\"M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z\" />
                            </svg></div>
                        <ul class=\"side-menu\">                            
                            <li class=\"sub-category\">
                                <h3>ADMINISTRATEUR</h3>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-slack\"></i><span
                                        class=\"side-menu__label\">Gestion des paramêtres</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des paramêtres</a></li>
                                    <li><a href=\"add-parameter.html\" class=\"slide-item\"> Saisir un paramêtre</a></li>
                                    <li><a href=\"add-parameter.html\" class=\"slide-item\"> Afficher les paramêtres</a></li>                                    
                                </ul>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-package\"></i><span
                                        class=\"side-menu__label\">Gestion des profils</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu mega-slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des profils</a></li>
                                    <div class=\"mega-menu\">
                                        <div class=\"\">
                                            <ul>
                                                <li><a href=\"add-profile.html\" class=\"slide-item\"> Créer un profil</a></li>
                                                <li><a href=\"list-profiles.html\" class=\"slide-item\"> Afficher les profils</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class=\"slide\">
                                <a class=\"side-menu__item\" data-bs-toggle=\"slide\" href=\"javascript:void(0)\"><i
                                        class=\"side-menu__icon fe fe-package\"></i><span
                                        class=\"side-menu__label\">Gestion des utilisateurs</span><i
                                        class=\"angle fe fe-chevron-right\"></i></a>
                                <ul class=\"slide-menu mega-slide-menu\">
                                    <li class=\"side-menu-label1\"><a href=\"javascript:void(0)\">Gestion des utilisateurs</a></li>
                                    <div class=\"mega-menu\">
                                        <div class=\"\">
                                            <ul>
                                                <li><a href=\"add-user.html\" class=\"slide-item\"> Créer un utilisateur</a></li>
                                                <li><a href=\"list-users.html\" class=\"slide-item\"> Afficher les utilisateurs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>                            
                           
                        </ul>
                        <div class=\"slide-right\" id=\"slide-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#7b8191\"
                                width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                <path d=\"M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z\" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class=\"main-content app-content mt-0\">
                <div class=\"side-app\">

                    <!-- CONTAINER -->
                    <div class=\"main-container container-fluid\">

                        <!-- PAGE-HEADER -->
                        <div class=\"page-header\">
                            <h1 class=\"page-title\">Système de Gestion du Centre de Relation des Usagers Clients (CRUC)</h1>
                            <div>
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Accueil</a></li>
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Tableau de bord</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xl-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Total des utilisateurs</h6>
                                                        <h2 class=\"mb-0 number-font\">15</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"saleschart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-secondary\"><i
                                                            class=\"fe fe-arrow-up-circle  text-secondary\"></i> 5%</span>
                                                    Semaine dernière</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Demandes traitées</h6>
                                                        <h2 class=\"mb-0 number-font\">70</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"leadschart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-pink\"><i
                                                            class=\"fe fe-arrow-down-circle text-pink\"></i> 0.75%</span>
                                                    Les six(6) derniers jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Demande en attente</h6>
                                                        <h2 class=\"mb-0 number-font\">80</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"profitchart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-green\"><i
                                                            class=\"fe fe-arrow-up-circle text-green\"></i> 0.9%</span>
                                                    Les neuf(9) derniers jours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xl-3\">
                                        <div class=\"card overflow-hidden\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"mt-2\">
                                                        <h6 class=\"\">Total des demandes</h6>
                                                        <h2 class=\"mb-0 number-font\">59765</h2>
                                                    </div>
                                                    <div class=\"ms-auto\">
                                                        <div class=\"chart-wrapper mt-1\">
                                                            <canvas id=\"costchart\"
                                                                class=\"h-8 w-9 chart-dropshadow\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class=\"text-muted fs-12\"><span class=\"text-warning\"><i
                                                            class=\"fe fe-arrow-up-circle text-warning\"></i> 0.6%</span>
                                                    Année N-1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 -->
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-9\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Statistiques des demandes</h3>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex mx-auto text-center justify-content-center mb-4\">
                                            <div class=\"d-flex text-center justify-content-center me-3\"><span
                                                    class=\"dot-label bg-primary my-auto\"></span>Total des demandes</div>
                                            <div class=\"d-flex text-center justify-content-center\"><span
                                                    class=\"dot-label bg-secondary my-auto\"></span>Demandes traitées</div>
                                        </div>
                                        <div class=\"chartjs-wrapper-demo\">
                                            <canvas id=\"transactions\" class=\"chart-dropshadow\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-3\">
                                <div class=\"card overflow-hidden\">
                                    <div class=\"card-body pb-0 bg-recentorder\">
                                        <h3 class=\"card-title text-white\">Nouvelles demandes</h3>
                                        <div class=\"chartjs-wrapper-demo\">
                                            <canvas id=\"recentorders\" class=\"chart-dropshadow\"></canvas>
                                        </div>
                                    </div>
                                    <div id=\"flotback-chart\" class=\"flot-background\"></div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex mb-4 mt-3\">
                                            <div
                                                class=\"avatar avatar-md bg-secondary-transparent text-secondary bradius me-3\">
                                                <i class=\"fe fe-check\"></i>
                                            </div>
                                            <div class=\"\">
                                                <h6 class=\"mb-1 fw-semibold\">Demande traitées</h6>
                                                <p class=\"fw-normal fs-12\"> <span class=\"text-success\">3.5%</span>
                                                    increased </p>
                                            </div>
                                            <div class=\" ms-auto my-auto\">
                                                <p class=\"fw-bold fs-20\"> 1,768 </p>
                                            </div>
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"avatar  avatar-md bg-pink-transparent text-pink bradius me-3\">
                                                <i class=\"fe fe-x\"></i>
                                            </div>
                                            <div class=\"\">
                                                <h6 class=\"mb-1 fw-semibold\">Demande rejetées</h6>
                                                <p class=\"fw-normal fs-12\"> <span class=\"text-success\">1.2%</span>
                                                    increased </p>
                                            </div>
                                            <div class=\" ms-auto my-auto\">
                                                <p class=\"fw-bold fs-20 mb-0\"> 3,675 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>                       
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

       

        <!-- FOOTER -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row align-items-center flex-row-reverse\">
                    <div class=\"col-md-12 col-sm-12 text-center\">
                        Copyright © <span id=\"year\"></span> <a href=\"javascript:void(0)\">MFP</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
{% endblock %}", "gestion/home.html.twig", "C:\\Users\\silvere.yapo\\Documents\\Symfony_Projects\\MFP_Gestion_Clients\\templates\\gestion\\home.html.twig");
    }
}
