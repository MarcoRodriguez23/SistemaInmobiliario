<main class="container-xl">
    <div class="info-servicio">
        <h1 class="tituloDorado"><?php echo $entrada->titulo; ?></h1>

        <img class="img-fluid" src="build/img/conocenos.jpg" alt="<?php echo 'imagen del articulo '.$entrada->id; ?>">

        <p>
            <?php echo $entrada->descripcion; ?>
        </p>

        <a href="/blog" class="botonComercial p-1">Volver a los artículos</a>
    </div>
</main>