<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="icon" type="image/jpg" href="/build/img/GALLARDO SVG.svg"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Inmobiliaria Gallardo</title>
</head>
<body>
<header class="header">
        <div class="contenedor barra">
            <a href="/" class="logotipo">
                <img  src="/build/img/GALLARDO SVG.svg" alt="Logotipo">
            </a>
            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="icono-responsive">
            </div>
            <nav class="navegacion">
                <a href="/" class="menu">HOME</a>
                <a href="/servicios" class="menu">SERVICIOS</a>
                <span id="span-inmuebles" class="menu">INMUEBLES</span>
                <ol id="enlaces-inmuebles">
                    <li> <a href="/casas" class="submenu">CASAS</a> </li>
                    <li> <a href="/departamentos" class="submenu">DEPARTAMENTOS</a> </li>
                    <li> <a href="/terrenos" class="submenu">TERRENOS</a> </li>
                    <li> <a href="/comercial" class="submenu">COMERCIAL</a> </li>
                </ol>
                <a href="/blog" class="menu">BLOG</a>
                <a href="/contacto" class="menu">CONTACTO</a>
            </nav>
        </div> <!--.barra-->
    </header>

    <?php
    echo $contenido;
    ?>

    <footer class="bg-primary mt-3 text-white pt-2">
        
        <div class="row align-items-center justify-content-center pb-2 m-0">

            <div class="col-md-4 mb-2 mb-md-0">
                <a href="/login" class="logotipo">
                    <img src="/build/img/GALLARDO SVG.svg" alt="Logotipo">
                </a>
            </div>

            <div class="col-md-4 mb-2 mb-md-0 fw-bold text-center">
                <p>
                    Cuauhtémoc, Ciudad de México
                </p>
                <p>
                    tel: 55-7379-2800
                </p>
            </div>

            <div class="col-md-4 footer__socialMedia">
                <h4 class="text-center">Encuentranos en:</h4>
                <div class="socialMedia-imagenes mx-3 ">
                    <a href="#">
                        <img src="/build/img/Iconos/facebook.png" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="/build/img/Iconos/mercadolibre.png" alt="Mercado libre">
                    </a>
                    <a href="https://wa.me/5573792800" target="_blank">
                        <img src="/build/img/Iconos/whatsapp.png" alt="whatsapp">
                    </a>
                </div>
            </div>

        </div> <!--fin row-->

        <p class="text-center mb-0 copyright">
            Todos los derechos reservados <?php echo date('Y'); ?> &copy;
        </p>
    
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="build/js/bundle.js"></script>
</body>
</html>