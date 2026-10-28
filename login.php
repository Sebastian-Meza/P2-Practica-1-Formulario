<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Buscar si existe un usuario con ese correo y contraseña
    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        echo "<div style='font-family: Arial; text-align: center; padding: 40px;'>";
        echo "<h2 style='color: #2ecc71;'>¡Bienvenido de nuevo, " . htmlspecialchars($usuario['nombre']) . "!</h2>";
        echo "<p>Has iniciado sesión correctamente.</p>";
        echo "<br><a href='index.php' style='background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Volver a la tienda</a>";
        echo "</div>";
    } else {
        echo "<div style='font-family: Arial; text-align: center; padding: 40px;'>";
        echo "<h2 style='color: #e74c3c;'>Correo o contraseña incorrectos</h2>";
        echo "<p>Por favor verifica tus datos e intentalo de nuevo.</p>";
        echo "<br><a href='index.php#login' style='background-color: #2c3e50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Intentar de nuevo</a>";
        echo "</div>";
    }
}
?>