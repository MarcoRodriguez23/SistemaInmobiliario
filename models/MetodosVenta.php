<?php

namespace Model;

class MetodosVenta extends activeRecord{
    protected static $tabla='metodosventa';
    protected static $columnas_DB=['id','tipo'];

    public $idMetodo;
    public $tipo;

    public function __construct($args=[])
    {
        $this->idMetodo=$args['id']??null;
        $this->tipo=$args['tipo']??'';
    }

    // //buscar una registro por su ID
    // public static function find($id){
    //     //obteniendo la propiedad
    //     $query = "SELECT * FROM ". static::$tabla ." WHERE id=${id}";
    //     $resultado=self::consultarSQL($query);
    //     return array_shift($resultado);
    // }

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



