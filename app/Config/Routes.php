<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//   /restaurants => tên đường dẫn tự đặt
/// Home => Controller
/// ::restaurants => hàm trong controller
//nhánh main -> sửa nhánh main
///asdasdsad
$routes->get('/restaurants', 'Home::restaurants');
$routes->group('admin',function($routes){
    $routes->get('login','admin\login::index');
    $routes->get('dashboard','admin\dashboard::index');
});
