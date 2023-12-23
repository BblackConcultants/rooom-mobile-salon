<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Inner::login');
$routes->get('about', 'Home::about');
$routes->get('gallery', 'Home::gallery');
$routes->get('services', 'Home::services');
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
$routes->get('service_details', 'Inner::service_details');
$routes->get('nail_services', 'Inner::nail_services');
$routes->get('nail_service_details', 'Inner::nail_service_details');
$routes->get('profile', 'Inner::profile');
$routes->get('active_clients', 'Inner::active_clients');
$routes->get('new_service', 'Inner::new_service');
$routes->get('booking_details', 'Inner::booking_details');
$routes->get('historical_clients', 'Inner::historical_clients');
$routes->get('historical_client_details', 'Inner::historical_client_details');
$routes->get('hairdresser_availability', 'Inner::hairdresser_availability');
$routes->get('booking_processing', 'Inner::booking_processing');
$routes->get('booking_process', 'Inner::booking_process');
$routes->get('user_management', 'Inner::user_management');
$routes->get('new_user', 'Inner::new_user');
$routes->get('view_user', 'Inner::view_user');
$routes->get('user_roles', 'Inner::user_roles');