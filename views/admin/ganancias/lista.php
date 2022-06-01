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
                <tr>
                    <td><?php echo $venta->id; ?></td>
                    <td>
                        <div>
                            <?php if($venta->nivel == 1): ?>
                                <img src="/build/img/Iconos/admin.svg" alt="admin">
                            <?php endif; ?>
                            <?php if($venta->nivel == 2): ?>
                                <img src="/build/img/Iconos/agente.svg" alt="agente">
                            <?php endif; ?>
                            <?php if($venta->nivel == 3): ?>
                                <img src="/build/img/Iconos/vendedor.svg" alt="vendedor">
                            <?php endif; ?>
                            <?php echo $venta->nombre." ".$venta->apellido; ?>
                        </div>
                        
                    </td>
                    <td class="enlace-tabla">
                        <a href="/admin/propiedades/info?id=<?php echo $propiedad->id; ?>">
                        <?php echo $venta->calle.", ".$venta->colonia.", ".$venta->municipioDelegacion.", ".$venta->estado; ?>
                        </a>
                    </td>
                    <td class="precio"><?php echo $venta->precio; ?></td>
                    <td><?php echo $venta->comision; ?>%</td>
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
            <?php endforeach; ?>
        </table> 
    </div>
</main>