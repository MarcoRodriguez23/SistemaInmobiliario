<main>
    <div class="banner" id="bannerServicios">
    </div>
    <h1 class="introduccion">
        Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
    </h1>
    
    <div class="servicios contenedor">
    <?php foreach($servicios as $row): ?>
        <div class="card">
        <a href="/servicio?id=<?php echo s($row->id); ?>">
            <div class="imagen-texto">
                <img loading="lazy" src="/build/img/<?php echo s($row->imagen); ?>" alt="info-anuncio">
                <p><?php echo s($row->titulo); ?></p>
            </div>
        </a>
        </div>
    <?php endforeach; ?>
    </div>        
    

</main>