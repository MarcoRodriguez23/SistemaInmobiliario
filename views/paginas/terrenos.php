 <main>
    <div class="banner" id="bannerTerrenos">
    </div>
    <h4 class="introduccion">
        
    </h4>
    <div class="contenedor principal-der">
        <div class="imagen-principal">
            <img loading="lazy" src="build/img/dimensiones.svg" alt="terrenos">
        </div>
        <div class="texto-principal">
            <p>
                Una de las mejores inversiones que podrías hacer está a solo un clic de distancia, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte ayuda personalizada.
            </p>
        </div>
        
    </div>
    <div class="inmuebles contenedor">
    <?php foreach ($propiedades as $propiedad): ?>
        <?php foreach ($direcciones as $direccion): ?>
            <?php if($propiedad->tipoPropiedad == 3 && $propiedad->id === $direccion->id && $propiedad->status!=2): ?>
                <div class="plantilla">
                    <a href="/casa?id=<?php echo $propiedad->id; ?>">
                    <?php include 'propiedad.php'; ?>
                

            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>
