<?php
    // require 'templates/config/conexion.php';
    // $db = conectarDB();
    // //obteniendo los terrenos
    // $query = "SELECT * FROM departamentos";
    // $terrenos = mysqli_query($db, $query);

    // include 'templates/header.php';

?>

    <main>
        <div class="banner" id="bannerTerrenos">
        </div>
        <h4 class="introduccion">
            
        </h4>
        <div class="contenedor principal-der">
            <div class="imagen-principal">
                <img loading="lazy" src="build/img/dimensiones.svg" alt="terrenos">
            </div>
            <div class="texto-principal">
                <p>
                    Una de las mejores inversiones que podrías hacer está a solo un clic de distancia, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte ayuda personalizada.
                </p>
            </div>
            
        </div>
        <div class="anuncios anunciosD">
            <!-- aqui se va ir generando los anuncios de los terrenos -->
            <?php
            foreach($terrenos as $row): ?>
                <div class="anuncio">
                     
                    <a href="/terreno?id=<?php echo $row->id; ?>">
                        <?php
                        $unaImagen=true;
                            foreach (glob("build/img/depG/$row->id/*.webp") as $filename): ?>
                                <?php if($unaImagen===true) : ?>
                                    <img loading="lazy" src="<?php echo $filename; ?>" alt="departamento <?php echo $row->id; ?>">
                                <?php
                                    $unaImagen=false;
                                endif; ?> 
                        <?php endforeach;?>
                        <div class="info-anuncio">
                            <p class="precio">
                                <?php echo  "$ ".$row->precio; ?>
                            </p>
                            <h2>
                                <?php echo $row->calle.", ".$row->colonia.", ".$row->delegacion ; ?>
                            </h2>
                            
                        </div>
                        <div class="beneficios">
                            <!-- <div class="beneficio">
                                <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                <p>4 rec</p>
                            </div>
                            <div class="beneficio">
                                <img src="build/img/icono_wc.svg" alt="beneficio1">
                                <p>2 wc</p>
                            </div>
                            <div class="beneficio">
                                <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                <p>2 est</p>
                            </div> -->
                            <div class="beneficio">
                                <img src="build/img/medida.svg" alt="beneficio1">
                                <p>72 m2</p>
                            </div>   
                        </div>
                    </a> 
                </div>
            <?php endforeach; ?>
        </div>
    </main>


<?php
    // mysqli_close($db);
    // include 'templates/footer.php';