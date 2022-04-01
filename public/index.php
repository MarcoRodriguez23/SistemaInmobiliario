<?php
    require_once __DIR__.'/../includes/app.php';

    use MVC\Router;
    use Controllers\AdminController;
    use Controllers\PaginasController;
    use Controllers\LoginController;
    use Controllers\HouseController;
    use Controllers\AgentController;
    use Controllers\SellerController;

    $router = new Router();

    //zona privada
    //zona privada
    $router->get('/admin',[HouseController::class,'index']);
    $router->get('/admin/propiedades/create',[HouseController::class,'createHouse']);
    $router->post('/admin/propiedades/create',[HouseController::class,'createHouse']);
    $router->get('/admin/propiedades/update',[HouseController::class,'updateHouse']);
    $router->post('/admin/propiedades/update',[HouseController::class,'updateHouse']);
    $router->post('/admin/propiedades/delete',[HouseController::class,'deleteHouse']);
    $router->get('/admin/propiedades/info',[HouseController::class,'infoHouse']);
    $router->get('/admin/propiedades/date',[HouseController::class,'dateHouse']);
    $router->post('/admin/propiedades/date',[HouseController::class,'dateHouse']);
    $router->get('/admin/propiedades/sell',[HouseController::class,'sellHouse']);
    $router->post('/admin/propiedades/sell',[HouseController::class,'sellHouse']);

    $router->get('/admin/agentes',[AgentController::class,'agents']);
    $router->get('/admin/agentes/create',[AgentController::class,'createAgent']);
    $router->post('/admin/agentes/create',[AgentController::class,'createAgent']);
    $router->get('/admin/agentes/update',[AgentController::class,'updateAgent']);
    $router->post('/admin/agentes/update',[AgentController::class,'updateAgent']);
    $router->post('/admin/agentes/delete',[AgentController::class,'deleteAgent']);

    $router->get('/admin/vendedores',[SellerController::class,'sellers']);
    $router->get('/admin/vendedores/create',[SellerController::class,'createSeller']);
    $router->post('/admin/vendedores/create',[SellerController::class,'createSeller']);
    $router->get('/admin/vendedores/update',[SellerController::class,'updateSeller']);
    $router->post('/admin/vendedores/update',[SellerController::class,'updateSeller']);
    $router->post('/admin/vendedores/delete',[SellerController::class,'deleteSeller']);

    $router->get('/admin/ventas',[AdminController::class,'money']);
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
    $router->get('/excel',[PaginasController::class,'excel']);

    //login y autenticacion
    $router->get('/login',[LoginController::class,'login']);
    $router->post('/login',[LoginController::class,'login']);
    $router->get('/crear',[LoginController::class,'crear']);
    $router->get('/logout',[LoginController::class,'logout']);
    
    $router->comprobarRutas();