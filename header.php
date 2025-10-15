<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header style="background-color: #333; color: white; padding: 10px;">
    <h2>Proyecto Figuras Geométricas</h2>
    <?php
    if (isset($_SESSION['figura'])) {
        echo "<p>Figura seleccionada: <strong>" . $_SESSION['figura'] . "</strong></p>";
    }
    ?>
</header>
