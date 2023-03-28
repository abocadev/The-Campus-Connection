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
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Auth\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Auth\\LoginController::logout'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\Auth\\RegistrationController::index'], null, null, null, false, false, null]],
        '/companies' => [[['_route' => 'app_companies', '_controller' => 'App\\Controller\\Companies\\CompanyController::index'], null, null, null, false, false, null]],
        '/my-company/create' => [[['_route' => 'app__create_company', '_controller' => 'App\\Controller\\Companies\\CreateCompanyController::index'], null, null, null, false, false, null]],
        '/my-company' => [[['_route' => 'app_my_company', '_controller' => 'App\\Controller\\Companies\\MyCompanyController::index'], null, null, null, false, false, null]],
        '/my-company/edit' => [[['_route' => 'app_my_company_edit', '_controller' => 'App\\Controller\\Companies\\MyCompanyController::edit'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/my-offers' => [[['_route' => 'app_my_offers', '_controller' => 'App\\Controller\\Offers\\Company\\MyOffersController::index'], null, null, null, false, false, null]],
        '/my-offers/create' => [[['_route' => 'app_offers_create_offers', '_controller' => 'App\\Controller\\Offers\\CreateOffersController::index'], null, null, null, false, false, null]],
        '/offers' => [[['_route' => 'app_offers', '_controller' => 'App\\Controller\\Offers\\OffersController::index'], null, null, null, false, false, null]],
        '/permission/denied' => [[['_route' => 'app_permission_denied', '_controller' => 'App\\Controller\\PermissionDeniedController::index'], null, null, null, false, false, null]],
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
                .'|/offers/([^/]++)(*:185)'
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
        185 => [
            [['_route' => 'app_individual_offer', '_controller' => 'App\\Controller\\Offers\\OffersController::offer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
