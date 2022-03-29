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
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Núm. de pisos: <?php echo $propiedad->numPisos; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Baños: <?php echo $propiedad->baños; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Habitaciones: <?php echo $propiedad->habitaciones; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Metros cuadrados: <?php echo $propiedad->mt2; ?> mt2</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Tipo de estacionamiento: <?php echo $estacionamiento->tipo; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Cajones de estacionamientos: <?php echo $propiedad->numEstacionamientos; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
                    <p>Habitación de servicio: <?php echo $propiedad->servicioH; ?></p>
                </li>
                <li>
                    <img src="build/img/departamentos.svg" alt="icono">
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
                <img src="build/img/departamentos.svg" alt="icono">
                <p>Año de construcción: <?php echo $propiedad->año; ?></p>
            </li>
            <li>
                <img src="build/img/departamentos.svg" alt="icono">
                <p>Núm. exterior: <?php echo $direccion->numExterior; ?></p>
            </li>
            <li>
                <img src="build/img/departamentos.svg" alt="icono">
                <p>Núm. interior: <?php echo $direccion->numInterior; ?></p>
            </li>
            <li>
                <img src="build/img/departamentos.svg" alt="icono">
                <p>Número de departamento: <?php echo $propiedad->numDepartamento; ?></p>
            </li>
            <li>
                <img src="build/img/departamentos.svg" alt="icono">
                <p>Número de piso: <?php echo $propiedad->piso; ?></p>
            </li>
            <li>
                <img src="build/img/departamentos.svg" alt="icono">
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
                        echo "<li>".ucfirst($clave)."</li>";
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
                            echo "<li>Roff Garden</li>";
                        }
                        if($clave==="salaDeUsosMultiples"){
                            echo "<li>Sala de usos Multiples</li>";
                        }
                        if($clave==="calentadorSolar"){
                            echo "<li>Calentador Solar</li>";
                        }
                        if($clave==="gimnasio"){
                            echo "<li>".ucfirst($clave)."</li>";
                        }
                        if($clave==="cancha"){
                            echo "<li>".ucfirst($clave)."</li>";
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
                                echo "<li>CRÉDITO BANCARIO</li>";
                            }
                            else{
                                echo "<li>".strtoupper($clave)."</li>";
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
                    <li>
                        <?php echo $escritura->tipo; ?>
                    </li>
                </ul>
            </div>
        </div>
        <img src="build/img/conocenos.jpg" alt="opciones venta">
    </div>
</main>

