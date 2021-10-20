<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>if</title>
</head>
<body>
    <?php
        for($i=1;$i<=10; $i++){
            $num[$i] = rand(1,100);
        }

        for($j=1;$j<=10; $j++){
            if($num[$j] % 2 == 0){
                echo "{$num[$j]} Es par <br>";
            }else{
                if($num[$j] % 5 == 0){
                    echo "{$num[$j]} Es impar y multiplo de 5 <br>";
                }else{
                    echo "{$num[$j]} Es impar y NO es multiplo de 5 <br>";
                }
            }
        }

    ?>
</body>
</html>