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
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/productos_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function comerc()
    {   
        $data['titulo']= "Comercializacion";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/comerc_view.php').view('Views/plantillas/footer_view.php'); 
        
    }

    public function contacto()
    {   
        $data['titulo']= "Contacto";
        return view('Views/plantillas/header_view.php',$data).view('Views/plantillas/nav_view.php').view('Views/contenido/contacto_view.php').view('Views/plantillas/footer_view.php'); 
        
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

}


