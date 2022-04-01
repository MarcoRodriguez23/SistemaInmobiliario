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
                    <img src="build/img/Iconos/icono_edificio3.svg" alt="icono">
                    <p>Núm. de pisos: <?php echo $propiedad->numPisos; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_baño1.svg" alt="icono">
                    <p>Baños: <?php echo $propiedad->baños; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_recamara1.svg" alt="icono">
                    <p>Habitaciones: <?php echo $propiedad->habitaciones; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_metros1.svg" alt="icono">
                    <p>Metros cuadrados: <?php echo $propiedad->mt2; ?> mt2</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="build/img/Iconos/icono_estacionamiento1.svg" alt="icono">
                    <p>Tipo de estacionamiento: <?php echo $estacionamiento->tipo; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_estacionamiento2.svg" alt="icono">
                    <p>Cajones de estacionamientos: <?php echo $propiedad->numEstacionamientos; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_sala1.svg" alt="icono">
                    <p>Habitación de servicio: <?php echo $propiedad->servicioH; ?></p>
                </li>
                <li>
                    <img src="build/img/Iconos/icono_patiodeservicio1.svg" alt="icono">
                    <p>Patio de servicio: <?php echo $propiedad->servicioP; ?></p>
                </li>
            </ul>         
        </div>
    </section>
    <section  class="extra-propiedad contenedor">
    <h2>Info. y características extra</h2>

    <div class="extra-elementos">
        <ul>
            <li>
                <img src="build/img/Iconos/icono_año.svg" alt="icono">
                <p>Año de construcción: <?php echo $propiedad->año; ?></p>
            </li>
            <li>
                <img src="build/img/Iconos/icono_casa1.svg" alt="icono">
                <p>Núm. exterior: <?php echo $direccion->numExterior; ?></p>
            </li>
            <li>
                <img src="build/img/Iconos/icono_casa1.svg" alt="icono">
                <p>Núm. interior: <?php echo $direccion->numInterior; ?></p>
            </li>
            <li>
                <img src="build/img/Iconos/icono_edificio1.svg" alt="icono">
                <p>Número de departamento: <?php echo $propiedad->numDepartamento; ?></p>
            </li>
            <li>
                <img src="build/img/Iconos/icono_edificio1.svg" alt="icono">
                <p>Número de piso: <?php echo $propiedad->piso; ?></p>
            </li>
            <li>
                <img src="build/img/Iconos/icono_elevador1.svg" alt="icono">
                <p>Elevador: <?php echo $propiedad->numElevadores; ?></p>
            </li>
        </ul>       
    </div>
    </section>

    <div class="contenedor enlace-google">
        <a class="boton-morado" target="_blank" href="<?php echo $direccion->linkGoogle; ?>">Conoce la ubicación mediante Google Maps</a>
    </div>
    

    <div class="muebles-amenidades">
        <div>
            <h3>
                Muebles
            </h3>
            <ul>
                <?php foreach ($mueble as $clave => $val) {
                    if($val==1 && $clave!="id"){
                        if($clave==="sala"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_sala1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="lavadora"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_lavadora1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="boiler"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_boiler1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="cocina"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_cocina1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="camas"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_cama1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="roperos"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_closet1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>

        <div>
            <h3>
                Amenidades
            </h3>
            <ul>
                <?php foreach ($amenidad as $clave => $val) {
                    if($val==1 && $clave!="id"){
                        
                        if($clave==="roffGarden"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_patio1.svg" alt="icono">
                                Roff Garden
                                </li>';
                        }
                        if($clave==="salaDeUsosMultiples"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_sala2.svg" alt="icono">
                                Sala de usos Multiples
                                </li>';
                        }
                        if($clave==="calentadorSolar"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_calentadorsolar1.svg" alt="icono">
                                Calentador Solar
                                </li>';
                        }
                        if($clave==="gimnasio"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_gym1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                        if($clave==="cancha"){
                            echo '<li>
                                <img src="build/img/Iconos/icono_cancha1.svg" alt="icono">
                                '.ucfirst($clave).'
                                </li>';
                        }
                    }
                    
                }
                ?>
            </ul>
        </div>
        
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

