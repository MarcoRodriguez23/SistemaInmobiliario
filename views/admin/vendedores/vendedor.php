<div class="plantilla">
    <div class="trabajador">
        <p><?php echo $vendedor->nombre." ".$vendedor->apellido; ?></p>
        <p><?php echo $vendedor->edad; ?> Años</p>
        <p>Domicilio: <?php echo $direccion->estado.", ".$direccion->calle.", ".$direccion->municipioDelegacion.", ".$direccion->colonia; ?></p>
        <p>Teléfono: <?php echo $vendedor->telefono; ?></p>
    </div>
    <div class="opciones">
        <a href="/admin/vendedores/update?id=<?php echo $vendedor->id; ?>" class="boton-amarillo">Actualizar</a>
        <form method="POST" class="w-100" action="/admin/agentes/delete">
            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
            <input type="hidden" name="tipo" value="vendedor">
            <input type="submit" value="Eliminar" class="boton-rojo" onclick="return ConfirmDelete()">
        </form>
    </div>
</div>