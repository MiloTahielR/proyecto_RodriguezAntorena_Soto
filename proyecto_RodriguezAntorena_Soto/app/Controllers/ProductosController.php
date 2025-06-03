<?php

namespace App\Controllers;

use App\Models\Productos_Model;
use App\Models\Categoria_Model;

class ProductosController extends BaseController{
 
public function add_producto (){

    
  $validation = \Config\Services::validation();
  $request = \Config\Services::request();

    $validation->setRules(
    [
         'nombreproducto' => 'required|max_length[150]',
         'cantidadproducto' => 'required|is_natural',
         'precioproducto' => 'required|numeric|greater_than[0]',
         'disponibilidadproducto' => 'required|in_list[true,false]',
         'categoriaproducto' => 'required|in_list[1,2,3]', 
         'descripcionproducto' => 'required|min_length[300]',
         'imagenproducto' => 'uploaded[imagenproducto]|is_image[imagenproducto]|max_size[imagenproducto,2048]',
         
    ],
    // Errors
       
    $errors = [
'nombreproducto' => [
'required' => 'El nombre es requerido',
'max_length' => 'El nombre debe tener como máximo 150 caracteres'
        ],
'cantidadproducto' => [
'required' => 'La cantidad es obligatoria',
'is_natural' => 'La cantidad debe ser un número entero positivo'
        ],
'precioproducto' => [
'required' => 'El precio es obligatorio',
'numeric' => 'El precio debe ser un número',
'greater_than' => 'El precio debe ser mayor a 0'
        ],
'disponibilidadproducto' => [
'required' => 'Debe seleccionar una disponibilidad',
'in_list' => 'Valor inválido para la disponibilidad'
        ],
'categoriaproducto' => [
'required' => 'Debe seleccionar una categoría',
'in_list' => 'La categoría seleccionada no es válida'
        ],
'descripcionproducto' => [
'required' => 'La descripción es obligatoria',
'min_length' => 'La descripción debe tener al menos 300 caracteres'
        ],
'imagenproducto' => [
'uploaded' => 'Debe subir una imagen del producto',
'is_image' => 'El archivo debe ser una imagen',
'max_size' => 'La imagen no debe superar los 2MB'
        ]
    ]
);

if ($validation->withRequest($this->request)->run()) {
// Si la validación pasa inserta el producto ver con  que nombre debe coincidir 
    $img = $this->request->getFile('imagen');
    $nombre_aleatorio = $img->getRandomName();
    $img->move(ROOTPATH.'public/assets/uploads', $nombre_aleatorio);

    $data = [
        'nombre_producto' => $request->getPost('nombreProd'),
         'cantidad_producto' =>  $request->getPost('cantProd'),
         'precio_producto' =>  $request->getPost('precioProd'),
         'disponibilidad_producto' =>  $request->getPost('dispProd'),
         'producto_categoria' => $request->getPost('categProd'),
         'descripcion' =>  $request->getPost('descripcionProd'),
         'imagen_producto' =>  $request->getPost('imgProd'),
           ];
               $usuarioRegistro = new Productos_Model();
               $usuarioRegistro->insert($data);
               return redirect()->route('agregar')->with('mensajeAddProducto', 'Producto agregado correctamente');
    } else {
// Si hay errores hacer estoo
    $data['titulo'] = 'Agregar Producto';
    $data['validation'] = $validation->getErrors();
    return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/agregar_prod_view.php').view('Views/plantillas/footer_view.php'); 
    }
}
    
//////////////////////// aca las fucniones 

public function form_add_producto(){
   $categoria = new Categoria_Model();
   $data['nombre_categoria']= $categoria-> findAll();
   $data['titulo']= 'Agregar Producto';
   return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/agregar_prod_view.php').view('Views/plantillas/footer_view.php', $data); //seria retorna a este view 
}


 public function gestionar_producto(){
  $productos_Model = new  Productos_Model(); //ACA  en categoria model NO HAY NADA O SOLO YO NO TENGO ACTUALIZADO ?
  $categoria_Model = new  Categoria_Model();
  $data['producto']=  $productos_Model -> join ('categoria_productos', 'categoria_productos id_categoria = producto categoria_productos')-> findAll();
  $data ['titulo'] = 'listar productos';
  
  return view ('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/lista_productos_view');
}
}
//generar la pagina 