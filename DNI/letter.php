<?php
if (isset($_POST["dni"]))
{
    $dni = $_POST["dni"];
    $number = $dni;

    $dni = $dni % 23;
    $letras = 'TRWAGMYFPDXBNJZSQVHLCKET';
    $letra = substr($letras, $dni, 1);
    echo "<h1>La letra del D.N.I. $number es: $letra</h1>";
}
?>