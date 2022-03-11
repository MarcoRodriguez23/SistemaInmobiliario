<?php

namespace Model;

class Mueble extends activeRecord{
    protected static $tabla='Mueble';
    protected static $columnas_DB=['idPropiedad','sala','lavadora','boiler','cocina','camas','roperos'];

    public $idPropiedad;
    public $sala;
    public $lavadora;
    public $boiler;
    public $cocina;
    public $camas;
    public $roperos;


    public function __construct($args=[])
    {
        $this->idPropiedad=$args['idPropiedad']??null;
        $this->sala=$args['sala']??'';
        $this->lavadora=$args['lavadora']??'';
        $this->boiler=$args['boiler']??'';
        $this->cocina=$args['cocina']??'';
        $this->camas=$args['camas']??'';
        $this->roperos=$args['roperos']??'';
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



