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

//CONTROLADOR CONCLUIDO
class AdminController{
    
    //funcion para la parte de ganancias
    public static function money(Router $router){

        //el superadministrador puede ver todas las ventas generadas
        if($_SESSION['nivel']==1){
            $ventas = Venta::all();
        }
        //el agente inmobiliario puede ver sus ventas y la de sus vendedores
        elseif($_SESSION['nivel']==2){
            //buscando a los vendedores que registrados por el agente en sesión
            $usuarios = Usuario::whereAll('idCreador',$_SESSION['id']);
            //buscando las ventas del agente en sesión           
            $ventas= Venta::whereAll('idEncargado',$_SESSION['id']);
            //foreach para buscar las ventas concretadas por cada vendedor del agente en sesión
            foreach ($usuarios as $usuario) {
                $venta=Venta::whereAll('idEncargado',$usuario->id);
                //foreach para agregar al arreglo de ventas, las ventas de cada vendedor
                foreach ($venta as $key) {
                    $ventas[]=$key;
                }
            }            
        }
        
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $trabajadores = Usuario::all();

        $router->view('admin/ganancias/lista',[
            'ventas'=>$ventas,
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'trabajadores'=>$trabajadores
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


        $router->view('../views/generarExcel',[
            "propiedades"=>$propiedades,
            "direcciones"=>$direcciones
        ]);
    }
}