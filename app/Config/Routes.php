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
$routes->get('/chambres/create', 'ChambreController::create_view', ['as' => 'chambres.createv']);
$routes->post('/chambres/create', 'ChambreController::create', ['as' => 'chambres.create']);
$routes->get('/chambres/update', 'ChambreController::update_view', ['as' => 'chambres.updatev']);
$routes->post('/chambres/update', 'ChambreController::update', ['as' => 'chambres.update']);
$routes->get('/chambres/delete', 'ChambreController::delete', ['as' => 'chambres.deletev']);
$routes->post('/chambres/delete', 'ChambreController::delete', ['as' => 'chambres.delete']);
