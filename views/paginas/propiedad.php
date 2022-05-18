
        <div class="inmueble">
            <?php $unaImagen = true; ?>
            <?php foreach($fotos as $foto): ?>
                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                <img src="/imagenes/<?php echo $foto->foto;?>" alt="Seleccione <-Actualizar-> para agregar las imágenes">
                <?php $unaImagen = false; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="info-inmueble">
                <p class="direccion"><?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?></p>
                <div class="info-inferior">
                    <p class="campo-info">
                        <?php echo $propiedad->tipoPropiedad; ?>
                    </p>
                    <p class="campo-info">
                        <?php echo $propiedad->categoria; ?>
                    </p>
                    <div class="beneficios">
                        <div class="beneficio">
                            <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                            <p><?php echo $propiedad->habitaciones;?> rec</p>
                        </div>
                        <div class="beneficio">
                            <img src="build/img/icono_wc.svg" alt="beneficio1">
                            <p><?php echo $propiedad->baños;?> wc</p>
                        </div>
                        <div class="beneficio">
                            <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                            <p><?php echo $propiedad->numEstacionamientos;?> est</p>
                        </div>
                        <div class="beneficio">
                            <img src="build/img/medida.svg" alt="beneficio1">
                            <p><?php echo $propiedad->mt2;?> m2</p>
                        </div>  
                    </div>
                    <p class="precio"><?php echo $propiedad->precio; ?></p> 
                    <p class="estado">
                        <?php echo $propiedad->status ; ?>
                    </p>
                </div>
            </div>
        </div>
    </a>
</div><!--plantilla -->