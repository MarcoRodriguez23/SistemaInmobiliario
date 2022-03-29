<main>
    <img src="" alt="<?php echo 'imagen del articulo '.$entrada->id; ?>">
    <div class="info-articulo">
        <h1>
            <?php echo $entrada->titulo; ?>
        </h1>

        <p>
            <?php echo $entrada->descripcion; ?>
        </p>

        <a href="/blog" class="boton-morado">Volver a los articulos</a>
    </div>
</main>
