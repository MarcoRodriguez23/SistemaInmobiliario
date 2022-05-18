<main>
    <div class="banner" id="bannerDepartamentos">
    </div>
        <div class="texto-principal-2">
            <h4>
                Tu siguiente departamento espera por ti, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte la mejor ayuda personalizada.
            </h4>
        </div>

        <div class="divisor">
        <hr class="hr-inmuebles">
        </div>
        
    <div class="inmuebles contenedor">
    <?php foreach ($propiedades as $propiedad): ?>
        <?php foreach ($direcciones as $direccion): ?>
            <?php if($propiedad->tipoPropiedad == "Departamento" && $propiedad->id === $direccion->id && $propiedad->status!='vendida'): ?>
                <div class="plantilla">
                    <a href="/departamento?id=<?php echo $propiedad->id; ?>">
                    <?php include 'propiedad.php'; ?>
                

            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>