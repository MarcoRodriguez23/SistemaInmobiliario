<?php

namespace Model;

class Escritura extends activeRecord{
    protected static $tabla='escritura';
    protected static $columnas_DB=['id','tipo'];

    public $id;
    public $tipo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->tipo=$args['tipo']??'';
    }

}



