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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/parcelle/proprietes' => [[['_route' => 'admin_parcelle_proprietes_index', '_controller' => 'App\\Controller\\AdminController::adminIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/parcelle/proprietes/new' => [[['_route' => 'admin_parcelle_proprietes_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contrat/new' => [[['_route' => 'admin_contrat_new', '_controller' => 'App\\Controller\\AdminController::newContrat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contrat' => [[['_route' => 'admin_contrat_index', '_controller' => 'App\\Controller\\AdminController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::listUsers'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/new' => [[['_route' => 'app_contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, null, null, true, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, null, null, false, false, null]],
        '/materiellocation' => [[['_route' => 'app_materiellocation_index', '_controller' => 'App\\Controller\\MateriellocationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/materiellocation/new' => [[['_route' => 'app_materiellocation_new', '_controller' => 'App\\Controller\\MateriellocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materielvente' => [[['_route' => 'app_materielvente_index', '_controller' => 'App\\Controller\\MaterielventeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/materielvente/new' => [[['_route' => 'app_materielvente_new', '_controller' => 'App\\Controller\\MaterielventeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre' => [
            [['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_offre', '_controller' => 'App\\Controller\\PageController::offre'], null, null, null, false, false, null],
        ],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/page' => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\PageController::shop'], null, null, null, false, false, null]],
        '/shopdetail' => [[['_route' => 'app_shop_detail', '_controller' => 'App\\Controller\\PageController::shopdetail'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\PageController::cart'], null, null, null, false, false, null]],
        '/chackout' => [[['_route' => 'app_chackout', '_controller' => 'App\\Controller\\PageController::chackout'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\PageController::testimonial'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\PageController::error'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/parcelle/proprietes' => [[['_route' => 'app_parcelle_proprietes_index', '_controller' => 'App\\Controller\\ParcelleProprietesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/parcelle/proprietes/new' => [[['_route' => 'app_parcelle_proprietes_new', '_controller' => 'App\\Controller\\ParcelleProprietesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit_profile' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfile'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\ProfileController::indexprofile'], null, null, null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'admin_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfileadmin'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\SecurityController::adminLogin'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\SecurityController::adminLogout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|parcelle/proprietes/([^/]++)(?'
                        .'|(*:243)'
                        .'|/(?'
                            .'|edit(*:259)'
                            .'|delete(*:273)'
                        .')'
                    .')'
                    .'|contrat/([^/]++)(*:299)'
                .')'
                .'|/([^/]++)/(?'
                    .'|edit(*:325)'
                    .'|delete(*:339)'
                .')'
                .'|/admin/user/(?'
                    .'|edit/([^/]++)(*:376)'
                    .'|delete/([^/]++)(*:399)'
                .')'
                .'|/co(?'
                    .'|mmande/([^/]++)(?'
                        .'|(*:432)'
                        .'|/edit(*:445)'
                        .'|(*:453)'
                    .')'
                    .'|ntrat/([^/]++)(?'
                        .'|(*:479)'
                        .'|/edit(*:492)'
                        .'|(*:500)'
                    .')'
                .')'
                .'|/employe/([^/]++)(?'
                    .'|(*:530)'
                    .'|/edit(*:543)'
                    .'|(*:551)'
                .')'
                .'|/materiel(?'
                    .'|location/([^/]++)(?'
                        .'|(*:592)'
                        .'|/edit(*:605)'
                        .'|(*:613)'
                    .')'
                    .'|vente/([^/]++)(?'
                        .'|(*:639)'
                        .'|/edit(*:652)'
                        .'|(*:660)'
                    .')'
                .')'
                .'|/offre/(?'
                    .'|([^/]++)(?'
                        .'|(*:691)'
                        .'|/edit(*:704)'
                        .'|(*:712)'
                    .')'
                    .'|inscriptionoffre(*:737)'
                .')'
                .'|/parcelle/proprietes/([^/]++)(?'
                    .'|(*:778)'
                    .'|/edit(*:791)'
                    .'|(*:799)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:844)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        243 => [[['_route' => 'admin_parcelle_proprietes_show', '_controller' => 'App\\Controller\\AdminController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'admin_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\AdminController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'admin_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\AdminController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        299 => [[['_route' => 'admin_contrat_show', '_controller' => 'App\\Controller\\AdminController::showBackconrat'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'admin_contrat_edit', '_controller' => 'App\\Controller\\AdminController::editBackconrat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'admin_contrat_delete', '_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], ['id'], ['POST' => 0], null, false, false, null]],
        376 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        592 => [[['_route' => 'app_materiellocation_show', '_controller' => 'App\\Controller\\MateriellocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_materiellocation_edit', '_controller' => 'App\\Controller\\MateriellocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [[['_route' => 'app_materiellocation_delete', '_controller' => 'App\\Controller\\MateriellocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        639 => [[['_route' => 'app_materielvente_show', '_controller' => 'App\\Controller\\MaterielventeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_materielvente_edit', '_controller' => 'App\\Controller\\MaterielventeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'app_materielvente_delete', '_controller' => 'App\\Controller\\MaterielventeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        691 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        712 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        737 => [[['_route' => 'app_inscriptionoffre', '_controller' => 'App\\Controller\\OffreController::inscriptionoffre'], [], null, null, false, false, null]],
        778 => [[['_route' => 'app_parcelle_proprietes_show', '_controller' => 'App\\Controller\\ParcelleProprietesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        791 => [[['_route' => 'app_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        799 => [[['_route' => 'app_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\ParcelleProprietesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        844 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
