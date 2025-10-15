<?php
session_start(); // Iniciamos o reanudamos la sesión

// 1️⃣ Si viene del index.php, guardamos la figura seleccionada
if (isset($_POST['figura'])) {
    $_SESSION['figura'] = $_POST['figura'];
}

// 2️⃣ Recuperamos la figura actual desde la sesión
$figura = isset($_SESSION['figura']) ? $_SESSION['figura'] : '';

// 3️⃣ Recuperamos los lados anteriores (si existen)
$lado1 = isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '';
$lado2 = isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '';
$base = isset($_SESSION['base']) ? $_SESSION['base'] : '';
$altura = isset($_SESSION['altura']) ? $_SESSION['altura'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introduce los datos de la figura</title>
    <link rel="stylesheet" href="../css/Style.css">
    <script src="../js/validacion.js" defer></script>
</head>
<!-- clase dinamica para ajustar el fonso a cada figura -->
<body class="<?php echo strtolower($figura); ?>">  

<?php include '../header.php'; ?>

<h2>Figura seleccionada: <?php echo ucfirst($figura); ?></h2>

<form action="resultado.php" method="post" id="form-figura">

    <?php
    // 4️⃣ Mostramos los inputs según la figura
    switch ($figura) {
        case 'Triangulo':
            echo '
                <label>Base:</label>
                <input type="number" step="any" name="base" value="'.$base.'" required><br>

                <label>Altura:</label>
                <input type="number" step="any" name="altura" value="'.$altura.'" required><br>
            ';
            break;

        case 'Rectangulo':
            echo '
                <label>Lado 1 (base):</label>
                <input type="number" step="any" name="lado1" value="'.$lado1.'" required><br>

                <label>Lado 2 (altura):</label>
                <input type="number" step="any" name="lado2" value="'.$lado2.'" required><br>
            ';
            break;

        case 'Cuadrado':
            echo '
                <label>Lado:</label>
                <input type="number" step="any" name="lado1" value="'.$lado1.'" required><br>
            ';
            break;

        case 'Circulo':
            echo '
                <label>Radio:</label>
                <input type="number" step="any" name="lado1" value="'.$lado1.'" required><br>
            ';
            break;

        default:
            echo '<p style="color:red;">No se ha seleccionado ninguna figura.</p>';
            break;
    }
    ?>

    <br>
    <input type="submit" value="Calcular">
</form>

</body>
</html>
