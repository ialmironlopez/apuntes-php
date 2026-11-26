<?php
/* La Programación Orientada a Objetos (POO) organiza el código en clases y objetos.
Una clase es el molde o plantilla (define qué datos y acciones tendrá algo).
Un objeto es cada ejemplar concreto fabricado a partir de esa clase. */

// --- 1. DEFINICIÓN DE CLASE, ATRIBUTOS Y MÉTODOS ---

class Coche {
    /* Atributos (características):
    - public: se puede leer y modificar desde fuera de la clase.
    - private: solo se puede usar desde dentro de la propia clase (protege los datos). */
    private $marca;
    private $velocidad;

    /* Constructor: método especial que se ejecuta automáticamente al crear un objeto con "new".
    Sirve para dar valores iniciales a los atributos. */
    public function __construct($marca, $velocidad = 0) {
        $this->marca = $marca; // "$this" hace referencia al objeto actual que se está creando.
        $this->velocidad = $velocidad;
    }

    // Métodos (acciones que puede hacer el objeto):
    public function acelerar($cantidad) {
        $this->velocidad += $cantidad;
    }

    // Getters y Setters: métodos públicos para leer o modificar atributos privados de forma controlada.
    public function getMarca() {
        return $this->marca;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function setVelocidad($nuevaVelocidad) {
        if ($nuevaVelocidad >= 0) {
            $this->velocidad = $nuevaVelocidad;
        }
    }
}



// --- 2. CREAR Y USAR OBJETOS (INSTANCIACIÓN) ---

// Se crea un objeto usando la palabra reservada "new":
$miCoche = new Coche("Toyota", 50);

// Para llamar a un método o acceder a una propiedad pública se usa la flecha "->":
echo "Marca: " . $miCoche->getMarca() . "<br>";           // Imprime Toyota.
echo "Velocidad inicial: " . $miCoche->getVelocidad() . " km/h<br>"; // Imprime 50 km/h.

$miCoche->acelerar(30); // Suma 30 a la velocidad del objeto.
echo "Velocidad tras acelerar: " . $miCoche->getVelocidad() . " km/h<br>"; // Imprime 80 km/h.



// --- 3. HERENCIA (EXTENDS) ---

/* Permite crear una clase hija que hereda todos los atributos y métodos públicos/protegidos de una clase padre,
añadiendo sus propias características o modificando las existentes. */

class CocheElectrico extends Coche {
    private $bateria;

    public function __construct($marca, $velocidad = 0, $bateria = 100) {
        // "parent::" llama al constructor de la clase padre (Coche) para no repetir código:
        parent::__construct($marca, $velocidad);
        $this->bateria = $bateria;
    }

    public function getBateria() {
        return $this->bateria;
    }
}

$tesla = new CocheElectrico("Tesla", 80, 95);

// Puede usar tanto los métodos heredados de Coche como los suyos propios:
echo "Coche eléctrico: " . $tesla->getMarca() . " - Batería: " . $tesla->getBateria() . "%<br>";
?>