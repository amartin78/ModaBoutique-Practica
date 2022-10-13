function comprarProducto() {
    let sesionAbierta = sessionStorage.getItem("sesionAbierta");
    if (sesionAbierta === "true") {
        window.location.href = "./pasarela-de-pago.php";
    } else {
        console.log("Debe de autenticarse para comprar un producto");
        window.location.href = "./iniciar-sesion.php?cesta";
    }
}

for (let i=0; i<3; i++) {
    document.getElementsByName("eliminar")[i].onclick = function() {
        cestaCompra = localStorage.getItem("cestaCompra");
        if (cestaCompra > 0) {
            cestaCompra--;
            localStorage.setItem("cestaCompra", cestaCompra);
            document.getElementById("cesta-compra").innerHTML = cestaCompra;
        }
    };
}
