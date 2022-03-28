<?php

namespace Model;

class Rol extends activeRecord{
    protected static $tabla='rol';
    protected static $columnas_DB=['id','tipo'];

    public $id;
    public $tipo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->tipo=$args['tipo']??'';
    }

}



