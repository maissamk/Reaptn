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
        '/connect/google/check' => [[['_route' => 'oauth_google_check', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::checkAction'], null, null, null, false, false, null]],
        '/admin/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/admin/tables' => [[['_route' => 'app_tables', '_controller' => 'App\\Controller\\AdminController::tablesIndex'], null, null, null, false, false, null]],
        '/admin/admin/materielvente/new' => [[['_route' => 'admin_materielvente_new', '_controller' => 'App\\Controller\\AdminController::newmv'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/table' => [[['_route' => 'app_tableslocation', '_controller' => 'App\\Controller\\AdminController::tableslocationIndex'], null, null, null, false, false, null]],
        '/admin/admin/materiellocation/new' => [[['_route' => 'admin_materiellocation_new', '_controller' => 'App\\Controller\\AdminController::newlocation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/parcelle/proprietes' => [[['_route' => 'admin_parcelle_proprietes_index', '_controller' => 'App\\Controller\\AdminController::adminIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/parcelle/proprietes/new' => [[['_route' => 'admin_parcelle_proprietes_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/contrat/new' => [[['_route' => 'admin_contrat_new', '_controller' => 'App\\Controller\\AdminController::newContrat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/contrat' => [[['_route' => 'admin_contrat_index', '_controller' => 'App\\Controller\\AdminController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::indexproduit'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\AdminController::products'], null, null, null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\AdminController::newProduct'], null, null, null, false, false, null]],
        '/admin/product-types' => [[['_route' => 'admin_product_types', '_controller' => 'App\\Controller\\AdminController::productTypes'], null, null, null, false, false, null]],
        '/admin/product-type/new' => [[['_route' => 'admin_product_type_new', '_controller' => 'App\\Controller\\AdminController::newProductType'], null, null, null, false, false, null]],
        '/admin/stocks' => [[['_route' => 'admin_stocks', '_controller' => 'App\\Controller\\AdminController::stocks'], null, null, null, false, false, null]],
        '/admin/stock/new' => [[['_route' => 'admin_stock_new', '_controller' => 'App\\Controller\\AdminController::newStock'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/new' => [[['_route' => 'app_contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/admin/employe' => [[['_route' => 'admin_employe_index', '_controller' => 'App\\Controller\\EmployeController::indexBack'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/livraison/new' => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/offre/admin/offre' => [[['_route' => 'admin_offre_index', '_controller' => 'App\\Controller\\OffreController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/offre/admin/offre/new' => [[['_route' => 'admin_offre_new', '_controller' => 'App\\Controller\\OffreController::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'app_temp_cart', '_controller' => 'App\\Controller\\PageController::cart'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\PageController::testimonial'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\PageController::error'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/temp' => [[['_route' => 'app_temp_index', '_controller' => 'App\\Controller\\PageController::tempIndex'], null, null, null, false, false, null]],
        '/temp/shop' => [[['_route' => 'app_temp_shop', '_controller' => 'App\\Controller\\PageController::tempShop'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'app_admin_orders', '_controller' => 'App\\Controller\\PageController::adminOrders'], null, null, null, false, false, null]],
        '/page' => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_afficher', '_controller' => 'App\\Controller\\PanierController::showCart'], null, null, null, false, false, null]],
        '/parcelle/proprietes' => [[['_route' => 'app_parcelle_proprietes_index', '_controller' => 'App\\Controller\\ParcelleProprietesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/parcelle/proprietes/new' => [[['_route' => 'app_parcelle_proprietes_new', '_controller' => 'App\\Controller\\ParcelleProprietesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit_profile' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfile'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\ProfileController::indexprofile'], null, null, null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'admin_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfileadmin'], null, null, null, false, false, null]],
        '/register1' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\SecurityController::adminLogin'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\SecurityController::adminLogout'], null, null, null, false, false, null]],
        '/login/google/callback' => [[['_route' => 'google_redirect', '_controller' => 'App\\Controller\\SecurityController::googleRedirect'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\UserAdminController::listUsers'], null, null, null, false, false, null]],
        '/admin/users/pdf' => [[['_route' => 'admin_users_pdf', '_controller' => 'App\\Controller\\UserAdminController::downloadPdf'], null, null, null, false, false, null]],
        '/admin/user/statistics' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\UserAdminController::statistics'], null, null, null, false, false, null]],
        '/admin/user/LoginStats' => [[['_route' => 'admin_LoginStats', '_controller' => 'App\\Controller\\UserAdminController::showLoginStats'], null, null, null, false, false, null]],
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
                .'|/co(?'
                    .'|n(?'
                        .'|nect/(?'
                            .'|([^/]++)(*:228)'
                            .'|service/([^/]++)(*:252)'
                            .'|registration/([^/]++)(*:281)'
                            .'|google(*:295)'
                        .')'
                        .'|trat/([^/]++)(?'
                            .'|(*:320)'
                            .'|/edit(*:333)'
                            .'|(*:341)'
                        .')'
                    .')'
                    .'|mmande/(?'
                        .'|livraison/([^/]++)/update\\-status(*:394)'
                        .'|paiement/([^/]++)(*:419)'
                        .'|([^/]++)(*:435)'
                        .'|co(?'
                            .'|mmande/([^/]++)/(?'
                                .'|edit(*:471)'
                                .'|delete(*:485)'
                            .')'
                            .'|nfirmation/([^/]++)(*:513)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|([^/]++)/edit1(*:554)'
                            .'|materiel/([^/]++)(*:579)'
                            .'|admin/materielvente/([^/]++)(*:615)'
                            .'|([^/]++)/(?'
                                .'|modifier(*:643)'
                                .'|supprimer(*:660)'
                            .')'
                            .'|admin/(?'
                                .'|location/([^/]++)(*:695)'
                                .'|parcelle/proprietes/([^/]++)(?'
                                    .'|(*:734)'
                                    .'|/(?'
                                        .'|edit(*:750)'
                                        .'|delete(*:764)'
                                    .')'
                                .')'
                                .'|contrat/([^/]++)(*:790)'
                            .')'
                            .'|([^/]++)/delete(*:814)'
                            .'|product(?'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:849)'
                                    .'|delete/([^/]++)(*:872)'
                                .')'
                                .'|\\-type/(?'
                                    .'|edit/([^/]++)(*:904)'
                                    .'|delete/([^/]++)(*:927)'
                                .')'
                            .')'
                            .'|stock/(?'
                                .'|edit/([^/]++)(*:959)'
                                .'|delete/([^/]++)(*:982)'
                            .')'
                            .'|orders/([^/]++)(?'
                                .'|(*:1009)'
                                .'|/status(*:1025)'
                            .')'
                            .'|user/(?'
                                .'|edit/([^/]++)(*:1056)'
                                .'|delete/([^/]++)(*:1080)'
                            .')'
                        .')'
                        .'|admin/([^/]++)/edit(*:1110)'
                    .')'
                    .'|jouter/([^/]++)(*:1135)'
                .')'
                .'|/employe/(?'
                    .'|new/([^/]++)(*:1169)'
                    .'|([^/]++)(?'
                        .'|(*:1189)'
                        .'|/edit(*:1203)'
                    .')'
                    .'|delete/([^/]++)(*:1228)'
                    .'|new(*:1240)'
                    .'|admin/employe/([^/]++)(?'
                        .'|(*:1274)'
                        .'|/(?'
                            .'|edit(*:1291)'
                            .'|delete(*:1306)'
                        .')'
                    .')'
                .')'
                .'|/livraison/([^/]++)(?'
                    .'|(*:1340)'
                    .'|/edit(*:1354)'
                    .'|(*:1363)'
                .')'
                .'|/materiel(?'
                    .'|location/([^/]++)(?'
                        .'|(*:1405)'
                        .'|/edit(*:1419)'
                        .'|(*:1428)'
                    .')'
                    .'|vente/(?'
                        .'|([^/]++)(?'
                            .'|(*:1458)'
                            .'|/edit(*:1472)'
                            .'|(*:1481)'
                        .')'
                        .'|materiels(*:1500)'
                    .')'
                .')'
                .'|/offre/(?'
                    .'|([^/]++)(?'
                        .'|(*:1532)'
                        .'|/edit(*:1546)'
                        .'|(*:1555)'
                    .')'
                    .'|admin/offre/([^/]++)(?'
                        .'|(*:1588)'
                        .'|/(?'
                            .'|edit(*:1605)'
                            .'|delete(*:1620)'
                        .')'
                    .')'
                .')'
                .'|/temp/shop\\-detail/([^/]++)(*:1659)'
                .'|/pa(?'
                    .'|iement/(?'
                        .'|([^/]++)(?'
                            .'|(*:1695)'
                            .'|/traitement(*:1715)'
                        .')'
                        .'|confirmation/([^/]++)(*:1746)'
                    .')'
                    .'|nier/(?'
                        .'|mettre\\-a\\-jour\\-quantite/([^/]++)(*:1798)'
                        .'|supprimer/([^/]++)(*:1825)'
                    .')'
                    .'|rcelle/proprietes/([^/]++)(?'
                        .'|(*:1864)'
                        .'|/edit(*:1878)'
                        .'|(*:1887)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1934)'
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
        228 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => ['HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController', 'redirectToServiceAction']], ['service'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => ['HWI\\Bundle\\OAuthBundle\\Controller\\Connect\\ConnectController', 'connectServiceAction']], ['service'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        281 => [[['_route' => 'hwi_oauth_connect_registration', '_controller' => ['HWI\\Bundle\\OAuthBundle\\Controller\\Connect\\RegisterController', 'registrationAction']], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        295 => [[['_route' => 'oauth_google_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction'], [], null, null, false, false, null]],
        320 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'livraison_update_status', '_controller' => 'App\\Controller\\CommandeController::updateLivraisonStatus'], ['id'], null, null, false, false, null]],
        419 => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\CommandeController::paiement'], ['id'], null, null, false, true, null]],
        435 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        471 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        485 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], null, null, false, false, null]],
        513 => [[['_route' => 'confirmation_commande', '_controller' => 'App\\Controller\\CommandeController::confirmation'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'admin_materielvente_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        579 => [[['_route' => 'admin_materielvente_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        615 => [[['_route' => 'app_materielvente_aff', '_controller' => 'App\\Controller\\AdminController::afficher'], ['id'], ['GET' => 0], null, false, true, null]],
        643 => [[['_route' => 'admin_materiellocation_edit', '_controller' => 'App\\Controller\\AdminController::editlocation'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'admin_materiellocation_delete', '_controller' => 'App\\Controller\\AdminController::deletelocation'], ['id'], ['POST' => 0], null, false, false, null]],
        695 => [[['_route' => 'admin_materiellocation_aff', '_controller' => 'App\\Controller\\AdminController::afficherlocation'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'admin_parcelle_proprietes_show', '_controller' => 'App\\Controller\\AdminController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        750 => [[['_route' => 'admin_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\AdminController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        764 => [[['_route' => 'admin_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\AdminController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        790 => [[['_route' => 'admin_contrat_show', '_controller' => 'App\\Controller\\AdminController::showBackconrat'], ['id'], ['GET' => 0], null, false, true, null]],
        814 => [[['_route' => 'admin_contrat_delete', '_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], ['id'], ['POST' => 0], null, false, false, null]],
        849 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\AdminController::editProduct'], ['id'], null, null, false, true, null]],
        872 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\PageController::deleteProduct'], ['id'], null, null, false, true, null]],
        904 => [[['_route' => 'admin_product_type_edit', '_controller' => 'App\\Controller\\AdminController::editProductType'], ['id'], null, null, false, true, null]],
        927 => [[['_route' => 'admin_product_type_delete', '_controller' => 'App\\Controller\\AdminController::deleteProductType'], ['id'], null, null, false, true, null]],
        959 => [[['_route' => 'admin_stock_edit', '_controller' => 'App\\Controller\\AdminController::editStock'], ['id'], null, null, false, true, null]],
        982 => [[['_route' => 'admin_stock_delete', '_controller' => 'App\\Controller\\AdminController::deleteStock'], ['id'], null, null, false, true, null]],
        1009 => [[['_route' => 'app_admin_order_detail', '_controller' => 'App\\Controller\\PageController::adminOrderDetail'], ['id'], null, null, false, true, null]],
        1025 => [[['_route' => 'app_admin_order_status', '_controller' => 'App\\Controller\\PageController::adminOrderStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1056 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\UserAdminController::editUser'], ['id'], null, null, false, true, null]],
        1080 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserAdminController::deleteUser'], ['id'], null, null, false, true, null]],
        1110 => [[['_route' => 'admin_contrat_edit', '_controller' => 'App\\Controller\\AdminController::editBackconrat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1135 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        1169 => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        1189 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1203 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1228 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1240 => [[['_route' => 'admin_employe_new', '_controller' => 'App\\Controller\\EmployeController::newBack'], [], null, null, false, false, null]],
        1274 => [[['_route' => 'admin_employe_show', '_controller' => 'App\\Controller\\EmployeController::showBack'], ['id'], null, null, false, true, null]],
        1291 => [[['_route' => 'admin_employe_edit', '_controller' => 'App\\Controller\\EmployeController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1306 => [[['_route' => 'admin_employe_delete', '_controller' => 'App\\Controller\\EmployeController::deleteBack'], ['id'], null, null, false, false, null]],
        1340 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1354 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1363 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1405 => [[['_route' => 'app_materiellocation_show', '_controller' => 'App\\Controller\\MateriellocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1419 => [[['_route' => 'app_materiellocation_edit', '_controller' => 'App\\Controller\\MateriellocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1428 => [[['_route' => 'app_materiellocation_delete', '_controller' => 'App\\Controller\\MateriellocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1458 => [[['_route' => 'app_materielvente_show', '_controller' => 'App\\Controller\\MaterielventeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1472 => [[['_route' => 'app_materielvente_edit', '_controller' => 'App\\Controller\\MaterielventeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1481 => [[['_route' => 'app_materielvente_delete', '_controller' => 'App\\Controller\\MaterielventeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1500 => [[['_route' => 'materiels_list', '_controller' => 'App\\Controller\\MaterielventeController::showMateriels'], [], null, null, false, false, null]],
        1532 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1546 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1555 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1588 => [[['_route' => 'admin_offre_show', '_controller' => 'App\\Controller\\OffreController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1605 => [[['_route' => 'admin_offre_edit', '_controller' => 'App\\Controller\\OffreController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1620 => [[['_route' => 'admin_offre_delete', '_controller' => 'App\\Controller\\OffreController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        1659 => [[['_route' => 'app_temp_shop_detail', '_controller' => 'App\\Controller\\PageController::tempShopDetail'], ['id'], null, null, false, true, null]],
        1695 => [[['_route' => 'paiement_afficher', '_controller' => 'App\\Controller\\PaiementController::showPaiement'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1715 => [[['_route' => 'paiement_process', '_controller' => 'App\\Controller\\PaiementController::processPaiement'], ['id'], ['POST' => 0], null, false, false, null]],
        1746 => [[['_route' => 'paiement_confirmation', '_controller' => 'App\\Controller\\PaiementController::confirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        1798 => [[['_route' => 'panier_update_quantity', '_controller' => 'App\\Controller\\PanierController::updateQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        1825 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::removeFromCart'], ['id'], ['POST' => 0], null, false, true, null]],
        1864 => [[['_route' => 'app_parcelle_proprietes_show', '_controller' => 'App\\Controller\\ParcelleProprietesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1878 => [[['_route' => 'app_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1887 => [[['_route' => 'app_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\ParcelleProprietesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1934 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
