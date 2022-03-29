<?php

namespace Controllers;

use MVC\Router;
use Model\Vendedor;
use Model\DireccionVendedor;

require_once '../Router.php';
require_once '../models/Vendedor.php';
require_once '../models/DireccionVendedor.php';



class SellerController{

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
            $argsVendedor = new Vendedor($_POST['vendedor']);    
            $argsDireccion = new DireccionVendedor($_POST['direccion']); 
            
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

    public static function deleteSeller(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            debuguear($_POST);
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if($id){
                
                $tipo=$_POST['tipo'];
        
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $vendedor= Vendedor::find($id);
                    $vendedor->eliminar();
                }
            }
        }
    }
}