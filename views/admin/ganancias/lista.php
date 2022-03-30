<main>
    <h2>Ganancias</h2>
    <!-- <form action="" method="post" class="contenedor filtro contenido-centrado">
        <select name="representante" id="representante">
            <option value="" selected disabled>Representante</option>
            <option value="representante-1">Representante X</option>
            <option value="representante-2">Representante X</option>
        </select>
        <select name="vendedor" id="vendedor">
            <option value="" selected disabled>Vendedor</option>
            <option value="vendedor-1">Vendedor 1</option>
            <option value="vendedor-2">Vendedor 2</option>
        </select>
        <select name="inmueble" id="inmueble">
            <option value="" selected disabled>Inmueble</option>
            <option value="inmueble-1">Inmueble 1</option>
            <option value="inmueble-2">Inmueble 2</option>
        </select>
        <select name="fecha" id="fecha">
            <option value="" selected disabled>Fecha</option>
            <option value="fecha-1">DD/MM/AA</option>
            <option value="fecha-2">DD/MM/AA</option>
        </select>

        <button type="submit">Buscar</button>
    </form> -->
    <div class=" tabla contenedor table-responsive">
        
        <table>
            <tr>
                <th>Registro</th>
                <th>Agente</th>
                <th>Vendedor</th>
                <th>Propiedad</th>
                <th>Precio</th>
                <th>Comisión</th>
                <th>Fecha</th>
            </tr>
            <?php foreach($ventas as $venta): ?>
            <tr>
                <td><?php echo $venta->id; ?></td>
                <td><?php echo $venta->idAgente; ?></td>
                <td><?php echo $venta->idVendedor; ?></td>
                <td><?php echo $venta->idPropiedad; ?></td>
                <td><?php echo $propiedad->precio; ?></td>
                <td><?php echo $propiedad->comisión; ?></td>
                <td><?php echo $venta->fecha; ?></td>
            </tr>
            <?php endforeach; ?>
        </table> 
    </div>
</main>