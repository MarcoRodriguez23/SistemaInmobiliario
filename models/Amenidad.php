<?php

namespace Model;

class Amenidad extends activeRecord{
    protected static $tabla='amenidad';
    protected static $columnas_DB=['id','roffGarden','salaDeUsosMultiples','gimnasio','cancha','calentadorSolar'];

    public $id;
    public $roffGarden;
    public $salaDeUsosMultiples;
    public $gimnasio;
    public $cancha;
    public $calentadorSolar;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->tipo=$args['tipo']??'';
        $this->roffGarden=$args['roffGarden']??'';
        $this->salaDeUsosMultiples=$args['salaDeUsosMultiples']??'';
        $this->gimnasio=$args['gimnasio']??'';
        $this->cancha=$args['cancha']??'';
        $this->calentadorSolar=$args['calentadorSolar']??'';
    }
}



