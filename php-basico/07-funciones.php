<?php
// Una función es un conjunto de instrucciones que realizan una tarea concreta.

// --- 1. FUNCIONES PREDEFINIDAS (DE VARIABLES) ---

/* PHP incluye funciones predefinidas que realizan las tareas más habituales.
Las más habituales son las que guardan relación con las variables.
Como en PHP las variables no se declaran de forma explícita, existen una serie de funciones que 
nos permiten conocer el estado y el tipo de dato de la variable con la que estamos trabajando. */

/* De variables:
isset($var): true si existe y no es null.
is_null($var): true si es null.
empty($var): true si no existe, está vacía o equivale a false.
is_int(), is_float(), is_bool(), is_array(): comprueban el tipo de dato.
unset($var): elimina la variable de la memoria. */

$nombre = "Inma";
$vacio = 0;

var_dump(isset($nombre)); // bool(true) porque tiene valor.
echo "<br>";
var_dump(empty($vacio)); // bool(true) porque 0 se considera vacío/false.
echo "<br>";

/* De cadenas (strings):
strlen($texto): devuelve la longitud de una cadena (número de caracteres, incluyendo espacios).
str_word_count($texto): cuenta el número de palabras en una cadena.
strrev($texto): invierte el orden de los caracteres de una cadena.
strpos($texto, $busqueda): devuelve la posición (empezando en 0) de la primera coincidencia, o false si no la encuentra.
str_replace($buscar, $nuevo, $texto): reemplaza todas las apariciones de un texto por otro. */

$frase = "Hola mundo";
echo "Longitud: " . strlen($frase) . "<br>"; // Función que devuelve la longitud de una cadena. Imprime 10.
echo "Palabras: " . str_word_count($frase) . "<br>"; // Función que cuenta el número de palabras en una cadena. Imprime 2.
echo "Invertida: " . strrev($frase) . "<br>"; // Imprime odnum aloH.
echo "Posición de 'mundo': " . strpos($frase, "mundo") . "<br>"; // Imprime 5 (empieza a contar desde 0).
echo "Reemplazo: " . str_replace("mundo", "Inma", $frase) . "<br>"; // Imprime Hola Inma.



// --- 2. FUNCIONES DEFINIDAS POR EL USUARIO ---

// Sintaxis: function nombre(argumentos) { instrucciones }
function sumar($a, $b) {
    return $a + $b; // "return" devuelve el resultado y termina la función.
}

echo "Suma: " . sumar(4, 6) . "<br>"; // Imprime 10.

// También pueden tener valores por defecto si no se les pasa ningún argumento al llamarlas.
function saludar($usuario = "Invitado") {
    echo "Hola, $usuario<br>";
}

saludar(); // Usa el valor por defecto ("Hola, Invitado").
saludar("Carlos"); // Usa el argumento pasado ("Hola, Carlos").



// --- 3. PASO DE ARGUMENTOS: POR COPIA VS. POR REFERENCIA ---

// Por defecto, PHP pasa los argumentos por copia: la función trabaja con una copia local y no altera la variable original.
function sumarPorCopia($numero) {
    $numero += 10;
}

// Si añadimos "&" antes del argumento, se pasa por referencia: la función modifica la variable original directamente.
function sumarPorReferencia(&$numero) {
    $numero += 10;
}

$puntos = 5;

sumarPorCopia($puntos); // Es como si se manda una fotocopia a alguien.
echo "Tras copia: $puntos<br>"; // Sigue valiendo 5.

sumarPorReferencia($puntos); // Es como si le das acceso directo al archivo original a alguien.
echo "Tras referencia: $puntos<br>"; // Ahora vale 15.



// --- 4. FUNCIONES COMO ARGUMENTOS (CALLBACKS) ---

// Se puede pasar el nombre de una función entre comillas como argumento a otra función para ejecutarla dentro.
function aplicarOperacion($operacion, $num1, $num2) {
    return $operacion($num1, $num2); // Ejecuta la función recibida por nombre.
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

echo "Resta: " . aplicarOperacion("restar", 10, 3) . "<br>"; // Imprime 7.
echo "Multiplicación: " . aplicarOperacion("multiplicar", 10, 3) . "<br>"; // Imprime 30.



// --- 5. INCLUIR FICHEROS EXTERNOS (INCLUDE Y REQUIRE) ---

/* Permiten insertar y ejecutar el código de otros archivos PHP dentro del script actual.
Si el fichero es una librería con funciones, estas quedan habilitadas para el fichero que lo incluye.
Las variables declaradas en el script principal antes de incluir el fichero estarán disponibles dentro de él. */

// include: si el fichero no existe o falla, genera un error de tipo E_NOTICE, pero el script continúa ejecutándose.
include "otrofichero.php";

// require: si el fichero no existe o falla, genera un error E_FATAL y detiene por completo la ejecución del script.
require "otrofichero.php";

// include_once y require_once: funcionan igual, pero solo ejecutan el fichero si no ha sido incluido anteriormente.
include_once "otrofichero.php";
require_once "otrofichero.php";

// Rutas relativas: si un fichero incluido llama a su vez a un tercero, las rutas se toman desde el directorio del primer fichero.
// Para evitar errores de ruta se usa dirname(__FILE__) (o __DIR__ en PHP moderno):
include(dirname(__FILE__) . "/fichero.php");
?>