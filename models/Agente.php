<?php

namespace Model;

class Agente extends activeRecord{
    protected static $tabla='agente';
    protected static $columnas_DB=['id','nombres','apellidos','edad','telefono','comision','rol'];

    public $id;
    public $nombres;
    public $apellidos;
    public $edad;
    public $telefono;
    public $comision;
    public $rol;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombres=$args['nombres']??'';
        $this->apellidos=$args['apellidos']??'';
        $this->edad=$args['edad']??'';
        $this->telefono=$args['telefono']??'';
        $this->comision=$args['comision']??'';
        $this->rol=$args['rol']??'';
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
        if(!$this->comision){
            self::$errores["comision"]="Debe añadir la comisión";
        }
        if(!$this->rol){
            self::$errores["rol"]="Debe seleccionar un rol";
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