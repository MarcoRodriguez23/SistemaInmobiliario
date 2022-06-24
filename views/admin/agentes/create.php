<main>
    <div class="contenedor opcion-superior contenido-centrado">
        <a href="/admin/agentes" class="boton-volver">Volver</a>
    </div>
    <h1 class="tituloDorado">Nuevo agente inmobiliario</h1>
    <form action="" class="contenedor formulario contenido-centrado" method="POST" enctype="multipart/form-data">
        <?php
            include __DIR__. '/formulario.php';
        ?>
        <fieldset>
            <legend>Credenciales</legend>
            
            <div>
                <label for="usuario">Correo</label>
                <input 
                    type="email" 
                    id="usuario" 
                    placeholder="Correo"
                    name="agente[email]"
                    value="<?php echo s($agente->email); ?>"
                    maxlength="30"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9@.]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresAgente["email"]) ? "<p>".$erroresAgente["email"]."</p>" : ""; ?>
                <?php echo isset($erroresAgente["yaExiste"]) ? "<p>".$erroresAgente["yaExiste"]."</p>" : ""; ?>
            </div>

            <div>
                <label for="password">Password (unicamente se aceptan letras y números)</label>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="Contraseña"
                    name="agente[password]"
                    maxlength="20"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"      
                    >
                <?php echo isset($erroresAgente["password"]) ? "<p>".$erroresAgente["password"]."</p>" : ""; ?>
            </div>

            <div>
                <input type="hidden" name="agente[nivel]" value="2">
                
            </div>
            
        </fieldset>
        <input class="boton-azul" type="submit" value="Crear agente inmobiliario">
    </form>
</main>