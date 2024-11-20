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
$routes->get('/chambres/delete', 'ChambreController::delete_view', ['as' => 'chambres.delete_view']);
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
$routes->get('/etudiants/delete', 'EtudiantController::delete_view', ['as' => 'etudiants.delete_view']);
$routes->post('/etudiants/delete', 'EtudiantController::delete', ['as' => 'etudiants.delete']);

/**
 * Feature equipements
 */
$routes->get('/equipements', 'EquipementController::index', ['as' => 'equipements.index']);
$routes->get('/equipements/create', 'EquipementController::create_view', ['as' => 'equipements.create_view']);
$routes->post('/equipements/create', 'EquipementController::create', ['as' => 'equipements.create']);
$routes->get('/equipements/update', 'EquipementController::update_view', ['as' => 'equipements.update_view']);
$routes->post('/equipements/update', 'EquipementController::update', ['as' => 'equipements.update']);
$routes->get('/equipements/delete', 'EquipementController::delete_view', ['as' => 'equipements.delete_view']);
$routes->post('/equipements/delete', 'EquipementController::delete', ['as' => 'equipements.delete']);
