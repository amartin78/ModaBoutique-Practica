<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <link rel="stylesheet" type="text/css" href="estilos/informacion-producto.css">
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
                <!-- Información detallada del producto seleccionado desde la página del listado  -->
                <div id="contenedor-producto">
                    <div>
                        <div class="img-miniaturas">
                            <div><img src="" alt="frente" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="" alt="derecha" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="" alt="del revés" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="" alt="izquierda" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                        </div>
                        <div class="img-amplia">
                            <img src="img/slider/izquierda-circular.png" id="atras" alt="atras" onclick="sliderProducto(this)">
                            <img src="" alt="" id="imagen-ampliada" title="">
                            <img src="img/slider/derecha-circular.png" id="adelante"  alt="adelante" onclick="sliderProducto(this)">
                        </div>
                    </div>
                    <div class="detalle-producto">
                        <h2 id="marca"></h2>
                        <h3 id="descripcion"></h3>
                        <ul>
                            <li><img src="" alt="" class="estrella"></li>
                            <li><img src="" alt="" class="estrella"></li>
                            <li><img src="" alt="" class="estrella"></li>
                            <li><img src="" alt="" class="estrella"></li>
                            <li><img src="" alt="" class="estrella"></li>
                            <li><p id="valoracion"></p></li>
                        </ul>
                        <p id="precio"></p>
                        <ul>
                            <li id="color"></li>
                            <li><div class="color"></div></li>
                            <li><div class="color"></div></li>
                        </ul>
                        <div class="select-wrap">
                            <select id="talla"></select>
                        </div>
                        <ul>
                            <li><p>Envío a domicilio</p></li>
                            <li><p><input type="radio" name="entrega" value="envio-mismo-dia">Entrega en el mismo día por 3&nbsp;€</p></li>
                            <li><p><input type="radio" name="entrega" value="envio-dos-dias-despues">Entrega entre el lunes 5 y el miércoles 7 de septiembre por 2&nbsp;€</p></li>
                        </ul>
                        <ul>
                            <li><p>Recogida producto</p></li>
                            <li><p><input type="radio" name="entrega" value="recogida-en-tienda">Recogida en tienda GRATIS</p></li>
                            <li><p><input type="radio" name="entrega" value="click-recoger-punto">Click y recoger GRATIS</p></li>
                        </ul>

                        <button id="anadirCesta">AÑADIR A LA CESTA</button>

                    </div>
                </div>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript" src="js/funciones-comunes.js"></script>
        <script type="text/javascript" src="js/productos-listado.js"></script>
        <script type="text/javascript" src="js/informacion-producto.js"></script>
    </body>
</html>

