<?php
    require_once __DIR__.'/../includes/app.php';

    use MVC\Router;
    use Controllers\AdminController;
    use Controllers\PaginasController;
    use Controllers\LoginController;

    $router = new Router();

    //zona privada
    //zona privada
    $router->get('/admin',[AdminController::class,'index']);
    $router->get('/admin/propiedades/create',[AdminController::class,'createHouse']);
    $router->post('/admin/propiedades/create',[AdminController::class,'createHouse']);
    $router->get('/admin/propiedades/update',[AdminController::class,'updateHouse']);
    $router->post('/admin/propiedades/update',[AdminController::class,'updateHouse']);
    $router->post('/admin/propiedades/delete',[AdminController::class,'deleteHouse']);
    $router->get('/admin/propiedades/info',[AdminController::class,'infoHouse']);
    $router->get('/admin/propiedades/date',[AdminController::class,'dateHouse']);
    $router->post('/admin/propiedades/date',[AdminController::class,'dateHouse']);
    $router->get('/admin/propiedades/sell',[AdminController::class,'sellHouse']);
    $router->post('/admin/propiedades/sell',[AdminController::class,'sellHouse']);

    $router->get('/admin/agentes',[AdminController::class,'agents']);
    $router->get('/admin/agentes/create',[AdminController::class,'createAgent']);
    $router->post('/admin/agentes/create',[AdminController::class,'createAgent']);
    $router->get('/admin/agentes/update',[AdminController::class,'updateAgent']);
    $router->post('/admin/agentes/update',[AdminController::class,'updateAgent']);
    $router->post('/admin/agentes/delete',[AdminController::class,'deleteAgent']);

    $router->get('/admin/vendedores',[AdminController::class,'sellers']);
    $router->get('/admin/vendedores/create',[AdminController::class,'createSeller']);
    $router->post('/admin/vendedores/create',[AdminController::class,'createSeller']);
    $router->get('/admin/vendedores/update',[AdminController::class,'updateSeller']);
    $router->post('/admin/vendedores/update',[AdminController::class,'updateSeller']);
    $router->post('/admin/vendedores/delete',[AdminController::class,'deleteSeller']);

    $router->get('/admin/ganancias',[AdminController::class,'money']);
    $router->get('/admin/agenda',[AdminController::class,'dates']);

    //zona publica
    $router->get('/',[PaginasController::class,'index']);
    $router->get('/nosotros',[PaginasController::class,'nosotros']);
    $router->get('/servicios',[PaginasController::class,'servicios']);
    $router->get('/servicio',[PaginasController::class,'servicio']);
    $router->get('/inmuebles',[PaginasController::class,'inmuebles']);
    $router->get('/inmueble',[PaginasController::class,'inmueble']);
    $router->get('/departamentos',[PaginasController::class,'departamentos']);
    $router->get('/departamento',[PaginasController::class,'departamento']);
    $router->get('/terrenos',[PaginasController::class,'terrenos']);
    $router->get('/terreno',[PaginasController::class,'terreno']);
    $router->get('/blog',[PaginasController::class,'blog']);
    $router->get('/entrada',[PaginasController::class,'entrada']);
    $router->get('/contacto',[PaginasController::class,'contacto']);
    $router->post('/contacto',[PaginasController::class,'contacto']);

    //login y autenticacion
    $router->get('/login',[LoginController::class,'login']);
    $router->post('/login',[LoginController::class,'login']);
    $router->get('/logout',[LoginController::class,'logout']);
    
    $router->comprobarRutas();