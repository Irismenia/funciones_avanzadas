<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP incluyen ejemplos</h1>
    <p>Ejemplo 1</p>
    <h2>Bienvenido a mi página de inicio!</h2>
    <p>Algún texto.</p>
    <p>Algo más de texto.</p>
    <?php include '2_PHP/1,2footer.php';?>
    <hr>
    <p>Ejemplo 2</p>
    <div class="menu">
    <?php include '2_PHP/menu.php';?>
    </div>

    <h1>Bienvenido a mi página de inicio!</h1>
    <p>algo de texto.</p>
    <p>algo mas de texto.</p>
    <hr>
    <p>Ejemplo 3</p>
        <h1>bienvenido a mi pagina web!</h1>
    <?php include '2_PHP/vars.php';
    echo "I have a $color $car.";
    ?>
    <hr>
    <h1>PHP incluye vs requiere</h1>
    <p>con la includedeclaración y PHP no puede encontrarlo, el script continuará ejecutándose:</p>
    <br>
    <h1>Welcome to my home page!</h1>
    <?php include 'noFileExists.php';
    echo "I have a $color $car.";
    ?>
    <br>
    <p>la declaración de eco no se ejecutará porque la ejecución del script muere después de que la requiredeclaración devolviera un error fatal:</p>
    <br>
        <h1>Welcome to my home page!</h1>
    <?php require 'noFileExists.php';
    echo "I have a $color $car.";
    ?>

</body>
</html>