<?php

namespace Model;

class MetodosVenta extends activeRecord{
    protected static $tabla='metodosventa';
    protected static $columnas_DB=['id','fovissste','cofinavit','credito','efectivo'];

    public $id;
    public $fovissste;
    public $cofinavit;
    public $credito;
    public $efectivo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->fovissste=$args['fovissste']??'0';
        $this->cofinavit=$args['cofinavit']??'0';
        $this->credito=$args['credito']??'0';
        $this->efectivo=$args['efectivo']??'0';
    }

    public function validar(){

        if($this->fovissste === '' && $this->cofinavit === '' && $this->credito === '' && $this->efectivo === ''){
            self::$errores['metodosVenta'] = "Seleccione mínimo una opción.";
        return self::$errores;
        }
    }
}




