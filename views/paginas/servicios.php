<main>
    <div class="banner" id="bannerServicios">
    </div>
    <h4 class="introduccion">
        Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
    </h4>
    
    <div class="servicios contenedor">
    <?php foreach($servicios as $row): ?>
        <a href="/servicio?id=<?php echo $row->id; ?>">
            <div class="imagen-texto">
                <img loading="lazy" src="/build/img/anuncio1.jpg" alt="info-anuncio">
                <p><?php echo $row->titulo; ?></p>
            </div>
        </a>
    <?php endforeach; ?>
    </div>        
    

</main>