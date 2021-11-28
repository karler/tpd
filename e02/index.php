<?PHP
    //$a = array(1,3,17,6,15,14);

    for($i=1 ; $i <= 5 ; $i= $i + 1){
        $a[$i] = rand(0,20);
    }

    foreach($a as $valor){
        echo $valor," - ";
    }
    
    //print_r($a) Comentario;
    echo "<br>";
    $a["name"] = "Mi Array";

    print_r($a);

    echo "<br>";
    for($i=2 ; $i <= 4 ; $i= $i + 1){
        echo $a[$i]," - ";
    }
?>