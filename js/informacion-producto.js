let producto;
let categoriaBusqueda = window.location.search.substring(5, 8);
let codigoBusqueda = window.location.search.substring(1);

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

