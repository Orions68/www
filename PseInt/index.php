<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Convertidor de Pseudo Código a HTML, PHP, y JavaScript</title>
    <script src="js/script.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "write.php";
include "read.php";
$handle = fopen("Hola.psc", "r");
if ($handle)
{
    $command = [];
    $command[0] = NULL;
    $data = [];
    $data[0] = NULL;
    $result = [];
    $result[0] = NULL;
    $counter = 0;
    while (($line = fgets($handle)) !== false)
    {
        if ($counter >= 1)
        {
            $command[$counter] = [];
            $data[$counter] = [];
            $command[$counter] = explode(" ", $line);
            $command[$counter][0] =  trim($command[$counter][0], "\t");
            if ($command[$counter][0] == "Escribir")
            {
                $data[$counter] = explode('"', $line);
                $data[$counter][0] = trim($data[$counter][0], "\t");
                $result[$counter] = explode(",", $line);
                $result[$counter][0] = trim($result[$counter][0], " ");
            }
            else
            {
                $data[$counter] = explode(" ", $line);
                $data[$counter][0] = trim($data[$counter][0], "\t");
            }
        }
        $counter++;
    }

    fclose($handle);
    for ($i = 1; $i < count($command); $i++)
    {
        switch ($command[$i][0])
        {
            case "Escribir":
                $write = new Escribir();
                $write->set_text($data[$i][1]);
                if (count($result[$i]) > 1)
                {
                    $result[$i] = explode(" ", $result[$i][1]);
                    echo "<input type='submit' value='Calcula el Resultado de la Multiplicación'>";
                    echo '</form>
                    <br><br>
                    <h3 id="result"></h3>';
                }
                break;
            case "Leer":
                $read = new Leer();
                $read->set_var($data[$i][1]);
                break;
            case "FinAlgoritmo":
                break;
            default:
                echo "Ese Comando Aun No Está Implementado.";
                echo $command[$i][0];
        }
    }
}
?>