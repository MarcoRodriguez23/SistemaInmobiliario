<?php

namespace Model;

class Status extends activeRecord{
    protected static $tabla='status';
    protected static $columnas_DB=['id','estado'];

    public $id;
    public $estado;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombres=$args['estado']??'';
    }
}