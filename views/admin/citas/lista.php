<main>
    <h2>Citas agendadas</h2>
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
                                <img src="/build/img/Iconos/cajon.svg" alt="admin">
                            <?php endif; ?>
                            <?php if($trabajador->nivel == 2): ?>
                                <img src="/build/img/Iconos/cajon.svg" alt="agente">
                            <?php endif; ?>
                            <?php if($trabajador->nivel == 3): ?>
                                <img src="/build/img/Iconos/cajon.svg" alt="vendedor">
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