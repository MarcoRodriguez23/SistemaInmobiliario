<?php

namespace Model;

class Blog extends activeRecord{
    protected static $tabla='blog';
    protected static $columnas_DB=['id','titulo','descripcion','imagen','infoprevia'];

    public $id;
    public $titulo;
    public $descripcion;
    public $imagen;
    public $infoprevia;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->titulo=$args['titulo']??'';
        $this->descripcion=$args['descripcion']??'';
        $this->imagen=$args['imagen']??'';
        $this->infoprevia=$args['infoprevia']??'';
    }
}