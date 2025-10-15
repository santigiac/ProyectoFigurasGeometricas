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
        <button class="figura cuadrado" name="figura" value="Cuadrado">⬛<br>Cuadrado</button>
        <button class="figura rectangulo" name="figura" value="Rectangulo">▭<br>Rectángulo</button>
        <button class="figura triangulo" name="figura" value="Triangulo">🔺<br>Triángulo</button>
        <button class="figura circulo" name="figura" value="Circulo">⚪<br>Círculo</button>
    </form>
</div>

</body>
</html>
