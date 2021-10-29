<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/choose-user', 'Home::choose_user');

// Pelapor
$routes->get('/pelapor/sign-in', 'Pelapor\Login::index', ['filter' => 'auth_not_login_pelapor']);
$routes->get('/pelapor', 'Pelapor\Dashboard::index', ['filter' => 'auth_pelapor']);

// End Pelapor


// Personil
$routes->get('/personil/sign-in', 'Personil\Login::index', ['filter' => 'auth_not_login_personil']);
$routes->get('/personil/sign-up', 'Personil\Login::sign_up', ['filter' => 'auth_not_login_personil']);
$routes->post('/personil/create-account', 'Personil\Login::sign_up_account', ['filter' => 'auth_not_login_personil']);
$routes->post('/personil/auth-login-personil', 'Personil\Login::auth', ['filter' => 'auth_not_login_personil']);
$routes->get('/personil/lupa-password', 'Personil\Login::lupa_password', ['filter' => 'auth_not_login_personil']);
$routes->get('/personil/reset-password/(:any)', 'Personil\Login::reset_password/$1', ['filter' => 'auth_not_login_personil']);
$routes->get('/personil', 'Personil\Dashboard::index', ['filter' => 'auth_personil']);

$routes->get('/personil/logout', 'Logout::personil', ['filter' => 'auth_personil']);

// End Personil


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
