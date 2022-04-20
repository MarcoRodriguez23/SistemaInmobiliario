<main>
    <div class="banner" id="bannerInmuebles">
    </div>
    <h4 class="introduccion">
        
    </h4>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/casa.svg" alt="inmuebles">
        </div>
        <div class="texto-principal">
            <p>
                La expansión de tu negocio o tu próxima oficina no pueden esperar más, recuerda que uno de nuestros asesores especializados en venta o renta de inmuebles siempre estará disponible para brindarte ayuda personalizada.
            </p>
        </div>
        
    </div>
    <div class="inmuebles contenedor">
    <?php foreach ($propiedades as $propiedad): ?>
        <?php foreach ($direcciones as $direccion): ?>
            <?php if($propiedad->tipoPropiedad == 1 && $propiedad->id === $direccion->id && $propiedad->status!=2): ?>
                <div class="plantilla">
                    <a href="/casa?id=<?php echo $propiedad->id; ?>">
                    <?php include 'propiedad.php'; ?>
                

            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>
