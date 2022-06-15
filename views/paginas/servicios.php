<main>
    <div class="banner container-xxl" id="bannerServicios">
    </div>
    <h1 class="introduccion container-xl">
        Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
    </h1>
    
    <div class="servicios container-xl">
        <div class="row justify-content-between">
            <?php foreach($servicios as $row): ?>
                <div class="card col-md-4">
                <a href="/servicio?id=<?php echo s($row->id); ?>">
                    <div class="imagen-texto">
                        <img class="img-fluid" loading="lazy" src="/build/img/<?php echo s($row->imagen); ?>" alt="info-anuncio">
                        <p><?php echo s($row->titulo); ?></p>
                    </div>
                </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>        
    

</main>