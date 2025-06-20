<?php
namespace App\Controllers;

use App\Models\Productos_Model;
use App\Models\Categoria_Model;
use App\Models\Venta_Model;
use App\Models\Detalle_venta_Model;

class CarritoController extends BaseController{
 

//  <!-- FUNCION VER CARRITO-->
   
    public function ver_carrito(){
         $verificar = $this->verificarSesion(2); // 1 = admin
    if ($verificar) return $verificar;

     $cart = \Config\Services::cart();
     $data['titulo']='Carrito de compras';
     return view('plantillas/header_view.php', $data).view('carrito/carrito_view.php').view('plantillas/footer_view.php');
}

//<!-- FUNCION agregar  CARRITO-->
 
    public function agregar_carrito(){
     
     $cart = \Config\Services::cart();
     $request = \Config\Services::request();
        $data= array(
            'id'=>$request->getPost('idProd'),
            'name'=>$request->getPost('nombreProd'),
            'price'=>$request->getPost('precioProd'),
            'qty'=>1
        );

         $cart -> insert($data);

         return redirect()-> route('ver_carrito');
    }
//<!-- FUNCION GUARDAR VENTA-->
public function guardar_venta(){
        $validation = \Config\Services::validation();  
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $venta = new  Venta_Model(); 
        $detalle = new  Detalle_venta_Model();
        $productos = new  Productos_Model();

         $validation->setRules(
    [
        'forma_pago_venta' => 'required',
         'envio_venta' => 'required',
    ],
    [   // Errors
        'forma_pago_venta' => [
            'required' => 'El método de pago es obligatorio'
        ],

         'envio_venta' => [
            'required' => 'La forma de envío es obligatoria',

                ]

    ]
);

if ( $validation->withRequest($request)->run() ){
       // 'forma_pago_venta' => $request->getPost('formaPago');
        //'envio_venta'=> $request->getPost('envioVenta');
 
        $cart1 = $cart ->contents();
        $total = 0;
        foreach ($cart1 as $item){
                $total =  $total + ($item ['qty'] * $item['price']);
                $producto1 = $productos -> where('id_producto', $item['id']) ->first();
                if ($producto1['cantidad_producto'] < $item['qty']){
                
        return redirect()->route('ver_carrito')->with('mensajeAddCarrito', 'No hay suficiente stock disponible');
         }
        } 

        $forma_pago = $request->getPost('forma_pago_venta');
        $envio = $request->getPost('envio_venta');

        $data = array(
        'fecha_venta' => date('Y-m-d'),
        'total_venta' => $total,
        'forma_pago_venta' => $forma_pago,
        'cliente_id' => session('id'),
        'envio_venta' => $envio
        );
        
$venta_id = $venta -> insert ($data);

        $cart1 = $cart ->contents();
        foreach ($cart1 as $item){
                $detalle_ventas = array(
                        'venta_id' => $venta_id,
                        'productos_id' => $item['id'],
                        'cantidad_detalle' => $item['qty'],
                        'precio_detalle' => $item['price']
                );
              
         $producto1 = $productos -> where('id_producto', $item['id']) ->first();
         
         $data =[
                'cantidad_producto'=> $producto1['cantidad_producto']-$item['qty'],
         ];     //actualiza stock
                $productos->update($producto1['id_producto'], $data);
                //inserta detalle de venta
                $detalle-> insert($detalle_ventas);
               
        }
      
        $cart->destroy();
         return redirect()->route('lista_catalogo')->with('mensajeCompra', 'Gracias por su compra!');

         }else{

                 $data['titulo'] = 'Carrito';
                $data['validation'] = $validation->getErrors();
               return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/carrito/carrito_view.php').view('plantillas\footer_view.php'); 
 

                }
 }

 //<!-- FUNCIONES ELIMINAR Y VACIAR CARRITO->
 public function eliminar_carrito($id=null){
    $cart = \Config\Services::cart();
     $request = \Config\Services::request();
        $data= array(
            'id'=>$request->getPost('idProd'),
            'name'=>$request->getPost('nombreProd'),
            'price'=>$request->getPost('precioProd'),
            'qty'=>1
        );

         $cart -> remove($id);

         return redirect()-> route('ver_carrito');
}

public function eliminar_carrito_all($id=null){
    $cart = \Config\Services::cart();
     $request = \Config\Services::request();
        $data= array(
            'id'=>$request->getPost('idProd'),
            'name'=>$request->getPost('nombreProd'),
            'price'=>$request->getPost('precioProd'),
            'qty'=>1
        );

         $cart -> destroy();

         return redirect()-> route('ver_carrito');
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

}
 