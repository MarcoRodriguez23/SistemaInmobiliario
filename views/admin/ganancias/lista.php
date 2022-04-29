<?php
    // debuguear($ventas);
?>
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
                <th>Contrato</th>
            </tr>
            <?php foreach($ventas as $venta): ?>
            <?php foreach($propiedades as $propiedad): ?>
            <?php foreach($direcciones as $direccion): ?>
            <?php foreach($trabajadores as $trabajador): ?>
                <?php if($venta->idPropiedad === $propiedad->id && $propiedad->id === $direccion->id): ?>
                <?php if($venta->idEncargado === $trabajador->id): ?>
                <tr>
                    <td><?php echo $venta->id; ?></td>
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
                    <td class="enlace-tabla">
                        <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
                        <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?>
                        </a>
                    </td>
                    <td class="precio"><?php echo $propiedad->precio; ?></td>
                    <td><?php echo $propiedad->comision; ?>%</td>
                    <td>
                        <?php
                            $date = date_create($venta->fecha);
                            echo date_format($date,"d/m/Y") ;
                        ?>
                    </td>
                    <td class="enlace-tabla">
                        <a  href="/contratos/<?php echo $venta->contrato; ?>" target="_blank">Contrato</a>
                    </td>
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