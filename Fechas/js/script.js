function verify()
{
    let array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; // Array de los Meses.
    let result = document.getElementById("result"); // H3 donde se verá el resultado.
    var day = document.getElementById("day").value; // Input tipo number para el día.
    var month = document.getElementById("month").value; // Input tipo number para el mes.
    var year = document.getElementById("year").value; // Input tipo number para el año.
    var ok = false; // Booleano para comprobar que la fecha es correcta.

    switch (day) // Switch a day.
    {
        case "31": // Para el caso 31.
            if (month != 2 && month != 4 && month != 6 && month != 9 && month != 11) // Compruebo que month no sea Febrero, Abril, Junio, Septiembre ni Noviembre.
            {
                ok = true; // Si son los demás meses ok es true.
            }
            else // Si no.
            {
                result.innerHTML = "Has puesto 31 días pero el mes seleccionado no tiene 31 días, tienes que cambiar algún número.";
                return false; // Aviso que el día 3 no corresponde al mes selecionado.
            }
            break;
        case "30": // Para el caso 30.
                if (month == 2) // Si el mes es el 2(Febrero).
                {
                    result.innerHTML = "Has puesto 30 días pero el mes de Febrero solo tiene 29 días en años bisiestos o 28 días, tienes que cambiar algún número.";
                    return false; // Aviso que el día 3 no corresponde al mes selecionado.
                }
                else // Si no.
                {
                    ok = true; // ok es true.
                }
            break;
        case "29": // Para el caso 29.
            if (month == 2 && year % 4 == 0 && year != 1900) // Si estoy en el mes 2 y el modulo del mes es cero y el año no es 1900.
            {
                ok = true; // ok es true, es un año bisiesto.
            }
            else // Si no.
            {
                if (month == 2) // Si el mes es el 2.
                {
                    result.innerHTML = "Este Año no es bisiesto, Febrero solo tiene 28 días, Cambia algún valor.";
                    return false; // Aviso que el día 3 no corresponde al mes selecionado.
                }
                else // Si no.
                {
                    ok = true; // ok es true, todos los meses tienes 29 días ecepto febrero cuando no es bisiesto.
                }
            }
            break;
        default:
            ok = true; // SI entra cualquier otro días de 1 a 28 ok es true.
    }
    if (ok) // Si ok está a true.
    {
        result.innerHTML = `La Fecha Seleccionada es: ${day} de ${array[month - 1]} de ${year}`; // Muestra la fecha.
        return false; // Return false se usa para que el formulario no se envíe.
    }
}