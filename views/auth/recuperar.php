<main class="pantalla-login">
    <div class="imagen-login"></div>
    <div class="seccion contenido-centrado login-plantilla">
        <h1 class="tituloDorado">Recuperar password</h1>
        <p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>
        
        <?php foreach ($errores as $error): ?>
            <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
        <?php endforeach; ?>
        
        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
        
        <form method="POST" action="" class="formularioComercial contenedor bg-light p-1">
            <fieldset>
                <legend class="fw-bold fs-5">Credenciales</legend>
                <div class="elemento">
                    <label for="password">Password (unicamente se aceptan letras y números)</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Tu nuevo password"
                        maxlength="20"
                        oninput=
                        "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"      
                    >
                </div>
            </fieldset>
        
            <input type="submit" value="Guardar nuevo password" class="botonComercial mt-1">
        </form>
    </div>
</main>