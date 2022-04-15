<?php

namespace Model;

class Amenidad extends activeRecord{
    protected static $tabla='amenidad';
    protected static $columnas_DB=['id','roffGarden','salaDeUsosMultiples','gimnasio','cancha','calentadorSolar','alberca'];

    public $id;
    public $roffGarden;
    public $salaDeUsosMultiples;
    public $gimnasio;
    public $cancha;
    public $calentadorSolar;
    public $alberca;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->roffGarden=$args['roffGarden']??'0';
        $this->salaDeUsosMultiples=$args['salaDeUsosMultiples']??'0';
        $this->gimnasio=$args['gimnasio']??'0';
        $this->cancha=$args['cancha']??'0';
        $this->calentadorSolar=$args['calentadorSolar']??'0';
        $this->alberca=$args['alberca']??'0';
    }
}



