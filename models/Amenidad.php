<?php

namespace Model;

class Amenidad extends activeRecord{
    protected static $tabla='amenidad';
    protected static $columnas_DB=['idPropiedad','roffGarden','salaDeUsosMultiples','gimnasio','cancha','calentadorSolar'];

    public $idPropiedad;
    public $roffGarden;
    public $salaDeUsosMultiples;
    public $gimnasio;
    public $cancha;
    public $calentadorSolar;

    public function __construct($args=[])
    {
        $this->idPropiedad=$args['idPropiedad']??null;
        $this->tipo=$args['tipo']??'';
        $this->roffGarden=$args['roffGarden']??'';
        $this->salaDeUsosMultiples=$args['salaDeUsosMultiples']??'';
        $this->gimnasio=$args['gimnasio']??'';
        $this->cancha=$args['cancha']??'';
        $this->calentadorSolar=$args['calentadorSolar']??'';
    }

    // public function validar(){
    //     if(!$this->titulo){
    //         self::$errores[]="debes de añadir un titulo";
    //     }
    //     if(!$this->precio){
    //         self::$errores[] = "debes agregar un precio";
    //     }
    //     if(strlen($this->descripcion)<50){
    //         self::$errores[] = "la descripcion es obligatoria y debe tener al menos 50 caracteres";
    //     }
    //     if(!$this->habitaciones){
    //         self::$errores[] = "El numero de habitaciones es obligatorio";
    //     }
    //     if(!$this->wc){
    //         self::$errores[] = "El numero de wc es obligatorio";
    //     }
    //     if(!$this->estacionamiento){
    //         self::$errores[] = "El numero de estacionamiento es obligatorio";
    //     }
    //     if (!$this->vendedorId) {
    //         self::$errores[] = "elige un vendedor";
    //     }
    //     if (!$this->imagen) {
    //         self::$errores[] = "La imagen es obligatoria";
    //     }
    
    //     return self::$errores;
    // }
}



