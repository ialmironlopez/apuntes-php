<?php
// En PHP existen dos mecanismos para gestionar los fallos en tiempo de ejecución: el manejo de errores y las excepciones.

// --- 1. NIVELES DE ERROR EN PHP ---

/* PHP clasifica los fallos según su gravedad mediante constantes predefinidas:
- E_ERROR: error fatal en tiempo de ejecución. Detiene el script por completo (ejemplo: llamar a una función que no existe). Fallo grave, corta y no ejecuta nada más.
- E_WARNING: advertencia en tiempo de ejecución. Muestra un aviso, pero no detiene el script (ejemplo: dividir por cero). Algo ha fallado, pero sigue ejecutando el resto.
- E_NOTICE: aviso leve por algo que podría ser un error o algo normal (ejemplo: usar una variable no definida). Algo huele raro, pero PHP sigue adelante.
- E_PARSE: error de sintaxis al compilar el código (ejemplo: olvidar un punto y coma). El archivo ni siquiera empieza a ejecutarse.
- E_ALL: engloba todos los errores y advertencias anteriores. */

// Con error_reporting() se configura qué nivel de errores queremos que PHP muestre.
error_reporting(E_ALL); // Muestra todos los errores y avisos (ideal mientras desarrollamos). Es como si decimos "enséñame todos los fallos, por pequeños que sean.
// error_reporting(0); // Oculta todos los errores (útil en producción para no dar pistas al usuario).



// --- 2. MANEJADOR DE ERRORES PERSONALIZADO (SET_ERROR_HANDLER) ---

// Permite sustituir los mensajes de error estándar de PHP por una función propia más amigable. Solo captura errores no fatales (como E_WARNING o E_NOTICE), nunca un E_ERROR.

function miManejadorErrores($nivel, $mensaje, $fichero, $linea) {
    echo "<b>Aviso controlado:</b> $mensaje (en la línea $linea)<br>";
}

// Registramos nuestra función como manejador de errores:
set_error_handler("miManejadorErrores");

// Provocamos un aviso intencionado (usar una variable que no existe) para probarlo:
echo $variableInexistente;

// Restauramos el manejador por defecto de PHP para no afectar al resto del archivo:
restore_error_handler();



// --- 3. EXCEPCIONES (TRY, THROW, CATCH Y FINALLY) ---

/* Una excepción es un objeto de la clase exception que representa un fallo controlado.
- try: bloque donde se ejecuta el código susceptible de fallar.
- throw: lanza manualmente la excepción cuando se cumple una condición de error.
- catch: captura la excepción lanzada y ejecuta una solución sin romper la página.
- finally: bloque opcional que se ejecuta siempre, haya habido excepción o no. */

function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        // Lanzamos un nuevo objeto Exception con un mensaje descriptivo:
        throw new Exception("No se puede dividir entre cero.");
    }
    return $dividendo / $divisor;
}

try {
    echo "Resultado: " . dividir(10, 2) . "<br>"; // Funciona bien (imprime 5).
    echo "Resultado: " . dividir(10, 0) . "<br>"; // Lanza la excepción y salta directo al catch.
    echo "Esta línea nunca se ejecuta.<br>";
} catch (Exception $e) {
    // getMessage() recupera el texto que pasamos al crear la excepción:
    echo "Error capturado: " . $e->getMessage() . "<br>";
} finally {
    echo "Operación de división finalizada.<br>";
}
?>