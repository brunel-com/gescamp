<?php

use CodeIgniter\Router\RouteCollection;


/**
 * Authentification - Login et Register
 */
service('auth')->routes($routes);

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
 * Feature etudiant
 * 
 */
$routes->get('/etudiants', 'EtudiantController::index', ['as' => 'etudiants.index']);
$routes->get('/etudiants/create', 'EtudiantController::create_view', ['as' => 'etudiants.create_view']);
$routes->post('/etudiants/create', 'EtudiantController::create', ['as' => 'etudiants.create']);
$routes->get('/etudiants/update', 'EtudiantController::update_view', ['as' => 'etudiants.update_view']);
$routes->post('/etudiants/update', 'EtudiantController::update', ['as' => 'etudiants.update']);
