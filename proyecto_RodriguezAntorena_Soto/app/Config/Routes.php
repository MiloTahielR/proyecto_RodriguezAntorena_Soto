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
$routes->post('consulta_mensaje', 'UsuarioController::add_consulta');

$routes->get('registro_usuario', 'Home::registrarse');
$routes->post('registrar_usuario', 'UsuarioController::add_usuario');


//$routes->post('inicio_sesion', 'UsuarioController::buscar_usuario');
$routes->get('login_cliente', 'Home::iniciarSesion');
$routes->post('verificar_usuario', 'UsuarioController::buscar_usuario');
$routes->get('logout', 'UsuarioController::cerrar_sesion');
$routes->post('user_admin', 'UsuarioController::admin');




