<?php

namespace Model;

class Venta extends activeRecord{
    protected static $tabla='venta';
    protected static $columnas_DB=['id','idEncargado','idPropiedad','fecha'];

    public $id;
    public $idEncargado;
    public $idPropiedad;
    public $fecha;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idEncargado=$args['idEncargado']??0;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->fecha=date('Y/m/d');
    }

    public function validar(){
        if($this->idEncargado === 0){
            self::$errores["trabajadores"]="Debe escoger mínimo un trabajador (agente o vendedor)";
        }
        return self::$errores;
    }
}