<main>
    <div class="banner" id="bannerInmuebles">
    </div>
    <div class="container-xl">
        <h4 class="textoDorado">
            La expansión de tu negocio o tu próxima oficina no pueden esperar más, recuerda que uno de nuestros asesores especializados en venta o renta de inmuebles siempre estará disponible para brindarte ayuda personalizada.
        </h4>
        <div class="divisor">
            <hr class="hr-inmuebles">
        </div>
    </div>


    <div class="inmuebles contenedor">
        <?php foreach ($propiedades as $propiedad): ?>
            <div class="plantilla">
                <a href="/negocio?id=<?php echo $propiedad->id; ?>">
                <?php include 'propiedad.php'; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>
