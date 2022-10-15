indice = 0;
buscar = document.getElementsByName("buscar")[0];

window.onload = function() {
    // Muestra el contenido del enlace de sesión en la cabecera
    if (JSON.parse(sessionStorage.getItem("sesionAbierta"))) {
        let nombre = JSON.parse(sessionStorage.getItem("usuarioEnSesion")).nombre;
        nombre = nombre[0].toUpperCase() + nombre.substring(1).toLowerCase();
        document.getElementById("sesion").innerHTML = "Hola " + nombre + 
                                                      "<span id=\"flecha\">&#8964;</span>";
    } else {
        document.getElementById("sesion").innerHTML = "Iniciar sesión";
    }
    let index = location.toString().lastIndexOf("/");
    let enlaceNavegador = location.toString().slice(index + 1, -4);
    // Elimina el margen inferior del navegador en la página principal dado que el siguiente
    // elemento es el slider con las imágenes grandes.
    if (enlaceNavegador === "" || enlaceNavegador === "index")
        document.getElementsByTagName("nav")[0].style.marginBottom = "0";
    // Mantiene el color de fondo para el enlace visitado en el navegador, excluye el
    // enlace referencias ubicado en el pie de página.
    if (enlaceNavegador === "")
        document.getElementsByName("index")[0].style.backgroundColor = "#e2e2bc";
        
    if (enlaceNavegador === "index" ||
        enlaceNavegador === "productos-belleza" || 
        enlaceNavegador === "contacto") {
            document.getElementsByName(enlaceNavegador)[0].style.backgroundColor = "#e2e2bc";
    }
    let busqueda = window.location.search.substring(1);
    if (busqueda === "mujer") {
        document.getElementsByName("productos-mujer")[0].style.backgroundColor = "#e2e2bc";
    } else if (busqueda === "hombre") {
        document.getElementsByName("productos-hombre")[0].style.backgroundColor = "#e2e2bc";
    } else if (busqueda === "belleza") {
        document.getElementsByName("productos-belleza")[0].style.backgroundColor = "#e2e2bc";
    }
    
    let usuarioEnSesion = JSON.parse(sessionStorage.getItem("usuarioEnSesion"));
    let numProductosCesta = JSON.parse(usuarioEnSesion.cestaProductos).length;

    if (JSON.parse(sessionStorage.getItem("sesionAbierta"))) {
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
        if (JSON.parse(sessionStorage.getItem("sesionAbierta"))) {
            sessionStorage.setItem("sesionAbierta", JSON.stringify(false));
            window.location.reload();
            window.location.href = "iniciar-sesion.php";
        }
    });
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






