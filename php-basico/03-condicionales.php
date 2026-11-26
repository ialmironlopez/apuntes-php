<?php
// Las estructuras condicionales permiten ejecutar distintos bloques de código según si se cumple o no una condición.

// --- 1. IF, ELSEIF Y ELSE ---

$nota = 7;

if ($nota >= 9) {
    echo "Sobresaliente<br>"; // Se ejecuta si la primera condición es verdadera.
} elseif ($nota >= 5) {
    echo "Aprobado<br>"; // Se ejecuta si la anterior condición no se cumple.
} else {
    echo "Suspenso<br>"; // Se ejecuta por defecto si ninguna condición anterior se cumple.
}



// --- 2. OPERADORES DE COMPARACIÓN Y LÓGICOS ---

$edad = 20;
$tieneEntrada = true;

/* == (igual valor), === (igual valor y tipo), != (diferente), > (mayor), < (menor), >= (mayor o igual), <= (menor o igual).
&& o AND (se cumplen ambas), || o OR (se cumple al menos una), ! (invierte el valor booleano). */

if ($edad >= 18 && $tieneEntrada) {
    echo "Puedes pasar al concierto.<br>";
} else {
    echo "No cumples los requisitos de acceso.<br>";
}



// --- 3. SWITCH ---

// Funciona como un menú de opciones: toma una variable y salta directamente al caso (case) que coincida con su valor.

$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Inicio de semana.<br>";
        break; // "break" detiene el switch; si se omite, sigue ejecutando los casos siguientes.
    case "viernes":
        echo "Por fin es viernes.<br>";
        break;
    default:
        echo "Es otro día de la semana.<br>"; // Equivale al "else".
        break;
}
?>