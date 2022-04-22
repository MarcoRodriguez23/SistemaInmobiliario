<?php

namespace Model;

class Venta extends activeRecord{
    protected static $tabla='venta';
    protected static $columnas_DB=['id','idEncargado','idPropiedad','fecha','contrato'];

    public $id;
    public $idEncargado;
    public $idPropiedad;
    public $fecha;
    public $contrato;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idEncargado=$args['idEncargado']??0;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->fecha=date('Y/m/d');
        $this->contrato=$args['contrato']??'';
    }

    public function validar(){
        if(!$this->contrato){
            self::$errores["contrato"]="Favor de subir PDF o fotografia del contrato";
        }
        return self::$errores;
    }
}