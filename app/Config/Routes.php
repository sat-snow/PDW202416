<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// http://localhost/LoginTA/Formulario
$routes->get('/Formulario','CFormularios::MMostrarForm');
