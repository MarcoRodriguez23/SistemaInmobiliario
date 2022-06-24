<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin/vendedores" class="boton-volver">Volver</a>
    </div>
    <h1 class="tituloDorado">Nuevo vendedor</h1>
    <form action="" class="contenedor formularioComercial" method="POST" enctype="multipart/form-data">
        <?php
            require 'formulario.php';
        ?>

        <fieldset>
            <legend class="pt-1 fw-bold">Credenciales</legend>
            <div class="row justify-content-around bg-light py-1">
                <div class="col-md-4">
                    <div class="elemento">
                    <label class="form-label" for="usuario">Correo</label>
                    <input 
                    class="form-control"
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
                </div>
                <div class="col-md-4">
                    <div class="elemento">
                        <label class="form-label" for="password">Password (12 letras y números máx)</label>
                        <input 
                            class="form-control"
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
                </div>
            </div>
            <div>
                <input type="hidden" name="vendedor[nivel]" value="3">
            </div>
            
        </fieldset>
        <input class="botonComercial mt-2" type="submit" value="Crear vendedor">
    </form>
</main>