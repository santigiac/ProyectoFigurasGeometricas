<?php
session_start(); // Iniciamos o reanudamos la sesión


$figuraSeleccionada = isset($_SESSION['figura']) ? $_SESSION['figura'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Figura Geométrica</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<h1>Calculadora de Figuras Geométricas</h1>

<form action="formulario.php" method="post">
    <label for="figura">Elige una figura:</label>
    <select name="figura" id="figura" required>
        <option value="">-- Selecciona una figura --</option>
        <option value="Triangulo" <?php if($figuraSeleccionada == 'Triangulo') echo 'selected'; ?>>Triángulo</option>
        <option value="Rectangulo" <?php if($figuraSeleccionada == 'Rectangulo') echo 'selected'; ?>>Rectángulo</option>
        <option value="Cuadrado" <?php if($figuraSeleccionada == 'Cuadrado') echo 'selected'; ?>>Cuadrado</option>
        <option value="Circulo" <?php if($figuraSeleccionada == 'Circulo') echo 'selected'; ?>>Círculo</option>
    </select>

    <br><br>
    <input type="submit" value="Continuar">
</form>

</body>
</html>
