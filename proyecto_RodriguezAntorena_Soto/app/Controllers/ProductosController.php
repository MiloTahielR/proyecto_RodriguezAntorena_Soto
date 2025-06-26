<?php

namespace App\Controllers;

use App\Models\Productos_Model;
use App\Models\Categoria_Model;

class ProductosController extends BaseController{
 
///FUNCIONES AGREGAR PRODUCTOS

public function add_producto (){
    
        $verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

  $validation = \Config\Services::validation();
  $request = \Config\Services::request();

    $validation->setRules(
    [
         'nombreProd' => 'required|max_length[150]',
         'cantProd' => 'required|is_natural',
         'precioProd' => 'required|numeric|greater_than[0]',
         'dispProd' => 'required|in_list[true,false]',
         'categProd' => 'required|in_list[1,2,3]', 
         'descripcionProd' => 'required|min_length[20]',
         'imgProd' => 'uploaded[imgProd]|is_image[imgProd]|max_size[imgProd,2048]',
         
    ],
    // Errors
       
    $errors = [
'nombreProd' => [
'required' => 'El nombre es requerido',
'max_length' => 'El nombre debe tener como máximo 150 caracteres'
        ],
'cantProd' => [
'required' => 'La cantidad es obligatoria',
'is_natural' => 'La cantidad debe ser un número entero positivo'
        ],
'precioProd' => [
'required' => 'El precio es obligatorio',
'numeric' => 'El precio debe ser un número',
'greater_than' => 'El precio debe ser mayor a 0'
        ],
'dispProd' => [
'required' => 'Debe seleccionar una disponibilidad',
'in_list' => 'Valor inválido para la disponibilidad'
        ],
'categProd' => [
'required' => 'Debe seleccionar una categoría',
'in_list' => 'La categoría seleccionada no es válida'
        ],
'descripcion' => [
'required' => 'La descripción es obligatoria',
'min_length' => 'La descripción debe tener al menos 20 caracteres'
        ],
'imgProd' => [
'uploaded' => 'Debe subir una imagen del producto',
'is_image' => 'El archivo debe ser una imagen',
'max_size' => 'La imagen no debe superar los 2MB'
        ]
    ]
);

if ($validation->withRequest($this->request)->run()) {
// Si la validación pasa inserta el producto 
    $img = $this->request->getFile('imgProd');
    $nombre_aleatorio = $img->getRandomName();
    $img->move(ROOTPATH.'assets/upload', $nombre_aleatorio);

    $data = [
        'nombre_producto' => $request->getPost('nombreProd'),
         'cantidad_producto' =>  $request->getPost('cantProd'),
         'precio_producto' =>  $request->getPost('precioProd'),
         'disponibilidad_producto' =>  $request->getPost('dispProd'),
         'producto_categoria' => $request->getPost('categProd'),
         'descripcion' =>  $request->getPost('descripcionProd'),
         'imagen_producto' => $nombre_aleatorio
           ];
               $usuarioRegistro = new Productos_Model();
               $usuarioRegistro->insert($data);
               return redirect()->route('agregar')->with('mensajeAddProducto', 'Producto agregado correctamente');
    } else {
// Si hay errores hacer estoo
    $data['titulo'] = 'Agregar Producto';
    $data['validation'] = $validation->getErrors();
    return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/agregar_prod_view.php').view('Views/plantillas/footer_admin_view.php'); 
    }
}
     

public function form_add_producto(){

$verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

   $categoria_Model = new Categoria_Model();
   $data['nombre_categoria']= $categoria_Model-> findAll();
   $data['titulo']= 'Agregar Producto';
   return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/agregar_prod_view.php').view('Views/plantillas/footer_admin_view', $data);
}

///FUNCIONES LISTAR Y EDITAR PRODUCTOS (TABLA)
//LISTAR
public function listar_productos(){
$verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

    $productos_Model = new  Productos_Model();
    $data['producto']= $productos_Model -> where ('disponibilidad_producto','true')->where('cantidad_producto > ',0)-> join('categoria_productos', 'categoria_productos.id_categoria = productos.producto_categoria')-> findAll();
    $data ['titulo'] = 'Lista de productos';
    return view('plantillas/header_view.php', $data).view('plantillas/nav_admin_view.php').view('contenidoAdm/lista_prod_view.php').view('plantillas\footer_admin_view.php');
}
//GESTIONAR
public function gestionar_productos() {
    $verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

    $productos_Model = new Productos_Model();
    $categoria_Model = new Categoria_Model();
    $request = \Config\Services::request();

    // Capturar filtros desde el formulario GET
    $nombreProd = $request->getGet('nombreProd');
    $categoriaId = $request->getGet('categoria');

    $productos_Model->join('categoria_productos', 'categoria_productos.id_categoria = productos.producto_categoria');

    // Aplicar filtros solo si se ingresaron
    if (!empty($nombreProd)) {
        $productos_Model->like('nombre_producto', $nombreProd); // búsqueda parcial
    }

    if (!empty($categoriaId)) {
        $productos_Model->where('producto_categoria', $categoriaId);
    }

    // Obtener productos filtrados
    $data['producto'] = $productos_Model->findAll();

    // Enviar filtros actuales y categorías para el view
    $data['categorias'] = $categoria_Model->findAll();
    $data['nombreProd'] = $nombreProd;
    $data['categoriaSeleccionada'] = $categoriaId;
    $data['titulo'] = 'Gestionar Producto';

    return view('Views/plantillas/header_view.php', $data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/gestion_prod_view.php').view('plantillas/footer_admin_view.php');
}


public function editar_productos($id=null){
 $verificar = $this->verificarSesion(1); // 1 = admin
    if ($verificar) return $verificar;

$productos_Model = new Productos_Model();
$categoria = new Categoria_Model();
$data['categorias'] = $categoria->findAll();
$data['producto'] = $productos_Model->where('id_producto', $id)->first(); 
$data['titulo']= 'Edicion Producto';

return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdm/editar_prod_view.php').view('plantillas\footer_admin_view.php');
}

public function actualizar_productos() {
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules(
        [
            'nombreProd' => 'required|max_length[150]',
            'cantProd' => 'required|is_natural',
            'precioProd' => 'required|numeric|greater_than[0]',
            'dispProd' => 'required|in_list[true,false]',
            'categProd' => 'required|in_list[1,2,3]',
            'descripcionProd' => 'required|min_length[20]',
           
        ],
        [ // errors
            'nombreProd' => [
                'required' => 'El nombre es requerido',
                'max_length' => 'El nombre debe tener como máximo 150 caracteres'
            ],
            'cantProd' => [
                'required' => 'La cantidad es obligatoria',
                'is_natural' => 'La cantidad debe ser un número entero positivo'
            ],
            'precioProd' => [
                'required' => 'El precio es obligatorio',
                'numeric' => 'El precio debe ser un número',
                'greater_than' => 'El precio debe ser mayor a 0'
            ],
            'dispProd' => [
                'required' => 'Debe seleccionar una disponibilidad',
                'in_list' => 'Valor inválido para la disponibilidad'
            ],
            'categProd' => [
                'required' => 'Debe seleccionar una categoría',
                'in_list' => 'La categoría seleccionada no es válida'
            ],
            'descripcionProd' => [
                'required' => 'La descripción es obligatoria',
                'min_length' => 'La descripción debe tener al menos 20 caracteres'
            ],
        ]
    );

    $id = $request->getPost('id');
    $productoModel = new Productos_Model();
    $productoActual = $productoModel->find($id); 

    if ($validation->withRequest($request)->run()) {
        $img = $request->getFile('imgProd');
        $nombreImagen = $productoActual['imagen_producto']; 

        // Si subió nueva imagen y es válida
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $nombreImagen = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/upload', $nombreImagen);
        }

        $data = [
            'nombre_producto' => $request->getPost('nombreProd'),
            'cantidad_producto' => $request->getPost('cantProd'),
            'precio_producto' => $request->getPost('precioProd'),
            'disponibilidad_producto' => $request->getPost('dispProd'),
            'producto_categoria' => $request->getPost('categProd'),
            'descripcion' => $request->getPost('descripcionProd'),
            'imagen_producto' => $nombreImagen
        ];

        $productoModel->update($id, $data);

        return redirect()->route('gestionar')->with('mensajeActualizar', 'Producto actualizado correctamente!');
    } else {
        $categoria = new Categoria_Model();
        $data['categorias'] = $categoria->findAll();
        $data['producto'] = $productoModel->find($id);
        $data['titulo'] = 'Edición Producto';
        $data['validation'] = $validation->getErrors();

        return view('Views/plantillas/header_view.php', $data). view('Views/plantillas/nav_admin_view.php'). view('Views/contenidoAdm/editar_prod_view.php'). view('plantillas/footer_admin_view.php');
    }
}


public function eliminar_productos($id=null){

        $data = array('disponibilidad_producto' =>'false');
        $producto = new Productos_Model();
        $producto->update($id, $data); 
        return redirect()->route('gestionar');
}

public function activar_productos($id=null){
 
        $data = array('disponibilidad_producto'=>'true');
        $producto = new Productos_Model();
        $producto->update($id, $data);
        return redirect()->route('gestionar');

}


public function listar_catalogo(){
     $productos_Model = new  Productos_Model();
    $data['producto']= $productos_Model -> where ('disponibilidad_producto','true')->where('cantidad_producto > ',0)-> join('categoria_productos', 'categoria_productos.id_categoria = productos.producto_categoria')-> findAll();
    $data ['titulo'] = 'Catalogo de productos';
    return view('plantillas/header_view.php', $data).view('plantillas/nav_view.php').view('contenido/catalogo_view.php').view('plantillas\footer_view.php');
}

//Funcion para verificar los usuarios/admin logeados para navegar en las páginas
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
