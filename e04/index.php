<?php
//$edades = ["Andrés" => 20, "Bárbara" => 19, "Camilo" => 17];
$edades = [
    "Andrés" => 20,
    "Bárbara" => 19,
    "Camilo" => 17
];

echo "<p>Bárbara tiene $edades[Bárbara] años</p>\n";
echo "<p>Bárbara tiene " . $edades["Bárbara"] . " años</p>\n";
echo "\n";
echo "<p>Camilo tiene {$edades["Camilo"]} años</p>\n";

?>

<?php
$datos = [
    ["nombre" => "pepe", "edad" => 25, "peso" => 80],
    ["nombre" => "juan", "edad" => 22, "peso" => 75]
];

echo "<p>{$datos[1]["nombre"]} pesa {$datos[1]["peso"]} kilos</p>\n";
echo "\n";
echo "<p>" . $datos[0]["nombre"] . " tiene " . $datos[0]["edad"] . " años</p>\n";
//echo "<p> $datos[1][nombre] tiene $datos[1][edad] años</p>\n";
?>