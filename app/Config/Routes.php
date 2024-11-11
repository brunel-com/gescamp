<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');


/**
 *  Les sites
 */
$routes->get('/sites', 'SiteController::index');
