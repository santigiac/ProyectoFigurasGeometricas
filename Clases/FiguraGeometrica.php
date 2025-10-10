<?php
class FiguraGeometrica {
    // --- Atributos ---
    protected $tipoFigura;
    protected $lado1;

    // --- Constructor ---
    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // --- Destructor ---
    public function __destruct() {
        // Puedes dejarlo vacío o mostrar un mensaje de depuración
        // echo "Destruyendo objeto {$this->tipoFigura}";
    }

    // --- Getters ---
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    // --- Setters ---
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // --- Método genérico (abstracto en concepto) ---
    public function calcularArea() {
        // No tiene funcionalidad concreta aquí
        return 0;
    }
}
?>
