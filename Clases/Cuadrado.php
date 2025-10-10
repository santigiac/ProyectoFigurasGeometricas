<?php
require_once 'FiguraGeometrica.php'; // Importamos la clase base

class Rectangulo extends FiguraGeometrica {
    // --- Atributos específicos ---
    private $lado2;

    // --- Constructor ---
    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1); // Llama al constructor del padre
        $this->lado2 = $lado2;
    }

    // --- Destructor ---
    public function __destruct() {
        // echo "Destruyendo rectángulo";
    }

    // --- Getters ---
    public function getLado2() {
        return $this->lado2;
    }

    // --- Setters ---
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // --- Método para calcular el área ---
    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    // --- Método para calcular el perímetro ---
    public function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    // --- Método mágico __toString() ---
    public function __toString() {
        return "Figura: Rectángulo<br>" .
               "Lado 1: {$this->lado1}<br>" .
               "Lado 2: {$this->lado2}<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
