<?php
// Los bucles permiten repetir un bloque de código varias veces mientras se cumpla una condición.

// --- 1. FOR ---

/* Ideal cuando sabes cuántas veces quieres repetir algo.
La sintaxis es: for (instrucción de inicialización; condición; instrucción de iteración). */
for ($i = 5; $i >= 1; $i--) {
    echo "Despegue en $i...<br>"; // Va restando 1 en cada vuelta (5, 4, 3, 2, 1).
}
echo "¡Despegue!<br>";



// --- 2. WHILE ---

// Repite el código mientras la condición se cumpla.
$contador = 1;

while ($contador <= 5) {
    echo "Vuelta número $contador<br>";
    $contador++; // Importante: Incrementamos la variable para evitar un bucle infinito.
}



// --- 3. DO-WHILE ---

// Igual que el while, pero ejecuta el bloque al menos una vez antes de comprobar la condición.
$numero = 0;

do {
    echo "$numero <br>";
    $numero++;
} while ($numero < 5);



// --- 4. CONTROL DE BUCLES (BREAK Y CONTINUE) ---

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // "continue" salta la vuelta actual y pasa directamente a la siguiente (el 3 no se imprime).
    }
    if ($i == 5) {
        break; // "break" rompe y detiene el bucle por completo (llega hasta el 4).
    }
    echo "Número: $i<br>";
}
?>