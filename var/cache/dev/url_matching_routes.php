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
        '/creer-rdv' => [[['_route' => 'app_createrdv', '_controller' => 'App\\Controller\\AgentController::ardv'], null, null, null, false, false, null]],
        '/afficher-rdv' => [[['_route' => 'app_listrdv', '_controller' => 'App\\Controller\\AgentController::lrdv'], null, null, null, false, false, null]],
        '/stats-rdv' => [[['_route' => 'app_statsrdv', '_controller' => 'App\\Controller\\AgentController::srdv'], null, null, null, false, false, null]],
        '/prise_de_rdv_agent_d_accueil' => [[['_route' => 'app_rdv_agt', '_controller' => 'App\\Controller\\AgentController::rdv_agt'], null, null, null, false, false, null]],
        '/list_rdv_agent' => [[['_route' => 'app_lst_dem_agt', '_controller' => 'App\\Controller\\AgentController::lst_dem_agt'], null, null, null, false, false, null]],
        '/demande/agent-accueil' => [[['_route' => 'app_demande_rdv_agt', '_controller' => 'App\\Controller\\AgentController::agent_accueil_rdv'], null, null, null, false, false, null]],
        '/agent-accueil/liste-demande' => [[['_route' => 'app_liste_rdv_agt', '_controller' => 'App\\Controller\\AgentController::demande'], null, null, null, false, false, null]],
        '/destinataire-controle' => [[['_route' => 'app_destinataire', '_controller' => 'App\\Controller\\AgentController::destinataire_verif'], null, null, null, false, false, null]],
        '/espace_chef_de_service' => [[['_route' => 'app_cshome', '_controller' => 'App\\Controller\\CsController::index'], null, null, null, false, false, null]],
        '/cs-demandes' => [[['_route' => 'app_csdem', '_controller' => 'App\\Controller\\CsController::lstdem'], null, null, null, false, false, null]],
        '/cs-traitement' => [[['_route' => 'app_cstreat', '_controller' => 'App\\Controller\\CsController::listtreat'], null, null, null, false, false, null]],
        '/cs-statistiques' => [[['_route' => 'app_statsrdvcs', '_controller' => 'App\\Controller\\CsController::statsrdvsup'], null, null, null, false, false, null]],
        '/cs-info-recep' => [[['_route' => 'app_csinforecep', '_controller' => 'App\\Controller\\CsController::inforecep'], null, null, null, false, false, null]],
        '/demande' => [[['_route' => 'app_demande_rdv', '_controller' => 'App\\Controller\\DemandeRdvController::index'], null, null, null, false, false, null]],
        '/liste-demande' => [[['_route' => 'app_liste_rdv', '_controller' => 'App\\Controller\\DemandeRdvController::demande'], null, null, null, false, false, null]],
        '/succes_add' => [[['_route' => 'demande_add', '_controller' => 'App\\Controller\\DemandeRdvController::demande_add'], null, null, null, false, false, null]],
        '/recherche-demande' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\DemandeRdvController::search_demande'], null, null, null, false, false, null]],
        '/home-page' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\GestionController::index'], null, null, null, false, false, null]],
        '/creer_profil' => [[['_route' => 'app_ajoutprofil', '_controller' => 'App\\Controller\\GestionController::aprofil'], null, null, null, false, false, null]],
        '/afficher_profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\GestionController::profil'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'app_gestion', '_controller' => 'App\\Controller\\GestionController::gestion'], null, null, null, false, false, null]],
        '/espace-gestionnaire' => [[['_route' => 'app_gesthome', '_controller' => 'App\\Controller\\GsController::index'], null, null, null, false, false, null]],
        '/liste-des-demandes-de-rendez-vous' => [[['_route' => 'app_ges_dem', '_controller' => 'App\\Controller\\GsController::ges_dem'], null, null, null, false, false, null]],
        '/visualisation-des-rdv-en-traitements' => [[['_route' => 'app_ges_treat', '_controller' => 'App\\Controller\\GsController::ges_treat'], null, null, null, false, false, null]],
        '/statistiques-des-traitements' => [[['_route' => 'app_ges_stat', '_controller' => 'App\\Controller\\GsController::ges_stat'], null, null, null, false, false, null]],
        '/gestionnaire-reclamation' => [[['_route' => 'app_gest_reclamation', '_controller' => 'App\\Controller\\GsController::gest_reclame'], null, null, null, false, false, null]],
        '/gestionnaire-reclamation-dgapce' => [[['_route' => 'app_gest_reclamation_dir_2', '_controller' => 'App\\Controller\\GsController::gest_dir_deux_reclame'], null, null, null, false, false, null]],
        '/gestionnaire-reclamation-drh' => [[['_route' => 'app_gest_reclamation_dir_3', '_controller' => 'App\\Controller\\GsController::gest_dir_3_reclame'], null, null, null, false, false, null]],
        '/reclamation/formulaire' => [[['_route' => 'app_reclamation_form', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/liste-reclamation' => [[['_route' => 'app_liste_reclame', '_controller' => 'App\\Controller\\ReclamationController::reclamation'], null, null, null, false, false, null]],
        '/rechercher-reclamation' => [[['_route' => 'app_search_reclame', '_controller' => 'App\\Controller\\ReclamationController::search_reclame'], null, null, null, false, false, null]],
        '/reclamation-agent' => [[['_route' => 'app_reclamation_agent', '_controller' => 'App\\Controller\\ReclamationController::indexAg'], null, null, null, false, false, null]],
        '/home-reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::reclame'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\RegistrationController::inscription'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/pass-oublie' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/superviseur' => [[['_route' => 'app_suphome', '_controller' => 'App\\Controller\\SuperviseurController::index'], null, null, null, false, false, null]],
        '/demande-mod' => [[['_route' => 'app_dem_modif', '_controller' => 'App\\Controller\\SuperviseurController::lstdem'], null, null, null, false, false, null]],
        '/traitement-sup' => [[['_route' => 'app_listtreat', '_controller' => 'App\\Controller\\SuperviseurController::listtreat'], null, null, null, false, false, null]],
        '/statistiques-sup' => [[['_route' => 'app_statsrdvsup', '_controller' => 'App\\Controller\\SuperviseurController::statsrdvsup'], null, null, null, false, false, null]],
        '/info-recept-sup' => [[['_route' => 'app_inforecep', '_controller' => 'App\\Controller\\SuperviseurController::inforecep'], null, null, null, false, false, null]],
        '/superviseur-reclamation' => [[['_route' => 'app_sup_reclamation', '_controller' => 'App\\Controller\\SuperviseurController::gest_dir_3_reclame'], null, null, null, false, false, null]],
        '/superviseur-trait-requete' => [[['_route' => 'app_sup_requete', '_controller' => 'App\\Controller\\SuperviseurController::sup_trait_requete'], null, null, null, false, false, null]],
        '/superviseur-requete-traite-cruc' => [[['_route' => 'app_sup_requete_traite_cruc', '_controller' => 'App\\Controller\\SuperviseurController::sup_trait_requete_cruc'], null, null, null, false, false, null]],
        '/superviseur-requete-traite-dpa' => [[['_route' => 'app_sup_requete_traite_dpa', '_controller' => 'App\\Controller\\SuperviseurController::sup_trait_requete_dpa'], null, null, null, false, false, null]],
        '/superviseur-valide-rdv' => [[['_route' => 'app_sup_valide_rdv', '_controller' => 'App\\Controller\\SuperviseurController::sup_valide_rdv'], null, null, null, false, false, null]],
        '/resultat-traitement' => [[['_route' => 'app_result-traite', '_controller' => 'App\\Controller\\UsagerController::homeu'], null, null, null, false, false, null]],
        '/evaluation' => [[['_route' => 'app_satisfaction', '_controller' => 'App\\Controller\\UsagerController::satisfaction_usager'], null, null, null, false, false, null]],
        '/infos-service' => [[['_route' => 'app_infos', '_controller' => 'App\\Controller\\UsagerController::infos'], null, null, null, false, false, null]],
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
                .'|/tra(?'
                    .'|itement\\-(?'
                        .'|demande\\-rdv/([^/]++)(*:209)'
                        .'|gestionnaire/([^/]++)(*:238)'
                        .'|reclamation(?'
                            .'|\\-gest/([^/]++)(*:275)'
                            .'|/([^/]++)(*:292)'
                        .')'
                    .')'
                    .'|nsfer(?'
                        .'|er\\-demande\\-rdv/([^/]++)(*:335)'
                        .'|t\\-demande/([^/]++)(*:362)'
                    .')'
                .')'
                .'|/annule\\-(?'
                    .'|demande/([^/]++)(*:400)'
                    .'|reclamation(?'
                        .'|_gest/([^/]++)(*:436)'
                        .'|/([^/]++)(*:453)'
                    .')'
                .')'
                .'|/d(?'
                    .'|e(?'
                        .'|mande/(?'
                            .'|agent\\-accueil\\-edit/([^/]++)(*:510)'
                            .'|edit/([^/]++)(*:531)'
                        .')'
                        .'|lete(?'
                            .'|/([^/]++)(*:556)'
                            .'|\\-reclamation/([^/]++)(*:586)'
                        .')'
                    .')'
                    .'|ata(?'
                        .'|\\-modif/([^/]++)(*:618)'
                        .'|/([^/]++)(*:635)'
                    .')'
                .')'
                .'|/validation\\-rdv/([^/]++)(*:670)'
                .'|/cancel\\-demande/([^/]++)(*:703)'
                .'|/re(?'
                    .'|clamation/edit/([^/]++)(*:740)'
                    .'|set\\-pass/([^/]++)(*:766)'
                .')'
                .'|/modification\\-mot\\-de\\-passe/([^/]++)(*:813)'
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
        209 => [[['_route' => 'app_ges_infotreat', '_controller' => 'App\\Controller\\AgentController::ges_infotreat'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'app_ges_trait', '_controller' => 'App\\Controller\\GsController::ges_treat_demande'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'app_trait_reclamation_gest', '_controller' => 'App\\Controller\\GsController::trait_reclamation_gest'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'app_trait_reclamation', '_controller' => 'App\\Controller\\ReclamationController::trait_reclamation'], ['id'], null, null, false, true, null]],
        335 => [[['_route' => 'app_ac_transfert', '_controller' => 'App\\Controller\\AgentController::ac_transferer'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'app_transfert', '_controller' => 'App\\Controller\\AgentController::transfert_demande'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'app_annule_demande', '_controller' => 'App\\Controller\\AgentController::annule_demande_Ac'], ['id'], null, null, false, true, null]],
        436 => [[['_route' => 'app_annule_reclamation_gest', '_controller' => 'App\\Controller\\GsController::annule_reclamation_gest'], ['id'], null, null, false, true, null]],
        453 => [[['_route' => 'app_annule_reclamation', '_controller' => 'App\\Controller\\ReclamationController::annule_reclamation_Ac'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'edit_demande_rdv_agt', '_controller' => 'App\\Controller\\AgentController::agent_accueil_rdv'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'edit_demande_rdv', '_controller' => 'App\\Controller\\DemandeRdvController::index'], ['id'], null, null, false, true, null]],
        556 => [[['_route' => 'delete_demande', '_controller' => 'App\\Controller\\DemandeRdvController::delete_demande'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::delete_reclame'], ['id'], null, null, false, true, null]],
        618 => [[['_route' => 'app_data', '_controller' => 'App\\Controller\\DemandeRdvController::dataAction'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'app_data_form', '_controller' => 'App\\Controller\\DemandeRdvController::formAction'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'app_valid_rdv', '_controller' => 'App\\Controller\\AgentController::rdv_valid'], ['id'], null, null, false, true, null]],
        703 => [[['_route' => 'app_cancel_demande', '_controller' => 'App\\Controller\\GsController::annule_demande_gest'], ['id'], null, null, false, true, null]],
        740 => [[['_route' => 'edit_reclamation', '_controller' => 'App\\Controller\\ReclamationController::indexAg'], ['id'], null, null, false, true, null]],
        766 => [[['_route' => 'app_reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        813 => [
            [['_route' => 'app_modif_password', '_controller' => 'App\\Controller\\RegistrationController::modifPassword'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
