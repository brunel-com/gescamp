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


/**
 * Fonctionnalité chambres
 * 
 */
$routes->get('/chambres', 'ChambreController::index', ['as' => 'chambres.index']);
$routes->get('/chambres/create', 'ChambreController::create_view', ['as' => 'chambres.create']);
$routes->post('/chambres/create', 'ChambreController::create', ['as' => 'chambres.store']);
