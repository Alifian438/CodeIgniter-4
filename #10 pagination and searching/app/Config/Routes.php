<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Pages::index'); //routes default atau controller Home dengan method index

$routes->get('/games/create', 'Games::create'); //routes ini digunakan untuk menampilkan view pada url /games/create dengan cara mengambil data pada controller Games pada method create
$routes->get('/games/edit/(:segment)', 'Games::edit/$1'); //routes ini digunakan untuk menampilkan view pada url /games/edit/(;segment) maksud dari segment itu adalah mengambil data parameter pada controller Games method edit.segment itu mewakili $1 jadi ketika url itu dijalankan akan diteruskan ke controller Games moethodnya edit.
$routes->delete('/games/(:num)', 'Games::delete/$1'); //routes ini digunakan untuk menampilkan view pada url /games/(:num) maksud dari num itu adalah mengambil data parameter pada controller Games method delete.num itu mewakili $1 jadi ketika url itu dijalankan akan diteruskan ke controller Games moethodnya edit.(num akan mengambil data hanya berupa angka)
$routes->get('/games/(:any)', 'Games::detail/$1'); //routes ini digunakan untuk menampilkan view sesuai slug atau tombol detail ketika di klik.any itu mewakili $1 jadi ketika url itu dijalankan akan diteruskan ke controller Games moethodnya detail.

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
