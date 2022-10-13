<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <link rel="stylesheet" type="text/css" href="estilos/cesta-compra.css">
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
                <!-- Detalle del producto añadido a la cesta -->
                <div id="list-products">
                    <article id="p1">
                        <div id="contenedor-producto">
                            <div class="contenedor-imagen">
                                <div class="marco-imagen">
                                    <img src="img/informacion-producto/mujer/vestido1.png" alt="Vestido ligero">
                                </div>
                            </div>
                            <div class="descripcion-producto-top">
                                <ul>
                                    <li><h3>DANSI</h3></li>
                                    <li><h4>Vestido ligero</h4></li>
                                    <li><p class="color"></p></li>
                                    <li><p>Talla mediana</p></li>
                                    <li><p>Recogida en tienda</p></li>
                                </ul>
                                <div class="select-wrap">
                                    <select name="cantidad">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="descripcion-producto-bottom">
                                <button name="eliminar">Eliminar</button>
                                <div>
                                    <p>39,26&nbsp;€</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article id="p2">
                        <div id="contenedor-producto">
                            <div class="contenedor-imagen">
                                <div class="marco-imagen">
                                    <img src="img/informacion-producto/hombre/camisa-polo1.png" alt="Camisa polo">
                                </div>
                            </div>
                            <div class="descripcion-producto-top">
                                <ul>
                                    <li><h3>DANSI</h3></li>
                                    <li><h4>Vestido ligero</h4></li>
                                    <li><p class="color"></p></li>
                                    <li><p>Talla mediana</p></li>
                                    <li><p>Recogida en tienda</p></li>
                                </ul>
                                <div class="select-wrap">
                                    <select name="cantidad">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="descripcion-producto-bottom">
                                <button name="eliminar">Eliminar</button>
                                <div>
                                    <p>39,26&nbsp;€</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article id="p3">
                        <div id="contenedor-producto">
                            <div class="contenedor-imagen">
                                <div class="marco-imagen">
                                    <img src="img/informacion-producto/belleza/botella1.png" alt="Camisa polo">
                                </div>
                            </div>
                            <div class="descripcion-producto-top">
                                <ul>
                                    <li><h3>DANSI</h3></li>
                                    <li><h4>Vestido ligero</h4></li>
                                    <li><p class="color"></p></li>
                                    <li><p>Talla mediana</p></li>
                                    <li><p>Recogida en tienda</p></li>
                                </ul>
                                <div class="select-wrap">
                                    <select name="cantidad">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="descripcion-producto-bottom">
                                <button name="eliminar">Eliminar</button>
                                <div>
                                    <p>39,26&nbsp;€</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Desglose del pago -->
                <div id="contenedor-desglose-pago">
                    <table>
                        <tr>
                            <td>
                                <h2>Total</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td>39,26&nbsp;€</td>
                        </tr>
                        <tr>
                            <td>Gastos de envío</td>
                            <td>0,00&nbsp;€</td>
                        </tr>
                        <tr>
                            <td>Total (IVA incluido)</td>
                            <td>39,26&nbsp;€</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button onclick="comprarProducto()">Comenzar la compra</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript" src="js/funciones-comunes.js"></script>
        <script type="text/javascript" src="js/cesta-compra.js"></script>
    </body>
</html>



