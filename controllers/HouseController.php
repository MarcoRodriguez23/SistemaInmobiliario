<?php

namespace Controllers;

use Model\Agente;
use MVC\Router;

use Model\Amenidad;
use Model\Propiedad;
use Model\Direccion;
use Model\Estacionamiento;
use Model\MetodosVenta;
use Model\Escritura;
use Model\Mueble;
use Model\TipoPropiedad;
use Model\Foto;

use Model\Vendedor;
use Model\Citas;
use Model\Venta;

require_once '../Router.php';

require_once '../models/Amenidad.php';
require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Estacionamiento.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Escritura.php';
require_once '../models/Mueble.php';
require_once '../models/TipoPropiedad.php';
require_once '../models/Foto.php';

require_once '../models/Vendedor.php';
require_once '../models/Citas.php';

class HouseController{
    
    //funciones para las paginas de las propiedades
    //VERIFICAR FOTOGRAFIAS
    public static function index(Router $router){
        $propiedades=Propiedad::all();
        $direcciones=Direccion::all();
        $metodosVenta=MetodosVenta::all();
        $tipoPropiedad=TipoPropiedad::all();
        $mensaje=$_GET['mensaje']??null;
        
        
        $router->view('admin/propiedades/lista',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'metodosVenta'=>$metodosVenta,
            'tipoPropiedad'=>$tipoPropiedad,
            'mensaje'=>$mensaje
        ]);
    }

    //VERIFICAR FOTOGRAFIAS
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

    //VERIFICAR CHECKBOXES
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
            // debuguear($_POST);

            //asignar atributos
            $argsPropiedad = $_POST['propiedad'];        
            $argsDireccion = $_POST['direccion'];        
            $argsMuebles = $_POST['muebles'];
            $argsAmenidades = $_POST['amenidades'];                 
            $argsMetodosVenta = $_POST['metodosventa']; 
                          

            $metodosVenta->sincronizar($argsMetodosVenta) ;
            $propiedad->sincronizar($argsPropiedad) ;        
            $direccion->sincronizar($argsDireccion) ;        
            $muebles->sincronizar($argsMuebles) ;
            $amenidades->sincronizar($argsAmenidades) ; 

            $erroresPropiedad= $propiedad->validar();
            $erroresDireccion = $direccion->validar();
            $erroresMetodosVenta=$metodosVenta->validar();
            
    
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

    //TODO BIEN
    public static function deleteHouse(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if($id){
                
                $tipo=$_POST['tipo'];
        
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $Propiedad= Propiedad::find($id);
                    $Propiedad->eliminar();
                }
            }
        }
    }

    public static function infoHouse(Router $router){
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $mueble = Mueble::find($id);
        $amenidad = Amenidad::find($id);
        $fotos = Foto::find($id);
        $estacionamiento = Estacionamiento::find($propiedad->idEstacionamiento);
        $escritura = Escritura::find($propiedad->idEscritura);
        $metodosVenta = MetodosVenta::find($id);
        // debuguear($metodosVenta);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);
        $router->view('admin/propiedades/info',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'fotos'=>$fotos,
            'estacionamiento'=>$estacionamiento,
            'escritura'=>$escritura,
            'metodosVenta'=>$metodosVenta,
            'tipoPropiedad'=>$tipoPropiedad
        ]);
    }

    public static function dateHouse(Router $router){

        $id = validarORedireccionar('/admin');
        $direccion = Direccion::find($id);
        $cita = new Citas();

        $vendedores = Vendedor::all();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresCita = Citas::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //creando nueva instancia de cada clase
            $cita = new Citas($_POST['cita']);        
   
            //validando la existencia de erroes en el formulario
            $erroresCita = $cita->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresCita)){
                
                // GUARDANDO EN LA BD
                $guardarCita=$cita->guardar();
                
                if($guardarCita){
                    header("Location: /admin?mensaje=4");                    
                }
            }        
        }

        $router->view('admin/propiedades/visita',[
            "direccion"=>$direccion,
            "cita"=>$cita,
            "vendedores"=>$vendedores,
            "erroresCita"=>$erroresCita
        ]);
    }

    public static function sellHouse(Router $router){
        $venta = new Venta();
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $tipoPropiedad = TipoPropiedad::find($propiedad->tipoPropiedad);
        $metodos = MetodosVenta::find($id);
        $amenidad = Amenidad::find($id);
        $mueble = Mueble::find($id);
        $vendedores = Vendedor::all();
        $agentes = Agente::all();

        $erroresVenta = Venta::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            
            //creando nueva instancia de cada clase
            $venta = new Venta($_POST['venta']);
            $argsPropiedad = $_POST['propiedad'];
            
            $propiedad->sincronizar($argsPropiedad);
                    
            //validando la existencia de erroes en el formulario
            $erroresVenta = $venta->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresVenta)){
                
                // GUARDANDO EN LA BD
                $guardarVenta=$venta->guardar();
                if($guardarVenta){
                    $guardarPropiedad=$propiedad->guardar();
                    if($guardarPropiedad){
                        header("Location: /admin?mensaje=5");                    
                    }
                }
            }        
        }

        $router->view('admin/propiedades/sell',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'tipoPropiedad'=>$tipoPropiedad,
            'metodos'=>$metodos,
            'mueble'=>$mueble,
            'amenidad'=>$amenidad,
            'vendedores'=>$vendedores,
            'agentes'=>$agentes,
            'erroresVenta'=>$erroresVenta
        ]);
    }

}