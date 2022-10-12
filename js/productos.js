let plantilla = document.createElement('template');
plantilla.innerHTML = `
    <style>
        p, ul
        {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        a, p {
            line-height: 1.3;
        }
        .producto {
            text-align: center;
            border: 1px solid #f2f2f2;
            margin-bottom: 2em;
            background-color: #f2f2f2;
        }
        .producto:hover {
            opacity: 0.6;
        }
        .producto a {
            text-decoration: none;
            color: inherit;
        }
        .producto img {
            width: 80%;
            padding: 1.6em 0;
            margin: 0 auto;
            background-color: #f2f2f2;
        }
        .descripcion-producto {
            padding: 1.4em 1.4em 0.8em;
            text-align: left;
            background-color: #fff;
        }
        .descripcion-producto li:first-child p {
            font-size: 1.4em;
            font-weight: bold;
            padding-bottom: 0.1em;
        }
        .descripcion-producto li:nth-child(3) p {
            font-size: 1.8em;
            padding: 1.1em 0 0.5em;

        }
        .descripcion-producto li:last-child {
            font-size: 0.8em;
        }
    </style>

    <article class="producto">
        <a id="informacion-producto">
            <img src="" title="" alt="">
            <div class="descripcion-producto">
                <ul>
                    <li><p id="marca"></p></li>
                    <li><p id="descripcion"></p></li>
                    <li><p id="precio"></p></li>
                    <li><p id="precioEnvio"></p></li>
                </ul>
            </div>
        </a>                                        
    </article>
`;

class Producto extends HTMLElement {

    codProducto;
    enlace;
    marca;
    descripcion;
    preciou;
    precioEnvio;
    imagen;

    constructor() {
        super();
        this.attachShadow({mode: 'open'});
        this.shadowRoot.appendChild(plantilla.content.cloneNode(true));
        
        this.codProducto = this.getAttribute("codProducto");
        this.marca = this.getAttribute("marca");
        this.descripcion = this.getAttribute("descripcion");
        this.precio = this.getAttribute("precio");
        this.precioEnvio = this.getAttribute("precioEnvio");
        this.imagen = this.getAttribute("imagen");

        this.shadowRoot.querySelector("#informacion-producto").href += "informacion-producto.php?" + this.codProducto;
        this.shadowRoot.querySelector("#marca").innerHTML = this.marca;
        this.shadowRoot.querySelector("#descripcion").innerHTML = this.descripcion;
        this.shadowRoot.querySelector("#precio").innerHTML = this.precio;
        this.shadowRoot.querySelector("#precioEnvio").innerHTML = this.precioEnvio;
        this.shadowRoot.querySelector("img").src = this.imagen;
        this.shadowRoot.querySelector("img").title = this.descripcion;
        this.shadowRoot.querySelector("img").alt = this.descripcion;
    }

    connectedCallback() {

    }

    disconnectedCallback() {

    }
}

window.customElements.define('producto-tarjeta', Producto);

