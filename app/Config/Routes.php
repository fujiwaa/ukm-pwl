<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::home');
$routes->get('register/mahasiswa', 'Mahasiswa::index');
$routes->post('registermah', 'Mahasiswa::create');
$routes->get('login/mahasiswa', 'Mahasiswa::login');
$routes->post('loginmah', 'Mahasiswa::auth');
$routes->get('logout', 'Home::logout');

$routes->get('register/organisasi', 'Organisasi::index');
$routes->post('registerorg', 'Organisasi::create');
$routes->get('login/organisasi', 'Organisasi::login');
$routes->post('loginorg', 'Organisasi::auth');

$routes->get('profil', 'Profil::index');
$routes->get('ukm', 'Profil::ukm');
$routes->get('himpunan', 'Profil::himpunan');
$routes->get('bso', 'Profil::bso');
$routes->get('komunitas', 'Profil::komunitas');

$routes->get('ukm/amcc', 'Ukm::amcc');
$routes->get('ukm/aec', 'Ukm::aec');
$routes->get('ukm/amo', 'Ukm::amo');
$routes->get('ukm/koma', 'Ukm::koma');
$routes->get('ukm/mayapala', 'Ukm::mayapala');
$routes->get('ukm/ikna', 'Ukm::ikna');
$routes->get('ukm/ukijashtis', 'Ukm::ukijashtis');
$routes->get('ukm/taekwondo', 'Ukm::taekwondo');
$routes->get('ukm/manggar', 'Ukm::manggar');
$routes->get('ukm/fossil', 'Ukm::fossil');
$routes->get('ukm/journal', 'Ukm::journal');
$routes->get('ukm/kempo', 'Ukm::kempo');
$routes->get('ukm/pencaksilat', 'Ukm::pencaksilat');

$routes->get('bso/abbc', 'Bso::abbc');
$routes->get('bso/onegai', 'Bso::onegai');
$routes->get('bso/afc', 'Bso::afc');

$routes->get('himpunan/himaditi', 'Himpunan::himaditi');
$routes->get('himpunan/himasi', 'Himpunan::himasi');
$routes->get('himpunan/himika', 'Himpunan::himika');
$routes->get('himpunan/himmi', 'Himpunan::himmi');
$routes->get('himpunan/himpwk', 'Himpunan::himpwk');
$routes->get('himpunan/himti', 'Himpunan::himti');
$routes->get('himpunan/himwira', 'Himpunan::himwira');
$routes->get('himpunan/hmif', 'Himpunan::hmif');
$routes->get('himpunan/hime', 'Himpunan::hime');
$routes->get('himpunan/himaksi', 'Himpunan::himaksi');
$routes->get('himpunan/himga', 'Himpunan::himga');
$routes->get('himpunan/himtekk', 'Himpunan::himtekk');
$routes->get('himpunan/himip', 'Himpunan::himip');
$routes->get('himpunan/komahi', 'Himpunan::komahi');
$routes->get('himpunan/pastuvena', 'Himpunan::pastuvena');


$routes->get('news', 'News::index');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
