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

    views.style.height = height + "px";
    console.log("El tamaño vertical de la pantalla es: " + height);
}