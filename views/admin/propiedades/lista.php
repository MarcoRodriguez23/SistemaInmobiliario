<div class="opcion-superior contenedor">
    <a href="/admin/propiedades/create" class="boton-superior"><img src="/build/img/inmueble.svg" alt="inmueble"></a>
</div>
<main>
    <h1>Inmuebles en lista</h1>
    <section>
        <form action="" method="post" class="contenedor filtro contenido-centrado">
            <select name="ubicacion" id="ubicacion">
                <option value="" selected disabled>Ubicación</option>
                <option value="ubicacion-1">Ubicación X</option>
                <option value="ubicacion-2">Ubicación X</option>
            </select>
            <select name="precio" id="precio">
                <option value="" selected disabled>Precio</option>
                <option value="precio-1">precio 1</option>
                <option value="precio-2">precio 2</option>
            </select>
            <select name="pago" id="pago">
                <option value="" selected disabled>Tipo de pago</option>
                <option value="pago-1">Forma de pago 1</option>
                <option value="pago-2">Forma de pago 2</option>
            </select>
            <select name="habitacion" id="habitacion">
                <option value="" selected disabled>Habitaciones</option>
                <option value="habitacion-1">1</option>
                <option value="habitacion-2">2</option>
            </select>
            <select name="estacionamiento" id="estacionamiento">
                <option value="" selected disabled>Estacionamientos</option>
                <option value="estacionamiento-1">1</option>
                <option value="estacionamiento-2">2</option>
            </select>
            <select name="wc" id="wc">
                <option value="" selected disabled>Baños</option>
                <option value="wc-1">1</option>
                <option value="wc-2">2</option>
            </select>
            <select name="mt2" id="mt2">
                <option value="" selected disabled>Medidas</option>
                <option value="mt2-1">1</option>
                <option value="mt2-2">2</option>
            </select>
            <button type="submit">Buscar</button>
        </form>
    </section>
    <div class="inmuebles contenedor">
    <?php
        for($i=0;$i<8;$i++){
            require 'propiedad.php';
        } 
        ?>
    </div><!--fin de inmubles -->
</main>
