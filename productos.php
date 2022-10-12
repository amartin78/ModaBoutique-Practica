<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <link rel="stylesheet" type="text/css" href="estilos/lista-productos.css">
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
                <!-- Rejilla que contiene todos los productos dispuestos en 4 columnas y 3 filas  -->
                <div id="contenedor-productos"></div>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript">


/*********************************************************************************/

            // Datos para testeo
            let productos = {
                mujer: {
                    codProductos: [
                        "mod-muj-131", "mod-muj-132", "mod-muj-133", "mod-muj-134", 
                        "mod-muj-135", "mod-muj-136", "mod-muj-137", "mod-muj-138", 
                        "mod-muj-139", "mod-muj-140", "mod-muj-141", "mod-muj-142"
                    ],
                    prodDisponibles: 12,
                    marca: "Dansi",
                    descripcion: "Vestido ligero",
                    precios: [
                        29.32, 57.51, 98.32, 49.17, 118.23, 12.87, 
                        14.56, 65.12, 88.91, 29.56, 86.11, 78.32
                    ],
                    precioEnvio: "Envío por 2&nbsp;€",
                    imagen: "img/moda-mujer/vestido.png",
                },
                hombre: {
                    codProductos: [
                        "mod-hom-131", "mod-hom-132", "mod-hom-133", "mod-hom-134", 
                        "mod-hom-135", "mod-hom-136", "mod-hom-137", "mod-hom-138", 
                        "mod-hom-139", "mod-hom-140", "mod-hom-141", "mod-hom-142"
                    ],
                    prodDisponibles: 12,
                    marca: "Lacoste",
                    descripcion: "Camisa polo",
                    precios: [
                        79.32, 41.91, 18.82, 29.17, 102.73, 32.17, 
                        18.56, 35.42, 98.96, 79.21, 46.17, 68.92
                    ],
                    precioEnvio: "Envío por 3&nbsp;€",
                    imagen: "img/moda-hombre/camisa-polo.png",
                },
                belleza: {
                    codProductos: [
                        "mod-bel-131", "mod-bel-132", "mod-bel-133", "mod-bel-134", 
                        "mod-bel-135", "mod-bel-136", "mod-bel-137", "mod-bel-138", 
                        "mod-bel-139", "mod-bel-140", "mod-bel-141", "mod-bel-142"
                    ],
                    prodDisponibles: 12,
                    marca: "Don Algodón",
                    descripcion: "Fragancia aroma clásico 150 ml",
                    precios: [
                        99.32, 11.96, 67.12, 79.27, 215.38, 72.27, 
                        68.16, 45.21, 18.56, 69.21, 56.17, 111.97
                    ],
                    precioEnvio: "Envío Gratis",
                    imagen: "img/belleza/botella.png",
                }
            };

            var producto, precio;
            let busqueda = window.location.search.substr(1);
            let resultado = true;
            let contenedor = document.querySelector("#contenedor-productos");
            contenedor.innerHTML = "";
            if (busqueda === "mujer") {
                producto = productos["mujer"];
            } else if (busqueda === "hombre") {
                producto = productos["hombre"];
            } else if (busqueda === "belleza") {
                producto = productos["belleza"];
            } else {
                resultado = false;
                console.log("El parámetro de búsqueda recibido es incorrecto.");
            }
            if (resultado) {
                for (let i = 0; i < producto.prodDisponibles; i++) {
                    // Solo hay 12 precios por categoría de producto
                    if (i < 12) {
                        precio = String(producto.precios[i]).replace(',','.') + "&nbsp;€";
                    // Se asigna un precio por defecto sobrepasados los 12 productos
                    } else {
                        precio = "10,00&nbsp;€"
                    }
                    contenedor.innerHTML += 
                        `<producto-tarjeta codProducto="${producto.codProductos[i]}" marca="${producto.marca}" descripcion="${producto.descripcion}" precio="${precio}" 
                                          precioEnvio="${producto.precioEnvio}" imagen="${producto.imagen}">
                        </producto-tarjeta>`;
                }
            }

        </script>
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript" src="js/productos.js"></script>
    </body>
</html>

