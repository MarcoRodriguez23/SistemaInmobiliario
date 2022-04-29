<?php

namespace Model;

class Propiedad extends activeRecord{
    protected static $tabla='propiedad';
    protected static $columnas_DB=['id','precio','año','mt2','mt2Construccion','idEscritura','idEstacionamiento','numEstacionamientos','numIdEstacionamiento','numPisos','piso','numElevadores','habitaciones','baños','servicioH','servicioP','tipoPropiedad','status','comision','numPredio','mantenimiento','categoria','creacion','idCreador'];

    public $id;
    public $precio;
    public $año;
    public $mt2;
    public $mt2Construccion;
    public $idEscritura;
    public $idEstacionamiento;
    public $numEstacionamientos;
    public $numIdEstacionamiento;
    public $numPisos;
    public $piso;
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
    public $creacion;
    public $idCreador;


    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->precio=$args['precio']??'';
        $this->año=$args['año']??0;
        $this->mt2=$args['mt2']??'';
        $this->mt2Construccion=$args['mt2Construccion']??0;
        $this->idEscritura=$args['idEscritura']??'';
        $this->idEstacionamiento=$args['idEstacionamiento']??0;
        $this->numEstacionamientos=$args['numEstacionamientos']??0;
        $this->numIdEstacionamiento=$args['numIdEstacionamiento']??0;
        $this->numPisos=$args['numPisos']??0;
        $this->piso=$args['piso']??0;
        $this->numElevadores=$args['numElevadores']??0;
        $this->habitaciones=$args['habitaciones']??0;
        $this->baños=$args['baños']??0;
        $this->servicioH=$args['servicioH']??0;
        $this->servicioP=$args['servicioP']??0;
        $this->tipoPropiedad=$args['tipoPropiedad']??'';
        $this->status=$args['status']??0;
        $this->comision=$args['comision']??0;
        $this->numPredio=$args['numPredio']??'';
        $this->mantenimiento=$args['mantenimiento']??0;
        $this->categoria=$args['categoria']??0;
        $this->creacion=date('Y/m/d');
        $this->idCreador=$args['idCreador']??1;
    }

    public function validar(){
        if(!$this->tipoPropiedad){
            self::$errores['tipoPropiedad'] = "Especificar el tipo de propiedad es obligatorio";
        }

        return self::$errores;
    }

    public function validarCasa(){
        if(!$this->precio){
            self::$errores['precio'] = "El precio es obligatorio";
        }
        if(!$this->año){
            self::$errores['año'] = "El año es obligatorio";
        }
        if(!$this->mt2){
            self::$errores['mt2'] = "Los metros cuadrados son obligatorios";
        }
        if(!$this->mt2Construccion){
            self::$errores['mt2Construccion'] = "Los metros de construcción";
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
        if(!$this->numPisos){
            self::$errores['numPisos'] = "El número de pisos es obligatorio";
        }
        if(!$this->habitaciones){
            self::$errores['habitaciones'] = "El número de habitaciones es obligatorio";
        }
        if(!$this->baños){
            self::$errores['baños'] = "El número de baños es obligatorio";
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
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
    
        return self::$errores;
    }

    public function validarDepartamento(){
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
        if(!$this->piso){
            self::$errores['piso'] = "Indicar el núm de piso del departamento";
        }
        if(!$this->numElevadores){
            self::$errores['numElevadores'] = "Indicar el núm de elevadores";
        }
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
    
        return self::$errores;
    }

    public function validarTerreno(){
        if(!$this->precio){
            self::$errores['precio'] = "El precio es obligatorio";
        }
        if(!$this->mt2){
            self::$errores['mt2'] = "Los metros cuadrados son obligatorios";
        }
        if(!$this->idEscritura){
            self::$errores['idEscritura'] = "El tipo de escritura es obligatorio";
        }
        if(!$this->comision){
            self::$errores['comision'] = "Especificar la comisión";
        }
        if(!$this->numPredio){
            self::$errores['numPredio'] = "El número de predio es obligatorio";
        }
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
    
        return self::$errores;
    }

    public function validarBodega(){
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
        if(!$this->numPisos){
            self::$errores['numPisos'] = "El número de pisos es obligatorio";
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
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
    
        return self::$errores;
    }

    public function validarLocal(){
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
        if(!$this->numPisos){
            self::$errores['numPisos'] = "El número de pisos es obligatorio";
        }
        if(!$this->habitaciones){
            self::$errores['habitaciones'] = "El número de habitaciones es obligatorio";
        }
        if(!$this->baños){
            self::$errores['baños'] = "El número de baños es obligatorio";
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
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
    
        return self::$errores;
    }

    public function validarOficina(){
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
        if(!$this->baños){
            self::$errores['baños'] = "El número de baños es obligatorio";
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
        if(!$this->status){
            self::$errores['status'] = "Indicar la disponibilidad de la propiedad";
        }
        if(!$this->piso){
            self::$errores['piso'] = "Indicar el núm de piso del departamento";
        }
        if(!$this->numElevadores){
            self::$errores['numElevadores'] = "Indicar el núm de elevadores";
        }
    
        return self::$errores;
    }

    //buscar una registro por su ID
    public static function allXcreador($id){
        //obteniendo la propiedad
        $query = "SELECT * FROM ". static::$tabla ." WHERE idCreador=${id}";
        $resultado=self::consultarSQL($query);
        return $resultado;
    }

    //buscar una registro por su ID
    public static function filter($datos,$nivel){
        $where = "";
        $categoria=$datos['categoria'];
        $precio=$datos['precio'];
        $status=$datos['status'];
        $orden=$datos['orden'];
        $tipo=$datos['tipoPropiedad'];
        $creador=$nivel;

        //Consultas para creador
        if($creador !== "" && $creador != "1"){        
            if($where==""){
                $where.=" idCreador LIKE '$creador' ";
            }
            else{
                $where.="AND idCreador LIKE '$categoria' ";    
            }  
        }//f

        //Consultas para categoria
        if($categoria !== ""){        
            if($where==""){
                $where.=" categoria LIKE '$categoria' ";
            }
            else{
                $where.="AND categoria LIKE '$categoria' ";    
            }  
        }//fin consulta categoria
        
        //Consultas para precio
        if(!empty($precio)){        
            if($where==""){
                $where.=" precio ".$precio." ";
            }
            else{
                $where.=" AND precio ".$precio." ";    
            }  
        }//fin consulta precio  

        //Consultas para status
        if(!empty($status)){        
            if($where==""){
                $where.=" status LIKE '$status' ";
            }
            else{
                $where.="AND status LIKE '$status' ";    
            }  
        }//fin consulta status

        //Consultas para tipo
        if(!empty($tipo)){        
            if($where==""){
                $where.=" tipoPropiedad LIKE '$tipo' ";
            }
            else{
                $where.="AND tipoPropiedad LIKE '$tipo' ";    
            }  
        }//fin consulta tipo

        //agregando la palabra reservada where antes de la consulta en caso de que exista parametros
        if(!empty($where)){
            $whereFinal = " where".$where;
        }
        else{
            $whereFinal = $where;
        }

        //Consultas para orden
        if(!empty($orden)){        
            $whereFinal.= " ".$orden; 
        }//fin consulta orden

        $query = "SELECT * FROM ". static::$tabla .$whereFinal;
        // debuguear($query);
        $resultado=self::consultarSQL($query);
        return $resultado;
    }
}



