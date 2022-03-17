<?php
    foreach ($erroresPropiedad as $errorPropiedad) {
        echo $erroresPropiedad;
    }
?>
<?php
    foreach ($erroresDireccion as $errorDireccion) {
        echo $erroresDireccion;
    }
?>
<fieldset>
    <legend>Ubicación</legend>
    <div>
        <label for="estado">Estado</label>
        <input type="text" placeholder="Ej: CDMX" name="direccion[estado]" id="estado">
    </div>

    <div>
        <label for="municipioDelegacion">Municipio / Alcaldía</label>
        <input type="text" placeholder="Ej: Iztacalco" name="direccion[municipioDelegacion]" id="municipioDelegacion">
    </div>

    <div>
        <label for="calle">Calle</label>
        <input type="text" placeholder="Ej: Avenida Patria" name="direccion[calle]" id="calle">
    </div>

    <div>
        <label for="colonia">Colonia</label>
        <input type="text" placeholder="Ej: Solidaridad" name="direccion[colonia]" id="colonia">
    </div>

    <div>
        <label for="numInterior">Número interior</label>
        <input type="number" placeholder="Ej: 325" min="0" name="direccion[numInterior]" id="numInterior">
    </div>

    <div>
        <label for="numExterior">Número exterior</label>
        <input type="number" placeholder="Ej: 230" min="0" name="direccion[numExterior]" id="numExterior">
    </div>

    <div>
        <label for="enlaceGoogle">Enlace de Google Maps</label>
        <input type="text" placeholder="Link de Google Maps" name="direccion[enlaceGoogle]" id="enlaceGoogle">
    </div>

    <div>
        <label for="mt2">Metros Caudrados</label>
        <input type="number" placeholder="Ej: 58.30" min="0" name="propiedad[mt2]" id="mt2" step=".10">
    </div>
</fieldset>

<fieldset>
    <legend>
        Descripción de la propiedad
    </legend>
    <div>
        <label for="numPisos">Pisos</label>
        <input type="number" placeholder="Ej: 3" min="0" name="propiedad[numPisos]" id="numPisos">
    </div>

    <div>
        <label for="año">Año de construcción</label>
        <input type="number" placeholder="Ej: 2020" min="1800" name="propiedad[año]" id="año">
    </div>

    <div>
        <label for="habitaciones">Habitaciones</label>
        <input type="number" placeholder="Ej: 4" min="1" name="propiedad[habitaciones]" id="habitaciones">
    </div>

    <div>
        <label for="baños">Baños</label>
        <input type="number" placeholder="Ej: 3" min="1" name="propiedad[baños]" id="baños">
    </div>

    <div>
        <label for="idEstacionamiento">Tipo de estacionamiento</label>
        <select name="propiedad[idEstacionamiento]" id="idEstacionamiento">
            <?php
                foreach ($estacionamientos as $estacionamiento):?>
                    <option value="<?php echo $estacionamiento->idEstacionamiento; ?>"><?php echo $estacionamiento->tipo; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label for="numEstacionamientos">Número de estacionamientos</label>
        <input type="number" placeholder="Ej: 2" min="0" name="propiedad[numEstacionamientos]" id="numEstacionamientos">
    </div>

    <div>
        <label for="servicioH">Habitaciones de servicio</label>
        <input type="number" placeholder="Ej: 1" min="0" name="propiedad[servicioH]" id="servicioH">
    </div>

    <div>
        <label for="servicioP">Patio de servicio</label>
        <input type="number" placeholder="Ej: 1" min="0" name="propiedad[servicioP]" id="servicioP">
    </div>
</fieldset>

<fieldset>
    <legend>Departamento</legend>
    <div>
        <label for="numDepartamento">Número de departamento</label>
        <input type="number" placeholder="Ej: 1" min="0" name="propiedad[numDepartamento]" id="numDepartamento">
    </div>

    <div>
        <label for="piso">Número de piso</label>
        <input type="number" placeholder="Ej: 1" min="0" name="propiedad[piso]" id="piso">
    </div>

    <div>
        <label for="numElevadores">Elevadores</label>
        <input type="number" placeholder="Ej: 1" min="0" name="propiedad[numElevadores]" id="numElevadores">
    </div>
</fieldset>

<fieldset>
    <legend>Muebles y amenidades</legend>
    <div>
        <div class="opciones"><!--Div para tener las opciones de los muebles-->
            <div>
                <input type="checkbox" name="mueble[sala]" value="1">
                <label>Sala</label>
            </div>

            <div>
                <input type="checkbox" name="mueble[lavadora]" value="1">
                <label>Lavadora</label>
            </div>    

            <div>
                <input type="checkbox" name="mueble[cocina]" value="1">
                <label>Cocina</label>
            </div>  

            <div>
                <input type="checkbox" name="mueble[boiler]" value="1">
                <label>Boiler</label>
            </div>  

            <div>
                <input type="checkbox" name="mueble[camas]" value="1">
                <label>Camas</label>
            </div>  

            <div>
                <input type="checkbox" name="mueble[roperos]" value="1">
                <label>Roperos</label>
            </div>  
        </div>
        
        <div class="opciones"><!--Div para tener las opciones de las amenidades-->
            <div>
                <input type="checkbox" name="amenidad[roffGarden]" value="1">
                <label>Roff Garden</label>
            </div>     
            <div>
                <input type="checkbox" name="amenidad[salaDeUsosMultiples]" value="1">
                <label>Sala de usos multiples</label>
            </div>   
            <div>
                <input type="checkbox" name="amenidad[gimnasio]" value="1">
                <label>Gimnasio</label>
            </div>   
            <div>
                <input type="checkbox" name="amenidad[cancha]" value="1">
                <label>Cancha</label>
            </div>   
            <div>
                <input type="checkbox" name="amenidad[calentadorSolar]" value="1">
                <label>Calentador Solar</label>
            </div>   
        </div>
    </div>
</fieldset>

<!-- REVISAR COMO INTEGRAR -->
<fieldset>
    <legend>Escritura y opciones de venta</legend>
    <select name="propiedad[idEscritura]">
        <option value="" disabled selected>--Selecciona un opción--</option>
        <?php foreach ($escrituras as $escritura) :?>
            <option 
            <?php echo $propiedad->idEscritura === $escritura->idEscritura ? '' : ''; ?>
            value="<?php echo s($escritura->idEscritura); ?>"><?php echo s($escritura->tipo); ?></option>
        <?php endforeach; ?>
    </select>
    
    <div class="opciones">
        <div>
            <input type="checkbox" name="metodosventa[fovissste]" value="1">
            <label>FOVISSSTE</label>
        </div> 
        <div>
            <input type="checkbox" name="metodosventa[cofinavit]" value="1">
            <label>COFINAVIT</label>
        </div> 
        <div>
            <input type="checkbox" name="metodosventa[credito]" value="1">
            <label>Credito bancario</label>
        </div> 
        <div>
            <input type="checkbox" name="metodosventa[efectivo]" value="1">
            <label>Efectivo</label>
        </div> 
    </div>
    <p>(puede marcar más de una opción)</p>
</fieldset>
