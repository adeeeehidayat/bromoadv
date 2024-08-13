<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('paket', 'Paket::index');
$routes->get('view360', 'View360::index');
$routes->get('booking', 'Booking::index');
$routes->get('signup', 'Signup::index');
$routes->get('login', 'Login::index');
$routes->get('profile', 'Profile::index');
$routes->post('booking/simpan', 'Booking::simpan');
$routes->post('signup/create', 'Signup::create');
$routes->post('login/masuk', 'Login::masuk');
$routes->post('profile/update', 'Profile::update');
$routes->get('profile/logout', 'Profile::logout');
$routes->post('profile/uploadPhoto', 'Profile::uploadPhoto');
$routes->get('prosespesanan', 'Prosespesanan::index');
$routes->get('successpayment', 'Successpayment::index');

