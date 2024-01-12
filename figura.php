<?php

// Declaración de una interfaz
interface Forma {
    public function calcularArea();
}

// Definición de una clase abstracta
abstract class Figura implements Forma {
    // Atributos protegidos
    protected $color;
    // Constructor con asignación de valor por defecto
    public function __construct($color = 'sin color') {
        $this->color = $color;
    }

        // Método abstracto
        abstract public function dibujar();

        // Método estático
        public static function imprimirMensaje() {
            echo "¡Esta es una figura!";
        }
    
        // Destructor
        public function __destruct() {
            echo "Objeto destruido.";
        }
    }


    // Declaración de una clase que hereda de Figura e implementa una interfaz
class Cuadrado extends Figura {
    // Atributos privados
    private $lado;

    // Constante
    const NUM_LADOS = 4;

    // Método constructor con sobrecarga
    public function __construct($lado, $color = 'sin color') {
        parent::__construct($color);
        $this->lado = $lado;
    }

    
    // Método final que no puede ser sobrecargado
    final public function dibujar() {
        echo "Dibujando un cuadrado de color {$this->color} y lado {$this->lado}.";
    }

    // Método estático que llama al método estático de la clase padre
    public static function imprimirMensaje() {
        parent::imprimirMensaje();
        echo " Este es un cuadrado.";
    }

    // Método para calcular el área
    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    // Método para obtener el color (get)
    public function getColor() {
        return $this->color;
    }
}

// Creación de un objeto Cuadrado
$cuadrado = new Cuadrado(5, 'azul');

// Acceso a un atributo protegido a través de un método público
echo "Color del cuadrado: " . $cuadrado->getColor() . "\n";

// Acceso a una constante
echo "Número de lados: " . Cuadrado::NUM_LADOS . "\n";

// Llamada a un método final
$cuadrado->dibujar();

// Llamada a un método estático
Cuadrado::imprimirMensaje();
