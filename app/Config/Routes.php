<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

$routes->get('/', 'Frontend::home');
$routes->get('/blkk', 'Frontend::home');
$routes->get('/blkk/profil', 'Frontend::profil');
$routes->get('/blkk/pelatihan', 'Frontend::pelatihan');
$routes->get('/blkk/galeri', 'Galeri::index');
$routes->get('/blkk/kontak', 'Frontend::kontak');
$routes->get('/blkk/berita', 'Berita::index');
$routes->get('/blkk/berita/(:any)', 'Berita::viewBerita/$1');
$routes->get('/blkk/pendaftaran', 'Pendaftaran::create');
$routes->post('/blkk/pendaftaran/store', 'Pendaftaran::store');

$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/login/logout', 'Login::logout');

$routes->get('/backend/dashboard', 'Backend::dashboard');

$routes->get('/backend/pendaftaran', 'PendaftaranBackend::index');
$routes->get('/backend/pendaftaran/detail/(:num)', 'PendaftaranBackend::detail/$1');
$routes->get('/backend/pendaftaran/create', 'PendaftaranBackend::create');
$routes->post('/backend/pendaftaran/store', 'PendaftaranBackend::store');
$routes->get('/backend/pendaftaran/edit/(:num)', 'PendaftaranBackend::edit/$1');
$routes->post('/backend/pendaftaran/update/(:num)', 'PendaftaranBackend::update/$1');
$routes->get('/backend/pendaftaran/delete/(:num)', 'PendaftaranBackend::delete/$1');
$routes->get('/backend/pendaftaran/export', 'PendaftaranBackend::export');

$routes->get('/backend/berita', 'BeritaBackend::index');
$routes->get('/backend/berita/create', 'BeritaBackend::create');
$routes->post('/backend/berita/store', 'BeritaBackend::store');
$routes->get('/backend/berita/edit/(:num)', 'BeritaBackend::edit/$1');
$routes->post('/backend/berita/update/(:num)', 'BeritaBackend::update/$1');
$routes->get('/backend/berita/delete/(:num)', 'BeritaBackend::delete/$1');

$routes->get('/backend/galeri','GaleriBackend::index');
$routes->add('/backend/galeri/create', 'GaleriBackend::create');
$routes->add('/backend/galeri/store', 'GaleriBackend::store');
$routes->get('/backend/galeri/delete/(:num)', 'GaleriBackend::delete/$1');

$routes->get('/backend/users', 'Users::index');
$routes->get('/backend/users/create', 'Users::create');
$routes->post('/backend/users/store', 'Users::store');
$routes->get('/backend/users/delete/(:num)', 'Users::delete/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
