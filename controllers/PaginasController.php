<?php

namespace Controllers;

use MVC\Router;
require_once '../Router.php';

use Model\Propiedad;
require_once '../models/Propiedad.php';
use Model\Direccion;
require_once '../models/Direccion.php';
use Model\Foto;
require_once '../models/Foto.php';
use Model\Blog;
require_once '../models/Blog.php';
use Model\Servicio;
require_once '../models/Servicio.php';
use Classes\Email;
require_once '../classes/Email.php';

class PaginasController{

    //función para recolectar la información que se mostrara en la pagina /index
    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        
        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/index',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos
        ]);
    }

    public static function servicios(Router $router){
        $servicios = Servicio::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/servicios',[
            'servicios'=>$servicios
        ]);
    }

    public static function servicio(Router $router){
        $id = validarORedireccionar('/servicios');
        $servicio = Servicio::find($id);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/servicio',[
            'servicio'=>$servicio
        ]);
    }

    public static function casas(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/casas',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
        ]);
    }

    public static function departamentos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/departamentos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
        ]);
    }

    public static function terrenos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/terrenos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
        ]);
    }

    public static function blog(Router $router){
        $blog=blog::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/blog',[
            'blog'=>$blog
        ]);
    }

    public static function entrada(Router $router){
        $id = validarORedireccionar('/blog');
        $entrada = Blog::find($id);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/articulo',[
            'entrada'=>$entrada
        ]);
    }

    public static function contacto(Router $router){
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD']==="POST"){
            $respuestas=$_POST;
           
            //enviar el email
            $email = new Email('','','');
            $mensaje = $email->emailContacto($respuestas);           
        }

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/contacto',[
            'mensaje'=>$mensaje
        ]);
    }

    public static function comercial(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/comercial',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
        ]);
    }

    public static function infoPropiedad(Router $router){
        $id = validarORedireccionar('/inmuebles');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $fotos = Foto::find($id);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/infoPropiedad',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'fotos'=>$fotos,
        ]);
    }
}