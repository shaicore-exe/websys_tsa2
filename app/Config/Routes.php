<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('/tasks', 'Pages::tasks');
$routes->get('/profile', 'Pages::profile');
$routes->get('/about', 'Pages::about');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/tasks/new', 'Tasks::createForm');
$routes->post('/tasks/create', 'Tasks::create');

$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1');

$routes->post('/tasks/archive/(:num)', 'Tasks::archive/$1');