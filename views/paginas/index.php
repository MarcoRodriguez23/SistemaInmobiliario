    <main id="index">
        <div class="banner" id="bannerIndex">
        </div>
        <div class="contenedor principal-izq">
            <div class="imagen-principal">
                <img loading="lazy" src="build/img/conocenos.jpg" alt="familia feliz">
            </div>
            <div class="texto-principal">
                <!-- <h2>Gallardo <span>Holdings</span></h2> -->
                <p>
                Tienes un inmueble, casa, departamento, terreno o local comercial y requieres el apoyo de un experto para venderlo.
                <br>
                Con más de 10 años de experiencia en la industria inmobiliaria te ofrecemos los servicios de compra, venta y remodelación de casas, departamentos, terrenos y locales comerciales en la CDMX.
                <br>
                Vende o compra tu casa, departamento, terreno o local comercial con inmobiliaria Gallardo, somos especialistas en identificar las mejores zonas para que elijas tu hogar con nosotros.

                </p>
                <a href="/servicios" class="boton">Explorar</a>
            </div>
            
        </div>
    </main>

    <section class="contenedor carrousel">
        <h2>Casas en venta en CDMX</h2>
        <div class="carrousel-contenedor" >
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior1">
                <img src="build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-inmuebles">
                <!-- <aqui se van a ir agregando las imagenes -->
                <?php foreach($propiedades as $propiedad): ?>
                    <?php foreach($direcciones as $direccion): ?>
                        <?php if($propiedad->tipoPropiedad == 2 && $propiedad->idPropiedad === $direccion->idPropiedad): ?>
                            <div class="imagen-texto">
                                <img loading="lazy" src="" alt="inmueble <?php echo $propiedad->idPropiedad; ?>">
                                <p><?php echo "Departamento en venta en CDMX, " . $direccion->municipioDelegacion; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?> 
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente1">
                <img src="build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores1"></div>
        </div>
        

        </div>
        <p>
            Venta de casas baratas en CDMX, casas al sur de la ciudad de México, contamos con todas las opciones de compra y venta en las mejores zonas.
        </p>
        <a href="/inmuebles" class="boton">Conoce más sobre los inmuebles</a>
    </section>
    
    <section class="contenedor carrousel">
        <h2>Departamentos en venta en CDMX</h2>
        <div class="carrousel-contenedor">
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior2">
                <img src="build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-departamentos">
                <!-- <aqui se van a ir agregando las imagenes -->
                <?php foreach($propiedades as $propiedad): ?>
                    <?php foreach($direcciones as $direccion): ?>
                        <?php if($propiedad->tipoPropiedad == 2 && $propiedad->idPropiedad === $direccion->idPropiedad): ?>
                            <div class="imagen-texto">
                                <img loading="lazy" src="" alt="departamento <?php echo $propiedad->idPropiedad; ?>">
                                <p><?php echo "Departamento en venta en CDMX, " . $direccion->municipioDelegacion; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente2">
                <img src="build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores2"></div>
        </div>
        

        </div>
        <p>
            Tenemos los mejores departamentos en venta en la CDMX, tenemos los mejores lugares para vivir en CDMX y Morelos, departamentos baratos para comprar en infonovit.
        </p>
        <a href="/departamentos" class="boton">Conoce más sobre los departamentos</a>
    </section>

    <section class="contenedor carrousel">
        <h2>Terrenos y locales comerciales en venta en CDMX</h2>
        <div class="carrousel-contenedor">
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior3">
                <img src="build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-terrenos">
                <!-- <aqui se van a ir agregando las imagenes -->
                <?php foreach($propiedades as $propiedad): ?>
                    <?php foreach($direcciones as $direccion): ?>
                        <?php if($propiedad->tipoPropiedad == 2 && $propiedad->idPropiedad === $direccion->idPropiedad): ?>
                            <div class="imagen-texto">
                                <img loading="lazy" src="" alt="terreno <?php echo $propiedad->idPropiedad; ?>">
                                <p><?php echo "Departamento en venta en CDMX, " . $direccion->municipioDelegacion; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente3">
                <img src="build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores3"></div>
        </div>
        

        </div>
        <p>
            Los mejores terrenos para un patrimonio rentable y valioso para ti y tu familia
        </p>
        <a href="/terrenos" class="boton">Conoce más sobre los terrenos</a>
    </section>
    

    <section class="seccion-testimoniales">
        <h2>Testimoniales</h2>
        <div class="testimoniales">
            <div class="testimonial">
                <blockquote>
                    Tras 3 años buscando departamento y no concretar nada, Inmobiliaria Gallardo me ayudó a encontrar mi espacio ideal
                </blockquote>
                <p>- Natalia Rodríguez</p>
            </div>

            <div class="testimonial">
                <blockquote>
                    Logré vender mi terreno con ayuda de sus asesores, su profesionalismo es evidente.
                </blockquote>
                <p>- Rogelio Mendoza</p>
            </div>

            <div class="testimonial">
                <blockquote>
                    Me urgía encontrar una bodega para poder guardar mis productos e Inmobiliaria Gallardo me ayudo en tiempo récord.
                </blockquote>
                <p>- Erika Morales</p>
            </div>
        </div>
        
    </section>
    <!-- <div class="reconocimientoIconos">
        <div>
            <p>
                Iconos diseñados por
                <a href="https://www.flaticon.es/autores/kiranshastry" title="Kiranshastry">Kiranshastry</a>
                y
                <a href="https://www.flaticon.es/autores/vichanon-chaimsuk" title="Vichanon Chaimsuk">Vichanon Chaimsuk</a>
                en
                <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a>
            </p>
            
        </div>
    </div> -->

<?php
    // mysqli_close($db);
    // include 'templates/footer.php';