<?php
require_once 'FiguraGeometrica.php'; // Importamos la clase base

class Circulo extends FiguraGeometrica {
    // --- Constructor ---
    public function __construct($tipoFigura, $radio) {
        // El círculo solo necesita un "lado", que será su radio
        parent::__construct($tipoFigura, $radio);
    }

    // --- Destructor ---
    public function __destruct() {
        // echo "Destruyendo círculo";
    }

    // --- Getter y Setter del radio (lado1 actúa como radio) ---
    public function getRadio() {
        return $this->lado1;
    }

    public function setRadio($radio) {
        $this->lado1 = $radio;
    }

    // --- Método para calcular el área ---
    public function calcularArea() {
        return pi() * pow($this->lado1, 2);
    }

    // --- Método para calcular el perímetro ---
    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1;
    }

    // --- Método mágico __toString() ---
    public function __toString() {
        return "Figura: Círculo<br>" .
               "Radio: {$this->lado1}<br>" .
               "Área: " . round($this->calcularArea(), 2) . "<br>" .
               "Perímetro: " . round($this->calcularPerimetro(), 2) . "<br>";
    }
}
?>
