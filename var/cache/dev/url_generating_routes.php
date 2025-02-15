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
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'admin_parcelle_proprietes_index' => [[], ['_controller' => 'App\\Controller\\AdminController::adminIndex'], [], [['text', '/admin/parcelle/proprietes']], [], [], []],
    'admin_parcelle_proprietes_new' => [[], ['_controller' => 'App\\Controller\\AdminController::new'], [], [['text', '/admin/parcelle/proprietes/new']], [], [], []],
    'admin_parcelle_proprietes_show' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showBack'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'admin_parcelle_proprietes_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editBack'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'admin_parcelle_proprietes_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteBack'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'admin_contrat_new' => [[], ['_controller' => 'App\\Controller\\AdminController::newContrat'], [], [['text', '/admin/contrat/new']], [], [], []],
    'admin_contrat_index' => [[], ['_controller' => 'App\\Controller\\AdminController::indexBack'], [], [['text', '/admin/contrat']], [], [], []],
    'admin_contrat_show' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showBackconrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contrat']], [], [], []],
    'admin_contrat_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editBackconrat'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'admin_contrat_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], [], []],
    'app_commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], [], []],
    'app_commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_contrat_index' => [[], ['_controller' => 'App\\Controller\\ContratController::index'], [], [['text', '/contrat']], [], [], []],
    'app_contrat_new' => [[], ['_controller' => 'App\\Controller\\ContratController::new'], [], [['text', '/contrat/new']], [], [], []],
    'app_contrat_show' => [['id'], ['_controller' => 'App\\Controller\\ContratController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_contrat_edit' => [['id'], ['_controller' => 'App\\Controller\\ContratController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_contrat_delete' => [['id'], ['_controller' => 'App\\Controller\\ContratController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_employe_index' => [[], ['_controller' => 'App\\Controller\\EmployeController::index'], [], [['text', '/employe']], [], [], []],
    'app_employe_new' => [[], ['_controller' => 'App\\Controller\\EmployeController::new'], [], [['text', '/employe/new']], [], [], []],
    'app_employe_show' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'app_employe_edit' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'app_employe_delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'app_materiel_index' => [[], ['_controller' => 'App\\Controller\\MaterielController::index'], [], [['text', '/materiel/']], [], [], []],
    'app_materiel_new' => [[], ['_controller' => 'App\\Controller\\MaterielController::new'], [], [['text', '/materiel/new']], [], [], []],
    'app_materiellocation_index' => [[], ['_controller' => 'App\\Controller\\MateriellocationController::index'], [], [['text', '/materiellocation']], [], [], []],
    'app_materiellocation_new' => [[], ['_controller' => 'App\\Controller\\MateriellocationController::new'], [], [['text', '/materiellocation/new']], [], [], []],
    'app_materiellocation_show' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'app_materiellocation_edit' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'app_materiellocation_delete' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'app_materielvente_index' => [[], ['_controller' => 'App\\Controller\\MaterielventeController::index'], [], [['text', '/materielvente']], [], [], []],
    'app_materielvente_new' => [[], ['_controller' => 'App\\Controller\\MaterielventeController::new'], [], [['text', '/materielvente/new']], [], [], []],
    'app_materielvente_show' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'app_materielvente_edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'app_materielvente_delete' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'app_offre_index' => [[], ['_controller' => 'App\\Controller\\OffreController::index'], [], [['text', '/offre']], [], [], []],
    'app_offre_new' => [[], ['_controller' => 'App\\Controller\\OffreController::new'], [], [['text', '/offre/new']], [], [], []],
    'app_offre_show' => [['id'], ['_controller' => 'App\\Controller\\OffreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_offre_edit' => [['id'], ['_controller' => 'App\\Controller\\OffreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_offre_delete' => [['id'], ['_controller' => 'App\\Controller\\OffreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_inscriptionoffre' => [[], ['_controller' => 'App\\Controller\\OffreController::inscriptionoffre'], [], [['text', '/offre/inscriptionoffre']], [], [], []],
    'app_page' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/page']], [], [], []],
    'app_shop' => [[], ['_controller' => 'App\\Controller\\PageController::shop'], [], [['text', '/shop']], [], [], []],
    'app_shop_detail' => [[], ['_controller' => 'App\\Controller\\PageController::shopdetail'], [], [['text', '/shopdetail']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\PageController::cart'], [], [['text', '/cart']], [], [], []],
    'app_chackout' => [[], ['_controller' => 'App\\Controller\\PageController::chackout'], [], [['text', '/chackout']], [], [], []],
    'app_testimonial' => [[], ['_controller' => 'App\\Controller\\PageController::testimonial'], [], [['text', '/testimonial']], [], [], []],
    'app_404' => [[], ['_controller' => 'App\\Controller\\PageController::error'], [], [['text', '/404']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\PageController::contact'], [], [['text', '/contact']], [], [], []],
    'app_offre' => [[], ['_controller' => 'App\\Controller\\PageController::offre'], [], [['text', '/offre']], [], [], []],
    'app_parcelle_proprietes_index' => [[], ['_controller' => 'App\\Controller\\ParcelleProprietesController::index'], [], [['text', '/parcelle/proprietes']], [], [], []],
    'app_parcelle_proprietes_new' => [[], ['_controller' => 'App\\Controller\\ParcelleProprietesController::new'], [], [['text', '/parcelle/proprietes/new']], [], [], []],
    'app_parcelle_proprietes_show' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'app_parcelle_proprietes_edit' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'app_parcelle_proprietes_delete' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::adminIndex' => [[], ['_controller' => 'App\\Controller\\AdminController::adminIndex'], [], [['text', '/admin/parcelle/proprietes']], [], [], []],
    'App\Controller\AdminController::new' => [[], ['_controller' => 'App\\Controller\\AdminController::new'], [], [['text', '/admin/parcelle/proprietes/new']], [], [], []],
    'App\Controller\AdminController::showBack' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showBack'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'App\Controller\AdminController::editBack' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editBack'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'App\Controller\AdminController::deleteBack' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteBack'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcelle/proprietes']], [], [], []],
    'App\Controller\AdminController::newContrat' => [[], ['_controller' => 'App\\Controller\\AdminController::newContrat'], [], [['text', '/admin/contrat/new']], [], [], []],
    'App\Controller\AdminController::admincontratIndex' => [[], ['_controller' => 'App\\Controller\\AdminController::indexBack'], [], [['text', '/admin/contrat']], [], [], []],
    'App\Controller\AdminController::showBackconrat' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showBackconrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contrat']], [], [], []],
    'App\Controller\AdminController::editBackconrat' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editBackconrat'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\AdminController::deleteBackconrat' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteBackconrat'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'App\Controller\CommandeController::index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande']], [], [], []],
    'App\Controller\CommandeController::new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], [], []],
    'App\Controller\CommandeController::show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'App\Controller\CommandeController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'App\Controller\CommandeController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'App\Controller\ContratController::index' => [[], ['_controller' => 'App\\Controller\\ContratController::index'], [], [['text', '/contrat']], [], [], []],
    'App\Controller\ContratController::new' => [[], ['_controller' => 'App\\Controller\\ContratController::new'], [], [['text', '/contrat/new']], [], [], []],
    'App\Controller\ContratController::show' => [['id'], ['_controller' => 'App\\Controller\\ContratController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'App\Controller\ContratController::edit' => [['id'], ['_controller' => 'App\\Controller\\ContratController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'App\Controller\ContratController::delete' => [['id'], ['_controller' => 'App\\Controller\\ContratController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'App\Controller\EmployeController::index' => [[], ['_controller' => 'App\\Controller\\EmployeController::index'], [], [['text', '/employe']], [], [], []],
    'App\Controller\EmployeController::new' => [[], ['_controller' => 'App\\Controller\\EmployeController::new'], [], [['text', '/employe/new']], [], [], []],
    'App\Controller\EmployeController::show' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'App\Controller\EmployeController::edit' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'App\Controller\EmployeController::delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe']], [], [], []],
    'App\Controller\MaterielController::index' => [[], ['_controller' => 'App\\Controller\\MaterielController::index'], [], [['text', '/materiel/']], [], [], []],
    'App\Controller\MaterielController::new' => [[], ['_controller' => 'App\\Controller\\MaterielController::new'], [], [['text', '/materiel/new']], [], [], []],
    'App\Controller\MateriellocationController::index' => [[], ['_controller' => 'App\\Controller\\MateriellocationController::index'], [], [['text', '/materiellocation']], [], [], []],
    'App\Controller\MateriellocationController::new' => [[], ['_controller' => 'App\\Controller\\MateriellocationController::new'], [], [['text', '/materiellocation/new']], [], [], []],
    'App\Controller\MateriellocationController::show' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'App\Controller\MateriellocationController::edit' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'App\Controller\MateriellocationController::delete' => [['id'], ['_controller' => 'App\\Controller\\MateriellocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiellocation']], [], [], []],
    'App\Controller\MaterielventeController::index' => [[], ['_controller' => 'App\\Controller\\MaterielventeController::index'], [], [['text', '/materielvente']], [], [], []],
    'App\Controller\MaterielventeController::new' => [[], ['_controller' => 'App\\Controller\\MaterielventeController::new'], [], [['text', '/materielvente/new']], [], [], []],
    'App\Controller\MaterielventeController::show' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'App\Controller\MaterielventeController::edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'App\Controller\MaterielventeController::delete' => [['id'], ['_controller' => 'App\\Controller\\MaterielventeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materielvente']], [], [], []],
    'App\Controller\OffreController::index' => [[], ['_controller' => 'App\\Controller\\OffreController::index'], [], [['text', '/offre']], [], [], []],
    'App\Controller\OffreController::new' => [[], ['_controller' => 'App\\Controller\\OffreController::new'], [], [['text', '/offre/new']], [], [], []],
    'App\Controller\OffreController::show' => [['id'], ['_controller' => 'App\\Controller\\OffreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'App\Controller\OffreController::edit' => [['id'], ['_controller' => 'App\\Controller\\OffreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'App\Controller\OffreController::delete' => [['id'], ['_controller' => 'App\\Controller\\OffreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'App\Controller\OffreController::inscriptionoffre' => [[], ['_controller' => 'App\\Controller\\OffreController::inscriptionoffre'], [], [['text', '/offre/inscriptionoffre']], [], [], []],
    'App\Controller\PageController::index' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/page']], [], [], []],
    'App\Controller\PageController::shop' => [[], ['_controller' => 'App\\Controller\\PageController::shop'], [], [['text', '/shop']], [], [], []],
    'App\Controller\PageController::shopdetail' => [[], ['_controller' => 'App\\Controller\\PageController::shopdetail'], [], [['text', '/shopdetail']], [], [], []],
    'App\Controller\PageController::cart' => [[], ['_controller' => 'App\\Controller\\PageController::cart'], [], [['text', '/cart']], [], [], []],
    'App\Controller\PageController::chackout' => [[], ['_controller' => 'App\\Controller\\PageController::chackout'], [], [['text', '/chackout']], [], [], []],
    'App\Controller\PageController::testimonial' => [[], ['_controller' => 'App\\Controller\\PageController::testimonial'], [], [['text', '/testimonial']], [], [], []],
    'App\Controller\PageController::error' => [[], ['_controller' => 'App\\Controller\\PageController::error'], [], [['text', '/404']], [], [], []],
    'App\Controller\PageController::contact' => [[], ['_controller' => 'App\\Controller\\PageController::contact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\PageController::offre' => [[], ['_controller' => 'App\\Controller\\PageController::offre'], [], [['text', '/offre']], [], [], []],
    'App\Controller\ParcelleProprietesController::index' => [[], ['_controller' => 'App\\Controller\\ParcelleProprietesController::index'], [], [['text', '/parcelle/proprietes']], [], [], []],
    'App\Controller\ParcelleProprietesController::new' => [[], ['_controller' => 'App\\Controller\\ParcelleProprietesController::new'], [], [['text', '/parcelle/proprietes/new']], [], [], []],
    'App\Controller\ParcelleProprietesController::show' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'App\Controller\ParcelleProprietesController::edit' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'App\Controller\ParcelleProprietesController::delete' => [['id'], ['_controller' => 'App\\Controller\\ParcelleProprietesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/parcelle/proprietes']], [], [], []],
    'App\Controller\UtilisateurController::index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'App\Controller\UtilisateurController::show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
];
