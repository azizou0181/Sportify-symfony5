<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/bro' => [[['_route' => 'bro', '_controller' => 'App\\Controller\\AdminController::bro'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\AdminController::userlist'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\AdminController::search'], null, null, null, false, false, null]],
        '/statistics' => [
            [['_route' => 'user_statistics', '_controller' => 'App\\Controller\\AdminController::statistics'], null, null, null, false, false, null],
            [['_route' => 'statistics', '_controller' => 'App\\Controller\\AdminController::statistics'], null, ['GET' => 0], null, false, false, null],
        ],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/categorie/addC' => [[['_route' => 'categorie_add', '_controller' => 'App\\Controller\\CategorieController::addCategorie'], null, null, null, false, false, null]],
        '/categorie/afficheC' => [[['_route' => 'categorie_afficheC', '_controller' => 'App\\Controller\\CategorieController::afficheC'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produit/addP' => [[['_route' => 'produit_add', '_controller' => 'App\\Controller\\ProduitController::addProduit'], null, null, null, false, false, null]],
        '/produit/afficheP' => [[['_route' => 'produit_afficheP', '_controller' => 'App\\Controller\\ProduitController::afficheP'], null, null, null, false, false, null]],
        '/produit/affichePP' => [[['_route' => 'produit_affichePP', '_controller' => 'App\\Controller\\ProduitController::affichePP'], null, null, null, false, false, null]],
        '/produit/afficheCP' => [[['_route' => 'produit_afficheCP', '_controller' => 'App\\Controller\\ProduitController::afficheCP'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/mobile' => [[['_route' => 'app_user_mobile', '_controller' => 'App\\Controller\\UserMobileController::index'], null, null, null, false, false, null]],
        '/AllUsers' => [[['_route' => 'list', '_controller' => 'App\\Controller\\UserMobileController::getStudents'], null, null, null, false, false, null]],
        '/addUserJSON/new' => [[['_route' => 'addUserJSON', '_controller' => 'App\\Controller\\UserMobileController::addStudentJSON'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)/delete(*:23)'
                .'|/admin(?'
                    .'|/update/([^/]++)(*:55)'
                    .'|(?:/([^/]++)(?:/([^/]+))?)?(*:89)'
                    .'|/(?'
                        .'|hello(*:105)'
                        .'|registrations(?'
                            .'|(*:129)'
                            .'|/([^/]++)/(?'
                                .'|approve(*:157)'
                                .'|reject(*:171)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/categorie/(?'
                    .'|([^/]++)/delete(*:212)'
                    .'|update/([^/]++)(*:235)'
                .')'
                .'|/produit/(?'
                    .'|([^/]++)/delete(*:271)'
                    .'|update/([^/]++)(*:294)'
                .')'
                .'|/register2/([^/]++)(*:322)'
                .'|/u(?'
                    .'|pdate(?'
                        .'|/([^/]++)(*:352)'
                        .'|UserJSON/([^/]++)(*:377)'
                    .')'
                    .'|ser/([^/]++)(*:398)'
                .')'
                .'|/deleteUserJSON/([^/]++)(*:431)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:467)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, false, null]],
        55 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'user_sort', 'sortBy' => 'id', 'sortOrder' => 'asc', '_controller' => 'App\\Controller\\AdminController::afficheC'], ['sortBy', 'sortOrder'], null, null, false, true, null]],
        105 => [[['_route' => 'hello', '_controller' => 'App\\Controller\\UserController::bro'], [], null, null, false, false, null]],
        129 => [[['_route' => 'admin_registrations', '_controller' => 'App\\Controller\\AdminController::index\''], [], ['GET' => 0], null, false, false, null]],
        157 => [[['_route' => 'admin_registration_approve', '_controller' => 'App\\Controller\\AdminController::approve\''], ['id'], ['GET' => 0], null, false, false, null]],
        171 => [[['_route' => 'admin_registration_reject', '_controller' => 'App\\Controller\\AdminController::reject\''], ['id'], ['GET' => 0], null, false, false, null]],
        212 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::categorie'], ['id'], null, null, false, false, null]],
        235 => [[['_route' => 'categorie_update', '_controller' => 'App\\Controller\\CategorieController::update'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::produit'], ['id'], null, null, false, false, null]],
        294 => [[['_route' => 'produit_update', '_controller' => 'App\\Controller\\ProduitController::update'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'app_register2', '_controller' => 'App\\Controller\\RegistrationController::register2'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'profile_update', '_controller' => 'App\\Controller\\UserController::profile'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'updateUserJSON', '_controller' => 'App\\Controller\\UserMobileController::updateUserJSON'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserMobileController::UserId'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'deleteUserJSON', '_controller' => 'App\\Controller\\UserMobileController::deleteUserJSON'], ['id'], null, null, false, true, null]],
        467 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];