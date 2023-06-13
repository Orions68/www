function agregarTarea()
{
    const lista = document.getElementById('lista-tareas');
    const input = document.getElementById('nueva-tarea');
    const tarea = input.value.trim();

    if (tarea !== '')
    {
      const li = document.createElement('li');
      li.textContent = tarea;
      li.onclick = marcarCompletada;
      lista.appendChild(li);
      input.value = '';
    }
}

function marcarCompletada(event)
{
    const tarea = event.target;
    tarea.classList.toggle('completada');
}

function validarFormulario(event)
{
    event.preventDefault();
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();

    const expresionNombre = /^[A-Za-záéíóúüñÑ\s]+$/;
    // const expresionEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const expresionEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

    if (!expresionNombre.test(nombre))
    {
        mostrarError('Debe ingresar un nombre válido');
        return;
    }

    if (!expresionEmail.test(email))
    {
        mostrarError('Debe ingresar un correo electrónico válido');
        return;
    }

    // Resto del código para enviar el formulario al servidor
    mostrarError('');
    alert('Registro exitoso');
}

function mostrarError(mensaje)
{
    const mensajeError = document.getElementById('mensaje-error');
    mensajeError.textContent = mensaje;
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