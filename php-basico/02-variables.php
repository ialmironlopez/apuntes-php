<?php
// Una variable es un espacio en memoria para guardar información que puede cambiar durante la ejecución.

// --- 1. DECLARACIÓN Y REGLAS ---

$nombre = "Inma"; // Toda variable empieza con el símbolo dólar ($) y se asigna con (=).
$edad = 25; // En PHP no hace falta indicar qué tipo es, lo detecta solo.
$_ciudad = "Granada"; // Las variables pueden empezar por letra o guion bajo (_), nunca por un número.
// Importante: Es case sensitive, es decir, distingue mayúsculas de minúsculas ($nombre y $Nombre son variables distintas).



// --- 2. TIPOS DE DATOS ---

$texto = "Hola"; // String (cadena de texto): va entre comillas dobles o simples.
$entero = 10; // Integer (número entero): sin comillas ni decimales.
$decimal = 9.99; // Float o Double (número decimal): se usa punto (.), nunca coma.
$esActivo = true; // Boolean (booleano): solo puede ser true o false.
$nulo = null; // Null: representa una variable vacía o sin valor asignado.



// --- 3. IMPRIMIR VARIABLES (INTERPOLACIÓN VS CONCATENACIÓN) ---

// Con comillas dobles (" "), PHP interpreta las variables dentro del texto (interpolación):
echo "Hola, me llamo $nombre y tengo $edad años.<br>";

// Con comillas simples (' '), PHP lo trata como texto literal y NO lee la variable:
echo 'Hola, me llamo $nombre.<br>';

// Concatenación: se usa el punto (.) para unir textos y variables (obligatorio con comillas simples):
echo 'Hola, me llamo ' . $nombre . ' y vivo en ' . $_ciudad . '.<br>';



// --- 4. REASIGNACIÓN DE VALOR ---

$edad = 30; // Si volvemos a asignar un valor a una variable existente, sobrescribe el anterior.
echo "Ahora tengo $edad años.<br>";
echo gettype($edad); // Imprime el tipo de dato de la variable.
?>