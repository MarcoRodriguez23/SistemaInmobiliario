<?php

namespace Controllers;

use MVC\Router;
require_once '../Router.php';

use Model\Propiedad;
require_once '../models/Propiedad.php';
use Model\Direccion;
require_once '../models/Direccion.php';
use Model\Citas;
require_once '../models/Citas.php';
use Model\Usuario;
require_once '../models/Usuario.php';
use Model\Venta;
require_once '../models/Venta.php';
use Model\TablaVentas;
require_once '../models/TablaVentas.php';

//CONTROLADOR CONCLUIDO
class AdminController{
    
    //funcion para la parte de ganancias
    public static function money(Router $router){

        //el superadministrador puede ver todas las ventas generadas
        if($_SESSION['nivel']==1){
            $query = "SELECT venta.id,nombre,apellido,calle,colonia,municipioDelegacion,estado,precio,comision,fecha,contrato,nivel 
            FROM venta LEFT JOIN propiedad ON venta.idPropiedad=propiedad.id LEFT JOIN direccion ON propiedad.id=direccion.id 
            LEFT JOIN usuario ON venta.idEncargado=usuario.id";
        }
        //el agente inmobiliario puede ver sus ventas y la de sus vendedores
        elseif($_SESSION['nivel']==2){
            
            $query = "SELECT venta.id,nombre,apellido,calle,colonia,municipioDelegacion,estado,precio,comision,fecha,contrato,nivel,usuario.idCreador 
            FROM venta LEFT JOIN propiedad ON venta.idPropiedad=propiedad.id LEFT JOIN direccion ON propiedad.id=direccion.id 
            LEFT JOIN usuario ON venta.idEncargado=usuario.id WHERE idEncargado=${_SESSION['id']} OR usuario.idCreador=${_SESSION['id']}";            
        }
        
        $ventas = TablaVentas::SQL($query);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/ganancias/lista',[
            'ventas'=>$ventas
        ]);
    }

    //funcion para la parte de citas
    public static function dates(Router $router){
        //POST para realizar el filtrado de citas
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            $filtro = $_POST['filtro'];
            $citas = Citas::filter($filtro,$_SESSION['id'],$_SESSION['nivel']);
        }
        else{
            if($_SESSION['nivel']==1){
                $citas = Citas::all();
            }
            elseif($_SESSION['nivel']>1){
                //buscando todas las citas del agente en sesión y de sus vendedores o las citas del vendedor en sesión
                $citas= Citas::CitasAgenteOVendedor($_SESSION['id']);
            }
        }

        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $trabajadores = Usuario::all();
        $filtro = [];
        
        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/citas/lista',[
            "citas"=>$citas,
            "direcciones"=>$direcciones,
            "propiedades"=>$propiedades,
            "trabajadores"=>$trabajadores,
            "filtro"=>$filtro
        ]);
    }

    public static function excel(Router $router){
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('../views/generarExcel',[
            "propiedades"=>$propiedades,
            "direcciones"=>$direcciones
        ]);
    }
}