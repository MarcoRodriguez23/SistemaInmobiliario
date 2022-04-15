<main>
    <h1>Contáctanos</h1>
    <div class="fundadores contenedor">
        <div class="fundador">
            <picture>
                <source srcset="build/img/pexels-photo-8074612.webp" type="image/webp">
                <source srcset="build/img/pexels-photo-8074612.jpeg" type="image/jpeg">
                <img loading="lazy" src="build/img/pexels-photo-8074612.jpeg" alt="fundador">
            </picture>
            <p>
                Inmobiliaria Gallardo, cuenta con un amplio catálogo de inmuebles, tenemos las mejores casas, departamentos, terrenos y locales comerciales en la CDMX y Morelos.
                <br>
                Te ofrecemos casas baratas al sur de la CDMX con opciones de compra en cualquier crédito, departamentos INFONAVIT, casas FOVISSTE, terrenos con créditos bancarios e ISSFAM.
                <br>
                Compra tu casa con nosotros, te asesoramos durante todo el proceso para hacer tu compra más rápida y fácil.
            </p>
        </div>
    </div>
</main>

<section>
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
</section>
<main>
    <!-- <div class="banner" id="bannerContacto"> -->
    </div>
    <div class="contenedor formulario-texto">
        
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
