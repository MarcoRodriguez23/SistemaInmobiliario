<?php

namespace Model;

class Propiedad extends activeRecord{
    protected static $tabla='propiedad';
    protected static $columnas_DB=['idPropiedad','precio','año','mt2','idDireccion','idMuebles','idAmenidades','idOpcionesCompra','idEscritura','idEstacionamiento','numEstacionamientos','numPisos','piso','numDepartamento','numElevadores','habitaciones','baños','servicioH','servicioP','tipoPropiedad'];

    public $idPropiedad;
    public $precio;
    public $año;
    public $mt2;
    public $idDireccion;
    public $idMuebles;
    public $idAmenidades;
    public $idOpcionesCompra;
    public $idEscritura;
    public $idEstacionamiento;
    public $numEstacionamientos;
    public $numPisos;
    public $piso;
    public $numDepartamento;
    public $numElevadores;
    public $habitaciones;
    public $baños;
    public $servicioH;
    public $servicioP;
    public $tipoPropiedad;


    public function __construct($args=[])
    {
        $this->idPropiedad=$args['idPropiedad']??null;
        $this->precio=$args['precio']??'';
        $this->año=$args['año']??'';
        $this->mt2=$args['mt2']??'';
        $this->idDireccion=$args['idDireccion']??'';
        $this->idMuebles=$args['idMuebles']??'';
        $this->idAmenidades=$args['idAmenidades']??'';
        $this->idOpcionesCompra=$args['idOpcionesCompra']??'';
        $this->idEscritura=$args['idEscritura']??'';
        $this->idEstacionamiento=$args['idEstacionamiento']??'';
        $this->numEstacionamientos=$args['numEstacionamientos']??'';
        $this->numPisos=$args['numPisos']??'';
        $this->piso=$args['piso']??'';
        $this->numDepartamento=$args['numDepartamento']??'';
        $this->numElevadores=$args['numElevadores']??'';
        $this->habitaciones=$args['habitaciones']??'';
        $this->baños=$args['baños']??'';
        $this->servicioH=$args['servicioH']??'';
        $this->servicioP=$args['servicioP']??'';
        $this->tipoPropiedad=$args['tipoPropiedad']??'';
    }

     //buscar una registro por su tipo de propiedad
    //  public static function tipoPropiedad($num){
    //     //obteniendo la propiedad
    //     $query = "SELECT * FROM ". static::$tabla ." WHERE tipoPropiedad=${num}";
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



