<?php
if (isset($_POST["row"])) // Si está seteado $_POST["row"];
{
    $row = $_POST["row"]; // Asigno a variables los valores que llegan por POST.
    $column = $_POST["column"];
    $range = $_POST["range"];

    $array[] = []; // Creo un array bidimensional

    for ($i = 0; $i < $row; $i++) // Hago un bucle de $i al número de filas.
    {
        for ($j = 0; $j < $column; $j++) // Hago un bucle de $j al número de columnas.
        {
            $array[$i][$j] = rand(0, $range); // Pongo valores al azar desde 0 hasta el número de rango seleccionado.
        }
    }
    $y = 0; // Asigno 0 a la variable $y
    for ($i = 0; $i < $row; $i++) // Hago un bucle de $i al número de filas.
    {
        for ($j = 0; $j < $column; $j++) // Hago un bucle de $j al número de columnas.
        {
            $array2[$y] = $array[$i][$j]; // Pongo los valores de array bidimensional en un array de una dimensión.
            $y++; // Incremento el valor de $y.
        }
    }
    print_r($array2); // Muestro el array unidimensional.
    $pre = 0; // Asigno a la variable $pre el valor 0.
    for ($i = 0; $i < count($array2); $i++) // Hago un bucle al tamaño de $array2.
    {
        $pre += $array2[$i]; // Sumo los valores en el array en la variable $pre.
    }
    echo "<br><h4>La Suma de Todos los Números es: " . $pre . "</h4>"; // Muestro la suma en pantalla.
    echo "<h4>La Media es: " . $pre . " Dividido la Cantidad de Valores en el Array: " . count($array2) . " = " . $pre / count($array2) . "</h4>"; // Calculo y muestro la media en pantalla.

    $mediana = count($array2); // Asigno a la variable $mediana la cantidad de posiciones en $array2.
    if (fmod($mediana, 2) == 0) // Si tiene valores pares.
    {
        $part = $mediana / 2; // Asigno a la variable $part la mitas de $mediana.
        echo "<h4>La Mediana del Array Par de: " . count($array2) . " Valores, es la Suma de la (Posición " . $part - 1 . " del Array + la Posición " . $part . ") Divida en 2 = (" . $array2[$part - 1] . " + " . $array2[$part]. ") / 2 = " . ($array2[$part - 1] + $array2[$part]) / 2 . "</h4>";
    }
    else // Si no, tiene valores impares.
    {
        $half = floor($mediana / 2); // La mitad redondeando para abajo es justo la mediana.
        echo "<h4>La Mediana del Array Impar de: " . count($array2) . " Valores, es el Valor en la Posición: " . $half . " = " . $array2[$half] . "</h4>";
    }

    $count = array_count_values($array2); // Cuenta los valores en el array los agrupa y los asigna a $count en un array asociativo clave, valor.
    arsort($count); // Ordena el array por los valores que son las veces que se repiten los valores en el array, no por la clave del array asociativo que es el valor propiamente dicho.
    print_r($count); // Muestro el array asociativo en pantalla.
    $keys = array_keys($count); // Asigno al array $keys las claves en la posición que quedaron, son los valores en el array.
    print_r($keys); // Muestro el array con las posiciones de los valores.
    switch (count($keys)) // Hago un Switch a la Cantidad de Valores que Contiene el Array $keys
    {
        case 1:
            echo "<h4>La Moda es: " . $keys[0] . " con " . $count[$keys[0]] . " Repeticiones.</h4>"; // Si solo tiene una posición.
            break;
        case 2:
            if ($count[$keys[0]] == $count[$keys[1]]) // Si tiene dos valores y el valor en la posición 0 es el mismo que el de la posición 1, misma cantidad de repeticiones.
            {
                echo "<h4>Las Modas son: " . $keys[0] . " y " . $keys[1] . " con " . $count[$keys[1]] . " Repeticiones</h4>"; // Los dos valores son la moda, se repiten igual cantidad de veces.
            }
            else // Si no.
            {
                echo "<h4>La Moda es: " . $keys[0] . " con " . $count[$keys[0]] . " Repeticiones.</h4>"; // La moda es el que está en primera posición, ya que se ordenó de mayor a menor cantidad de repeticiones.
            }
            break;
        case 3:
            if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]])
            {
                echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . " y " . $keys[2] . " con " . $count[$keys[2]] . " Repeticiones</h4>";
            }
            else if ($count[$keys[0]] == $count[$keys[1]])
            {
                echo "<h4>Las Modas son: " . $keys[0] . " y " . $keys[1] . " con " . $count[$keys[1]] . " Repeticiones</h4>";
            }
            else
            {
                echo "<h4>La Moda es: " . $keys[0] . " con " . $count[$keys[0]] . " Repeticiones.</h4>";
            }
            break;
        case 4:
            if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]] && $count[$keys[2]] == $count[$keys[3]])
            {
                echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . ", " . $keys[2] . " y " . $keys[3] . " con " . $count[$keys[3]] . " Repeticiones</h4>";
            }
            else if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]])
            {
                echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . " y " . $keys[2] . " con " . $count[$keys[2]] . " Repeticiones</h4>";
            }
            else if ($count[$keys[0]] == $count[$keys[1]])
            {
                echo "<h4>Las Modas son: " . $keys[0] . " y " . $keys[1] . " con " . $count[$keys[1]] . " Repeticiones</h4>";
            }
            else
            {
                echo "<h4>La Moda es: " . $keys[0] . " con " . $count[$keys[0]] . " Repeticiones.</h4>";
            }
            break;
        default:
        if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]] && $count[$keys[2]] == $count[$keys[3]] && $count[$keys[3]] == $count[$keys[4]])
        {
            echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . ", " . $keys[2] . ", " . $keys[3] . " y " . $keys[4] . " con " . $count[$keys[4]] . " Repeticiones</h4>";
        }
        else if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]] && $count[$keys[2]] == $count[$keys[3]])
        {
            echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . ", " . $keys[2] . " y " . $keys[3] . " con " . $count[$keys[3]] . " Repeticiones</h4>";
        }
        else if ($count[$keys[0]] == $count[$keys[1]] && $count[$keys[1]] == $count[$keys[2]])
        {
            echo "<h4>Las Modas son: " . $keys[0] . ", " . $keys[1] . " y " . $keys[2] . " con " . $count[$keys[2]] . " Repeticiones</h4>";
        }
        else if ($count[$keys[0]] == $count[$keys[1]])
        {
            echo "<h4>Las Modas son: " . $keys[0] . " y " . $keys[1] . " con " . $count[$keys[1]] . " Repeticiones</h4>";
        }
        else
        {
            echo "<h4>La Moda es: " . $keys[0] . " con " . $count[$keys[0]] . " Repeticiones.</h4>";
        }
    }
}
?>