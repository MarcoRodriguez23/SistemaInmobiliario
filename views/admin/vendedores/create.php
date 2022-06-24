<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin/vendedores" class="boton-volver">Volver</a>
    </div>
    <h1 class="tituloDorado">Nuevo vendedor</h1>
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
                    maxlength="30"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9@.]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresVendedor["email"])? "<p>".$erroresVendedor["email"]."</p>" : ""; ?>
                <?php echo isset($erroresVendedor["yaExiste"])? "<p>".$erroresVendedor["yaExiste"]."</p>" : ""; ?>
            </div>

            <div>
                <label for="password">Password (unicamente se aceptan letras y números)</label>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="Contraseña"
                    name="vendedor[password]"
                    maxlength="20"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"  
                    >
                    <?php echo isset($erroresVendedor["password"])? "<p>".$erroresVendedor["password"]."</p>" : ""; ?>
            </div>

            <div>
                <input type="hidden" name="vendedor[nivel]" value="3">
            </div>
            
        </fieldset>
        <input class="boton-azul" type="submit" value="Crear vendedor">
    </form>
</main>