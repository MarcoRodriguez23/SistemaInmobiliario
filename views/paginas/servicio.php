<main class="contenedor">
    <div class="info-servicio">
        <h1> <?php echo $servicio->titulo; ?></h1>
        <picture class="imagen-servicio">
            <img loading="lazy" src="/build/img/anuncio1.jpg" alt="<?php echo "Imagen Servicio ".$servicio->id; ?>">
        </picture>
        <p class="texto-servicio">
            <?php echo $servicio->descripcion; ?>
        </p>
        
        <a href="/servicios" class="boton">Volver</a>
    </div>
</main>