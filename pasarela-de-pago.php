<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <style>
            section {
                width: 30%;
                margin: 6em auto 8em;
            }
            section h2 {
                margin-bottom: 1em;
            }
            section a {
                display: block;
                text-decoration: none;
            }
            section a:hover {
                text-decoration: underline;
            }
            @media screen and (max-width: 520px) {
                section {
                    width: 50%;
                    margin: 4em auto 8em;
                }
            }
        </style>
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
                <section>
                    <div>
                        <h2>Se inicia el proceso de compra</h2>
                        <a href="cesta-compra.php">Volver</a>
                    </div>
                </section>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript" src="js/funciones-comunes.js"></script>
    </body>
</html>

