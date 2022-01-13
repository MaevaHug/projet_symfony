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
        '/admin/utilisateurs' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::usersList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ingredients' => [[['_route' => 'admin_ingredients', '_controller' => 'App\\Controller\\AdminController::ingredientsList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/ingredient/ajouter' => [[['_route' => 'admin_ingredient_add', '_controller' => 'App\\Controller\\AdminController::addIngredient'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\AdminController::categoriesList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorie/ajouter' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\AdminController::addCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/unites' => [[['_route' => 'admin_unities', '_controller' => 'App\\Controller\\AdminController::unitiesList'], null, ['GET' => 0], null, false, false, null]],
        '/admin/unite/ajouter' => [[['_route' => 'admin_unity_add', '_controller' => 'App\\Controller\\AdminController::addUnity'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/recettes' => [[['_route' => 'admin_recipes', '_controller' => 'App\\Controller\\AdminController::recipesList'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PublicController::index'], null, ['GET' => 0], null, false, false, null]],
        '/recettes' => [[['_route' => 'recipe_list', '_controller' => 'App\\Controller\\PublicController::recipeList'], null, ['GET' => 0], null, false, false, null]],
        '/recherche' => [[['_route' => 'recipe_search', '_controller' => 'App\\Controller\\PublicController::recipeListByFilter'], null, ['GET' => 0], null, false, false, null]],
        '/categories' => [[['_route' => 'category_list', '_controller' => 'App\\Controller\\PublicController::categoryList'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/mon-compte' => [
            [['_route' => 'security_login_valid', '_controller' => 'App\\Controller\\SecurityController::validLogin'], null, null, null, false, false, null],
            [['_route' => 'user_my_account', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null],
        ],
        '/déconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mon-compte/mes-recettes' => [[['_route' => 'user_owner_recipes', '_controller' => 'App\\Controller\\UserController::showOwnerRecipes'], null, ['GET' => 0], null, false, false, null]],
        '/mon-compte/mes-favoris' => [[['_route' => 'user_liked_recipes', '_controller' => 'App\\Controller\\UserController::showLikedRecipes'], null, ['GET' => 0], null, false, false, null]],
        '/mon-compte/nouvelle-recette' => [[['_route' => 'user_recipe_add', '_controller' => 'App\\Controller\\UserController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|u(?'
                        .'|tilisateur/(?'
                            .'|modifier/([^/]++)(*:213)'
                            .'|supprimer/([^/]++)(*:239)'
                        .')'
                        .'|nite/(?'
                            .'|modifier/([^/]++)(*:273)'
                            .'|supprimer/([^/]++)(*:299)'
                        .')'
                    .')'
                    .'|ingredient/(?'
                        .'|modifier/([^/]++)(*:340)'
                        .'|supprimer/([^/]++)(*:366)'
                    .')'
                    .'|categorie/(?'
                        .'|modifier/([^/]++)(*:405)'
                        .'|supprimer/([^/]++)(*:431)'
                    .')'
                    .'|recette/supprimer/([^/]++)(*:466)'
                .')'
                .'|/categorie/([^/]++)(*:494)'
                .'|/recette/([^/]++)(*:519)'
                .'|/mon\\-compte/(?'
                    .'|([^/]++)/modifier(*:560)'
                    .'|rec(?'
                        .'|ette/supprimer/([^/]++)(*:597)'
                        .'|ipe/([^/]++)/like(*:622)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        213 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        239 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'admin_unity_edit', '_controller' => 'App\\Controller\\AdminController::editUnity'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'admin_unity_delete', '_controller' => 'App\\Controller\\AdminController::deleteUnity'], ['id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'admin_ingredient_edit', '_controller' => 'App\\Controller\\AdminController::editIngredient'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        366 => [[['_route' => 'admin_ingredient_delete', '_controller' => 'App\\Controller\\AdminController::deleteIngredient'], ['id'], ['POST' => 0], null, false, true, null]],
        405 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\AdminController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        431 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'admin_recipe_delete', '_controller' => 'App\\Controller\\AdminController::deleteRecipe'], ['id'], ['POST' => 0], null, false, true, null]],
        494 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\PublicController::showRecipeByCategory'], ['slug'], ['GET' => 0], null, false, true, null]],
        519 => [[['_route' => 'recipe_show', '_controller' => 'App\\Controller\\PublicController::showOneRecipe'], ['slug'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'user_recipe_update', '_controller' => 'App\\Controller\\UserController::update'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'user_recipe_delete', '_controller' => 'App\\Controller\\UserController::deleteRecipe'], ['id'], ['POST' => 0], null, false, true, null]],
        622 => [
            [['_route' => 'user_recipe_like', '_controller' => 'App\\Controller\\UserController::like'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
