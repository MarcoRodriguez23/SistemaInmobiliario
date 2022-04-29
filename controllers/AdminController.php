<?php

namespace Controllers;

use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Usuario;
use Model\Citas;
use Model\Venta;
use Model\Mueble;
use Model\Amenidad;
use Model\MetodosVenta;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Citas.php';
require_once '../models/Usuario.php';
require_once '../models/Mueble.php';
require_once '../models/Amenidad.php';
require_once '../models/MetodosVenta.php';

//CONTROLADOR CONCLUIDO
class AdminController{
    
    //funcion para la parte de ganancias
    public static function money(Router $router){

        if($_SESSION['nivel']==1){
            $ventas = Venta::all();
        }
        elseif($_SESSION['nivel']==2){
            $usuarios = Usuario::whereAll('idCreador',$_SESSION['id']);
            // debuguear($usuarios);
            
            $ventas[]= Venta::where('idEncargado',$_SESSION['id']);
            foreach ($usuarios as $key) {
                $ventas[]= Venta::where('idEncargado',$key->id);
            }
        }

        // debuguear($ventas);
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

        

        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);
            $filtro = $_POST['filtro'];

            if($_SESSION['nivel']==1){
                $citas = Citas::filter($filtro, $_SESSION['id']);
            }
            // elseif($_SESSION['nivel']==2){
            //     $usuarios = Usuario::whereAll('idCreador',$_SESSION['id']);
            //     // debuguear($usuarios);
            //     $citas[]= Citas::where('idEncargado',$_SESSION['id']);
            //     foreach ($usuarios as $key) {
            //         $citas[]= Citas::where('idEncargado',$key->id);
            //     }

            //     $propiedades = Propiedad::filter($filtro ,$_SESSION['id']);
            // }
        }

        else{
            if($_SESSION['nivel']==1){
                $citas = Citas::all();
            }
            elseif($_SESSION['nivel']==2){
                $usuarios = Usuario::whereAll('idCreador',$_SESSION['id']);
                // debuguear($usuarios);
                $citas[]= Citas::where('idEncargado',$_SESSION['id']);
                foreach ($usuarios as $key) {
                    $citas[]= Citas::where('idEncargado',$key->id);
                }
            }
        }



        
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $trabajadores = Usuario::all();
        $router->view('admin/citas/lista',[
            "citas"=>$citas,
            "direcciones"=>$direcciones,
            "propiedades"=>$propiedades,
            "trabajadores"=>$trabajadores
        ]);
    }

    public static function excel(Router $router){
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $muebles = Mueble::all();
        $amenidades = Amenidad::all();
        $metodosVenta = MetodosVenta::all();
        $router->view('../views/generarExcel',[
            "propiedades"=>$propiedades,
            "direcciones"=>$direcciones,
            "muebles"=>$muebles,
            "amenidades"=>$amenidades,
            "metodosVenta"=>$metodosVenta
        ]);
    }
}