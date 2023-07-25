<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Crear/Recuperar una Cookie</h1>
    <?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>
    <html>
    <body>

    <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <hr>
    <h1>Modificar un valor de cookie</h1>
        <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <h1>Eliminar una cookie</h1>
        <?php
    // set the expiration date to one hour ago
    setcookie("user", "", time() - 3600);
    ?>
    <html>
    <body>

    <?php
    echo "Cookie 'user' is deleted.";
    ?>
    <hr>
    <h1>Comprobar si las cookies están habilitadas</h1>
        <?php
    setcookie("test_cookie", "test", time() + 3600, '/');
    ?>
    <html>
    <body>

    <?php
    if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    } else {
    echo "Cookies are disabled.";
    }
    ?>
    <hr>


</body>
</html>