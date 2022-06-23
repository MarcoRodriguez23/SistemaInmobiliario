<main id="index">
    <div class="banner" id="bannerIndex">
    </div>
    <div class="container-xl">
        <div class="row py-2 align-items-center justify-content-evenly m-2 mx-md-0">

            <div class="col-md-7 order-2 order-md-1 p-0 d-flex flex-column justify-content-center">
                <h1 class="tituloDoradoLinea">Servicios</h1>
                <p class="fw-light justificar">
                Tienes un inmueble, casa, departamento, terreno o local comercial y
                requieres el apoyo de un experto para venderlo.
                Con más de 10 años de experiencia en la industria inmobiliaria te
                ofrecemos los servicios de compra, venta y remodelación de casas,
                departamentos, terrenos y locales comerciales en la CDMX.
                Vende o compra tu casa, departamento, terreno o local comercial con
                inmobiliaria Gallardo, somos especialistas en identificar las mejores zonas
                para que elijas tu hogar con nosotros.
                </p>
                <a href="/servicios" class="botonComercial px-1">Explorar</a>
            </div>

            <img class="img-fluid col-md-4 order-1 order-md-2 rounded" loading="lazy" src="build/img/conocenos.jpg" alt="familia feliz">

        </div>
    </div>
</main>

<section class="container-xl carrousel my-4 px-2 d-flex flex-column justify-content-center">
    <h1 class="tituloDorado">Casas en venta en CDMX</h1>

    <!--slider-->    
    <div class="owl-carousel slider-index owl-theme">
        <?php foreach($propiedades as $propiedad): ?>
            <?php if($propiedad->tipoPropiedad == "Casa"): ?>
            <a href="/casa?id=<?php echo $propiedad->id; ?>" class="btn-more">
                <div class="item">
                    
                    <div class="">
                        <?php $unaImagen = true; ?>
                        <?php foreach($fotos as $foto): ?>
                            <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                            <img src="/imagenes/<?php echo $foto->foto;?>" alt="Casa" class="img-card-top" lazy="loading">
                            <?php $unaImagen = false; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        
                        <div class="">
                            <p class="text-center text-primary mt-1 fs-6 fst-italic">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                en
                                <?php echo $propiedad->status;?>
                                ,
                                <?php echo $propiedad->municipioDelegacion .", ".$propiedad->estado; ?>
                            </p>
                        </div>

                    </div>
                </div>
            </a> 
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
        
    <p class="text-center mt-1 fs-5">
        Venta de casas baratas en CDMX, casas al sur de la ciudad de México, contamos con todas las opciones de compra y venta en las mejores zonas.
    </p>
    <a href="/casas" class="botonComercial">Conoce más sobre las casas</a>
</section>

<section class="container-xl carrousel my-4 px-2 d-flex flex-column justify-content-center">
    <h1 class="tituloDorado">Departamentos en venta en CDMX</h1>

    <!--slider-->    
    <div class="owl-carousel slider-index owl-theme">
        <?php foreach($propiedades as $propiedad): ?>
            <?php if($propiedad->tipoPropiedad == "Departamento"): ?>
            <a href="/departamento?id=<?php echo $propiedad->id; ?>" class="btn-more">
                <div class="item">
                    
                    <div class="">
                        <?php $unaImagen = true; ?>
                        <?php foreach($fotos as $foto): ?>
                            <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                            <img src="/imagenes/<?php echo $foto->foto;?>" alt="Departamento" class="img-card-top" lazy="loading">
                            <?php $unaImagen = false; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        
                        <div class="">
                            <p class="text-center text-primary mt-1 fs-6 fst-italic">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                en
                                <?php echo $propiedad->status;?>
                                ,
                                <?php echo $propiedad->municipioDelegacion .", ".$propiedad->estado; ?>
                            </p>
                        </div>

                    </div>
                </div>
            </a> 
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
        
    <p class="text-center mt-1 fs-5">
        Tenemos los mejores departamentos en venta en la CDMX, tenemos los mejores lugares para vivir en CDMX y Morelos, departamentos baratos para comprar en infonovit.
    </p>
    <a href="/departamentos" class="botonComercial">Conoce más sobre los departamentos</a>
</section>

<section class="container-xl carrousel my-4 px-2 d-flex flex-column justify-content-center">
    <h1 class="tituloDorado">Terrenos y locales comerciales en venta en CDMX</h1>

    <!--slider-->    
    <div class="owl-carousel slider-index owl-theme">
        <?php foreach($propiedades as $propiedad): ?>
            <?php if($propiedad->tipoPropiedad == "Terreno"): ?>
            <a href="/terreno?id=<?php echo $propiedad->id; ?>" class="btn-more">
                <div class="item">
                    
                    <div class="">
                        <?php $unaImagen = true; ?>
                        <?php foreach($fotos as $foto): ?>
                            <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                            <img src="/imagenes/<?php echo $foto->foto;?>" alt="Terreno" class="img-card-top" lazy="loading">
                            <?php $unaImagen = false; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        
                        <div class="">
                            <p class="text-center text-primary mt-1 fs-6 fst-italic">
                                <?php echo $propiedad->tipoPropiedad; ?>
                                en
                                <?php echo $propiedad->status;?>
                                ,
                                <?php echo $propiedad->municipioDelegacion .", ".$propiedad->estado; ?>
                            </p>
                        </div>

                    </div>
                </div>
            </a> 
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
        
    <p class="text-center mt-1 fs-5">
        Los mejores terrenos para un patrimonio rentable y valioso para ti y tu familia.
    </p>
    <a href="/terrenos" class="botonComercial">Conoce más sobre los terrenos</a>
</section>



<section class="container-xl seccion-testimoniales">
    
    <h1 class="tituloDorado">Testimoniales</h1>
    <div class="testimoniales row justify-content-evenly align-items-center mx-2 mx-md-0">

        <div class="row bg-primary align-items-center col-lg-5 p-1 testimonial mb-2 mb-lg-0">
            <img src="/build/img/mujer.webp" alt="" class="img-fluid col-3" lazy="loading">
            <blockquote class="text-white col-8 offset-1">
                Tras 3 años buscando departamento y no concretar nada, Inmobiliaria Gallardo me ayudó a encontrar mi espacio ideal
                <br>
                <span class="">- Natalia Rodríguez</span>
            </blockquote>
        </div>

        <div class="row bg-primary align-items-center col-lg-5 p-1 testimonial">
            <img src="/build/img/hombre.webp" alt="" class="img-fluid col-3" lazy="loading">
            <blockquote class="text-white col-8 offset-1">
                Logré vender mi terreno con ayuda de sus asesores, su profesionalismo es evidente.
                <br>
                <span class="">- Rogelio Mendoza</span>
            </blockquote>
        </div>
    </div>

</section>