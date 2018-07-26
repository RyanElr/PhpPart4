<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice8 Part4</title>
    </head>
    <body>
        <p>
        <?php
    $number1 = 42;
    $number2 = 69;
    $number3 = 12;
    function calculate($number1, $number2, $number3) {
      return $number1 + $number2 + $number3;
    }
    echo calculate($number1, $number2, $number3);
     ?>
        </p>
    </body>
</html>
