<div class="plantilla">
    <a href="/admin/propiedades/info?id=<?php echo $row['id']; ?>">
        <div class="inmueble">
            <img src="build/img/1.jpg" alt="foto del inmueble">
            <div class="info-inmueble">
                <p class="direccion">Calle, Colonia, Delegación</p>
                <p class="precio" class="precio">Precio</p>
                <p class="pago">Forma de pago</p>
                <p class="estado">Estado</p>
                <div class="beneficios">
                    <div class="beneficio">
                        <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                        <p>4 rec</p>
                    </div>
                    <div class="beneficio">
                        <img src="build/img/icono_wc.svg" alt="beneficio1">
                        <p>2 wc</p>
                    </div>
                    <div class="beneficio">
                        <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                        <p>2 est</p>
                    </div>
                    <div class="beneficio">
                        <img src="build/img/medida.svg" alt="beneficio1">
                        <p>72 m2</p>
                    </div>   
                </div>
            </div>
        </div>
    </a>
    <div class="opciones">
        <a href="/admin/propiedades/update?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
        <a href="/admin/propiedades/sell?id=<?php echo $row['id']; ?>" class="boton boton-verde">Vender</a>
        <a href="/admin/propiedades/date?id=<?php echo $row['id']; ?>" class="boton boton-azul">Agendar</a>
        <a href="#" class="boton boton-rojo">Eliminar</a>
    </div>
</div><!--plantilla -->