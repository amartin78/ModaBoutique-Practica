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
                <!-- Formulario crear cuenta -->
                <div id="contenedor-nueva-cuenta">
                    <h2>Crear cuenta</h2>
                    <form action="" name="crear-cuenta" method="">
                        <table>
                            <tr>
                                <td>
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" placeholder="Nombre">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Apellidos</label>
                                    <input type="text" name="apellidos" placeholder="Apellidos">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="fNacimiento" placeholder="dd/mm/aaaa">
                                </td>
                            </tr>
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
                                    <input type="checkbox" name="recibir-publicidad" value="Si"> 
                                       Me gustaría recibir información en mi correo electrónico acerca de 
                                       publicidad sobre sus productos.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="registrarse" value="Registrarse">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div>
                        ¿Tienes ya una cuenta? <a href="iniciar-sesion.php">Iniciar sesión</a>
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