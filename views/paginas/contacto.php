<!-- <section>
    <div class="contenedor principal-izq">
        <div class="texto-principal">
            <h2>Misión</h2>
            <p>
                Ofrecemos las mejores opciones para el patrimonio inmobiliario de las familias mexicanas, asesorándote durante todo el proceso de compra.
            </p>
        </div>
        <div class="imagen-principal">
            <picture>
                <img loading="lazy" src="build/img/mision.webp" alt="misión">
            </picture>
        </div>
    </div>

    <div class="contenedor principal-der">
        <div class="texto-principal">
            <h2>Visión</h2>
            <p>
                Ser la primera opción en la búsqueda de inmuebles para las familias mexicanas, por nuestro profesionalismo, valor y confianza.
            </p>
        </div>
        <div class="imagen-principal">
            <picture>
                <img loading="lazy" src="build/img/vision.webp" alt="visión">
            </picture>
        </div>
    </div>
</section> -->
<main>
    <h1>Contáctanos</h1>
    <?php
        if ($mensaje) {
            echo "<p class='alerta exito contenedor'>".$mensaje."</p>";
        }
    ?>
</main>

    <div class="fundadores">
        <div class="fundador">
            <p>
                Inmobiliaria Gallardo, cuenta con un amplio catálogo de inmuebles, tenemos las mejores casas, departamentos, terrenos y locales comerciales en la CDMX y Morelos.
                <br>
                Te ofrecemos casas baratas al sur de la CDMX con opciones de compra en cualquier crédito, departamentos INFONAVIT, casas FOVISSTE, terrenos con créditos bancarios e ISSFAM.
                <br>
                Compra tu casa con nosotros, te asesoramos durante todo el proceso para hacer tu compra más rápida y fácil.
            </p>
            <img loading="lazy" src="build/img/pexels-photo-8074612.jpeg" alt="fundador" class="img-contacto">
        </div>
    </div>
    <hr class="divisor-contacto">
    <div class="esquema-contacto contenedor">
    <div class="esquema-maps">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240863.68495049782!2d-99.28370025945254!3d19.391003841697536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1652757452174!5m2!1ses-419!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contacto-maps"></iframe>
    </div>
    <div class="div-formulario-contacto">
        <!-- <div class="banner" id="bannerContacto">
        </div> -->
        <div class="contenedor formulario-texto">
            <p>Por favor, complete los campos a continuación y luego haga clic en enviar.<br>Estaremos en contacto.</p>
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
                    <textarea id="mensaje" name="mensaje" placeholder="Tu mensaje"></textarea>
                </div>
                <div class="boton-formulario">
                    <input type="submit" value="Enviar" class="boton-principal">
                </div>
            </form>
        </div>
    </div>
</div>