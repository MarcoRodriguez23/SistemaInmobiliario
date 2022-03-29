<?php

namespace Controllers;

use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Citas;

require_once '../Router.php';
require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';


require_once '../models/Citas.php';

class AdminController{
    
    //funciones para la parte de ganancias
    public static function money(Router $router){
        $router->view('admin/ganancias/lista',[

        ]);
    }

    //funciones para la parte de citas
    public static function dates(Router $router){
        $citas = Citas::all();
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $router->view('admin/citas/lista',[
            "citas"=>$citas,
            "direcciones"=>$direcciones,
            "propiedades"=>$propiedades
        ]);
    }
}