<?php
class Leer
{
    function set_var($var)
    {
        if (empty($_SESSION["already"]))
        {
            $_SESSION["already"] = 1;
            echo '<form action="" method="post" onsubmit="return calculate()">';
            echo '<label><input id="' . $_SESSION["already"] . '" type="text" name="' . $var . '"> Ingresa una Variable</label>';
        }
        else
        {
            $_SESSION["already"]++;
            echo '<label><input id="' . $_SESSION["already"] . '" type="text" name="' . $var . '"> Ingresa una Variable</label>';
        }
    }
}
?>