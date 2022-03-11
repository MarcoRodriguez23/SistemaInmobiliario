<?php
    // require 'templates/config/conexion.php';    
    
    // $id=$_GET['id'];
    // $id=filter_var($id,FILTER_VALIDATE_INT);
    // // var_dump($id);

    // if(!$id){
    //     header('Location: /');
    // }
    
    // $db = conectarDB();
    // $query = "SELECT * FROM inmuebles WHERE id= ${id}";
    // $resultado = mysqli_query($db, $query);
    // $inmueble = mysqli_fetch_assoc($resultado);

    // if($resultado->num_rows === 0){
    //     header('Location: /');
    // }

    // include 'templates/header.php';


?>

<main class="contenedor carrousel ">
        <h2 id="tituloDep"><?php echo $inmueble->calle.", ".$inmueble->colonia.", ".$inmueble->delegacion; ?></h2>
        <div class="carrousel-contenedor sombra carrousel-individual">
            <button aria-label="Anterior" class="carrousel__anterior" id="anterior-seleccion">
                <img src="build/img/flecha-izquierda.png" alt="">
            </button>
            <div class="carrousel-items" id="C-seleccion">
                <!-- <aqui se van a ir agregando las imagenes -->
                    <?php
                        foreach (glob("build/img/depG/$inmueble->id/*.webp") as $filename): ?>
                                <img loading="lazy" src="<?php echo $filename; ?>" alt="inmueble">
                    <?php endforeach;?>
            </div>
            <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente-seleccion">
                <img src="build/img/flecha-correcta.png" alt="">
            </button>
            <div class="carrousel-indicadores" role="tablist" id="indicadores-seleccion"></div>
        </div>
        
        <div class="informacion">
            <h4>Información sobre el inmueble</h4>
            <div class="datos">
                <div class="informacion_ladoIz">
                    <p><span>$ <?php echo $inmueble->precio; ?></span></p>
                    <p>Año de construcción: <span> <?php echo $inmueble->año; ?> </span></p>
                    <p>Espacios de estacionamiento: <span> <?php echo $inmueble->estacionamientos; ?></span></p>
                    <p>mt2: <span> <?php echo $inmueble->mt2; ?></span></p>
                </div>
                <div class="informacion_ladoDer">
                    <p>Habitaciones: <span> <?php echo $inmueble->habitaciones; ?> </span></p>
                    <p>Habitaciones de servicio: <span> <?php echo $inmueble->servicioH; ?></span></p>
                    <p>Patios de servicio: <span> <?php echo $inmueble->servicioP; ?></span></p>
                    <p>Baños: <span> <?php echo $inmueble->baños; ?></span></p>
                </div>
            </div>
            <a href="<?php echo $inmueble->ubicacion; ?>" class="boton" target="_blank">Conozca la ubicación</a>
        </div>
    <a href="inmuebles.php" class="boton">Volver</a>
</main>


<?php
mysqli_close($db);
include 'templates/footer.php';