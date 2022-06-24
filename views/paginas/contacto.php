<main>
    <?php
        if ($mensaje) {
            echo "<p class='alerta exito contenedor'>".$mensaje."</p>";
        }
    ?>
    <div class="container-fluid">
        <div class="mb-3 py-3 bg-light row justify-content-around align-items-center">
            <div class="col-lg-4 shadow bg-white texto-descuentos">
                    <div class="p-3">
                        <h1 class="tituloDorado">Contáctanos</h1>
                        <p class="textoFundador">
                            Inmobiliaria Gallardo, cuenta con un amplio catálogo de inmuebles, tenemos las mejores casas, departamentos, terrenos y locales comerciales en la CDMX y Morelos.
                            <br>
                            Te ofrecemos casas baratas al sur de la CDMX con opciones de compra en cualquier crédito, departamentos INFONAVIT, casas FOVISSTE, terrenos con créditos bancarios e ISSFAM.
                            <br>
                            Compra tu casa con nosotros, te asesoramos durante todo el proceso para hacer tu compra más rápida y fácil.
                        </p>
                    </div>
                </div>
            <div class="col-lg-5 row justify-content-center">
                <img loading="lazy" src="build/img/pexels-photo-8074612.jpeg" alt="fundador" class="img-fluid imagenFundador">
            </div>
        </div>
    </div>
    

    <div class="container-xl">
        <div class="row justify-content-between p-1">
            <div class="col-md-6 d-flex flex-column align-items-center p-1">
                <h2 class="tituloDorado">Ubicación</h2>

                <iframe class="mapaContacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7417938243834!2d-99.137508!3d19.4235592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed0f79ff145%3A0x5dab52a25b54f7a1!2sIsabel%20La%20Cat%C3%B3lica%20156%2C%20Obrera%2C%20Cuauht%C3%A9moc%2C%2006800%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1652902143354!5m2!1ses-419!2smx" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade" >
                </iframe>
            </div>
            <div class="col-md-5 p-1">
                <h2 class="tituloDorado">Formulario</h2>
                <form class="formularioComercial contenedor bg-light p-1" action="/contacto" method="POST">
                    <div class="elemento">
                        <label class="form-label" for="nombre">Nombre y apellido</label>
                        <input 
                            class="form-control"
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
                    
                    <div class="elemento">
                        <label class="form-label" for="Correo">Correro</label>
                        <input 
                            class="form-control"
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

                    <div class="elemento">
                        <label class="form-label" for="telefono">Whatsapp</label>
                        <input 
                            class="form-control"
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
                    
                    <div class="elemento">
                        <label class="form-label" for="empresa">Nombre de la empresa (opcional)</label>
                        <input
                            class="form-control" 
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

                    <div class="elemento">
                        <label class="form-label" for="puesto">Puesto (opcional)</label>
                        <input
                            class="form-control" 
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

                    <div class="elemento">
                        <label class="form-label" for="asunto">Asunto</label>
                        <select name="asunto" class="form-control">
                            <option value="" disabled selected>--Elige una opción--</option>
                            <option value="Casa">Casa</option>
                            <option value="Departmaneto">Departmaneto</option>
                            <option value="Terreno">Terreno</option>
                            <option value="Bodega">Bodega</option>
                            <option value="Local">Local</option>
                            <option value="Oficina">Oficina</option>
                        </select>
                    </div>
                    
                    <div class="elemento">
                        <label class="form-label" for="mensaje">Mensaje:</label>

                        <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Tu mensaje">

                        </textarea>
                    </div>
                        <input type="submit" value="Enviar" class="botonComercial mt-1">
                </form>
            </div>
        </div>
    </div>
</main>