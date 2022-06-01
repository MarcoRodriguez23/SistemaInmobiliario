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
use Model\PropiedadDireccion;
require_once '../models/PropiedadDireccion.php';

class PaginasController{

    //función para recolectar la información que se mostrara en la pagina /index
    public static function index(Router $router){
        
        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE status != 'vendida'";

        $propiedades = PropiedadDireccion::SQL($query);
        $fotos=Foto::all();
        
        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/index',[
            'propiedades'=>$propiedades,
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

        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE tipoPropiedad='Casa' AND status != 'vendida'";

        $propiedades = PropiedadDireccion::SQL($query);
        // debuguear($propiedades);
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/casas',[
            'propiedades'=>$propiedades,
            'fotos'=>$fotos,
        ]);
    }

    public static function departamentos(Router $router){

        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE tipoPropiedad='Departamento' AND status != 'vendida'";

        $propiedades = PropiedadDireccion::SQL($query);
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/departamentos',[
            'propiedades'=>$propiedades,
            'fotos'=>$fotos,
        ]);
    }

    public static function terrenos(Router $router){
        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE tipoPropiedad='Terreno' AND status != 'vendida'";

        $propiedades = PropiedadDireccion::SQL($query);
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/terrenos',[
            'propiedades'=>$propiedades,
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
        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE tipoPropiedad IN ('Oficina','Local','Bodega') AND status != 'vendida'";

        $propiedades = PropiedadDireccion::SQL($query);
        $fotos = Foto::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/comercial',[
            'propiedades'=>$propiedades,
            'fotos'=>$fotos,
        ]);
    }

    public static function infoPropiedad(Router $router){
        $id = validarORedireccionar('/inmuebles');
        
        $query = "SELECT propiedad.id,precio,año,mt2,mt2Construccion,escritura,estacionamiento,numEstacionamientos,
        numIdEstacionamiento,numPisos,piso,numDepartamento,numElevadores,habitaciones,baños,servicioH,servicioP,
        tipoPropiedad,status,comision,numPredio,mantenimiento,categoria,creacion,idCreador,muebles,amenidades,metodosVenta,
        estado,municipioDelegacion,calle,colonia,numExterior,numInterior,linkGoogle,link360,cp
        FROM propiedad INNER JOIN direccion ON propiedad.id=direccion.id WHERE propiedad.id = ${id}";
        
        $propiedad = PropiedadDireccion::SQL($query);
        $fotos = Foto::find($id);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('/paginas/infoPropiedad',[
            'propiedad'=>$propiedad[0],
            'fotos'=>$fotos,
        ]);
    }
}