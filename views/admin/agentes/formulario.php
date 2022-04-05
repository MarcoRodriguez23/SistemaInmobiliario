<fieldset class="dosColumnas">
    <!-- <legend>Información Personal</legend> -->
    <div>
        <label for="nombre">Nombre(s)</label>
        <input 
            type="text" 
            placeholder="Tu nombre" 
            id="nombre"
            name="agente[nombre]"
            value="<?php echo s($agente->nombre); ?>"
            >
        <?php echo "<p>".$erroresAgente["nombre"]."</p>"; ?>
    </div>
    <div>
        <label for="apellido">Apellidos</label>
        <input 
            type="text" 
            placeholder="apellidos" 
            id="apellido"
            name="agente[apellido]"
            value="<?php echo s($agente->apellido); ?>"
            >
        <?php echo "<p>".$erroresAgente["apellido"]."</p>"; ?>
    </div>
    <div>
        <label for="edad">Edad</label>
        <input 
            type="number" 
            placeholder="ejem: 30" 
            id="residencia" 
            min="15"
            name="agente[edad]"
            value="<?php echo s($agente->edad); ?>"
            >
        <?php echo "<p>".$erroresAgente["edad"]."</p>"; ?>
    </div>
    <div>
        <label for="telefono">Teléfono</label>
        <input 
            type="number" 
            placeholder="ejem: 5546782345" 
            id="telefono"
            name="agente[telefono]"
            max="5599999999"
            min="5500000000"
            value="<?php echo s($agente->telefono); ?>"
            >
        <?php echo "<p>".$erroresAgente["telefono"]."</p>"; ?>
        <?php echo "<p>".$erroresAgente["formatoTelefono"]."</p>"; ?>
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
