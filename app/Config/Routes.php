<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosotros', 'Home::somos');

$routes->get('productos', 'Home::productos');
$routes->get('comercializacion', 'Home::comerc');
$routes->get('terminos', 'Home::termUso');
$routes->get('contacto', 'Home::contacto');
$routes->get('consultas', 'Home::consultas');