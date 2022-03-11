<div class="opcion-superior contenedor contenido-centrado">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<main>
    <h1>Nuevo inmueble</h1>
    <nav class="tabs contenedor contenido-centrado">
        <button type="button" data-paso="1" class="boton-azul actual">Dirección</button>
        <button type="button" data-paso="2" class="boton-azul ">Valor de la propiedad</button>
        <button type="button" data-paso="3" class="boton-azul ">Fotografías</button>
        <button type="button" data-paso="4" class="boton-azul ">Descripción de la propiedad</button>
        <button type="button" data-paso="5" class="boton-azul ">Estacionamiento</button>
        <button type="button" data-paso="6" class="boton-azul ">Muebles</button>
        <button type="button" data-paso="7" class="boton-azul ">Amenidades</button>
        <button type="button" data-paso="8" class="boton-azul ">Opciones de venta</button>
        <button type="button" data-paso="9" class="boton-azul ">Papeles</button>
    </nav>
    <form action="" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
        <?php
            require 'formulario.php';
        ?>
        
        <button class="boton-azul" type="submit">subir inmueble</button>
    </form>
</main>
