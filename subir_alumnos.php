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
    <title>Subir Alumnos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Subir archivo Excel de alumnos</h2>
    <form action="procesar_alumnos.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo_excel" accept=".xls,.xlsx" required>
        <button type="submit">Subir</button>
    </form>
</body>
</html>