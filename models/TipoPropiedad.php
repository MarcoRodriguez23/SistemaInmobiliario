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
}