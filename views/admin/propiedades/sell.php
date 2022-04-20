<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1 class="titulo-venta">Proceso de venta</h1>

<div class="resumen-venta contenedor">
<h4>
    <?php
        echo $tipoPropiedad->tipo." en ".$direccion->estado; 
    ?>
    <br>
    <?php 
        echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; 
    ?>
</h4>
        <div class="resumen-venta_informacion">
            <?php $unaImagen = true; ?>
            <?php foreach($fotos as $foto): ?>
                <?php if($propiedad->id === $foto->idPropiedad && $unaImagen===true): ?>
                <img src="/imagenes/<?php echo $foto->foto;?>" alt="Seleccione <-Actualizar-> para agregar las imágenes">
                <?php $unaImagen = false; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <div>
                <p>Dirección: </p>
                <p><?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion.", ".$direccion->estado; ?></p>
                <p>Precio:</p>
                <p>$<?php echo $propiedad->precio; ?></p>
                <p>Forma de pago</p>
                <ul>
                    <!-- <img src="" alt="icono"> -->
                    <?php foreach ($metodos as $clave => $val) {
                        if($val==1 && $clave!="id"){
                            if($clave === "credito"){
                                echo "<li>Crédito bancario</li>";
                            }
                            else{
                                echo "<li>".$clave."</li>";
                            }
                        }
                    }
                    ?>
                </ul> 
            </div>
            <div>
                <ul>
                    <?php foreach ($mueble as $clave => $val) {
                        if($val==1 && $clave!="id"){
                            echo "<li>".ucfirst($clave)."</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
            <div>
                <ul>
                    <?php foreach ($amenidad as $clave => $val) {
                        if($val==1 && $clave!="id"){
                            
                            if($clave==="roffGarden"){
                                echo "<li>Roff Garden</li>";
                            }
                            if($clave==="salaDeUsosMultiples"){
                                echo "<li>Sala de usos Multiples</li>";
                            }
                            if($clave==="calentadorSolar"){
                                echo "<li>Calentador Solar</li>";
                            }
                            if($clave==="gimnasio"){
                                echo "<li>".ucfirst($clave)."</li>";
                            }
                            if($clave==="cancha"){
                                echo "<li>".ucfirst($clave)."</li>";
                            }
                        }
                        
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
<form action="" class="contenedor formulario form-venta" method="POST" enctype="multipart/form-data">
    <h4>Responsables de venta</h4>
    <legend></legend>
    <fieldset>
        <div>
            <input type="hidden" name="venta[idPropiedad]" value="<?php echo $propiedad->id; ?>">
            <input type="hidden" name="propiedad[status]" value="2">
        </div>
        <div>
            <input type="hidden" name="venta[idEncargado]" value="<?php echo $_SESSION['id']; ?>">
            <input type="text" disabled value="<?php echo $_SESSION['nombre']; ?>">
        </div>
    </fieldset>
    
    <?php echo ($propiedad->status==2 && (empty($erroresVenta))) ? "<h4 class='aviso-venta'>esta propiedad ya fue vendida</h4>"  :  '<input type="submit" value="vender propiedad" class="boton-azul">';?>
    
</form>

