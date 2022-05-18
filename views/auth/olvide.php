<main class="pantalla-login">
    <div class="imagen-login"></div>
    <div class="contenedor seccion contenido-centrado login-plantilla">
        <h1 class="nombre-pagina">Olvide mi password</h1>
        <p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>
        
        <?php foreach ($errores as $error): ?>
            <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
        <?php endforeach; ?>
    
        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
    
        <form method="POST" action="" class="formulario login" novalidate>
            <fieldset>
                <legend>Email y password</legend>
                    <div class="campo">
                        <label for="email">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            placeholder="Tu email"
                        >
                </div>
            </fieldset>
            <input type="submit" class="boton-morado" value="Enviar instrucciones">
        </form>
    </div>
</main>