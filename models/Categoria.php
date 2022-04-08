<?php

namespace Model;

class Categoria extends activeRecord{
    protected static $tabla='categoria';
    protected static $columnas_DB=['id','tipo'];

    public $id;
    public $tipo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombres=$args['tipo']??'';
    }
}