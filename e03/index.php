<?PHP
    $sum = 0;
    for($i=1;$i<=4;$i++){
        $sum = $sum + 2*$i;
    }
    echo $sum;
    echo "<br>";


    $sum = 0;
    for($x=1;$x<=3;$x++){
        $sum = $sum + 1/($x*$x);
    }
    echo $sum;
    echo "<br>";
    $sum = 0;
    for($i=1;$i<=100;$i++){
        $sum = $sum + ($i+3)*($i+3)/($i*$i);
    }
    echo $sum;
?>