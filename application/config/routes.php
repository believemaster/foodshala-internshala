<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Menu
$route['menu'] = 'menu/index';
$route['menu/create'] = 'menu/create';
$route['menu/(:any)'] = 'menu/view/$1';

// Order
$route['orders/(:any)'] = 'orders/index/$1';
$route['place-order'] = 'orders/placeOrder';
$route['orders'] = 'orders/ordered';

$route['all-orders'] = 'orders/allOrders';
$route['confirm/(:any)'] = 'orders/confirm/$1';
$route['cancel/(:any)'] = 'orders/cancel/$1';

// Login
$route['login'] = 'users/login';
$route['signin'] = 'users/signin';

// Register User
$route['register-user'] = 'users/user';
$route['store-user'] = 'users/regUser';

// Register Res
$route['register-restaurant'] = 'users/restaurant';
$route['store-restaurant'] = 'users/regRestaurant';

$route['logout'] = 'users/logout';
