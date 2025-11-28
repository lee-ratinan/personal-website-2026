<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('whatsapp', 'Home::whatsapp');
$routes->get('personal-life', 'Home::personal_life');
$routes->get('business-card', 'Home::business_card');
$routes->get('{locale}/personal-life', 'Home::personal_life');
$routes->get('{locale}/', 'Home::index');
$routes->get('/', 'Home::index');