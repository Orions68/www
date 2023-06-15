<?php
include "includes/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando los datos de la tabla agenda</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM agenda";
    $stmt = $conn->query($sql);
    if (!$stmt)
    {
        print "<p>Could not retrieve employee list: " . $conn->errorMsg(). "</p>";
    }
    while ($row = $result->fetch())
    {
        print "<p>Name: {$row[0]} {$row[1]}</p>";
    }
    ?>
</body>
</html>