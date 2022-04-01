<?php

namespace Model;

class Admin extends activeRecord{
    //BD
    protected static $tabla='administrador';
    protected static $columnasDB = ['id','email','password','nivel'];

    public $id;
    public $email;
    public $password;
    public $nivel;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->email=$args['email']??'';
        $this->password=$args['password']??'';
        $this->nivel=$args['nivel']??'';
    }

    public function validar(){
        if(!$this->email){
            self::$errores[]= "El email es obligatorio";
        }
        if(!$this->password){
            self::$errores[]= "El password es obligatorio";
        }
        
        return self::$errores;
    }

    public function existeUsuario(){
        $query = "SELECT * FROM " . self::$tabla . " WHERE email= '" . $this->email . "' LIMIT 1 ";
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows){
            self::$errores[]= 'El usuario no existe';
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado){
        $usuario = $resultado->fetch_object();
        
        $autenticado= password_verify($this->password, $usuario->password);
        
        //obteniendo el nivel del usuario
        $this->nivel = $usuario->nivel;
        
        if(!$autenticado){
            self::$errores= "El password es incorrecto";
        }
        return $autenticado;
    }

    public function autenticar(){
        session_start();

        //llenar el arreglo de sesion
        $_SESSION['usuario']=$this->email;
        $_SESSION['login']=true;
        $_SESSION['nivel']=$this->nivel;

        header('Location: /admin');

    }
}