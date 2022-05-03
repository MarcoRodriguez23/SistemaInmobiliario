<?php

namespace Model;

class Citas extends activeRecord{
    protected static $tabla='citas';
    protected static $columnas_DB=['id','idPropiedad','nombres','apellidos','telefono','fecha','hora','idEncargado'];

    public $id;
    public $idPropiedad;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $fecha;
    public $hora;
    public $idEncargado;

    public function __construct($args=[])
    {
        $this->id=$args['id']??null;
        $this->idPropiedad=$args['idPropiedad']??'';
        $this->nombres=$args['nombres']??'';
        $this->apellidos=$args['apellidos']??'';
        $this->telefono=$args['telefono']??'';
        $this->fecha=$args['fecha']??'';
        $this->hora=$args['hora']??'';
        $this->idEncargado=$args['idEncargado']??'';
    }

    public function validar(){
        if(!$this->nombres){
            self::$errores["nombres"]="Debe ingresar su nombre";
        }
        if(!$this->apellidos){
            self::$errores["apellidos"]="Debe ingresar sus apellidos";
        }
        if(!$this->telefono){
            self::$errores["telefono"]="debes de añadir un teléfono";
        }
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores["formatoTelefono"]="Formato de teléfono no valido";
        }
        if(!$this->fecha){
            self::$errores["fecha"]="Debe escoger una fecha para su visita";
        }
        if(!$this->hora){
            self::$errores["hora"]="Debe escoger una hora para su visita";
        }
        if(!$this->idEncargado){
            self::$errores["idEncargado"]="Debe escoger un vendedor";
        }
        return self::$errores;
    }

    public static function filter($datos,$id,$nivel){
        $where = "";
        $estado=$datos['estado'];
        $calle=$datos['calle'];
        $colonia=$datos['colonia'];
        $municipioDelegacion=$datos['municipioDelegacion'];
        $orden=$datos['orden'];
        
        //
        if(!empty($estado)){        
            if($where==""){
                $where.=" estado LIKE '".$estado."' ";
            }
            else{
                $where.=" AND estado LIKE '".$estado."' ";    
            }  
        }// 

        //
        if(!empty($calle)){        
            if($where==""){
                $where.=" calle LIKE '".$calle."' ";
            }
            else{
                $where.=" AND calle LIKE '".$calle."' ";    
            }  
        }// 

        //
        if(!empty($colonia)){        
            if($where==""){
                $where.=" colonia LIKE '".$colonia."' ";
            }
            else{
                $where.=" AND colonia LIKE '".$colonia."' ";    
            }  
        }// 

        //
        if(!empty($municipioDelegacion)){        
            if($where==""){
                $where.=" municipioDelegacion LIKE '".$municipioDelegacion."' ";
            }
            else{
                $where.=" AND municipioDelegacion LIKE '".$municipioDelegacion."' ";    
            }  
        }// 
        
        //agregando la palabra reservada where antes de la consulta en caso de que exista parametros
        if(!empty($where)){
            $whereFinal = " WHERE".$where;
        }
        else{
            $whereFinal = $where;
        }
        //query para ver toas las citas con el filtro
        $query = "SELECT * FROM ". static::$tabla. " WHERE idPropiedad IN (SELECT id FROM direccion" . $whereFinal.")";

        //cambios en el query para ver solamente lo que el agente o vendedor tiene permitido
        if($nivel !=1){
            $query .= " AND idEncargado IN (SELECT id FROM usuario WHERE id = " .$id . " OR idCreador = ".$id.")";
        }

        //Consultas para orden
        if(!empty($orden)){        
            if($orden == 1){
                $query.= " ORDER BY fecha ASC"; 
            }
            elseif ($orden == 2) {
                $query.= " ORDER BY fecha DESC"; 
            }
        }//fin consulta orden



        $resultado=self::consultarSQL($query);
        return $resultado;
    }

    // Mostrara todas las citas del agente y de sus vendedores
    public static function CitasAgenteOVendedor($id) {
        $query = "SELECT * FROM citas WHERE idPropiedad IN (SELECT id FROM direccion) AND idEncargado IN (SELECT id FROM usuario WHERE id = ".$id." OR idCreador = ".$id.")";
        $resultado = self::consultarSQL($query);
        return $resultado ;
    }
}