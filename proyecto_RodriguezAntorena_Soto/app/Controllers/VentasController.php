<?php
namespace App\Controllers;

use App\Models\Productos_Model;
use App\Models\Categoria_Model;
use App\Models\Venta_Model;
use App\Models\Detalle_venta_Model;

class VentasController extends BaseController{

public function listar_ventas(){

  $verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

     $venta_Model = new  Venta_Model();
    $data['venta']= $venta_Model -> findAll();
    $data ['titulo'] = 'Lista de Ventas';
    return view('plantillas/header_view.php', $data).view('plantillas/nav_admin_view.php').view('contenidoAdm/lista_ventas_view.php').view('plantillas\footer_admin_view.php');
}

//Funcion para verificar los usuarios logeados para navegar en las páginas
public function verificarSesion($perfilRequerido = null) {
    $session = session();
    // Verificar si hay sesión iniciada
    if (!$session->has('login_session') || !$session->get('login_session')) {
        return redirect()->route('login_cliente')->with('ingreso_mensaje','Por favor, inicie sesión para continuar.');;
    }
    // Si se pasa un perfil requerido, validar que coincida
    if ($perfilRequerido !== null && $session->get('perfil') != $perfilRequerido) {
        // Redirecciona si no tiene el perfil correcto
        return redirect()->route('/');
    }
    return null;

 }

public function detalle_venta($id_venta)
{
    $detalleModel = new Detalle_venta_Model();
    $productoModel = new Productos_Model();
    $ventaModel = new Venta_Model();

    // Obtiene la venta
    $venta = $ventaModel->find($id_venta);

    // Join entre detalle_ventas y productos para obtener la info completa
    $detalles = $detalleModel->select('detalle_ventas.*, productos.nombre_producto')->join('productos', 'productos.id_producto = detalle_ventas.productos_id')->where('venta_id', $id_venta)->findAll();

    $data = [
        'venta' => $venta,
        'detalles' => $detalles,
        'titulo' => 'Detalle de la Venta'
    ];

    return view('Views/plantillas/header_view.php', $data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/detalle_venta_view.php').view('Views/plantillas/footer_admin_view.php');
}



}
