
<main class="pantalla-login">
    <div class="imagen-login"></div>

    <div class="contenedor seccion contenido-centrado login-plantilla">

        <h1 data-cy="heading-login">Iniciar Sesión</h1>
        <?php foreach ($errores as $error): ?>
            <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
        <?php endforeach; ?>
        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
        <form method="POST" action="/login" class="formulario login" novalidate>
            <fieldset>
                <legend>Email y password</legend>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Tu email" id="email" name="email" required>
                </div>

                <div>
                    <label for="password">password</label>
                    <input type="password" placeholder="Tu password" id="password" name="password" required>
                </div>
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton-morado">
        </form>
        <div class="enlace-login contenedor">
            <a href="/olvide">¿Olvidaste tu password? Clic aqui para reestablecer.</a>
        </div>
    </div>
    
</main>

