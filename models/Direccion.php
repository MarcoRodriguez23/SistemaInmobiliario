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

    //buscar una registro por su ID
    public static function find($id){
        //obteniendo la propiedad
        $query = "SELECT * FROM ". static::$tabla ." WHERE idPropiedad=${id}";
        $resultado=self::consultarSQL($query);
        return array_shift($resultado);
    }

    public function validar(){
        if(!$this->estado){
            self::$errores['estado'] = "El estado es obligatorio";
        }
        if(!$this->municipioDelegacion){
            self::$errores['municipioDelegacion'] = "El municipio/Delegación es obligatorio";
        }
        if(!$this->calle){
            self::$errores['calle'] = "La calle es obligatoria";
        }
        if(!$this->colonia){
            self::$errores['colonia'] = "La colonia es obligatoria";
        }
        if(!$this->numExterior){
            self::$errores['numExterior'] = "El número exterior es obligatorio";
        }
        if(!$this->numInterior){
            self::$errores['numInterior'] = "El número interior es obligatorio";
        }
        if(!$this->linkGoogle){
            self::$errores['linkGoogle'] = "El link de google Maps es obligatorio";
        }
    
        return self::$errores;
    }
}



