<?php

namespace MVC;

class Router{
    public array $rutasGET=[];
    public array $rutasPOST=[];
    public $rutas_protegidas;
    
    public function get($url, $fn){
        $this->rutasGET[$url]=$fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url]=$fn;
    }

    public function comprobarRutas(){
        session_start();
        $auth= $_SESSION['login']??null;
        
        //arreglo de rutas protegidas
        $this->rutas_protegidas=['/admin','/admin/propiedades/create','/admin/propiedades/update','/admin/propiedades/delete','/admin/propiedades/deleteFotos','/admin/propiedades/info','/admin/propiedades/date','/admin/propiedades/sell','/admin/agentes','/admin/agentes/create','/admin/agentes/update','/admin/agentes/delete','/admin/vendedores','/admin/vendedores/create','/admin/vendedores/update','/admin/vendedores/delete','/admin/agenda','/admin/ventas'];
        

        
        //CAMBIAR PATH_INFO POR REQUEST_URI AL PASAR A HEROKU
        $urlActual =  ($_SERVER['REQUEST_URI']==='')?'/': $_SERVER['REQUEST_URI'];
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        //dividimos la URL actual cada vez que exista un '?' eso indica que se están pasando variables por la url
        $splitURL = explode('?', $urlActual);
        // debuguear($splitURL);
        
        if ($metodo === 'GET') {
            $fn = $this->rutasGET[$splitURL[0]] ?? null; //$splitURL[0] contiene la URL sin variables 
        } else {
        $fn = $this->rutasPOST[$splitURL[0]] ?? null;
        }

        //protegiendo rutas
        if(in_array($urlActual, $this->rutas_protegidas) && !$auth){
            header('Location: /');
        }


        if($fn){
            //la URL existe y tiene una funcion asociada, el this le pasa las rutas get y post (atributos)
            call_user_func($fn,$this);
        }
        else{
            echo "pagina no encontrada";
        }
        // debuguear($this);
    }

    // muestra la vista
    public function view($view, $datos=[]){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();
        
        $urlActual =  ($_SERVER['REQUEST_URI']==='')?'/': $_SERVER['REQUEST_URI'];
        //dividimos la URL actual cada vez que exista un '?' eso indica que se están pasando variables por la url
        $splitURL = explode('?', $urlActual);
        
        // if ($metodo === 'GET') {
        //     $fn = $this->rutasGET[$splitURL[0]] ?? null; //$splitURL[0] contiene la URL sin variables 
        // } else {
        // $fn = $this->rutasPOST[$splitURL[0]] ?? null;
        // }

        //si se ingresa a alguna ruta de admin mostrar el layout de admin
        if(in_array($splitURL[0], $this->rutas_protegidas)){
            include __DIR__ . "/views/layoutAdmin.php";
        }
        else{
            include __DIR__ . "/views/layout.php";
        }
    }
}