<?php
function validar_numero($numero) {
    if ($numero > 0) {
        return "El número es positivo.";
    } elseif ($numero < 0) {
        return "El número es negativo.";
    } else {
        return "El número es igual a cero.";
    }
}

// Prueba de la función
$resultado = validar_numero(-7);
echo $resultado . "\n";
?>