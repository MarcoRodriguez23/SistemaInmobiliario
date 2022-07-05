<fieldset>
    <legend class="pt-1 fw-bold">Tipo de propiedad</legend>
    <div class="elemento bg-light py-1">
        <select id="tipoPropiedad" name="propiedad[tipoPropiedad]">
            <option value="" disabled 
            <?php echo ($propiedad->tipoPropiedad === "") ? 'selected' : ''; ?>
            >--Selecciona una opción--</option>
            <option 
                value="Casa"
                <?php echo ($propiedad->tipoPropiedad === "Casa") ? 'selected' : ''; ?>
            >
            Casa
            </option>
            <option 
                value="Departamento"
                <?php echo ($propiedad->tipoPropiedad === "Departamento") ? 'selected' : ''; ?>
            >
            Departamento
            </option>
            <option 
                value="Terreno"
                <?php echo ($propiedad->tipoPropiedad === "Terreno") ? 'selected' : ''; ?>
            >
            Terreno
            </option>
            <option 
                value="Bodega"
                <?php echo ($propiedad->tipoPropiedad === "Bodega") ? 'selected' : ''; ?>
            >
            Bodega
            </option>
            <option 
                value="Local"
                <?php echo ($propiedad->tipoPropiedad === "Local") ? 'selected' : ''; ?>
            >
            Local
            </option>
            <option 
                value="Oficina"
                <?php echo ($propiedad->tipoPropiedad === "Oficina") ? 'selected' : ''; ?>
            >
            Oficina
            </option>
        </select>
        <?php echo isset($erroresPropiedad["tipoPropiedad"]) ? "<p>".$erroresPropiedad["tipoPropiedad"]."</p>" : "" ?>
    </div>
</fieldset>

<fieldset id="fieldSetStatus">
    <legend class="pt-1 fw-bold">Disponible para</legend>
    <div class="elemento bg-light py-1">
        <select id="status" name="propiedad[status]">
            <option value="" disabled selected>--Selecciona una opción--</option>

            <option
                value="venta"
                <?php echo ($propiedad->status === 'venta') ? 'selected' : ''; ?>
            >
            Venta
            </option>
            <option
                value="preventa"
                <?php echo ($propiedad->status === 'preventa') ? 'selected' : ''; ?>
            >
            Preventa
            </option>
            <option
                value="renta"
                <?php echo ($propiedad->status === 'renta') ? 'selected' : ''; ?>
            >
            Renta
            </option>
        </select>
        <?php echo isset($erroresPropiedad["status"]) ? "<p>".$erroresPropiedad["status"]."</p>" : "" ?>
    </div>
</fieldset>

<fieldset id="fieldSetRemodelacion">
    <legend class="pt-1 fw-bold">Condiciones</legend>
    <div class="elemento bg-light py-1">
        <select name="propiedad[categoria]">
            <option value="" disabled selected>--Selecciona una opción--</option>
            <option 
                value="Para construir"
                <?php echo ($propiedad->categoria === "Para construir") ? 'selected' : ''; ?>
            >
            Para construir
            </option>
            <option 
                value="Con remodelado"
                <?php echo ($propiedad->categoria === "Con remodelado") ? 'selected' : ''; ?>
            >
            Con remodelado
            </option>
            <option 
                value="Para remodelar"
                <?php echo ($propiedad->categoria === "Para remodelar") ? 'selected' : ''; ?>
            >
            Para remodelar
            </option>
            <option 
                value="Nuevo"
                <?php echo ($propiedad->categoria === "Nuevo") ? 'selected' : ''; ?>
            >
            Nuevo
            </option>
        </select>
        <?php echo isset($erroresPropiedad["categoria"]) ? "<p>".$erroresPropiedad["categoria"]."</p>" : "" ?>
    </div>
</fieldset>

<fieldset>
    <legend class="pt-1 fw-bold">Ubicación</legend>
    <div class="row justify-content-around py-1 bg-light">
        <div class="col-md-5">
            <div class="elemento">
                <label for="estado">Estado</label>
                <select id="estado" name="direccion[estado]">
                    <option value="" disabled 
                    <?php echo ($direccion->estado === "") ? 'selected' : ''; ?>
                    >--Selecciona una opción--</option>
                    <option 
                        value="Aguascalientes"
                        <?php echo ($direccion->estado === "Aguascalientes") ? 'selected' : ''; ?>
                    >
                    Aguascalientes
                    </option>
                    <option 
                        value="Baja California"
                        <?php echo ($direccion->estado === "Baja California") ? 'selected' : ''; ?>
                    >
                    Baja California
                    </option>
                    <option 
                        value="Baja California Sur"
                        <?php echo ($direccion->estado === "Baja California Sur") ? 'selected' : ''; ?>
                    >
                    Baja California Sur
                    </option>
                    <option 
                        value="Campeche"
                        <?php echo ($direccion->estado === "Campeche") ? 'selected' : ''; ?>
                    >
                    Campeche
                    </option>
                    <option 
                        value="Chiapas"
                        <?php echo ($direccion->estado === "Chiapas") ? 'selected' : ''; ?>
                    >
                    Chiapas
                    </option>
                    <option 
                        value="Chihuahua"
                        <?php echo ($direccion->estado === "Chihuahua") ? 'selected' : ''; ?>
                    >
                    Chihuahua
                    </option>
                    <option 
                        value="Coahuila"
                        <?php echo ($direccion->estado === "Coahuila") ? 'selected' : ''; ?>
                    >
                    Coahuila
                    </option>
                    <option 
                        value="CDMX"
                        <?php echo ($direccion->estado === "CDMX") ? 'selected' : ''; ?>
                    >
                    CDMX
                    </option>
                    <option 
                        value="Colima"
                        <?php echo ($direccion->estado === "Colima") ? 'selected' : ''; ?>
                    >
                    Colima
                    </option>
                    <option 
                        value="Durango"
                        <?php echo ($direccion->estado === "Durango") ? 'selected' : ''; ?>
                    >
                    Durango
                    </option>
                    <option 
                        value="Guanajuato"
                        <?php echo ($direccion->estado === "Guanajuato") ? 'selected' : ''; ?>
                    >
                    Guanajuato
                    </option>
                    <option 
                        value="Guerrero"
                        <?php echo ($direccion->estado === "Guerrero") ? 'selected' : ''; ?>
                    >
                    Guerrero
                    </option>
                    <option 
                        value="Hidalgo"
                        <?php echo ($direccion->estado === "Hidalgo") ? 'selected' : ''; ?>
                    >
                    Hidalgo
                    </option>
                    <option 
                        value="Jalisco"
                        <?php echo ($direccion->estado === "Jalisco") ? 'selected' : ''; ?>
                    >
                    Jalisco
                    </option>
                    <option 
                        value="Estado de México"
                        <?php echo ($direccion->estado === "Estado de México") ? 'selected' : ''; ?>
                    >
                    Estado de México
                    </option>
                    <option 
                        value="Michoacán"
                        <?php echo ($direccion->estado === "Michoacán") ? 'selected' : ''; ?>
                    >
                    Michoacán
                    </option>
                    <option 
                        value="Morelos"
                        <?php echo ($direccion->estado === "Morelos") ? 'selected' : ''; ?>
                    >
                    Morelos
                    </option>
                    <option 
                        value="Nayarit"
                        <?php echo ($direccion->estado === "Nayarit") ? 'selected' : ''; ?>
                    >
                    Nayarit
                    </option>
                    <option 
                        value="Nuevo León"
                        <?php echo ($direccion->estado === "Nuevo León") ? 'selected' : ''; ?>
                    >
                    Nuevo León
                    </option>
                    <option 
                        value="Oaxaca"
                        <?php echo ($direccion->estado === "Oaxaca") ? 'selected' : ''; ?>
                    >
                    Oaxaca
                    </option>
                    <option 
                        value="Puebla"
                        <?php echo ($direccion->estado === "Puebla") ? 'selected' : ''; ?>
                    >
                    Puebla
                    </option>
                    <option 
                        value="Querétaro"
                        <?php echo ($direccion->estado === "Querétaro") ? 'selected' : ''; ?>
                    >
                    Querétaro
                    </option>
                    <option 
                        value="Quintana Roo"
                        <?php echo ($direccion->estado === "Quintana Roo") ? 'selected' : ''; ?>
                    >
                    Quintana Roo
                    </option>
                    <option 
                        value="San Luis Potosí"
                        <?php echo ($direccion->estado === "San Luis Potosí") ? 'selected' : ''; ?>
                    >
                    San Luis Potosí
                    </option>
                    <option 
                        value="Sinaloa"
                        <?php echo ($direccion->estado === "Sinaloa") ? 'selected' : ''; ?>
                    >
                    Sinaloa
                    </option>
                    <option 
                        value="Sonora"
                        <?php echo ($direccion->estado === "Sonora") ? 'selected' : ''; ?>
                    >
                    Sonora
                    </option>
                    <option 
                        value="Tabasco"
                        <?php echo ($direccion->estado === "Tabasco") ? 'selected' : ''; ?>
                    >
                    Tabasco
                    </option>
                    <option 
                        value="Tamaulipas"
                        <?php echo ($direccion->estado === "Tamaulipas") ? 'selected' : ''; ?>
                    >
                    Tamaulipas
                    </option>
                    <option 
                        value="Tlaxcala"
                        <?php echo ($direccion->estado === "Tlaxcala") ? 'selected' : ''; ?>
                    >
                    Tlaxcala
                    </option>
                    <option 
                        value="Veracruz"
                        <?php echo ($direccion->estado === "Veracruz") ? 'selected' : ''; ?>
                    >
                    Veracruz
                    </option>
                    <option 
                        value="Yucatán"
                        <?php echo ($direccion->estado === "Yucatán") ? 'selected' : ''; ?>
                    >
                    Yucatán
                    </option>
                    <option 
                        value="Zacatecas"
                        <?php echo ($direccion->estado === "Zacatecas") ? 'selected' : ''; ?>
                    >
                    Zacatecas
                    </option>
                    
                </select>
                <?php echo isset($erroresDireccion["estado"]) ? "<p>".$erroresDireccion["estado"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="calle">Calle</label>
                <input 
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
                <?php echo isset($erroresDireccion["calle"]) ? "<p>".$erroresDireccion["calle"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="numInterior">Número interior</label>
                <input 
                    type="number" 
                    placeholder="Ej: 325" 
                    min="0" 
                    name="direccion[numInterior]" 
                    id="numInterior"
                    value="<?php echo s($direccion->numInterior); ?>"
                    maxlength="4"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["numInterior"]) ? "<p>".$erroresDireccion["numInterior"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="linkGoogle">Enlace de Google Maps (opcional)</label>
                <input 
                    type="text" 
                    placeholder="Link de Google Maps" 
                    name="direccion[linkGoogle]" 
                    id="linkGoogle"
                    value="<?php echo s($direccion->linkGoogle); ?>"
                    maxlength="200"
                    oninput=
                    "if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["linkGoogle"]) ? "<p>".$erroresDireccion["linkGoogle"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="CP">Código Postal</label>
                <input 
                    type="number" 
                    placeholder="Ej: 56432" 
                    name="direccion[CP]" 
                    id="CP"
                    value="<?php echo s($direccion->CP); ?>"
                    maxlength="6"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["CP"]) ? "<p>".$erroresDireccion["CP"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="mt2Construccion">Metros Cuadrados Construidos</label>
                <input 
                    type="number" 
                    placeholder="Ej: 69.40" 
                    min="0" 
                    name="propiedad[mt2Construccion]" 
                    id="mt2Construccion" 
                    step=".01"
                    value="<?php echo s($propiedad->mt2Construccion); ?>"
                    maxlength="6"
                    oninput=
                    "if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["mt2Construccion"]) ? "<p>".$erroresPropiedad["mt2Construccion"]."</p>" : "" ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento">
                <label for="municipioDelegacion">Municipio / Alcaldía</label>
                <input 
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
                <?php echo isset($erroresDireccion["municipioDelegacion"]) ? "<p>".$erroresDireccion["municipioDelegacion"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="colonia">Colonia</label>
                <input 
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
                <?php echo isset($erroresDireccion["colonia"]) ? "<p>".$erroresDireccion["colonia"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="numExterior">Número exterior</label>
                <input 
                    type="number" 
                    placeholder="Ej: 230" 
                    min="0" 
                    name="direccion[numExterior]" 
                    id="numExterior"
                    value="<?php echo s($direccion->numExterior); ?>"
                    maxlength="4"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["numExterior"]) ? "<p>".$erroresDireccion["numExterior"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="link360">Enlace de recorrido 360° (opcional)</label>
                <input 
                    type="text" 
                    placeholder="Link de recorrido" 
                    name="direccion[link360]" 
                    id="link360"
                    value="<?php echo s($direccion->link360); ?>"
                    maxlength="200"
                    oninput=
                    "if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresDireccion["link360"]) ? "<p>".$erroresDireccion["link360"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="mt2">Metros Cuadrados</label>
                <input 
                    type="number" 
                    placeholder="Ej: 80.30" 
                    min="0" 
                    name="propiedad[mt2]" 
                    id="mt2" 
                    step=".01"
                    value="<?php echo s($propiedad->mt2); ?>"
                    maxlength="6"
                    oninput=
                    "if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["mt2"]) ? "<p>".$erroresPropiedad["mt2"]."</p>" : "" ?>
            </div>
        </div>
    </div>
</fieldset>

<fieldset id="fieldSetDescripcionPropiedad">
    <legend class="pt-1 fw-bold">Descripción de la propiedad</legend>
    <div class="row justify-content-around py-1 bg-light">
        <div class="col-md-5">
            <div class="elemento">
                <label for="numPisos">Pisos</label>
                <input 
                    type="number" 
                    placeholder="Ej: 3" 
                    min="0" 
                    name="propiedad[numPisos]" 
                    id="numPisos"
                    value="<?php echo s($propiedad->numPisos); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["numPisos"]) ? "<p>".$erroresPropiedad["numPisos"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="habitaciones">Habitaciones</label>
                <input 
                    type="number" 
                    placeholder="Ej: 4" 
                    min="0" 
                    name="propiedad[habitaciones]" 
                    id="habitaciones"
                    value="<?php echo s($propiedad->habitaciones); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["habitaciones"]) ? "<p>".$erroresPropiedad["habitaciones"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="baños">Baños</label>
                <input 
                    type="number" 
                    placeholder="Ej: 3" 
                    min="0"
                    max="10" 
                    name="propiedad[baños]" 
                    id="baños"
                    value="<?php echo s($propiedad->baños); ?>"
                    maxlength="3"
                    step=".5"
                    oninput=
                    "this.value = this.value.replace(/[^0-9 .]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["baños"]) ? "<p>".$erroresPropiedad["baños"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="servicioP">Patio de servicio (opcional)</label>
                <input 
                    type="number" 
                    placeholder="Ej: 1" 
                    min="0" 
                    name="propiedad[servicioP]" 
                    id="servicioP"
                    value="<?php echo s($propiedad->servicioP); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                    >
                <?php echo isset($erroresPropiedad["servicioP"]) ? "<p>".$erroresPropiedad["servicioP"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="numEstacionamientos">Número de cajones</label>
                <input 
                    type="number" 
                    placeholder="Ej: 2" 
                    min="0" 
                    name="propiedad[numEstacionamientos]" 
                    id="numEstacionamientos"
                    value="<?php echo s($propiedad->numEstacionamientos); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["numEstacionamientos"]) ? "<p>".$erroresPropiedad["numEstacionamientos"]."</p>" : "" ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento">
                <label for="año">Año de construcción</label>
                <input 
                    type="number" 
                    placeholder="Ej: 2020" 
                    min="0" 
                    name="propiedad[año]" 
                    id="año"
                    value="<?php echo s($propiedad->año); ?>"
                    maxlength="4"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["año"]) ? "<p>".$erroresPropiedad["año"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                    <label for="servicioH">Habitaciones de servicio (opcional)</label>
                <input 
                    type="number" 
                    placeholder="Ej: 1" 
                    min="0" 
                    name="propiedad[servicioH]" 
                    id="servicioH"
                    value="<?php echo s($propiedad->servicioH); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["servicioH"]) ? "<p>".$erroresPropiedad["servicioH"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="estacionamiento">Tipo de estacionamiento</label>
                <select name="propiedad[estacionamiento]" id="estacionamiento">
                    <option value="" disabled selected>--Seleccione un tipo de estacionamiento--</option>
                    <option
                        value="No aplica"
                        <?php echo $propiedad->estacionamiento === "No aplica" ? 'selected' : ''; ?>
                    >
                    No aplica
                    </option>
                    <option
                        value="Techado"
                        <?php echo $propiedad->estacionamiento === "Techado" ? 'selected' : ''; ?>
                    >
                    Techado
                    </option>
                    <option
                        value="Sin techar"
                        <?php echo $propiedad->estacionamiento === "Sin techar" ? 'selected' : ''; ?>
                    >
                    Sin techar
                    </option>
                    <option
                        value="Calle"
                        <?php echo $propiedad->estacionamiento === "Calle" ? 'selected' : ''; ?>
                    >
                    Calle
                    </option>
                    <option
                        value="Mécanico"
                        <?php echo $propiedad->estacionamiento === "Mécanico" ? 'selected' : ''; ?>
                    >
                    Mécanico
                    </option>
                </select>
                <?php echo isset($erroresPropiedad["estacionamiento"]) ? "<p>".$erroresPropiedad["estacionamiento"]."</p>" : "" ?>
            </div>
            <div class="elemento">
                <label for="numIdEstacionamiento">Número de estacionamiento (opcional)</label>
                <input 
                    type="number" 
                    placeholder="Ej: 280" 
                    min="0" 
                    name="propiedad[numIdEstacionamiento]" 
                    id="numIdEstacionamiento"
                    value="<?php echo s($propiedad->numIdEstacionamiento); ?>"
                    maxlength="4"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["numIdEstacionamiento"]) ? "<p>".$erroresPropiedad["numIdEstacionamiento"]."</p>" : "" ?>
            </div>
        </div>
    </div>
</fieldset>

<fieldset id="fieldSetPrecio">
    <legend class="pt-1 fw-bold">Precio</legend>
    <div class="row justify-content-around py-1 bg-light">
        <div class="col-md-5">
            <div class="elemento">
                <label for="precio">Cantidad</label>
                <input 
                    type="number" 
                    placeholder="Ej: 1800000" 
                    min="10000" 
                    name="propiedad[precio]" 
                    id="precio"
                    value="<?php echo s($propiedad->precio); ?>"
                    maxlength="9"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["precio"]) ? "<p>".$erroresPropiedad["precio"]."</p>" : "" ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="elemento">
                <label for="mantenimiento">Precio de mantenimiento (mensual)</label>
                <input 
                    type="number" 
                    placeholder="Ej: 5000" 
                    min="0" 
                    name="propiedad[mantenimiento]" 
                    id="mantenimiento"
                    value="<?php echo s($propiedad->mantenimiento); ?>"
                    maxlength="6"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["mantenimiento"]) ? "<p>".$erroresPropiedad["mantenimiento"]."</p>" : "" ?>
            </div>
        </div>

    </div>
</fieldset>

<fieldset id="fieldSetDepartamento">
    <legend class="pt-1 fw-bold">Departamento</legend>
    <div class="row justify-content-around bg-light py-1">
        <div class="col-md-5">
            <div class="elemento">
                <label for="piso">Número de piso</label>
                <input 
                    type="number" 
                    placeholder="Ej: 1" 
                    min="0" 
                    name="propiedad[piso]" 
                    id="piso"
                    value="<?php echo s($propiedad->piso); ?>"
                    maxlength="2"
                    oninput=
                    "this.value = this.value.replace(/[^0-9]/,'')
                    if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
                >
                <?php echo isset($erroresPropiedad["piso"]) ? "<p>".$erroresPropiedad["piso"]."</p>" : "" ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="py-1">
                <input
                class="checkbox-lg"
                type="checkbox" 
                name="propiedad[numElevadores]" 
                id="numElevadores"
                value="si"
                >
                <label for="numElevadores">Con elevador</label>
                <?php echo isset($erroresPropiedad["numElevadores"]) ? "<p>".$erroresPropiedad["numElevadores"]."</p>" : "" ?>
            </div>
        </div>
    </div>
</fieldset>

<fieldset id="fieldSetComision" >
    <legend class="pt-1 fw-bold">Comisión de venta</legend>
    <div class="elemento comision p-2">
        <label for="comision">Porcentaje de comisión (1 a 50)</label>
        <input 
            type="number" 
            placeholder="ejem: 30" 
            id="comision" 
            min="1" 
            name="propiedad[comision]"
            max="50"
            value="<?php echo s($propiedad->comision); ?>"
            maxlength="2"
            oninput=
            "this.value = this.value.replace(/[^0-9]/,'')
            if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
        >
        <?php echo isset($erroresPropiedad["comision"]) ? "<p>".$erroresPropiedad["comision"]."</p>" : "" ?>
    </div>
</fieldset>

<fieldset id="fieldSetMueblesAmenidades">
    <legend class="pt-1 fw-bold">Muebles y amenidades</legend>
    <div class="row justify-content-around bg-light py-1">
        <div class="opciones col-md-5"><!--Div para tener las opciones de los muebles-->
            <div>
                <input 
                    type="checkbox" 
                    name="muebles[sala]" 
                    value="sala"
                    <?php echo stristr($propiedad->muebles,"sala") ? 'checked' : '' ; ?>
                    >
                <label>Sala</label>
            </div>

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[lavadora]" 
                    value="lavadora"
                    <?php echo stristr($propiedad->muebles,"lavadora") ? 'checked' : '' ; ?>
                    >
                <label>Lavadora</label>
            </div>    

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[cocina]" 
                    value="cocina"
                    <?php echo stristr($propiedad->muebles,"cocina") ? 'checked' : '' ; ?>
                    >
                <label>Cocina</label>
            </div>  

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[boiler]" 
                    value="boiler"
                    <?php echo stristr($propiedad->muebles,"boiler") ? 'checked' : '' ; ?>
                    >
                <label>Boiler</label>
            </div>  

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[camas]" 
                    value="camas"
                    <?php echo stristr($propiedad->muebles,"camas") ? 'checked' : '' ; ?>
                    >
                <label>camas</label>
            </div> 

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[roperos]" 
                    value="roperos"
                    <?php echo stristr($propiedad->muebles,"roperos") ? 'checked' : '' ; ?>
                    >
                <label>Roperos</label>
            </div>  
        </div>
        
        <div class="opciones col-md-5"><!--Div para tener las opciones de las amenidades-->
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[balcon]" 
                    value="balcón"
                    <?php echo stristr($propiedad->amenidades,"balcón") ? 'checked' : '' ; ?>
                    >
                <label>Balcón</label>
            </div>     
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[salaDeUsosMultiples]" 
                    value="sala de usos multiples"
                    <?php echo stristr($propiedad->amenidades,"sala de usos multiples") ? 'checked' : '' ; ?>
                    >
                <label>Sala de usos multiples</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[gimnasio]" 
                    value="gimnasio"
                    <?php echo stristr($propiedad->amenidades,"gimnasio") ? 'checked' : '' ; ?>
                    >
                <label>Gimnasio</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[gimnasio]" 
                    value="gimnasio"
                    <?php echo stristr($propiedad->amenidades,"gimnasio") ? 'checked' : '' ; ?>
                    >
                <label>Gimnasio</label>
            </div> 
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[calentadorSolar]" 
                    value="calentador solar"
                    <?php echo stristr($propiedad->amenidades,"calentador solar") ? 'checked' : '' ; ?>
                    >
                <label>Calentador Solar</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[alberca]" 
                    value="alberca"
                    <?php echo stristr($propiedad->amenidades,"alberca") ? 'checked' : '' ; ?>
                    >
                <label>Alberca</label>
            </div> 
        </div>
    </div>
</fieldset>

<fieldset id="fieldSetEscritura">
    <legend class="pt-1 fw-bold">Escritura y opciones de venta</legend>
    <div class="elemento bg-light py-1">
        <select name="propiedad[escritura]">
            <option value="" disabled selected>--Selecciona un opción--</option>
            <option 
                value="Escritura"
                <?php echo ($propiedad->escritura === "Escritura") ? 'selected' : ''; ?>
            >
            Escritura
            </option>
            <option 
                value="Cesión de derechos"
                <?php echo ($propiedad->escritura === "Cesión de derechos") ? 'selected' : ''; ?>
            >
            Cesión de derechos
            </option>
            <option 
                value="Remate"
                <?php echo ($propiedad->escritura === "Remate") ? 'selected' : ''; ?>
            >
            Remate
            </option>
        </select>
        <?php echo isset($erroresPropiedad["escritura"]) ? "<p>".$erroresPropiedad["escritura"]."</p>" : "" ?>
    </div>
    
    <div class="d-flex justify-content-around align-items-center bg-light py-1">
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[fovissste]" 
                value="fovissste"
                <?php echo stristr($propiedad->metodosVenta,"fovissste") ? 'checked' : '' ; ?>
                
                
                >
            <label>FOVISSSTE</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[infonavit]" 
                value="infonavit"
                <?php echo stristr($propiedad->metodosVenta,"infonavit") ? 'checked' : '' ; ?>
                >
            <label>INFONAVIT</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[credito]" 
                value="credito bancario"
                <?php echo stristr($propiedad->metodosVenta,"credito bancario") ? 'checked' : '' ; ?>
                >
            <label>Credito bancario</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[efectivo]" 
                value="efectivo"
                <?php echo stristr($propiedad->metodosVenta,"efectivo") ? 'checked' : '' ; ?>
                >
            <label>Efectivo</label>
        </div> 
    </div>

        
        <?php echo isset($erroresMetodosVenta["metodosVenta"]) ? "<p>".$erroresMetodosVenta["metodosVenta"]."</p>" : "" ?>

    <p class="text-center" style="color:black">(puede marcar más de una opción)</p>
</fieldset>

<fieldset id="fieldSetPredio">
    <legend class="pt-1 fw-bold">Número de predio</legend>
    <div class="elemento bg-light py-1">
        <label for="numPredio">Número de predio</label>
        <input 
            type="text" 
            placeholder="ejem: 03840546028-8" 
            id="numPredio" 
            min="1" 
            name="propiedad[numPredio]"
            value="<?php echo s($propiedad->numPredio); ?>"
            maxlength="20"
            oninput=
            "this.value = this.value.replace(/[^-0-9]/,'')
            if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
        >
        <?php echo isset($erroresPropiedad["numPredio"]) ? "<p>".$erroresPropiedad["numPredio"]."</p>" : "" ?>
    </div>
</fieldset>