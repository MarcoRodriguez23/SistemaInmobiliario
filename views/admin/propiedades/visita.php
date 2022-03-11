<main>
    <div class="opcion-superior contenedor contenido-centrado">
        <a href="/admin" class="boton-volver">Volver</a>
    </div>
    <h1>Agendar cita</h1>
    <div class="contenedor contenido-centrado">
        <p class="text-center">Coloca los datos para la fecha de tu cita</p>
        <form class="contenedor contenido-centrado agenda">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre">
            </div>
            <!-- <div class="campo">
                <label for="inmueble">Inmueble de interés</label>
                <select name="" id="">
                    <option value="0" selected disabled>--Seleccione el inmueble--</option>
                    <option value="1">inm 1</option>
                    <option value="2">inm 2</option>
                    <option value="3">inm 3</option>
                </select>
            </div> -->
            <div class="campo">
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date" min="2022-1-4">
            </div>
            <div class="campo">
                <label for="hora">Hora</label>
                <input id="hora" type="time">
            </div>
        </form>
    </div>
</main>