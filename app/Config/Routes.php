<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/packages', 'Packages::index');
$routes->get('/contact', 'Contact::index');

// $routes->get('/packages', 'Packages::index');
$routes->get('/packages/view/(:num)', 'Packages::view/$1');