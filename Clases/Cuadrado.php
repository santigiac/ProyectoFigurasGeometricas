<?php
require_once 'FiguraGeometrica.php'; // Importamos la clase base

class Cuadrado extends FiguraGeometrica {
    // --- Constructor ---
    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    // --- Destructor ---
    public function __destruct() {
        // echo "Destruyendo cuadrado";
    }

    // --- Método para calcular el área ---
    public function calcularArea() {
        return pow($this->lado1, 2);
    }

    // --- Método para calcular el perímetro ---
    public function calcularPerimetro() {
        return 4 * $this->lado1;
    }

    // --- Método mágico __toString() ---
    public function __toString() {
        return "Figura: Cuadrado<br>" .
               "Lado: {$this->lado1}<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
