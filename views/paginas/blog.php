<main>
    <div class="banner" id="bannerBlog">
    </div>
    <div class="container-xl">
        
        <h1 class="textoDorado fs-md-4">
        ¿Buscas consejos para tu próxima mudanza?, ¿No sabes cuáles son los pasos a seguir para concretar la renta o venta de una casa?, ¿Quieres conocer las mejores noticias del sector inmobiliario?, nuestro blog está al día con la mejor información que te ayudará a guiar tus próximos pasos a tu siguiente gran inversión.
        </h1>

        <div class="row justify-content-evenly align-items-center gy-3">
                <?php foreach($blog as $row): ?>
                    <article class="articulo col-md-5 p-1">
                        <a href="/entrada?id=<?php echo $row->id; ?>">
                            <div class="card">
                                <img src="/build/img/mision.jpg" alt="imagen articulo">
                                <div class="card-body px-0 py-1">
                                    <h5 class="card-title fs-3 text-center"><?php echo $row->titulo; ?></h5>
                                    <p class="card-text">
                                        <?php echo $row->infoprevia; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </article>

                <?php endforeach; ?>
        </div>        
    </div>

</main>