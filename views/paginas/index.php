<main id="index">
    <div class="banner" id="bannerIndex">
    </div>
    <div class="contenedor principal-izq">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/conocenos.jpg" alt="familia feliz" class="imagenes-texto-lateral">
        </div>
        <div class="texto-principal">
            <!-- <h2>Gallardo <span>Holdings</span></h2> -->
            <h1>Servicios</h1>
            <hr>
            <p>
            Tienes un inmueble, casa, departamento, terreno o local comercial y
requieres el apoyo de un experto para venderlo.
Con más de 10 años de experiencia en la industria inmobiliaria te
ofrecemos los servicios de compra, venta y remodelación de casas,
departamentos, terrenos y locales comerciales en la CDMX.
Vende o compra tu casa, departamento, terreno o local comercial con
inmobiliaria Gallardo, somos especialistas en identificar las mejores zonas
para que elijas tu hogar con nosotros.
            </p>
            <a href="/servicios" class="boton-principal">Explorar</a>
        </div>
        
    </div>
</main>

<section class="contenedor carrousel">
    <h1>Casas en venta en CDMX</h1>
    <div class="carrousel-contenedor" >
        <button aria-label="Anterior" class="carrousel__anterior" id="anterior1">
            <img src="build/img/flecha-izquierda.png" alt="">
        </button>
        <div class="carrousel-items" id="C-inmuebles">
            <!-- <aqui se van a ir agregando las imagenes -->
            <?php foreach($propiedades as $propiedad): ?>
                <?php foreach($direcciones as $direccion): ?>
                    <?php if($propiedad->tipoPropiedad == "Casa" && $propiedad->id === $direccion->id && $propiedad->status != 'vendida'): ?>
                        <div class="imagen-texto">
                            <?php $unaImagen = true; ?>
                            <?php foreach($fotos as $foto): ?>
                                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                                <img src="/imagenes/<?php echo $foto->foto;?>" alt="Casa" class="img-card-inmueble">
                                <?php $unaImagen = false; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div  class="div-p-card-inmueble">
                            <p class="p-card-inmueble">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                en
                                <?php echo $propiedad->status; ?>
                                ,
                                <?php echo $direccion->estado .", ".$direccion->municipioDelegacion; ?>
                            </p>
                            <a href="infoPropiedad.php" class="btn-more"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" class="icono-more"><path d="M15.2 43.9 12.4 41.05 29.55 23.9 12.4 6.75 15.2 3.9 35.2 23.9Z"/></svg></a>
                            </div>
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
    <a href="/casas" class="boton-principal">Conoce más sobre las casas</a>
</section>

<section class="contenedor carrousel">
    <h1>Departamentos en venta en CDMX</h1>
    <div class="carrousel-contenedor">
        <button aria-label="Anterior" class="carrousel__anterior" id="anterior2">
            <img src="build/img/flecha-izquierda.png" alt="">
        </button>
        <div class="carrousel-items" id="C-departamentos">
            <!-- <aqui se van a ir agregando las imagenes -->
            <?php foreach($propiedades as $propiedad): ?>
                <?php foreach($direcciones as $direccion): ?>
                    <?php if($propiedad->tipoPropiedad == "Departamento" && $propiedad->id === $direccion->id && $propiedad->status != "vendida"): ?>
                        <div class="imagen-texto">
                            <?php $unaImagen = true; ?>
                            <?php foreach($fotos as $foto): ?>
                                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                                <img src="/imagenes/<?php echo $foto->foto;?>" alt="Departamento" class="img-card-inmueble">
                                <?php $unaImagen = false; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div  class="div-p-card-inmueble">
                            <p class="p-card-inmueble">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                <?php echo $propiedad->categoria; ?>
                                en
                                <?php echo $propiedad->status; ?>
                                <?php echo $direccion->estado .", ".$direccion->municipioDelegacion; ?>
                            </p>
                            <a href="infoPropiedad.php" class="btn-more"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" class="icono-more"><path d="M15.2 43.9 12.4 41.05 29.55 23.9 12.4 6.75 15.2 3.9 35.2 23.9Z"/></svg></a>
                            </div>
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
    <a href="/departamentos" class="boton-principal">Conoce más sobre los departamentos</a>
</section>

<section class="contenedor carrousel">
    <h1>Terrenos y locales comerciales en venta en CDMX</h1>
    <div class="carrousel-contenedor">
        <button aria-label="Anterior" class="carrousel__anterior" id="anterior3">
            <img src="build/img/flecha-izquierda.png" alt="">
        </button>
        <div class="carrousel-items" id="C-terrenos">
            <!-- <aqui se van a ir agregando las imagenes -->
            <?php foreach($propiedades as $propiedad): ?>
                <?php foreach($direcciones as $direccion): ?>
                    <?php if($propiedad->tipoPropiedad == "Terreno" && $propiedad->id === $direccion->id && $propiedad->status != "vendida"): ?>
                        <div class="imagen-texto">
                        <?php $unaImagen = true; ?>
                            <?php foreach($fotos as $foto): ?>
                                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                                <img src="/imagenes/<?php echo $foto->foto;?>" alt="Terreno" class="img-card-inmueble">
                                <?php $unaImagen = false; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div  class="div-p-card-inmueble">
                            <p class="p-card-inmueble">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                <?php echo $propiedad->categoria; ?>
                                para
                                <?php echo $propiedad->status; ?>
                                en
                                <?php echo $direccion->estado .", ".$direccion->municipioDelegacion; ?>
                            </p>
                            <a href="infoPropiedad.php" class="btn-more"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" class="icono-more"><path d="M15.2 43.9 12.4 41.05 29.55 23.9 12.4 6.75 15.2 3.9 35.2 23.9Z"/></svg></a>
                            </div>
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
    <a href="/terrenos" class="boton-principal">Conoce más sobre los terrenos</a>
</section>


<section class="seccion-testimoniales">
    <h1>Testimoniales</h1>
    <div class="testimoniales">

        <div class="testimonial">

            <div class="img-texto">
            <img src="build/img/mujer.jpg" alt="" class="img-testimonio">
            <blockquote>
                Tras 3 años buscando departamento y no concretar nada, Inmobiliaria Gallardo me ayudó a encontrar mi espacio ideal
                <br>
                <span class="autor">- Natalia Rodríguez</span>
            </blockquote>
            </div>
        </div>

        <div class="testimonial">

        <div class="img-texto">
        <img src="build/img/hombre.jpg" alt="" class="img-testimonio">
            <blockquote>
                Logré vender mi terreno con ayuda de sus asesores, su profesionalismo es evidente.
                <br>
                <span class="autor">- Rogelio Mendoza</span>
            </blockquote>
        </div>
        </div>
    </div>

</section>