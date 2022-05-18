<?php
    // session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="icon" type="image/jpg" href="/build/img/GALLARDO SVG.svg"/>
    <title>inmobiliaria</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel de administración</h3>
                <p>Hola <?php echo $_SESSION['nombre']; ?></p>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/admin">Propiedades</a>
                </li>
                <?php if($_SESSION['nivel']==1): ?>
                <li>
                    <a href="/admin/agentes">Agente inmobiliario</a>
                </li>
                <?php endif; ?>
                <?php if(!($_SESSION['nivel']==3)): ?>
                <li>
                    <a href="/admin/vendedores">Vendedores</a>
                </li>
                <?php endif; ?>
            </ul>
            <ul class="list-unstyled components">
                <?php if(!($_SESSION['nivel']==3)): ?>
                <li>
                    <a href="/admin/ventas">Ventas</a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="/admin/agenda">Agenda</a>
                </li>
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <!-- <a class="boton descargar" href="/prueba.txt" download="lista-inmuebles.txt">Descargar lista de inmuebles</a> -->
                    <a class="boton-morado descargar" href="/excel">Descargar Lista de inmuebles</a>
                </li>  
            </ul>
            <ul class="list-unstyled components">
                <li>
                    <a href="/logout">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <!-- <i class="fas fa-align-left"></i> -->
                        <span>Menú</span>
                    </button>
                </div>
            </nav>
            <?php
            //aqui se va ir agregando el contenido de cada pagina
            echo $contenido;
            ?>
        </div>
    </div>
</body>
    <script src="/build/js/bundle.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX)-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</html>