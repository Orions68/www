<?php
function telephone($number)
{
    if (count($number) > 0)
    {
        for ($i = 0; $i < count($number); $i++)
        {
            echo "<td>" . $number[$i] . "</td>";
        }
        if ($i < 3)
        {
            switch ($i)
            {
                case 1:
                    echo "<td></td>";
                    echo "<td></td>";
                    break;
                default :
                    echo "<td></td>";
            }
        }
    }
    else
    {
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
    }
}
?>