<?php

namespace Model;

class Mueble extends activeRecord{
    protected static $tabla='Mueble';
    protected static $columnas_DB=['id','sala','lavadora','boiler','cocina','camas','roperos'];

    public $id;
    public $sala;
    public $lavadora;
    public $boiler;
    public $cocina;
    public $camas;
    public $roperos;


    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->sala=$args['sala']??'';
        $this->lavadora=$args['lavadora']??'';
        $this->boiler=$args['boiler']??'';
        $this->cocina=$args['cocina']??'';
        $this->camas=$args['camas']??'';
        $this->roperos=$args['roperos']??'';
    }
}



