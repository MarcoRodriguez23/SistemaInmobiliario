<main>
    <div class="banner" id="bannerDepartamentos">
    </div>
    <div class="container-xl">
        <h4 class="textoDorado">
            Tu siguiente departamento espera por ti, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte la mejor ayuda personalizada.
        </h4>
        <div class="divisor">
            <hr class="hr-inmuebles">
        </div>
    </div>

        
    <div class="inmuebles contenedor">
        <?php foreach ($propiedades as $propiedad): ?>
            <div class="plantilla">
                <a href="/departamento?id=<?php echo $propiedad->id; ?>">
                <?php include 'propiedad.php'; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>