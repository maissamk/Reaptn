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
        '/admin/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/admin/tables' => [[['_route' => 'app_tables', '_controller' => 'App\\Controller\\AdminController::tablesIndex'], null, null, null, false, false, null]],
        '/admin/admin/materielvente/new' => [[['_route' => 'admin_materielvente_new', '_controller' => 'App\\Controller\\AdminController::newmv'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/table' => [[['_route' => 'app_tableslocation', '_controller' => 'App\\Controller\\AdminController::tableslocationIndex'], null, null, null, false, false, null]],
        '/admin/admin/materiellocation/new' => [[['_route' => 'admin_materiellocation_new', '_controller' => 'App\\Controller\\AdminController::newlocation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/parcelle/proprietes' => [[['_route' => 'admin_parcelle_proprietes_index', '_controller' => 'App\\Controller\\AdminController::adminIndex'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/parcelle/proprietes/new' => [[['_route' => 'admin_parcelle_proprietes_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/contrat/new' => [[['_route' => 'admin_contrat_new', '_controller' => 'App\\Controller\\AdminController::newContrat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/contrat' => [[['_route' => 'admin_contrat_index', '_controller' => 'App\\Controller\\AdminController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::listUsers'], null, null, null, false, false, null]],
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
        '/register1' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|([^/]++)/edit(*:231)'
                            .'|materiel/([^/]++)(*:256)'
                            .'|admin/materielvente/([^/]++)(*:292)'
                            .'|([^/]++)/(?'
                                .'|modifier(*:320)'
                                .'|supprimer(*:337)'
                            .')'
                            .'|admin/(?'
                                .'|location/([^/]++)(*:372)'
                                .'|parcelle/proprietes/([^/]++)(?'
                                    .'|(*:411)'
                                    .'|/(?'
                                        .'|edit(*:427)'
                                        .'|delete(*:441)'
                                    .')'
                                .')'
                                .'|contrat/([^/]++)(*:467)'
                            .')'
                            .'|([^/]++)/delete(*:491)'
                            .'|admin/user/(?'
                                .'|edit/([^/]++)(*:526)'
                                .'|delete/([^/]++)(*:549)'
                            .')'
                            .'|pro(?'
                                .'|duct(?'
                                    .'|/(?'
                                        .'|edit/([^/]++)(*:588)'
                                        .'|delete/([^/]++)(*:611)'
                                    .')'
                                    .'|\\-type/(?'
                                        .'|edit/([^/]++)(*:643)'
                                        .'|delete/([^/]++)(*:666)'
                                    .')'
                                .')'
                                .'|file/edit(*:685)'
                            .')'
                            .'|stock/(?'
                                .'|edit/([^/]++)(*:716)'
                                .'|delete/([^/]++)(*:739)'
                            .')'
                            .'|orders/([^/]++)(?'
                                .'|(*:766)'
                                .'|/status(*:781)'
                            .')'
                        .')'
                        .'|admin/([^/]++)/edit(*:810)'
                    .')'
                    .'|jouter/([^/]++)(*:834)'
                .')'
                .'|/co(?'
                    .'|mmande/(?'
                        .'|livraison/([^/]++)/update\\-status(*:892)'
                        .'|paiement/([^/]++)(*:917)'
                        .'|([^/]++)(*:933)'
                        .'|co(?'
                            .'|mmande/([^/]++)/(?'
                                .'|edit(*:969)'
                                .'|delete(*:983)'
                            .')'
                            .'|nfirmation/([^/]++)(*:1011)'
                        .')'
                    .')'
                    .'|ntrat/([^/]++)(?'
                        .'|(*:1039)'
                        .'|/edit(*:1053)'
                        .'|(*:1062)'
                    .')'
                .')'
                .'|/employe/(?'
                    .'|new/([^/]++)(*:1097)'
                    .'|([^/]++)(?'
                        .'|(*:1117)'
                        .'|/edit(*:1131)'
                    .')'
                    .'|delete/([^/]++)(*:1156)'
                    .'|new(*:1168)'
                    .'|admin/employe/([^/]++)(?'
                        .'|(*:1202)'
                        .'|/(?'
                            .'|edit(*:1219)'
                            .'|delete(*:1234)'
                        .')'
                    .')'
                .')'
                .'|/livraison/([^/]++)(?'
                    .'|(*:1268)'
                    .'|/edit(*:1282)'
                    .'|(*:1291)'
                .')'
                .'|/materiel(?'
                    .'|location/([^/]++)(?'
                        .'|(*:1333)'
                        .'|/edit(*:1347)'
                        .'|(*:1356)'
                    .')'
                    .'|vente/(?'
                        .'|([^/]++)(?'
                            .'|(*:1386)'
                            .'|/edit(*:1400)'
                            .'|(*:1409)'
                        .')'
                        .'|materiels(*:1428)'
                    .')'
                .')'
                .'|/offre/(?'
                    .'|([^/]++)(?'
                        .'|(*:1460)'
                        .'|/edit(*:1474)'
                        .'|(*:1483)'
                    .')'
                    .'|admin/offre/([^/]++)(?'
                        .'|(*:1516)'
                        .'|/(?'
                            .'|edit(*:1533)'
                            .'|delete(*:1548)'
                        .')'
                    .')'
                .')'
                .'|/temp/shop\\-detail/([^/]++)(*:1587)'
                .'|/pa(?'
                    .'|iement/(?'
                        .'|([^/]++)(?'
                            .'|(*:1623)'
                            .'|/traitement(*:1643)'
                        .')'
                        .'|confirmation/([^/]++)(*:1674)'
                    .')'
                    .'|nier/(?'
                        .'|mettre\\-a\\-jour\\-quantite/([^/]++)(*:1726)'
                        .'|supprimer/([^/]++)(*:1753)'
                    .')'
                    .'|rcelle/proprietes/([^/]++)(?'
                        .'|(*:1792)'
                        .'|/edit(*:1806)'
                        .'|(*:1815)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1862)'
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
        231 => [[['_route' => 'admin_materielvente_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'admin_materielvente_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_materielvente_aff', '_controller' => 'App\\Controller\\AdminController::afficher'], ['id'], ['GET' => 0], null, false, true, null]],
        320 => [[['_route' => 'admin_materiellocation_edit', '_controller' => 'App\\Controller\\AdminController::editlocation'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'admin_materiellocation_delete', '_controller' => 'App\\Controller\\AdminController::deletelocation'], ['id'], ['POST' => 0], null, false, false, null]],
        372 => [[['_route' => 'admin_materiellocation_aff', '_controller' => 'App\\Controller\\AdminController::afficherlocation'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'admin_parcelle_proprietes_show', '_controller' => 'App\\Controller\\AdminController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'admin_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\AdminController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'admin_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\AdminController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        467 => [[['_route' => 'admin_contrat_show', '_controller' => 'App\\Controller\\AdminController::showBackconrat'], ['id'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'admin_contrat_delete', '_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], ['id'], ['POST' => 0], null, false, false, null]],
        526 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        549 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        588 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\AdminController::editProduct'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\PageController::deleteProduct'], ['id'], null, null, false, true, null]],
        643 => [[['_route' => 'admin_product_type_edit', '_controller' => 'App\\Controller\\AdminController::editProductType'], ['id'], null, null, false, true, null]],
        666 => [[['_route' => 'admin_product_type_delete', '_controller' => 'App\\Controller\\AdminController::deleteProductType'], ['id'], null, null, false, true, null]],
        685 => [[['_route' => 'admin_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfileadmin'], [], null, null, false, false, null]],
        716 => [[['_route' => 'admin_stock_edit', '_controller' => 'App\\Controller\\AdminController::editStock'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'admin_stock_delete', '_controller' => 'App\\Controller\\AdminController::deleteStock'], ['id'], null, null, false, true, null]],
        766 => [[['_route' => 'app_admin_order_detail', '_controller' => 'App\\Controller\\PageController::adminOrderDetail'], ['id'], null, null, false, true, null]],
        781 => [[['_route' => 'app_admin_order_status', '_controller' => 'App\\Controller\\PageController::adminOrderStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        810 => [[['_route' => 'admin_contrat_edit', '_controller' => 'App\\Controller\\AdminController::editBackconrat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        834 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        892 => [[['_route' => 'livraison_update_status', '_controller' => 'App\\Controller\\CommandeController::updateLivraisonStatus'], ['id'], null, null, false, false, null]],
        917 => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\CommandeController::paiement'], ['id'], null, null, false, true, null]],
        933 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        969 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        983 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], null, null, false, false, null]],
        1011 => [[['_route' => 'confirmation_commande', '_controller' => 'App\\Controller\\CommandeController::confirmation'], ['id'], null, null, false, true, null]],
        1039 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1053 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1062 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1097 => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        1117 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1131 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1156 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1168 => [[['_route' => 'admin_employe_new', '_controller' => 'App\\Controller\\EmployeController::newBack'], [], null, null, false, false, null]],
        1202 => [[['_route' => 'admin_employe_show', '_controller' => 'App\\Controller\\EmployeController::showBack'], ['id'], null, null, false, true, null]],
        1219 => [[['_route' => 'admin_employe_edit', '_controller' => 'App\\Controller\\EmployeController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1234 => [[['_route' => 'admin_employe_delete', '_controller' => 'App\\Controller\\EmployeController::deleteBack'], ['id'], null, null, false, false, null]],
        1268 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1282 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1291 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1333 => [[['_route' => 'app_materiellocation_show', '_controller' => 'App\\Controller\\MateriellocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1347 => [[['_route' => 'app_materiellocation_edit', '_controller' => 'App\\Controller\\MateriellocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1356 => [[['_route' => 'app_materiellocation_delete', '_controller' => 'App\\Controller\\MateriellocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1386 => [[['_route' => 'app_materielvente_show', '_controller' => 'App\\Controller\\MaterielventeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1400 => [[['_route' => 'app_materielvente_edit', '_controller' => 'App\\Controller\\MaterielventeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1409 => [[['_route' => 'app_materielvente_delete', '_controller' => 'App\\Controller\\MaterielventeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1428 => [[['_route' => 'materiels_list', '_controller' => 'App\\Controller\\MaterielventeController::showMateriels'], [], null, null, false, false, null]],
        1460 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1474 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1483 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1516 => [[['_route' => 'admin_offre_show', '_controller' => 'App\\Controller\\OffreController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1533 => [[['_route' => 'admin_offre_edit', '_controller' => 'App\\Controller\\OffreController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1548 => [[['_route' => 'admin_offre_delete', '_controller' => 'App\\Controller\\OffreController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        1587 => [[['_route' => 'app_temp_shop_detail', '_controller' => 'App\\Controller\\PageController::tempShopDetail'], ['id'], null, null, false, true, null]],
        1623 => [[['_route' => 'paiement_afficher', '_controller' => 'App\\Controller\\PaiementController::showPaiement'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1643 => [[['_route' => 'paiement_process', '_controller' => 'App\\Controller\\PaiementController::processPaiement'], ['id'], ['POST' => 0], null, false, false, null]],
        1674 => [[['_route' => 'paiement_confirmation', '_controller' => 'App\\Controller\\PaiementController::confirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        1726 => [[['_route' => 'panier_update_quantity', '_controller' => 'App\\Controller\\PanierController::updateQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        1753 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::removeFromCart'], ['id'], ['POST' => 0], null, false, true, null]],
        1792 => [[['_route' => 'app_parcelle_proprietes_show', '_controller' => 'App\\Controller\\ParcelleProprietesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1806 => [[['_route' => 'app_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1815 => [[['_route' => 'app_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\ParcelleProprietesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1862 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
