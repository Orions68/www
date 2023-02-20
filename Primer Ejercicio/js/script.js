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

function view(view)
{
    let height = height;

    view.style.height = height;
}