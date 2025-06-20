<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo']= "Skorial";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/inicio_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function somos()
    { 
        $data['titulo']= "Nosotros";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/nosotros_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function productos()
    {   
        $data['titulo']= "Productos";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/catalogo_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function comerc()
    {   
        $data['titulo']= "Comercializacion";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/comerc_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    
    public function termUso()
    {   
        $data['titulo']= "Terminos y Uso";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/uso_term_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function consultas()
    {   
        $data['titulo']= "Consultas";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/consultas_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function registrarse(){
        $data['titulo']= "Registrarse";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/registrarse_view.php').view('Views/plantillas/footer_view.php'); 
    }

    public function iniciarSesion()
    {   
    
        $data['titulo']= "Iniciar sesion";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/iniciarSesion_view.php').view('Views/plantillas/footer_view.php'); 
                        
    }

    public function loginAdmin()
    {   
        $data['titulo']= "Login Admin";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_admin_view.php').view('Views/contenidoAdmin/agregar_prod_view.php').view('Views/plantillas/footer_view.php'); 
                        
    }

}


