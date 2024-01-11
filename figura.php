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