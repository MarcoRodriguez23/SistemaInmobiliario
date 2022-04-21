<?php
    // session_start();
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
    <!--FILTRO-->
    <form action="/admin" method="post" class="filtro">
        <select name="filtro[precio]" id="precio">
            <!-- <option value="" selected disabled>Precio</option> -->
            <option
            <?php echo $filtro['precio'] == "" ? "selected" : ""  ?>
            value="">Todos los precios</option>
            <option
                <?php echo $filtro['precio'] == "<=2000000" ? "selected" : ""  ?>
                value="<=2000000"
            >
                Menor a $2,000,000 MXN
            </option>
            <option 
            <?php echo $filtro['precio'] == ">=2000000" ? "selected" : ""  ?>
                value=">=2000000"
            >
                Mayor a $2,000,000 MXN
            </option>
        </select>
        <select name="filtro[tipoPropiedad]" id="tipo">
            <!-- <option value="" selected disabled>Tipo</option> -->
            <option
            <?php echo $filtro['tipoPropiedad'] == "" ? "selected" : ""  ?>
            value="">Todos los tipos</option>
            <?php foreach ($tipoPropiedad as $row) :?>
                <?php if($row->id !='0'): ?>
                    <option 
                    <?php echo $filtro['tipoPropiedad'] == $row->id ? "selected" : ""  ?>
                    value="<?php echo s($row->id); ?>"><?php echo ucfirst(s($row->tipo)); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php
            ?>
        </select>
        
        <select name="filtro[status]" id="status">
            <!-- <option value="" selected disabled>Disponibilidad</option> -->
            <option
            <?php echo $filtro['status'] == "" ? "selected" : ""  ?>
            value="">Todos los status</option>
            <?php foreach ($status as $row) :?>
                <?php if($row->id !='0'): ?>
                    <option 
                    <?php echo $filtro['status'] == $row->id ? "selected" : ""  ?>
                    value="<?php echo s($row->id); ?>"><?php echo ucfirst(s($row->estado)); ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php
            ?>
        </select>

        <select name="filtro[categoria]" id="tipo">
            <!-- <option value="" selected disabled>Tipo</option> -->
            <option
            <?php echo $filtro['categoria'] == "" ? "selected" : ""  ?>
            value="">Todos los diseños</option>
            <?php foreach ($categorias as $row) :?>
                    <option 
                    <?php echo $filtro['categoria'] === $row->id ? "selected" : ""  ?>
                    value="<?php echo s($row->id); ?>"><?php echo ucfirst(s($row->tipo)); ?></option>
            <?php endforeach; ?>
            <?php
            ?>
        </select>

        <select name="filtro[orden]" id="orden">
            <!-- <option value="" selected disabled>Precio</option> -->

            
            <option 
            <?php echo $filtro['orden'] == "order by creacion asc" ? "selected" : ""  ?>
                value="order by creacion asc"
            >
                Más antigüa
            </option>
            <option
                <?php echo $filtro['orden'] == "order by creacion desc" ? "selected" : ""  ?>
                value="order by creacion desc"
            >
                Más reciente
            </option>
        </select>

        <input type="submit" value="Buscar">
    </form>
    
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
