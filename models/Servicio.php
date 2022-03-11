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

        $this->$id=$args['id']??null;
        $this->$titulo=$args['titulo']??'';
        $this->$descripcion=$args['descripcion']??'';
        $this->$imagen=$args['imagen']??'';

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