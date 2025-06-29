<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if ($usuario === 'admin' && $clave === '1234') {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="clave" placeholder="Contraseña" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>