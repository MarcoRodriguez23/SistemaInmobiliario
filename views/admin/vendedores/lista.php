<div>
<?php
    if($mensaje){
        $msn = mostrarNotificacion(intval($mensaje));
        if($msn){ ?>
            <p class="alerta exito contenedor"><?php echo s($msn); ?></p>
        <?php }
        } ?>
</div>
<main>
    <div class="opcion-superior contenedor">
            <a href="/admin/vendedores/create" class="boton-superior"><img src="/build/img/persona.svg" alt="trabajador"></a>
    </div>
    <h1>Vendedores</h1>
    <div class="trabajadores contenedor">
        <?php
        foreach ($vendedores as $vendedor) {
            foreach ($direcciones as $direccion) {
                if($vendedor->id === $direccion->id && $vendedor->nivel==3 && $vendedor->confirmado == 1){
                    include 'vendedor.php';
                }
            }
        }
    ?>
    </div>
</main>