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
use Model\TipoPropiedad;

require_once '../Router.php';
require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Estacionamiento.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Escritura.php';
require_once '../models/Mueble.php';
require_once '../models/TipoPropiedad.php';

class AdminController{
    
    //funciones para las paginas de las propiedades
    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        $mensaje=$_GET['mensaje']??null;
        
        
        $router->view('admin/propiedades/lista',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            'mensaje'=>$mensaje
        ]);
    }


    public static function createHouse(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $propiedad = new Propiedad();
        $direccion = new Direccion();
        $metodosVenta = new MetodosVenta();
        $muebles = new Mueble();
        $amenidades = new Amenidad();

        //TRAYENDO LAS DIFERENTES OPCIONES CON LAS QUE SE CUENTA
        $estacionamientos = Estacionamiento::all();
        $escrituras = Escritura::all();
        $tipoPropiedad = TipoPropiedad::all();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresPropiedad = Propiedad::getErrores();
        $erroresDireccion = Direccion::getErrores();
        $erroresMetodosVenta = MetodosVenta::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $propiedad = new Propiedad($_POST['propiedad']);        
            $direccion = new Direccion($_POST['direccion']);        
            $muebles = new  Mueble($_POST['muebles']);
            $amenidades = new Amenidad($_POST['amenidades']);                 
            $metodosVenta = new MetodosVenta($_POST['metodosventa']);                 
    
            //validando la existencia de erroes en el formulario
            $erroresPropiedad = $propiedad->validar();
            $erroresDireccion = $direccion->validar();
            $erroresMetodosVenta = $metodosVenta->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresPropiedad) &&  empty($erroresDireccion) && empty($erroresMetodosVenta)){
                
                // GUARDANDO EN LA BD
                $guardarPropiedad=$propiedad->guardar();
                
                if($guardarPropiedad){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        $guardarMuebles=$muebles->guardar();
                        if($guardarMuebles){
                            $guardarAmenidades=$amenidades->guardar();
                            if($guardarAmenidades){
                                $guardarMetodoVenta=$metodosVenta->guardar();
                                if($guardarMetodoVenta){
                                    //mensaje que indica que se creo exitosamente
                                    header("Location: /admin?mensaje=1");
                                }
                            }
                        }
                    }
                    
                }
            }        
        }
        $router->view('admin/propiedades/create',[
            'direccion'=>$direccion,
            'erroresDireccion'=>$erroresDireccion,
            'propiedad'=>$propiedad,
            'erroresPropiedad'=>$erroresPropiedad,
            'estacionamientos'=>$estacionamientos,
            'escrituras'=>$escrituras,
            'tipoPropiedad'=>$tipoPropiedad,
            "muebles"=>$muebles,
            "amenidades"=>$amenidades,
            "metodosVenta"=>$metodosVenta,
            "erroresMetodosVenta"=>$erroresMetodosVenta
        ]);
    }


    public static function updateHouse(Router $router){

        //buscando en todas las tablas la propiedad
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);        
        $direccion = Direccion::find($id);        
        $muebles =  Mueble::find($id);        
        $amenidades = Amenidad::find($id);        
        $metodosVenta = MetodosVenta::find($id);    
        
        //TRAYENDO LAS DIFERENTES OPCIONES CON LAS QUE SE CUENTA
        $estacionamientos = Estacionamiento::all();
        $escrituras = Escritura::all();
        $tipoPropiedad = TipoPropiedad::all();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresPropiedad= $propiedad->validar();
        $erroresDireccion = $direccion->validar();
        $erroresMetodosVenta=$metodosVenta->validar();
    
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //asignar atributos
            $argsPropiedad = $_POST['propiedad'];        
            $argsDireccion = $_POST['direccion'];        
            $argsMuebles = $_POST['muebles'];
            $argsAmenidades = $_POST['amenidades'];                 
            $argsMetodosVenta = $_POST['metodosventa']; 
            // debuguear($argsMetodosVenta);

            $metodosVenta->sincronizar($argsMetodosVenta) ;
            $propiedad->sincronizar($argsPropiedad) ;        
            $direccion->sincronizar($argsDireccion) ;        
            $muebles->sincronizar($argsMuebles) ;
            $amenidades->sincronizar($argsAmenidades) ;                 
            debuguear($metodosVenta);

            $erroresPropiedad= $propiedad->validar();
            $erroresDireccion = $direccion->validar();
            $erroresMetodosVenta=$metodosVenta->validar();
            
    
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresPropiedad) &&  empty($erroresDireccion) && empty($erroresMetodosVenta)){
                
                // GUARDANDO EN LA BD
                $guardarPropiedad=$metodosVenta->guardar();
                exit;
                
                if($guardarPropiedad){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        $guardarMuebles=$muebles->guardar();
                        if($guardarMuebles){
                            $guardarAmenidades=$amenidades->guardar();
                            if($guardarAmenidades){
                                $guardarMetodoVenta=$metodosVenta->guardar();
                                if($guardarMetodoVenta){
                                    //mensaje que indica que se actualizo exitosamente
                                    header("Location: /admin?mensaje=2");
                                }
                            }
                        }
                    }   
                }
            }   
        }
        $router->view('admin/propiedades/update',[
            'direccion'=>$direccion,
            'erroresDireccion'=>$erroresDireccion,
            'propiedad'=>$propiedad,
            'erroresPropiedad'=>$erroresPropiedad,
            'estacionamientos'=>$estacionamientos,
            'escrituras'=>$escrituras,
            'tipoPropiedad'=>$tipoPropiedad,
            "muebles"=>$muebles,
            "amenidades"=>$amenidades,
            "metodosVenta"=>$metodosVenta,
            "erroresMetodosVenta"=>$erroresMetodosVenta
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