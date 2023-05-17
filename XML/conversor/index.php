<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de DSV a XML</title>
</head>
<body>
    <header>
        <nav>
            <a href="#view1">Inicio</a>
        </nav>
    </header>
    <section id="view1">
        <h1>Sube tu archivo separado por cualquier delimitador</h1>
        <br>
        <form action="convert.php" method="post">
            <label><input type="file" name="dsv"> Sube tu Archivo</label>
            <br><br>
            <label><input type="text" name="delimiter"> Cual es el Delimitador Usado</label>
            <br><br>
            <input type="submit" value="Convierte este Archivo">
        </form>
    </section>
</body>
</html>