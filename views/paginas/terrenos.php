 <main>
    <div class="banner" id="bannerTerrenos">
    </div>
    <h4 class="introduccion">
        
    </h4>
        <div class="texto-principal-2">
            <h4>
                Una de las mejores inversiones que podrías hacer está a solo un clic de distancia, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte ayuda personalizada.
            </h4>
        </div>

        <div class="divisor">
        <hr class="hr-inmuebles">
        </div>
        
    <div class="inmuebles contenedor">
    <?php foreach ($propiedades as $propiedad): ?>
        <div class="plantilla">
            <a href="/terreno?id=<?php echo $propiedad->id; ?>">
            <?php include 'propiedad.php'; ?>
            </a>
        </div>
    <?php endforeach; ?>
    </div><!--fin de inmubles -->
</main>
