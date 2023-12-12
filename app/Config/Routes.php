<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Inner::login');
$routes->get('dashboard', 'Inner::dashboard');
$routes->get('registration', 'Inner::registration');
$routes->get('forgot_password', 'Inner::forgot_password');
$routes->get('recover_password', 'Inner::recover_password');