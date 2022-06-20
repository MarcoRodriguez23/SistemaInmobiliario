<main>
    <div class="banner" id="bannerBlog">
    </div>
    <div class="container-xl">
        <h4 class="textoDorado">
            ¿Buscas consejos para tu próxima mudanza?, ¿No sabes cuáles son los pasos a seguir para concretar la renta o venta de una casa?, ¿Quieres conocer las mejores noticias del sector inmobiliario?, nuestro blog está al día con la mejor información que te ayudará a guiar tus próximos pasos a tu siguiente gran inversión.
        </h4>
        <div class="divisor">
            <hr class="hr-inmuebles">
        </div>

    </div>
        
    <div class="articulos-blog container-xl ">
        <div class="row justify-content-between">
            <?php foreach($blog as $row) : ?>
                <article class="info-servicio col-md-5">
                    <div class="div-imagen-blog">
                    <picture class="imagen-blog-1">
                        <source srcset="build/img/MAIN.webp" type="image/webp" class="imagen-blog-2">
                        <source srcset="build/img/MAIN.jpg" type="image/jpeg" class="imagen-blog-2">
                        <img loading="lazy" src="build/img/MAIN.jpg" alt="anuncio-1" class="imagen-blog-2 img-fluid">
                    </picture>
                    </div>
                    <div class="div-texto-blog">
                    <h1 class="titulo-articulo"><?php echo $row->titulo; ?></h1>
                    <br class="limpiador">
                    <p class="texto-articulo">
                    <?php echo $row->infoprevia; ?>
                    </p>
                    <div class="centrar-boton-articulo">
                    <a href="/entrada?id=<?php echo $row->id; ?>" class="boton boton-principal">Conocer más</a>
                    </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</main>