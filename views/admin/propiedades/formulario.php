
<!--PARTE DONDE SE ESCOGE EL TIPO DE PROPIEDAD-->
<fieldset id="fieldSetTipoPropiedad">
    <legend>Tipo de propiedad</legend>
    <div>
    <select id="tipoPropiedad" name="propiedad[tipoPropiedad]">
        <option value="" disabled selected>--Selecciona una opción--</option>
        <?php foreach ($tipoPropiedad as $row) :?>
            <option 
            <?php echo ($propiedad->tipoPropiedad === $row->id) ? 'selected' : ''; ?>
            value="<?php echo s($row->id); ?>"><?php echo s($row->tipo); ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo "<p>".$erroresPropiedad["tipoPropiedad"]."</p>"; ?>
    </div>
</fieldset>

<fieldset id="fieldSetStatus">
    <legend>Disponible para: </legend>
    <div>
    <select id="status" name="propiedad[status]">
        <option value="" disabled selected>--Selecciona una opción--</option>
        <?php foreach ($status as $row) :?>
            <?php if($row->id !=2): ?>
                <option 
                <?php echo ($propiedad->status === $row->id) ? 'selected' : ''; ?>
                value="<?php echo s($row->id); ?>"><?php echo s($row->estado); ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <?php echo "<p>".$erroresPropiedad["status"]."</p>"; ?>
    </div>
</fieldset>

<fieldset id="fieldSetRemodelacion">
    <legend>¿Se encuentra en remodelación?</legend>
    <div>
    <select name="propiedad[categoria]">
        <option value="" disabled selected>--Selecciona una opción--</option>
        <?php foreach ($categorias as $row) :?>
            <option 
            <?php echo ($propiedad->categoria === $row->id) ? 'selected' : ''; ?>
            value="<?php echo s($row->id); ?>"><?php echo s($row->tipo); ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo "<p>".$erroresPropiedad["categoria"]."</p>"; ?>
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
        <?php echo "<p>".$erroresDireccion["numInterior"]."</p>"; ?>
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
        <?php echo "<p>".$erroresDireccion["numExterior"]."</p>"; ?>
    </div>

    <div>
        <label for="linkGoogle">Enlace de Google Maps</label>
        <input 
            type="text" 
            placeholder="Link de Google Maps" 
            name="direccion[linkGoogle]" 
            id="linkGoogle"
            value="<?php echo s($direccion->linkGoogle); ?>"
            >
        <?php echo "<p>".$erroresDireccion["linkGoogle"]."</p>"; ?>
    </div>

    <div>
        <label for="link360">Enlace de recorrido 360°</label>
        <input 
            type="text" 
            placeholder="Link de recorrido" 
            name="direccion[link360]" 
            id="link360"
            value="<?php echo s($direccion->link360); ?>"
            >
        <?php echo "<p>".$erroresDireccion["link360"]."</p>"; ?>
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
        <?php echo "<p>".$erroresDireccion["CP"]."</p>"; ?>
    </div>

    <div>
        <label for="mt2">Metros Cuadrados</label>
        <input 
            type="number" 
            placeholder="Ej: 58.30" 
            min="0" 
            name="propiedad[mt2]" 
            id="mt2" 
            step=".01"
            value="<?php echo s($propiedad->mt2); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["mt2"]."</p>"; ?>
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
        <?php echo "<p>".$erroresPropiedad["numPisos"]."</p>"; ?>
    </div>

    <div>
        <label for="año">Año de construcción</label>
        <input 
            type="number" 
            placeholder="Ej: 2020" 
            min="1500" 
            name="propiedad[año]" 
            id="año"
            value="<?php echo s($propiedad->año); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["año"]."</p>"; ?>
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
        <?php echo "<p>".$erroresPropiedad["habitaciones"]."</p>"; ?>
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
        <?php echo "<p>".$erroresPropiedad["baños"]."</p>"; ?>
    </div>

    <div>
        <label for="servicioH">Habitaciones de servicio</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[servicioH]" 
            id="servicioH"
            value="<?php echo s($propiedad->servicioH); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["servicioH"]; ?>
    </div>

    <div>
        <label for="servicioP">Patio de servicio</label>
        <input 
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[servicioP]" 
            id="servicioP"
            value="<?php echo s($propiedad->servicioP); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["servicioP"]."</p>"; ?>
    </div>

    <div>
        <label for="idEstacionamiento">Tipo de estacionamiento</label>
        <select name="propiedad[idEstacionamiento]" id="idEstacionamiento">
            <option value="" disabled selected>--Seleccione un tipo de estacionamiento--</option>
            <?php
                foreach ($estacionamientos as $estacionamiento):?>  
                    <option
                        <?php echo $propiedad->idEstacionamiento === $estacionamiento->id ? 'selected' : ''; ?>
                        value="<?php echo s($estacionamiento->id); ?>"
                    >
                    <?php echo s($estacionamiento->tipo); ?>
                    </option>
            <?php endforeach; ?>
        </select>
        <?php echo "<p>".$erroresPropiedad["idEstacionamiento"]."</p>"; ?>
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
        <?php echo "<p>".$erroresPropiedad["numEstacionamientos"]."</p>"; ?>
    </div>

    <div>
        <label for="numIdEstacionamiento">Número de estacionamiento</label>
        <input 
            type="number" 
            placeholder="Ej: 280" 
            min="0" 
            name="propiedad[numIdEstacionamiento]" 
            id="numIdEstacionamiento"
            value="<?php echo s($propiedad->numIdEstacionamiento); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["numIdEstacionamiento"]."</p>"; ?>
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
            min="100000" 
            name="propiedad[precio]" 
            id="precio"
            value="<?php echo s($propiedad->precio); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["precio"]."</p>"; ?>
    </div>
    <div>
        <label for="mantenimiento">Precio de mantenimiento</label>
        <input 
            type="number" 
            placeholder="Ej: 5000" 
            min="1000" 
            name="propiedad[mantenimiento]" 
            id="mantenimiento"
            value="<?php echo s($propiedad->mantenimiento); ?>"
            >
        <?php echo "<p>".$erroresPropiedad["mantenimiento"]."</p>"; ?>
    </div>
</fieldset>

<!--INFORMACION ADICIONAL EN CASO DE QUE SEA DEPARTAMENTO-->
<fieldset id="fieldSetDepartamento" class="dosColumnas">
    <legend>Departamento</legend>
    <div>
        <label for="numDepartamento">Número de departamento</label>
        <input
            type="number" 
            placeholder="Ej: 1" 
            min="0" 
            name="propiedad[numDepartamento]" 
            id="numDepartamento"
            value="<?php echo s($propiedad->numDepartamento); ?>"
            >
        <!-- <?php echo "<p>".$erroresPropiedad["numDepartamento"]."</p>"; ?> -->
    </div>

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
        <!-- <?php echo "<p>".$erroresPropiedad["piso"]."</p>"; ?> -->
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
        <!-- <?php echo "<p>".$erroresPropiedad["numElevadores"]."</p>"; ?> -->
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
        <?php echo "<p>".$erroresPropiedad["comision"]."</p>"; ?>
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
                    value="1"
                    <?php echo $muebles->sala==1 ? 'checked' : ''; ?>
                    >
                <label>Sala</label>
            </div>

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[lavadora]" 
                    value="1"
                    <?php echo $muebles->lavadora==1 ? 'checked' : ''; ?>
                    >
                <label>Lavadora</label>
            </div>    

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[cocina]" 
                    value="1"
                    <?php echo $muebles->cocina==1 ? 'checked' : ''; ?>
                    >
                <label>Cocina</label>
            </div>  

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[boiler]" 
                    value="1"
                    <?php echo $muebles->boiler==1 ? 'checked' : ''; ?>
                    >
                <label>Boiler</label>
            </div>  

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[camas]" 
                    value="1"
                    <?php echo $muebles->camas==1 ? 'checked' : ''; ?>
                    >
                <label>Camas</label>
            </div>  

            <div>
                <input 
                    type="checkbox" 
                    name="muebles[roperos]" 
                    value="1"
                    <?php echo $muebles->roperos==1 ? 'checked' : ''; ?>
                    >
                <label>Roperos</label>
            </div>  
        </div>
        
        <div class="opciones"><!--Div para tener las opciones de las amenidades-->
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[roffGarden]" 
                    value="1"
                    <?php echo $amenidades->roffGarden==1 ? 'checked' : ''; ?>
                    >
                <label>Roff Garden</label>
            </div>     
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[salaDeUsosMultiples]" 
                    value="1"
                    <?php echo $amenidades->salaDeUsosMultiples==1 ? 'checked' : ''; ?>
                    >
                <label>Sala de usos multiples</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[gimnasio]" 
                    value="1"
                    <?php echo $amenidades->gimnasio==1 ? 'checked' : ''; ?>
                    >
                <label>Gimnasio</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[cancha]" 
                    value="1"
                    <?php echo $amenidades->cancha==1 ? 'checked' : ''; ?>
                    >
                <label>Cancha</label>
            </div>   
            <div>
                <input 
                    type="checkbox" 
                    name="amenidades[calentadorSolar]" 
                    value="1"
                    <?php echo $amenidades->calentadorSolar==1 ? 'checked' : ''; ?>
                    >
                <label>Calentador Solar</label>
            </div>   
        </div>
    </div>
</fieldset>

<!--PARTE DONDE SE AGREGAN LAS OPCIONES DE VENTA Y EL PAPEL DE LA PROPIEDAD-->
<fieldset id="fieldSetEscritura">
    <legend>Escritura y opciones de venta</legend>
    <div>
        <select name="propiedad[idEscritura]">
            <option value="" disabled selected>--Selecciona un opción--</option>
            <?php foreach ($escrituras as $escritura) :?>
                <option 
                <?php echo ($propiedad->idEscritura === $escritura->id) ? 'selected' : ''; ?>
                value="<?php echo s($escritura->id); ?>"><?php echo s($escritura->tipo); ?></option>
            <?php endforeach; ?>
        </select>
        <?php echo "<p>".$erroresPropiedad["idEscritura"]."</p>"; ?>
    </div>
    
    
    <div class="opciones">
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[fovissste]" 
                value="1"
                <?php echo $metodosVenta->fovissste==1 ? 'checked' : '' ; ?>
                >
            <label>FOVISSSTE</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[cofinavit]" 
                value="1"
                <?php echo $metodosVenta->cofinavit==1 ? 'checked' : '' ; ?>
                >
            <label>COFINAVIT</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[credito]" 
                value="1"
                <?php echo $metodosVenta->credito==1 ? 'checked' : '' ; ?>
                >
            <label>Credito bancario</label>
        </div> 
        <div>
            <input 
                type="checkbox" 
                name="metodosventa[efectivo]" 
                value="1"
                <?php echo $metodosVenta->efectivo==1 ? 'checked' : '' ; ?>
                >
            <label>Efectivo</label>
        </div> 
        <?php echo "<p>".$erroresMetodosVenta["metodosVenta"]."</p>"; ?>
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
        <?php echo "<p>".$erroresPropiedad["numPredio"]."</p>"; ?>
    </div>
</fieldset>
