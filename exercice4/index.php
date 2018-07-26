<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p>
        <?php
        function compare($numb1, $numb2) {
            if($numb1 == $numb2){
                return 'Les deux nombres sont identiques ';
            } elseif ($numb1 > $numb2) {
                return 'Le premier nombre est plus grand ';
            } else {
                return 'Le premier nombre est plus petit ';
            }
        }
        echo compare(10,15) . '10 : 15 <br/> ' . compare(15,10) . ' 15 : 10 <br/> '  . compare(15,15) . ' 15 : 15 <br/>' ;
        ?>
        </p>
    </body>
</html>
