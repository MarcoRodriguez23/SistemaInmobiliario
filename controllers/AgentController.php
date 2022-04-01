<?php

namespace Controllers;

use MVC\Router;
use Model\Agente;
use Model\Rol;
use Model\DireccionAgente;

require_once '../Router.php';
require_once '../models/Agente.php';
require_once '../models/Rol.php';
require_once '../models/DireccionAgente.php';

class AgentController{

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
            debuguear($_POST);

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
}