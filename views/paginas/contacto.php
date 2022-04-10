<main>
    <div class="banner" id="bannerContacto">
    </div>
    <div class="contenedor formulario-texto">
        <h1>Contáctanos</h1>
        <p>
            Por favor, complete los campos a continuación y luego haga clic en enviar.<br>Estaremos en contacto.
        </p>
        <?php
            if ($mensaje) {
                echo "<p class='alerta exito'>".$mensaje."</p>";
            }
        ?>
    </div>
    <div class="color-formulario">

        <form class="formulario-user contenedor" action="/contacto" method="POST">
            <div>
                <label for="nombre">Nombre y apellido</label>
                <input type="text" name="nombre" placeholder="Nombre Completo" id="nombre" required>
            </div>
            
            <div>
                <label for="Correo">Correro</label>
                <input type="email" name="correo" placeholder="ejemplo@empresa.com" id="Correo" required>
            </div>

            <div>
                <label for="telefono">Whatsapp</label>
                <input type="tel" name="telefono" placeholder="Número de 10 digitos" id="telefono" required>
            </div>
            
            <div>
                <label for="empresa">Nombre de la empresa (opcional)</label>
                <input type="text" name="empresa" placeholder="Nombre de la empresa" id="empresa">
            </div>

            <div>
                <label for="puesto">Puesto (opcional)</label>
                <input type="text" name="puesto" placeholder="Puesto en la empresa" id="puesto">
            </div>

            <div>
                <label for="asunto">Asunto</label>
                <select name="asunto">
                    <option value="" disabled selected>--Selecciona una opción--</option>
                    <?php foreach ($tipos as $row) :?>
                        <option 
                        value="<?php echo s($row->tipo); ?>"><?php echo s($row->tipo); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="mensaje-formulario">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" placeholder="Tu mensaje"></textarea>
            </div>
            <div class="boton-formulario">
                <input type="submit" value="Enviar" class="boton">
            </div>
        </form>
    </div>
</main>
