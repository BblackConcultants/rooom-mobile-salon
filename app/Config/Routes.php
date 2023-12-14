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
$routes->get('mailbox', 'Inner::mailbox');
$routes->get('compose', 'Inner::compose');
$routes->get('read_message', 'Inner::read_message');
$routes->get('recover_password', 'Inner::recover_password');
$routes->get('active_bookings', 'Inner::active_bookings');
$routes->get('booking_calendar', 'Inner::booking_calendar');
$routes->get('view_booking', 'Inner::view_booking');
$routes->get('historical_bookings', 'Inner::historical_bookings');
$routes->get('historical_booking_details', 'Inner::historical_booking_details');
$routes->get('clients', 'Inner::clients');
$routes->get('client_details', 'Inner::client_details');
$routes->get('hairdressers', 'Inner::hairdressers');
$routes->get('hairdresser_details', 'Inner::hairdresser_details');
$routes->get('administrators', 'Inner::administrators');
$routes->get('administrator_details', 'Inner::administrator_details');
$routes->get('hairdresser_services', 'Inner::hairdresser_services');