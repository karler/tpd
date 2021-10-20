<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>foreach</title>
</head>
<body>
    <?PHP
        $zara = [
            123 => [
              'nombre' => 'Camisa a cuadros',
              'precio' => 29.95,
              'sexo' => 'Hombre'
            ],
            234 => [
              'nombre' => 'Falda manga',
              'precio' => 19.95,
              'sexo' => 'Mujer'
            ],
            345 => [
              'nombre' => 'Bolso minúsculo',
              'precio' => 50,
              'sexo' => 'Mujer'
            ]
        ];
    
        //Método 1
        foreach ($zara as $producto) {
            echo "Nombre: {$producto['nombre']}<br>";
            echo "Precio: {$producto['precio']}<br>";
            echo "Sexo: {$producto['sexo']}<br>";
        }
        echo "-----------------<br>";
        
        //Método 2
        foreach ($zara as $producto) {
            foreach ($producto as $elemento) {
                echo "$elemento <br>";
            }
        }
    ?>
    
</body>
</html>