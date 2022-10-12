indice = 0;
tipoProductos = [["vestido1", "vestido2"], ["camisa1", "camisa2"], ["colonia1", "colonia2"]];
buscar = document.getElementsByName("buscar")[0];

if (localStorage.getItem("cestaCompra")) {
    document.getElementById("cesta-compra").innerHTML = localStorage.getItem("cestaCompra");
} else {
    localStorage.setItem("cestaCompra", 0);
}

function origen(nameElement) {
    localStorage.setItem("origen", nameElement);
}

window.onload = function(event) {
    let index = location.toString().lastIndexOf("/");
    let enlaceNavegador = location.toString().slice(index + 1, -4);
    // alert(enlaceNavegador);
    // Mantiene el color de fondo para el enlace visitado en el navegador, excluye el
    // enlace referencias ubicado en el pie de página.
    if (enlaceNavegador === "")
        document.getElementsByName("index")[0].style.backgroundColor = "#e2e2bc";
        
    if (enlaceNavegador === "index" ||
        enlaceNavegador === "productos-belleza" || 
        enlaceNavegador === "contacto")
        document.getElementsByName(enlaceNavegador)[0].style.backgroundColor = "#e2e2bc";

        if (window.location.search == "?mujer") {
            document.getElementsByName("productos-mujer")[0].style.backgroundColor = "#e2e2bc";
        } else if (window.location.search == "?hombre") {
            document.getElementsByName("productos-hombre")[0].style.backgroundColor = "#e2e2bc";
        }

    // Elimina el margen inferior del navegador en la página principal dado que el siguiente
    // elemento es el slider con las imágenes grandes.
    if (enlaceNavegador === "" || enlaceNavegador === "index")
        document.getElementsByTagName("nav")[0].style.marginBottom = "0";
};

window.addEventListener("scroll", function() {
    buscar.onblur();  
});

buscar.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        this.onblur();
    }
});

function resaltarCabecera() {

    /* Opaca la ventana excepto la parte de la cabecera para resaltar la búsqueda
       cuando el usuario pone el foco en la caja */
    document.getElementsByClassName("capa")[0].style.display = "block";
}

function normalizarCabecera() {

    /* Revierte el estilo de la ventana a su estado anterior cuando el campo de búsqueda
       pierde el foco. 
       Para tablets y móviles se vuelve a mostrar el logo, la cuenta y la cesta de compra
       y se oculta la caja de búsqueda para diseño responsive. */
    document.getElementsByClassName("capa")[0].style.display = "none";

    if (document.getElementsByClassName("logo")[0].style.display == "none") {
        document.getElementsByName("buscar")[0].style.display = "none";
        document.getElementsByClassName("buscador")[0].style.margin = "revert";
        document.getElementsByClassName("logo")[0].style.display = "block";
        document.getElementsByClassName("cuenta-cesta")[0].style.display = "block";
    }
}

function verCajaBusqueda() {

    /* En móviles y tablets se oculta el logo, la lupa, la cuenta y la cesta y 
    se muestra la caja de búsqueda para diseño responsive. */
    document.getElementsByName("buscar")[0].style.display = "block";
    document.getElementsByName("buscar")[0].style.width = "60vw";
    document.getElementsByName("buscar")[0].focus();
    document.getElementsByClassName("buscador")[0].style.margin = "auto";
    document.getElementsByClassName("logo")[0].style.display = "none";
    document.getElementsByClassName("cuenta-cesta")[0].style.display = "none";
}

function slider(elemento) {

    /* Recibe un botón como argumento (atras o adelante) y asigna como imagen principal
       a la especificada en una ruta dentro del directorio. Dicha ruta se encuentra en 
       el array imagenes en la posicion con valor igual a indice.  */
    imagenes = new Array();
    imagenes[0] = "img/slider/boutique1.webp";
    imagenes[1] = "img/slider/boutique2.webp";
    imagenes[2] = "img/slider/boutique3.webp";
    imagenes[3] = "img/slider/boutique4.webp";

    if (elemento.id === "atras" && indice > 0) {
        indice--;
        document.getElementById("imagen-visible").src = imagenes[indice];
    } 
    
    if (elemento.id === "adelante" && indice < 3) {
        indice++;
        document.getElementById("imagen-visible").src = imagenes[indice];
    }
}




