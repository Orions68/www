function showWatch() // Función que muestra el reloj en pantalla.
{
    const watch = document.getElementById("reloj");
    const fecha = new Date();
    const horas = fecha.getHours().toString().padStart(2, 0);
    const mins = fecha.getMinutes().toString().padStart(2, 0);
    const secs = fecha.getSeconds().toString().padStart(2, 0);
    watch.textContent = `${horas}:${mins}:${secs}`;
}

function operate() // Función que calcula el perimetro o el area del rectangulo, verifica si los lados son mayores que 0 y si algún dato falta.
{
    const width = document.getElementById("width").value;
    const height = document.getElementById("height").value;
    const operation = document.getElementById("operation").value; // Obtengo los valores del alto, ancho y operación deseados.
    const result = document.getElementById("result"); // ID del h2 que mostrará el resultado.

    if (width != "" && height != "" && width > 0 && height > 0) // Si altura o ancho no están vacios o son mayores que 0.
    {
        if (operation == "0") // Si la operación seleccionada es 0.
        {
            result.innerHTML = width * 2 + height * 2 + " Metros"; // Calcula el perímetro y lo muestra en el h2 con ID result.
        }
        else // Si no.
        {
            if (operation == "1") // Si la operación seleccionada es 1.
            {
                result.innerHTML = width * height + " Metros Cuadrados"; // Calcula el área y la muestra en el h2 con ID result.
            }
            else // Si la operación no contenía ningún valor.
            {
                alert ("Parece que no has seleccionado la operación, espera que me concentro a ver si puedo leerte la mente, Verifica el reloj y si no pasa nada en 5 segundos intentalo de nuevo seleccionando una operación."); // Aviso con un alert.
            }
        }
    }
    else // Si los valores no son suficientes.
    {
        alert ("Parece que has dejado alguna casilla en blanco, o has escrito algún 0, debes escribir números a partir de 1 en ambas casillas."); // Muestro una alerta.
    }
}

function agregaPoli() // Función para agregar un polígono.
{
    let already = false;
    let none = true;
    const opciones = ["Triángulo", "Cuadrado", "Rectángulo", "Rombo", "Pentágono", "Hexágono", "Octógono", "Decágono"]; // Array de Polígonos.
    const lista = document.getElementById('lista-polis'); // Asigno a lista la ID de la lista-polis <ul>.
    const poli = document.getElementById('nuevo-poli'); // Asigno a input la ID del input nuevo-poli.
    const poligono = poli.value.trim(); // Hago un trim al valor del input nueva-tarea y se lo asigno a la constante tarea.

    if (poligono !== '') // Si poligono no está vacío.
    {
        for (i = 0; i < opciones.length; i++) // Hago un bucle al tamaño del array opciones
        {
            if (poligono != opciones[i]) // Si el contenido del input, poli es distinto al contenido del array opciones.
            {
                none = false; // none se pone a false, quiere decir que no hay ningún polígono en la lista con ese nombre.
            }
            else // Si hay una coincidencia.
            {
                none = true; // none se pone a true, el polígono fue seleccionado de la lista.
                break; // Rompo el bucle.
            }
        }
        if (none) // Si none está a true.
        {
            var list = lista.getElementsByTagName("li"); // Asigno a la variable list todos los <li> de la lista <ul>.
            for (i = 0; i < list.length; i++) // Hago un bucle a la cantidad de <li> que tiene la lista.
            {
                if (list[i].textContent == poligono) // Si el contenido de algún <li> es igual al contenido del input, poli.
                {
                    already = true; // Pongo already a true, quiere decir que el polígono ya está en la lista.
                }
            }
            if (!already) // Verifico si already está a false.
            {
                const li = document.createElement('li'); // Creo un elemento <li> de la lista.
                li.textContent = poligono; // Le asigno el polígono como contenido de texto.
                li.onclick = agregado; // Le agrego un evento onclik que llama a la función agregado.
                lista.appendChild(li); // Agrego a la lista <ul> el elemento <li> con appendChild().
                poli.value = ''; // Limpio el contenido del input.
            }
            else // Si no está a false.
            {
                alert("Ese Polígono ya está en la lista."); // Alerta el polígono ya fue agregado a la lista.
            }
        }
        else // Si no, none está a false.
        {
            alert("Ese Polígono no Está en la Lista. Por Favor Selecciona uno de la Lista para Agregarlo."); // Alerta, ese polígono no existe en la lista.
        }
    }
}

function agregado(click) // Función que tacha el nombre del polígono en la lista.
{
    const tarea = click.target; // Asigno a la constante tarea el objeto seleccionado en el evento onclick.
    tarea.classList.toggle('agregado'); // le cambia la clase y lo escribe tachado.
}

function sugerencia() // Función que muestra la lista de sugerencias según la letra escrita en el input para agregar polígonos.
{
    const opciones = ["Triángulo", "Cuadrado", "Rectángulo", "Rombo", "Pentágono", "Hexágono", "Octógono", "Decágono"]; // Array de Polígonos.

    const poli = document.getElementById("nuevo-poli").value.toLowerCase(); // Asigno a poli el contenido del input con ID nuevo-poli.
    const lista = document.getElementById("lista-sugeridos"); // Asigno a lista la lista UL con ID lista-sugeridos.

    lista.innerHTML = ""; // Limpio la lista.

    opciones.forEach(opcion => {
        if (opcion.toLowerCase().startsWith(poli))
        {
            const li = document.createElement("li");
            li.textContent = opcion;
            li.onclick = fillPoli; // Le agrego un evento onclick que llama a la función fillPoli.
            lista.appendChild(li);
        }
    });
}

function fillPoli(click) // Función que agrega el polígono seleccionado a la lista.
{
    const poli = document.getElementById("nuevo-poli");
    const lista = document.getElementById("lista-sugeridos"); // Asigno a lista la lista UL con ID lista-sugeridos.
    lista.innerHTML = ""; // Limpio la lista.
    poli.value = click.target.textContent;
}

function salute() // Función que llama el botón Chiste Final.
{
    alert("Uno que tiraron a los leones al ver aparecer al emperador dice: Ave César, los que van a morir te la sudan; y Julio César responde, encima de disléxico adivino y posteriormente bajo su dedo pulgar para ordenar que suelten a los leones."); // Muestra un mensaje que es el chiste de Julio César y los leones.
}