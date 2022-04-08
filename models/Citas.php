<?php

namespace Model;

class Citas extends activeRecord{
    protected static $tabla='citas';
    protected static $columnas_DB=['id','idPropiedad','nombres','apellidos','telefono','fecha','hora','idEncargado'];

    public $id;
    public $idPropiedad;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $fecha;
    public $hora;
    public $idEncargado;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->nombres=$args['nombres']??'';
        $this->apellidos=$args['apellidos']??'';
        $this->telefono=$args['telefono']??'';
        $this->fecha=$args['fecha']??'';
        $this->hora=$args['hora']??'';
        $this->idEncargado=$args['idEncargado']??'';
    }

    public function validar(){
        if(!$this->nombres){
            self::$errores["nombres"]="Debe ingresar su nombre";
        }
        if(!$this->apellidos){
            self::$errores["apellidos"]="Debe ingresar sus apellidos";
        }
        if(!$this->telefono){
            self::$errores["telefono"]="debes de añadir un teléfono";
        }
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores["formatoTelefono"]="Formato de teléfono no valido";
        }
        if(!$this->fecha){
            self::$errores["fecha"]="Debe escoger una fecha para su visita";
        }
        if(!$this->hora){
            self::$errores["hora"]="Debe escoger una hora para su visita";
        }
        // if(!$this->idEncargado){
        //     self::$errores["idEncargado"]="Debe escoger un vendedor";
        // }
        return self::$errores;
    }
}