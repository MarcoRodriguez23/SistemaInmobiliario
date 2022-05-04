<?php

namespace Controllers;

use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Amenidad;
use Model\Mueble;
// use Model\TipoPropiedad;
use Model\MetodosVenta;
use Model\Foto;
// use Model\Escritura;
use Model\Estacionamiento;
// use Model\Categoria;
// use Model\Status;

use Model\Blog;
use Model\Servicio;

use Classes\Email;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Amenidad.php';
require_once '../models/Mueble.php';
require_once '../models/TipoPropiedad.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Foto.php';
// require_once '../models/Escritura.php';
require_once '../models/Estacionamiento.php';
require_once '../models/Categoria.php';
require_once '../models/Status.php';

require_once '../models/Blog.php';
require_once '../models/Servicio.php';

require_once '../classes/Email.php';

class PaginasController{

    //función para recolectar la información que se mostrara en la pagina /index
    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        // $status=Status::all();
        // $categorias=Categoria::all();
        // $tipoPropiedad=TipoPropiedad::all();
        
        $router->view('/paginas/index',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
            // 'status'=>$status,
            // 'categorias'=>$categorias,
            // 'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

    public static function servicios(Router $router){
        $servicios = Servicio::all();
        $router->view('/paginas/servicios',[
            'servicios'=>$servicios
        ]);
    }

    public static function servicio(Router $router){
        $id = validarORedireccionar('/servicios');
        $servicio = Servicio::find($id);

        $router->view('/paginas/servicio',[
            'servicio'=>$servicio
        ]);
    }

    public static function casas(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        // $tipoPropiedad=TipoPropiedad::all();
        $fotos = Foto::all();
        // $status = Status::all();
        // $categorias = Categoria::all();

        $router->view('/paginas/casas',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            // 'tipoPropiedad'=>$tipoPropiedad,
            // 'status'=>$status,
            // 'categorias'=>$categorias,
            'fotos'=>$fotos,
        ]);
    }

    public static function departamentos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        // $tipoPropiedad=TipoPropiedad::all();
        $fotos = Foto::all();
        // $status = Status::all();
        // $categorias = Categoria::all();

        $router->view('/paginas/departamentos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            // 'tipoPropiedad'=>$tipoPropiedad,
            // 'status'=>$status,
            // 'categorias'=>$categorias,
            'fotos'=>$fotos,
        ]);
    }

    public static function terrenos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        // $tipoPropiedad=TipoPropiedad::all();
        $fotos = Foto::all();
        // $status = Status::all();
        // $categorias = Categoria::all();

        $router->view('/paginas/terrenos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            // 'tipoPropiedad'=>$tipoPropiedad,
            // 'status'=>$status,
            // 'categorias'=>$categorias,
            'fotos'=>$fotos,
        ]);
    }

    public static function blog(Router $router){
        $blog=blog::all();
        $router->view('/paginas/blog',[
            'blog'=>$blog
        ]);
    }

    public static function entrada(Router $router){
        $id = validarORedireccionar('/blog');
        $entrada = Blog::find($id);

        $router->view('/paginas/articulo',[
            'entrada'=>$entrada
        ]);
    }

    public static function contacto(Router $router){
        $mensaje = null;
        // $tipos = TipoPropiedad::all();

        if($_SERVER['REQUEST_METHOD']==="POST"){
            $respuestas=$_POST;
           
            //enviar el email
            $email = new Email('','','');
            $mensaje = $email->emailContacto($respuestas);           
        }

        $router->view('/paginas/contacto',[
            'mensaje'=>$mensaje,
            // 'tipos'=>$tipos
        ]);
    }

    public static function comercial(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        // $tipoPropiedad=TipoPropiedad::all();
        $fotos = Foto::all();
        // $status = Status::all();
        // $categorias = Categoria::all();

        $router->view('/paginas/comercial',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            // 'tipoPropiedad'=>$tipoPropiedad,
            // 'status'=>$status,
            // 'categorias'=>$categorias,
            'fotos'=>$fotos,
        ]);
    }

    public static function infoPropiedad(Router $router){
        $id = validarORedireccionar('/inmuebles');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $metodosVenta = MetodosVenta::find($id);

        // $categoria = Categoria::find($propiedad->categoria);
        // debuguear($metodosVenta);
        // $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);

        $router->view('/paginas/infoPropiedad',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'metodosVenta'=>$metodosVenta
            // 'categoria'=>$categoria,
            // 'tipoPropiedad'=>$tipoPropiedad
        ]);
    }
}