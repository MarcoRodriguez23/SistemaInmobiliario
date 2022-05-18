<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1 class="titulo-venta">Proceso de venta</h1>

<main class="contenedor">
    <h4>Información sobre la propiedad</h4>
    <section class="info-propiedad-venta">
        <div>
            <label for="">Calle</label>
            <p><?php echo s($direccion->calle); ?></p>
        </div>
        <div>
            <label for="">Colonia</label>
            <p><?php echo s($direccion->colonia); ?></p>
        </div>
        <div>
            <label for="">Municipio/Delegación</label>
            <p><?php echo s($direccion->municipioDelegacion); ?></p>
        </div>
        <div>
            <label for="">Estado</label>
            <p><?php echo s($direccion->estado); ?></p>
        </div>
        <div>
            <label for="">Núm. Exterior</label>
            <p><?php echo s($direccion->numExterior); ?></p>
        </div>
        <div>
            <label for="">Núm. Interior</label>
            <p><?php echo s($direccion->numInterior); ?></p>
        </div>
        <div>
            <label for="">Tipo de propiedad</label>
            <p><?php echo s($propiedad->tipoPropiedad); ?></p>
        </div>
        
        <div>
            <label for="">Precio</label>
            <p class="precio"><?php echo $propiedad->precio; ?></p>
        </div>
        <div>
            <label for="">Comisión de venta</label>
            <p><?php echo $propiedad->comision; ?> %</p>
        </div>
    </section>
</main>

<div class="muebles-amenidades contenedor">
    <div>
        <h3>Muebles</h3>
        <ul>
            <?php
                $arreglo = explode(", ",$propiedad->muebles);
                for ($i=0; $i < sizeof($arreglo); $i++) { 
                    echo 
                    '<li>
                        <img src="/build/img/Iconos/'.$arreglo[$i].'.svg" alt="icono">
                        '.strtoupper($arreglo[$i]).'
                    </li>';
                }
            ?>
        </ul>
    </div>

    <div>
        <h3>Amenidades</h3>
        <ul>
        <?php
                $arreglo = explode(", ",$propiedad->amenidades);
                for ($i=0; $i < sizeof($arreglo); $i++) { 
                    echo 
                    '<li>
                        <img src="/build/img/Iconos/'.$arreglo[$i].'.svg" alt="icono">
                        '.strtoupper($arreglo[$i]).'
                    </li>';
                }
            ?>
        </ul>
    </div>
</div>

<section class="contenedor">
    <h4>Fotografías</h4>
    <div class="fotos-actuales contenedor">
        <?php foreach($fotos as $foto): ?>
            <img src="/imagenes/<?php echo $foto->foto;?>" alt="" class="imagen-small">
        <?php endforeach; ?>
    </div> 
</section>
    
<form action="" class="contenedor formulario form-venta" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Responsable de la venta</legend>
        <div>
            <input type="hidden" name="venta[idEncargado]" value="<?php echo $_SESSION['id']; ?>">
            <input type="text" disabled value="<?php echo $_SESSION['nombre']; ?>">
        </div>
        <div>
            <input type="hidden" name="venta[idPropiedad]" value="<?php echo $propiedad->id; ?>">
            <input type="hidden" name="propiedad[status]" value="vendida">
        </div>
    </fieldset>
    <fieldset>
        <legend>Fecha de la venta</legend>
        <div>
            <input type="text" disabled value="<?php echo date('d/m/Y'); ?>">
        </div>
    </fieldset>
    
    <fieldset>
        <legend>Contrato de venta</legend>
        <div>
            <label for="contrato">PDF o imágen(Limite de 8MB)</label>
            <input type="file" id="contrato" accept="image/jpeg, image/png, .pdf" name="contrato">
        </div>
        <?php echo isset($erroresVenta["contrato"]) ? "<p>".$erroresVenta["contrato"]."</p>" : "" ?>
    </fieldset>

    
    <?php echo ($propiedad->status=='vendida' && (empty($erroresVenta))) ? "<h4 class='aviso-venta'>esta propiedad ya fue vendida</h4>"  :  '<input type="submit" value="vender propiedad" class="boton-azul">';?>

</form>