<?php
// Un script PHP siempre comienza y termina con etiquetas de apertura y de cierre (todo el código va dentro).

// --- 1. TIPOS DE COMENTARIOS ---

// Esto es un comentario de línea (formato más usado en PHP).
# Esto es otro comentario de línea (formato menos común).
/*
Esto es un comentario
de varias líneas o de bloque.
*/



// --- 2. SALIDA POR PANTALLA (ECHO Y PRINT) ---

/* Existen dos instrucciones principales para mostrar texto o código HTML en el navegador.
- echo: es la más rápida y usada. Permite imprimir varias cadenas separadas por comas.
- print: funciona igual, pero solo admite un único argumento. */

print "<h1>¡Mi primer código PHP!</h1>";

echo "<p>¡Mi segundo código PHP!</p>", "<h3>¡Mi tercer código PHP!</h3>";


// --- 3. PHP DENTRO DE HTML ---
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hola mundo</title>
    </head>
    <body>
        <?php
            echo "Hola mundo";
        ?>
    </body>
</html>