<?php

namespace Model;

class Servicio extends activeRecord{
    protected static $tabla='servicios';
    protected static $columnas_DB=['id','titulo','descripcion','imagen'];

    public $id;
    public $titulo;
    public $descripcion;
    public $imagen;


    public function __construct($args=[])
    {

        $this->id=$args['id']??null;
        $this->titulo=$args['titulo']??'';
        $this->descripcion=$args['descripcion']??'';
        $this->imagen=$args['imagen']??'';

    }
}