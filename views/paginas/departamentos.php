<main>
    <div class="banner" id="bannerDepartamentos">
    </div>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/departamentos.svg" alt="departamentos">
        </div>
        <div class="texto-principal">
            <p>
                Tu siguiente departamento espera por ti, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte la mejor ayuda personalizada.
            </p>
        </div>
        
    </div>
    <div class="inmuebles contenedor">
    <?php foreach ($propiedades as $propiedad): ?>
        <?php foreach ($direcciones as $direccion): ?>
            <?php if($propiedad->tipoPropiedad == 2 && $propiedad->id === $direccion->id && $propiedad->status!=2): ?>
                <div class="plantilla">
                    <a href="/departamento?id=<?php echo $propiedad->id; ?>">
                    <?php include 'propiedad.php'; ?>
                

            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>