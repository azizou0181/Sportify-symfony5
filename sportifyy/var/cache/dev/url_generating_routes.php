<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'bro' => [[], ['_controller' => 'App\\Controller\\AdminController::bro'], [], [['text', '/admin/bro']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\AdminController::userlist'], [], [['text', '/admin/list']], [], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/update']], [], [], []],
    'user_search' => [[], ['_controller' => 'App\\Controller\\AdminController::search'], [], [['text', '/admin/search']], [], [], []],
    'user_sort' => [['sortBy', 'sortOrder'], ['sortBy' => 'id', 'sortOrder' => 'asc', '_controller' => 'App\\Controller\\AdminController::afficheC'], ['sortOrder' => '[^/]+'], [['variable', '/', '[^/]+', 'sortOrder', true], ['variable', '/', '[^/]++', 'sortBy', true], ['text', '/admin']], [], [], []],
    'user_statistics' => [[], ['_controller' => 'App\\Controller\\AdminController::statistics'], [], [['text', '/statistics']], [], [], []],
    'app_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], [], []],
    'categorie_add' => [[], ['_controller' => 'App\\Controller\\CategorieController::addCategorie'], [], [['text', '/categorie/addC']], [], [], []],
    'categorie_afficheC' => [[], ['_controller' => 'App\\Controller\\CategorieController::afficheC'], [], [['text', '/categorie/afficheC']], [], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::categorie'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'categorie_update' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/update']], [], [], []],
    'app_produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit']], [], [], []],
    'produit_add' => [[], ['_controller' => 'App\\Controller\\ProduitController::addProduit'], [], [['text', '/produit/addP']], [], [], []],
    'produit_afficheP' => [[], ['_controller' => 'App\\Controller\\ProduitController::afficheP'], [], [['text', '/produit/afficheP']], [], [], []],
    'produit_affichePP' => [[], ['_controller' => 'App\\Controller\\ProduitController::affichePP'], [], [['text', '/produit/affichePP']], [], [], []],
    'produit_afficheCP' => [[], ['_controller' => 'App\\Controller\\ProduitController::afficheCP'], [], [['text', '/produit/afficheCP']], [], [], []],
    'produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::produit'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'produit_update' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit/update']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_register2' => [['id'], ['_controller' => 'App\\Controller\\RegistrationController::register2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/register2']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\SecurityController::home'], [], [['text', '/profile']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'hello' => [[], ['_controller' => 'App\\Controller\\UserController::bro'], [], [['text', '/admin/hello']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'profile_update' => [['id'], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update']], [], [], []],
    'app_user_mobile' => [[], ['_controller' => 'App\\Controller\\UserMobileController::index'], [], [['text', '/user/mobile']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\UserMobileController::getStudents'], [], [['text', '/AllUsers']], [], [], []],
    'user' => [['id'], ['_controller' => 'App\\Controller\\UserMobileController::UserId'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'addUserJSON' => [[], ['_controller' => 'App\\Controller\\UserMobileController::addStudentJSON'], [], [['text', '/addUserJSON/new']], [], [], []],
    'updateUserJSON' => [['id'], ['_controller' => 'App\\Controller\\UserMobileController::updateUserJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateUserJSON']], [], [], []],
    'deleteUserJSON' => [['id'], ['_controller' => 'App\\Controller\\UserMobileController::deleteUserJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteUserJSON']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\SearchController::search'], [], [['text', '/search']], [], [], []],
    'admin_registrations' => [[], ['_controller' => 'App\\Controller\\AdminController::index\''], ['_role' => 'ROLE_ADMIN'], [['text', '/admin/registrations']], [], [], []],
    'admin_registration_approve' => [['id'], ['_controller' => 'App\\Controller\\AdminController::approve\''], ['_role' => 'ROLE_ADMIN'], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/registrations']], [], [], []],
    'admin_registration_reject' => [['id'], ['_controller' => 'App\\Controller\\AdminController::reject\''], ['_role' => 'ROLE_ADMIN'], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/registrations']], [], [], []],
    'statistics' => [[], ['_controller' => 'App\\Controller\\AdminController::statistics'], [], [['text', '/statistics']], [], [], []],
];
