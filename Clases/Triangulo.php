<?php
require_once 'FiguraGeometrica.php'; // Importa la clase padre

class Triangulo extends FiguraGeometrica {
    // --- Atributos propios ---
    private $lado2;
    private $lado3;

    // --- Constructor ---
    public function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        // Llamamos al constructor del padre
        parent::__construct($tipoFigura, $lado1);

        // Asignamos los lados específicos del triángulo
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // --- Destructor ---
    public function __destruct() {
        // echo "Destruyendo triángulo";
    }

    // --- Getters ---
    public function getLado2() {
        return $this->lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    // --- Setters ---
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    // --- Método para calcular el área ---
    public function calcularArea() {
        // Fórmula de Herón
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
        return $area;
    }

    // --- Método para calcular el perímetro ---
    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // --- Método mágico __toString() ---
    public function __toString() {
        return "Figura: Triángulo<br>" .
               "Lado 1: {$this->lado1}<br>" .
               "Lado 2: {$this->lado2}<br>" .
               "Lado 3: {$this->lado3}<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
