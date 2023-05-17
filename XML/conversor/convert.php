<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <a href="index.php#view1">Inicio</a>
        </nav>
    </header>
</body>
</html>
<?php
if (isset($_POST["dsv"]))
{
    $file = $_POST["dsv"];
    $char = $_POST["delimiter"];
    $read = fopen($file, "r") or die("Unable to open file!"); // Prepara el archivo seleccionado para leerlo.
    if ($read) // Si el archivo existe.
    {
        $array = [];
        $index = 0;
        $array[$index] = [];
        while (($line = fgets($read)) !== false) // Mientras Lea Líneas del Archivo.
        {
            $array[$index] = explode($char, $line);
            $index++;
        }
        $result = [];
        $counter = 0;
        $longer = 0;
        $index = 0;
        while ($counter < count($array) - 1)
        {
            while ($index < count($array[0]))
            {
                $result[$longer] .= "<" . $array[0][$index] . ">" . $array[$counter + 1][$index] . "</" . $array[0][$index] . ">";
                $index++;
                $longer++;
            }
            $counter++;
            $index = 0;
        }
        print_r ($result);
        $save = fopen("result.xml", "w") or die("Unable to open file!");
        fwrite($save, '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL);
        fwrite($save, '<data>' . PHP_EOL);
        $start = 0;
        while ($index < count($array) - 1)
        {
            fwrite($save, '<each>' . PHP_EOL);
            for ($i = $start; $i < $longer / 2; $i++)
            {
                fwrite($save, $result[$i] . PHP_EOL);
            }
            fwrite($save, '</each>' . PHP_EOL);
            $index++;
            $start = count($array[0]);
            $longer *= 2;
        }
        fwrite($save, '</data>');
        fclose($save);
        fclose($read);
    }
}
?>