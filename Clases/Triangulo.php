<?php
require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    private $altura;

    public function __construct($tipoFigura, $base, $altura) {
        parent::__construct($tipoFigura, $base);
        $this->altura = $altura;
    }

    public function __destruct() {
        // Destructor opcional
    }

    // Getters y setters
    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    // Cálculos
    public function calcularArea() {
        return ($this->getLado1() * $this->altura) / 2;
    }

    public function calcularPerimetro() {
        // Si quieres, puedes suponer un triángulo equilátero
        return $this->getLado1() * 3;
    }

    // Descripción
    public function __toString() {
        return "Triángulo con base " . $this->getLado1() .
               " y altura " . $this->altura;
    }
}
