<main>
    <div class="banner" id="bannerServicios">
    </div>
    <h4 class="introduccion">
        Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
    </h4>
    <div class="carrousel-contenedor contenedor">
        <button aria-label="Anterior" class="carrousel__anterior" id="anterior4">
            <img src="build/img/flecha-izquierda.png" alt="">
        </button>
        <div class="carrousel-items" id="C-servicios">
            <!-- <aqui se van a ir agregando las imagenes -->
            
            <?php foreach($servicios as $row): ?>
                <a href="/servicio?id=<?php echo $row->id; ?>">
                    <div class="imagen-texto">
                        <img loading="lazy" src="build/img/<?php echo $row->imagen; ?>" alt="info-anuncio">
                        <p><?php echo $row->titulo; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente4">
            <img src="build/img/flecha-correcta.png" alt="">
        </button>
        <div class="carrousel-indicadores" role="tablist" id="indicadores4"></div>
    </div> 
</main>