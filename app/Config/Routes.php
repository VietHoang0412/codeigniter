<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/restaurants', 'Home::restaurants');
// Home -> controller
// restaurants -> hàm trong controller