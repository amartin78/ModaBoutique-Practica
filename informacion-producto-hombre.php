<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilos/reset.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-header.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-nav.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-index.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-informacion-producto.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-footer.css">
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
                            <div><img src="img/informacion-producto/hombre/camisa-polo1.png" alt="frente" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="img/informacion-producto/hombre/camisa-polo2.png" alt="derecha" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="img/informacion-producto/hombre/camisa-polo3.png" alt="del revés" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                            <div><img src="img/informacion-producto/hombre/camisa-polo4.png" alt="izquierda" onmouseover="ampliarImagen(this);" 
                                      onmouseout="revertirImagen(this);" class="img-pequeña"></div>
                        </div>
                        <div class="img-amplia">
                            <img src="img/slider/izquierda-circular.png" id="atras" alt="atras" onclick="sliderProducto(this)">
                            <img src="img/informacion-producto/hombre/camisa-polo1.png" alt="frente" id="imagen-ampliada">
                            <img src="img/slider/derecha-circular.png" id="adelante"  alt="adelante" onclick="sliderProducto(this)">
                        </div>
                    </div>
                    <div class="detalle-producto">
                        <h2>LACOSTE</h2>
                        <h3>Camisa polo</h3>
                        <ul>
                            <li><img src="img/informacion-producto/estrella-entera.png" alt="estrella blanca"></li>
                            <li><img src="img/informacion-producto/estrella-entera.png" alt="estrella blanca"></li>
                            <li><img src="img/informacion-producto/estrella-entera.png" alt="estrella blanca"></li>
                            <li><img src="img/informacion-producto/estrella-entera.png" alt="estrella blanca"></li>
                            <li><img src="img/informacion-producto/estrella-vacia.png" alt="estrella blanca"></li>
                            <li><p>4,0&nbsp;&nbsp;(86)</p></li>
                        </ul>
                        <p>24,76&nbsp;€&nbsp;&nbsp;IVA incluido</p>
                        <ul>
                            <li>Color: </li>
                            <li><div class="color azul-claro"></div></li>
                            <li><div class="color naranja"></div></li>
                        </ul>
                        <div class="select-wrap">
                            <select name="talla">
                                <option value="" selected>Elige una talla</option>
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                            </select>
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
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript">
            function ampliarImagen(foto) {
                document.getElementById("imagen-ampliada").src = foto.src;
                foto.style.border = "1px solid black";
            }
            function revertirImagen(foto) {
                foto
                .style.border = "none";
            }
            var codigo = "h-camisa-001";
            var color = "azul";
            var talla = "l";
            sessionStorage.setItem("codigo", codigo);
            sessionStorage.setItem("color", color);
            sessionStorage.setItem("talla", talla);

            cestaCompra = localStorage.getItem("cestaCompra");
            document.getElementById("anadirCesta").onclick = function () {
                cestaCompra++;
                localStorage.setItem("cestaCompra", cestaCompra);
                document.getElementById("cesta-compra").innerHTML = cestaCompra;
            };
        </script>
    </body>
</html>