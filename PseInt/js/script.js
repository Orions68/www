function calculate()
{
    let input = document.getElementById("1");
    let input2 = document.getElementById("2");
    let result = document.getElementById("result");

    result.innerHTML = "El resultado de la Multiplicación es: " + input.value * input2.value;
    return false;
}