<?php

    // require 'templates/config/conexion.php';    
    
    // $id=$_GET['id'];
    // $id=filter_var($id,FILTER_VALIDATE_INT);
    // // var_dump($id);

    // if(!$id){
    //     header('Location: /');
    // }
    
    // $db = conectarDB();
    // $query = "SELECT * FROM blog WHERE id= ${id}";
    // $resultado = mysqli_query($db, $query);
    // $articulo = mysqli_fetch_assoc($resultado);

    // if($resultado->num_rows === 0){
    //     header('Location: /');
    // }

    // include 'templates/header.php';

?>

    <main>
        <img src="" alt="<?php echo 'imagen del articulo '.$entrada->id; ?>">
        <div class="info-articulo">
            <h1>
                <?php echo $entrada->titulo; ?>
            </h1>
    
            <p>
                <?php echo $entrada->descripcion; ?>
            </p>

            <a href="/blog" class="boton">Volver a los articulos</a>
        </div>
        
        
        
    </main>
<?php
    // mysqli_close($db);
    // include 'templates/footer.php';
