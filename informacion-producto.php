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
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript">


/*********************************************************************************/

            let producto;
            let categoriaBusqueda = window.location.search.substr(5, 3);
            let codigoBusqueda = window.location.search.substr(1);

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
                    // Valoración media de usuarios sobre cada uno de los 12 productos 
                    // a testear. Se refleja en gráficamente con 5 estrellas.
                    valoracionMedia: [
                        4.5, 3.5, 1.5, 5, 2.5, 3, 4.5, 3.5, 4.5, 5, 3.5, 4.5
                    ],
                    // Número total de reseñas dadas por los clientes sobre cada uno 
                    // de los 12 productos a testear.
                    totalValoraciones: [
                        48, 152, 97, 8, 16, 968, 3, 84, 1, 42, 612, 1050
                    ],
                    precios: [
                        29.32, 57.51, 98.32, 49.17, 118.23, 12.87, 
                        14.56, 65.12, 88.91, 29.56, 86.11, 78.32
                    ],
                    colores: [
                        ['azul','rojo'], ['rojo'], ['azul','rojo'], ['azul','rojo'],
                        ['azul','rojo'], ['azul','rojo'], ['rojo'], ['rojo'],
                        ['azul','rojo'], ['rojo'], ['azul','rojo'], ['rojo']
                    ],
                    tallasDisponibles: [
                        ['s','m','xl'], ['xs','m','l'], ['xs','m','l'], ['xs','s','m','l','xl'],
                        ['m','l','xl'], ['xs','s','m','l','xl'], ['xs','s','m','l','xl'], ['s','m','l'],
                        ['xs','l','xl'], ['xs','m','l'], ['xs','s','m','l','xl'], ['s','m','l'],
                    ],
                    precioEnvio: "Envío por 2&nbsp;€",
                    imagen: "img/moda-mujer/vestido.png",
                    imgMiniatura: "img/informacion-producto/mujer/vestido.png"
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
                    // Valoración media de usuarios sobre cada uno de los 12 productos 
                    // a testear. Se refleja en gráficamente con 5 estrellas.
                    valoracionMedia: [
                        4.0, 4.5, 1.5, 3.5, 5, 4, 4.5, 1.5, 3.5, 2.5, 5, 4
                    ],
                    // Número total de reseñas dadas por los clientes sobre cada uno 
                    // de los 12 productos a testear.
                    totalValoraciones: [
                        98, 112, 47, 3, 126, 1134, 2, 64, 1, 32, 512, 23
                    ],
                    precios: [
                        79.32, 41.91, 18.82, 29.17, 102.73, 32.17, 
                        18.56, 35.42, 98.96, 79.21, 46.17, 68.92
                    ],
                    colores: [
                        ['naranja','azul-claro'], ['azul-claro'], ['naranja','azul-claro'], ['naranja','azul-claro'],
                        ['naranja','azul-claro'], ['naranja','azul-claro'], ['azul-claro'], ['azul-claro'],
                        ['naranja','azul-claro'], ['azul-claro'], ['naranja','azul-claro'], ['azul-claro']
                    ],
                    tallasDisponibles: [
                        ['xs','s','m','xl'], ['xs','m','l','xl'], ['xs','m','l'], ['xs','s','m','l','xl'],
                        ['xs','m','l','xl'], ['xs','s','m','l','xl'], ['xs','s','m','l','xl'], ['m','l'],
                        ['xs','l','xl'], ['xs'], ['xs','s','m','l','xl'], ['m','l'],
                    ],
                    precioEnvio: "Envío por 3&nbsp;€",
                    imagen: "img/moda-hombre/camisa-polo.png",
                    imgMiniatura: "img/informacion-producto/hombre/camisa-polo.png"
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
                    valoracion: 5,
                    valoraciones: 140,
                    // Valoración media de usuarios sobre cada uno de los 12 productos 
                    // a testear. Se refleja en gráficamente con 5 estrellas.
                    valoracionMedia: [
                        5, 4.5, 3.5, 2.5, 4, 3.5, 2.5, 3.5, 4.5, 5, 2.5, 4.5
                    ],
                    // Número total de reseñas dadas por los clientes sobre cada uno 
                    // de los 12 productos a testear.
                    totalValoraciones: [
                        108, 102, 91, 83, 116, 638, 2, 99, 4, 89, 796, 2050
                    ],
                    precios: [
                        99.32, 11.96, 67.12, 79.27, 215.38, 72.27, 
                        68.16, 45.21, 18.56, 69.21, 56.17, 111.97
                    ],
                    tamaniosDisponibles: [
                        ['50','100','150','200'], ['100','150'], ['50','100','150','200'], ['100','150','200'],
                        ['100','150','200'], ['50','100','150'], ['50','100','150','200'], ['50','100','150','200'],
                        ['50'], ['500','200'], ['50','100','150','200'], ['150','200']
                    ],
                    precioEnvio: "Envío Gratis",
                    imagen: "img/belleza/botella.png",
                    imgMiniatura: "img/informacion-producto/belleza/botella.png"
                }
            };
            // Guardamos el objeto cuya categoria coincide con la del producto buscado
            // en la página de productos
            for (categoria in productos) {
                categoriaTemp = categoria.substr(0, 3);
                if (categoriaBusqueda === categoriaTemp) {
                    producto = productos[categoria];
                }
            }
            // Guardamos la posición del valor del código de producto correspondiente
            // a la búsqueda para obtener valor de precio, valoracionMedia y totalValoraciones
            let posicion = 0;
            while (posicion < producto.codProductos.length) {
                if (codigoBusqueda === producto.codProductos[posicion]) {
                    break;
                }
                posicion++;
            }
            // Modificamos el enlace a las imágenes pequeñas de la página para que coincidan
            // con la ruta adecuada
            let enlace;
            for (let i = 0; i < 4; i++) {
                enlace = producto.imgMiniatura;
                enlace = enlace.substr(0, enlace.length-4) + (i + 1) + enlace.substr(-4);
                document.getElementsByClassName("img-pequeña")[i].src = enlace;
            }
            let valoracion = producto.valoracionMedia[posicion];
            estrellas = valorEstrellas(valoracion);
            estrellasLlenas = estrellas[0]; 
            for (let i = 0; i < estrellasLlenas; i++) {
                document.getElementsByClassName("estrella")[i].src = "img/informacion-producto/estrella-entera.png";
                document.getElementsByClassName("estrella")[i].alt = "estrella entera";
                document.getElementsByClassName("estrella")[i].title = "estrella entera";
            }
            estrellasMitad = estrellas[1];
            if (estrellasMitad > 0) {
                document.getElementsByClassName("estrella")[estrellasLlenas].src = "img/informacion-producto/estrella-mitad.png";
                document.getElementsByClassName("estrella")[estrellasLlenas].alt = "estrella mitad";
                document.getElementsByClassName("estrella")[estrellasLlenas].title = "estrella mitad";
            }
            estrellasVacias = estrellas[2];
            for (let i = (estrellasLlenas + estrellasMitad); i < 5; i++) {
                document.getElementsByClassName("estrella")[i].src = "img/informacion-producto/estrella-vacia.png";
                document.getElementsByClassName("estrella")[i].alt = "estrella vacía";
                document.getElementsByClassName("estrella")[i].title = "estrella vacía";
            }
            // Se pintan los colores disponibles para el producto seleccionado
            if (categoriaBusqueda !== "bel") {
                let colores = producto.colores[posicion];
                document.getElementById("color").innerHTML = "Color&nbsp;&nbsp;";
                for (let i = 0; i < colores.length; i++) {
                    document.getElementsByClassName("color")[i].className += " " + colores[i];
                }
            } else {
                let elem = document.querySelector("ul:nth-of-type(2)");
                document.querySelector(".detalle-producto").removeChild(elem);
                document.querySelector(".select-wrap").style.marginTop = "0.4em";
                document.querySelector(".detalle-producto ul:nth-of-type(2) li").style.display = "block";
            }
            // Se cargan los menús de talla y tamaño
            let opt = document.createElement("option");
            if (categoriaBusqueda === "bel") {
                let tamanios = producto.tamaniosDisponibles[posicion];
                tamanio = document.getElementById("talla");
                opt.value = " ";
                opt.innerHTML = "Elige un tamaño";
                tamanio.appendChild(opt);
                for (let i = 0; i < tamanios.length; i++) {
                    opt = document.createElement("option");
                    opt.value = tamanios[i];
                    opt.innerHTML = tamanios[i] + "&nbsp;ml";
                    tamanio.appendChild(opt);
                }
            } else {
                talla = document.getElementById("talla");
                let tallas = producto.tallasDisponibles[posicion];
                opt.value = " ";
                opt.innerHTML = "Elige una talla";
                talla.appendChild(opt);
                for (let i = 0; i < tallas.length; i++) {
                    opt = document.createElement("option");
                    opt.value = tallas[i];
                    opt.innerHTML = tallas[i].toUpperCase();
                    talla.appendChild(opt);
                }
            }
            let resenia = remplazarPuntoComa(producto.valoracionMedia[posicion]) + "&nbsp;&nbsp;(" + 
                          remplazarPuntoComa(producto.totalValoraciones[posicion]) + ")";
            let precio = remplazarPuntoComa(producto.precios[posicion]) +
                         "&nbsp;€&nbsp;&nbsp;IVA incluido";
            document.getElementById("imagen-ampliada").src = producto.imagen;
            document.getElementById("imagen-ampliada").alt = producto.descripcion;
            document.getElementById("imagen-ampliada").title = producto.descripcion;
            document.getElementById("marca").innerHTML = producto.marca;
            document.getElementById("descripcion").innerHTML = producto.descripcion;
            document.getElementById("valoracion").innerHTML = resenia;
            document.getElementById("precio").innerHTML = precio;

            // Esta función recibe la valoracion media de los usuarios y devuelve un array con
            // el número de estrellas llenas, a la mitad y vacias que se renderizarán
            function valorEstrellas(valoracionMedia) {
                // console.log(valoracionMedia);
                let llena, mitad, vacia;
                llena = Math.floor(valoracionMedia);
                mitad = Math.ceil(valoracionMedia - llena);
                vacia = Math.floor(5 - valoracionMedia);
                // console.log(llena + " " + mitad + " " + vacia);
                return [llena, mitad, vacia];
            }
            // Esta función sustituye el punto decimal por una coma
            function remplazarPuntoComa(cifra) {
                cifra = String(cifra).replace('.',',');
                return cifra;
            }
            // Esta función crea un slider para visualizar las imágenes 
            // relacionadas al producto seleccionado
            function sliderProducto(elemento) {
                imagenes = new Array();
                switch(categoriaBusqueda) {
                    case "muj":
                        categoria = "mujer";
                        producto = "vestido";
                        break;
                    case "hom":
                        categoria = "hombre";
                        producto = "camisa-polo";
                        break;
                    case "bel":
                        categoria = "belleza";
                        producto = "botella";
                        break;
                }
                imagenes[0] = "img/informacion-producto/" + categoria + "/" + producto + "1.png";
                imagenes[1] = "img/informacion-producto/" + categoria + "/" + producto + "2.png";
                imagenes[2] = "img/informacion-producto/" + categoria + "/" + producto + "3.png";
                imagenes[3] = "img/informacion-producto/" + categoria + "/" + producto + "4.png";
                if (elemento.id === "atras" && indice > 0) {
                    indice--;
                    document.getElementById("imagen-ampliada").src = imagenes[indice];
                } 
                if (elemento.id === "adelante" && indice < 3) {
                    indice++;
                    document.getElementById("imagen-ampliada").src = imagenes[indice];
                }
            }

            // ###########################################################################

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

