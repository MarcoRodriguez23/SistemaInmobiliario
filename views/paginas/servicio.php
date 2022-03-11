<?php
    // require 'templates/config/conexion.php';    
    
    // $id=$_GET['id'];
    // $id=filter_var($id,FILTER_VALIDATE_INT);
    // // var_dump($id);

    // if(!$id){
    //     header('Location: /');
    // }
    
    // $db = conectarDB();
    // $query = "SELECT * FROM servicios WHERE id= ${id}";
    // $resultado = mysqli_query($db, $query);
    // $servicio = mysqli_fetch_assoc($resultado);

    // if($resultado->num_rows === 0){
    //     header('Location: /');
    // }

    // include 'templates/header.php';


?>

    <main class="contenedor">
        <div class="info-servicio">
            <h1> <?php echo $servicio->titulo; ?></h1>
            <picture class="imagen-servicio">
                <!-- <source srcset="build/img/escaleras.webp" type="image/webp">
                <source srcset="build/img/escaleras.jpg" type="image/jpeg"> -->
                <img loading="lazy" src="build/img/<?php echo $servicio->imagen; ?>" alt="<?php echo "Imagen Servicio ".$servicio->id; ?>">
            </picture>
            <p class="texto-servicio">
                <?php echo $servicio->descripcion; ?>
            </p>
            
            <a href="/servicios" class="boton">Volver</a>
        </div>
    </main>

<?php
    // mysqli_close($db);
    // include 'templates/footer.php';