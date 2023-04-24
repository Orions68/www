var already = false;

function verify()
{
    if (!already)
    {
        let array_month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        let array_day = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        let result = document.getElementById("result");
        let extra = document.getElementById("extra");
        let date_verify = document.getElementById("date_verify");
        let day = document.getElementById("day").value;
        let month = document.getElementById("month").value;
        let year = document.getElementById("year").value;
        let dy = document.getElementById("day");
        let mth = document.getElementById("month");
        let yr = document.getElementById("year");
        let ok = false;

        switch (day)
        {
            case "31":
                if (month != 2 && month != 4 && month != 6 && month != 9 && month != 11)
                {
                    ok = true;
                }
                else
                {
                    toast(1, "Error en el Número de Día",  "Has puesto 31 días pero el mes seleccionado no tiene 31 días, tienes que cambiar algún número.");
                    return false;
                }
                break;
            case "30":
                if (month == 2)
                {
                    toast (1, "Error en el Número de Día", "Has puesto 30 días pero el mes de Febrero solo tiene 29 días en años bisiestos o 28 días, tienes que cambiar algún número.");
                    return false;
                }
                else
                {
                    ok = true;
                }
                break;
            case "29":
                if (month != 2)
                {
                    ok = true;
                }
                else
                {
                    if (year % 4 == 0 && year % 100 != 0)
                    {
                        ok = true;
                    }
                    else
                    {
                        if (year % 400 == 0)
                        {
                            ok = true;
                        }
                        else
                        {
                            result.innerHTML = "Este Año no es bisiesto, Febrero solo tiene 28 días.";
                            return false;
                        }
                    }
                }
                break;
            default:
                ok = true;
        }
        if (ok)
        {
            dy.readOnly = true;
            mth.readOnly = true;
            yr.readOnly = true;
            var dt = new Date(year, month - 1, day);
            var my_day = dt.getDay();
            let month_name = document.createElement("input");
            let day_name = document.createElement("input");

            month_name.name = "month_name";
            month_name.type = "hidden";
            month_name.value = array_month[month - 1];
            extra.appendChild(month_name);

            day_name.name = "day_name";
            day_name.type = "hidden";
            day_name.value = array_day[my_day];
            extra.appendChild(day_name);

            result.innerHTML = `La Fecha Seleccionada es: ${array_day[my_day]} ${day} de ${array_month[month - 1]} de ${year}`;
            date_verify.value = "Almacena la Fecha en la Base de Datos.";
            date_verify.className = "btn btn-danger btn-lg";
            already = true;
            return false;
        }
    }
    else
    {
        return true;
    }
}

function checkpass()
{
    let pass = document.getElementById("pass1").value;
    let pass2 = document.getElementById("pass2").value;
    if (pass != pass2)
    {
        toast(1, "Las Contraseñas no Coinciden", "Has Escrito: " + pass + " y " + pass2);
        return false;
    }
    else
    {
        return true;
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
    let height = window.innerHeight; // window.innerHeight es el tamaño vertical de la pantalla.

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

function screen() // Esta función comprueba si el ancho de la pantalla es de Ordenador o de Teléfono.
{
    let mobile = document.getElementById("mobile");
    let pc = document.getElementById("pc");
    let width = innerWidth;
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
}

function goThere() // Cuando cambia el selector del menú para Teléfono.
{
    var change = document.getElementById("change").value; // Change obtiene el valor en el selector.
    switch(change)
    {
        case "view3":
            window.open("index.php#view3", "_self");
            break;
        case "view2":
            window.open("index.php#view2", "_self");
        break;
        default :
            window.open("index.php#view1", "_self");
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