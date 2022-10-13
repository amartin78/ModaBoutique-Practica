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
                <!-- Formulario crear cuenta -->
                <div id="contenedor-nueva-cuenta">
                    <h2>Crear cuenta</h2>
                    <form name="crear-cuenta" method="post">
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
                                    <input type="checkbox" name="recibir-publicidad" value="si"> 
                                       Me gustaría recibir información en mi correo electrónico acerca de 
                                       publicidad sobre sus productos.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="reset" name="registrarse1" value="Registrarse" onclick="crearCuenta()">
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
        <script type="text/javascript" src="js/funciones-comunes.js"></script>
        <script type="text/javascript" src="js/registro-login.js"></script>
    </body>
</html>