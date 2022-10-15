function crearCuenta() {
    let nombre = document.getElementsByName("nombre")[0].value;
    let apellidos = document.getElementsByName("apellidos")[0].value;
    let fNacimiento = document.getElementsByName("fNacimiento")[0].value;
    let email = document.getElementsByName("email")[0].value;
    let contrasenia = document.getElementsByName("contrasenia")[0].value;
    let recibirPublicidad = document.getElementsByName("recibir-publicidad")[0].checked ? "si" : "no";

    usuario = {
        nombre: nombre,
        apellidos: apellidos,
        fechaNacimiento: fNacimiento,
        email: email,
        contrasenia: contrasenia,
        recibirPublicidad: recibirPublicidad,
        cestaProductos: JSON.stringify([]),
        totalProductosCesta: 0,
        subtotal: 0,
        totalEnvio: 0,
        total: 0,
    };

    // Si ya existe la colección de usuarios contiene al menos uno, entonces
    // almaceno el nuevo usuario en la siguiente posición
    if (JSON.parse(sessionStorage.getItem("usuarios"))) {
        let usuariosSesion = JSON.parse(sessionStorage.getItem("usuarios"));
        usuariosSesion[usuariosSesion.length] = usuario;
        sessionStorage.setItem("usuarios", JSON.stringify(usuariosSesion));
    // Si la colección de usuarios esta vacía entonces almaceno el nuevo 
    // usuario en la primera posición
    } else {
        sessionStorage.setItem("usuarios", JSON.stringify([usuario]));
    }
    let mensaje = "Hola " + usuario.nombre + "! Te has registrado como nuevo usuario. \n" + 
                  "Inicia sesión y accede a nuestras promociones.";
    alert(mensaje);
    window.location.href = "iniciar-sesion.php";
}

function iniciarSesion() {
    let email = document.getElementsByName("email")[0].value;
    let contrasenia = document.getElementsByName("contrasenia")[0].value;
    let usuarios = JSON.parse(sessionStorage.getItem("usuarios"));
    let indice = 0;
    while (usuarios && indice < usuarios.length) {
        if (email === usuarios[indice].email && contrasenia === usuarios[indice].contrasenia) {
            sessionStorage.setItem("sesionAbierta", JSON.stringify(true));
            sessionStorage.setItem("usuarioEnSesion", JSON.stringify(usuarios[indice]));
            let origen = window.location.search.substring(1);
            window.location.reload();
            if (origen === "cesta") {
                window.location.href = "pasarela-de-pago.php";
            } else {
                window.location.href = "index.php";
            }
            break;
        }
        indice++;
    }
    if (!usuarios) {
        console.log("No hay usuarios con los que comprobar el login.");
    }
    if (!JSON.parse(sessionStorage.getItem("sesionAbierta"))) {
        let mensaje = "Sus datos de identificación no son correctos.\n" + 
                      "Inténtelo de nuevo o cree una nueva cuenta.";
        alert(mensaje);
    }
}

