<?php

namespace Model;

class TipoPropiedad extends activeRecord{
    protected static $tabla='tipopropiedad';
    protected static $columnas_DB=['id','tipo'];

    public $id;
    public $tipo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->tipo=$args['tipo']??'';
    }

    // public function validar(){
    //     if(!$this->nombre){
    //         self::$errores[]="debes de añadir un nombre";
    //     }
    //     if(!$this->apellido){
    //         self::$errores[]="debes de añadir un apellido";
    //     }
    //     if(!$this->telefono){
    //         self::$errores[]="debes de añadir un teléfono";
    //     }
    //     if(!preg_match('/[0-9]{10}/',$this->telefono)){
    //         self::$errores[]="Formato de teléfono no valido";
    //     }
    //     return self::$errores;
    // }
}