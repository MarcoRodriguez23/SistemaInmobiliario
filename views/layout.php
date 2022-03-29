<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="shortcut icon" href="build/img/logo.jpeg">
    <title>Inmobiliaria Gallardo</title>
</head>
<body>
    <header class="header">
        <div class="contenedor barra">
            <a href="/" class="logotipo">
                <img  src="build/img/GALLARDO SVG.svg" alt="Logotipo">
            </a>
            <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="icono-responsive">
            </div>
            <nav class="navegacion">
                <a href="/">HOME</a>
                <a href="/nosotros">NOSOTROS</a>
                <a href="/servicios">SERVICIOS</a>
                <a href="/inmuebles">CASAS</a>
                <a href="/departamentos">DEPARTAMENTOS</a>
                <a href="/terrenos">TERRENOS</a>
                <a href="/blog">BLOG</a>
                <a href="/contacto">CONTACTO</a>
                <?php if(!$auth): ?>
                    <!-- <a href="/login">Iniciar Sesión</a> -->
                <?php endif; ?>
                <?php if($auth): ?>
                    <!-- <a href="/logout">Cerrar Sesión</a> -->
                <?php endif; ?>
            </nav>
        </div> <!--.barra-->
    </header>

    <?php
    echo $contenido;
    ?>

<footer class="footer">
    <div class="footer-superior">
        <div class="footer-logo">
            <a href="index.php" class="logotipo">
                <img  src="build/img/GALLARDO SVG.svg" alt="Logotipo">
            </a>
        </div>
        <div class="footer-informacion">
            <p>
                Cuauhtémoc, Ciudad de México
            </p>
            <p>
                tel: 55-7379-2800
            </p>
        </div>
        <div class="footer-socialMedia">
            <h4>Encuentranos en:</h4>
            <div class="socialMedia-imagenes">
                <a href="#">
                    <img src="../build/img/facebook.svg" alt="Facebook">
                </a>
                <a href="#">
                    <img src="../build/img/mercadolibre.png" alt="Mercado libre">
                </a>
                <a href="https://wa.me/5573792800" target="_blank">
                    <img src="../build/img/whatsapp.svg" alt="whatsapp">
                </a>
            </div>
        </div>
    </div>
    <p class="copyright">
        Todos los derechos reservados <?php echo date('Y'); ?> &copy;
    </p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>