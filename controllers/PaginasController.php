<?php

namespace Controllers;

use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Amenidad;
use Model\Mueble;
use Model\TipoPropiedad;
use Model\MetodosVenta;
use Model\Foto;
use Model\Escritura;
use Model\Estacionamiento;
use Model\Categoria;
use Model\Status;

use Model\Blog;
use Model\Servicio;

use PHPMailer\PHPMailer\PHPMailer as PHPMailer;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Amenidad.php';
require_once '../models/Mueble.php';
require_once '../models/TipoPropiedad.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Foto.php';
require_once '../models/Escritura.php';
require_once '../models/Estacionamiento.php';
require_once '../models/Categoria.php';
require_once '../models/Status.php';

require_once '../models/Blog.php';
require_once '../models/Servicio.php';

class PaginasController{

    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        $status=Status::all();
        $categorias=Categoria::all();
        $tipoPropiedad=TipoPropiedad::all();
        
        $router->view('/paginas/index',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos,
            'status'=>$status,
            'categorias'=>$categorias,
            'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

    public static function inmuebles(Router $router){
        $router->view('/paginas/inmuebles',[

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
        $fotos=Foto::all();
        $router->view('/paginas/casas',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos
        ]);
    }

    public static function casa(Router $router){
        $id = validarORedireccionar('/casa');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $escritura = Escritura::find($propiedad->idEscritura);
        $metodosVenta = MetodosVenta::find($id);

        $categorias=Categoria::all();
        // debuguear($metodosVenta);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);

        $router->view('/paginas/casa',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'escritura'=>$escritura,
            'metodosVenta'=>$metodosVenta,
            'categorias'=>$categorias,
            'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

    public static function departamentos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        $router->view('/paginas/departamentos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos
        ]);
    }

    public static function departamento(Router $router){
        $id = validarORedireccionar('/departamentos');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $escritura = Escritura::find($propiedad->idEscritura);
        $metodosVenta = MetodosVenta::find($id);

        $categorias=Categoria::all();
        // debuguear($metodosVenta);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);

        $router->view('/paginas/departamento',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'escritura'=>$escritura,
            'metodosVenta'=>$metodosVenta,
            'categorias'=>$categorias,
            'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

    public static function terrenos(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        $router->view('/paginas/terrenos',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos
        ]);
    }

    public static function terreno(Router $router){
        $id = validarORedireccionar('/terrenos');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $escritura = Escritura::find($propiedad->idEscritura);
        $metodosVenta = MetodosVenta::find($id);
        // debuguear($metodosVenta);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);

        $router->view('/paginas/terreno',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'escritura'=>$escritura,
            'metodosVenta'=>$metodosVenta,
            'tipoPropiedad'=>$tipoPropiedad
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
        $tipos = TipoPropiedad::all();

        if($_SERVER['REQUEST_METHOD']==="POST"){
            $respuestas=$_POST;
           
            //crear una instancia de PHPMailer
            $mail = new PHPMailer();

            //Configurando SMTP
            $mail->isSMTP();
            $mail->Host='smtp.mailtrap.io';
            $mail->SMTPAuth= true;
            $mail->Username='f8f5444957e76d';
            $mail->Password='0642cad10af248';
            $mail->SMTPSecure='tls';
            $mail->Port='2525';

            //configurando el contenido  del Email
            //quien lo envia
            $mail->setFrom('admin@bienesraices.com');
            //A donde va
            $mail->addAddress('admin@bienesraices.com','bienesraices.com');
            $mail->Subject='Tienes un nuevo mensaje';
            //habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            //definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre:'. $respuestas['nombre'] . '</p>';
            
            //enviar de forma condicional algunos campos
            if($respuestas['empresa']!=""){
                $contenido .= '<p>De la empresa: '.$respuestas['empresa'].'</p>';
                $contenido .= '<p>Con el puesto de: '.$respuestas['puesto'].'</p>';
            }
            $contenido .= '<p>Esta interesado en adquirir '.$respuestas['asunto'].'</p>';
            $contenido .= '<p>Medios de contacto proporcionados</p>';
            $contenido .= '<p>Email: '.$respuestas['correo'].'</p>';
            $contenido .= '<p>Whatsapp: '.$respuestas['telefono'].'</p>';
            
            $contenido .= '<p>Mensaje:</p>';
            $contenido .= $respuestas['mensaje'];
            
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = "texto alternativo";

            if($mail->send()){
                $mensaje= "mensaje enviado";
            }
            else{
                $mensaje = "mensaje no enivado";
            }
        }

        
        $router->view('/paginas/contacto',[
            'mensaje'=>$mensaje,
            'tipos'=>$tipos
        ]);
    }

    public static function comercial(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $fotos=Foto::all();
        $router->view('/paginas/comercial',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'fotos'=>$fotos
        ]);
    }

    public static function negocio(Router $router){
        $id = validarORedireccionar('/comercial');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $escritura = Escritura::find($propiedad->idEscritura);
        $metodosVenta = MetodosVenta::find($id);

        $categorias=Categoria::all();
        // debuguear($metodosVenta);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);

        $router->view('/paginas/negocio',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'escritura'=>$escritura,
            'metodosVenta'=>$metodosVenta,
            'categorias'=>$categorias,
            'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

}