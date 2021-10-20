<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Votación</title>
    </head>
    <body>
        <!-- Documento HTML5 -->
        <?php
            
            for($i=1;$i<=5;$i++){
                for($j=1;$j<=3;$j++){
                    $a[$i][$j] = rand(1,100);
                }
            }
            //var_dump($a);
            for($i=1;$i<=5;$i++){
                for($j=1;$j<=3;$j++){
                    echo " a($i,$j) = {$a[$i][$j]}";
                }
                echo "<br>";
            }
            //echo $a[4][1];
        ?>

    </body>
</html>