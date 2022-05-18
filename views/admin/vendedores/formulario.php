<fieldset class="dosColumnas">
    <legend>Información Personal</legend>
    <div>
        <label for="nombre">Nombre(s)</label>
        <input 
            type="text" 
            placeholder="Tu nombre" 
            id="nombre"
            name="vendedor[nombre]"
            value="<?php echo s($vendedor->nombre); ?>"
            >
        <?php echo isset($erroresVendedor["nombre"]) ? "<p>".$erroresVendedor["nombre"]."</p>" : ""; ?>
    </div>
    <div>
        <label for="apellido">Apellidos</label>
        <input 
            type="text" 
            placeholder="apellidos" 
            id="apellido"
            name="vendedor[apellido]"
            value="<?php echo s($vendedor->apellido); ?>"
            >
        <?php echo isset($erroresVendedor["apellido"]) ? "<p>".$erroresVendedor["apellido"]."</p>" : ""; ?>
    </div>
    <div>
        <label for="edad">Edad</label>
        <input 
            type="number" 
            placeholder="ejem: 30" 
            id="residencia" 
            min="15"
            name="vendedor[edad]"
            value="<?php echo s($vendedor->edad); ?>"
            >
        <?php echo isset($erroresVendedor["edad"]) ? "<p>".$erroresVendedor["edad"]."</p>" : ""; ?>
    </div>
    <div>
        <label for="telefono">Teléfono</label>
        <input 
            type="number" 
            placeholder="ejem: 5546782345" 
            id="telefono"
            name="vendedor[telefono]"
            max="5599999999"
            min="5500000000"
            value="<?php echo s($vendedor->telefono); ?>"
            >
        <?php echo isset($erroresVendedor["telefono"]) ? "<p>".$erroresVendedor["telefono"]."</p>" : ""; ?>
        <?php echo isset($erroresVendedor["formatoTelefono"]) ? "<p>".$erroresVendedor["formatoTelefono"]."</p>" : ""; ?>
    </div>
</fieldset>

<fieldset class="dosColumnas">
    <legend>Residencia</legend>
    <div>
        <label for="estado">Estado</label>
        <input 
            type="text" 
            placeholder="Ej: CDMX" 
            name="direccion[estado]" 
            id="estado" 
            value="<?php echo s($direccion->estado); ?>"
        >
        <?php echo isset($erroresDireccion["estado"]) ? "<p>".$erroresDireccion["estado"]."</p>" : ""; ?>
        
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
        <?php echo isset($erroresDireccion["municipioDelegacion"]) ? "<p>".$erroresDireccion["municipioDelegacion"]."</p>" : ""; ?>
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
        <?php echo isset($erroresDireccion["calle"]) ? "<p>".$erroresDireccion["calle"]."</p>" : ""; ?>
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
        <?php echo isset($erroresDireccion["colonia"]) ? "<p>".$erroresDireccion["colonia"]."</p>" : ""; ?>
    </div>
</fieldset>
