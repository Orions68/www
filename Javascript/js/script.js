// Funciones para elprimer ejercicio de Javascript

function agregarTarea() // El onclick del botón.
{
    const lista = document.getElementById('lista-tareas'); // Asigno a lista la ID de la lista <ul>.
    const input = document.getElementById('nueva-tarea'); // Asigno a input la ID del input nueva-tarea.
    const tarea = input.value.trim(); // Hago un trim al valor del input nueva-tarea y se lo asigno a la constante tarea.

    if (tarea !== '') // Si tarea no está vacía.
    {
      const li = document.createElement('li'); // Creo un elemento <li> de  la lista.
      li.textContent = tarea; // Le asigno la tarea como contenido de texto.
      li.onclick = marcarCompletada; // Le agrego un evento onclik que llama a la función marcarCompletada.
      lista.appendChild(li); // Agrego a la lista <ul> el elemento <li> con appendChild().
      input.value = ''; // Limpio el contenido del input.
    }
}

function marcarCompletada(event) // A la función marcarCompletada le paso el evento
{
    const tarea = event.target; // Asigno a la constante tarea el objeto seleccionado en el evento onclick.
    tarea.classList.toggle('completada'); // Cambio la clase del objeto seleccionado de la lista a la clase completada, que tacha el texto.
}


// Funciones para el segundo ejercicio de Javascript

function validarFormulario(event) // Validar Formulario es la función que llama el formulario al ser enviado pasándole el evento.
{
    event.preventDefault(); // La función prevent default evita que se ejecute la acción por defecto del evento
    const nombre = document.getElementById('nombre').value.trim(); // Asigno a la constante nombre el contenido del input con ID nombre haciendo trim para quitar los espacios del principio y/o el final.
    const email = document.getElementById('email').value.trim(); // Lo mismo con la constante email.

    const expresionNombre = /^[A-Za-záéíóúüñÑ\s]+$/; // La expresión regular para comprobar el nombre.
    // const expresionEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const expresionEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/; // La expresión regular para comprobar el email.

    if (!expresionNombre.test(nombre)) // Si el nombre no cumple la expresion regular expresionNombre.
    {
        mostrarError('Debe ingresar un nombre válido'); // Muestro el error en la función mostrarError.
        return; // Vuelve y sale de la función.
    }

    if (!expresionEmail.test(email)) // Si el email no cumple la expresion regular expresionEmail.
    {
        mostrarError('Debe ingresar un correo electrónico válido'); // Muestro el error en la función mostrarError.
        return; // Vuelve y sale de la función.
    }

    // Resto del código para enviar el formulario al servidor
    mostrarError(''); // Si toda ha ido bien, limpia el input con ID mensaje-error.
    alert('Registro exitoso'); // Muetra una alerta que el registro se ha efectuado satisfactoriamente.
}

function mostrarError(mensaje) // Función que muestra el mensaje de error en el input con ID mensaje-error, recibe el mensaje.
{
    const mensajeError = document.getElementById('mensaje-error'); // Asigno a la constante mensajeError el input con ID mensaje-error.
    mensajeError.textContent = mensaje; // Muetro el mensaje recibido en el input con ID mensaje-error.
}

function checkpass() // Esta función verifica que las contraseñas sean iguales.
{
    let pass = document.getElementById("pass1").value; // Asigno a la variable pass el valor en el input con ID pass1.
    let pass2 = document.getElementById("pass2").value; // Asigno a la variable pass2 el valor en el input con ID pass2.

    if (pass != pass2) // Si pass es diferente de pass2.
    {
        toast(1, "Las Contraseñas no Coinciden", "Has Escrito: " + pass + " y " + pass2); // Muestro un mensaje de error.
        return false; // Retorno false, el formulario no se envía.
    }
    else // Si son iguales
    {
        return true; // Retorno true se envía el formulario.
    }
}

function toast(warn, ttl, msg) // Función para mostrar el Dialogo con los mensajes de alerta, recibe, Código, Título y Mensaje.
{
    var alerta = document.getElementById("alerta"); // La ID del botón del dialogo.
    var title = document.getElementById("title"); // Asigno a la variable title el h4 con id title.
    var message = document.getElementById("message"); // Asigno a la variable message el h5 con id message;
    if (warn == 1) // Si el código es 1, es una alerta.
    {
        title.style.backgroundColor = "#000000"; // Pongo los atributos, color de fondo negro.
        title.style.color = "yellow"; // Y color del texto amarillo.
    }
    else if (warn == 0) // Si no, si el código es 0 es un mensaje satisfactorio.
    {
        title.style.backgroundColor = "#FFFFFF"; // Pongo los atributos, color de fondo blanco.
        title.style.color = "blue"; // Y el color del texto azul.
    }
    else // Si no, viene un 2, es una alerta de error.
    {
        title.style.backgroundColor = "#000000"; // Pongo los atributos, color de fondo negro.
        title.style.color = "red"; // Y color del texto rojo.
    }
    title.innerHTML = ttl; // Muestro el Título del dialogo.
    message.innerHTML = msg; // Muestro los mensajes en el diálogo.
    alerta.click(); // Lo hago aparecer pulsando el botón con ID alerta.
}

function screenSize() // Función para dar el tamaño máximo de la pantalla a las vistas.
{
    let view1 = document.getElementById("view1"); // view1 es la ID del div view1.
    let view2 = document.getElementById("view2");
    let view3 = document.getElementById("view3");
    let height = innerHeight; // innerHeight es el tamaño vertical de la pantalla.

    if (view1.offsetHeight < height) // Si el tamaño vertical de la vista es menor que el tamaño vertical de la pantalla.
    {
        view1.style.height = height + "px"; // Asigna a la vista el tamaño vertical de la pantalla.

        if (view2 != null) // Si existe el div view2
        {
            if (view2.offsetHeight < height)
            {
                view2.style.height = height + "px";
            }

            if (view3 != null)
            {
                if (view3.offsetHeight < height)
                {
                    view3.style.height = height + "px";
                }
            }
        }
    }
}

function screen() // Esta función comprueba si el ancho de la pantalla es de Ordenador o de Teléfono, ara los menues.
{
    let mobile = document.getElementById("mobile"); // Asigno a la variable mobile el elemento con ID mobile.
    let pc = document.getElementById("pc"); // Asigno a la variable pc el elemento con ID pc.
    let width = innerWidth; // innerWidth es el tamaño horizontal de la pantalla.
    if (width < 965) // Si el ancho es inferior a 965.
    {
        pc.style.visibility = "hidden"; // Oculta el menú de Ordenador
        mobile.style.visibility = "visible"; // Muestra el menú de Teléfono.
    }
    else // Si es mayor o igual a 965;
    {
        pc.style.visibility = "visible"; // Muestra el menú para Ordenador
        mobile.style.visibility = "hidden"; // Oculta el menú para Teléfono.
    }
    reloadPage();
}

function reloadPage() // Función que recarga la página después de 2 segundos si se modifica el tamaño horizontal.
{
    var currentDocumentTimestamp = new Date(performance.timing.domLoading).getTime(); // El tiempo que tarda la página en cargar, OjO! está obsoleto.
    var now = Date.now(); // Obtiene la fecha en milisegundos.
    var twoSec = 2 * 1000; // Declaro y asigo 2 segundos a la variable twoSec.
    var plusTwoSec = currentDocumentTimestamp + twoSec; // Declaro y agrego 2 segundos al tiempo que tardó en cargar la página en la variable plusTwoSec.
    if (now > plusTwoSec) // Si la fecha al cargar la página es mayor que el tiempo que tardó la página en cargar más 2 segundos.
    {
        location.reload(); // Recarga la página.
    }
}

function goThere() // Cuando cambia el selector del menú para Teléfono.
{
    var change = document.getElementById("change").value; // Change obtiene el valor en el selector.
    switch(change)
    {
        case "view3": // Si llega view3
            window.open("index.php#view3", "_self"); // Salta a la vista3.
            break;
        case "view2":
            window.open("index.php#view2", "_self"); // Salta a la vista2.
        break;
        default :
            window.open("index.php#view1", "_self"); // Salta a la vista1.
        break;
    }
}

function showEye(which) // Función para mostrar el ojo de los input de las contraseñas, recibe el número del elemento que contiene el ojo.
{
    let eye = document.getElementById("toggle" + which); // Asigno a eye la id del elemento que contiene el ojo.
    eye.style.visibility = "visible"; // Hago visible el elemento, el ojo.
}

function spy(which) // Función para el ojito de las Contraseñas al hacer click en el ojito, recibe el número de la ID del input de la password.
{
    const togglePassword = document.querySelector('#toggle' + which); // Asigno a la constante togglePassword el input con ID togglePassword + which.
    const password = document.querySelector('#pass' + which); // Asigno a password la ID del input con ID pass + which.
    
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password'; // Asigno a type el resultado de un operador ternario, si presiono el ojito y el tipo del input es password
    // lo cambia a text, si es text lo cambia a password.
    password.setAttribute('type', type); // Le asigno el atributo al input password.
    togglePassword.classList.toggle('fa-eye-slash'); // Cambia el aspecto del ojito, al cambiar el input a tipo texto, el ojo aparece con una raya.
}