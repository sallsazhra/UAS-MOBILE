<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//routes untuk bendahara
$routes->get('transaksi','TransaksiController::index');
$routes->get('transaksi/(:num)','TransaksiController::show/$1');
$routes->post('transaksi','TransaksiController::create');
$routes->put('transaksi/(:num)','TransaksiController::update/$1');
$routes->delete('transaksi/(:num)','TransaksiController::delete/$1');

//routes untuk kepala sekolah
$routes->get('headmaster','HeadmasterController::index');

//routes untuk siswa
$routes->get('siswa/(:num)','SiswaController::show/$1');

