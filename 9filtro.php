<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros PHP</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

    <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  echo "<h1> Expresiones de Filtro PHP</h1>";
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
<hr>
<?php
echo "<h1>Desinfectar una cuerda</h1>";
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
echo "<hr>";
echo "<h1>Validar un entero</h1>";
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
         echo("Integer is not valid");
    }
echo "<hr>";
echo "<h1>SUGERENCIA </h1>";
echo "<h2>filter_var() y problema con 0</h2>";

$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<hr>";

echo "<h1>Validar una dirección IP </h1>";
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
echo "<hr>";

echo "<h1>Desinfectar y validar una dirección de correo electrónico </h1>";

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
echo "<hr>";
echo "<h1>Desinfectar y validar una URL </h1>";

$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
echo "<hr>";
?>
</body>
</html>