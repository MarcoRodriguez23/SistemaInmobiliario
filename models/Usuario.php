<?php 

namespace Model;

class Usuario extends activeRecord{
    //BD
    protected static $tabla='usuario';
    protected static $columnas_DB=['id','nombre','apellido','edad','email','password','telefono','nivel','confirmado','token','idCreador'];

    public $id;
    public $nombre;
    public $apellido;
    public $edad;
    public $email;
    public $password;
    public $telefono;
    public $nivel;
    public $confirmado;
    public $token;
    public $idCreador;

    //metodo constructor
    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombre=$args['nombre']??'';
        $this->apellido=$args['apellido']??'';
        $this->edad=$args['edad']??'';
        $this->email=$args['email']??'';
        $this->password=$args['password']??'';
        $this->telefono=$args['telefono']??'';
        $this->nivel=$args['nivel']??'0';
        $this->confirmado=$args['confirmado']??'0';
        $this->token=$args['token']??'';
        $this->idCreador=$args['idCreador']??'1';
    }

    //metodo para validar cuando se crea la cuenta
    public function validar(){
        if(!$this->nombre){
            self::$errores['nombre'] = "El nombre es obligatorio";
        }
        if(!$this->apellido){
            self::$errores['apellido'] = "El apellido es obligatorio";
        }
        if(!$this->edad){
            self::$errores['edad'] = "La edad es obligatoria";
        }
        if(!$this->email){
            self::$errores['email'] = "Debes de agregar un correo";
        }
        if(!$this->password){
            self::$errores['password'] = "Debes de agregar una contraseña";
        }
        if(strlen($this->password)<6){
            self::$errores['passwordExtension']='El password debe tener mínimo 6 caracteres';
        }
        if(!$this->telefono){
            self::$errores["telefono"]="debes de añadir un teléfono";
        }
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores["formatoTelefono"]="Formato de teléfono no valido";
        }
    
        return self::$errores;
    }

    public function validarUpdate(){
        if(!$this->nombre){
            self::$errores['nombre'] = "El nombre es obligatorio";
        }
        if(!$this->apellido){
            self::$errores['apellido'] = "El apellido es obligatorio";
        }
        if(!$this->edad){
            self::$errores['edad'] = "La edad es obligatoria";
        }
        if(!$this->telefono){
            self::$errores["telefono"]="debes de añadir un teléfono";
        }
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores["formatoTelefono"]="Formato de teléfono no valido";
        }
    
        return self::$errores;
    }

    //metodo para validar el login del usuario
    public function validarLogin(){
        if(!$this->email){
            self::$errores['email']='El email es obligatorio';
        }
        if(!$this->password){
            self::$errores['password']='El password es obligatorio';
        }
        if(strlen($this->password)<6){
            self::$errores['passwordExtension']='El password debe tener mínimo 6 caracteres';
        }

        return self::$errores;
    }

    //validacion para enviar el token de recuperar password
    public function validarEmail(){
        if(!$this->email){
            self::$errores['email']='El email es obligatorio';
        }

        return self::$errores;
    }

    //validacion para recuperar la contraseña
    public function validarPassword(){
        if(!$this->password){
            self::$errores['password']='El password es obligatorio';
        }
        if(strlen($this->password)<6){
            self::$errores['passwordExtension']='El password debe tener mínimo 6 caracteres';
        }

        return self::$errores;
    }

    //metodo para comprobar si el usuario ya existe
    public function existeUsuario() {
    $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";

    $resultado = self::$db->query($query);

    if($resultado->num_rows) {
        self::$errores['yaExiste'] = 'El Usuario ya esta registrado';
    }

    return $resultado;
    }

    //metodo para des hashear el password y para comprobar que el correo ya esta verificado
    public function comprobarPasswordAndVerificado($auth){
        $resultado = password_verify($auth->password,$this->password);
        // debuguear($resultado);
        
        if(!$this->confirmado || !$resultado){
            // debuguear("el usuario no esta confirmado");
            self::$errores[] = "Password Incorrecto o tu cuenta no esta confirmada";
        }
        else{
            return true;
        }
    }

    //metodo para hashear el password para guardar en la base de datos
    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    //metodo para crear el token que se enviara por correo
    public function crearToken(){
        //generando un id de 13 tanto numeros como letras
        $this->token = uniqid();
    }

    //busca todos los usuarios de un creador
    public static function allXCreador($id){
        //obteniendo la propiedad
        $query = "SELECT * FROM ". static::$tabla ." WHERE idCreador =${id}";
        $resultado=self::consultarSQL($query);
        return $resultado;
    }

    
}