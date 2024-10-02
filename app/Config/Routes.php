<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/electronic', 'Home::electronic');


$routes->group('control', function($routes) {
    $routes->get('', 'ControlController::index');
    $routes->get('create-product', 'ControlController::createProduct');
    $routes->get('edit-product/(:num)', 'ControlController::editProduct/$1');
});
