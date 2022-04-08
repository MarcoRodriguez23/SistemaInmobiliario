<main>
    <section class="datos-propiedad contenedor">
        <h3>
            <?php echo $tipoPropiedad->tipo." en ".$direccion->estado; ?>
        <br>
            <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; ?>
        </h3>
    </section>
    <section class="carrousel contenedor">
        <div class="carrousel-contenedor">
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior-seleccion">
                <img src="build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-seleccion">
                <!-- <aqui se van a ir agregando las imagenes -->
                <?php
                    foreach ($fotos as $foto) {
                        echo "<img class='carrousel-item' src=build/img/depG/$propiedad->id/$foto->foto></img>";
                    }
                ?>
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente-seleccion">
                <img src="build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores-seleccion"></div>
        </div>
    </section>
    <section class="caracts-propiedad">
        <h2>Características</h2>

        <div class="caracts-propiedad-listas">
            <ul>
                <li>
                    <img src="build/img/Iconos/icono_metros1.svg" alt="icono">
                    <p>Metros cuadrados: <?php echo $propiedad->mt2; ?> mt2</p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_año.svg" alt="icono">
                    <p>Año de construcción: <?php echo $propiedad->año; ?></p>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="build/img/Iconos/icono_casa1.svg" alt="icono">
                    <p>Núm. exterior: <?php echo $direccion->numExterior; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_casa1.svg" alt="icono">
                    <p>Núm. interior: <?php echo $direccion->numInterior; ?></p>
                </li>
            </ul>     
        </div>
    </section>

    <div class="contenedor enlace-google">
        <a class="boton-morado" target="_blank" href="<?php echo $direccion->linkGoogle; ?>">Conoce la ubicación mediante Google Maps</a>
    </div>

    <div class="opciones-compra contenedor">
        <div>
            <div>
                <h3>
                    Opciones de Compra
                </h3>
                <ul>
                    <!-- <img src="" alt="icono"> -->
                    <?php foreach ($metodosVenta as $clave => $val) {
                        if($val==1 && $clave!="id"){
                            if($clave === "credito"){
                                echo '<li>
                                <img src="build/img/Iconos/icono_dinero1.svg" alt="icono">
                                <p>CRÉDITO BANCARIO</p>
                                </li>';
                            }
                            else{
                                echo '<li>
                                <img src="build/img/Iconos/icono_dinero1.svg" alt="icono">
                                <p>'.strtoupper($clave).'</p>
                                </li>';
                            }
                        }
                    }
                    ?>
                </ul>  
            </div>
            <div>
                <h3>
                    Escritura
                </h3>
                <ul>
                    <?php
                        echo '<li>
                        <img src="build/img/Iconos/icono_escrituras1.svg" alt="icono">
                        <p>'.strtoupper($escritura->tipo).'</p>
                        </li>';
                    ?>
                </ul>
            </div>
        </div>
        <img src="build/img/conocenos.jpg" alt="opciones venta">
    </div>
</main>

