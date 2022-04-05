<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;


require_once '../Router.php';
require_once '../models/Usuario.php';


class LoginController{

    public static function login(Router $router){

        $errores=[];

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $auth = new Usuario($_POST);
            $errores = $auth->validarLogin();

            if(empty($errores)){
                //verificar si el usuario existe
                $usuario = Usuario::where('email',$auth->email);
                
                if($usuario){
                    //verificar password
                    if($usuario->comprobarPasswordAndVerificado($auth)){
                        //autenticar al usuario
                        session_start();
                        $_SESSION['id']=$usuario->id;
                        $_SESSION['nombre']=$usuario->nombre." ".$usuario->apellido;
                        $_SESSION['email']=$usuario->email;
                        $_SESSION['nivel']=$usuario->nivel;
                        $_SESSION['login']=true;

                        //redireccionar
                        header('Location: /admin');
                        
                    }
                }
                else{
                    Usuario::setAlerta('error','Usuario no encontrado');
                }
                
            }
        }
        
        $errores = Usuario::getErrores();
        $router->view('auth/login',[
            'errores'=>$errores
        ]);
    }

    public static function logout(Router $router){
        session_start();
        $_SESSION=[];
        header('Location: /');
    }

    public static function confirmar(Router $router){
        $errores = [];

        //recogiendo el token por GET
        $token = s($_GET['token']);
        
        $usuario = Usuario::where('token',$token);
        
        if(empty($usuario)){
            //mostrar mensaje
            Usuario::setAlerta("error","token no válido");
        }
        else{
            //confirmando la existencia del usuario
            $usuario->confirmado = 1;
            //eliminando el token del usuario que ya fue confirmado
            $usuario->token = null;
            //actualizando el usuario ya sin token y confirmado
            $usuario->guardar();
            Usuario::setAlerta("exito","Token válido, confirmando usuario");
        }

        $errores=Usuario::getErrores();
        $router->view('auth/confirmar-cuenta',[
            'errores'=>$errores
        ]);
    }
}