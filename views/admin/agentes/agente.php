<div class="plantilla">
    <div class="trabajador">
        <p>Nombre y apellido</p>
        <p>Edad</p>
        <p>Residencia</p>
        <p>Teléfono</p>
        <p>Rol</p>
        <p>Comisión: %</p>
    </div>
    <div class="opciones">
        <a href="/admin/agentes/update?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
        <a href="#" class="boton boton-rojo">Eliminar</a>
    </div>
</div>