<?php

namespace Controllers;

use MVC\Router;
require_once '../Router.php';

use Model\Propiedad;
require_once '../models/Propiedad.php';
use Model\Direccion;
require_once '../models/Direccion.php';
use Model\Foto;
require_once '../models/Foto.php';
use Model\Usuario;
require_once '../models/Usuario.php';
use Model\Citas;
require_once '../models/Citas.php';
use Model\Venta;
require_once '../models/Venta.php';

use Intervention\Image\ImageManagerStatic as Image;

class HouseController{
    
    //TODO BIEN
    public static function index(Router $router){
        //CREANDO LOS OBJETOS Y VARIABLES QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $direcciones=Direccion::all();
        $fotos = Foto::all();
        $filtro = [];
        $mensaje=$_GET['mensaje']??null;

        //METODO POST PARA EL FILTRO DE BUSQUEDA
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            $filtro = $_POST['filtro'];

            if($_SESSION['nivel']==1){
                $propiedades = Propiedad::filter($filtro,$_SESSION['id']);
            }
            elseif($_SESSION['nivel']==2){
                $propiedades = Propiedad::filter($filtro,$_SESSION['id']);
            }
            elseif($_SESSION['nivel']==3){
                $usuario = Usuario::find($_SESSION['id']);
                $creador = $usuario->idCreador;
                $propiedades = Propiedad::filter($filtro,$creador);
            }
        }
        else{
            //EL SUPERADMINISTRADOR PUEDE VER TODAS LAS PROPIEDADES
            if($_SESSION['nivel']==1){
                $propiedades = Propiedad::all();
            }
            //EL AGENTE INMOBILIARIO PUEDE VER LAS PROPIEDADES CREADAS POR EL Y POR EL SUPERADMINISTRADOR
            elseif($_SESSION['nivel']==2){
                $propiedades = Propiedad::allXCreador($_SESSION['id']);
            }
            //EL VENDEDOR PUEDE VER LAS PROPIEADADES CREADAS POR EL SUPERADMINISTRADOR O POR SU AGENTE A CARGO
            elseif($_SESSION['nivel']==3){
                $usuario = Usuario::find($_SESSION['id']);
                $creador = $usuario->idCreador;
                $propiedades = Propiedad::allXCreador($creador);
            }
        }
        
        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/lista',[
            'propiedades'=>$propiedades,
            'direcciones'=>$direcciones,
            'mensaje'=>$mensaje,
            'fotos'=>$fotos,
            'filtro'=>$filtro
        ]);
    }

    //VERIFICAR FOTOGRAFIAS
    public static function createHouse(Router $router){
        //CREANDO LOS OBJETOS Y VARIABLES QUE ALMACENARAN LA INFORMACION EN LAS DIFERENTES TABLAS
        $propiedad = new Propiedad();
        $direccion = new Direccion();
        $muebles = "";
        $amenidades = "";
        $metodosVenta = "";

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresPropiedad = [];
        $erroresDireccion = [];        

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //creando nueva instancia de cada clase
            $propiedad = new Propiedad($_POST['propiedad']);        
            $direccion = new Direccion($_POST['direccion']);   
            foreach ($_POST['muebles'] as $key) {
                if($muebles === ""){
                    $muebles .= $key;
                }
                else{
                    $muebles .= ", ".$key;
                }
            } 
            foreach ($_POST['amenidades'] as $key) {
                if($amenidades === ""){
                    $amenidades .= $key;
                }
                else{
                    $amenidades .= ", ".$key;
                }
            }    
            foreach ($_POST['metodosventa'] as $key) {
                if($metodosVenta === ""){
                    $metodosVenta .= $key;
                }
                else{
                    $metodosVenta .= ", ".$key;
                }
            }
            
            $propiedad->muebles=$muebles;
            $propiedad->amenidades=$amenidades;
            $propiedad->metodosVenta=$metodosVenta;

            $erroresPropiedad = $propiedad->validar();

            if($propiedad->tipoPropiedad){
                switch ($propiedad->tipoPropiedad) {
                    //Casa
                    case '1':
                        $erroresPropiedad = $propiedad->validarCasa();
                        break;
                    //Departamento
                    case '2':
                        $erroresPropiedad = $propiedad->validarDepartamento();
                        break;
                    //Terreno
                    case '3':
                        $erroresPropiedad = $propiedad->validarTerreno();
                        break;
                    //Bodega
                    case '4':
                        $erroresPropiedad = $propiedad->validarBodega();
                        break;
                    //Local
                    case '5':
                        $erroresPropiedad = $propiedad->validarLocal();
                        break;
                    //Oficina
                    case '6':
                        $erroresPropiedad = $propiedad->validarOficina();
                        break;
                }
            }
            //validando la existencia de erroes en el formulario
            $erroresDireccion = $direccion->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresPropiedad) &&  empty($erroresDireccion)){
                
                // GUARDANDO EN LA BD
                $guardarPropiedad=$propiedad->guardar();
                
                if($guardarPropiedad){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        //mensaje que indica que se creo exitosamente
                        header("Location: /admin?mensaje=1");
                    }
                    
                }
            }        
        }

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/create',[
            'direccion'=>$direccion,
            'erroresDireccion'=>$erroresDireccion,
            'propiedad'=>$propiedad,
            'erroresPropiedad'=>$erroresPropiedad,
            "muebles"=>$muebles,
            "amenidades"=>$amenidades,
            "metodosVenta"=>$metodosVenta
        ]);
    }

    //VERIFICAR CHECKBOXES
    public static function updateHouse(Router $router){

        //buscando en todas las tablas la propiedad e iniciando las variables necesarias
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);    
        $direccion = Direccion::find($id);        
        $muebles =  "";        
        $amenidades = "";        
        $metodosVenta = ""; 
        
        //TRAYENDO LAS DIFERENTES OPCIONES CON LAS QUE SE CUENTA
        $fotos = Foto::find($id);

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresPropiedad= [];
        $erroresDireccion = [];
        $erroresTamaño = [];
    
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //asignar atributos
            $argsPropiedad = $_POST['propiedad'];        
            $argsDireccion = $_POST['direccion'];        
            foreach ($_POST['muebles'] as $key) {
                if($muebles === ""){
                    $muebles .= $key;
                }
                else{
                    $muebles .= ", ".$key;
                }
            } 
            foreach ($_POST['amenidades'] as $key) {
                if($amenidades === ""){
                    $amenidades .= $key;
                }
                else{
                    $amenidades .= ", ".$key;
                }
            }    
            foreach ($_POST['metodosventa'] as $key) {
                if($metodosVenta === ""){
                    $metodosVenta .= $key;
                }
                else{
                    $metodosVenta .= ", ".$key;
                }
            }
            
            //sincronizando la nueva información
            $direccion->sincronizar($argsDireccion) ;
            $propiedad->sincronizar($argsPropiedad) ;       
            $propiedad->muebles=$muebles;
            $propiedad->amenidades=$amenidades;
            $propiedad->metodosVenta=$metodosVenta;

            $sizeTotal=0;
                //ciclo para obtener los MB'S totales que el usuario subira
                if($_FILES['fotos']['size'][0]){
                    foreach ($_FILES['fotos']['size'] as $peso) {
                        $sizeTotal += $peso;
                    }
                    //1MB = 1048576
                    $sizeLimite = 8 * 1048576;
                    if($sizeTotal >= $sizeLimite){
                        $erroresTamaño="Acaba de superar el limite de 8MB";
                    }
                }

            $erroresPropiedad= $propiedad->validar();
            $erroresDireccion = $direccion->validar();
    
            //si no hay errores proceder a los queries hacia la base de datos y la subida de las imagenes
            if(empty($erroresPropiedad) &&  empty($erroresDireccion) && empty($erroresTamaño)){
                
                // GUARDANDO EN LA BD
                $guardarPropiedad=$propiedad->guardar();
                
                if($guardarPropiedad){
                    $guardarDireccion=$direccion->guardar();
                    if($guardarDireccion){
                        //IMAGENES
                        if($_FILES['fotos']['tmp_name'][0]){

                            foreach ($_FILES['fotos']['tmp_name'] as $key) {
                                //generando un nombre unico
                                // echo $key;
                                $nombreFoto = md5(uniqid(rand(),true)).".jpg";
                                
                                //creando el objeto para hacer referencia en la base de datos
                                $foto = new Foto();
                                
                                //asignando valores al objeto de foto
                                $foto->idPropiedad=$id;
                                $foto->foto = $nombreFoto;
            
                                if(!is_dir(CARPETA_IMAGENES)){
                                    mkdir(CARPETA_IMAGENES);
                                }
            
                                //creando el archivo de la foto
                                $img = Image::make($key)->fit(800,600);
                                
                                $img->save(CARPETA_IMAGENES . $nombreFoto);
            
                                $foto->guardar();
                            }
                        }
                        //mensaje que indica que se actualizo exitosamente
                        header("Location: /admin?mensaje=2");
                    }   
                }
            }   
        }
        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/update',[
            'direccion'=>$direccion,
            'erroresDireccion'=>$erroresDireccion,
            'propiedad'=>$propiedad,
            'erroresPropiedad'=>$erroresPropiedad,
            "muebles"=>$muebles,
            "amenidades"=>$amenidades,
            "metodosVenta"=>$metodosVenta,
            "fotos"=>$fotos,
            "erroresTamaño"=>$erroresTamaño
        ]);
    }

    //VERIFICAR
    public static function deleteHouse(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if($id){
                
                $tipo=$_POST['tipo'];
        
                if(validarTipoContenido($tipo)){
                    //eliminando objeto
                    $Propiedad= Propiedad::find($id);
                    $Propiedad->eliminar();
                    $direccion = Direccion::find($id);
                    $direccion->eliminar();
                }
            }
        }
    }

     //TODO BIEN
     public static function deleteFotos(Router $router){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            //validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            

            if($id){
                $fotos = Foto::find($id);
                // para cada foto....
                foreach ($fotos as $foto) {
                    //eliminando el archivo de la carpeta
                    $foto->borrarImagen();
                    //eliminando el objeto de foto
                    $foto->eliminar();
                }
            }
        }
    }

    public static function infoHouse(Router $router){
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $fotos = Foto::find($id);
        $fotos = Foto::find($id);

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/info',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'fotos'=>$fotos,
            'fotos'=>$fotos
        ]);
    }

    public static function dateHouse(Router $router){

        $id = validarORedireccionar('/admin');
        $direccion = Direccion::find($id);
        $cita = new Citas();

        if($_SESSION['nivel']==1){
            $vendedores = Usuario::all();
        }
        elseif($_SESSION['nivel']==2){
            $vendedores = Usuario::allXCreador($_SESSION['id']);
        }

        //TRAYENDO LAS VALIDACIONES PARA EL FORMULARIO
        $erroresCita = Citas::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {

            //creando nueva instancia de cada clase
            $cita = new Citas($_POST['cita']);        
   
            //validando la existencia de erroes en el formulario
            $erroresCita = $cita->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresCita)){
                
                // GUARDANDO EN LA BD
                $guardarCita=$cita->guardar();
                
                if($guardarCita){
                    header("Location: /admin?mensaje=4");                    
                }
            }        
        }

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/visita',[
            "direccion"=>$direccion,
            "cita"=>$cita,
            "vendedores"=>$vendedores,
            "erroresCita"=>$erroresCita
        ]);
    }

    public static function sellHouse(Router $router){
        $venta = new Venta();
        $id = validarORedireccionar('/admin');
        $propiedad = Propiedad::find($id);
        $direccion = Direccion::find($id);
        $vendedores = Usuario::all();
        $fotos = Foto::find($id);
        $venta = Venta::where('idPropiedad',$id);

        $erroresVenta = Venta::getErrores();

        //COMENZANDO EL METODO POST
        if ($_SERVER['REQUEST_METHOD']  === 'POST') {
            
            //creando nueva instancia de cada clase
            $venta = new Venta($_POST['venta']);
            $argsPropiedad = $_POST['propiedad'];
            
            $propiedad->sincronizar($argsPropiedad);

            $nombreContrato = "";
            //IMAGENES
            if($_FILES['contrato']){
                
                //generando un nombre unico
                if($_FILES['contrato']['type']==='image/png' || $_FILES['contrato']['type']==='image/jpg'){
                    $nombreContrato = md5(uniqid(rand(),true)).".jpg";
                }
                if($_FILES['contrato']['type']==='application/pdf'){
                    $nombreContrato = md5(uniqid(rand(),true)).".pdf";
                }
                
                //asignando valores al objeto de foto
                $venta->contrato = $nombreContrato;
            }
                    
            //validando la existencia de erroes en el formulario
            $erroresVenta = $venta->validar();
            
            //si no hay errores proceder a los queries hacia la base de datos
            if(empty($erroresVenta)){

                if(!is_dir(CARPETA_CONTRATOS)){
                    mkdir(CARPETA_CONTRATOS);
                }
                //creando el archivo de la foto
                if($_FILES['contrato']['type']==='image/png' || $_FILES['contrato']['type']==='image/jpg'){
                    $file = Image::make($_FILES['contrato']['tmp_name']);
                    
                    $file->save(CARPETA_CONTRATOS . $nombreContrato);
                }
                elseif($_FILES['contrato']['type']==='application/pdf'){
                    
                    //subiendo el contrato como pdf
                    //indicando el nombre temporal, la carpeta y concatenando el nombre del archivo
                    move_uploaded_file($_FILES['contrato']['tmp_name'],CARPETA_CONTRATOS . $nombreContrato);
                }

                // GUARDANDO EN LA BD
                $guardarVenta=$venta->guardar();
                if($guardarVenta){
                    $guardarPropiedad=$propiedad->guardar();
                    if($guardarPropiedad){
                        header("Location: /admin?mensaje=5");                    
                    }
                }
            }        
        }

        //ENVIANDO LAS VARIABLES A LA VISTA
        $router->view('admin/propiedades/sell',[
            'propiedad'=>$propiedad,
            'direccion'=>$direccion,
            'vendedores'=>$vendedores,
            'erroresVenta'=>$erroresVenta,
            'fotos'=>$fotos,
            'venta'=>$venta
        ]);
    }

}