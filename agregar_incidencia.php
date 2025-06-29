<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "incidencias");
$alumnos = $conn->query("SELECT matricula, nombre FROM alumnos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Incidencia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Agregar nueva incidencia</h2>
    <form action="guardar_incidencia.php" method="post">
        <select name="matricula">
            <?php while($alumno = $alumnos->fetch_assoc()): ?>
            <option value="<?= $alumno['matricula'] ?>"><?= $alumno['matricula'] ?> - <?= $alumno['nombre'] ?></option>
            <?php endwhile; ?>
        </select><br>
        <input type="text" name="tipo" placeholder="Tipo de incidencia" required><br>
        <textarea name="descripcion" placeholder="Descripción" required></textarea><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>