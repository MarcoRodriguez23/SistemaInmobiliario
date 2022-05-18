<main>
    <section class="datos-propiedad contenedor">
        <h3>
            <?php echo $propiedad->tipoPropiedad; ?>
            <?php echo $propiedad->categoria; ?>
            en
            <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; ?>
            <?php echo $direccion->estado; ?>
            <?php echo "CP:".$direccion->CP; ?>
        </h3>
    </section>
    <section class="carrousel contenedor">
        <div class="carrousel-contenedor">
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior-seleccion">
                <img src="/build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-seleccion">
                <!-- <aqui se van a ir agregando las imagenes -->
                <?php foreach($fotos as $foto): ?>
                    <img class=
                    "carrousel-item propiedad" src="/imagenes/<?php echo $foto->foto;?>" alt="foto del inmueble">
                <?php endforeach; ?>
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente-seleccion">
                <img src="/build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores-seleccion"></div>
        </div>
    </section>
</main>
<?php
    require_once __DIR__."/../templates/infoPropiedad.php";
