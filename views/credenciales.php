

<main class="contenedor seccion contenido-centrado login-plantilla">
    <h1 data-cy="heading-login">Iniciar Sesión</h1>
    <?php foreach ($errores as $error): ?>
        <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
    <?php endforeach; ?>
    <form action="" method="POST" class="contenedor formulario login">
        <fieldset>
            <legend>Credenciales</legend>
            <div>
                <label for="correo">Correo</label>
                <input type="email" placeholder="Tu correo">
            </div>
    
            <div>
                <label for="contraseña">Contraseña</label>
                <input type="password" placeholder="Tu contraseña">
            </div>
    
            <div>
                <select name="" id="">
                    <option value="2">Agente</option>
                    <option value="3">Vendedor</option>
                </select>
            </div>
        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton-morado">
    </form>
</main>