<?php

namespace Model;

class MetodosVenta extends activeRecord{
    protected static $tabla='metodosventa';
    protected static $columnas_DB=['id','fovissste','infonavit','credito','efectivo'];

    public $id;
    public $fovissste;
    public $infonavit;
    public $credito;
    public $efectivo;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->fovissste=$args['fovissste']??0;
        $this->infonavit=$args['infonavit']??0;
        $this->credito=$args['credito']??0;
        $this->efectivo=$args['efectivo']??0;
    }

    public function validar(){

        if($this->fovissste === 0 && $this->infonavit === 0 && $this->credito === 0 && $this->efectivo === 0){
            self::$errores['metodosVenta'] = "Seleccione mínimo una opción.";
        return self::$errores;
        }
    }
}




