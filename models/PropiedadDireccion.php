<?php

namespace Model;

class PropiedadDireccion extends activeRecord{
    protected static $tabla='propiedad';
    protected static $columnas_DB=['id','precio','año','mt2','mt2Construccion','escritura','estacionamiento','numEstacionamientos','numIdEstacionamiento','numPisos','piso','numElevadores','habitaciones','baños','servicioH','servicioP','tipoPropiedad','status','comision','numPredio','mantenimiento','categoria','creacion','idCreador','muebles','amenidades','metodosVenta','estado','municipioDelegacion','calle','colonia','numExterior','numInterior','linkGoogle','link360','CP'];

    public $id;
    public $precio;
    public $año;
    public $mt2;
    public $mt2Construccion;
    public $escritura;
    public $estacionamiento;
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
    public $muebles;
    public $amenidades;
    public $metodosVenta;

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
        $this->precio=$args['precio']??'';
        $this->año=$args['año']??0;
        $this->mt2=$args['mt2']??'';
        $this->mt2Construccion=$args['mt2Construccion']??0;
        $this->escritura=$args['escritura']??'';
        $this->estacionamiento=$args['estacionamiento']??0;
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
        $this->muebles=$args['muebles']??'';
        $this->amenidades=$args['amenidades']??'';
        $this->metodosVenta=$args['metodosVenta']??'';

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
}