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
            <?php echo array_key_exists('precio',$filtro) ? ($filtro['precio'] == "" ? "selected" : "") : "" ?>
            value="">Todos los precios</option>
            <option
                <?php echo array_key_exists('precio',$filtro) ? ($filtro['precio'] == "<=2000000" ? "selected" : "") : "" ?>
                value="<=2000000"
            >
            Menor a $2,000,000 MXN
            </option>
            <option 
            <?php echo array_key_exists('precio',$filtro) ? ($filtro['precio'] == ">=2000000" ? "selected" : "" ) : "" ?>
                value=">=2000000"
            >
            Mayor a $2,000,000 MXN
            </option>
        </select>

        <select name="filtro[tipoPropiedad]" id="tipo">
            <!-- <option value="" selected disabled>Tipo</option> -->
            <option
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] == "" ? "selected" : "") : "" ?>
                value=""
            >
            Todos los tipos
            </option>

            <option
                value="Casa"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Casa" ? "selected" : "" ) : "" ?>
            >
            Casa
            </option>

            <option
                value="Departamento"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Departamento" ? "selected" : "" ) : "" ?>
            >
            Departamento
            </option>
            <option
                value="Terreno"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Terreno" ? "selected" : "" ) : "" ?>
            >
            Terreno
            </option>
            <option
                value="Bodega"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Bodega" ? "selected" : "" ) : "" ?>
            >
            Bodega
            </option>
            <option
                value="Local"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Local" ? "selected" : "" ) : "" ?>
            >
            Local
            </option>
            <option
                value="Oficina"
                <?php echo array_key_exists('tipoPropiedad',$filtro) ? ($filtro['tipoPropiedad'] === "Oficina" ? "selected" : "" ) : "" ?>
            >
            Oficina
            </option>
        </select>
        
        <select name="filtro[status]" id="status">
            <!-- <option value="" selected disabled>Disponibilidad</option> -->
            <option
            <?php echo array_key_exists('status',$filtro) ? ($filtro['status'] == "" ? "selected" : "" ) : "" ?>
            value="">Todos los status</option>

            <option
                value="venta"
                <?php echo array_key_exists('status',$filtro) ? ($filtro['status'] == "venta" ? "selected" : "" ) : "" ?>
            >
            Venta
            </option>
            <option
                value="vendida"
                <?php echo array_key_exists('status',$filtro) ? ($filtro['status'] == "vendida" ? "selected" : "" ) : "" ?>
            >
            Vendida
            </option>
            <option
                value="preventa"
                <?php echo array_key_exists('status',$filtro) ? ($filtro['status'] == "preventa" ? "selected" : "" ) : "" ?>
            >
            Preventa
            </option>
            <option
                value="renta"
                <?php echo array_key_exists('status',$filtro) ? ($filtro['status'] == "renta" ? "selected" : "" ) : "" ?>
            >
            Renta
            </option>
        </select>

        <select name="filtro[categoria]" id="tipo">
            <!-- <option value="" selected disabled>Tipo</option> -->
            <option
                <?php echo array_key_exists('categoria',$filtro) ? ($filtro['categoria'] == "" ? "selected" : "" ) : "" ?>
                value=""
            >
            Todos los diseños
            </option>
            <option
                value="Para construir"
                <?php echo array_key_exists('categoria',$filtro) ? ($filtro['categoria'] === "Para construir" ? "selected" : "" ) : "" ?>
            >
            Para construir
            </option>

            <option
                value="Con remodelado"
                <?php echo array_key_exists('categoria',$filtro) ? ($filtro['categoria'] === "Con remodelado" ? "selected" : "" ) : "" ?>
            >
            Con remodelado
            </option>
            <option
                value="Para remodelar"
                <?php echo array_key_exists('categoria',$filtro) ? ($filtro['categoria'] === "Para remodelar" ? "selected" : "" ) : "" ?>
            >
            Para remodelar
            </option>
            <option
                value="Para laborar"
                <?php echo array_key_exists('categoria',$filtro) ? ($filtro['categoria'] === "Para laborar" ? "selected" : "" ) : "" ?>
            >
            Para laborar
            </option>
        </select>

        <select name="filtro[orden]" id="orden">
            <!-- <option value="" selected disabled>Precio</option> -->

            
            <option 
            <?php echo array_key_exists('orden',$filtro) ? ($filtro['orden'] == 1 ? "selected" : "" ) : "" ?>
                value="1"
            >
            Más antigüa
            </option>
            <option
                <?php echo array_key_exists('orden',$filtro) ? ($filtro['orden'] == 2 ? "selected" : "" ) : "" ?>
                value="2"
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
                    if($propiedad->id === $direccion->id){
                        if ($_SESSION['nivel']==3 && $propiedad->status !="vendida") {
                            include 'propiedad.php';
                        }
                        if ($_SESSION['nivel']<3) {
                            include 'propiedad.php';
                        }
                    }
                
            }
        }
    ?>
    </div><!--fin de inmubles -->
</main>
