<?php

namespace Controllers;
use MVC\Router;

class AdminController{
    
    //funciones para las paginas de las propiedades
    public static function index(Router $router){
        
        $router->view('admin/propiedades/lista',[

        ]);
    }

    public static function createHouse(Router $router){
        $router->view('admin/propiedades/create',[

        ]);

    }

    public static function updateHouse(Router $router){
        $router->view('admin/propiedades/update',[

        ]);
    }

    // public static function deleteHouse(Router $router){
    //     $router->view('admin/propiedades/create',[

    //     ]);
    // }

    public static function infoHouse(Router $router){
        $router->view('admin/propiedades/info',[

        ]);
    }

    public static function dateHouse(Router $router){
        $router->view('admin/propiedades/visita',[

        ]);
    }

    public static function sellHouse(Router $router){
        $router->view('admin/propiedades/sell',[

        ]);
    }

    //funciones para las paginas de los agentes inmobiliarios
    public static function agents(Router $router){
        $router->view('admin/agentes/lista',[

        ]);
    }

    public static function createAgent(Router $router){
        $router->view('admin/agentes/create',[

        ]);
    }

    public static function updateAgent(Router $router){
        $router->view('admin/agentes/update',[

        ]);
    }

    // public static function deleteAgent(Router $router){
    //     $router->view('admin/agentes/delete',[

    //     ]);
    // }

    //funciones para las paginas de los vendedores
    public static function sellers(Router $router){
        $router->view('admin/vendedores/lista',[

        ]);
    }

    public static function createSeller(Router $router){
        $router->view('admin/vendedores/create',[

        ]);
    }

    public static function updateSeller(Router $router){
        $router->view('admin/vendedores/update',[

        ]);
    }

    // public static function deleteSeller(Router $router){
    //     $router->view('admin/vendedores/delete',[

    //     ]);
    // }

    //funciones para la parte de ganancias
    public static function money(Router $router){
        $router->view('admin/ganancias/lista',[

        ]);
    }

    //funciones para la parte de citas
    public static function dates(Router $router){
        $router->view('admin/citas/lista',[

        ]);
    }
}