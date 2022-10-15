window.onload = function() {

    // Muestra el contenido del enlace de sesión en la cabecera
    if (sessionStorage.getItem("sesionAbierta") === "true") {
        // document.getElementById("sesion").innerHTML = "Cerrar sesión";
        let nombre = JSON.parse(sessionStorage.getItem("usuarioEnSesion")).nombre;
        nombre = nombre[0].toUpperCase() + nombre.substring(1).toLowerCase();
        document.getElementById("sesion").innerHTML = "Hola " + nombre + 
                                                      "<span id=\"flecha\">&#8964;</span>";
    } else {
        document.getElementById("sesion").innerHTML = "Iniciar sesión";
    }

    let cestaProductos;
    let usuarioEnSesion = JSON.parse(sessionStorage.getItem("usuarioEnSesion"));
    let usuarios = JSON.parse(sessionStorage.getItem("usuarios"));
    let indice = 0;
    let indice2 = 0;
    while (usuarios && indice < usuarios.length) {
        // console.log(usuarios[indice].email + " " + 
        //             usuarios[indice].contrasenia + " " +
        //             usuarios[indice].cestaProductos);

        if (usuarioEnSesion.email === usuarios[indice].email && 
            usuarioEnSesion.contrasenia === usuarios[indice].contrasenia) {
                cestaProductos = JSON.parse(usuarioEnSesion.cestaProductos);
                if (cestaProductos.length > 0) {
                    document.getElementById("list-productos").innerHTML = "";
                    for (let i = 0; i < cestaProductos.length; i++, indice2++) {
                        imprimirFichaProd(cestaProductos[i], indice2);
                    }
                } 
                break;
        }
        indice++;
    }

    let numProductosCesta = JSON.parse(usuarioEnSesion.cestaProductos).length;
    if (sessionStorage.getItem("sesionAbierta") === "true") {
        // Se actualiza el número de productos próximo al icono cesta en la cabecera
        document.getElementById("cesta-compra").innerHTML = numProductosCesta;
        
        document.getElementById("inicioSesion").onmouseover = function() {
            document.getElementById("menu-sesion").style.display = "block";
        };
        document.getElementById("menu-sesion").onmouseleave = function() {
            document.getElementById("menu-sesion").style.display = "none";
        };  
    } else {
        document.getElementById("cesta-compra").innerHTML = 0;
    }
    document.querySelector("#menu-sesion button").addEventListener("click", function() {
        if (sessionStorage.getItem("sesionAbierta")) {
            sessionStorage.setItem("sesionAbierta", "false");
            window.location.reload();
            window.location.href = "iniciar-sesion.php";
        }
    });

    let plantilla = document.createElement("template");
    plantilla.innerHTML = `
        <style>
            h1, h2, h3, h4, h5, h6, p, ul
            {
                margin: 0;
                padding: 0;
                list-style: none;
            }
            a, p {
                line-height: 1.3;
            }
            #contenedor-producto, #contenedor-desglose-pago {
                margin: 1.2em 0;
                background-color: white;
            }
            #contenedor-producto {
                display: grid;
                grid-template-columns: 15% 80%;
                grid-template-rows: 70% 16%;
                justify-content: space-between;
                align-content: space-between;
            }
            .contenedor-imagen {
                grid-row: 1 / span 2;
                width: 100%;
                padding: 4%;
            }
            .p1, .p2 {
                display: block;
            }
            .contenedor-imagen img {
                background-color: #f2f2f2;
                width: 100%;
            }
            .descripcion-producto-top {
                margin-top: 3%;
            }
            .descripcion-producto-top,
            .descripcion-producto-bottom {
                margin-right: 3%;
            }
            .descripcion-producto-top ul, 
            .descripcion-producto-bottom button {
                float: left;
            }
            .descripcion-producto-top .select-wrap,
            .descripcion-producto-bottom div  {
                float: right;
            }
            .marco-imagen {
                background-color: #f2f2f2;
                padding: 4% 2%;
            }
            .descripcion-producto-top h3 {
                margin-bottom: 4%;
            }
            .descripcion-producto-top h4 {
                margin-bottom: 3%;
            }
            .descripcion-producto-top .select-wrap {
                width: 30%;
                padding: 0.3em;
                text-align: center;
                border: 1px solid black;
            }
            .descripcion-producto-top select {
                width: 100%;
                border: none;
                font-size: 1.05em;
                outline: none;
                cursor: pointer;
            }
            #eliminar {
                width: fit-content;
                cursor: pointer;
                border: none;
                background-color: white;
                padding: 0;
            }
            #eliminar:hover {
                text-decoration: underline;
            }
            @media screen and (max-width: 1440px) {
                #contenedor-producto {
                    grid-template-columns: 20% 75%;
                }
                .marco-imagen {
                    padding: 4% 2%;
                }
            }
            @media screen and (max-width: 1024px) {
                .marco-imagen {
                    padding: 40% 2%;
                }
                #contenedor-desglose-pago button {
                    font-size: 0.95em;
                }
            }
            @media screen and (max-width: 768px) {
                #contenedor-producto {
                    grid-template-columns: 30% 65%;
                }
                .descripcion-producto-top .select-wrap {
                    padding: 0;
                    font-size: 0.9em;
                }
                #contenedor-desglose-pago button {
                    font-size: 0.7em;
                }
            }
            @media screen and (max-width: 600px) {
                #contenedor-producto {
                    grid-template-columns: 56% 40%;
                }
                .marco-imagen {
                    padding: 20% 2%;
                }
                .descripcion-producto-top ul, 
                .descripcion-producto-bottom button,
                .descripcion-producto-top .select-wrap,
                .descripcion-producto-bottom div {
                    float: none;
                }
                .descripcion-producto-top .select-wrap {
                    width: 80%;
                    margin-top: 8%;
                }
                .descripcion-producto-bottom {
                    display: flex;
                    flex-direction: column-reverse;
                    margin-bottom: 1em;
                }
            }
            @media screen and (max-width: 480px) {
                main {
                    display: block;
                }
                article {
                    margin-bottom: 0.2em;
                }
                #contenedor-producto, #contenedor-desglose-pago {
                    margin: 0.15em 0;
                }
                .marco-imagen {
                    padding: 20% 2%;
                }
                .descripcion-producto-top ul, 
                .descripcion-producto-bottom button,
                .descripcion-producto-top .select-wrap,
                .descripcion-producto-bottom div {
                    float: none;
                }
                .descripcion-producto-top .select-wrap {
                    width: 80%;
                    margin-top: 8%;
                }
                .descripcion-producto-bottom {
                    display: flex;
                    flex-direction: column-reverse;
                    margin-bottom: 1em;
                }
            }
        </style>
        <article class="p1">
            <div id="contenedor-producto">
                <div class="contenedor-imagen">
                    <div class="marco-imagen">
                        <img src="" alt="" title="">
                    </div>
                </div>
                <div class="descripcion-producto-top">
                    <ul>
                        <li><h3 id="marca"></h3></li>
                        <li><h4 id="descripcion"></h4></li>
                        <li><p class="color"></p></li>
                        <li><p  id="medida"></p></li>
                        <li><p id="entrega"></p></li>
                    </ul>
                    <div class="select-wrap">
                        <select id="cantidad" class="seleccion">
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
                    <button id="eliminar">Eliminar</button>
                    <div>
                        <p id="precio"></p>
                    </div>
                </div>
            </div>
        </article>
    `;

    class FichaProducto extends HTMLElement {
        enlaceImg;
        marca;
        descripcion;
        color;
        medida;
        entrega;
        cantidad;
        precio;
        indice3;

        constructor() {
            super();
            this.attachShadow({mode: "open"});
            this.shadowRoot.appendChild(plantilla.content.cloneNode(true));

            this.enlaceImg = this.getAttribute("imagen");
            this.marca = this.getAttribute("marca");
            this.descripcion = this.getAttribute("descripcion");
            this.medida = this.getAttribute("medida");
            this.entrega = this.getAttribute("entrega");
            this.precio = this.getAttribute("precio");
            this.precioEnvio = this.getAttribute("precioEnvio");
            this.recogida = this.getAttribute("precioEnvio");
            this.indice = this.getAttribute("indice");

            this.shadowRoot.querySelector(".marco-imagen img").src = this.enlaceImg;
            this.shadowRoot.querySelector("img").title = this.descripcion;
            this.shadowRoot.querySelector("img").alt = this.descripcion;
            this.shadowRoot.querySelector("#marca").innerHTML = this.marca;
            this.shadowRoot.querySelector("#descripcion").innerHTML = this.descripcion;
            this.shadowRoot.querySelector("#medida").innerHTML = this.medida;
            this.shadowRoot.querySelector("#entrega").innerHTML = this.entrega;
            this.shadowRoot.querySelector("#precio").innerHTML = this.precio;

            this.shadowRoot.querySelector(".seleccion").addEventListener("change", function(event) {
                alert("valor " + event.target.value);
                // console.log("cesta cantidad " + cestaProductos[17][3]);
            });
        }
        connectedCallback() {
            console.log("Se añade elemento ");
        }
        disconnectedCallback() {
            
        }
    }
    window.customElements.define('producto-ficha', FichaProducto);
}
// Esta función imprime en la página una ficha con los datos del producto recibido
// como parámetro
function imprimirFichaProd(compra, i) {

    let codigo = compra[0];
    let medida = compra[1].toLowerCase();
    let entrega = compra[2];
    let categoria = codigo.substring(4, 7);

    switch (medida) {
        case "xs":
            medida = "Talla extra pequeña";
            break;
        case "s":
            medida = "Talla pequeña";
            break;
        case "m":
            medida = "Talla mediana";
            break;
        case "l":
            medida = "Talla grande";
            break;
        case "xl":
            medida = "Talla extra grande";
            break;
        case "50":
            medida = "Tamaño de 50&nbsp;ml";
            break;
        case "100":
            medida = "Tamaño de 100&nbsp;ml";
            break;
        case "150":
            medida = "Tamaño de 150&nbsp;ml";
            break;
        case "200":
            medida = "Tamaño de 200&nbsp;ml";
            break;
        default:
            medida = "";
    }

    let contenedor = document.querySelector("#list-productos");
    let resultado = true;
    if (categoria === "muj") {
        producto = productos["mujer"];
    } else if (categoria === "hom") {
        producto = productos["hombre"];
    } else if (categoria === "bel") {
        producto = productos["belleza"];
    } else {
        resultado = false;
        console.log("El parámetro de búsqueda recibido es incorrecto.");
    }

    let precioEnvio;
    switch (entrega) {
        case 1:
            precioEnvio = producto.precioEnvioMismoDia;
            precioEnvio = precioEnvio === 0 ? " gratis" : "por " + precioEnvio + "&nbsp;€"
            entrega = "Envío mismo día " + precioEnvio;
            break;
        case 2:
            precioEnvio = producto.precioEnvioADosDias;
            precioEnvio = precioEnvio === 0 ? " gratis" : "por " + precioEnvio + "&nbsp;€"
            entrega = "Envío en dos días " + precioEnvio;
            break;
        case 3:
            entrega = "Recogida en tienda gratis"
            break;
        case 4:
            entrega = "Click recoger punto de venta gratis"
            break;
        default:
            entrega = "";
    }

    if (resultado) {
        let posicion;
        for (let i = 0; i < producto.prodDisponibles; i++) {   
            if (codigo === producto.codProductos[i]) {
                posicion = i;
            }
        }
        // Solo hay 12 precios por categoría de producto
        if (posicion < 12) {
            precio = String(producto.precios[posicion]).replace(',','.') + "&nbsp;€";
        // Se asigna un precio por defecto sobrepasados los 12 productos
        } else {
            precio = "10,00&nbsp;€"
        }
        contenedor.innerHTML += 
            `<producto-ficha indice="${i}" codProducto="${codigo}" marca="${producto.marca}" descripcion="${producto.descripcion}" 
                            medida="${medida}" entrega="${entrega}" precio="${precio}" imagen="${producto.imagen}">
            </producto-ficha>`;
    }
}

function comprarProducto() {
    let sesionAbierta = sessionStorage.getItem("sesionAbierta");
    if (sesionAbierta === "true") {
        window.location.href = "./pasarela-de-pago.php";
    } else {
        alert("Debe de autenticarse para comprar un producto");
        window.location.href = "./iniciar-sesion.php?cesta";
    }
}

// Este método elimina un producto del usuario en sesión y actualiza el número 
// mostrado al lado del icono cesta compra en la cabecera. Se comprueba que positivo.
function eliminarProducto(codProducto) {
    // for (let i=0; i<3; i++) {
    //     document.getElementsByName("eliminar")[i].onclick = function() {
    //         cestaCompra = localStorage.getItem("cestaCompra");
    //         if (cestaCompra > 0) {
    //             cestaCompra--;
    //             localStorage.setItem("cestaCompra", cestaCompra);
    //             document.getElementById("cesta-compra").innerHTML = cestaCompra;
    //         }
    //     };
    // }
}

function actualizarImporte(elem) {
    // const selectElement = document.getElementsByClassName('.cantidad');
    console.log("selects num " + elem.value);

// selectElement.addEventListener = ("click", (event) => {
//     console.log(event.target.value);
// });
}

function actualizarCestaIcono() {

}



