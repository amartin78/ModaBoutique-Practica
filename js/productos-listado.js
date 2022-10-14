let productos = {
    mujer: {
        codProductos: [
            "mod-muj-131", "mod-muj-132", "mod-muj-133", "mod-muj-134", 
            "mod-muj-135", "mod-muj-136", "mod-muj-137", "mod-muj-138", 
            "mod-muj-139", "mod-muj-140", "mod-muj-141", "mod-muj-142"
        ],
        prodDisponibles: 12,
        marca: "Dansi",
        descripcion: "Vestido ligero",
        // Valoración media de usuarios sobre cada uno de los 12 productos 
        // a testear. Se refleja en gráficamente con 5 estrellas.
        valoracionMedia: [
            4.5, 3.5, 1.5, 5, 2.5, 3, 4.5, 3.5, 4.5, 5, 3.5, 4.5
        ],
        // Número total de reseñas dadas por los clientes sobre cada uno 
        // de los 12 productos a testear.
        totalValoraciones: [
            48, 152, 97, 8, 16, 968, 3, 84, 1, 42, 612, 1050
        ],
        precios: [
            29.32, 57.51, 98.32, 49.17, 118.23, 12.87, 
            14.56, 65.12, 88.91, 29.56, 86.11, 78.32
        ],
        colores: [
            ['azul','rojo'], ['rojo'], ['azul','rojo'], ['azul','rojo'],
            ['azul','rojo'], ['azul','rojo'], ['rojo'], ['rojo'],
            ['azul','rojo'], ['rojo'], ['azul','rojo'], ['rojo']
        ],
        tallasDisponibles: [
            ['s','m','xl'], ['xs','m','l'], ['xs','m','l'], ['xs','s','m','l','xl'],
            ['m','l','xl'], ['xs','s','m','l','xl'], ['xs','s','m','l','xl'], ['s','m','l'],
            ['xs','l','xl'], ['xs','m','l'], ['xs','s','m','l','xl'], ['s','m','l'],
        ],
        // precioEnvio: "Envío por 2&nbsp;€",
        precioEnvioMismoDia: 2,
        precioEnvioADosDias: 1,
        imagen: "img/moda-mujer/vestido.png",
        imgMiniatura: "img/informacion-producto/mujer/vestido.png"
    },
    hombre: {
        codProductos: [
            "mod-hom-131", "mod-hom-132", "mod-hom-133", "mod-hom-134", 
            "mod-hom-135", "mod-hom-136", "mod-hom-137", "mod-hom-138", 
            "mod-hom-139", "mod-hom-140", "mod-hom-141", "mod-hom-142"
        ],
        prodDisponibles: 12,
        marca: "Lacoste",
        descripcion: "Camisa polo",
        valoracionMedia: [
            4.0, 4.5, 1.5, 3.5, 5, 4, 4.5, 1.5, 3.5, 2.5, 5, 4
        ],
        totalValoraciones: [
            98, 112, 47, 3, 126, 1134, 2, 64, 1, 32, 512, 23
        ],
        precios: [
            79.32, 41.91, 18.82, 29.17, 102.73, 32.17, 
            18.56, 35.42, 98.96, 79.21, 46.17, 68.92
        ],
        colores: [
            ['naranja','azul-claro'], ['azul-claro'], ['naranja','azul-claro'], ['naranja','azul-claro'],
            ['naranja','azul-claro'], ['naranja','azul-claro'], ['azul-claro'], ['azul-claro'],
            ['naranja','azul-claro'], ['azul-claro'], ['naranja','azul-claro'], ['azul-claro']
        ],
        tallasDisponibles: [
            ['xs','s','m','xl'], ['xs','m','l','xl'], ['xs','m','l'], ['xs','s','m','l','xl'],
            ['xs','m','l','xl'], ['xs','s','m','l','xl'], ['xs','s','m','l','xl'], ['m','l'],
            ['xs','l','xl'], ['xs'], ['xs','s','m','l','xl'], ['m','l'],
        ],
        // precioEnvio: "Envío por 3&nbsp;€",
        precioEnvioMismoDia: 3,
        precioEnvioADosDias: 2,
        imagen: "img/moda-hombre/camisa-polo.png",
        imgMiniatura: "img/informacion-producto/hombre/camisa-polo.png"
    },
    belleza: {
        codProductos: [
            "mod-bel-131", "mod-bel-132", "mod-bel-133", "mod-bel-134", 
            "mod-bel-135", "mod-bel-136", "mod-bel-137", "mod-bel-138", 
            "mod-bel-139", "mod-bel-140", "mod-bel-141", "mod-bel-142"
        ],
        prodDisponibles: 12,
        marca: "Don Algodón",
        descripcion: "Fragancia aroma clásico",
        valoracion: 5,
        valoraciones: 140,
        valoracionMedia: [
            5, 4.5, 3.5, 2.5, 4, 3.5, 2.5, 3.5, 4.5, 5, 2.5, 4.5
        ],
        totalValoraciones: [
            108, 102, 91, 83, 116, 638, 2, 99, 4, 89, 796, 2050
        ],
        precios: [
            99.32, 11.96, 67.12, 79.27, 215.38, 72.27, 
            68.16, 45.21, 18.56, 69.21, 56.17, 111.97
        ],
        tamaniosDisponibles: [
            ['50','100','150','200'], ['100','150'], ['50','100','150','200'], ['100','150','200'],
            ['100','150','200'], ['50','100','150'], ['50','100','150','200'], ['50','100','150','200'],
            ['50'], ['500','200'], ['50','100','150','200'], ['150','200']
        ],
        precioEnvioMismoDia: 0,
        precioEnvioADosDias: 0,
        imagen: "img/belleza/botella.png",
        imgMiniatura: "img/informacion-producto/belleza/botella.png"
    }
};