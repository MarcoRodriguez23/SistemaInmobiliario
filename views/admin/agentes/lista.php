<main>
    <div class="opcion-superior contenedor">
            <a href="/admin/agentes/create" class="boton-superior"><img src="/build/img/persona.svg" alt="trabajador"></a>
    </div>
    <h1>Agentes inmobiliarios</h1>
    <div class="trabajadores contenedor">
        <?php
            for ($i=0; $i < 6; $i++) { 
                require 'agente.php';
            } 
        ?>
    </div>
</main>