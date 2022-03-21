<?php

namespace Model;

class Estacionamiento extends activeRecord{
    protected static $tabla='estacionamiento';
    protected static $columnas_DB=['id','tipo'];

    public $id;
    public $tipo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->tipo=$args['tipo']??'';
    }

}



