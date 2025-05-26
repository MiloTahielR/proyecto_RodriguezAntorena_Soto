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

//$routes->get('contacto', 'Home::contacto');
//$routes->post('contactos', 'Form::contacto') //en index iria contacto creo

$routes->get('consultas', 'Home::consultas');
$routes->post('consulta_mensaje', 'ConsultaController::add_consulta');

$routes->get('registro_usuario', 'Home::registrarse');
$routes->post('registrar_usuario', 'ConsultaController::add_usuario');

$routes->get('iniciarSesion', 'Home::iniciarSesion');

