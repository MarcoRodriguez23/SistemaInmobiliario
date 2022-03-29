<div class="plantilla">
    <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
        <div class="inmueble">
            <img src="build/img/1.jpg" alt="foto del inmueble">
            <div class="info-inmueble">
                <p class="direccion"><?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?></p>
                <div class="info-inferior">
                    <p class="precio" class="precio">$ <?php echo $propiedad->precio; ?></p>
                    <p class="pago"></p>
                    <p class="estado"><?php echo $propiedad->status==0 ? "En venta": "Vendida";?></p>
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
    <div class="opciones">
        <a href="/admin/propiedades/update?id=<?php echo $propiedad->id; ?>" class="boton-amarillo">Actualizar</a>
        <a href="/admin/propiedades/sell?id=<?php echo $propiedad->id; ?>" class="boton-verde">Vender</a>
        <a href="/admin/propiedades/date?id=<?php echo $propiedad->id; ?>" class="boton-azul">Agendar</a>
        <form method="POST" class="w-100" action="/admin/propiedades/delete">
            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
            <input type="hidden" name="tipo" value="propiedad">
            <input type="submit" value="Eliminar" class="boton-rojo" onclick="return ConfirmDelete()">
        </form>
    </div>
</div><!--plantilla -->