
<main class="pantalla-login">
    <div class="imagen-login"></div>

    <div class=" seccion contenido-centrado login-plantilla">

        <h1 class="tituloDorado">Iniciar sesión</h1>
        <?php foreach ($errores as $error): ?>
            <div class="alerta error"><?php echo $error;?></div>
        <?php endforeach; ?>
        <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
        <form class="formularioComercial contenedor bg-light p-1" action="/login" method="POST">
            <legend class="fw-bold fs-5">Email y password</legend>
            <div class="elemento">
                <label class="form-label" for="email">E-mail</label>
                <input 
                    class="form-control"
                    type="email" 
                    placeholder="Tu email" 
                    id="email" 
                    name="email" 
                    required
                    maxlength="30"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9@.]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"      
                >
            </div>
            <div class="elemento">
                <label class="form-label" for="password">password</label>
                <input 
                    class="form-control"
                    type="password" 
                    placeholder="Tu password" 
                    id="password" 
                    name="password" 
                    required
                    maxlength="20"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9+]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"     
                >
            </div>
            <input type="submit" value="Iniciar Sesión" class="botonComercial mt-1">
        </form>
        <div class="enlace-login contenedor">
            <a class="mt-2" href="/olvide">¿Olvidaste tu password? Clic aqui para reestablecer.</a>
        </div>
    </div>
    
</main>

