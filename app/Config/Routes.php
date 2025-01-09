<?php

namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers\Init');
$routes->setDefaultController('InitController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('init', 'InitController::index', ['namespace' => 'App\Controllers\Init']);

$routes->get('/', 'HomeController::index', ['namespace' => 'App\Controllers']);
$routes->get('tentangKami', 'AboutUsController::index', ['namespace' => 'App\Controllers']);
$routes->get('cms', 'CmsController::index', ['namespace' => 'App\Controllers']);

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
