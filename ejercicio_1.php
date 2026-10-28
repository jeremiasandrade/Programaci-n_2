<?php

$nombre = "Carlos";
$edad = 20;

if ($edad < 0) {
    echo "Error: La edad ingresada es inválida (no puede ser negativa).";
} elseif ($edad >= 18) {
    echo "¡Bienvenido/a al evento, $nombre!";
} else {
    echo "Acceso denegado. Eres menor de edad.";
}