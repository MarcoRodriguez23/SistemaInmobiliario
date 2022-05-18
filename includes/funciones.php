<?php


define('TEMPLATES_URL', __DIR__. '/templates');
define('FUNCIONES_URL', __DIR__. 'funciones.php');
define('CARPETA_IMAGENES',$_SERVER['DOCUMENT_ROOT'].'/imagenes/');
define('CARPETA_CONTRATOS',$_SERVER['DOCUMENT_ROOT'].'/contratos/');

function estaAutenticado(){
    session_start();
    if(!$_SESSION['login']){
        return header('Location: /');
    }
}

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

//escapar HTML
function s($html){
    $s=htmlspecialchars($html);
    return $s;
}

function validarTipoContenido($tipo){
    $tipos=['propiedad','vendedor','agente'];

    return in_array($tipo,$tipos);
}

function mostrarNotificacion($codigo){
    $mensaje='';

    switch ($codigo) {
        case 1:
            $mensaje = "Creado Correctamente";
            break;
        
        case 2:
            $mensaje = "Actualizado Correctamente";
            break;

        case 3:
            $mensaje = "Eliminado Correctamente";
            break;

        case 4:
            $mensaje = "Cita creada correctamente";
            break;
        
        case 5:
            $mensaje = "Venta creada correctamente";
            break;

        case 6:
            $mensaje = "El registro no pudo eliminarse";
            break;

        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function validarORedireccionar(string $url){
    //validando la url
    $id = $_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);
    if(!$id){
        header("Location: ${url}");
    }
    return $id;
}