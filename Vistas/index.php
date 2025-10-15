<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selecciona una figura</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body class="inicio">

<h1>Selecciona una figura geométrica</h1>

<div class="figuras-contenedor">
    <form action="formulario.php" method="post">
        <button class="figura cuadrado" name="figura" value="Cuadrado">
            <img src="../img/cuadrado.png" alt="Cuadrado">
            <span>Cuadrado</span>
        </button>

        <button class="figura rectangulo" name="figura" value="Rectangulo">
            <img src="../img/rectangulo.png" alt="Rectángulo">
            <span>Rectángulo</span>
        </button>

        <button class="figura triangulo" name="figura" value="Triangulo">
            <img src="../img/triangulo.png" alt="Triángulo">
            <span>Triángulo</span>
        </button>

        <button class="figura circulo" name="figura" value="Circulo">
            <img src="../img/circulo.png" alt="Círculo">
            <span>Círculo</span>
        </button>
    </form>
</div>

</body>
</html>
