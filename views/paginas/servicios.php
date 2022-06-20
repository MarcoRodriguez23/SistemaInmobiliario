<main>
    <div class="banner" id="bannerServicios">
    </div>
    <h1 class="textoDorado container-xl">
        Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
    </h1>
    
    <div class="servicios container-xl">
            <?php foreach($servicios as $row): ?>
                <div class="servicio col-md-4">
                <a href="/servicio?id=<?php echo s($row->id); ?>">
                    <img class="img-fluid" loading="lazy" src="/build/img/<?php echo s($row->imagen); ?>" alt="info-anuncio">
                    <p><?php echo s($row->titulo); ?></p>
                </a>
                </div>
            <?php endforeach; ?>
    </div>        
    

</main>