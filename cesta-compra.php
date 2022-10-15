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
                <div id="list-productos">
                    <article class="p1">
                        <div id="contenedor-producto">
                            <p id="mensaje">Sin productos en la cesta</p>
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
                            <td id="subtotal"></td> 
                            <!-- 39,26&nbsp;€ -->
                        </tr>
                        <tr>
                            <td>Gastos de envío</td>
                            <td id="gastos-envio"></td>
                            <!-- 0,00&nbsp;€ -->
                        </tr>
                        <tr>
                            <td>Total (IVA incluido)</td>
                            <td id="total"></td>
                            <!-- 39,26&nbsp;€ -->
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
        <script type="text/javascript" src="js/productos-listado.js"></script>
        <script type="text/javascript" src="js/cesta-compra.js"></script>
    </body>
</html>



