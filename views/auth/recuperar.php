<main class="pantalla-login">
    <div class="imagen-login"></div>
    <div class="contenedor seccion contenido-centrado login-plantilla">
        <h1 class="nombre-pagina">Recuperar password</h1>
        <p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>
        
        <?php foreach ($errores as $error): ?>
            <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
        <?php endforeach; ?>
        
        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
        
        <form method="POST" action="" class="formulario login" novalidate>
            <fieldset>
                <legend>Credenciales</legend>
                <div class="campo">
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
        
            <input type="submit" value="Guardar nuevo password" class="boton-morado">
        </form>
    </div>
</main>