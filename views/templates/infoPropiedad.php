<div class="dos-columnas container-xl">
    
    <div class="enlaces">
        <a class="botonComercial" target="_blank" href="<?php echo $propiedad->linkGoogle; ?>">Conoce la ubicación mediante Google Maps</a>
        <a class="botonComercial" target="_blank" href="<?php echo $propiedad->link360; ?>">Recorre la propiedad en 360°</a>
    </div>
   
    <div class="opciones-compra">
        <div>
            <h3 class="tituloDorado fs-4">Opciones de compra</h3>
            
            <ul>
                <?php
                    $arreglo = explode(", ",$propiedad->metodosVenta);
                    for ($i=0; $i < sizeof($arreglo); $i++) { 
                        echo 
                        '<li>
                            <img src="/build/img/Iconos/efectivo.svg" alt="icono">
                            <p>'.ucfirst($arreglo[$i]).'</p>
                        </li>';
                    }
                ?>
            </ul>  
        </div>
        <div>
            <h3 class="tituloDorado fs-4">Documentación</h3>
            <ul>
                <?php
                    echo '<li>
                    <img src="/build/img/Iconos/icono_escrituras1.svg" alt="icono">
                    <p>'.ucfirst($propiedad->escritura).'</p>
                    </li>';
                ?>
            </ul>
        </div>
    </div>
</div>

<section  class="extra-propiedad container-xl">
    <h2 class="tituloDorado text-start">Características</h2>

    <div class="extra-elementos">
    <ul>
                <?php if($propiedad->habitaciones!=0): ?>
                <li>
                    <img src="/build/img/Iconos/icono_recamara1.svg" alt="icono">
                    <p>Habitaciones: <?php echo $propiedad->habitaciones; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->baños!=0): ?>
                <li>
                    <img src="/build/img/Iconos/icono_baño1.svg" alt="icono">
                    <p>Baños: <?php echo $propiedad->baños; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->mt2!=0): ?>
                <li>
                    <img src="/build/img/Iconos/icono_metros1.svg" alt="icono">
                    <p>Mt2: <?php echo $propiedad->mt2; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->mt2Construccion!=0): ?>
                <li>
                    <img src="/build/img/Iconos/mt2Construidos.svg" alt="icono">
                    <p>Mt2 Construidos: <?php echo $propiedad->mt2Construccion; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->servicioH!=0): ?>
                <li>
                    <img src="/build/img/Iconos/icono_sala1.svg" alt="icono">
                    <p>Habitación de servicio: <?php echo $propiedad->servicioH; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->servicioP!=0): ?>
                <li>
                    <img src="/build/img/Iconos/icono_patiodeservicio1.svg" alt="icono">
                    <p>Patio de servicio: <?php echo $propiedad->servicioP; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->numPisos!=0): ?>
                <li>
                    <img src="/build/img/Iconos/pisos.svg" alt="icono">
                    <p>Núm. de pisos: <?php echo $propiedad->numPisos; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->numPredio!=0): ?>
                <li>
                    <img src="/build/img/Iconos/interior.svg" alt="icono">
                    <p>Núm. de predio: <?php echo $propiedad->numPredio; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->estacionamiento!=""): ?>
                <li>
                    <img src="/build/img/Iconos/icono_estacionamiento1.svg" alt="icono">
                    <p>Tipo de estacionamiento: <?php echo $propiedad->estacionamiento; ?></p>
                </li>
                <?php endif; ?>
                <?php if($propiedad->numEstacionamientos!=0): ?>
                <li>
                    <img src="/build/img/Iconos/cajon.svg" alt="icono">
                    <p>Cajones de estacionamientos: <?php echo $propiedad->numEstacionamientos; ?></p>
                </li>
                <?php endif; ?>
            </ul>            
    </div>
</section>

<section  class="extra-propiedad container-xl">
    <h2 class="tituloDorado text-start">Info. y características extra</h2>
    <div class="extra-elementos">
        <ul>
            <?php if($propiedad->categoria!=""): ?>
            <li>
                <img src="/build/img/Iconos/icono_edificio3.svg" alt="icono">
                <p><?php echo $propiedad->categoria; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->año!=0): ?>
            <li>
                <img src="/build/img/Iconos/icono_año.svg" alt="icono">
                <p>Año de construcción: <?php echo $propiedad->año; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->numExterior!=0): ?>
            <li>
                <img src="/build/img/Iconos/icono_casa1.svg" alt="icono">
                <p>Núm. exterior: <?php echo $propiedad->numExterior; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->numInterior!=0): ?>
            <li>
                <img src="/build/img/Iconos/interior.svg" alt="icono">
                <p>Núm. interior: <?php echo $propiedad->numInterior; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->piso!=0): ?>
            <li>
                <img src="/build/img/Iconos/icono_edificio1.svg" alt="icono">
                <p>Núm. de piso: <?php echo $propiedad->piso; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->numElevadores!=0): ?>
            <li>
                <img src="/build/img/Iconos/icono_elevador1.svg" alt="icono">
                <p>Elevador: <?php echo $propiedad->numElevadores; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->mantenimiento!=0): ?>
            <li>
                <img src="/build/img/Iconos/mantenimiento.svg" alt="icono">
                <p>Mtto mensual: <?php echo "$ ".$propiedad->mantenimiento; ?></p>
            </li>
            <?php endif; ?>
            <?php if($propiedad->numIdEstacionamiento!=0): ?>
            <li>
                <img src="/build/img/Iconos/icono_estacionamiento2.svg" alt="icono">
                <p>Núm. de estacionamiento: <?php echo $propiedad->numIdEstacionamiento; ?></p>
            </li>
            <?php endif; ?>
        </ul>       
    </div>
</section>

<div class="muebles-amenidades container-xl">
    <?php if(!empty($propiedad->muebles)): ?>
    <div>
        <h3 class="tituloDorado">Muebles</h3>
        <ul>
            <?php
                $arreglo = explode(", ",$propiedad->muebles);
                for ($i=0; $i < sizeof($arreglo); $i++) { 
                    echo 
                    '<li>
                        <img src="/build/img/Iconos/icono_'.$arreglo[$i].'1.svg" alt="icono">
                        '.strtoupper($arreglo[$i]).'
                    </li>';
                }
            ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if(!empty($propiedad->amenidades)): ?>
    <div>
        <h3 class="tituloDorado">Amenidades</h3>
        <ul>
            <?php
                $arreglo = explode(", ",$propiedad->amenidades);
                for ($i=0; $i < sizeof($arreglo); $i++) { 
                    echo 
                    '<li>
                        <img src="/build/img/Iconos/icono_'.$arreglo[$i].'1.svg" alt="icono">
                        '.strtoupper($arreglo[$i]).'
                    </li>';
                }
            ?>
        </ul>
    </div>
    <?php endif; ?>
</div>