<!-- <fieldset id="paso-1" class="seccion mostrar-seccion">
    <legend>Dirección</legend>

    <label for="est">Estado</label>
    <input type="text" placeholder="Estado" id="est">

    <label for="municipio-delegacion">Municipio o delegación</label>
    <input type="text" placeholder="municipio-delegacion" id="municipio-delegacion">

    <label for="calle">Calle</label>
    <input type="text" placeholder="Calle" id="calle">

    <label for="colonia">Colonia</label>
    <input type="text" placeholder="colonia" id="colonia">


    <label for="num-ext">Numero exterior</label>
    <input type="number" placeholder="ejem: 420" id="num-ext" min="1">

    <label for="ubicacion">Link de ubicación</label>
    <input type="text" placeholder="Enlace de google maps" id="ubicacion">
    
</fieldset>

<fieldset id="paso-2" class="seccion">
    <legend>Valor de la propiedad</legend>

    <label for="precio">Precio</label>
    <input type="number" placeholder="ejem: 1000000" id="precio" min="1" name="precio">

    <div class="contenedor">
        <label for="aumento-disminucion">Agregar</label>
        <div class="opciones">
            <input name="aumento-disminucion" type="radio" value="Descuento">
            <label for="descuento">Descuento</label>
            <input name="aumento-disminucion" type="radio" value="Aumento"> 
            <label for="aumento">Aumento</label>
        </div>
    </div>
    
    <div id="tipo-a-agregar" class="contenedor">

    </div>
    
    <div id="denominacion" class="contenedor">

    </div>

    <label for="valor-final">Valor final:</label>
    <input type="number" name="valor-final" disabled placeholder="$$$$">

</fieldset>

<fieldset id="paso-3" class="seccion">
    <legend>Fotografías</legend>

    <label for="foto">Subir Archivo</label>
    <input type="file" id="foto" accept="image/jpeg, image/png" multiple name="imagenes[]">

</fieldset>

<fieldset id="paso-4" class="seccion">
    <legend>Descripción de la propiedad</legend>

    <label for="edad">Edad de la propiedad</label>
    <input type="number" placeholder="ejem: 10" id="edad" min="1">

    <label for="pisos">Pisos</label>
    <input type="number" placeholder="ejem: 3" id="pisos" min="1">

    <label for="habitaciones">Habitaciones:</label>
    <input type="number" 
    id="habitaciones" 
    name="propiedad[habitaciones]" 
    placeholder="ejem: 3" 
    min="1" max="10" 
    value="<?php echo $propiedad->habitaciones; ?>">
    
    <label for="wc">wc:</label>
    <input type="number" 
    id="wc" 
    name="propiedad[wc]" 
    placeholder="ejem: 3" 
    min="1" max="10" 
    value="<?php echo $propiedad->wc; ?>">

    <label for="mt2">Metros cuadrados:</label>
    <input type="number" 
    id="mt2" 
    name="propiedad[mt2]" 
    placeholder="ejem: 50" 
    min="5" 
    value="<?php echo $propiedad->mt2; ?>">

    <label for="cuartosServicio">Cuartos de servicio:</label>
    <input type="number" 
    id="cuartosServicio" 
    name="propiedad[cuartosServicio]" 
    placeholder="ejem: 2" 
    min="0" 
    value="<?php echo $propiedad->cuartosServicio; ?>">

    <label for="patiosServicio">Patios de servicio: </label>
    <input type="number" 
    id="patiosServicio" 
    name="propiedad[patiosServicio]" 
    placeholder="ejem: 2" 
    min="0" 
    value="<?php echo $propiedad->patiosServicio; ?>">
  
</fieldset> -->

<!-- <fieldset id="paso-5" class="seccion">
    <legend>Departamento</legend>

    <label for="piso">Piso</label>
    <input type="text" placeholder="piso" id="piso">

    <label for="numDep">Num. de departamento</label>
    <input type="number" placeholder="ejem: 123" id="numDep" min="1">

    <label for="elevador">Elevador</label>
    <input type="number" placeholder="ejem: 2" id="elevador" min="0">
</fieldset> -->
<!-- 
<fieldset class="seccion" id="paso-5">
    <legend>Estacionamiento</legend>

    <label for="tipo-estacionamiento">Tipo</label>
    <div class="opciones"> 
        <input name="estacionamiento" type="radio" value="1">
        <label for="est-techado">Techado</label>

        <input name="estacionamiento" type="radio" value="2">
        <label for="est-sin-techar">Sin techar</label>

        <input name="estacionamiento" type="radio" value="3">
        <label for="est-calle">Calle</label>  

        <input name="estacionamiento" type="radio" value="4">
        <label for="est-mecanico">Mecánico</label>  

        <input name="estacionamiento" type="radio" value="5">
        <label for="sin-est">No tiene</label>  
    </div>

    <label for="estacionamiento">Cantidad</label>
    <input type="number" 
    id="estacionamiento" 
    name="propiedad[estacionamiento]" 
    placeholder="ejem: 2" 
    min="5" 
    value="<?php echo $propiedad->estacionamiento; ?>">

</fieldset>

<fieldset class="seccion" id="paso-6">
    <legend>Muebles</legend>
    <div class="opciones">
        <input type="checkbox" id="sala">
        <label for="sala">Sala</label>

        <input type="checkbox" id="lavadora">
        <label for="lavadora">Lavadora</label>

        <input type="checkbox" id="cocina">
        <label for="cocina">Cocina</label>

        <input type="checkbox" id="boiler">
        <label for="boiler">Boiler</label>

        <input type="checkbox" id="camas">
        <label for="camas">Camas</label>

        <input type="checkbox" id="roperos">
        <label for="roperos">Roperos</label>
    </div>

</fieldset>

<fieldset class="seccion" id="paso-7">
    <legend>Amenidades</legend>
    <div class="opciones">
        <input type="checkbox" id="garden">
        <label for="garden">Roof garden</label>

        <input type="checkbox" id="uso-multiple">
        <label for="uso-multiple">Sala de usos multiples</label>

        <input type="checkbox" id="gimnasio">
        <label for="gimnasio">Gimnasio</label>

        <input type="checkbox" id="cancha">
        <label for="cancha">Canchas</label>
    </div>

</fieldset>



<fieldset class="seccion" id="paso-8">
    <legend>Opciones de venta</legend>

    <div class="opciones">
        <input type="checkbox" id="fovissste">
        <label for="">FOVISSSTE</label>
        
        <input type="checkbox" id="cofinavit">
        <label for="">COFINAVIT</label>
        
        <input type="checkbox" id="credito">
        <label for="">Credito bancario</label>
        
        <input type="checkbox" id="efectivo">
        <label for="">Efectivo</label>
        
        <input type="checkbox" id="opcionesDeVenta">
        <label for="">Todas las opciones</label>
    </div>

</fieldset>

<fieldset class="seccion" id="paso-9">
    <legend>Papeles</legend>

    <div class="opciones">
        <input type="checkbox" id="">
        <label for="">Escritura pública</label>

        <input type="checkbox" id="">
        <label for="">Escritura privada</label>

        <input type="checkbox" id="">
        <label for="">Cesión de derechos</label>
    </div>
    
</fieldset> -->

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
        <input type="number" placeholder="Ej: 325" min="0" name="propiedad[numInterior]" id="numInterior">
    </div>

    <div>
        <label for="numExterior">Número exterior</label>
        <input type="number" placeholder="Ej: 230" min="0" name="propiedad[numExterior]" id="numExterior">
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
            <option value="1">Sin techar</option>
            <option value="2">Techado</option>
            <option value="3">Mecánico</option>
            <option value="4">Calle</option>
            <option value="5">Sin Estacionamiento</option>
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