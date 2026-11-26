<?php
// Los arrays permiten guardar varios datos dentro de una misma variable, identificados por una clave (numérica o de texto).

// --- 1. DECLARAR, LEER Y MODIFICAR ---

// Para declarar un array se utiliza la función array() o con corchetes [].
$perfil = [
    "nombre" => "Inma",
    "ciudad" => "Granada",
    "edad" => 30
];

// Para leer o cambiar un dato se usa su clave entre corchetes:
echo "Ciudad: " . $perfil["ciudad"] . "<br>"; // Imprime Granada.
$perfil["edad"] = 31; // Cambia el valor de "edad" a 31.

// print_r() sirve para ver todo el contenido del array en pantalla.
print_r($perfil);
echo "<br>";



// --- 2. ARRAYS SIN CLAVES (ÍNDICES AUTOMÁTICOS) ---

// Si no se ponen claves, PHP numera los elementos automáticamente empezando desde 0.
$compra = ["Pan", "Leche", "Huevos"];

// Si añades un dato con corchetes vacíos [], PHP usa el número siguiente al índice más alto.
$compra[] = "Café"; // Toma la posición [3].
$compra[10] = "Aceite"; // Creamos la posición [10].
$compra[] = "Sal"; // Como el número más alto era 10, este toma la posición [11].

print_r($compra);
echo "<br>";



// --- 3. RECORRER ARRAYS CON FOREACH ---

// Recorre el array elemento por elemento sin necesidad de contadores.

// Sacando solo el valor:
foreach ($compra as $producto) { // Para cada elemento de $compra, se guarda temporalmente como $producto.
    echo "Producto: $producto<br>";
}

// Sacando la clave y el valor: (Se usa cuando las claves tienen significado propio y necesitas mostrar tanto el nombre del campo como su dato).
foreach ($perfil as $dato => $valor) { // Para cada elemento de $perfil, se guarda su etiqueta como $dato y su contenido como $valor.
    echo "$dato: $valor<br>";
}



// --- 4. MODIFICAR VALORES DENTRO DE UN FOREACH ---

/* Sin "&", foreach trabaja con una copia y el array original no cambia.
Con "&" (referencia), los cambios sí se guardan en el array real. */
$precios = [
    "Camiseta" => 10,
    "Pantalón" => 20
];

foreach ($precios as &$precio) {
    $precio += 5; // Sube 5 euros a cada prenda en el array original (15 y 25).
}
unset($precio); // Buena práctica: corta el enlace de referencia al acabar el bucle.

print_r($precios);
echo "<br>";



// --- 5. OPERADORES DE ARRAYS ---

/* ==  (Igual): true si tienen las mismas claves y valores.
=== (Idéntico): true si tienen mismas claves, valores, mismo orden y mismo tipo.
!= o <> (No igual) y !== (No idéntico).
+ (Unión): une dos arrays, pero si una clave se repite, gana la del primer array. */

$menuDia = [
    "primero" => "Ensalada",
    "segundo" => "Pollo"
];

$extras = [
    "segundo" => "Pescado", // Esta clave ya existe en $menuDia, así que se ignora.
    "postre" => "Flan" // Esta clave es nueva, así que se añade.
];

$menuCompleto = $menuDia + $extras; // Resultado: Ensalada, Pollo y Flan.
print_r($menuCompleto);
?>