<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosotros', 'Home::somos');


$routes->get('comercializacion', 'Home::comerc');
$routes->get('terminos', 'Home::termUso');



$routes->get('consultas', 'Home::consultas');
$routes->post('consulta_mensaje', 'UsuarioController::add_consulta');

$routes->get('registro_usuario', 'Home::registrarse');
$routes->post('registrar_usuario', 'UsuarioController::add_usuario');



$routes->get('login_cliente', 'Home::iniciarSesion');
$routes->post('verificar_usuario', 'UsuarioController::buscar_usuario');
$routes->get('logout', 'UsuarioController::cerrar_sesion');
$routes->get('user_admin', 'UsuarioController::admin');
$routes->get('generar_hash', 'UsuarioController::generar_hash_admin');

$routes->get('agregar', 'ProductosController::form_add_producto');
$routes->post('insertar_prod', 'ProductosController::add_producto');

$routes->get('lista_productos', 'ProductosController::listar_productos');
$routes->get('lista_catalogo', 'ProductosController::listar_catalogo');
$routes->get('lista_consultas', 'UsuarioController::listar_consultas');
$routes->get('lista_ventas', 'VentasController::listar_ventas');

$routes->get('gestionar', 'ProductosController::gestionar_productos');
$routes->get('editar/(:num)', 'ProductosController::editar_productos/$1');
$routes->post('actualizar', 'ProductosController::actualizar_productos');

$routes->get('activar/(:num)', 'ProductosController::activar_productos/$1');
$routes->get('eliminar/(:num)', 'ProductosController::eliminar_productos/$1');


$routes->get('ver_carrito', 'CarritoController::ver_carrito');
$routes->post('add_carrito', 'CarritoController::agregar_carrito');

$routes->get('vaciar_carrito/(:any)', 'CarritoController::eliminar_carrito_all/$1');
$routes->get('eliminar_item/(:any)', 'CarritoController::eliminar_carrito/$1');


$routes->post('guardar_venta', 'CarritoController::guardar_venta');
$routes->get('detalle_venta/(:num)', 'VentasController::detalle_venta/$1');

$routes->get('ver_compras_user', 'VentasController::ver_compras');
$routes->get('mi_perfil', 'UsuarioController::editar_usuario'); 
$routes->post('actualizar_perfil', 'UsuarioController::actualizar_usuario'); 