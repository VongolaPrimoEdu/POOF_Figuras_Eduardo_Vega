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