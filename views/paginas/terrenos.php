 <main>
    <div class="banner" id="bannerTerrenos">
    </div>
    <h4 class="introduccion">
        
    </h4>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/dimensiones.svg" alt="terrenos">
        </div>
        <div class="texto-principal">
            <p>
                Una de las mejores inversiones que podrías hacer está a solo un clic de distancia, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte ayuda personalizada.
            </p>
        </div>
        
    </div>
    <div class="anuncios anunciosD">
        <!-- aqui se va ir generando los anuncios de los terrenos -->
        <?php foreach($propiedades as $propiedad): ?>
            <?php foreach($direcciones as $direccion): ?>
                <?php if($propiedad->tipoPropiedad == 2 && $propiedad->id === $direccion->id): ?>
                    <div class="anuncio">
                        <a href="/departamento?id=<?php echo $propiedad->id; ?>">
                            <img loading="lazy" src="" alt="terreno <?php echo $propiedad->id; ?>">
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
