<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if ($usuario == "admin" && $clave == "1234") {
        $_SESSION['usuario'] = $usuario;
        header("Location: subir_alumnos.php");
        exit();
    } else {
        $error = "Credenciales inválidas";
    }
}
?>
<!DOCTYPE html><html><head><title>Login</title><link rel="stylesheet" href="../css/estilos.css"></head><body>
<h2>Login</h2><form method="post"><input type="text" name="usuario" placeholder="Usuario"><input type="password" name="clave" placeholder="Contraseña"><button type="submit">Entrar</button></form>
<?php if(isset($error)) echo "<p>$error</p>"; ?></body></html>
