<?php

namespace Controllers;

use Model\Agente;
use MVC\Router;

use Model\Propiedad;
use Model\Direccion;
use Model\Citas;
use Model\Vendedor;
use Model\Venta;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Citas.php';
require_once '../models/Vendedor.php';

class AdminController{
    
    //funciones para la parte de ganancias
    public static function money(Router $router){
        $ventas = Venta::all();
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $vendedores = Vendedor::all();
        $agentes = Agente::all();

        $router->view('admin/ganancias/lista',[
            'ventas'=>$ventas,
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'agentes'=>$agentes,
            'vendedores'=>$vendedores
        ]);
    }

    //funciones para la parte de citas
    public static function dates(Router $router){
        $citas = Citas::all();
        $propiedades = Propiedad::all();
        $direcciones = Direccion::all();
        $vendedores = Vendedor::all();
        $router->view('admin/citas/lista',[
            "citas"=>$citas,
            "direcciones"=>$direcciones,
            "propiedades"=>$propiedades,
            "vendedores"=>$vendedores
        ]);
    }
}