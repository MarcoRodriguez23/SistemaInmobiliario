<?php

namespace Model;

class Direccion extends activeRecord{
    protected static $tabla='direccion';
    protected static $columnas_DB=['idPropiedad','estado','municipioDelegacion','calle','colonia','numExterior','numInterior','linkGoogle'];

    public $idPropiedad;
    public $estado;
    public $municipioDelegacion;
    public $calle;
    public $colonia;
    public $numExterior;
    public $numInterior;
    public $linkGoogle;

    public function __construct($args=[])
    {
        $this->idPropiedad=$args['idPropiedad']??null;
        $this->estado=$args['estado']??'';
        $this->municipioDelegacion=$args['municipioDelegacion']??'';
        $this->calle=$args['calle']??'';
        $this->colonia=$args['colonia']??'';
        $this->numExterior=$args['numExterior']??'';
        $this->numInterior=$args['numInterior']??'';
        $this->linkGoogle=$args['linkGoogle']??'';
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



