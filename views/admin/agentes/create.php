<main>
    <div class="contenedor opcion-superior contenido-centrado">
        <a href="/admin/agentes" class="boton-volver">Volver</a>
    </div>
    <h1>Nuevo agente inmobiliario</h1>
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
                    name="credenciales[email]"
                    >
            </div>

            <div>
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="Contraseña"
                    name="credenciales[password]"
                    >
            </div>

            <div>
                <input type="hidden" name="credenciales[nivel]" value="2">
                
            </div>
            
        </fieldset>
        <input class="boton-azul" type="submit" value="Crear agente inmobiliario">
    </form>
</main>