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
        $this->sala=$args['sala']??'0';
        $this->lavadora=$args['lavadora']??'0';
        $this->boiler=$args['boiler']??'0';
        $this->cocina=$args['cocina']??'0';
        $this->camas=$args['camas']??'0';
        $this->roperos=$args['roperos']??'0';
    }
}



