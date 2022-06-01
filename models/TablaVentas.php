<?php

namespace Model;

class TablaVentas extends activeRecord{
    protected static $tabla='venta';
    protected static $columnas_DB=['id','nombre','apellido','calle','colonia','municipioDelegacion','estado','precio','comision','fecha','contrato','nivel'];

    public $id;
    public $nombre;
    public $apellido;
    public $calle;
    public $colonia;
    public $municipioDelegacion;
    public $estado;
    public $precio;
    public $comision;
    public $fecha;
    public $contrato;
    public $nivel;
    

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->nombre=$args['nombre']??'';
        $this->apellido=$args['apellido']??'';
        $this->calle=$args['calle']??'';
        $this->colonia=$args['colonia']??'';
        $this->municipioDelegacion=$args['municipioDelegacion']??'';
        $this->estado=$args['estado']??'';
        $this->precio=$args['precio']??'';
        $this->comision=$args['comision']??'';
        $this->fecha=date('Y/m/d');
        $this->contrato=$args['contrato']??'';
        $this->nivel=$args['nivel']??'';
    }

}