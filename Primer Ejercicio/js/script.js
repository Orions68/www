function screen()
{
    let view1 = document.getElementById("view1");
    let view2 = document.getElementById("view2");

    view(view1, view1.offsetHeight);
    if (view2 != null)
    {
        view(view2, view2.offsetHeight);
    }
}

function view(views, heightView)
{
    let height = window.innerHeight;

    if (heightView < height)
    {
        views.style.height = height + "px";
    }
}

function verify()
{
    let dnielement = document.getElementById("dni");
    let dni = dnielement.value;

    numero = dni.substr(0, dni.length - 1);
    leter = dni.substr(dni.length - 1, 1);
    numero = numero % 23;
    leters = 'TRWAGMYFPDXBNJZSQVHLCKET';
    let dnileter = leters.substring(numero, numero + 1);
    if (dnileter != leter.toUpperCase())
    {
        alert("No, la letra no es correcta.");
        return false;
    }
    else
    {
        return true;
    }
}