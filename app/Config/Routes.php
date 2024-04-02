<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\FormController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('form', [FormController::class, 'index']);
$routes->post('save', [FormController::class, 'store']);
$routes->post('eliminar', [FormController::class, 'eliminar']);
//$routes->get('/eliminar/(:any)', 'FormController::eliminar/$1');
$routes->post('/actualizar',[FormController::class, 'actualizar']);
$routes->get('/obtenerNombre/(:any)', 'FormController::obtenerNombre/$1');
