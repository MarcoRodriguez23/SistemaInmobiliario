<main class="container-xl">
    <div class="info-servicio">

        <h1 class="tituloDorado"> <?php echo $servicio->titulo; ?></h1>


        <img class="img-fluid" loading="lazy" src="/build/img/<?php echo s($servicio->imagen); ?>" alt="<?php echo "Imagen Servicio ".$servicio->id; ?>">

        <p>
            <?php echo $servicio->descripcion; ?>
        </p>

        <a href="/servicios" class="botonComercial p-1">Volver</a>

    </div>
</main>