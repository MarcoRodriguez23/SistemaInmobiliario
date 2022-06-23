<main class="container-xl">
        <h3 class="tituloDorado">
            <?php echo $propiedad->tipoPropiedad; ?>
            <?php echo strtolower($propiedad->categoria); ?>
            en
            <?php echo $propiedad->calle.", ".$propiedad->colonia.", ".$propiedad->municipioDelegacion; ?>
            <?php echo $propiedad->estado; ?>
            <?php echo "CP:".$propiedad->CP; ?>
        </h3>
    <!--slider-->    
    <section class="owl-carousel owl-theme" id="owl-carousel-seleccion">
        <?php foreach($fotos as $foto): ?>
            <div class="item">
                <img src="/imagenes/<?php echo $foto->foto;?>" alt="foto del inmueble">
            </div>
        <?php endforeach; ?>
    </section>
</main>
<?php
    require_once __DIR__."/../templates/infoPropiedad.php";
