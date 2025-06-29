<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "incidencias");
$conn->query("UPDATE alumnos SET grado = grado + 1 WHERE grado < 6");
echo "<p>Alumnos promovidos de grado correctamente.</p><a href='index.php'>Volver</a>";