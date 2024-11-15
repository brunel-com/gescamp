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
$routes->get('/chambres', 'ChambreController::index');
$routes->get('/chambres/create', 'ChambreController::create');
