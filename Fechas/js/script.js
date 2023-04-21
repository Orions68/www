function verify()
{
    let array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    let result = document.getElementById("result");
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var ok = false;

    switch (day)
    {
        case "31":
            if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12)
            {
                ok = true;
            }
            else
            {
                result.innerHTML = "Has puesto 31 días pero el mes seleccionado no tiene 31 días, tienes que cambiar algún número.";
                return false;
            }
            break;
        case "30":
            if (month == 4 || month == 6 || month == 9 || month == 11)
            {
                ok = true;
            }
            else
            {
                if (month == 2)
                {
                    result.innerHTML = "Has puesto 30 días pero el mes de Febrero solo tiene 29 días en años bisiestos o 28 días, tienes que cambiar algún número.";
                    return false;
                }
                else
                {
                    ok = true;
                }
            }
            break;
        case "29":
            if (month == 2 && year % 4 == 0)
            {
                ok = true;
            }
            else
            {
                if (month == 2 && year % 4 != 0)
                {
                    result.innerHTML = "Este Año no es bisiesto, Febrero solo tiene 28 días.";
                    return false;
                }
                else
                {
                    ok = true;
                }
            }
            break;
        default:
            ok = true;
    }
    if (ok)
    {
        result.innerHTML = `La Fecha Seleccionada es: ${day} de ${array[month - 1]} de ${year}`;
        return false;
    }
}