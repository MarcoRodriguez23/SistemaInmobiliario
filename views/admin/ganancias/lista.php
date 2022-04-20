<main>
    <h2>Ventas</h2>
    <div class=" tabla contenedor table-responsive">
        
        <table>
            <tr>
                <th>Registro</th>
                <th>Responsable de la venta</th>
                <th>Propiedad</th>
                <th>Precio</th>
                <th>Comisión</th>
                <th>Fecha</th>
            </tr>
            <?php foreach($ventas as $venta): ?>
            <?php foreach($propiedades as $propiedad): ?>
            <?php foreach($direcciones as $direccion): ?>
            <?php foreach($trabajadores as $trabajador): ?>
                <?php if($venta->idPropiedad === $propiedad->id && $propiedad->id === $direccion->id): ?>
                <?php if($venta->idEncargado === $trabajador->id): ?>
                <tr>
                    <td><?php echo $venta->id; ?></td>
                    <td><?php echo $trabajador->nombre." ".$trabajador->apellido; ?></td>
                    <td>
                        <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
                        <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?>
                        </a>
                    </td>
                    <td class="precio"><?php echo $propiedad->precio; ?></td>
                    <td><?php echo $propiedad->comision; ?>%</td>
                    <td><?php echo $venta->fecha; ?></td>
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