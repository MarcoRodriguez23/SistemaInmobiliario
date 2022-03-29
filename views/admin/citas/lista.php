<main>
    <h2>Citas agendadas</h2>
    <div class="tabla contenedor table-responsive">
        <table>
            <tr>
                <th>Registro</th>
                <th>Inmueble de interés</th>
                <th>Nombre del visitante</th>
                <th>Apellido del visitante</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <?php foreach($citas as $cita): ?>
            <?php foreach($direcciones as $direccion): ?>
            <?php if($cita->idPropiedad === $direccion->id): ?>
                <tr>
                    <td><?php echo $cita->id; ?></td>
                    <td>
                        <a href="/admin/propiedades/info?id=<?php echo $cita->idPropiedad; ?>">
                        <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?>
                        </a>
                    </td>
                    <td><?php echo $cita->nombres; ?></td>
                    <td><?php echo $cita->apellidos; ?></td>
                    <td><?php echo $cita->telefono; ?></td>
                    <td><?php echo $cita->fecha; ?></td>
                    <td><?php echo $cita->hora; ?></td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </table> 
    </div>
</main>