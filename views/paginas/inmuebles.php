<?php
    // require 'templates/config/conexion.php';
    // $db = conectarDB();
    // //obteniendo los inmuebles
    // $query = "SELECT * FROM departamentos";
    // $inmuebles = mysqli_query($db, $query);

    // include 'templates/header.php';

?>

    <main>
        <div class="banner" id="bannerInmuebles">
        </div>
        <h4 class="introduccion">
            
        </h4>
        <div class="contenedor principal-der">
            <div class="imagen-principal">
                <img loading="lazy" src="build/img/casa.svg" alt="inmuebles">
            </div>
            <div class="texto-principal">
                <p>
                    La expansión de tu negocio o tu próxima oficina no pueden esperar más, recuerda que uno de nuestros asesores especializados en venta o renta de inmuebles siempre estará disponible para brindarte ayuda personalizada.
                </p>
            </div>
            
        </div>
        <div class="anuncios anunciosD">
            <!-- aqui se va ir generando los anuncios de los inmuebles -->
            <?php
            foreach($inmuebles as $row): ?>
                <div class="anuncio">
                     
                    <a href="/inmueble?id=<?php echo $row->id; ?>">
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
                            <div class="beneficio">
                                <img src="build/img/icono_dormitorio.svg" alt="beneficio1">
                                <p><?php echo $row->habitaciones; ?> rec</p>
                            </div>
                            <div class="beneficio">
                                <img src="build/img/icono_wc.svg" alt="beneficio1">
                                <p><?php echo $row->baños; ?> wc</p>
                            </div>
                            <div class="beneficio">
                                <img src="build/img/icono_estacionamiento.svg" alt="beneficio1">
                                <p><?php echo $row->estacionamientos; ?> est</p>
                            </div>
                            <div class="beneficio">
                                <img src="build/img/medida.svg" alt="beneficio1">
                                <p><?php echo $row->mt2; ?> m2</p>
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