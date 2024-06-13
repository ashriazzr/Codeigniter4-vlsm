<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'IpCalculator::index');
$routes->get('/enterName', 'IpCalculator::enterName');
$routes->post('/mainPage', 'IpCalculator::mainPage');
$routes->post('/inputNetworks', 'IpCalculator::inputNetworks');
$routes->post('/calculate', 'IpCalculator::calculate');
