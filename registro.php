<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, password) VALUES ('$nombre', '$correo', '$telefono', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado correctamente. <a href='ver_usuarios.php'>Ver usuarios</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>