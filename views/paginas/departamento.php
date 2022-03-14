<?php
    // require 'templates/config/conexion.php';    
    
    $id=$_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);
    // // var_dump($id);

    // if(!$id){
    //     header('Location: /');
    // }
    
    // $db = conectarDB();
    // $query = "SELECT * FROM departamentos WHERE id= ${id}";
    // $resultado = mysqli_query($db, $query);
    // $departamento = mysqli_fetch_assoc($resultado);

    // if($resultado->num_rows === 0){
    //     header('Location: /');
    // }

    // include 'templates/header.php';


?>

<main class="contenedor">
    <section class="datos-propiedad">
        <h3>
            <?php echo $tipoPropiedad->tipo." en ".$direccion->estado; ?>
        <br>
            <?php echo $direccion->calle.", ".$direccion->colonia.", ".$direccion->municipioDelegacion; ?>
        </h3>
    </section>
    
    <div class="carrousel-contenedor sombra carrousel-individual">
        <button aria-label="Anterior" class="carrousel__anterior" id="anterior-seleccion">
            <img src="build/img/flecha-izquierda.png" alt="">
        </button>
        <div class="carrousel-items" id="C-seleccion">
            <!-- <aqui se van a ir agregando las imagenes -->
            <?php
                foreach ($fotos as $foto) {
                    echo "<img class='carrousel-item' src=build/img/depG/$propiedad->idPropiedad/$foto->foto></img>";
                }
            ?>
        </div>
        <button aria-label="Siguiente" class="carrousel__siguiente" id="siguiente-seleccion">
            <img src="build/img/flecha-correcta.png" alt="">
        </button>
        <div class="carrousel-indicadores" role="tablist" id="indicadores-seleccion"></div>
    </div>

    <section class="datos-propiedad">
        <h4 class="precio"> <?php echo "$".$propiedad->precio;?> </h4>    

        <p> <?php echo $propiedad->año;?> </p>
        <p> <?php echo $estacionamiento->tipo;?> </p>
        <p> <?php echo $propiedad->numEstacionamientos;?> </p>
        <p> <?php echo $propiedad->numPisos;?> </p>
        <p> <?php echo $propiedad->piso;?> </p>
        <p> <?php echo $propiedad->numDepartamento;?> </p>
        <p> <?php echo $propiedad->numElevadores;?> </p>
        <p> <?php echo $propiedad->habitaciones;?> </p>
        <p> <?php echo $propiedad->baños;?> </p>
        <p> <?php echo $propiedad->servicioH;?> </p>
        <p> <?php echo $propiedad->servicioP;?> </p>
        
        <p> <?php echo $escritura->tipo;?> </p>
        <p> <?php echo $metodoVenta->tipo;?> </p>

        
    </section>

    <section class="info-propiedad sombra">
        <h4>Información sobre la propiedad</h4>
        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium architecto repellendus vel, ipsum vitae optio iure repellat minima aliquam quia modi fugiat corporis quidem cumque iste nesciunt iusto. Et?
            </p>
            <div class="beneficios">
                <div class="beneficio">
                    <img src="/build/img/icono_dormitorio.svg" alt="beneficio1">
                    <p><?php echo $propiedad->habitaciones; ?> rec</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/icono_estacionamiento.svg" alt="beneficio1">
                    <p><?php echo $propiedad->numEstacionamientos; ?> est</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/icono_wc.svg" alt="beneficio1">
                    <p><?php echo $propiedad->baños; ?> wc</p>
                </div>
                <div class="beneficio">
                    <img src="/build/img/medida.svg" alt="beneficio1">
                    <p><?php echo $propiedad->mt2; ?> mt2</p>
                </div>
            </div>
        </div>
        <h4>Amenidades</h4>
        <div>
            <ul>
            <?php foreach ($amenidad as $clave => $val) {
                if($val==1 && $clave!="idPropiedad"){
                    echo "<li>".$clave."</li>";
                }
            }
            ?>
            </ul>
        </div>
        <h4>muebles</h4>
        <div>
            <ul>
            <?php foreach ($mueble as $clave => $val) {
                if($val==1 && $clave!="idPropiedad"){
                    echo "<li>".$clave."</li>";
                }
            }
            ?>
            </ul>
        </div>
    </section>
</main>


<section class="ubicacion contenedor sombra">
    <h3>Ubicación</h3>
    <!-- <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iusto non quia ducimus temporibus amet atque hic iste, quo ullam aliquid fugiat possimus autem, sapiente distinctio asperiores aperiam eum facere.
    </p> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.947726341177!2d-99.08934328509494!3d19.328074486943763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0211b6754c51%3A0xd83dde3e93e4718!2sAv.%20Hidalgo%20119%2C%20Granjas%20Estrella%2C%20Iztapalapa%2C%2009880%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1646844988979!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 


</section>

