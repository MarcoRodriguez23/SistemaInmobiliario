<main class="contenedor">
    <div class="info-servicios">
        <h1> <?php echo $servicio->titulo; ?></h1>
        <picture class="imagen-servicios">
            <img loading="lazy" src="/build/img/<?php echo s($servicio->imagen); ?>" alt="<?php echo "Imagen Servicio ".$servicio->id; ?>">
        </picture>
        <p class="texto-servicios">
            <?php echo $servicio->descripcion; ?>
        </p>
        <div class="boton-servicio">
        <a href="/servicios" class="boton-principal">Volver</a>
        </div>
    </div>
</main>