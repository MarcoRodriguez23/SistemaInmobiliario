<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin/vendedores" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo vendedor</h1>
    <form action="" class="contenedor formulario contenido-centrado" method="POST" enctype="multipart/form-data">
        <?php
            require 'formulario.php';
        ?>

        <input class="boton-azul" type="submit" value="Crear vendedor">
    </form>
</main>