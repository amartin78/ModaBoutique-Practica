<!DOCTYPE html>
<html>
    <head>
        <title>Moda Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            include "includes/estilos.php"
        ?>
        <link rel="stylesheet" type="text/css" href="estilos/contacto.css">
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
                <div id="contactar">
                    <form name="contacto" action="https://localhost/practica-pagina-wev/contacto.php" method="get" >
                        <h2>Contactar</h2>
                        <table>
                            <tr>
                                <td>
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" size="60" 
                                            placeholder="Nombre completo">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>E-mail</label>
                                    <input type="email" name="email" size="60"
                                            placeholder="ejemplo@dominio.com">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Dirección</label>
                                    <input type="text" name="direccion" size="60" 
                                        placeholder="Su domicilio actual">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Teléfono</label>
                                    <input type="tel" name="telefono" size="60" 
                                            placeholder="123456789"
                                            pattern="[0-9]{9}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Sexo&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="radio" name="sexo" value="mujer">Mujer&nbsp;
                                    <input type="radio" name="sexo" value="hombre">Hombre
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Motivo</label>
                                    <textarea name="motivo" cols="49" rows="6" 
                                                placeholder="En que podemos ayudarle"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="almacenar-datos" value="Si">
                                    Sí, estoy de acuerdo con que se almacenen mis datos.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="enviar" value="Enviar">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id="visitanos">
                    <h2>Visítanos</h2>
                    <div id="mapa-google">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.8182700440702!2d-3.7036067816554867!3d40.41690190000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422880a07d7dc7%3A0x694aee57da1dc679!2sPuerta%20del%20Sol%2C%20Madrid%2C%20Espa%C3%B1a!5e0!3m2!1ses!2suk!4v1661912760566!5m2!1ses!2suk" width="350" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="localizacion">
                        <h3>Estamos ubicados en: </h3>
                        <p>Puerta del Sol</p>
                        <p>28013 Madrid</p>
                        <p>Teléfono: 999-999999</p>
                    </div>
                    <div class="horario">
                        <h3>Horario de apertura </h3>
                        <p>De Lunes a Viernes:  9:00 - 21:00</p>
                        <p>Sábados y Domingos:  9:00 - 18:00</p>
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

