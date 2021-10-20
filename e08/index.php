<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>for</title>
</head>
<body>

<?php
    //for ($i = 1; $i <= 20; $i++) {
    //    a[$i] = rand(1,100);
    //}

    //Almacenar 20 números impares aleatoreos en un array
    //El While ejecuta el código interno entre 0 y más veces
    $i = 1;
    while ($i <= 10){
        $num = rand(1,100);
        if($num % 2 == 1){ //impar
            $a[$i] = $num;
            $i++;
        }
    }

    //El Do While ejecuta el código interno entre 1 y más veces
    $i = 1;
    do{
        $num = rand(1,100);
        if($num % 2 == 1){ //impar
            $a[$i] = $num;
            $i++;
        }
    } while ($i <= 20);

    $j = 1;
    foreach($a as $valor){
        echo "a[$j] = $valor <br>";
        $j++;
    }
?>

</body>
</html>