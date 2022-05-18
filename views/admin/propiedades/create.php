<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1>Crear propiedad</h1>
<main>
    <form id="formulario-propiedad-create" action="" class="contenedor formulario" method="POST" enctype="multipart/form-data">
        <?php
            include __DIR__. '/formulario.php';
        ?>
        <div>
            <input type="hidden" name="propiedad[idCreador]" value="<?php echo $_SESSION['id']; ?>">
        </div>
        
        <input type="submit" value="Crear Propiedad" class="boton-azul">  
    </form>
</main>
