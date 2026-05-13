<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('whatsapp', 'Home::whatsapp');
$routes->get('personal-life', 'Home::personal_life');
$routes->get('certifications', 'Home::certifications');
$routes->get('writing', 'Home::writing');
$routes->get('business-card', 'Home::business_card');
$routes->get('calendar', 'Home::calendar');
$routes->get('blog', 'Home::blog');
$routes->get('{locale}/personal-life', 'Home::personal_life');
$routes->get('{locale}/certifications', 'Home::certifications');
$routes->get('{locale}/writing', 'Home::writing');
$routes->get('{locale}/calendar', 'Home::calendar');
$routes->get('{locale}/blog', 'Home::blog');
$routes->get('{locale}/', 'Home::index');
$routes->get('/', 'Home::index');