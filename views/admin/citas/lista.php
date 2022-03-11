<main>
    <h2>Citas agendadas</h2>
    <form action="" method="post" class="contenedor filtro contenido-centrado">
        <select name="nombre" id="nombre">
            <option value="" selected disabled>Nombre</option>
            <option value="nombre-1">Nombre X</option>
            <option value="nombre-2">Nombre X</option>
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
        <select name="hora" id="hora">
            <option value="" selected disabled>Hora</option>
            <option value="hora-1">00:00</option>
            <option value="hora-2">00:00</option>
        </select>
        
        <button type="submit">Buscar</button>
    </form>
    <div class="contenedor">
        <ul style="padding: 0;">
            <li class="leyenda-representante" style="display: inline; padding:1rem;">Representante</li>
            <li class="leyenda-vendedor" style="display: inline; padding:1rem;">Vendedor</li>
        </ul>
    </div>
    <div class="tabla contenedor table-responsive">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Inmueble de interés</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <tr>
                <td class="leyenda-representante">Nombre y apellido</td>
                <td>
                    <a href="inmueble.php">
                    inmueble X
                    </a>
                </td>
                <td>dd/mm/aaaa</td>
                <td>hh:mm</td>
            </tr>
            <tr>
                <td class="leyenda-vendedor">Nombre y apellido</td>
                <td>
                    <a href="inmueble.php">
                    inmueble X
                    </a>
                </td>
                <td>dd/mm/aaaa</td>
                <td>hh:mm</td>
            </tr>
        </table> 
    </div>
</main>