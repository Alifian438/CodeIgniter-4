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
$routes->get('/', 'Home::index'); //routes default atau controller Home dengan method index
$routes->get('/coba/index', 'Coba::index'); //jika url mengakses /coba/index maka akan menampilkan view yang dijalankan oleh controller Coba dengan method index
$routes->get('/coba/(:any)', 'Coba::nama/$1'); //jika url mengakses /coba/(:any) maka akan menampilkan view yang dijalankan oleh controller Coba dengan method nama dan menginput variabel yang ada di dalam method nama ((:any) itu bisa di isi dengan nama apapun)
$routes->get('/coba1/(:any)/(:num)', 'Coba1::namaUmur/$1/$2'); //jika url mengakses /coba1/(:any)/(:num) maka akan menampilkan view yang dijalankan oleh controller Coba1 dengan method namaUmur dan menginput variabel yang ada di dalam method nama yaitu variabel nama dan umur ((:any) dan itu bisa di isi dengan nama apapun sedangkan (:num) hanya bisa diisi dengan angka)

$routes->get('/users', 'Admin\Users::index'); //routes controller Users di dalam folder admin


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
