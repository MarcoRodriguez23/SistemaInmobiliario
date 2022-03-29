<?php

namespace Controllers;

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

use Model\Agente;
use Model\Rol;
use Model\DireccionAgente;

use Model\Vendedor;
use Model\DireccionVendedor;

use Model\Citas;

require_once '../Router.php';

require_once '../models/Propiedad.php';
require_once '../models/Direccion.php';
require_once '../models/Estacionamiento.php';
require_once '../models/MetodosVenta.php';
require_once '../models/Escritura.php';
require_once '../models/Mueble.php';
require_once '../models/TipoPropiedad.php';
require_once '../models/Foto.php';

require_once '../models/Agente.php';
require_once '../models/Rol.php';
require_once '../models/DireccionAgente.php';

require_once '../models/Vendedor.php';
require_once '../models/DireccionVendedor.php';

require_once '../models/Citas.php';

class AdminController{
    
    //funciones para las paginas de las propiedades
    //VERIFICAR FOTOGRAFIAS
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
        $router->view('admin/propiedades/sell',[

        ]);
    }

    //funciones para las paginas de los agentes inmobiliarios
    //TODO BIEN
    public static function agents(Router $router){
        $agentes = Agente::all();
        $direcciones = DireccionAgente::all();
        $roles = Rol::all();
        $mensaje=$_GET['mensaje']??null;

        $router->view('admin/agentes/lista',[
            "agentes"=>$agentes,
            "direcciones"=>$direcciones,
            "roles"=>$roles,
            "mensaje"=>$mensaje
        ]);
    }

    //TODO BIEN
    public static function createAgent(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $agente = new Agente();
        $direccion = new DireccionAgente();

        //TRAYENDO LAS DIFERENTES OPCIONES CON LAS QUE SE CUENTA
        $roles = Rol::all();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresAgente = Agente::getErrores();
        $erroresDireccion = DireccionAgente::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $agente = new Agente($_POST['agente']);    
            $direccion = new DireccionAgente($_POST['direccion']);        
                        
    
            //validando la existencia de erroes en el formulario
            $erroresAgente = $agente->validar();
            $erroresDireccion = $direccion->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresAgente)){
                
                // GUARDANDO EN LA BD
                $guardarAgente=$agente->guardar();
                
                if($guardarAgente){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        header("Location: /admin/agentes?mensaje=1");
                    }
                    
                }
            }        
        }

        $router->view('admin/agentes/create',[
            "agente"=>$agente,
            "erroresAgente"=>$erroresAgente,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion,
            "roles"=>$roles
        ]);
    }

    //TODO BIEN
    public static function updateAgent(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $id = validarORedireccionar('/admin');
        $agente = Agente::find($id);
        $direccion = DireccionAgente::find($id);


        //TRAYENDO LAS DIFERENTES OPCIONES CON LAS QUE SE CUENTA
        $roles = Rol::all();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresAgente = $agente->validar();
        $erroresDireccion = $direccion->validar();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $argsAgente = new Agente($_POST['agente']);    
            $argsDireccion = new DireccionAgente($_POST['direccion']); 
            
            $agente->sincronizar($argsAgente);
            $direccion->sincronizar($argsDireccion);
                        
    
            //validando la existencia de erroes en el formulario
            $erroresAgente = $agente->validar();
            $erroresDireccion = $direccion->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresAgente) && empty($erroresDireccion)){
                
                // GUARDANDO EN LA BD
                $guardarAgente=$agente->guardar();
                
                if($guardarAgente){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        header("Location: /admin/agentes?mensaje=2");
                    }
                    
                }
            }        
        }
        $router->view('admin/agentes/update',[
            "agente"=>$agente,
            "erroresAgente"=>$erroresAgente,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion,
            "roles"=>$roles
        ]);
    }

    public static function deleteAgent(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            debuguear($_POST);
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if($id){
                
                $tipo=$_POST['tipo'];
        
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $Agente= Agente::find($id);
                    $Agente->eliminar();
                }
            }
        }
    }

    //funciones para las paginas de los vendedores
    public static function sellers(Router $router){
        $vendedores = Vendedor::all();
        $direcciones = DireccionVendedor::all();
        $mensaje=$_GET['mensaje']??null;
        $router->view('admin/vendedores/lista',[
            "vendedores"=>$vendedores,
            "direcciones"=>$direcciones,
            "mensaje"=>$mensaje
        ]);
    }

    public static function createSeller(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $vendedor = new Vendedor();
        $direccion = new DireccionVendedor();


        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresVendedor = Vendedor::getErrores();
        $erroresDireccion = DireccionVendedor::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $vendedor = new Vendedor($_POST['vendedor']);
            $direccion = new DireccionVendedor($_POST['direccion']);        
            // debuguear($direccion);    
                        
    
            //validando la existencia de erroes en el formulario
            $erroresVendedor = $vendedor->validar();
            $erroresDireccion = $direccion->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresVendedor) && empty($erroresDireccion)){
                
                // GUARDANDO EN LA BD
                $guardarVendedor=$vendedor->guardar();
                
                if($guardarVendedor){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        header("Location: /admin/vendedores?mensaje=1");
                    }
                    
                }
            }        
        }
        $router->view('admin/vendedores/create',[
            "vendedor"=>$vendedor,
            "erroresVendedor"=>$erroresVendedor,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion
        ]);
    }

    public static function updateSeller(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $id = validarORedireccionar('/admin');
        $vendedor = Vendedor::find($id);
        $direccion = DireccionVendedor::find($id);



        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresVendedor = $vendedor->validar();
        $erroresDireccion = $direccion->validar();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $argsVendedor = new Agente($_POST['vendedor']);    
            $argsDireccion = new DireccionAgente($_POST['direccion']); 
            
            $vendedor->sincronizar($argsVendedor);
            $direccion->sincronizar($argsDireccion);
                        
    
            //validando la existencia de erroes en el formulario
            $erroresVendedor = $vendedor->validar();
            $erroresDireccion = $direccion->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresVendedor) && empty($erroresDireccion)){
                
                // GUARDANDO EN LA BD
                $guardarVendedor=$vendedor->guardar();
                
                if($guardarVendedor){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        header("Location: /admin/vendedores?mensaje=2");
                    }
                    
                }
            }        
        }
        $router->view('admin/vendedores/update',[
            "vendedor"=>$vendedor,
            "erroresVendedor"=>$erroresVendedor,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion
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