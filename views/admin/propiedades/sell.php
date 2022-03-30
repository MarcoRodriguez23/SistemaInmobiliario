<div class="opcion-superior contenedor">
    <a href="/admin" class="boton-volver">Volver</a>
</div>
<h1>Proceso de venta</h1>

<section>
    <h3>
        <?php echo $tipoPropiedad->tipo." en ".$direccion->estado; ?>
    <br>
        <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; ?>
    </h3>
    <div class="resumen-venta contenedor">
        <h4>Resumen</h4>
        <div class="resumen-venta_informacion">
            <img src="/build/img/1.jpg" alt="imagen del inmueble">
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
    <div>
        <form action="" method="GET" class="contenedor filtro">
            <div>
                <select name="venta[vendedor]">
                    <option value="" disabled selected>--Selecciona un vendedor--</option>
                    <?php foreach ($vendedores as $vendedor) :?>
                        <option 
                        <?php echo ($venta->idVendedor === $vendedor->id) ? 'selected' : ''; ?>
                        value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombres)." ".s($vendedor->apellidos) ; ?></option>
                    <?php endforeach; ?>
                </select>
            <input type="submit"> 
        </form>
    </div>
    <div class="contenedor tabla">
    <table>
            <tr>
            <th>Representate</th>
            <th>Precio del inmueble</th>
            <th>Comisión</th>
            <th>Ganancia por la venta</th>
            </tr>
            <tr>
            <td>Nombre y apellido</td>
            <td>$$$$$</td>
            <td>%</td>
            <td>$$$$$</td>
            </tr>
    </table> 
    <table>
            <tr>
            <th>Vendedor</th>
            <th>Precio del inmueble</th>
            <th>Comisión</th>
            <th>Ganancia por la venta</th>
            </tr>
            <tr>
            <td>Nombre y apellido</td>
            <td>$$$$$</td>
            <td>%</td>
            <td>$$$$$</td>
            </tr>
    </table> 
    </div>
</section>
<div class="contenedor">
    <button class="boton-azul">Vender</button>
</div>