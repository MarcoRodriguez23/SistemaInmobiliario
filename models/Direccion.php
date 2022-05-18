<?php

namespace Model;

class Direccion extends activeRecord{
    protected static $tabla='direccion';
    protected static $columnas_DB=['id','estado','municipioDelegacion','calle','colonia','numExterior','numInterior','linkGoogle','link360','CP'];

    public $id;
    public $estado;
    public $municipioDelegacion;
    public $calle;
    public $colonia;
    public $numExterior;
    public $numInterior;
    public $linkGoogle;
    public $link360;
    public $CP;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->estado=$args['estado']??'';
        $this->municipioDelegacion=$args['municipioDelegacion']??'';
        $this->calle=$args['calle']??'';
        $this->colonia=$args['colonia']??'';
        $this->numExterior=$args['numExterior']??'';
        $this->numInterior=$args['numInterior']??'';
        $this->linkGoogle=$args['linkGoogle']??'';
        $this->link360=$args['link360']??'';
        $this->CP=$args['CP']??'';
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
        // if(!$this->linkGoogle){
        //     self::$errores['linkGoogle'] = "El link de google Maps es obligatorio";
        // }
        if(!$this->CP){
            self::$errores['CP'] = "El código postal es obligatorio";
        }
    
        return self::$errores;
    }
}



