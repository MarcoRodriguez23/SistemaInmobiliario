<?php

namespace Controllers;

use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Usuario;
use Model\Citas;
use Model\Venta;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Citas.php';
require_once '../models/Usuario.php';

//CONTROLADOR CONCLUIDO
class AdminController{
    
    //funcion para la parte de ganancias
    public static function money(Router $router){
        $ventas = Venta::all();
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
        $citas = Citas::all();
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
}