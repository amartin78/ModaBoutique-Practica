<header>
    <div class="logo">
        <a href="index.php"><img src="img/cabecera/diamante.png"> <span>Moda Boutique</span></a>
    </div>
    <div class="buscador">
        <input type="text" id="buscar" name="buscar" size="40" placeholder="Buscar" 
               onfocus="resaltarCabecera()" onblur="normalizarCabecera()">
    </div>
    <div class="cuenta-cesta">
        <ul>
            <li><img src="img/cabecera/lupa.png" id="lupa" onclick="verCajaBusqueda()"></li>
            <li><a id="inicioSesion" href="iniciar-sesion.php"><img src="img/cabecera/usuario.png"> <span id="sesion"></span></a></li>
            <li><a href="cesta-compra.php"><span id="cesta-compra"></span> <img src="img/cabecera/cesta.png"></a></li>
        </ul>
    </div>
</header>
<div id="menu-sesion">
    <button id="cerrar">Cerrar sesión</button>
</div>
