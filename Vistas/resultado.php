<?php
session_start();

// 1️⃣ Recuperamos la figura desde la sesión
$figura = isset($_SESSION['figura']) ? $_SESSION['figura'] : '';

// 2️⃣ Guardamos los valores enviados por el formulario en sesión
if (isset($_POST['lado1'])) $_SESSION['lado1'] = $_POST['lado1'];
if (isset($_POST['lado2'])) $_SESSION['lado2'] = $_POST['lado2'];
if (isset($_POST['base'])) $_SESSION['base'] = $_POST['base'];
if (isset($_POST['altura'])) $_SESSION['altura'] = $_POST['altura'];

// 3️⃣ Recuperamos los valores guardados
$lado1 = $_SESSION['lado1'] ?? 0;
$lado2 = $_SESSION['lado2'] ?? 0;
$base = $_SESSION['base'] ?? 0;
$altura = $_SESSION['altura'] ?? 0;

// 4️⃣ Incluimos las clases
require_once '../clases/FiguraGeometrica.php';
require_once '../clases/Triangulo.php';
require_once '../clases/Rectangulo.php';
require_once '../clases/Cuadrado.php';
require_once '../clases/Circulo.php';

// 5️⃣ Creamos el objeto correcto según la figura
$objeto = null;
switch ($figura) {
    case 'Triangulo':
        $objeto = new Triangulo('Triángulo', $base, $altura);
        break;
    case 'Rectangulo':
        $objeto = new Rectangulo('Rectángulo', $lado1, $lado2);
        break;
    case 'Cuadrado':
        $objeto = new Cuadrado('Cuadrado', $lado1);
        break;
    case 'Circulo':
        $objeto = new Circulo('Círculo', $lado1);
        break;
    default:
        echo "<p style='color:red;'>No se ha podido crear la figura.</p>";
        exit;
}

// 6️⃣ Calculamos resultados
$area = $objeto->calcularArea();
$perimetro = $objeto->calcularPerimetro();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - <?php echo $figura; ?></title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php include '../header.php'; ?>

<h2>Resultados de la figura: <?php echo $figura; ?></h2>

<div class="resultado">
    <p><strong>Figura:</strong> <?php echo $figura; ?></p>

    <?php if ($figura == 'Triangulo'): ?>
        <p><strong>Base:</strong> <?php echo $base; ?></p>
        <p><strong>Altura:</strong> <?php echo $altura; ?></p>
    <?php elseif ($figura == 'Rectangulo'): ?>
        <p><strong>Lado 1:</strong> <?php echo $lado1; ?></p>
        <p><strong>Lado 2:</strong> <?php echo $lado2; ?></p>
    <?php else: ?>
        <p><strong>Lado:</strong> <?php echo $lado1; ?></p>
    <?php endif; ?>

    <p><strong>Área:</strong> <?php echo $area; ?></p>
    <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>
</div>

<br>
<form action="formulario.php" method="post">
    <input type="submit" value="Modificar datos">
</form>

<form action="index.php" method="post">
    <input type="submit" value="Elegir otra figura">
</form>

</body>
</html>
