<div class="plantilla">
    <div class="trabajador">
        <p><?php echo $agente->nombres." ".$agente->apellidos; ?></p>
        <p><?php echo $agente->edad; ?> Años</p>
        <p>Domicilio: <?php echo $direccion->estado.", ".$direccion->calle.", ".$direccion->municipioDelegacion.", ".$direccion->colonia; ?></p>
        <p>Teléfono: <?php echo $agente->telefono; ?></p>
        <p><?php echo $agente->rol==$rol->id ? $rol->tipo : ''; ?></p>
        <p>Comisión: <?php echo $agente->comision; ?>%</p>

    </div>
    <div class="opciones">
        <a href="/admin/agentes/update?id=<?php echo $agente->id; ?>" class="boton boton-amarillo">Actualizar</a>
        <form method="POST" class="w-100" action="/admin/agentes/delete">
            <input type="hidden" name="id" value="<?php echo $agente->id; ?>">
            <input type="hidden" name="tipo" value="agente">
            <input type="submit" value="Eliminar" class="boton-rojo" onclick="return ConfirmDelete()">
        </form>
    </div>
</div>