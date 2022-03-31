<?php

namespace Model;

class Venta extends activeRecord{
    protected static $tabla='venta';
    protected static $columnas_DB=['id','idAgente','idVendedor','idPropiedad','fecha'];

    public $id;
    public $idAgente;
    public $idVendedor;
    public $idPropiedad;
    public $fecha;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idAgente=$args['idAgente']??0;
        $this->idVendedor=$args['idVendedor']??0;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->fecha=date('Y/m/d');
    }

    public function validar(){
        if($this->idAgente === 0 && $this->idVendedor=== 0){
            self::$errores["trabajadores"]="Debe escoger mínimo un trabajador (agente o vendedor)";
        }
        return self::$errores;
    }
}