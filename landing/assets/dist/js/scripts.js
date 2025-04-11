function muestra_oculta(id){
	if (document.getElementById){ //se obtiene el id
		var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
		el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
		var ci = document.getElementById('botonabre'); //se define la variable "ci" igual a nuestro div
		ci.style.display = (ci.style.display == 'inline') ? 'none' : 'inline'; //damos un atributo display:none que oculta el div
		
	}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
	muestra_oculta('formulario');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}

const $nombre = document.querySelector("#nombre"), // los 3 input
    $telefono = document.querySelector("#telefono")
    $btnEnviar = document.querySelector("#btnEnviar"), // El botón que envía el formulario
    $respuesta = document.querySelector("#respuesta"); // el div que muestra mensajes

// Agregar listener al botón
$btnEnviar.addEventListener("click", () => {
    // Poner un estado de "enviando"
    var miElto = document.getElementsByClassName("borra")[0];
    miElto.className = "alert alert-success";
    $respuesta.textContent = "Datos Enviados Correctamente.";
    // Armar objeto con datos
    const datos = {
        nombre: $nombre.value,
        telefono: $telefono.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("./procesar.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos
        })
        .then(respuestaCodificada => respuestaCodificada.json()) // Decodificar JSON que nos responde PHP
        .then(respuestaDecodificada => {
            // Aquí ya tenemos la respuesta lista para ser procesada
            $respuesta.textContent = respuestaDecodificada;
        });
});
