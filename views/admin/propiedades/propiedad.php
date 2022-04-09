<div class="plantilla">
    <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
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
                    <p class="precio">$ <?php echo $propiedad->precio; ?></p>
                    <p class="pago">Comisión: <?php echo $propiedad->comision; ?> %</p>
                    <p class="pago">
                        <?php foreach($categorias as $cat): ?>
                            <?php echo $propiedad->categoria === $cat->id ? ucfirst($cat->tipo) : '' ; ?>
                        <?php endforeach; ?>
                    </p>
                    <p class="estado">
                        <?php foreach($status as $sts): ?>
                            <?php echo $propiedad->status === $sts->id ? ucfirst($sts->estado) : '' ; ?>
                        <?php endforeach; ?>
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
                    
                </div>
            </div>
        </div>
    </a>
    <?php if(!($_SESSION['nivel']==3)): ?>
    <div class="opciones">
        <?php if ($propiedad->status==2) : ?>
            <a href="/admin/propiedades/sell?id=<?php echo $propiedad->id; ?>" class="boton-verde">VENDIDA</a>
        <?php endif; ?>
        <?php if ($propiedad->status!=2) : ?>
            <a href="/admin/propiedades/sell?id=<?php echo $propiedad->id; ?>" class="boton-verde">Vender</a>
            <a href="/admin/propiedades/date?id=<?php echo $propiedad->id; ?>" class="boton-azul">Agendar</a>
            <a href="/admin/propiedades/update?id=<?php echo $propiedad->id; ?>" class="boton-amarillo">Actualizar</a>
            
        <?php endif; ?>
        <form method="POST" class="w-100" action="/admin/propiedades/delete">
            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
            <input type="hidden" name="tipo" value="propiedad">
            <input type="submit" value="Eliminar" class="boton-rojo" onclick="return ConfirmDelete()">
        </form>
    </div>
    <?php endif; ?>
</div><!--plantilla -->