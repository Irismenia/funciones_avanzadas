<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excepciones</title>
</head>
<body>
    <?php
    echo "<h1>Lanzar una excepción</h1>";
    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      echo divide(5, 0);
    echo "<hr>";

    echo "<h1>La sentencia try... catch</h1>";

    function divides($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
     }
    return $dividend / $divisor;
    }
      
    try {
    echo divides(5, 0);
    } catch(Exception $e) {
    echo "Unable to divide.";
    }
    echo "<hr>";
    echo "<h1>La declaración intentar... atrapar... finalmente</h1>";
    function divider($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divider(5, 0);
      } catch(Exception $e) {
        echo "Unable to divide. ";
      } finally {
        echo "Process complete.";
      }
    echo "<h2>2 Ejemplo</h2>";
    function dividers($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo dividers(5, 0);
      } finally {
        echo "Process complete.";
      }
    echo "<h2>2 METODOS</h2>";
    function dividess($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
      }
      
      try {
        echo dividess(5, 0);
      } catch(Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
      }
    ?>
</body>
</html>