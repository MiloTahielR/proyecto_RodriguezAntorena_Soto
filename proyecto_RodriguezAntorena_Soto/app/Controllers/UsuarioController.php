<?php

namespace App\Controllers;

use App\Models\Consulta_Model;
use App\Models\Registro_usuario_Model;

class UsuarioController extends BaseController
{

public function add_consulta()
{

  $validation = \Config\Services::validation();
  $request = \Config\Services::request();

  $validation->setRules(
    [
        'nomyape' => 'required|max_length[150]',
         'correo' => 'required|valid_email',
         'motivo' => 'required|max_length[100]',
         'consulta' => 'required|max_length[250]|min_length[10]'
    ],
    [   // Errors
        'nomyape' => [
            'required' => 'El nombre es requerido'
        ],

         'correo' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida'
                ],

          'motivo'   => [
            "required"      => 'El motivo es obligatorio',
            "max_length"    => 'El motivo de la consulta debe tener como máximo 100 caracteres'
                ],

        'consulta' => [
            'required' => 'La consulta es requerido',
            'min_length' =>'La consulta debe tener como mínimo 10 caracteres',
            'max_length'    => 'La consulta debe tener como máximo 200 caracteres'
        ],
    ]
);

if ( $validation->withRequest($request)->run() ){
    
     $data = [
        //'correo_consultas','texto_consultas','motivo_consultas'
        
        'nombre_consultas' => $request->getPost('nomyape'),
        'correo_consultas' => $request->getPost('correo'),
        'motivo_consultas' => $request->getPost('motivo'),
        'texto_consultas' => $request->getPost('consulta') 
            ];

               $consulta1 = new Consulta_Model();
               $consulta1->insert($data);

              return redirect()->route('consultas')->with('texto_consultas', 'Su consulta se envió exitosamente!');
                        
                }else{

                 $data['titulo'] = 'Consultas';
                $data['validation'] = $validation->getErrors();
               return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/consultas_view.php').view('Views/plantillas/footer_view.php'); 
 

                }

    }


// PARA REGISTRO USUARIO
public function add_usuario()
{

    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules(
    [
         'nombre' => 'required|max_length[150]',
         'apellido' => 'required|max_length[150]',
         'dni' => 'required|max_length[8]|min_length[8]|is_natural',
         'telefono' => 'required|max_length[100]|is_natural',
         'correoUs' => 'required|valid_email|is_unique[registrousuario.correo_usuario]', 
         'contrasenia' => 'required|min_length[8]',
         'validar_contrasenia' => 'required|min_length[8]|matches[contrasenia]'
         
    ],
    [   // Errors
        'nombre' => [
            'required' => 'El nombre es requerido',
            'max_length'    => 'El nombre debe tener como máximo 150 caracteres'
        ],
        'apellido' => [
            'required' => 'El apellido es requerido',
            "max_length"    => 'El apellido debe tener como máximo 150 caracteres'
        ],

         'correoUs' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida',
            'is_unique'=> 'El correo electrónico ya está registrado, intente con otro correo válido'
                ],

         'contrasenia' => [
            'required' => 'La contraseña es obligatoria',
             'min_length' =>'La contraseña debe tener como mínimo 8 caracteres'
        ],   
         'validar_contrasenia' =>[
            'required' => 'La contraseña es obligatoria',
            'matches'=> 'Las contraseñas no coinciden, intente nuevamente.'
         ], 

         'dni' => [
            'required' => 'La consulta es requerido',
            'min_length' =>'El dni debe tener como mínimo 8 caracteres',
            'max_length' => 'El dni  debe tener como máximo 8 caracteres',
            'is_natural'  => 'El dni solo debe contener números'
         ],

          'telefono' => [
            "required" => 'El motivo es obligatorio',
            'max_length' => 'El motivo de la consulta debe tener como máximo 100 caracteres',
            'is_natural'  => 'El telefono solo debe contener números'
        ]
        
    ]
   );

 if ($validation->withRequest($request)->run() ){

     $data = [
       
        'nombre_usuario' => $request->getPost('nombre'),
        'apellido_usuario' => $request->getPost('apellido'),
        'dni_usuario' => $request->getPost('dni'),
        'telefono_usuario' => $request->getPost('telefono'),
        'correo_usuario' => $request->getPost('correoUs'),
        'contraseña_usuario' => password_hash($request->getPost('contrasenia'),PASSWORD_BCRYPT),
        'estado_usuario'=> 1,
        'perfil_id' => 2
         
            ];

               $usuarioRegistro = new Registro_usuario_Model();
               $usuarioRegistro->insert($data);

              return redirect()->route('registro_usuario')->with('registro_mensaje', 'Su registro se envió exitosamente!');
                        
                }else{

                $data['titulo'] = 'Registrarse';
                $data['validation'] = $validation->getErrors();
               return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/registrarse_view.php').view('Views/plantillas/footer_view.php'); 

                }

    }

    // validaciones para iniciar sesion 
public function buscar_usuario() {
            $validation = \Config\Services::validation(); //SON INSTANCIAS
            $request = \Config\Services::request();
            $session = session();

    //reglas de validacion que se deben cumplir 
        $validation->setRules(
            [
             'correoUs' => 'required|valid_email', //nombre de la tabla o del forularioo de la vista ?
             'contrasenia' => 'required|min_length[8]|max_length[100]|'
            ],
             
            [// Errors: para enviar el mensaje de error 
             'correoUs' => ['required'=> 'el correo es requerido',
                          'valid_email' => 'la direccion de correo debe ser valida'],
             'contrasenia' => ['required'=> 'la contrasenia es requerida',
                          'min_length' => 'la contrasenia debe tener 8 caracteres como minimo',
                          'max_length' => 'la contrasenia debe tener 100 caracteres como maximo']

            ]);
// si no cumple entra en el if y entra en la tienda como cliente 
if(!$validation-> withRequest($request)->run()){

    $data['titulo']='Iniciar sesion';
    $data['validation']= $validation->getErrors();
    return view('plantillas/header_view.php', $data).view('plantillas/nav').view('contenido/login_view').view('plantillas/footer.php'); //ver que ruta es login_view
}
    $mail = $request->getPost('correoUs');
    $pass= $request-> getPost('contrasenia');

    $user_Model = new Registro_usuario_Model();
    $user =  $user_Model->where('correo_usuario',$mail)->where('estado_usuario',1)->first();

        if($user && password_verify($pass, $user['contraseña_usuario'])){
            $data=[
                'id'=> $user['id_usuario'],
                'nombre'=> $user['nombre_usuario'],
                'apellido'=> $user['apellido_usuario'],
                'perfi'=> $user['perfil_id'],
                'login_session'=> TRUE
                ];
        $session->set($data);
        switch($user['perfil_id']){
            case'1':
                return redirect()->route('user_admin');
            break;    
            case'2':
                return redirect()->route('/');
            break;    
            } 
        } 
        else{
            return redirect()->route('login_cliente')->with('ingreso_mensaje','Usuario y/o contraseña incorrecto!');
            }
        }
 ////7FIN LOGGIN

 //FUNC CERRAR SESION

 public function cerrar_sesion(){

    $session = session();
    $session->destroy();
    return redirect()->route('login_cliente');
 }

 public function admin(){
    $data['titulo']='Index';
    return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenido/iniciarSesion_view.php').view('Views/plantillas/footer_view.php'); 
 }
}