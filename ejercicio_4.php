<?php
$presupuesto = 5000;
$precio_producto = 4200;
$costo_envio = 1000;

$total = $precio_producto + $costo_envio;

if ($total <= $presupuesto) {
    echo "La compra es posible.\n";
} else {
    $dinero_faltante = $total - $presupuesto;
    echo "No es posible realizar la compra. Faltan $" . $dinero_faltante . " pesos.\n";
}
?>