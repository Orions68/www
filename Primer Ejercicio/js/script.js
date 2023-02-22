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