<?php
// Los operadores permiten realizar cálculos matemáticos, asignar valores, comparar datos y combinar condiciones.

// --- 1. OPERADORES ARITMÉTICOS ---

$a = 10;
$b = 3;

echo "Suma: " . ($a + $b) . "<br>";           // 13
echo "Resta: " . ($a - $b) . "<br>";          // 7
echo "Multiplicación: " . ($a * $b) . "<br>"; // 30
echo "División: " . ($a / $b) . "<br>";       // 3.333...
echo "Módulo (resto): " . ($a % $b) . "<br>"; // 1 (el resto de dividir 10 entre 3; útil para saber si un número es par).
echo "Potencia: " . ($a ** $b) . "<br>";      // 1000 (10 elevado a 3).



// --- 2. OPERADORES DE ASIGNACIÓN ---

// Permiten guardar un valor en una variable por copia (=), enlazar dos variables al mismo dato en memoria por referencia (=&) o actualizar una variable sobre sí misma de forma abreviada (+=, -=, *=, /=, .=).

$original = 10;
$copia = $original; // Asignación por valor: recibe una copia independiente (vale 10).
$referencia = &$original; // Asignación por referencia: apunta al mismo espacio de memoria que $original.

$original = 20; // Al cambiar $original, $referencia también cambia a 20, pero $copia sigue valiendo 10.

// Asignación combinada (atajos para operar sobre la propia variable):
$x = 10;
$x += 5; // Equivale a: $x = $x + 5 (ahora vale 15). El operador = sobrescribe el valor anterior de la variable.
$x -= 3; // Equivale a: $x = $x - 3 (ahora vale 12).
$x *= 2; // Equivale a: $x = $x * 2 (ahora vale 24).
$x /= 4; // Equivale a: $x = $x / 4 (ahora vale 6).

$texto = "Hola ";
$texto .= "mundo"; // Equivale a: $texto = $texto . "mundo" ("Hola mundo"). Concatena dos cadenas.

echo "Copia: $copia | Referencia: $referencia | X: $x | Texto: $texto<br>";



// --- 3. INCREMENTO Y DECREMENTO ---

$puntos = 10;

$puntos++; // Suma 1 (equivale a $puntos = $puntos + 1). Ahora vale 11.
$puntos--; // Resta 1 (equivale a $puntos = $puntos - 1). Vuelve a valer 10.

echo "Puntos: $puntos<br>";



// --- 4. OPERADORES DE COMPARACIÓN ---

// Devuelven siempre un valor booleano (true o false).
$num = 5;
$texto = "5";

/* ==  (Igual): compara solo el valor, si tienen el mismo, será verdadero (5 == "5" es true).
=== (Idéntico): compara valor y tipo de dato (5 === "5" es false).
!= o <> (Diferente/no igual): compara solo el valor.
!== (No idéntico): diferente en valor o en tipo de dato.
>   (Mayor que), < (Menor que), >= (Mayor o igual), <= (Menor o igual). */

// var_dump() muestra información detallada de una variable o expresión (su tipo de dato y su valor real).

var_dump($num == $texto);  // Imprime bool(true) porque ambos valen 5.
echo "<br>";
var_dump($num === $texto); // Imprime bool(false) porque uno es integer y otro string.
echo "<br>";



// --- 5. OPERADORES LÓGICOS ---

// Sirven para combinar varias condiciones.
$esMayor = true;
$tieneCarnet = false;

/* && o and (Y): devuelve true solo si AMBAS condiciones son verdaderas.
|| o or  (O): devuelve true si AL MENOS UNA condición es verdadera.
xor (O exclusivo): devuelve true solo si una de las dos expresiones es true.
! (NO): invierte el valor (si es true pasa a false, y viceversa). */

var_dump($esMayor && $tieneCarnet); // bool(false)
echo "<br>";
var_dump($esMayor || $tieneCarnet); // bool(true)
echo "<br>";
var_dump(!$tieneCarnet); // bool(true)
echo "<br>";
var_dump($esMayor xor $tieneCarnet); // bool(true)
?>