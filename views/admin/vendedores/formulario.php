<fieldset>
    <legend class="pt-1 fw-bold">Información Personal</legend>
    <div class="row justify-content-around bg-light py-1">
        <div class="col-md-5">
            <div class="elemento">
                <label class="form-label" for="nombre">Nombre(s)</label>
                <input
                    class="form-control" 
                    type="text" 
                    placeholder="Tu nombre" 
                    id="nombre"
                    name="vendedor[nombre]"
                    value="<?php echo s($vendedor->nombre); ?>"
                    maxlength="60"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresVendedor["nombre"]) ? "<p>".$erroresVendedor["nombre"]."</p>" : ""; ?>
            </div>
            <div class="elemento">
                <label class="form-label" for="apellido">Apellidos</label>
                <input 
                    class="form-control"
                    type="text" 
                    placeholder="apellidos" 
                    id="apellido"
                    name="vendedor[apellido]"
                    value="<?php echo s($vendedor->apellido); ?>"
                    maxlength="60"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresVendedor["apellido"]) ? "<p>".$erroresVendedor["apellido"]."</p>" : ""; ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento">
                <label class="form-label" for="edad">Edad</label>
                <input
                    class="form-control" 
                    type="number" 
                    placeholder="ejem: 30" 
                    id="residencia" 
                    min="15"
                    name="vendedor[edad]"
                    value="<?php echo s($vendedor->edad); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresVendedor["edad"]) ? "<p>".$erroresVendedor["edad"]."</p>" : ""; ?>
            </div>
            <div class="elemento">
                <label class="form-label" for="telefono">Teléfono</label>
                <input
                    class="form-control" 
                    type="number" 
                    placeholder="ejem: 5546782345" 
                    id="telefono"
                    name="vendedor[telefono]"
                    max="5599999999"
                    min="5500000000"
                    value="<?php echo s($vendedor->telefono); ?>"
                    maxlength="10"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    
                    >
                <?php echo isset($erroresVendedor["telefono"]) ? "<p>".$erroresVendedor["telefono"]."</p>" : ""; ?>
                <?php echo isset($erroresVendedor["formatoTelefono"]) ? "<p>".$erroresVendedor["formatoTelefono"]."</p>" : ""; ?>
            </div>
        </div>
    </div>
    
</fieldset>

<fieldset>
    <legend class="pt-1 fw-bold">Residencia</legend>
    <div class="row justify-content-around bg-light py-1">
        <div class="col-md-5">
            <div class="elemento">
                <label class="form-label" for="estado">Estado</label>
                <input
                    class="form-control" 
                    type="text" 
                    placeholder="Ej: CDMX" 
                    name="direccion[estado]" 
                    id="estado" 
                    value="<?php echo s($direccion->estado); ?>"
                    maxlength="45"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["estado"]) ? "<p>".$erroresDireccion["estado"]."</p>" : ""; ?>
            </div>
            <div class="elemento">
                <label class="form-label" for="municipioDelegacion">Municipio / Alcaldía</label>
                <input 
                    class="form-control"
                    type="text" 
                    placeholder="Ej: Iztacalco"
                    name="direccion[municipioDelegacion]" 
                    id="municipioDelegacion" 
                    value="<?php echo s($direccion->municipioDelegacion); ?>"
                    maxlength="60"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["municipioDelegacion"]) ? "<p>".$erroresDireccion["municipioDelegacion"]."</p>" : ""; ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento">
                <label class="form-label" for="calle">Calle</label>
                <input 
                    class="form-control"
                    type="text" 
                    placeholder="Ej: Avenida Patria" 
                    name="direccion[calle]" 
                    id="calle"
                    value="<?php echo s($direccion->calle); ?>"
                    maxlength="45"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9# ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresDireccion["calle"]) ? "<p>".$erroresDireccion["calle"]."</p>" : ""; ?>
            </div>
            <div class="elemento">
                <label class="form-label" for="colonia">Colonia</label>
                <input 
                    class="form-control"
                    type="text" 
                    placeholder="Ej: Solidaridad" 
                    name="direccion[colonia]" 
                    id="colonia"
                    value="<?php echo s($direccion->colonia); ?>"
                    maxlength="30"
                    oninput=
                    "this.value = this.value.replace(/[^A-Za-záéíóúñÁÉÍÓÚÑ0-9 ]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresDireccion["colonia"]) ? "<p>".$erroresDireccion["colonia"]."</p>" : ""; ?>
            </div>
        </div>
    </div>
</fieldset>