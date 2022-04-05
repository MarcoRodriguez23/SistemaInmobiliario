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
            <a href="/admin/agentes/create" class="boton-superior"><img src="/build/img/persona.svg" alt="trabajador"></a>
    </div>
    <h1>Agentes inmobiliarios</h1>
    <div class="trabajadores contenedor">
        <?php
        foreach ($agentes as $agente) {
            foreach ($direcciones as $direccion) {
                if($agente->id === $direccion->id && $agente->nivel==2 && $agente->confirmado == 1){
                    include 'agente.php';
                }
            }
        }
    ?>
    </div>
</main>