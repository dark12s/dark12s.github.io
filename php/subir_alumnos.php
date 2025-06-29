<?php session_start();
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); exit(); }
?>
<!DOCTYPE html><html><head><title>Subir Alumnos</title><link rel="stylesheet" href="../css/estilos.css"></head><body>
<h2>Subir Alumnos</h2><form action="procesar_excel.php" method="post" enctype="multipart/form-data">
<input type="file" name="archivo_excel"><button type="submit">Subir</button></form></body></html>
