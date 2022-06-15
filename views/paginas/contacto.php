<main class="container-xl">
    <h1>Contáctanos</h1>
    <?php
        if ($mensaje) {
            echo "<p class='alerta exito contenedor'>".$mensaje."</p>";
        }
    ?>


    <div class="fundadores">
        <div class="fundador">
            <p>
                Inmobiliaria Gallardo, cuenta con un amplio catálogo de inmuebles, tenemos las mejores casas, departamentos, terrenos y locales comerciales en la CDMX y Morelos.
                <br>
                Te ofrecemos casas baratas al sur de la CDMX con opciones de compra en cualquier crédito, departamentos INFONAVIT, casas FOVISSTE, terrenos con créditos bancarios e ISSFAM.
                <br>
                Compra tu casa con nosotros, te asesoramos durante todo el proceso para hacer tu compra más rápida y fácil.
            </p>
            <img loading="lazy" src="build/img/pexels-photo-8074612.jpeg" alt="fundador" class="img-fluid">
        </div>
    </div> <!--fundadores-->

    <div class="esquema-contacto contenedor">
    
        <h2>Ubicación</h2>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7417938243834!2d-99.137508!3d19.4235592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed0f79ff145%3A0x5dab52a25b54f7a1!2sIsabel%20La%20Cat%C3%B3lica%20156%2C%20Obrera%2C%20Cuauht%C3%A9moc%2C%2006800%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1652902143354!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contacto-maps"></iframe>
    
    </div>

    <div class="div-formulario-contacto">
        <div class="contenedor formulario-texto">
            <p>Por favor, complete los campos a continuación y luego haga clic en enviar.<br>Estaremos en contacto.</p>
        </div>
        <div class="color-formulario">
            <form class="formulario-user contenedor" action="/contacto" method="POST">
                <div>
                    <label for="nombre">Nombre y apellido</label>
                    <input 
                        type="text" 
                        name="nombre" 
                        placeholder="Nombre Completo" 
                        id="nombre" 
                        maxlength="35"
                        required
                        oninput=
                        "this.value = this.value.replace(/[^a-zA-Z áéíóúñÁÉÍÓÚÑ]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"    
                    >
                </div>
                
                <div>
                    <label for="Correo">Correro</label>
                    <input 
                        type="email" 
                        name="correo" 
                        placeholder="ejemplo@empresa.com" 
                        id="Correo" 
                        maxlength="35"
                        required
                        oninput=
                        "this.value = this.value.replace(/[^0-9a-zA-ZáéíóúñÁÉÍÓÚÑ@_.]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"     
                    >
                </div>

                <div>
                    <label for="telefono">Whatsapp</label>
                    <input 
                        type="tel" 
                        name="telefono" 
                        placeholder="Número de 10 digitos" 
                        id="telefono" 
                        required
                        maxlength="10"
                        oninput=
                        "this.value = this.value.replace(/[^0-9]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"       
                    >
                </div>
                
                <div>
                    <label for="empresa">Nombre de la empresa (opcional)</label>
                    <input 
                        type="text" 
                        name="empresa" 
                        placeholder="Nombre de la empresa" 
                        id="empresa"
                        maxlength="30"
                        oninput=
                        "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ 0-9]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"      
                    >
                </div>

                <div>
                    <label for="puesto">Puesto (opcional)</label>
                    <input 
                        type="text" 
                        name="puesto" 
                        placeholder="Puesto en la empresa" 
                        id="puesto"
                        maxlength="20"
                        oninput=
                        "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ ]/,'')
                        if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"      
                    >
                </div>

                <div>
                    <label for="asunto">Asunto</label>
                    <select name="asunto">
                        <option value="" disabled selected>--Elige una opción--</option>
                        <option value="Casa">Casa</option>
                        <option value="Departmaneto">Departmaneto</option>
                        <option value="Terreno">Terreno</option>
                        <option value="Bodega">Bodega</option>
                        <option value="Local">Local</option>
                        <option value="Oficina">Oficina</option>
                    </select>
                </div>
                
                <div class="mensaje-formulario">
                    <label for="mensaje">Mensaje:</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        placeholder="Tu mensaje"
                        oninput=
                        "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9 ]/,'')" 
                        >
                    </textarea>
                </div>
                <div class="boton-formulario">
                    <input type="submit" value="Enviar" class="boton-principal">
                </div>
            </form>
        </div> <!--fin color-formulario-->
    </div>
</main>