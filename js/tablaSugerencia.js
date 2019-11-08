"use strict"
document.addEventListener("DOMContentLoaded", load);

let url = 'http://web-unicen.herokuapp.com/api/groups/g36/sugerencia/';

function load() {
    cargarTabla();
    document.querySelector(".enviarDatos").addEventListener("click", agregarItems);
    document.querySelector(".enviar3Datos").addEventListener("click", agregar3Items);
    document.querySelector(".filtro").addEventListener("keyup", filtrar);
}
function cargarTabla() {
    //ajax GET:pido los datos al servidor y recarga la tabla
    fetch(url)
        .then(response => response.json())
        .then(json => {
            let container = document.querySelector(".tablaCambiable");
            mostrarDatosTabla(container, json);
        })
        .catch(function (e) {
            console.log(e)
        })
}
//creo la  tabla de sugerencia
function mostrarDatosTabla(container, json) {
    container.innerHTML = "";
    for (let i = 0; i < json.sugerencia.length; i++) {
        //creo la variable valor para que quede mas prolijo al pedir el valor del servidor
        let valor = json.sugerencia[i];
        //arranca a crear la tabla
        let row = container.insertRow(0);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4Btn = row.insertCell(3);
        let cell5Btn = row.insertCell(4);
        //le pongo en el HTML el valor que tiene en el servidor de ese dato en la celda correspondiente
        cell1.innerHTML = valor.thing.deportes;
        cell2.innerHTML = valor.thing.sugerencias;
        cell3.innerHTML = valor.thing.facultad;
        //creo el boton editar, que va a llamar a la funcion editar para que haga el put 
        let btnEditar = document.createElement("button");
        btnEditar.innerHTML = "Editar";
        btnEditar.addEventListener("click", function () { editar(valor._id) });
        cell4Btn.appendChild(btnEditar);
        //creo el boton borrar, que va a llamar a la funcion borrar para que haga el delete
        let btnEliminar = document.createElement("button");
        btnEliminar.innerHTML = "Borrar Fila";
        cell5Btn.appendChild(btnEliminar);
        btnEliminar.addEventListener("click", function () { borrar(valor._id) });

    }
}
function agregarItems() {
    //se hace la carga de valores incertada en cada celda del form a la tabla con el value
    let deportes = document.querySelector(".deportes").value;
    let sugerencias = document.querySelector(".sugerencias").value;
    let facultad = document.querySelector(".facultad").value;
    //se crea el arreglo de la tabla
    let arrtabla = {
        "deportes": deportes,
        "sugerencias": sugerencias,
        "facultad": facultad
    }
    //le creamos una variable data para guardar nuestro arreglo en el objeto "thing"
    let data = {
        "thing": arrtabla
    }
    //ajax POST: le envio los datos cargados en el html al servidor.
    fetch(url, {
        'method': 'POST',
        'headers': { 'Content-Type': 'application/json' },
        'body': JSON.stringify(data),
    })
        .then(response => {
            if (response.ok) {
                cargarTabla()
            }
        })
        .catch(error => console.log(error))
}
//ajax DELETE: elimino los datos cargados en el servidor que seleccione en el html mediante el boton.
function borrar(id) {
    fetch(url + id, {
        'method': 'DELETE'
    })
        .then(response => {
            if (response.ok) {
                cargarTabla()
            }
        })
        .catch(error => console.log(error))
}
function editar(id) {
    //se hace la carga de valores incertada en cada celda del form a la tabla con el value
    let deportes = document.querySelector(".deportes").value;
    let sugerencias = document.querySelector(".sugerencias").value;
    let facultad = document.querySelector(".facultad").value;
    //se crea el arreglo de la tabla
    let arrtabla = {
        "deportes": deportes,
        "sugerencias": sugerencias,
        "facultad": facultad
    }
    //le creamos una variable data para guardar nuestro arreglo en el objeto "thing"
    let data = {
        "thing": arrtabla
    }
    fetch(url + id, {
        'method': 'PUT',
        'headers': { 'Content-Type': 'application/json' },
        'body': JSON.stringify(data),
    })
        .then(response => {
            if (response.ok) {
                cargarTabla();
            }
        })
}
function filtrar() {
    fetch(url)
        .then(response => response.json())
        .then(json => {
            console.log(json.sugerencia);
            let tabla = document.querySelector(".tablaCambiable");
            for (let i = 0; i < json.sugerencia.length; i++) {
                let h = json.sugerencia.length - 1; //cada vez que se inicia el FOR
                let p = json.sugerencia[i].thing.deportes;
                if (p.toUpperCase().indexOf(document.querySelector(".filtro").value.toUpperCase()) > -1) {
                    tabla.children[h - i].classList.remove("ocultarFila"); // h-i,para invertir el orden
                }
                else {
                    tabla.children[h - i].classList.add("ocultarFila"); //si no coinciden con la busqueda, se ocultan
                }
            }
        })
        .catch(function (e) {
            console.log(e)
        })
}
//llama a la funcion agregarItems 3 veces
function agregar3Items() {
    for (let i = 0; i < 3; i++) {
        agregarItems();
    }
}