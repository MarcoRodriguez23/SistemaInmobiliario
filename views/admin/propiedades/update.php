<div class="opcion-superior contenedor contenido-centrado">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1>Actualizar inmueble</h1>
<nav class="tabs contenedor contenido-centrado">
    <button type="button" data-paso="1" class="actual">Dirección</button>
    <button type="button" data-paso="2" class="">Valor de la propiedad</button>
    <button type="button" data-paso="3" class="">Fotografías</button>
    <button type="button" data-paso="4" class="">Descripción de la propiedad</button>
    <button type="button" data-paso="5" class="">Estacionamiento</button>
    <button type="button" data-paso="6" class="">Muebles</button>
    <button type="button" data-paso="7" class="">Amenidades</button>
    <button type="button" data-paso="8" class="">Opciones de venta</button>
    <button type="button" data-paso="9" class="">Papeles</button>
</nav>
<form action="" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
    <?php
        require 'formulario.php';
    ?>
    
    <button class="boton-azul" type="submit">Actualizar</button>
</form>