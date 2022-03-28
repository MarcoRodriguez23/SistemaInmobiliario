<?php

namespace Model;

class Citas extends activeRecord{
    protected static $tabla='citas';
    protected static $columnas_DB=['id','idPropiedad','nombres','apellidos','telefono','fecha','hora','idVendedor'];

    public $id;
    public $idPropiedad;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $fecha;
    public $hora;
    public $idVendedor;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->nombres=$args['nombres']??'';
        $this->apellidos=$args['apellidos']??'';
        $this->telefono=$args['telefono']??'';
        $this->fecha=$args['fecha']??'';
        $this->hora=$args['hora']??'';
        $this->idVendedor=$args['idVendedor']??'';
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
        if(!$this->idVendedor){
            self::$errores["idVendedor"]="Debe escoger un vendedor";
        }
        return self::$errores;
    }
}