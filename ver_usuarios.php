<?php
include("conexion.php");

$sql = "SELECT id_usuario, nombre, correo, telefono, fecha_registro FROM usuarios";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px; }
        h2 { text-align: center; color: #1a252f; }
        table { width: 100%; max-width: 800px; margin: 20px auto; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #3498db; color: white; }
        .btn { display: block; width: 150px; margin: 20px auto; text-align: center; padding: 10px; background: #2c3e50; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

    <h2>Usuarios Registrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Fecha</th>
        </tr>
        <?php
        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['id_usuario'] . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['correo']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['telefono']) . "</td>";
                echo "<td>" . $fila['fecha_registro'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align:center;'>No hay usuarios aún.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php" class="btn">Volver a la tienda</a>

</body>
</html>