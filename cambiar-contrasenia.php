<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <link rel="stylesheet" type="text/css" href="estilos/registro-login.css">
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
                                    <input type="reset" name="obtenerLink" value="Obtener link">
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
        <script type="text/javascript" src="js/funciones-comunes.js"></script>
    </body>
</html>