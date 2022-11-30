<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_ahome' => [[], ['_controller' => 'App\\Controller\\AgentController::index'], [], [['text', '/espace_agent_d_accueil']], [], [], []],
    'app_alistrdv' => [[], ['_controller' => 'App\\Controller\\AgentController::lrdv'], [], [['text', '/afficher_la_liste_des_rdv']], [], [], []],
    'app_astatsrdv' => [[], ['_controller' => 'App\\Controller\\AgentController::astatrdv'], [], [['text', '/afficher_les_statistiques_des_rdv']], [], [], []],
    'app_rdv_agt' => [[], ['_controller' => 'App\\Controller\\AgentController::rdv_agt'], [], [['text', '/prise_de_rdv_agent_d_accueil']], [], [], []],
    'app_lst_dem_agt' => [[], ['_controller' => 'App\\Controller\\AgentController::lst_dem_agt'], [], [['text', '/list_rdv_agent']], [], [], []],
    'app_cshome' => [[], ['_controller' => 'App\\Controller\\CsController::index'], [], [['text', '/espace_chef_de_service']], [], [], []],
    'app_csdem' => [[], ['_controller' => 'App\\Controller\\CsController::lstdem'], [], [['text', '/cs_demandes']], [], [], []],
    'app_cstreat' => [[], ['_controller' => 'App\\Controller\\CsController::listtreat'], [], [['text', '/cs_traitement']], [], [], []],
    'app_statsrdvcs' => [[], ['_controller' => 'App\\Controller\\CsController::statsrdvsup'], [], [['text', '/cs_statistiques']], [], [], []],
    'app_csinforecep' => [[], ['_controller' => 'App\\Controller\\CsController::inforecep'], [], [['text', '/cs_inforecep']], [], [], []],
    'app_demande_rdv' => [['id'], ['_controller' => 'App\\Controller\\DemandeRdvController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/demande']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\GestionController::index'], [], [['text', '/gestionnaire']], [], [], []],
    'app_ajoutprofil' => [[], ['_controller' => 'App\\Controller\\GestionController::aprofil'], [], [['text', '/creer_profil']], [], [], []],
    'app_profil' => [[], ['_controller' => 'App\\Controller\\GestionController::profil'], [], [['text', '/afficher_profil']], [], [], []],
    'app_gestion' => [[], ['_controller' => 'App\\Controller\\GestionController::gestion'], [], [['text', '/gestion']], [], [], []],
    'app_gesthome' => [[], ['_controller' => 'App\\Controller\\GsController::index'], [], [['text', '/espace-gestionnaire']], [], [], []],
    'app_ges_dem' => [[], ['_controller' => 'App\\Controller\\GsController::ges_dem'], [], [['text', '/liste-des-demandes-de-rendez-vous']], [], [], []],
    'app_ges_treat' => [[], ['_controller' => 'App\\Controller\\GsController::ges_treat'], [], [['text', '/visualisation-des-rdv-en-traitements']], [], [], []],
    'app_ges_infotreat' => [[], ['_controller' => 'App\\Controller\\GsController::ges_infotreat'], [], [['text', '/visualisation-des-informations-sur-un-traitement-RDV_30112022_001']], [], [], []],
    'app_ges_stat' => [[], ['_controller' => 'App\\Controller\\GsController::ges_stat'], [], [['text', '/visualisation-des-statistiques-des-traitements']], [], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\RegistrationController::inscription'], [], [['text', '/inscription']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::connexion'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_suphome' => [[], ['_controller' => 'App\\Controller\\SuperviseurController::index'], [], [['text', '/superviseur']], [], [], []],
    'app_lstdem' => [[], ['_controller' => 'App\\Controller\\SuperviseurController::lstdem'], [], [['text', '/superviseur_demandes']], [], [], []],
    'app_listtreat' => [[], ['_controller' => 'App\\Controller\\SuperviseurController::listtreat'], [], [['text', '/superviseur_traitement']], [], [], []],
    'app_statsrdvsup' => [[], ['_controller' => 'App\\Controller\\SuperviseurController::statsrdvsup'], [], [['text', '/superviseur_statistiques']], [], [], []],
    'app_inforecep' => [[], ['_controller' => 'App\\Controller\\SuperviseurController::inforecep'], [], [['text', '/superviseur_inforecep']], [], [], []],
    'app_uhome' => [[], ['_controller' => 'App\\Controller\\UsagerController::homeu'], [], [['text', '/usager']], [], [], []],
    'app_creatrdv' => [[], ['_controller' => 'App\\Controller\\UsagerController::prdv'], [], [['text', '/prendre_rdv']], [], [], []],
    'app_listerdv' => [[], ['_controller' => 'App\\Controller\\UsagerController::lsrdv'], [], [['text', '/lister_rdv']], [], [], []],
    'app_cruchome' => [[], ['_controller' => 'App\\Controller\\WelcomeController::accueil'], [], [['text', '/bienvenue']], [], [], []],
];
