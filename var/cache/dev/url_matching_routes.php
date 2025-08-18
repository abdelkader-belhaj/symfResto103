<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\AuthController::register'], null, null, null, false, false, null]],
        '/register/submit' => [[['_route' => 'app_register_submit', '_controller' => 'App\\Controller\\AuthController::registerSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/login/submit' => [[['_route' => 'app_login_submit', '_controller' => 'App\\Controller\\AuthController::loginSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/admin/chefs' => [[['_route' => 'chefs_list', '_controller' => 'App\\Controller\\ChefController::index'], null, null, null, false, false, null]],
        '/admin/chefs/create' => [[['_route' => 'chefs_create', '_controller' => 'App\\Controller\\ChefController::create'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contacts/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, null, null, false, false, null]],
        '/contact/front/submit' => [[['_route' => 'front_contact_submit', '_controller' => 'App\\Controller\\ContactController::submitFrontContact'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false, false, null]],
        '/gallery/new' => [[['_route' => 'gallery_new', '_controller' => 'App\\Controller\\GalleryController::new'], null, null, null, false, false, null]],
        '/home/menu' => [[['_route' => 'app_menus_home', '_controller' => 'App\\Controller\\HomeController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front_index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/menus' => [[['_route' => 'firebase_menu_index', '_controller' => 'App\\Controller\\MenuFirebaseController::index'], null, null, null, false, false, null]],
        '/menus/add' => [[['_route' => 'firebase_menu_add', '_controller' => 'App\\Controller\\MenuFirebaseController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/menuComande' => [[['_route' => 'commande_menu_index', '_controller' => 'App\\Controller\\MenuFirebaseController::menuComande'], null, null, null, false, false, null]],
        '/menuC' => [[['_route' => 'app_menu_commande', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\OrderController::adminOrders'], null, null, null, false, false, null]],
        '/api/orders' => [[['_route' => 'api_create_order', '_controller' => 'App\\Controller\\OrderController::createOrder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/orders/new' => [[['_route' => 'admin_new_order', '_controller' => 'App\\Controller\\OrderController::newOrder'], null, null, null, false, false, null]],
        '/partties' => [[['_route' => 'app_partties_index', '_controller' => 'App\\Controller\\ParttiesController::index'], null, null, null, false, false, null]],
        '/partties/create' => [[['_route' => 'app_partties_create', '_controller' => 'App\\Controller\\ParttiesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/specialee' => [[['_route' => 'special_index', '_controller' => 'App\\Controller\\SpecialController::index'], null, null, null, false, false, null]],
        '/special/new' => [[['_route' => 'special_new', '_controller' => 'App\\Controller\\SpecialController::new'], null, null, null, false, false, null]],
        '/specialss' => [[['_route' => 'speciale_index', '_controller' => 'App\\Controller\\SpecialController::indexww'], null, null, null, false, false, null]],
        '/tables' => [[['_route' => 'firebase_table_index', '_controller' => 'App\\Controller\\TableFirebaseController::index'], null, null, null, true, false, null]],
        '/tables/new' => [[['_route' => 'firebase_table_new', '_controller' => 'App\\Controller\\TableFirebaseController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|chefs/(?'
                        .'|edit/([^/]++)(*:74)'
                        .'|delete/([^/]++)(*:96)'
                    .')'
                    .'|orders/([^/]++)/(?'
                        .'|status(*:129)'
                        .'|delete(*:143)'
                    .')'
                .')'
                .'|/contacts/([^/]++)(?'
                    .'|(*:174)'
                    .'|/(?'
                        .'|edit(*:190)'
                        .'|delete(*:204)'
                    .')'
                .')'
                .'|/gallery/([^/]++)(?'
                    .'|(*:234)'
                    .'|/(?'
                        .'|edit(*:250)'
                        .'|delete(*:264)'
                    .')'
                .')'
                .'|/menus/(?'
                    .'|edit/([^/]++)(*:297)'
                    .'|delete/([^/]++)(*:320)'
                .')'
                .'|/partties/(?'
                    .'|edit/([^/]++)(*:355)'
                    .'|update/([^/]++)(*:378)'
                    .'|delete/([^/]++)(*:401)'
                .')'
                .'|/special/([^/]++)(?'
                    .'|(*:430)'
                    .'|/(?'
                        .'|edit(*:446)'
                        .'|delete(*:460)'
                    .')'
                .')'
                .'|/tables/([^/]++)(?'
                    .'|(*:489)'
                    .'|/(?'
                        .'|edit(*:505)'
                        .'|delete(*:519)'
                        .'|status(*:533)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'chefs_edit', '_controller' => 'App\\Controller\\ChefController::edit'], ['key'], null, null, false, true, null]],
        96 => [[['_route' => 'chefs_delete', '_controller' => 'App\\Controller\\ChefController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        129 => [[['_route' => 'admin_update_order_status', '_controller' => 'App\\Controller\\OrderController::updateOrderStatus'], ['orderId'], ['POST' => 0], null, false, false, null]],
        143 => [[['_route' => 'admin_delete_order', '_controller' => 'App\\Controller\\OrderController::deleteOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        174 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['key'], null, null, false, true, null]],
        190 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['key'], null, null, false, false, null]],
        204 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        234 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['key'], null, null, false, true, null]],
        250 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GalleryController::edit'], ['key'], null, null, false, false, null]],
        264 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GalleryController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        297 => [[['_route' => 'firebase_menu_edit', '_controller' => 'App\\Controller\\MenuFirebaseController::edit'], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        320 => [[['_route' => 'firebase_menu_delete', '_controller' => 'App\\Controller\\MenuFirebaseController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_partties_edit', '_controller' => 'App\\Controller\\ParttiesController::edit'], ['key'], null, null, false, true, null]],
        378 => [[['_route' => 'app_partties_update', '_controller' => 'App\\Controller\\ParttiesController::update'], ['key'], ['POST' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_partties_delete', '_controller' => 'App\\Controller\\ParttiesController::delete'], ['key'], null, null, false, true, null]],
        430 => [[['_route' => 'special_show', '_controller' => 'App\\Controller\\SpecialController::show'], ['key'], null, null, false, true, null]],
        446 => [[['_route' => 'special_edit', '_controller' => 'App\\Controller\\SpecialController::edit'], ['key'], null, null, false, false, null]],
        460 => [[['_route' => 'special_delete', '_controller' => 'App\\Controller\\SpecialController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        489 => [[['_route' => 'firebase_table_show', '_controller' => 'App\\Controller\\TableFirebaseController::show'], ['key'], null, null, false, true, null]],
        505 => [[['_route' => 'firebase_table_edit', '_controller' => 'App\\Controller\\TableFirebaseController::edit'], ['key'], null, null, false, false, null]],
        519 => [[['_route' => 'firebase_table_delete', '_controller' => 'App\\Controller\\TableFirebaseController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        533 => [
            [['_route' => 'admin_update_table_status', '_controller' => 'App\\Controller\\TableFirebaseController::updateStatus'], ['tableId'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
