<?php

namespace Model;

class Propiedad extends activeRecord{
    protected static $tabla='propiedad';
    protected static $columnas_DB=['id','precio','año','mt2','idEscritura','idEstacionamiento','numEstacionamientos','numIdEstacionamiento','numPisos','piso','numDepartamento','numElevadores','habitaciones','baños','servicioH','servicioP','tipoPropiedad','status','comision','numPredio','mantenimiento','categoria'];

    public $id;
    public $precio;
    public $año;
    public $mt2;
    public $idEscritura;
    public $idEstacionamiento;
    public $numEstacionamientos;
    public $numIdEstacionamiento;
    public $numPisos;
    public $piso;
    public $numDepartamento;
    public $numElevadores;
    public $habitaciones;
    public $baños;
    public $servicioH;
    public $servicioP;
    public $tipoPropiedad;
    public $status;
    public $comision;
    public $numPredio;
    public $mantenimiento;
    public $categoria;


    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->precio=$args['precio']??'';
        $this->año=$args['año']??'';
        $this->mt2=$args['mt2']??'';
        $this->idEscritura=$args['idEscritura']??'';
        $this->idEstacionamiento=$args['idEstacionamiento']??'';
        $this->numEstacionamientos=$args['numEstacionamientos']??'';
        $this->numIdEstacionamiento=$args['numIdEstacionamiento']??'';
        $this->numPisos=$args['numPisos']??'';
        $this->piso=$args['piso']??0;
        $this->numDepartamento=$args['numDepartamento']??0;
        $this->numElevadores=$args['numElevadores']??0;
        $this->habitaciones=$args['habitaciones']??'';
        $this->baños=$args['baños']??'';
        $this->servicioH=$args['servicioH']??'';
        $this->servicioP=$args['servicioP']??'';
        $this->tipoPropiedad=$args['tipoPropiedad']??'';
        $this->status=$args['status']??0;
        $this->comision=$args['comision']??0;
        $this->numPredio=$args['numPredio']??'';
        $this->mantenimiento=$args['mantenimiento']??'';
        $this->categoria=$args['categoria']??'';
    }

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
            self::$errores['numEstacionamientos'] = "El número de cajones es obligatorio";
        }
        if(!$this->numIdEstacionamiento){
            self::$errores['numIdEstacionamiento'] = "El número de estacionamiento es obligatorio";
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
        if(!$this->tipoPropiedad){
            self::$errores['tipoPropiedad'] = "Especificar el tipo de propiedad es obligatorio";
        }
        if(!$this->comision){
            self::$errores['comision'] = "Especificar la comisión";
        }
        if(!$this->numPredio){
            self::$errores['numPredio'] = "El número de predio es obligatorio";
        }
        if(!$this->mantenimiento){
            self::$errores['mantenimiento'] = "Especificar el precio de mantenimiento";
        }
        if(!$this->categoria){
            self::$errores['categoria'] = "Indicar si se esta o no en remodelación";
        }
    
        return self::$errores;
    }
}



