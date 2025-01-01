<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/electronic', 'Home::electronic');
$routes->get('login', 'Home::login');
$routes->get('register', 'Home::register');

$routes->post('/reg', 'UserController::register');
$routes->post('/log', 'UserController::login');
$routes->post('cart/(:num)', 'UserController::addToCart/$1');
$routes->get('payment/call', 'UserController::callback');
$routes->post('payment/(:num)', 'UserController::process_payment/$1');

$routes->group('control', function($routes) {
    $routes->get('', 'ControlController::index');
    $routes->get('create-product', 'ControlController::createProduct');
    $routes->post('store-prod', 'ControlController::storeProduct');
    $routes->get('edit-product/(:num)', 'ControlController::editProduct/$1');
    $routes->post('update-product/(:num)', 'ControlController::updateProduct/$1');
    $routes->get('delete-prod/(:num)', 'ControlController::deleteProduct/$1');
});
