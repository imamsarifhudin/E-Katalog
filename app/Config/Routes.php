<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/','FrontendController::index');

$routes->get('/', 'User::index');
$routes->get('/user', 'User::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->get('dashboard', 'DashboardController::index', ['as' => 'dashboard_list']);
$routes->get('/dashboard/(:num)', 'DashboardController::detail/$1');


$routes->get('produk', 'ProdukController::index', ['as' => 'produk_list']);
$routes->get('produk/create', 'ProdukController::create', ['as' => 'produk_create']);
$routes->post('produk/store', 'ProdukController::store', ['as' => 'produk_store']);
$routes->get('produk/edit/(:num)', 'ProdukController::edit/$1', ['as' => 'produk_edit']);
$routes->put('produk/(:num)', 'ProdukController::update/$1', ['as' => 'produk_update']);
$routes->get('produk/delete/(:num)', 'ProdukController::delete/$1', ['as' => 'produk_delete']);

$routes->get('kategori', 'KategoriController::index', ['as' => 'kategori_list']);
$routes->get('kategori/create', 'KategoriController::create', ['as' => 'kategori_create']);
$routes->post('kategori/store', 'KategoriController::store', ['as' => 'kategori_store']);
$routes->get('kategori/edit/(:num)', 'KategoriController::edit/$1', ['as' => 'kategori_edit']);
$routes->put('kategori/(:num)', 'KategoriController::update/$1', ['as' => 'kategori_update']);
$routes->get('kategori/delete/(:num)', 'KategoriController::delete/$1', ['as' => 'kategori_delete']);

$routes->get('merek', 'MerekController::index', ['as' => 'merek_list']);
$routes->get('merek/create', 'MerekController::create', ['as' => 'merek_create']);
$routes->post('merek/store', 'MerekController::store', ['as' => 'merek_store']);
$routes->get('merek/edit/(:num)', 'MerekController::edit/$1', ['as' => 'merek_edit']);
$routes->put('merek/(:num)', 'MerekController::update/$1', ['as' => 'merek_update']);
$routes->get('merek/delete/(:num)', 'MerekController::delete/$1', ['as' => 'merek_delete']);