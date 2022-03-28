<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin" class="boton-volver">Volver</a>
    </div>
    <h1>Agendar cita</h1>
    <div class="contenedor contenido-centrado">

        <form action="" class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div>
                    <label>Propiedad</label>
                    <input type="hidden" name="cita[idPropiedad]" value="<?php echo $direccion->id; ?>">
                    <input disabled type="text" value="<?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?>">
                </div>

                <div>
                    <label for="nombre">Nombre(s)</label>
                    <input 
                        id="nombre" 
                        type="text" 
                        placeholder="Tu Nombre"
                        name="cita[nombres]"
                        value="<?php echo s($cita->nombres); ?>"
                    >
                    <?php echo "<p>".$erroresCita["nombres"]."</p>"; ?>
                </div>
                
                
                <div>
                    <label for="apellido">Apellidos</label>
                    <input 
                        id="apellido"
                        type="text"
                        placeholder="Tus apellidos"
                        name="cita[apellidos]"
                        value="<?php echo s($cita->apellidos) ; ?>"
                    >
                    <?php echo "<p>". $erroresCita["apellidos"]."</p>"; ?>
                </div>
                <div>
                    <label for="telefono">Teléfono</label>
                    <input 
                        type="number" 
                        placeholder="ejem: 5546782345" 
                        id="telefono"
                        name="cita[telefono]"
                        max="5599999999"
                        min="5500000000"
                        value="<?php echo s($cita->telefono); ?>"
                    >
                    <?php echo "<p>".$erroresCita["telefono"]."</p>"; ?>
                    <?php echo "<p>".$erroresCita["formatoTelefono"]."</p>"; ?>
                </div>
                <div class="campo">
                    <label for="fecha">Fecha</label>
                    <input 
                        id="fecha" 
                        type="date"
                        name="cita[fecha]"
                        value="<?php echo s($cita->fecha); ?>"     
                    >
                    <?php echo "<p>".$erroresCita["fecha"]."</p>"; ?>
                </div>
                
                <div class="campo">
                    <label for="hora">Hora</label>
                    <input 
                        id="hora" 
                        type="time"
                        name="cita[hora]"
                        value="<?php echo s($cita->hora); ?>"   
                    >
                    <?php echo "<p>".$erroresCita["hora"]."</p>"; ?>
                </div>

                <div>
                    <label for="">Vendedor</label>
                    <select name="cita[idVendedor]">
                        <option value="" disabled selected>--Selecciona un opción--</option>
                        <?php foreach ($vendedores as $vendedor) :?>
                            <option 
                            <?php echo ($cita->idVendedor === $vendedor->id) ? 'selected' : ''; ?>
                            value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombres)." ".s($vendedor->apellidos); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo "<p>".$erroresCita["idVendedor"]."</p>"; ?>
                </div>
            </fieldset>
        
            
        <input type="submit" value="Crear visita" class="boton-azul">  
    </form>
    </div>
</main>