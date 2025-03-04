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
        '/admin/product' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::indexproduit'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\AdminController::products'], null, null, null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\AdminController::newProduct'], null, null, null, false, false, null]],
        '/admin/product-types' => [[['_route' => 'admin_product_types', '_controller' => 'App\\Controller\\AdminController::productTypes'], null, null, null, false, false, null]],
        '/admin/product-type/new' => [[['_route' => 'admin_product_type_new', '_controller' => 'App\\Controller\\AdminController::newProductType'], null, null, null, false, false, null]],
        '/admin/stocks' => [[['_route' => 'admin_stocks', '_controller' => 'App\\Controller\\AdminController::stocks'], null, null, null, false, false, null]],
        '/admin/stock/new' => [[['_route' => 'admin_stock_new', '_controller' => 'App\\Controller\\AdminController::newStock'], null, null, null, false, false, null]],
        '/admin/admin/materielagricole/stats' => [[['_route' => 'admin_materielagricole_stats', '_controller' => 'App\\Controller\\AdminController::showStats'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/admin/employe' => [[['_route' => 'admin_employe_index', '_controller' => 'App\\Controller\\EmployeController::indexBack'], null, null, null, false, false, null]],
        '/face-login' => [[['_route' => 'face_login', '_controller' => 'App\\Controller\\FaceLoginController::faceLogin'], null, null, null, false, false, null]],
        '/save_captured_image' => [[['_route' => 'save_captured_image', '_controller' => 'App\\Controller\\FaceLoginController::saveCapturedImage'], null, ['POST' => 0], null, false, false, null]],
        '/face-recognition' => [[['_route' => 'face_recognition', '_controller' => 'App\\Controller\\FaceRecognitionController::index'], null, null, null, false, false, null]],
        '/upload_image' => [[['_route' => 'upload_image', '_controller' => 'App\\Controller\\FaceRecognitionController::uploadImage'], null, ['POST' => 0], null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/livraison/new' => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, null, null, true, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, null, null, false, false, null]],
        '/materiellocation' => [[['_route' => 'app_materiellocation_index', '_controller' => 'App\\Controller\\MateriellocationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/materiellocation/new' => [[['_route' => 'app_materiellocation_new', '_controller' => 'App\\Controller\\MateriellocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materielvente' => [[['_route' => 'app_materielvente_index', '_controller' => 'App\\Controller\\MaterielventeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/materielvente/new' => [[['_route' => 'app_materielvente_new', '_controller' => 'App\\Controller\\MaterielventeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login/google' => [[['_route' => 'google_login', '_controller' => 'App\\Controller\\OAuth2Controller::googleLogin'], null, null, null, false, false, null]],
        '/login/google/callback' => [[['_route' => 'google_callback', '_controller' => 'App\\Controller\\OAuth2Controller::googleCallback'], null, null, null, false, false, null]],
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
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\SecurityController::connectGoogle'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\SecurityController::connectGoogleCheck'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/complete-profile' => [[['_route' => 'complete_profile', '_controller' => 'App\\Controller\\SecurityController::completeProfile'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|([^/]++)/edit1(*:232)'
                            .'|materiel/([^/]++)(*:257)'
                            .'|admin/materielvente/([^/]++)(*:293)'
                            .'|([^/]++)/(?'
                                .'|modifier(*:321)'
                                .'|supprimer(*:338)'
                            .')'
                            .'|admin/(?'
                                .'|location/([^/]++)(*:373)'
                                .'|parcelle/proprietes/([^/]++)(?'
                                    .'|(*:412)'
                                    .'|/(?'
                                        .'|edit(*:428)'
                                        .'|delete(*:442)'
                                    .')'
                                .')'
                                .'|contrat/([^/]++)(*:468)'
                            .')'
                            .'|([^/]++)/delete(*:492)'
                            .'|product(?'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:527)'
                                    .'|delete/([^/]++)(*:550)'
                                .')'
                                .'|\\-type/(?'
                                    .'|edit/([^/]++)(*:582)'
                                    .'|delete/([^/]++)(*:605)'
                                .')'
                            .')'
                            .'|stock/(?'
                                .'|edit/([^/]++)(*:637)'
                                .'|delete/([^/]++)(*:660)'
                            .')'
                            .'|orders/([^/]++)(?'
                                .'|(*:687)'
                                .'|/status(*:702)'
                            .')'
                            .'|user/(?'
                                .'|edit/([^/]++)(*:732)'
                                .'|delete/([^/]++)(*:755)'
                            .')'
                        .')'
                        .'|admin/([^/]++)/edit1(*:785)'
                    .')'
                    .'|jouter/([^/]++)(*:809)'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:843)'
                        .'|/edit(*:856)'
                        .'|(*:864)'
                    .')'
                    .'|o(?'
                        .'|mmande/(?'
                            .'|livraison/([^/]++)/update\\-status(*:920)'
                            .'|paiement/([^/]++)(*:945)'
                            .'|([^/]++)(*:961)'
                            .'|co(?'
                                .'|mmande/([^/]++)/(?'
                                    .'|edit(*:997)'
                                    .'|delete(*:1011)'
                                .')'
                                .'|nfirmation/([^/]++)(*:1040)'
                            .')'
                        .')'
                        .'|ntrat/(?'
                            .'|new(?:/([^/]++))?(*:1077)'
                            .'|([^/]++)(?'
                                .'|(*:1097)'
                                .'|/edit(*:1111)'
                                .'|(*:1120)'
                            .')'
                            .'|contrat/([^/]++)/download(*:1155)'
                            .'|([^/]++)/signature(*:1182)'
                        .')'
                    .')'
                .')'
                .'|/employe/(?'
                    .'|new/([^/]++)(*:1218)'
                    .'|([^/]++)(?'
                        .'|(*:1238)'
                        .'|/edit(*:1252)'
                    .')'
                    .'|delete/([^/]++)(*:1277)'
                    .'|new(*:1289)'
                    .'|admin/employe/([^/]++)(?'
                        .'|(*:1323)'
                        .'|/(?'
                            .'|edit(*:1340)'
                            .'|delete(*:1355)'
                        .')'
                    .')'
                .')'
                .'|/livraison/([^/]++)(?'
                    .'|(*:1389)'
                    .'|/edit(*:1403)'
                    .'|(*:1412)'
                .')'
                .'|/m(?'
                    .'|ateriel(?'
                        .'|location/([^/]++)(?'
                            .'|(*:1457)'
                            .'|/edit(*:1471)'
                            .'|(*:1480)'
                        .')'
                        .'|vente/(?'
                            .'|materielvente/([^/]++)(*:1521)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1546)'
                                .'|(*:1555)'
                            .')'
                            .'|materiel(?'
                                .'|s(*:1577)'
                                .'|vente/([^/]++)/download(*:1609)'
                            .')'
                            .'|search(*:1625)'
                            .'|([^/]++)/analyze(*:1650)'
                        .')'
                    .')'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1713)'
                        .'|([A-z0-9_-]*)/(.+)(*:1740)'
                    .')'
                .')'
                .'|/offre/(?'
                    .'|([^/]++)(?'
                        .'|(*:1772)'
                        .'|/edit(*:1786)'
                        .'|(*:1795)'
                    .')'
                    .'|admin/offre/([^/]++)(?'
                        .'|(*:1828)'
                        .'|/(?'
                            .'|edit(*:1845)'
                            .'|delete(*:1860)'
                        .')'
                    .')'
                .')'
                .'|/temp/shop\\-detail/([^/]++)(*:1899)'
                .'|/pa(?'
                    .'|iement/(?'
                        .'|([^/]++)(?'
                            .'|(*:1935)'
                            .'|/traitement(*:1955)'
                        .')'
                        .'|confirmation/([^/]++)(*:1986)'
                    .')'
                    .'|nier/(?'
                        .'|mettre\\-a\\-jour\\-quantite/([^/]++)(*:2038)'
                        .'|supprimer/([^/]++)(*:2065)'
                    .')'
                    .'|rcelle/proprietes/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|confirm(?'
                                    .'|(*:2121)'
                                    .'|\\-delete(*:2138)'
                                .')'
                                .'|edit(*:2152)'
                            .')'
                            .'|(*:2162)'
                        .')'
                        .'|parcelles/type/([^/]++)(*:2195)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:2242)'
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
        232 => [[['_route' => 'admin_materielvente_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'admin_materielvente_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_materielvente_aff', '_controller' => 'App\\Controller\\AdminController::afficher'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'admin_materiellocation_edit', '_controller' => 'App\\Controller\\AdminController::editlocation'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        338 => [[['_route' => 'admin_materiellocation_delete', '_controller' => 'App\\Controller\\AdminController::deletelocation'], ['id'], ['POST' => 0], null, false, false, null]],
        373 => [[['_route' => 'admin_materiellocation_aff', '_controller' => 'App\\Controller\\AdminController::afficherlocation'], ['id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'admin_parcelle_proprietes_show', '_controller' => 'App\\Controller\\AdminController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        428 => [[['_route' => 'admin_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\AdminController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'admin_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\AdminController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        468 => [[['_route' => 'admin_contrat_show', '_controller' => 'App\\Controller\\AdminController::showBackconrat'], ['id'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'admin_contrat_delete', '_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], ['id'], ['POST' => 0], null, false, false, null]],
        527 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\AdminController::editProduct'], ['id'], null, null, false, true, null]],
        550 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\PageController::deleteProduct'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'admin_product_type_edit', '_controller' => 'App\\Controller\\AdminController::editProductType'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'admin_product_type_delete', '_controller' => 'App\\Controller\\AdminController::deleteProductType'], ['id'], null, null, false, true, null]],
        637 => [[['_route' => 'admin_stock_edit', '_controller' => 'App\\Controller\\AdminController::editStock'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'admin_stock_delete', '_controller' => 'App\\Controller\\AdminController::deleteStock'], ['id'], null, null, false, true, null]],
        687 => [[['_route' => 'app_admin_order_detail', '_controller' => 'App\\Controller\\PageController::adminOrderDetail'], ['id'], null, null, false, true, null]],
        702 => [[['_route' => 'app_admin_order_status', '_controller' => 'App\\Controller\\PageController::adminOrderStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        732 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\UserAdminController::editUser'], ['id'], null, null, false, true, null]],
        755 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserAdminController::deleteUser'], ['id'], null, null, false, true, null]],
        785 => [[['_route' => 'admin_contrat_edit', '_controller' => 'App\\Controller\\AdminController::editBackconrat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        809 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        843 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        856 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        864 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        920 => [[['_route' => 'livraison_update_status', '_controller' => 'App\\Controller\\CommandeController::updateLivraisonStatus'], ['id'], null, null, false, false, null]],
        945 => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\CommandeController::paiement'], ['id'], null, null, false, true, null]],
        961 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        997 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], null, null, false, false, null]],
        1011 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], null, null, false, false, null]],
        1040 => [[['_route' => 'confirmation_commande', '_controller' => 'App\\Controller\\CommandeController::confirmation'], ['id'], null, null, false, true, null]],
        1077 => [[['_route' => 'app_contrat_new', 'id' => null, '_controller' => 'App\\Controller\\ContratController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1097 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1111 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1120 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1155 => [[['_route' => 'contrat_download', '_controller' => 'App\\Controller\\ContratController::download'], ['id'], ['GET' => 0], null, false, false, null]],
        1182 => [[['_route' => 'app_contrat_signature', '_controller' => 'App\\Controller\\ContratController::signature'], ['id'], ['GET' => 0], null, false, false, null]],
        1218 => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        1238 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1252 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1277 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1289 => [[['_route' => 'admin_employe_new', '_controller' => 'App\\Controller\\EmployeController::newBack'], [], null, null, false, false, null]],
        1323 => [[['_route' => 'admin_employe_show', '_controller' => 'App\\Controller\\EmployeController::showBack'], ['id'], null, null, false, true, null]],
        1340 => [[['_route' => 'admin_employe_edit', '_controller' => 'App\\Controller\\EmployeController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1355 => [[['_route' => 'admin_employe_delete', '_controller' => 'App\\Controller\\EmployeController::deleteBack'], ['id'], null, null, false, false, null]],
        1389 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1403 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1412 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1457 => [[['_route' => 'app_materiellocation_show', '_controller' => 'App\\Controller\\MateriellocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1471 => [[['_route' => 'app_materiellocation_edit', '_controller' => 'App\\Controller\\MateriellocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1480 => [[['_route' => 'app_materiellocation_delete', '_controller' => 'App\\Controller\\MateriellocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1521 => [[['_route' => 'app_materielvente_show', '_controller' => 'App\\Controller\\MaterielventeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1546 => [[['_route' => 'app_materielvente_edit', '_controller' => 'App\\Controller\\MaterielventeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1555 => [[['_route' => 'app_materielvente_delete', '_controller' => 'App\\Controller\\MaterielventeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1577 => [[['_route' => 'materiels_list', '_controller' => 'App\\Controller\\MaterielventeController::showMateriels'], [], ['GET' => 0], null, false, false, null]],
        1609 => [[['_route' => 'app_materielvente_download_pdf', '_controller' => 'App\\Controller\\MaterielventeController::downloadPdf'], ['id'], null, null, false, false, null]],
        1625 => [[['_route' => 'app_materielvente_search', '_controller' => 'App\\Controller\\MaterielventeController::search'], [], ['GET' => 0], null, false, false, null]],
        1650 => [[['_route' => 'analyze_image', '_controller' => 'App\\Controller\\MaterielventeController::analyze'], ['id'], ['POST' => 0], null, false, false, null]],
        1713 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1740 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        1772 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1786 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1795 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1828 => [[['_route' => 'admin_offre_show', '_controller' => 'App\\Controller\\OffreController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1845 => [[['_route' => 'admin_offre_edit', '_controller' => 'App\\Controller\\OffreController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1860 => [[['_route' => 'admin_offre_delete', '_controller' => 'App\\Controller\\OffreController::deleteBack'], ['id'], ['POST' => 0], null, false, false, null]],
        1899 => [[['_route' => 'app_temp_shop_detail', '_controller' => 'App\\Controller\\PageController::tempShopDetail'], ['id'], null, null, false, true, null]],
        1935 => [[['_route' => 'paiement_afficher', '_controller' => 'App\\Controller\\PaiementController::showPaiement'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1955 => [[['_route' => 'paiement_process', '_controller' => 'App\\Controller\\PaiementController::processPaiement'], ['id'], ['POST' => 0], null, false, false, null]],
        1986 => [[['_route' => 'paiement_confirmation', '_controller' => 'App\\Controller\\PaiementController::confirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        2038 => [[['_route' => 'panier_update_quantity', '_controller' => 'App\\Controller\\PanierController::updateQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        2065 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::removeFromCart'], ['id'], ['POST' => 0], null, false, true, null]],
        2121 => [[['_route' => 'app_parcelle_proprietes_confirm', '_controller' => 'App\\Controller\\ParcelleProprietesController::confirm'], ['id'], ['GET' => 0], null, false, false, null]],
        2138 => [[['_route' => 'app_parcelle_proprietes_delete', '_controller' => 'App\\Controller\\ParcelleProprietesController::confirmDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        2152 => [[['_route' => 'app_parcelle_proprietes_edit', '_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2162 => [[['_route' => 'app_parcelle_proprietes_show', '_controller' => 'App\\Controller\\ParcelleProprietesController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2195 => [[['_route' => 'parcelles_par_type', '_controller' => 'App\\Controller\\ParcelleProprietesController::parcellesParType'], ['type_terrain'], ['GET' => 0], null, false, true, null]],
        2242 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
