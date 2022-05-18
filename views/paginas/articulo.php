<main>
    <div class="info-articulo">
        <h1 class="texto-principal">
            <?php echo $entrada->titulo; ?>
        </h1>

        <img src="build/img/conocenos.jpg" alt="<?php echo 'imagen del articulo '.$entrada->id; ?>" class="imagen-articulo">

        <p>
            <?php echo $entrada->descripcion; ?>
        </p>

        <a href="/blog" class="boton-principal">Volver a los articulos</a>
    </div>
</main>
