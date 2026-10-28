<?php
// Se utiliza un arreglo asociativo en PHP
$productos = [
    "Auriculares" => 1500,
    "Teclado" => 2300,
    "Mouse" => 1200,
    "Monitor" => 8000
];

$total_precios = 0;

foreach ($productos as $producto => $precio) {
    echo "Producto: " . $producto . " - Precio: $" . $precio . "\n";
    $total_precios += $precio;
}

echo "Total de todos los productos: $" . $total_precios . "\n";
?>