function calcula()
{
    let result = document.getElementById("result");
    let number = document.getElementById("number");
    result.innerHTML = squareRoot(number.value);
}


function squareRoot(n)
{
    n = parseFloat(n);
    if (n > 0)
    {
        let avg = (a, b) => (a + b) / 2, c = 1, b;

        for(let i = 0; i < 64; i++)
        {
            b = n / c;
            c = avg(b, c);
        }
        return c;
    }
    else
    {
        if (n == 0)
        {
            return n;
        }
        else
        {
            return "No existe la Raiz Cuadrada de un Número Negativo.";
        }
    }
}