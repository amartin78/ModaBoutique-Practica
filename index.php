<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
    </head>
    <body>
        <div id="contenedor">
            <?php
                include "includes/header.php";
            ?>
            <?php
                include "includes/nav.php";
            ?>
            <main>
                <!-- Resalta la cabecera para facilitar la búsqueda de un producto -->
                <div class="capa"></div>
                <!-- Slider -->
                <div class="slider">
                    <img src="img/slider/izquierda.png" id="atras" alt="atras" onclick="slider(this)">
                    <img src="img/slider/boutique1.webp" id="imagen-visible" alt="boutique" title="Boutique">
                    <img src="img/slider/derecha.png" id="adelante"  alt="adelante" onclick="slider(this)">
                </div>
                <article>
                    <div class="marca">
                        <img src="img/marcas/woman.webp" alt="woman">
                        <h2>ZARA</h2>
                        <p>
                            Todo un clásico de otoño - lo mejor
                        </p>
                        <a href="productos-mujer.php">Descubrir</a>
                    </div>
                    <div class="marca">
                        <img src="img/marcas/man.webp" alt="woman">
                        <h2>COLUMBIA</h2>
                        <p>
                            Descubre la nueva colección de otoño - invierno 2022
                        </p>
                        <a href="productos-hombre.php">Comprar</a>
                    </div>
                    <div class="marca">
                        <img src="img/marcas/perfume.webp" alt="woman">
                        <h2>HUGO BOSS</h2>
                        <p>
                            Inspirado en aromas naturales
                        </p>
                        <a href="productos-belleza.php">Descubrir</a>
                    </div>
                </article>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript" src="js/funciones.js"></script>
    </body>
</html>