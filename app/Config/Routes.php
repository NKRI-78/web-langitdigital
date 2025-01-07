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

$routes->get('/', 'LoginController::index', ['namespace' => 'App\Controllers\Auth']);

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
