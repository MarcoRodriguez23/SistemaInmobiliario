<main>
    <div class="banner" id="bannerInmuebles">
    </div>
    <h4 class="introduccion">
        
    </h4>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/casa.svg" alt="inmuebles">
        </div>
        <div class="texto-principal">
            <p>
                La expansión de tu negocio o tu próxima oficina no pueden esperar más, recuerda que uno de nuestros asesores especializados en venta o renta de inmuebles siempre estará disponible para brindarte ayuda personalizada.
            </p>
        </div>
        
    </div>
    <div class="anuncios">
        <!-- aqui se va ir generando los anuncios de los inmuebles -->
        <?php foreach($propiedades as $propiedad): ?>
            <?php foreach($direcciones as $direccion): ?>
                <?php if($propiedad->tipoPropiedad == 1 && $propiedad->id === $direccion->id && $propiedad->status!=2): ?>
                    <div class="anuncio">
                        <a href="/casa?id=<?php echo $propiedad->id; ?>">
                            <?php $unaImagen = true; ?>
                            <?php foreach($fotos as $foto): ?>
                                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                                <img src="/imagenes/<?php echo $foto->foto;?>" alt="foto del inmueble">
                                <?php $unaImagen = false; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div class="info-anuncio">
                                <p class="precio">
                                    <?php echo  "$ ".$propiedad->precio; ?>
                                </p>
                                <h2>
                                    <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion ; ?>
                                </h2>
                                
                            </div>
                            <div class="beneficios">
                                <div class="beneficio">
                                    <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                    <p><?php echo $propiedad->habitaciones; ?> rec</p>
                                </div>
                                <div class="beneficio">
                                    <img src="build/img/icono_wc.svg" alt="beneficio1">
                                    <p><?php echo $propiedad->baños; ?> wc</p>
                                </div>
                                <div class="beneficio">
                                    <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                    <p><?php echo $propiedad->estacionamientos; ?> est</p>
                                </div>
                                <div class="beneficio">
                                    <img src="build/img/medida.svg" alt="beneficio1">
                                    <p><?php echo $propiedad->mt2; ?> m2</p>
                                </div>   
                            </div>
                        </a> 
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</main>
