<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "incidencias");
$result = $conn->query("SELECT * FROM incidencias");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Incidencias</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Incidencias registradas</h2>
    <table border="1">
        <tr>
            <th>Matrícula</th><th>Nombre</th><th>Tipo</th><th>Descripción</th><th>Fecha</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['matricula'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['tipo'] ?></td>
            <td><?= $row['descripcion'] ?></td>
            <td><?= $row['fecha'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>