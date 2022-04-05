<?php

namespace Model;

class DireccionUsuario extends activeRecord{
    protected static $tabla='direccionusuario';
    protected static $columnas_DB=['id','estado','municipioDelegacion','calle','colonia'];

    public $id;
    public $estado;
    public $municipioDelegacion;
    public $calle;
    public $colonia;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->estado=$args['estado']??'';
        $this->municipioDelegacion=$args['municipioDelegacion']??'';
        $this->calle=$args['calle']??'';
        $this->colonia=$args['colonia']??'';
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
    
        return self::$errores;
    }
}



