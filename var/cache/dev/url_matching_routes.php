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
        '/newsletters/failed' => [[['_route' => 'failed', '_controller' => 'App\\Controller\\FailedController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/newsletters' => [[['_route' => 'newsletters_home', '_controller' => 'App\\Controller\\NewslettersController::index'], null, null, null, true, false, null]],
        '/newsletters/prepare' => [[['_route' => 'newsletters_prepare', '_controller' => 'App\\Controller\\NewslettersController::prepare'], null, null, null, false, false, null]],
        '/newsletters/list' => [[['_route' => 'newsletters_list', '_controller' => 'App\\Controller\\NewslettersController::list'], null, null, null, false, false, null]],
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
                .'|/newsletters/(?'
                    .'|failed/(?'
                        .'|resend/([^/]++)(*:210)'
                        .'|delete/([^/]++)(*:233)'
                    .')'
                    .'|confirm/([^/]++)/([^/]++)(*:267)'
                    .'|send/([^/]++)(*:288)'
                    .'|unsubscribe/([^/]++)/([^/]++)/([^/]++)(*:334)'
                .')'
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
        210 => [[['_route' => 'newsletters_failed_resend', '_controller' => 'App\\Controller\\FailedController::resend'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'newsletters_failed_delete', '_controller' => 'App\\Controller\\FailedController::delete'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'newsletters_confirm', '_controller' => 'App\\Controller\\NewslettersController::confirm'], ['id', 'token'], null, null, false, true, null]],
        288 => [[['_route' => 'newsletters_send', '_controller' => 'App\\Controller\\NewslettersController::send'], ['id'], null, null, false, true, null]],
        334 => [
            [['_route' => 'newsletters_unsubscribe', '_controller' => 'App\\Controller\\NewslettersController::unsubscribe'], ['id', 'newsletter', 'token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
