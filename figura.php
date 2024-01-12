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
