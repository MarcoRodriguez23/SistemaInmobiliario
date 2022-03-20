<?php

namespace Model;

class Propiedad extends activeRecord{
    protected static $tabla='propiedad';
    protected static $columnas_DB=['idPropiedad','precio','año','mt2','idEscritura','idEstacionamiento','numEstacionamientos','numPisos','piso','numDepartamento','numElevadores','habitaciones','baños','servicioH','servicioP','tipoPropiedad'];

    public $idPropiedad;
    public $precio;
    public $año;
    public $mt2;
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
        $this->idEscritura=$args['idEscritura']??4;
        $this->idEstacionamiento=$args['idEstacionamiento']??5;
        $this->numEstacionamientos=$args['numEstacionamientos']??'';
        $this->numPisos=$args['numPisos']??'';
        $this->piso=$args['piso']??0;
        $this->numDepartamento=$args['numDepartamento']??0;
        $this->numElevadores=$args['numElevadores']??0;
        $this->habitaciones=$args['habitaciones']??'';
        $this->baños=$args['baños']??'';
        $this->servicioH=$args['servicioH']??'';
        $this->servicioP=$args['servicioP']??'';
        $this->tipoPropiedad=$args['tipoPropiedad']??4;
    }

    //buscar una registro por su ID
    public static function find($id){
        //obteniendo la propiedad
        $query = "SELECT * FROM ". static::$tabla ." WHERE idPropiedad=${id}";
        $resultado=self::consultarSQL($query);
        return array_shift($resultado);
    }

    //  buscar una registro por su tipo de propiedad
    //  public static function tipoPropiedad($num){
    //     //obteniendo la propiedad
    //     $query = "SELECT * FROM ". static::$tabla ." WHERE tipoPropiedad=${num}";
    //     $resultado=self::consultarSQL($query);
    //     return array_shift($resultado);
    // }

    public function validar(){

        if(!$this->precio){
            self::$errores['precio'] = "El precio es obligatorio";
        }
        if(!$this->año){
            self::$errores['año'] = "El año es obligatorio";
        }
        if(!$this->mt2){
            self::$errores['mt2'] = "Los metros cuadrados son obligatorios";
        }
        if(!$this->idEscritura){
            self::$errores['idEscritura'] = "El tipo de escritura es obligatorio";
        }
        if(!$this->idEstacionamiento){
            self::$errores['idEstacionamiento'] = "El tipo de estacionamiento es obligatorio";
        }
        if(!$this->numEstacionamientos){
            self::$errores['numEstacionamientos'] = "El número de estacionamientos es obligatorio";
        }
        if(!$this->numPisos){
            self::$errores['numPisos'] = "El número de pisos es obligatorio";
        }
        if(!$this->habitaciones){
            self::$errores['habitaciones'] = "El número de habitaciones es obligatorio";
        }
        if(!$this->baños){
            self::$errores['baños'] = "El número de baños es obligatorio";
        }
        if(!$this->servicioH){
            self::$errores['servicioH'] = "El número de habitaciones de servicio es obligatorio";
        }
        if(!$this->servicioP){
            self::$errores['servicioP'] = "El número de patios de servicio es obligatorio";
        }
    
        return self::$errores;
    }
}



