<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'app_ahome', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, false, false, null]],
        '/creer-rdv' => [[['_route' => 'app_createrdv', '_controller' => 'App\\Controller\\AgentController::ardv'], null, null, null, false, false, null]],
        '/afficher-rdv' => [[['_route' => 'app_listrdv', '_controller' => 'App\\Controller\\AgentController::lrdv'], null, null, null, false, false, null]],
        '/stats-rdv' => [[['_route' => 'app_statsrdv', '_controller' => 'App\\Controller\\AgentController::srdv'], null, null, null, false, false, null]],
        '/cs' => [[['_route' => 'app_cshome', '_controller' => 'App\\Controller\\CsController::index'], null, null, null, false, false, null]],
        '/cs-demandes' => [[['_route' => 'app_csdem', '_controller' => 'App\\Controller\\CsController::lstdem'], null, null, null, false, false, null]],
        '/cs-traitement' => [[['_route' => 'app_cstreat', '_controller' => 'App\\Controller\\CsController::listtreat'], null, null, null, false, false, null]],
        '/cs-statistiques' => [[['_route' => 'app_statsrdvcs', '_controller' => 'App\\Controller\\CsController::statsrdvsup'], null, null, null, false, false, null]],
        '/cs-info-recep' => [[['_route' => 'app_csinforecep', '_controller' => 'App\\Controller\\CsController::inforecep'], null, null, null, false, false, null]],
        '/gestionnaire' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\GestionController::index'], null, null, null, false, false, null]],
        '/creer_profil' => [[['_route' => 'app_ajoutprofil', '_controller' => 'App\\Controller\\GestionController::aprofil'], null, null, null, false, false, null]],
        '/afficher_profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\GestionController::profil'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'app_gestion', '_controller' => 'App\\Controller\\GestionController::gestion'], null, null, null, false, false, null]],
        '/gest' => [[['_route' => 'app_gesthome', '_controller' => 'App\\Controller\\GsController::index'], null, null, null, false, false, null]],
        '/gest-demande' => [[['_route' => 'app_ges_dem', '_controller' => 'App\\Controller\\GsController::ges_dem'], null, null, null, false, false, null]],
        '/gest-traitement' => [[['_route' => 'app_ges_treat', '_controller' => 'App\\Controller\\GsController::ges_treat'], null, null, null, false, false, null]],
        '/rdv-gestionnaire' => [[['_route' => 'app_rdv_gest', '_controller' => 'App\\Controller\\GsController::rdv_gest'], null, null, null, false, false, null]],
        '/liste-demande' => [[['_route' => 'app_lst_dem_gest', '_controller' => 'App\\Controller\\GsController::lst_dem_gest'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::inscription'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/superviseur' => [[['_route' => 'app_suphome', '_controller' => 'App\\Controller\\SuperviseurController::index'], null, null, null, false, false, null]],
        '/demande-sup' => [[['_route' => 'app_lstdem', '_controller' => 'App\\Controller\\SuperviseurController::lstdem'], null, null, null, false, false, null]],
        '/traitement-sup' => [[['_route' => 'app_listtreat', '_controller' => 'App\\Controller\\SuperviseurController::listtreat'], null, null, null, false, false, null]],
        '/statistiques-sup' => [[['_route' => 'app_statsrdvsup', '_controller' => 'App\\Controller\\SuperviseurController::statsrdvsup'], null, null, null, false, false, null]],
        '/info-recept-sup' => [[['_route' => 'app_inforecep', '_controller' => 'App\\Controller\\SuperviseurController::inforecep'], null, null, null, false, false, null]],
        '/usager' => [[['_route' => 'app_uhome', '_controller' => 'App\\Controller\\UsagerController::homeu'], null, null, null, false, false, null]],
        '/prendre-rdv' => [[['_route' => 'app_creatrdv', '_controller' => 'App\\Controller\\UsagerController::prdv'], null, null, null, false, false, null]],
        '/liste-rdv' => [[['_route' => 'app_listerdv', '_controller' => 'App\\Controller\\UsagerController::lsrdv'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_cruchome', '_controller' => 'App\\Controller\\WelcomeController::accueil'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/demande/([^/]++)(*:186)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [
            [['_route' => 'app_demande_rdv', '_controller' => 'App\\Controller\\DemandeRdvController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
