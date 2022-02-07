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
$routes->setDefaultController('Login');
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

// route mahasiswa start
$routes->get('/', 'Mahasiswa::login');
// $routes->get('/mahasiswa/create','Mahasiswa::create');
$routes->get('/mahasiswa/edit/(:segment)','Mahasiswa::edit/$1');
$routes->get('/mahasiswa/(:num)','Mahasiswa::detail/$1');
// $routes->delete('/mahasiswa/(:num)','Mahasiswa::delete/$1');
// route mahasiswa end

// route buku start
$routes->get('/buku/create','Buku::create');
$routes->get('/buku/edit/(:segment)','Buku::edit/$1');
$routes->get('/buku/(:num)','Buku::detail/$1');
$routes->delete('/buku/(:num)','Buku::delete/$1');
// route buku end

//route admin start
$routes->get('/admin/create','Admin::create');
$routes->get('/admin/transaksi','Admin::transaksi');
$routes->get('/admin/edit/(:segment)','Admin::edit_admin/$1');
$routes->get('/admin/mahasiswa/edit/(:segment)','Admin::edit_mahasiswa/$1');
$routes->get('/admin/(:num)','Admin::detail_admin/$1');
$routes->get('/admin/mahasiswa/(:num)','Admin::detail_mahasiswa/$1');
$routes->delete('/admin/(:num)','Admin::delete/$1');
//route admin end
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
