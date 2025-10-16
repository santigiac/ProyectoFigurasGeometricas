<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Figuras Geométricas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="inicio">

<header class="main-header">
    <h1>Calculadora de Figuras Geométricas</h1>
    <p>Selecciona una figura GANSTER para comenzar</p>
</header>

<main class="figuras-contenedor">
    <form action="formulario.php" method="post" class="figuras-form">
        <button type="submit" name="figura" value="Cuadrado" class="figura-btn">
            <img src="../img/caudrado2.jpg" alt="Cuadrado" class="figura-img">
        </button>
        <button type="submit" name="figura" value="Rectangulo" class="figura-btn">
            <img src="../img/rectanfulo2.jpg" alt="Rectángulo" class="figura-img">
        </button>
        <button type="submit" name="figura" value="Triangulo" class="figura-btn">
            <img src="../img/triangulo2.png.jpg" alt="Triángulo" class="figura-img">
        </button>
        <button type="submit" name="figura" value="Circulo" class="figura-btn">
            <img src="../img/circulo2.jpg" alt="Círculo" class="figura-img">
        </button>
    </form>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Figuras Geométricas | Desarrollado en PHP</p>
</footer>

</body>
</html>
