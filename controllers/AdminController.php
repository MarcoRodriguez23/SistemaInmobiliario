<?php

namespace Controllers;

use Model\Amenidad;
use MVC\Router;
use Model\Propiedad;
use Model\Direccion;
use Model\Estacionamiento;
use Model\MetodosVenta;
use Model\Escritura;
use Model\Mueble;

require_once '../Router.php';
require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Estacionamiento.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Escritura.php';
require_once '../models/Mueble.php';

class AdminController{
    
    //funciones para las paginas de las propiedades
    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        
        
        $router->view('admin/propiedades/lista',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
        ]);
    }

    public static function createHouse(Router $router){
        $propiedad = new Propiedad();
        $direccion = new Direccion();
        $muebles = new Mueble();
        $amenidades = new Amenidad();
        $metodoVenta = new MetodosVenta();

        $estacionamientos = Estacionamiento::all();
        $escrituras = Escritura::all();
        $erroresPropiedad = Propiedad::getErrores();
        $erroresDireccion = Direccion::getErrores();

        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //creando nueva instancia
            $propiedad = new Propiedad($_POST['propiedad']);        
            $direccion = new Propiedad($_POST['direccion']);        
            $muebles = new Propiedad($_POST['muebles']);        
            $amenidades = new Propiedad($_POST['amenidades']);        
            $metodoVenta = new Propiedad($_POST['metodoVenta']);        
    
            //generando un nombre unico
            // $nombreImagen = md5(uniqid(rand(),true)).".jpg";
            
            //seteando la imagen
            //haciendo un resize a la imagen
            // if($_FILES['propiedad']['tmp_name']['imagen']){
            //     $img = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            //     $propiedad->setImagen($nombreImagen);
                
            // }
            
            // $erroresPropiedad = $propiedad->validar();
            // $erroresDireccion = $direccion->validar();
            // debuguear($erroresDireccion);
    
            if(empty($erroresPropiedad) && empty($erroresDireccion)){
    
                //si la carpeta no existe, crearla
                // if (!is_dir(CARPETA_IMAGENES)) {
                //     mkdir(CARPETA_IMAGENES);
                // }
                
                //guardando la imagen en el servidor
                // $img->save(CARPETA_IMAGENES . $nombreImagen);
    
                //GUARDANDO EN LA BD
                $guardarPropiedad=$propiedad->guardar();
                if($guardarPropiedad){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        $guardarMuebles=$muebles->guardar();
                        if($guardarMuebles){
                            $guardarAmenidades=$amenidades->guardar();
                            if($guardarAmenidades){
                                $guardarMetodoVenta=$metodoVenta->guardar();
                                if($guardarMetodoVenta){
                                    header("Location: /admin?mensaje=1");
                                }
                            }
                        }
                    }
                    
                }
            }        
        }
        $router->view('admin/propiedades/create',[
            'estacionamientos'=>$estacionamientos,
            'escrituras'=>$escrituras
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