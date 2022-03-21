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
        $this->fovissste=$args['fovissste']??'';
        $this->cofinavit=$args['cofinavit']??'';
        $this->credito=$args['credito']??'';
        $this->efectivo=$args['efectivo']??'';
    }
}



