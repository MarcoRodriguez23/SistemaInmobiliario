<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<main>
    <section class="datos-propiedad contenedor">
        <h3>
            <?php echo $propiedad->tipoPropiedad; ?>
            <?php echo $propiedad->categoria?>
            en
            <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; ?>
            <?php echo $direccion->estado; ?>
            <?php echo "CP:".$direccion->CP; ?>
        </h3>
    </section>
    <div class="fotos-actuales contenedor">
        <?php foreach($fotos as $foto): ?>
            <img src="/imagenes/<?php echo $foto->foto;?>" alt="" class="imagen-small">
        <?php endforeach; ?>
    </div>   
</main>

<?php
    require_once __DIR__."/../../templates/infoPropiedad.php";
