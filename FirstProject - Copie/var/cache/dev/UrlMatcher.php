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
        '/evenement/back' => [[['_route' => 'app_evenement_back', '_controller' => 'App\\Controller\\EvenementController::index_back'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/stat' => [[['_route' => 'statistique', '_controller' => 'App\\Controller\\EvenementController::sta'], null, null, null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, null, null, false, false, null]],
        '/listeEvenement' => [[['_route' => 'listeEvenement', '_controller' => 'App\\Controller\\EvenementMobileController::AllEvenement'], null, null, null, false, false, null]],
        '/addEvenementJSON' => [[['_route' => 'addEvenementJSON', '_controller' => 'App\\Controller\\EvenementMobileController::ajouterEvenementJSON'], null, null, null, false, false, null]],
        '/deleteEvenementJSON' => [[['_route' => 'deleteEvenementJSON', '_controller' => 'App\\Controller\\EvenementMobileController::deleteEvenementJSON'], null, null, null, false, false, null]],
        '/updateEvenementJSON' => [[['_route' => 'updateEvenementJSON', '_controller' => 'App\\Controller\\EvenementMobileController::updateEvenementJSON'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/back' => [[['_route' => 'app_reservation_back', '_controller' => 'App\\Controller\\ReservationController::index_back'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|show(*:202)'
                            .'|edit(*:214)'
                            .'|back_edit(*:231)'
                            .'|del(*:242)'
                        .')'
                        .'|(*:251)'
                    .')'
                    .'|likes/([^/]++)(*:274)'
                    .'|dislike/([^/]++)(*:298)'
                .')'
                .'|/showEvenement/([^/]++)(*:330)'
                .'|/reservation/([^/]++)(?'
                    .'|(*:362)'
                    .'|/(?'
                        .'|show(*:378)'
                        .'|edit(*:390)'
                        .'|back_edit(*:407)'
                        .'|del(*:418)'
                    .')'
                    .'|(*:427)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:490)'
                    .'|([A-z0-9_-]*)/(.+)(*:516)'
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
        202 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], null, null, false, false, null]],
        214 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [[['_route' => 'app_evenement_back_edit', '_controller' => 'App\\Controller\\EvenementController::edit_back'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_evenement_delete_back', '_controller' => 'App\\Controller\\EvenementController::delete_back'], ['id'], ['POST' => 0], null, false, false, null]],
        251 => [
            [['_route' => 'app_evenement_back_show', '_controller' => 'App\\Controller\\EvenementController::show_back'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        274 => [[['_route' => 'addLike', '_controller' => 'App\\Controller\\EvenementController::addLikes'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'adddisLike', '_controller' => 'App\\Controller\\EvenementController::adddisLike'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'showEvenement', '_controller' => 'App\\Controller\\EvenementMobileController::ShowEvenement'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_reservation_back_show', '_controller' => 'App\\Controller\\ReservationController::show_back'], ['id'], ['GET' => 0], null, false, false, null]],
        390 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [[['_route' => 'app_reservation_back_edit', '_controller' => 'App\\Controller\\ReservationController::edit_back'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'app_reservation_delete_back', '_controller' => 'App\\Controller\\ReservationController::delete_back'], ['id'], ['POST' => 0], null, false, false, null]],
        427 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        490 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        516 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
