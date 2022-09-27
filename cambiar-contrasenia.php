<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilos/reset.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-header.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-nav.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-index.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-registro-login.css">
        <link rel="stylesheet" type="text/css" href="estilos/estilos-footer.css">
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
                <!-- Formulario cambiar contraseña -->
                <div id="contenedor-cambio-contrasenia">
                    <h2>Cambiar contraseña</h2>
                    <form action="" name="cambio-contrasenia" method="">
                        <table>
                            <tr>
                                <td>
                                    <label>Correo electrónico</label>
                                    <input type="mail" name="email" placeholder="ejemplo@dominio.com">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="obtenerLink" value="Obtener link">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div>
                        <a href="iniciar-sesion.php">Volver a iniciar sesión</a>
                    </div>
                </div>
            </main>
            <?php
                include "includes/footer.php";
            ?>
        </div>
        <script type="text/javascript" src="js/funciones.js"></script>
    </body>
</html>