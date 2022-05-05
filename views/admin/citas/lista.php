<main>
    <h2>Citas agendadas</h2>

    <!--FILTRO-->
    <form action="/admin/agenda" method="post" class="filtro">
        <input 
            class="input-buscador" 
            type="text" 
            name="filtro[estado]" 
            placeholder="Estado"
            value="<?php echo array_key_exists('estado',$filtro) ? $filtro['estado'] : ""; ?>" 
            >
        <input 
            class="input-buscador" 
            type="text" 
            name="filtro[calle]" 
            placeholder="Calle"
            value="<?php echo array_key_exists('calle',$filtro) ? (s($filtro['calle'])) : ""; ?>" 
            >
        <input 
            class="input-buscador" 
            type="text" 
            name="filtro[colonia]" 
            placeholder="Colonia"
            value="<?php echo array_key_exists('colonia',$filtro) ? (s($filtro['colonia'])) : ""; ?>" 
            >
        <input 
            class="input-buscador" 
            type="text" 
            name="filtro[municipioDelegacion]" 
            placeholder="municipio/Delegación"
            value="<?php echo array_key_exists('municipioDelegacion',$filtro) ? (s($filtro['municipioDelegacion'])) : ""; ?>" 
            >

            <select name="filtro[orden]" id="orden">
            <option
                <?php echo array_key_exists('orden',$filtro) ? ($filtro['orden'] === "1" ? "selected" : "" ) : "" ;?> 
                value="1"
            >
            Más antigüa
            </option>
            <option
                <?php echo array_key_exists('orden',$filtro) ? ($filtro['orden'] === "2" ? "selected" : "" ) : ""; ?> 
                value="2"
            >
            Más reciente
            </option>
        </select>
        
        <input type="submit" value="Buscar">
    </form>

    <div class="tabla contenedor table-responsive">
        <table>
            <tr>
                <th>Registro</th>
                <th>Inmueble de interés</th>
                <th>Visitante</th>
                <th>Teléfono del visitante</th>
                <th>Responsable del recorrido</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <?php foreach($citas as $cita): ?>
            <?php foreach($propiedades as $propiedad): ?>
            <?php foreach($direcciones as $direccion): ?>
            <?php foreach($trabajadores as $trabajador): ?>
            <?php if($cita->idPropiedad === $propiedad->id && $propiedad->id === $direccion->id): ?>
            <?php if($cita->idEncargado === $trabajador->id): ?>
                
                <tr>
                    <td><?php echo $cita->id; ?></td>
                    <td class="enlace-tabla">
                        <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
                            <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?>
                        </a>
                    </td>
                    <td><?php echo $cita->nombres." ".$cita->apellidos; ?></td>
                    <td><?php echo $cita->telefono; ?></td>
                    <td>
                        <div>
                            <?php if($trabajador->nivel == 1): ?>
                                <img src="/build/img/Iconos/admin.svg" alt="admin">
                                <?php endif; ?>
                            <?php if($trabajador->nivel == 2): ?>
                                <img src="/build/img/Iconos/agente.svg" alt="agente">
                                <?php endif; ?>
                                <?php if($trabajador->nivel == 3): ?>
                                    <img src="/build/img/Iconos/vendedor.svg" alt="vendedor">
                                    <?php endif; ?>    
                                    <?php echo $trabajador->nombre." ".$trabajador->apellido; ?>
                                </div> 
                    </td>
                    <td>
                        <?php
                            $date = date_create($cita->fecha);
                            echo date_format($date,"d/m/Y") ;
                            ?>
                    </td>
                    <td><?php echo $cita->hora; ?></td>
                </tr>

            <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </table> 
    </div>
</main>