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
    'app_ahome' => [[], ['_controller' => 'App\\Controller\\AgentController::index'], [], [['text', '/agent']], [], [], []],
    'app_createrdv' => [[], ['_controller' => 'App\\Controller\\AgentController::ardv'], [], [['text', '/creer_rdv']], [], [], []],
    'app_listrdv' => [[], ['_controller' => 'App\\Controller\\AgentController::lrdv'], [], [['text', '/afficher_rdv']], [], [], []],
    'app_statsrdv' => [[], ['_controller' => 'App\\Controller\\AgentController::srdv'], [], [['text', '/stats_rdv']], [], [], []],
    'app_cshome' => [[], ['_controller' => 'App\\Controller\\CsController::index'], [], [['text', '/cs']], [], [], []],
    'app_csdem' => [[], ['_controller' => 'App\\Controller\\CsController::lstdem'], [], [['text', '/cs_demandes']], [], [], []],
    'app_cstreat' => [[], ['_controller' => 'App\\Controller\\CsController::listtreat'], [], [['text', '/cs_traitement']], [], [], []],
    'app_statsrdvcs' => [[], ['_controller' => 'App\\Controller\\CsController::statsrdvsup'], [], [['text', '/cs_statistiques']], [], [], []],
    'app_csinforecep' => [[], ['_controller' => 'App\\Controller\\CsController::inforecep'], [], [['text', '/cs_inforecep']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\GestionController::index'], [], [['text', '/gestionnaire']], [], [], []],
    'app_ajoutprofil' => [[], ['_controller' => 'App\\Controller\\GestionController::aprofil'], [], [['text', '/creer_profil']], [], [], []],
    'app_profil' => [[], ['_controller' => 'App\\Controller\\GestionController::profil'], [], [['text', '/afficher_profil']], [], [], []],
    'app_gestion' => [[], ['_controller' => 'App\\Controller\\GestionController::gestion'], [], [['text', '/gestion']], [], [], []],
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
