<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\FormController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('form', [FormController::class, 'index']);
$routes->post('save', [FormController::class, 'store']);
