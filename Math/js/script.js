function get_root()
{
    let number = document.getElementById("number");
    let result1 = document.getElementById("result1");
    let result2 = document.getElementById("result2");
    let result3 = document.getElementById("result3");

    let value = number.value;
    result1.innerHTML = squareRoot(value);
    result2.innerHTML = sqrt(value);
    result3.innerHTML = mine(value);
}

function squareRoot(n) // Calcula la raiz cuadrada del número que le llega por parametro, llega como string.
{
    n = parseFloat(n); // Lo convierto a float, acepta número con decimales.
    if (n >= 0)
    {
        if (n == 0) return n;

        var avg = (a, b) => (a + b) / 2, c = 1, b; // Esta Formula suma los dos parametros y los divide en 2.

        for(let i = 0; i < 64; i++) // La presición tiene que ser de 64 bits (64 vueltas), cuando termina de contar sale y retorna el valor de la raiz cuadrada que estará en c.
        {
            b = n / c; // Asigna a b la división del número pasado para obtener la raiz cuadrada por c.
            c = avg(b, c); // Asigna a c el resultado de la formula (b + c) / 2;
        }
        return c; // Retorna c que contiene el valor obtenido de la raiz cuadrada.
    }
    else
    {
        return "No Existe la Raiz Cuadrada de un Número Negativo.";
    }
}

function sqrt(n) // Clacula la raiz cuadrada del número que le llega por parametro, llega como string, y en esta función no se convierte, consigue el mismo resultado, pero ejecuta muchas más operaciones .
{
    if (n >= 0)
    {
        if(n == 0) return n;

        let ans, absX = Math.abs(n);
        let tolerance = 0.00000001; // La tolerancia tiene que ser de 8 dígitos después de la coma.
        while(true)
        {
            ans = (n + absX / n) / 2;

            if(Math.abs(n - ans) < tolerance)
            {
                break; // Si la diferencia entre el valor que va obteniendo y el valor que calcula es menor que la tolerancia, sale del bucle.
            }

            n = ans;
        }
        return ans; // Retorna ans que contiene el valor obtenido de la raiz cuadrada.
    }
    else
    {
        return "No Existe la Raiz Cuadrada de un Número Negativo.";
    }
}

function mine(n) // Ojo n se pasa como string.
{
    let root = parseFloat(n); // Lo convierto a número float y se lo asigno a root.
    
    if (root >= 0)
    {
        if(root == 0) return n;
        let result;
        let value = root;
        let tolerance = .00000001;

        while (true)
        {
            result = (root + value / root) / 2; // La formula funciona igual si n es número o string.
            if(Math.abs(root - result) < tolerance)
            {
                break; // Si la diferencia entre el valor que va obteniendo y el valor que calcula es menor que la tolerancia, sale del bucle.
            }

            root = result;
        }
        return result; // Retorna ans que contiene el valor obtenido de la raiz cuadrada.
    }
    else
    {
        return "No Existe la Raiz Cuadrada de un Número Negativo.";
    }
}