<?php
    // require 'templates/config/conexion.php';
    // $db = conectarDB();
    // //obteniendo los servicios
    // $query = "SELECT * FROM servicios";
    // $servicios = mysqli_query($db, $query);

    // include 'templates/header.php';
?>

    <main>
        <div class="banner" id="bannerServicios">
        </div>
        <h4 class="introduccion">
            Permítenos ser parte de tu siguiente paso hacia el futuro y guiarte con nuestra experiencia a concretar una de tus mejores inversiones en la vida.
        </h4>
        <div class="anuncios" id="servicios">
            <?php foreach($servicios as $row) : ?>
                <div class="anuncio sombra">
                    <a href="/servicio?id=<?php echo $row->id; ?>" class="info-anuncio">
                        <img loading="lazy" src="build/img/<?php echo $row->imagen; ?>" alt="<?php $row->id; ?>">
                        <h2><?php echo $row->titulo; ?></h2>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
        
    </main>

<?php
    // mysqli_close($db);
    // include 'templates/footer.php';
    