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
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categories/new' => [[['_route' => 'categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/groups' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/groups/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/new' => [[['_route' => 'products_new', '_controller' => 'App\\Controller\\ProductsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotions/new' => [[['_route' => 'promotions_new', '_controller' => 'App\\Controller\\PromotionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/providers/new' => [[['_route' => 'provider_new', '_controller' => 'App\\Controller\\ProviderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, false, false, null]],
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
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:193)'
                        .'|remove/([^/]++)(*:216)'
                    .')'
                    .'|tegories/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                .')'
                .'|/groups/([^/]++)(?'
                    .'|(*:295)'
                    .'|/edit(*:308)'
                    .'|(*:316)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:337)'
                    .'|/edit(*:350)'
                    .'|(*:358)'
                .')'
                .'|/pro(?'
                    .'|motions(?'
                        .'|(*:384)'
                        .'|/([^/]++)(?'
                            .'|(*:404)'
                            .'|/edit(*:417)'
                            .'|(*:425)'
                        .')'
                    .')'
                    .'|viders(?'
                        .'|(*:444)'
                        .'|/([^/]++)(?'
                            .'|(*:464)'
                            .'|/edit(*:477)'
                            .'|(*:485)'
                        .')'
                    .')'
                .')'
                .'|/log(?'
                    .'|in(*:505)'
                    .'|out(?'
                        .'|(*:519)'
                    .')'
                .')'
                .'|/register(*:538)'
                .'|/confirm/([^/]++)(*:563)'
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
        193 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['cat_id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['cat_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['cat_id'], ['DELETE' => 0], null, false, true, null]],
        295 => [[['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['group_id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['group_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['group_id'], ['DELETE' => 0], null, false, true, null]],
        337 => [[['_route' => 'products_show', '_controller' => 'App\\Controller\\ProductsController::show'], ['prod_id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'products_edit', '_controller' => 'App\\Controller\\ProductsController::edit'], ['prod_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'products_delete', '_controller' => 'App\\Controller\\ProductsController::delete'], ['prod_id'], ['DELETE' => 0], null, false, true, null]],
        384 => [[['_route' => 'promotions_index', '_controller' => 'App\\Controller\\PromotionsController::index'], [], ['GET' => 0], null, true, false, null]],
        404 => [[['_route' => 'promotions_show', '_controller' => 'App\\Controller\\PromotionsController::show'], ['promo_id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'promotions_edit', '_controller' => 'App\\Controller\\PromotionsController::edit'], ['promo_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'promotions_delete', '_controller' => 'App\\Controller\\PromotionsController::delete'], ['promo_id'], ['DELETE' => 0], null, false, true, null]],
        444 => [[['_route' => 'provider_index', '_controller' => 'App\\Controller\\ProviderController::index'], [], ['GET' => 0], null, true, false, null]],
        464 => [[['_route' => 'provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['prov_siren'], ['GET' => 0], null, false, true, null]],
        477 => [[['_route' => 'provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['prov_siren'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        485 => [[['_route' => 'provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['prov_siren'], ['DELETE' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        519 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [['_route' => 'logout'], [], null, null, false, false, null],
        ],
        538 => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], [], null, null, false, false, null]],
        563 => [
            [['_route' => 'token_validate', '_controller' => 'App\\Controller\\SecurityController::validateToken'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
