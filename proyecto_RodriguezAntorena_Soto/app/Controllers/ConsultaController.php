<?php

namespace App\Controllers;

use App\Models\Consulta_Model;
use App\Models\registro_usuario_Model;

class ConsultaController extends BaseController
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
         'correo' => 'required|valid_email|is_unique[registrousuario.correo_usuario]', 
         'contrasenia' => 'required|min_length[8]',
         'validar_contrasenia' => 'required|min_length[8]|matches[contrasenia]',
         'telefono' => 'required|min_length[10]|is_natural',
         'dni' => 'required|max_length[8]|min_length[8]|is_natural'
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

         'correo' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida'
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
            'max_length'    => 'El dni  debe tener como máximo 8 caracteres',
            'is_natural'  => 'El dni solo debe contener números'
         ],

          'telefono'   => [
            "required"      => 'El motivo es obligatorio',
            'max_length'    => 'El motivo de la consulta debe tener como máximo 100 caracteres',
              'is_natural'  => 'El telefono solo debe contener números'
        ]
        
    ]
   );

 if ($validation->withRequest($request)->run() ){

     $data = [
        //'correo_consultas','texto_consultas','motivo_consultas'
        'nombre_usuario' => $request->getPost('nombre'),
        'apellido_usuario' => $request->getPost('apellido'),
        'correo_usuario ' => $request->getPost('correo'),
        'id_perfil'=> 2,
        'contraseña_usuario' => password_hash($request->getPost('contrasenia'),PASSWORD_BCRYPT),
        'dni_usuario' => $request->getPost('dni'),
        'telefono_usuario' => $request->getPost('telefono'),
        'estado_usuario'=> 1
         
            ];

               $usuarioRegistro = new registro_usuario_Model();
               $usuarioRegistro->insert($data);

              return redirect()->route('registrar_usuario')->with('registro_mensaje', 'Su registro se envió exitosamente!');
                        
                }else{

                $data['titulo'] = 'Registrarse';
                $data['validation'] = $validation->getErrors();
               return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/registrarse_view.php').view('Views/plantillas/footer_view.php'); 

                }

    }
}