function screen()
{
    let view1 = document.getElementById("view1");
    let view2 = document.getElementById("view2");

    view(view1);
    if (view2 != null)
    {
        view(view2);
    }
}

function view(views)
{
    let height = window.innerHeight;

    if (views.offsetHeight < height)
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

function addfield()
{
    let user = document.getElementById("user");
    const form = document.createElement("form");
    const username = document.createElement("input");
    const field = document.createElement("input");

    form.action = "";
    form.method = "post";

    username.type = "hidden";
    username.name = "username";
    username.value = user.value;
    form.appendChild(username);

    field.type = "hidden";
    field.name = "field";
    field.value = 1;
    form.appendChild(field);

    document.body.appendChild(form);
    form.submit();
}