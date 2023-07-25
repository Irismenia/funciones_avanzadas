<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <?php
    echo "<h1> Iniciar Sección en PHP</h1>";
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    echo "<hr>";

    echo "<h1> Obtener Valores de Variables de sesión de PHP</h1>";
    // Echo session variables that were set on previous page
    echo "Favorite color is " .     $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " .    $_SESSION["favanimal"] . ".";
    echo "<hr>";

    echo "<h1> Otro forma de las variables de sección de usuario</h1>";

    print_r($_SESSION);
    echo "<hr>";

    echo "<h1> Modificar una variable de sección de PHP</h1>";
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    echo "<hr>";

    echo "<h1> Destruir una sesión de PHP</h1>";
   // elimina todas las variables de sesión
    session_unset();

    // destruir la sesión
    session_destroy();
    echo "<hr>";

    echo "<h1> Desinfectar una cuerda</h1>";
    ?>
</body>
</html>