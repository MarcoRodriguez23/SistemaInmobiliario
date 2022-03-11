<?php

namespace Model;

class Inmueble extends activeRecord{
    protected static $tabla='departamentos';
    protected static $columnas_DB=['id','calle','delegacion','colonia','habitaciones','servicioH','servicioP','baños','estacionamientos','año','precio','mt2','ubicacion','manto'];

    public $id;
    public $calle;
    public $delegacion;
    public $colonia;
    public $habitaciones;
    public $servicioH;
    public $servicioP;
    public $baños;
    public $estacionamientos;
    public $año;
    public $precio;
    public $mt2;
    public $ubicacion;
    public $manto;

    public function __construct($args=[])
    {

        $this->$id=$args['id']??null;
        $this->$calle=$args['calle']??'';
        $this->$delegacion=$args['delegacion']??'';
        $this->$colonia=$args['colonia']??'';
        $this->$habitaciones=$args['habitaciones']??'';
        $this->$servicioH=$args['servicioH']??'';
        $this->$servicioP=$args['servicioP']??'';
        $this->$baños=$args['baños']??'';
        $this->$estacionamientos=$args['estacionamientos']??'';
        $this->$año=$args['año']??'';
        $this->$precio=$args['precio']??'';
        $this->$mt2=$args['mt2']??'';
        $this->$ubicacion=$args['ubicacion']??'';
        $this->$manto=$args['manto']??'';
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