<main>
    <div class="contenedor opcion-superior contenido-centrado">
        <a href="/admin/agentes" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo agente inmobiliario</h1>
    <form action="#" class="contenedor formulario contenido-centrado" type="POST" enctype="multipart/form-data">
        <?php
            require 'formulario.php';
        ?>
    <fieldset>
        <legend>Credenciales</legend>
        <label for="email">Correo</label>
        <input type="email" placeholder="correo@correo.com" id="email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">
    </fieldset>

        <button class="boton-azul" type="submit">Crear agente</button>
    </form>
</main>