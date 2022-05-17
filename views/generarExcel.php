<table>
    
<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=propiedades.xls");
?>
    <!-- <caption>Propiedades</caption> -->
    <tr>
        <th>Id</th>
        <th>Estado</th>
        <th>Municipio / Delegación</th>
        <th>Calle</th>
        <th>Colonia</th>
        <th>Núm. exterior</th>
        <th>Núm. interior</th>
        <th>Link de Google Maps</th>

        <th>Precio</th>
        <th>Año</th>
        <th>Metros cuadrados</th>
        <th>Número de pisos</th>
        <th>Piso</th>
        <th>Número de elevadores</th>
        <th>Habitaciones</th>
        <th>Baños</th>
        <th>Habitaciones de servicio</th>
        <th>Patios de servicio</th>

        <th>Tipo de propiedad</th>

        <th>Escritura</th>
        
        <th>FOVISSSTE</th>
        <th>INFONAVIT</th>
        <th>Crédito Bancario</th>
        <th>Efectivo</th>

        <th>Sala</th>
        <th>Lavadora</th>
        <th>Boiler</th>
        <th>Cocina</th>
        <th>Camas</th>
        <th>Roperos</th>

        <th>Roff Garden</th>
        <th>Sala de usos multiples</th>
        <th>Gimnasio</th>
        <th>Cancha</th>
        <th>Calentador Solar</th>
    </tr>
    <?php foreach ($propiedades as $propiedad): ?>
    <?php foreach ($direcciones as $direccion): ?>
    
        <?php if($propiedad->id == $direccion->id): ?>
        <tr>
            <td><?php echo $propiedad->id; ?></td>
            <td><?php echo $direccion->estado; ?></td>
            <td><?php echo $direccion->municipioDelegacion; ?></td>
            <td><?php echo $direccion->calle; ?></td>
            <td><?php echo $direccion->colonia; ?></td>
            <td><?php echo $direccion->numExterior; ?></td>
            <td><?php echo $direccion->numInterior; ?></td>
            <td><?php echo $direccion->linkGoogle; ?></td>

            <td><?php echo $propiedad->precio; ?></td>
            <td><?php echo $propiedad->año; ?></td>
            <td><?php echo $propiedad->mt2; ?></td>
            <td><?php echo $propiedad->numPisos; ?></td>
            <td><?php echo $propiedad->piso; ?></td>
            <td><?php echo $propiedad->numElevadores; ?></td>
            <td><?php echo $propiedad->habitaciones; ?></td>
            <td><?php echo $propiedad->baños; ?></td>
            <td><?php echo $propiedad->servicioH; ?></td>
            <td><?php echo $propiedad->servicioP; ?></td>
            
            <td><?php echo $propiedad->tipoPropiedad; ?></td>
            <td><?php echo $propiedad->escritura; ?></td>

            <td><?php echo stristr($propiedad->metodosVenta,"fovissste") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->metodosVenta,"infonavit") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->metodosVenta,"credito") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->metodosVenta,"efectivo") ? 'Si' : 'No' ; ?>

            <td><?php echo stristr($propiedad->muebles,"sala") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->muebles,"lavadora") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->muebles,"boiler") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->muebles,"cocina") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->muebles,"camas") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->muebles,"roperos") ? 'Si' : 'No' ; ?>

            <td><?php echo stristr($propiedad->amenidades,"roff garden") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->amenidades,"sala de usos multiples") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->amenidades,"gimnasio") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->amenidades,"cancha") ? 'Si' : 'No' ; ?>
            <td><?php echo stristr($propiedad->amenidades,"calentador solar") ? 'Si' : 'No' ; ?>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
</table>