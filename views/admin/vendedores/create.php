<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin/vendedores" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo vendedor</h1>
    <form action="" class="contenedor formulario contenido-centrado" method="POST" enctype="multipart/form-data">
        <?php
            require 'formulario.php';
        ?>

        <fieldset>
            <legend>Credenciales</legend>
            
            <div>
                <label for="usuario">Correo</label>
                <input 
                    type="email" 
                    id="usuario" 
                    placeholder="Correo"
                    name="vendedor[email]"
                    value="<?php echo s($vendedor->email); ?>"
                    >
                <?php echo "<p>".$erroresVendedor["email"]."</p>"; ?>
                <?php echo "<p>".$erroresVendedor["yaExiste"]."</p>"; ?>
            </div>

            <div>
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="Contraseña"
                    name="vendedor[password]"
                    >
                    <?php echo "<p>".$erroresVendedor["password"]."</p>"; ?>
            </div>

            <div>
                <input type="hidden" name="vendedor[nivel]" value="3">
            </div>
            
        </fieldset>
        <input class="boton-azul" type="submit" value="Crear vendedor">
    </form>
</main>