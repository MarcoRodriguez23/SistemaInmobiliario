<?php
    session_start();
?>
<div>
<?php
    if($mensaje){
        $msn = mostrarNotificacion(intval($mensaje));
        if($msn){ ?>
            <p class="alerta exito contenedor"><?php echo s($msn); ?></p>
        <?php }
        } ?>
</div>
<?php if(!($_SESSION['nivel']==3)): ?>
<div class="opcion-superior contenedor">
    <a href="/admin/propiedades/create" class="boton-superior"><img src="/build/img/inmueble.svg" alt="inmueble"></a>
</div>
<?php endif; ?>
<main>
    <h1>Propiedades en lista</h1>
    <section>
        <form action="/admin" method="post" class="contenedor filtro contenido-centrado">
            <select name="filtro[precio]" id="precio">
                <option value="" selected disabled>Precio</option>
                <option value="<2000000">Menor a $2,000,000 MXN</option>
                <option value=">2000000">Mayor a $2,000,000 MXN</option>
            </select>
            <select name="filtro[status]" id="status">
                <option value="" selected disabled>Disponibilidad</option>
                <?php foreach ($status as $row) :?>
                    <?php if($row->id !='0'): ?>
                        <option 
                        <?php echo ($propiedad->status === $row->id) ? 'selected' : ''; ?>
                        value="<?php echo s($row->estado); ?>"><?php echo ucfirst(s($row->estado)); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php

                ?>
            </select>
            <select name="filtro[categoria]" id="categoria">
                <option value="" selected disabled>Diseño</option>
                <?php foreach ($categorias as $row) :?>
                    <?php if($row->id !='0'): ?>
                        <option 
                        <?php echo ($propiedad->categoria === $row->id) ? 'selected' : ''; ?>
                        value="<?php echo s($row->tipo); ?>"><?php echo ucfirst(s($row->tipo)); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <button type="submit">Buscar</button>
        </form>
    </section>
    
    <div class="inmuebles contenedor">
    <?php
        foreach ($propiedades as $propiedad) {
            foreach ($direcciones as $direccion) {
                foreach ($tipoPropiedad as $tipo) {
                    if($propiedad->id === $direccion->id && $propiedad->tipoPropiedad === $tipo->id){
                        if ($_SESSION['nivel']==3 && $propiedad->status !=2) {
                            include 'propiedad.php';
                        }
                        if ($_SESSION['nivel']<3) {
                            include 'propiedad.php';
                        }
                    }
                }
            }
        }
    ?>
    </div><!--fin de inmubles -->
</main>
