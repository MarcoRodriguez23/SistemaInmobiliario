<main class="confirmar-cuenta">
    <h1 class="tituloDorado">Confirmar cuenta</h1>
    
    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

    
    <?php echo $errores['exito'][0] ?"<p class='alerta exito'>".$errores['exito'][0]."</p>" : ''; ?>
    
    <div class="acciones">
        <a href="/login" class="botonComercial mt-2" style="display: block;  text-align:center; margin:auto;  width:50%;">Iniciar Sesión</a>
    </div>
</main>