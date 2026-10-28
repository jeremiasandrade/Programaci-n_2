<?php
function calcular_descuento($precio) {
    $descuento = $precio * 0.10;
    $precio_final = $precio - $descuento;
    return $precio_final;
}

// Prueba de la función
$precio_original = 2500;
$precio_pagar = calcular_descuento($precio_original);

echo "El precio final con el 10% de descuento es: $" . $precio_pagar . "\n";
?>