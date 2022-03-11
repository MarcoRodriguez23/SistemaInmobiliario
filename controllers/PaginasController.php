<?php

namespace Controllers;

use MVC\Router;
// use Model\Inmueble;
// use Model\Departamento;
// use Model\Terreno;

use Model\Propiedad;
use Model\Direccion;
use Model\Amenidad;
use Model\Mueble;
use Model\TipoPropiedad;
use Model\MetodoVenta;
use Model\Foto;
use Model\Escritura;
use Model\Estacionamiento;

use Model\Blog;
use Model\Servicio;

use PHPMailer\PHPMailer\PHPMailer as PHPMailer;

class PaginasController{

    public static function index(Router $router){
        // $propiedades =Propiedad::get(3);
        // $inmuebles = Inmueble::all();
        // $departamentos = Departamento::all();
        // $terrenos = Terreno::all();
        $propiedades=Propiedad::all();
        // $inicio = true;
        $router->view('/paginas/index',[
            // 'propiedades'=>$propiedades
            // 'inicio'=>$inicio
            // 'inmuebles' =>$inmuebles,
            // 'departamentos' =>$departamentos,
            // 'terrenos' =>$terrenos
            'propiedades'=>$propiedades
        ]);
    }

    public static function nosotros(Router $router){
        $router->view('/paginas/nosotros',[

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

    public static function inmuebles(Router $router){
        // $inmuebles = Inmueble::all();
        $router->view('/paginas/inmuebles',[
            // 'inmuebles'=>$inmuebles
        ]);
    }

    public static function inmueble(Router $router){
        $id = validarORedireccionar('/inmuebles');
        // $inmueble = Inmueble::find($id);

        $router->view('/paginas/inmueble',[
            'inmueble'=>$inmueble
        ]);
    }

    public static function departamentos(Router $router){
        // $departamentos = Departamento::all();
        $router->view('/paginas/departamentos',[
            // 'departamentos'=>$departamentos
        ]);
    }

    public static function departamento(Router $router){
        $id = validarORedireccionar('/departamentos');
        // $departamento = Departamento::find($id);

        $router->view('/paginas/departamento',[
            // 'departamento'=>$departamento
        ]);
    }

    public static function terrenos(Router $router){
        // $terrenos = Terreno::all();
        $router->view('/paginas/terrenos',[
            // 'terrenos'=>$terrenos
        ]);
    }

    public static function terreno(Router $router){
        $id = validarORedireccionar('/terrenos');
        // $terreno = Terreno::find($id);

        $router->view('/paginas/terreno',[
            // 'terreno'=>$terreno
        ]);
    }

    public static function blog(Router $router){
        // $blog=blog::all();
        $router->view('/paginas/blog',[
            // 'blog'=>$blog
        ]);
    }

    public static function entrada(Router $router){
        $id = validarORedireccionar('/blog');
        // $entrada = Blog::find($id);

        $router->view('/paginas/articulo',[
            'entrada'=>$entrada
        ]);
    }

    public static function contacto(Router $router){
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD']==="POST"){
            $respuestas=$_POST['contacto'];
           
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
            $mail->addAddress('admin@bienesraices.com','bienes raices.com');
            $mail->Subject='Tienes un nuevo mensaje';
            //habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            //definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre:'. $respuestas['nombre'] . '</p>';
            
            //enviar de forma condicional algunos campos
            if($respuestas['contacto']==="telefono"){
                $contenido .= '<p>Eligio ser contactado por Teléfono: </p>';
                $contenido .= '<p>Teléfono:'. $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Fecha de contacto: '. $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Hora de contacto: '. $respuestas['hora'] . '</p>';
            }
            else{
                $contenido .= '<p>Eligio ser contactado por Email: </p>';
                $contenido .= '<p>Email:'. $respuestas['email'] . '</p>';
            }
            
            $contenido .= '<p>Mensaje:'. $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Vende o compra:'. $respuestas['tipo'] . '</p>';
            $contenido .= '<p>Precio o presupuesto: $'. $respuestas['precio'] . '</p>';
            
            $contenido .= '<html>';

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
            'mensaje'=>$mensaje
        ]);
    }


}