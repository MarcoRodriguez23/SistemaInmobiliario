<?php

namespace Controllers;

use MVC\Router;
require_once '../Router.php';
use Model\Usuario;
require_once '../models/Usuario.php';
use Classes\Email;
require_once '../classes/Email.php';


class LoginController{

    //funcion para ingresar al sistema
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
                        // session_start();
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

    //funcion para cerrar sesión
    public static function logout(){
        // session_start();
        //limpienado la variable de $_SESSION
        $_SESSION=[];
        header('Location: /login');
    }

    //función para confirmar el token para darse de alta en el sistema
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

    //función para confirmar el token para recuperar contraseña
    public static function recuperar(Router $router){
        $alertas = [];
        $error = false;
        $token = s($_GET['token']);
        
        //buscar usuario por el token
        $usuario = Usuario::where('token',$token);

        if(empty($usuario)){
            Usuario::setAlerta('error','token no valido');
            $error=true;
        }
        else{
            if($_SERVER['REQUEST_METHOD']==='POST'){
    
                $password = new Usuario($_POST);
                $alertas = $password->validarPassword();
    
                if(empty($alertas)){
                    //quitando la antigua contraseña
                    $usuario->password = null;

                    $usuario->password = $password->password;
                    $usuario->hashPassword();

                    $usuario->token = null;
                    $resultado = $usuario->guardar();
                    if($resultado){
                        header('Location: /login');
                    }
                }
            }
        }

        $alertas = Usuario::getErrores();
        $router->view('auth/recuperar',[
            'alertas'=>$alertas,
            'error'=>$error
        ]);
    }

    //función que realiza la recepción del email para enviar correo y recuperar contraseña
    public static function olvide(Router $router){
        $errores = [];

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $auth = new Usuario($_POST);
            
            $auth->validarEmail();

            if (empty($errores)) {

                $usuario = Usuario::where('email',$auth->email);
                
                if($usuario && $usuario->confirmado === "1"){
                    
                    $usuario->Creartoken();
                    $usuario->guardar();

                    //enviar el email
                    $email = new Email($usuario->email,$usuario->nombre,$usuario->token);
                    $email->enviarInstrucciones();

                    //alerta de exito
                    Usuario::setAlerta('exito','Revisa tu email para el siguiente paso');
                }
                else{
                    Usuario::setAlerta('error','El usuario no existe o no esta confirmado');
                }   
            }
        }

        $alertas = Usuario::getErrores();
        $router->view('auth/olvide',[
            'alertas'=>$alertas
        ]);
    }
}