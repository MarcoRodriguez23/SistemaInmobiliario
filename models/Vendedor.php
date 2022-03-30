<?php

namespace Model;

class Vendedor extends activeRecord{
    protected static $tabla='vendedor';
    protected static $columnas_DB=['id','nombres','apellidos','edad','telefono'];

    public $id;
    public $nombres;
    public $apellidos;
    public $edad;
    public $telefono;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombres=$args['nombres']??'';
        $this->apellidos=$args['apellidos']??'';
        $this->edad=$args['edad']??'';
        $this->telefono=$args['telefono']??'';
        $this->comision=$args['comision']??'';
    }

    public function validar(){
        if(!$this->nombres){
            self::$errores["nombres"]="Debe añadir su nombre(s)";
        }
        if(!$this->apellidos){
            self::$errores["apellidos"]="Debe añadir sus apellidos";
        }
        if(!$this->edad){
            self::$errores["edad"]="Debe añadir su edad";
        }
        if(!$this->telefono){
            self::$errores["telefono"]="debes de añadir un teléfono";
        }
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores["formatoTelefono"]="Formato de teléfono no valido";
        }
        return self::$errores;
    }
}