function printIt(number) // Función que imprime la imagen en panatalla, recibe el numero de factura a imprimir.
{
    if (number != -1) // Si el numero que llega es distinto de -1.
    {
        var img = document.getElementById("img" + number); // Asigno a la variable img la ID del elemento img + numero de factura.
    }
    else // Si llega -1.
    {
        var img = document.getElementById("img0"); // Estoy viedo la última factura, es la imagen 0, Asigno a la variable img la ID del elemento img0.
    }
    const src = img.src; // Asigno a la constante src la imagen.
    const win = window.open(''); // Asigno a la constante win una nueva ventana abierta.
    win.document.write('<img src="' + src + '" onload="window.print(); window.close();">'); // Escribo en la ventana abierta un elemento img con la imagen a imprimir y la envía a la impresora y al terminar cierra la ventana.
}

function pdfDown(number) // Función para guardar la factura como PDF. Recibe el número de factura en caso que se estén viendo todas las facturas de una fecha.
{
    const image = document.getElementById("img" + number); // Div con ID img + el numero que recibe, contiene la imagen de la factura.

    var doc = new jsPDF(); // Crea un documento PDF nuevo con la Biblioteca jspdf.
    doc.addImage(image, 'png', 10, 10, 240, 60, '', 'FAST'); // Agrega la imagen en el elemento image con un tamaño de 230 * 50 dejando un margen de 10 Px., El modificador FAST hace el pdf pequeño.
    doc.save(); // Lo descarga en la carpeta Descargas con un nombre generico.
}

function prices(cont, howmany) // Función usada para agregar campos para facturar. Recibe la cantidad de artículos a agregar al formulario.
{
    let container = ""; // Declaro la variable container, vacia.
    if (cont == "R") // Si se llamó a la función desde el selector de cantidad de replacements
    {
        container = document.getElementById("rep_prices"); // Obtiene en la variable container la ID del div rep_prices
    }
    else // Si no se llamo desde el selector de cantidad de materiales.
    {
        container = document.getElementById("mat_prices"); // Obtiene en la variable container la ID del div mat_prices
    }
    container.innerHTML = ""; // Limpia el contenido del contenedor.

    for (i = 0; i < howmany; i++) // Hago un bucle a la cantidad de artículos a agregar.
    {
        const input = document.createElement("input"); // Crea un elemento HTML input.
        const label = document.createElement("label"); // Crea un elemento HTML label.
        const br = document.createElement("br"); // Crea un elemento HTML br.
        const br2 = document.createElement("br");
        
        const input2 = document.createElement("input"); // Crea un segundo elemento HTML input.
        const label2 = document.createElement("label"); // Crea un segundo elemento HTML label.
        const br3 = document.createElement("br");
        const br4 = document.createElement("br");
    
        input.name = "material" + i; // Al primero Input le pone el nombre material + el índice del bucle.
        input.type = "text"; // Lo hago de tipo text.
        if (cont == "R")
        {
            label.innerHTML = " Nombre del Insumo"; // A la primera label le asigno un texto.
        }
        else
        {
            label.innerHTML = " Nombre del Desechable"; // A la primera label le asigno un texto.
        }

        input2.name = "price" + i; // El segundo input es para el precio, lle asigno el nombre price + el índice del bucle.
        input2.type = "number"; // Lo hago de tipo number.
        input2.step = .1; // Le asigno un step de .1.
        if (cont == "R")
        {
            label2.innerHTML = " Precio del Insumo"; // Al label2 le asigno un texto.
        }
        else
        {
            label2.innerHTML = " Precio del Desechable"; // Al label2 le asigno un texto.
        }

        container.appendChild(input); // Agrego el input al contenedor.
        container.appendChild(label); // Agrego la label al contenedor.
        container.appendChild(br); // Agrego los br.
        container.appendChild(br2);

        container.appendChild(input2); // Hago lo nmismo con el input2, su label y sus br.
        container.appendChild(label2);
        container.appendChild(br3);
        container.appendChild(br4);
    }
}

function screen() // Establece el tamaño de las vistas en la pantalla.
{
    let view1 = document.getElementById("view1"); // Recoge las ID de todas las vistas.
    let view2 = document.getElementById("view2");
    let view3 = document.getElementById("view3");
    let view4 = document.getElementById("view4");

    views(view1); // Llamo a la función view() y le paso la vista, el tamaño de la vista y el tamaño disponible en la pantalla

    if (view2 != null) // Si existe el div view2
    {
        views(view2);
        if (view3 != null)
        {
            views(view3);
            if (view4 != null)
            {
                views(view4);
            }   
        }
    }
}

function views(view) // Función para dar el tamaño a las vistas de la pnatalla.
{
    let viewheight = window.innerHeight; // Obtiene el tamaño vertical de la pantalla.

    if (view.offsetHeight < viewheight) // Si el tamaño de la vista es menor que el tamaño disponible en la pantalla
    {
        view.style.height = viewheight + "px"; // Le doy a la vista todo el tamaño disponible en la pantalla.
    }
}

function resolution() // Esta función comprueba si el ancho de la pantalla es de Ordenador o de Móvil.
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

function goThere() // Cuando cambia el selector del menú para Móvil.
{
    var change = document.getElementById("change").value; // Change obtiene el valor en el selector.
    switch(change) // Hago un switch al valor recibido.
    {
        case "contact":
            window.open("contact.php", "_blank");
        break;
        case "view2":
            window.open("index.php#view2", "_self");
        break;
        case "view3":
            window.open("index.php#view3", "_self");
        break;
        default :
            window.open("index.php#view1", "_self");
    }
}

function changeit() // Función para la página de contacto.
{
    var button = document.getElementById("change"); // En la variable button obtengo la ID del input type submit change.
    var contact = document.getElementById("contact"); // En la variable contact obtengo el id del selector.
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var ph = document.getElementById("ph");
    var em = document.getElementById("em");

    if (contact.value != "") // Si el valor en el selector ha cambiado.
    {
        switch (contact.value) // Hago un switch al valor en el selector.
        {
            case "Teléfono":
                email.style.visibility = "hidden";
                phone.style.visibility = "visible";
                em.required = false;
                ph.required = true;
                ph.value = "";
                button.value = "Llámame!";
                break;
            case "Whatsapp":
                email.style.visibility = "hidden";
                phone.style.visibility = "visible";
                em.required = false;
                ph.required = true;
                ph.value = "";
                button.value = "Envíame un Watsapp";
                break;
            default:
                email.style.visibility = "visible";
                phone.style.visibility = "hidden";
                ph.required = false;
                ph.value = 1;
                em.required = true;
                button.value = "Espero tu E-mail";
                break;
        }
    }
}

function connect(how) // Función para enviar un Whatsapp a la tienda, para que se ponga en contacto con el cliente, recibe la forma de comunicación, Teléfono o E-mail.
{
    let mssg = document.getElementById('mssg').value;
    let num = +34664774821;
    if (how == "E-mail") // Esto es solo para que aparezca cpntactame a en lugar de al.
    {
        var win = window.open(`https://wa.me/${num}?text=Por Favor contactame por: ${how} a: ${mssg} Mi nombre es: `, '_blank');
    }
    else
    {
        var win = window.open('https://wa.me/' + num + '?text=Por Favor contactame por: ' + how + ' al: ' + mssg + ' Mi nombre es: ', '_blank');
    }
}

function capture(number) // Crea una imagen de la factura del cliente, para descargarla y enviarla por E-mail, Whatsapp, etc.
{
    const print = document.getElementById("printable" + number);
    const image = document.getElementById("image" + number); // Div con ID printable0, contiene la factura.

    html2canvas(print).then((canvas) => {
        const base64image = canvas.toDataURL('image/png'); // genera la imagen base64image a partir del contenido de print, el div que contiene la factura.
        image.setAttribute("href", base64image);
        const img = document.createElement("img");
        img.id = "img" + number;
        img.src = base64image;
        img.alt = "Factura: " + number;
        print.remove();
        image.appendChild(img);
    })
}

function sendDate(id, patient) // Esta función es llamada cuando se selecciona una fecha en el selector de fecha.
{
    let doc = document.getElementById("doc"); // Obtengo la ID del selector del profesional.
    let date = document.getElementById("date"); // Obtengo la ID del input type date.
    if (doc.value != "") // Si se seleccionó un Profesional.
    {
        let form = document.createElement("form"); // Creo un formulario.
        let input = document.createElement("input"); // Asigno a la variable input la creación de un input.
        let input1 = document.createElement("input"); // Asigno a la variable input1 la creación de un input.
        let input2 = document.createElement("input"); // Asigno a la variable input2 la creación de un input.
        let input3 = document.createElement("input"); // Asigno a la variable input3 la creación de un input.
        let input4 = document.createElement("input"); // Asigno a la variable input3 la creación de un input.

        const array = doc.value.split(",");

        form.action = ""; // Donde irá el formulario, en blanco a la misma página.
        form.method = "post"; // Por el método post.

        input.type = "hidden"; // Lo hago de tipo hidden, oculto.
        input.name = "doc_id"; // Le asigno el nombre username.
        input.value = array[0]; // Al input hidden le asigno el valor en la primera posición del array, la ID del Doctor.
        form.appendChild(input); // Lo agrego al formulario.

        input1.type = "hidden"; // Lo hago de tipo hidden, oculto.
        input1.name = "doc"; // Le asigno el nombre username.
        input1.value = array[1]; // Al input hidden le asigno el valor de la segunda posición del array, el Nombre del Doctor.
        form.appendChild(input1); // Lo agrego al formulario.

        input2.type = "hidden"; // Lo hago de tipo hidden, oculto.
        input2.name = "date"; // Le asigno el nombre username.
        input2.value = date.value; // Al input hidden le asigno el valor de la variable de javascript username, declarada en el script client.php.
        form.appendChild(input2); // Lo agrego al formulario.

        if (id != "")
        {
            input3.type = "hidden";
            input3.name = "id";
            input3.value = id; // Asigno al inpout el valor del nombre del paciente.
            form.appendChild(input3); // Lo agrego al formulario.
        }

        if (patient != "")
        {
            input4.type = "hidden";
            input4.name = "patient";
            input4.value = patient; // Asigno al inpout el valor del nombre del paciente.
            form.appendChild(input4); // Lo agrego al formulario.
        }

        document.body.appendChild(form); // Agreo el formulario al body.

        form.submit(); // Lo envío.
    }
    else // Si no se seleccionó un Profesional.
    {
        alert("Por Favor Selecciona un Profesional Primero. Gracias"); // Por favor, selecciona un prefesional.
        date.value = ""; // Vacio el contenido del selector de fecha.
    }
}

function verify()
{
    let dnielement = document.getElementById("dni");
    let dni = dnielement.value;
    var numero, letra, letras;
    var expresion_regular_dni = /^[XYZ]?\d{1,9}[A-Z]$/;

    if(expresion_regular_dni.test(dni) === true)
    {
        numero = dni.substr(0, dni.length - 1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);
        letra = dni.substr(dni.length - 1, 1);
        numero = numero % 23;
        letras = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letras = letras.substring(numero, numero + 1);
        if (letras != letra.toUpperCase())
        {
            toast(2, 'El D.N.I. o N.I.E. es Incorrecto', 'Verifica que los Números y la Letra o Letras Estén Bien.');
            return false;
        }
        else
        {
            return true;
        }
    }
    else
    {
        toast(2, 'El D.N.I. o N.I.E. es Incorrecto', 'Verifica que los Números y la Letra o Letras Estén Bien.');
        return false;
    }
}