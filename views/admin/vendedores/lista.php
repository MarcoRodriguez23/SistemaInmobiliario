<div class="opcion-superior contenedor">
    <a href="/admin/vendedores/create" class="boton-superior"><img src="/build/img/persona.svg" alt="trabajador"></a>
</div>
<main>
    <h1>Vendedores</h1>
    <div class="trabajadores contenedor">
        <?php
        for($i=0;$i<6;$i++){
            require 'vendedor.php';
        } 
        ?>
    </div>
</main>
