<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Incidencias</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>
    <nav>
        <a href="subir_alumnos.php">Subir Alumnos</a> |
        <a href="ver_incidencias.php">Ver Incidencias</a> |
        <a href="agregar_incidencia.php">Agregar Incidencia</a> |
        <a href="pase_ano.php">Pase de Año</a> |
        <a href="logout.php">Cerrar Sesión</a>
    </nav>
</body>
</html>