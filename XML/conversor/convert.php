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
            $line = trim($line);
            $array[$index] = explode($char, $line);
            $index++;
        }
        $result = [];
        $counter = 0;
        $longer = 0;
        $index = 0;
        while ($counter + 1 < count($array))
        {
            while ($index < count($array[0]))
            {
                $result[$longer] = "";
                $result[$longer] .= "<" . $array[0][$index] . ">" . $array[$counter + 1][$index] . "</" . $array[0][$index] . ">";
                $index++;
                $longer++;
            }
            $counter++;
            $index = 0;
        }
        $save = fopen("result.xml", "w") or die("Unable to open file!");
        fwrite($save, '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL);
        fwrite($save, '<data>' . PHP_EOL);
        while ($index < $longer)
        {
            fwrite($save, '<each>' . PHP_EOL);
            for ($i = 0; $i < count($array[0]); $i++)
            {
                fwrite($save, $result[$index] . PHP_EOL);
                $index++;
            }
            fwrite($save, '</each>' . PHP_EOL);
        }
        fwrite($save, '</data>');
        fclose($save);
        fclose($read);
    }
    echo "<script>if (!alert('Archivo Salvado Correctamente')) window.open('index.php', '_self');</script>";
}
?>