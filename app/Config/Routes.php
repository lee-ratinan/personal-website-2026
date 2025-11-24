<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('whatsapp', 'Home::whatsapp');
$routes->get('{locale}/', 'Home::index');
$routes->get('/', 'Home::index');