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
        <th>COFINAVIT</th>
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
    <?php foreach ($muebles as $mueble): ?>
    <?php foreach ($metodosVenta as $metodo): ?>
    <?php foreach ($amenidades as $amenidad): ?>
    
        <?php if($propiedad->id == $direccion->id && $propiedad->id === $mueble->id && $propiedad->id === $metodo->id && $propiedad->id === $amenidad->id): ?>
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

            <td><?php echo $metodo->fovissste==1 ? "Aplica" : "No aplica"; ?></td>
            <td><?php echo $metodo->credito==1 ? "Aplica" : "No aplica"; ?></td>
            <td><?php echo $metodo->efectivo==1 ? "Aplica" : "No aplica"; ?></td>
            <td><?php echo $metodo->fovissste==1 ? "Aplica" : "No aplica"; ?></td>
            <td><?php echo $mueble->sala==1 ? "Si" : "No"; ?></td>
            <td><?php echo $mueble->lavadora==1 ? "Si" : "No"; ?></td>
            <td><?php echo $mueble->boiler==1 ? "Si" : "No"; ?></td>
            <td><?php echo $mueble->cocina==1 ? "Si" : "No"; ?></td>
            <td><?php echo $mueble->camas==1 ? "Si" : "No"; ?></td>
            <td><?php echo $mueble->roperos==1 ? "Si" : "No"; ?></td>
            <td><?php echo $amenidad->roffGarden==1 ? "Si" : "No"; ?></td>
            <td><?php echo $amenidad->salaDeUsosMultiples==1 ? "Si" : "No"; ?></td>
            <td><?php echo $amenidad->gimnasio==1 ? "Si" : "No"; ?></td>
            <td><?php echo $amenidad->cancha==1 ? "Si" : "No"; ?></td>
            <td><?php echo $amenidad->calentadorSolar==1 ? "Si" : "No"; ?></td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
</table>