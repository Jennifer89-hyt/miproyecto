<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . "Config/Routes.php")) {
    require SYSTEMPATH . "Config/Routes.php";
}

$routes->setDefaultNamespace("App\Controllers");
$routes->setDefaultController("Home");
$routes->setDefaultMethod("index");
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('tasks', 'Tasks::index');
$routes->get('tasks/show/(:num)', 'Tasks::show/$1');  


