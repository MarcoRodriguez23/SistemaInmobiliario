 <main>
    <div class="banner" id="bannerTerrenos">
    </div>
    <div class="container-xl">
        <h4 class="textoDorado">
            Una de las mejores inversiones que podrías hacer está a solo un clic de distancia, recuerda que uno de nuestros asesores especializados en venta o renta de departamentos siempre estará disponible para brindarte ayuda personalizada.
        </h4>            
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
