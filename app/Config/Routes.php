<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');


/**
 *  Les sites
 */
$routes->get('/sites', 'SiteController::index', ['as' => 'sites.index']);
$routes->get('/sites/create', 'SiteController::create_view', ['as' => 'sites.create_view']);
$routes->post('/sites/create', 'SiteController::create', ['as' => 'sites.create']);
$routes->get('/sites/update', 'SiteController::update_view', ['as' => 'sites.update_view']);
$routes->post('/sites/update', 'SiteController::update', ['as' => 'sites.update']);
$routes->get('/sites/delete', 'SiteController::delete', ['as' => 'sites.delete_view']);
$routes->post('/sites/delete', 'SiteController::delete', ['as' => 'sites.delete']);

/**
 * Fonctionnalité chambres
 * 
 */
$routes->get('/chambres', 'ChambreController::index', ['as' => 'chambres.index']);
$routes->get('/chambres/create', 'ChambreController::create_view', ['as' => 'chambres.create_view']);
$routes->post('/chambres/create', 'ChambreController::create', ['as' => 'chambres.create']);
$routes->get('/chambres/update', 'ChambreController::update_view', ['as' => 'chambres.update_view']);
$routes->post('/chambres/update', 'ChambreController::update', ['as' => 'chambres.update']);
$routes->get('/chambres/delete', 'ChambreController::delete', ['as' => 'chambres.delete_view']);
$routes->post('/chambres/delete', 'ChambreController::delete', ['as' => 'chambres.delete']);


/**
 * User
 */
$routes->get('/login', 'UserController::login_view', ['as' => 'auth.login_view']);
$routes->post('/login', 'UserController::login', ['as' => 'auth.login']);