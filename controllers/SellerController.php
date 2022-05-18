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
class SellerController{

    //funciones para las paginas de los vendedores
    public static function sellers(Router $router){
        if($_SESSION['nivel']==1){
            $vendedores = Usuario::all();
        }
        elseif($_SESSION['nivel']==2){
            $vendedores = Usuario::allXCreador($_SESSION['id']);
        }
        $direcciones = DireccionUsuario::all();
        $mensaje=$_GET['mensaje']??null;
        // debuguear($vendedores);
        
        $router->view('admin/vendedores/lista',[
            "vendedores"=>$vendedores,
            "direcciones"=>$direcciones,
            "mensaje"=>$mensaje
        ]);
    }

    public static function createSeller(Router $router){
        //CREANDO LOS OBJETOS QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $vendedor = new Usuario();
        $direccion = new DireccionUsuario();

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresVendedor = Usuario::getErrores();
        $erroresDireccion = DireccionUsuario::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            
            //creando nueva instancia de cada clase
            $vendedor->sincronizar($_POST['vendedor']);
            $direccion->sincronizar($_POST['direccion']);   
            
            //validando la existencia de erroes en el formulario
            $erroresVendedor = $vendedor->validar();
            $erroresDireccion = $direccion->validar();

            //si no hay errores proceder a los queries hacia la base de datos   
            if(empty($erroresVendedor) && empty($erroresDireccion)){
                // debuguear("no hay errores");
                $existencia=$vendedor->existeUsuario(); 
                
                if($existencia->num_rows){
                    $erroresVendedor = Usuario::getErrores();
                }
                else{
                    // Hashear el Password
                    $vendedor->hashPassword();

                    // Generar un Token único
                    $vendedor->crearToken();

                    // Enviar el Email
                    $email = new Email($vendedor->email, $vendedor->nombre, $vendedor->token);
                    $email->enviarConfirmacion();

                    //crear el usuario
                    $guardarVendedor = $vendedor->guardar();
                    if($guardarVendedor){
                        $guardarDireccion = $direccion->guardar();
                        if($guardarDireccion){
                            header('Location: /admin/vendedores?mensaje=1');
                        }
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
        $vendedor = Usuario::find($id);
        $direccion = DireccionUsuario::find($id);

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresVendedor = $vendedor->validarUpdate();
        $erroresDireccion = $direccion->validar();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            // debuguear($_POST);

            //creando nueva instancia de cada clase
            $argsVendedor = new Usuario($_POST['vendedor']);    
            $argsDireccion = new DireccionUsuario($_POST['direccion']); 
            
            $vendedor->nombre = $argsVendedor->nombre;
            $vendedor->apellido = $argsVendedor->apellido;
            $vendedor->telefono = $argsVendedor->telefono;
            $vendedor->edad = $argsVendedor->edad;
            $direccion->sincronizar($argsDireccion);
                        
            //validando la existencia de erroes en el formulario
            $erroresVendedor = $vendedor->validarUpdate();
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

        $erroresVendedor= Usuario::getErrores();
        $erroresDireccion= DireccionUsuario::getErrores();

        $router->view('admin/vendedores/update',[
            "vendedor"=>$vendedor,
            "erroresVendedor"=>$erroresVendedor,
            "direccion"=>$direccion,
            "erroresDireccion"=>$erroresDireccion
        ]);
    }

    public static function deleteSeller(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id){
                $tipo=$_POST['tipo'];
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $vendedor= Usuario::find($id);
                    $vendedor->eliminar();
                }
            }
        }
    }
}