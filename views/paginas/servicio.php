<main class="contenedor">
    <div class="info-servicio">
        <h1> <?php echo $servicio->titulo; ?></h1>
        <picture class="imagen-servicio">
            <!-- <source srcset="build/img/escaleras.webp" type="image/webp">
            <source srcset="build/img/escaleras.jpg" type="image/jpeg"> -->
            <img loading="lazy" src="build/img/<?php echo $servicio->imagen; ?>" alt="<?php echo "Imagen Servicio ".$servicio->id; ?>">
        </picture>
        <p class="texto-servicio">
            <?php echo $servicio->descripcion; ?>
        </p>
        
        <a href="/servicios" class="boton">Volver</a>
    </div>
</main>