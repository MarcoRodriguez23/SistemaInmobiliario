<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin/vendedores" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo vendedor</h1>
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

        <button class="boton-azul" type="submit">Crear vendedor</button>
    </form>
</main>