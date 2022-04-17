<main>
    <div class="banner" id="bannerBlog">
    </div>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/blog.png" alt="blog">
        </div>
        <div class="texto-principal">
            <p>
                ¿Buscas consejos para tu próxima mudanza?, ¿No sabes cuáles son los pasos a seguir para concretar la renta o venta de una casa?, ¿Quieres conocer las mejores noticias del sector inmobiliario?, nuestro blog está al día con la mejor información que te ayudará a guiar tus próximos pasos a tu siguiente gran inversión.
            </p>
        </div>
        
    </div>
    <div class="articulos-blog">
        <?php foreach($blog as $row) : ?>
            <article class="info-servicio">
                <picture class="imagen-servicio">
                    <source srcset="build/img/MAIN.webp" type="image/webp">
                    <source srcset="build/img/MAIN.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/MAIN.jpg" alt="anuncio-1">
                </picture>
                <h1><?php echo $row->titulo; ?></h1>
                <p class="texto-servicio">
                <?php echo $row->infoprevia; ?>
                </p>
                <a href="/entrada?id=<?php echo $row->id; ?>" class="boton boton-morado">Conocer más</a>
            </article>
        <?php endforeach; ?>
    </div>
</main>