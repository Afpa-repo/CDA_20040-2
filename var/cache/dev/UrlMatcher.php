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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/groups' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/groups/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/products' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/products/new' => [[['_route' => 'products_new', '_controller' => 'App\\Controller\\ProductsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotions' => [[['_route' => 'promotions_index', '_controller' => 'App\\Controller\\PromotionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotions/new' => [[['_route' => 'promotions_new', '_controller' => 'App\\Controller\\PromotionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/providers' => [[['_route' => 'provider_index', '_controller' => 'App\\Controller\\ProviderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/providers/new' => [[['_route' => 'provider_new', '_controller' => 'App\\Controller\\ProviderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
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
                .'|/c(?'
                    .'|ategories/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|onfirm/([^/]++)(*:240)'
                .')'
                .'|/groups/([^/]++)(?'
                    .'|(*:268)'
                    .'|/edit(*:281)'
                    .'|(*:289)'
                .')'
                .'|/pro(?'
                    .'|ducts/([^/]++)(?'
                        .'|(*:322)'
                        .'|/edit(*:335)'
                        .'|(*:343)'
                    .')'
                    .'|motions/([^/]++)(?'
                        .'|(*:371)'
                        .'|/edit(*:384)'
                        .'|(*:392)'
                    .')'
                    .'|viders/([^/]++)(?'
                        .'|(*:419)'
                        .'|/edit(*:432)'
                        .'|(*:440)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['cat_id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['cat_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['cat_id'], ['DELETE' => 0], null, false, true, null]],
        240 => [[['_route' => 'token_validate', '_controller' => 'App\\Controller\\SecurityController::validateToken'], ['token'], null, null, false, true, null]],
        268 => [[['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['group_id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['group_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['group_id'], ['DELETE' => 0], null, false, true, null]],
        322 => [[['_route' => 'products_show', '_controller' => 'App\\Controller\\ProductsController::show'], ['prod_id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'products_edit', '_controller' => 'App\\Controller\\ProductsController::edit'], ['prod_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'products_delete', '_controller' => 'App\\Controller\\ProductsController::delete'], ['prod_id'], ['DELETE' => 0], null, false, true, null]],
        371 => [[['_route' => 'promotions_show', '_controller' => 'App\\Controller\\PromotionsController::show'], ['promo_id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'promotions_edit', '_controller' => 'App\\Controller\\PromotionsController::edit'], ['promo_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'promotions_delete', '_controller' => 'App\\Controller\\PromotionsController::delete'], ['promo_id'], ['DELETE' => 0], null, false, true, null]],
        419 => [[['_route' => 'provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['prov_siren'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['prov_siren'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [
            [['_route' => 'provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['prov_siren'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
