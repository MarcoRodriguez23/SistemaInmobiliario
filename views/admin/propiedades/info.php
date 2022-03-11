<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<main class="contenedor">
    <section class="datos-propiedad">
        <h3>Dirección del departamento</h3>
        <p class="precio">$ ##,###,###</p>
    </section>
    
    <div class="pre-imagenes">
        <img src="/build/img/1.jpg" alt="imagen" id="primer-imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <a href="#galeria">Ver todas las fotos</a>
    </div>
    <section class="info-propiedad sombra">
        <h4>Información sobre la propiedad</h4>
        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium architecto repellendus vel, ipsum vitae optio iure repellat minima aliquam quia modi fugiat corporis quidem cumque iste nesciunt iusto. Et?
            </p>
            <div class="beneficios">
                <div class="beneficio">
                    <img src="/build/img/icono_dormitorio.svg" alt="beneficio1">
                    <p>4 rec</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/icono_estacionamiento.svg" alt="beneficio1">
                    <p>2 est</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/icono_wc.svg" alt="beneficio1">
                    <p>2 wc</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/medida.svg" alt="beneficio1">
                    <p>72 m2</p>
                </div>
            </div>
        </div>
        <h4>Amenidades</h4>
        <div>
            <ul>
                <li>amenidad 1</li>
                <li>amenidad 2</li>
                <li>amenidad 3</li>
            </ul>
        </div>
    </section>
</main>
<section class="contenedor sombra galeria" id="galeria">
    <h3>Galería de fotos</h3>
    <div>
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
        <img src="/build/img/1.jpg" alt="imagen">
    </div>
</section>
<section class="ubicacion contenedor sombra">
    <h3>Ubicación</h3>
    <!-- <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iusto non quia ducimus temporibus amet atque hic iste, quo ullam aliquid fugiat possimus autem, sapiente distinctio asperiores aperiam eum facere.
    </p> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1882.0899007228506!2d-99.15182182807233!3d19.36136581681272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffc9e53d8deb%3A0xed620e231dadd1ac!2sAv.%20Popocat%C3%A9petl%20158%2C%20Portales%20Nte%2C%20Benito%20Ju%C3%A1rez%2C%2003300%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1640037359833!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<div class="opciones contenedor" style="width: 80%; margin: 1 rem auto;">
    <a href="/admin/propiedades/update?id=<?php echo $row['id']; ?>" class="boton boton-amarillo">Actualizar</a>
    <a href="/admin/propiedades/sell?id=<?php echo $row['id']; ?>" class="boton boton-verde">Vender</a>
    <a href="/admin/propiedades/date?id=<?php echo $row['id']; ?>" class="boton boton-azul">Agendar</a>
    <a href="#" class="boton boton-rojo">Eliminar</a>
</div>