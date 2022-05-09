<!--PARTE DONDE SE ESCOGE EL TIPO DE PROPIEDAD-->
<fieldset id="fieldSetTipoPropiedad">
    <legend>Tipo de propiedad</legend>
    <div>
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
    <legend>Disponible para: </legend>
    <div>
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
    <legend>Remodelación</legend>
    <div>
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
            value="Para laborar"
            <?php echo ($propiedad->categoria === "Para laborar") ? 'selected' : ''; ?>
        >
        Para laborar
        </option>
    </select>
    <?php echo isset($erroresPropiedad["categoria"]) ? "<p>".$erroresPropiedad["categoria"]."</p>" : "" ?>
    </div>
</fieldset>

<!--PARTE DONDE SE AGREGA INFORMACION SOBRE LA UBICACION DE LA PROPIEDAD-->
<fieldset id="fieldSetUbicacion" class="dosColumnas">
    <legend>Ubicación</legend>
    <div>
        <label for="estado">Estado</label>
        <input 
            type="text" 
            placeholder="Ej: CDMX" 
            name="direccion[estado]" id="estado" 
            value="<?php echo s($direccion->estado); ?>"
        >
        <?php echo isset($erroresDireccion["estado"]) ? "<p>".$erroresDireccion["estado"]."</p>" : "" ?>
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
        <?php echo isset($erroresDireccion["municipioDelegacion"]) ? "<p>".$erroresDireccion["municipioDelegacion"]."</p>" : "" ?>
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
        <?php echo isset($erroresDireccion["calle"]) ? "<p>".$erroresDireccion["calle"]."</p>" : "" ?>
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
        <?php echo isset($erroresDireccion["colonia"]) ? "<p>".$erroresDireccion["colonia"]."</p>" : "" ?>
    </div>

    <div>
        <label for="numInterior">Número interior</label>
        <input 
            type="number" 
            placeholder="Ej: 325" 
            min="0" 
            name="direccion[numInterior]" 
            id="numInterior"
            value="<?php echo s($direccion->numInterior); ?>"
        >
        <?php echo isset($erroresDireccion["numInterior"]) ? "<p>".$erroresDireccion["numInterior"]."</p>" : "" ?>
    </div>

    <div>
        <label for="numExterior">Número exterior</label>
        <input 
            type="number" 
            placeholder="Ej: 230" 
            min="0" 
            name="direccion[numExterior]" 
            id="numExterior"
            value="<?php echo s($direccion->numExterior); ?>"
        >
        <?php echo isset($erroresDireccion["numExterior"]) ? "<p>".$erroresDireccion["numExterior"]."</p>" : "" ?>
    </div>

    <div>
        <label for="linkGoogle">Enlace de Google Maps (opcional)</label>
        <input 
            type="text" 
            placeholder="Link de Google Maps" 
            name="direccion[linkGoogle]" 
            id="linkGoogle"
            value="<?php echo s($direccion->linkGoogle); ?>"
        >
        <?php echo isset($erroresDireccion["linkGoogle"]) ? "<p>".$erroresDireccion["linkGoogle"]."</p>" : "" ?>
    </div>

    <div>
        <label for="link360">Enlace de recorrido 360° (opcional)</label>
        <input 
            type="text" 
            placeholder="Link de recorrido" 
            name="direccion[link360]" 
            id="link360"
            value="<?php echo s($direccion->link360); ?>"
        >
        <?php echo isset($erroresDireccion["link360"]) ? "<p>".$erroresDireccion["link360"]."</p>" : "" ?>
    </div>

    <div>
        <label for="CP">Código Postal</label>
        <input 
            type="number" 
            placeholder="Ej: 56432" 
            name="direccion[CP]" 
            id="CP"
            value="<?php echo s($direccion->CP); ?>"
        >
        <?php echo isset($erroresDireccion["CP"]) ? "<p>".$erroresDireccion["CP"]."</p>" : "" ?>
    </div>

    <div>
        <label for="mt2">Metros Cuadrados</label>
        <input 
            type="number" 
            placeholder="Ej: 80.30" 
            min="0" 
            name="propiedad[mt2]" 
            id="mt2" 
            step=".01"
            value="<?php echo s($propiedad->mt2); ?>"
        >
        <?php echo isset($erroresPropiedad["mt2"]) ? "<p>".$erroresPropiedad["mt2"]."</p>" : "" ?>
    </div>
    <div>
        <label for="mt2Construccion">Metros Cuadrados Construidos</label>
        <input 
            type="number" 
            placeholder="Ej: 69.40" 
            min="0" 
            name="propiedad[mt2Construccion]" 
            id="mt2Construccion" 
            step=".01"
            value="<?php echo s($propiedad->mt2Construccion); ?>"
        >
        <?php echo isset($erroresPropiedad["mt2Construccion"]) ? "<p>".$erroresPropiedad["mt2Construccion"]."</p>" : "" ?>
    </div>
</fieldset>

<!--PARTE DONDE SE DESCRIBE LA PROPIEDAD-->
<fieldset id="fieldSetDescripcionPropiedad" class="dosColumnas">
    <legend>
        Descripción de la propiedad
    </legend>
    <div>
        <label for="numPisos">Pisos</label>
        <input 
            type="number" 
            placeholder="Ej: 3" 
            min="0" 
            name="propiedad[numPisos]" 
            id="numPisos"
            value="<?php echo s($propiedad->numPisos); ?>"
        >
        <?php echo isset($erroresPropiedad["numPisos"]) ? "<p>".$erroresPropiedad["numPisos"]."</p>" : "" ?>
    </div>

    <div>
        <label for="año">Año de construcción</label>
        <input 
            type="number" 
            placeholder="Ej: 2020" 
            min="0" 
            name="propiedad[año]" 
            id="año"
            value="<?php echo s($propiedad->año); ?>"
        >
        <?php echo isset($erroresPropiedad["año"]) ? "<p>".$erroresPropiedad["año"]."</p>" : "" ?>
    </div>

    <div>
        <label for="habitaciones">Habitaciones</label>
        <input 
            type="number" 
            placeholder="Ej: 4" 
            min="0" 
            name="propiedad[habitaciones]" 
            id="habitaciones"
            value="<?php echo s($propiedad->habitaciones); ?>"
        >
        <?php echo isset($erroresPropiedad["habitaciones"]) ? "<p>".$erroresPropiedad["habitaciones"]."</p>" : "" ?>
    </div>

    <div>
        <label for="baños">Baños</label>
        <input 
            type="number" 
            placeholder="Ej: 3" 
            min="0" 
            name="propiedad[baños]" 
            id="baños"
            value="<?php echo s($propiedad->baños); ?>"
        >
        <?php echo isset($erroresPropiedad["baños"]) ? "<p>".$erroresPropiedad["baños"]."</p>" : "" ?>
    </div>

    <div>
        <label for="servicioH">Habitaciones de servicio (opcional)</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[servicioH]" 
            id="servicioH"
            value="<?php echo s($propiedad->servicioH); ?>"
        >
        <?php echo isset($erroresPropiedad["servicioH"]) ? "<p>".$erroresPropiedad["servicioH"]."</p>" : "" ?>
    </div>

    <div>
        <label for="servicioP">Patio de servicio (opcional)</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[servicioP]" 
            id="servicioP"
            value="<?php echo s($propiedad->servicioP); ?>"
            >
        <?php echo isset($erroresPropiedad["servicioP"]) ? "<p>".$erroresPropiedad["servicioP"]."</p>" : "" ?>
    </div>

    <div>
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


    <div>
        <label for="numEstacionamientos">Número de cajones</label>
        <input 
            type="number" 
            placeholder="Ej: 2" 
            min="0" 
            name="propiedad[numEstacionamientos]" 
            id="numEstacionamientos"
            value="<?php echo s($propiedad->numEstacionamientos); ?>"
        >
        <?php echo isset($erroresPropiedad["numEstacionamientos"]) ? "<p>".$erroresPropiedad["numEstacionamientos"]."</p>" : "" ?>
    </div>

    <div>
        <label for="numIdEstacionamiento">Número de estacionamiento (opcional)</label>
        <input 
            type="number" 
            placeholder="Ej: 280" 
            min="0" 
            name="propiedad[numIdEstacionamiento]" 
            id="numIdEstacionamiento"
            value="<?php echo s($propiedad->numIdEstacionamiento); ?>"
        >
        <?php echo isset($erroresPropiedad["numIdEstacionamiento"]) ? "<p>".$erroresPropiedad["numIdEstacionamiento"]."</p>" : "" ?>
    </div>

    
</fieldset>

<!--PRECIO DE LA PROPIEDAD-->
<fieldset id="fieldSetPrecio">
    <legend>Precio</legend>
    <div>
        <label for="precio">Cantidad</label>
        <input 
            type="number" 
            placeholder="Ej: 1800000" 
            min="10000" 
            name="propiedad[precio]" 
            id="precio"
            value="<?php echo s($propiedad->precio); ?>"
        >
        <?php echo isset($erroresPropiedad["precio"]) ? "<p>".$erroresPropiedad["precio"]."</p>" : "" ?>
    </div>
    <div>
        <label for="mantenimiento">Precio de mantenimiento</label>
        <input 
            type="number" 
            placeholder="Ej: 5000" 
            min="0" 
            name="propiedad[mantenimiento]" 
            id="mantenimiento"
            value="<?php echo s($propiedad->mantenimiento); ?>"
        >
        <?php echo isset($erroresPropiedad["mantenimiento"]) ? "<p>".$erroresPropiedad["mantenimiento"]."</p>" : "" ?>
    </div>
</fieldset>

<!--INFORMACION ADICIONAL EN CASO DE QUE SEA DEPARTAMENTO-->
<fieldset id="fieldSetDepartamento" class="dosColumnas">
    <legend>Departamento</legend>

    <div>
        <label for="piso">Número de piso</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[piso]" 
            id="piso"
            value="<?php echo s($propiedad->piso); ?>"
        >
        <?php echo isset($erroresPropiedad["piso"]) ? "<p>".$erroresPropiedad["piso"]."</p>" : "" ?>
    </div>

    <div>
        <label for="numElevadores">Elevadores</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[numElevadores]" 
            id="numElevadores"
            value="<?php echo s($propiedad->numElevadores); ?>"
        >
        <?php echo isset($erroresPropiedad["numElevadores"]) ? "<p>".$erroresPropiedad["numElevadores"]."</p>" : "" ?>
    </div>
</fieldset>

<fieldset id="fieldSetComision" class="comision">
    <legend>Comisión de venta</legend>
    <div>
        <label for="comision">Porcentaje de comisión (1 a 50)</label>
        <input 
            type="number" 
            placeholder="ejem: 30" 
            id="comision" 
            min="1" 
            name="propiedad[comision]"
            max="50"
            value="<?php echo s($propiedad->comision); ?>"
        >
        <?php echo isset($erroresPropiedad["comision"]) ? "<p>".$erroresPropiedad["comision"]."</p>" : "" ?>
    </div>
</fieldset>

<!--PARTE DONDE SE AGREGAN LOS MUEBLES Y AMENIDADES QUE TIENE LA PROPIEDAD-->
<fieldset id="fieldSetMueblesAmenidades">
    <legend>Muebles y amenidades</legend>
    <div>
        <div class="opciones"><!--Div para tener las opciones de los muebles-->
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
                    <?php echo $muebles->camas=="camas" ? 'checked' : ''; ?>
                    <?php echo stristr($propiedad->muebles,"camas") ? 'checked' : '' ; ?>
                    >
                <label>Camas</label>
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
        
        <div class="opciones"><!--Div para tener las opciones de las amenidades-->
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[roffGarden]" 
                    value="roff garden"
                    <?php echo stristr($propiedad->amenidades,"roff garden") ? 'checked' : '' ; ?>
                    >
                <label>Roff Garden</label>
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
                    name="amenidades[cancha]" 
                    value="cancha"
                    <?php echo $amenidades->cancha=="cancha" ? 'checked' : ''; ?>
                    <?php echo stristr($propiedad->amenidades,"cancha") ? 'checked' : '' ; ?>
                    >
                <label>Cancha</label>
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

<!--PARTE DONDE SE AGREGAN LAS OPCIONES DE VENTA Y EL PAPEL DE LA PROPIEDAD-->
<fieldset id="fieldSetEscritura">
    <legend>Escritura y opciones de venta</legend>
    <div>
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
    
    
    <div class="opciones">
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
        <?php echo isset($erroresMetodosVenta["metodosVenta"]) ? "<p>".$erroresMetodosVenta["metodosVenta"]."</p>" : "" ?>
    </div>
    <p style="color:black">(puede marcar más de una opción)</p>
</fieldset>

<fieldset id="fieldSetPredio">
    <legend>Número de predio</legend>
    <div>
        <label for="numPredio">Número de predio</label>
        <input 
            type="text" 
            placeholder="ejem: 03840546028-8" 
            id="numPredio" 
            min="1" 
            name="propiedad[numPredio]"
            value="<?php echo s($propiedad->numPredio); ?>"
        >
        <?php echo isset($erroresPropiedad["numPredio"]) ? "<p>".$erroresPropiedad["numPredio"]."</p>" : "" ?>
    </div>
</fieldset>
