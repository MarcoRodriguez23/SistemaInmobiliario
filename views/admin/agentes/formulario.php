<fieldset class="dosColumnas">
    <legend>Información Personal</legend>
    <div>
        <label for="nombre">Nombre(s)</label>
        <input type="text" placeholder="Tu nombre" id="nombre">
    </div>
    <div>
        <label for="apellido">Apellidos</label>
        <input type="text" placeholder="apellidos" id="apellido">
    </div>
    <div>
        <label for="edad">Edad</label>
        <input type="number" placeholder="ejem: 30" id="residencia" min="15">
    </div>
    <div>
        <label for="telefono">Teléfono</label>
        <input type="number" placeholder="ejem: 5546782345" id="telefono">
    </div>
</fieldset>

<fieldset class="dosColumnas">
    <legend>Residencia</legend>
    <div>
        <label for="estado">Estado</label>
        <input 
            type="text" 
            placeholder="Ej: CDMX" 
            name="direccion[estado]" id="estado" 
            value="<?php echo s($direccion->estado); ?>"
        >
        <?php echo "<p>".$erroresDireccion["estado"]."</p>"; ?>
        
    </div>

    <div>
        <label for="municipioDelegacion">Municipio / Alcaldía</label>
        <input 
            type="text" 
            placeholder="Ej: Iztacalco"
            name="direccion[municipioDelegacion]" 
            id="municipioDelegacion" 
            value="<?php echo s($direccion->municipioDelegacion); ?>"
        >
        <?php echo "<p>".$erroresDireccion["municipioDelegacion"]."</p>"; ?>
    </div>

    <div>
        <label for="calle">Calle</label>
        <input 
            type="text" 
            placeholder="Ej: Avenida Patria" 
            name="direccion[calle]" 
            id="calle"
            value="<?php echo s($direccion->calle); ?>"
            >
        <?php echo "<p>".$erroresDireccion["calle"]."</p>"; ?>
    </div>

    <div>
        <label for="colonia">Colonia</label>
        <input 
            type="text" 
            placeholder="Ej: Solidaridad" 
            name="direccion[colonia]" 
            id="colonia"
            value="<?php echo s($direccion->colonia); ?>"
            >
        <?php echo "<p>".$erroresDireccion["colonia"]."</p>"; ?>
    </div>
</fieldset>

<fieldset class="comision">
    <legend>Comisión</legend>
    <div>
        <label for="comision">Porcentaje de comisión</label>
        <input type="number" placeholder="ejem: 30" id="comision" min="1" max="100">
    </div>
</fieldset>

<fieldset>
    <legend>Asignar rol</legend>
    <div>
        <label for="rol">Rol</label>
        <select name="rol" id="rol">
            <option value="0" selected disabled>--Seleccione un rol--</option>
            <option value="1">rol 1</option>
            <option value="2">rol 2</option>
            <option value="3">rol 3</option>
        </select>
    </div>
</fieldset>