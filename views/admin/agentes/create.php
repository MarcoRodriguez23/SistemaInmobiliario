<main>
    <div class="contenedor opcion-superior contenido-centrado">
        <a href="/admin/agentes" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo agente inmobiliario</h1>
    <form action="" class="contenedor formulario contenido-centrado" method="POST" enctype="multipart/form-data">
        <?php
            include __DIR__. '/formulario.php';
        ?>
        <input class="boton-azul" type="submit" value="Crear agente inmobiliario">
    </form>
</main>