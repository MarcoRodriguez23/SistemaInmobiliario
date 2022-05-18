<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1>Actualizar propiedad</h1>
<form method="POST" class="w-100" action="/admin/propiedades/deleteFotos">
    <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
    <input type="submit" value="Eliminar Fotos actuales" class="boton-rojo" onclick="return ConfirmDelete()">
</form>
<form id="formulario-propiedad-update" action="" class="contenedor formulario" method="POST" enctype="multipart/form-data">
    <?php
        include __DIR__. '/formulario.php';
    ?>
    <fieldset>
        <legend>Fotografías</legend>
        <div>
            <label for="imagen">imágenes(Limite de 8MB)</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="fotos[]" multiple>
            <?php echo $erroresTamaño ? "<p>".$erroresTamaño."</p>" : "" ?>
        </div>
        <div>
            <span>Fotos actuales</span>
            <div class="fotos-actuales">
                <?php foreach($fotos as $foto): ?>
                    <img src="/imagenes/<?php echo $foto->foto;?>" alt="" class="imagen-small">
                <?php endforeach; ?>
            </div>   
        </div>
    </fieldset>    
    <input type="submit" value="Actualizar Propiedad" class="boton-azul">  
</form>


