function calcula()
{
    let result = document.getElementById("result");
    let number = document.getElementById("number");
    result.innerHTML = squareRoot(number.value);
}


function squareRoot(n)
{
    let avg = (a, b) => (a + b) / 2, c = 1, b;

    for(let i = 0; i < 32; i++)
    {
        b = n / c;
        c = avg(b, c);
    }
    return c;
}