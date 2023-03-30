<?php
include "includes/conn.php";
$title = "Página de Login";
include "header.php";
if (isset($_POST["email"]))
{
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $ok = false;
    
    $stmt = $conn->prepare("SELECT email, pass FROM user WHERE email='$email'"); // This is Correct.
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
    {
        if (password_verify($pass, $row->pass)) // Aquí no hace falta verificar el E-mail.
        {
            $ok = true;
            echo $row->email . " - " . $row->pass . "<br>";
        }
    }
    if ($ok)
    {
        echo "<h1 style='color:blue;'>Tus datos son correctos.</h1>";
    }
    else
    {
        echo "<h1 style='color:red;'>Lo Siento, Tus datos NO son correctos.</h1>";
    }
}
?>
<?php
include "includes/footer.html";
?>