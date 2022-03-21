<?php

namespace Model;

class Foto extends activeRecord{
    protected static $tabla='foto';
    protected static $columnas_DB=['idFoto','foto','idPropiedad'];

    public $idFoto;
    public $foto;
    public $idPropiedad;

    public function __construct($args=[])
    {
        $this->idFoto=$args['idFoto']??null;
        $this->foto=$args['foto']??'';
        $this->idPropiedad=$args['idPropiedad']??'';
    }

     //buscando las fotos que le pertenecen a una propiedad en especifico
    public static function find($id){
        //obteniendo la propiedad
        $query = "SELECT * FROM ". static::$tabla ." WHERE idPropiedad=${id}";
        $resultado=self::consultarSQL($query);
        return $resultado;
    }

}



