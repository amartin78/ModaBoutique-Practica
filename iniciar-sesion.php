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
                <!-- Formulario iniciar sesión -->
                <div id="contenedor-inicio-sesion">
                    <h2>Iniciar sesión</h2>
                    <form action="" name="inicio-sesion" method="">
                        <table>
                            <tr>
                                <td>
                                    <label>Correo electrónico</label>
                                    <input type="mail" name="email" placeholder="ejemplo@dominio.com">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Contraseña</label>
                                    <input type="password" name="contrasenia" placeholder="Mínimo 6 caracteres">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="iniciarSesion" value="Iniciar sesión">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div>
                        <a href="cambiar-contrasenia.php" class="cambiarContrasenia">¿Cambiar contraseña?</a>
                        ¿Eres nuevo/a? <a href="crear-cuenta.php">Crear una cuenta</a>
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