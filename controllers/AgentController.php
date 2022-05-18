<?php

namespace Controllers;

use MVC\Router;
require_once '../Router.php';
use Model\Usuario;
require_once '../models/Usuario.php';
use Model\DireccionUsuario;
require_once '../models/DireccionUsuario.php';

use Classes\Email;
require_once '../classes/Email.php';

// CONTROLLER CONCLUIDO
class AgentController{

    //funciones para las paginas de los agentes inmobiliarios
    //TODO BIEN
    public static function agents(Router $router){
        $agentes = Usuario::all();
        $direcciones = DireccionUsuario::all();
        $mensaje=$_GET['mensaje']??null;

        $router->view('admin/agentes/lista',[
            "agentes"=>$agentes,
            "direcciones"=>$direcciones,
            "mensaje"=>$mensaje
        ]);
    }

    //TODO BIEN
    public static function createAgent(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $agente = new Usuario();
        $direccion = new DireccionUsuario();

        //arreglos iniciales para la validacion
        $erroresAgente = [];
        $erroresDireccion = [];

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            
            //creando nueva instancia de cada clase
            $agente->sincronizar($_POST['agente']);
            $direccion->sincronizar($_POST['direccion']);   
            
            //validando la existencia de erroes en el formulario
            $erroresAgente = $agente->validar();
            $erroresDireccion = $direccion->validar();

            //si no hay errores proceder a los queries hacia la base de datos   
            if(empty($erroresAgente) && empty($erroresDireccion)){
                $existencia=$agente->existeUsuario(); 
                
                if($existencia->num_rows){
                    $erroresAgente = Usuario::getErrores();
                }
                else{
                    // Hashear el Password
                    $agente->hashPassword();

                    // Generar un Token único
                    $agente->crearToken();

                    // Enviar el Email
                    $email = new Email($agente->email, $agente->nombre, $agente->token);
                    $email->enviarConfirmacion();

                    //crear el usuario
                    $guardarAgente = $agente->guardar();
                    if($guardarAgente){
                        $guardarDireccion = $direccion->guardar();
                        if($guardarDireccion){
                            header('Location: /admin/agentes?mensaje=1');
                        }
                    }
                }
            }     
        }

        $erroresAgente = Usuario::getErrores();
        $erroresDireccion = DireccionUsuario::getErrores();
        $router->view('admin/agentes/create',[
            "agente"=>$agente,
            "erroresAgente"=>$erroresAgente,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion
        ]);
    }

    //TODO BIEN
    public static function updateAgent(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $id = validarORedireccionar('/admin');
        $agente = Usuario::find($id);
        $direccion = DireccionUsuario::find($id);

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresAgente = $agente->validarUpdate();
        $erroresDireccion = $direccion->validar();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //creando nueva instancia de cada clase
            $argsAgente = new Usuario($_POST['agente']);  
            
            $argsDireccion = new DireccionUsuario($_POST['direccion']); 
            
            $agente->nombre = $argsAgente->nombre;
            $agente->apellido = $argsAgente->apellido;
            $agente->telefono = $argsAgente->telefono;
            $agente->edad = $argsAgente->edad;
            $direccion->sincronizar($argsDireccion);
                        
    
            //validando la existencia de erroes en el formulario
            $erroresAgente = $agente->validarUpdate();
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
        $erroresAgente= Usuario::getErrores();
        $erroresDireccion= DireccionUsuario::getErrores();

        $router->view('admin/agentes/update',[
            "agente"=>$agente,
            "erroresAgente"=>$erroresAgente,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion,
        ]);
    }

    public static function deleteAgent(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if($id){
                
                $tipo=$_POST['tipo'];
        
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $Agente= Usuario::find($id);
                    $Agente->eliminar();
                }
            }
        }
    }
}