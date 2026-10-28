<?php
include("conexion.php");

// Consulta con JOIN para traer el nombre del producto de la tabla productos
$sql = "SELECT p.id_pedido, pr.nombre_producto, p.cantidad, p.direccion, p.metodo_pago, p.fecha_pedido 
        FROM pedidos p 
        INNER JOIN productos pr ON p.id_producto = pr.id_producto 
        ORDER BY p.id_pedido DESC";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Pedidos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px; }
        h2 { text-align: center; color: #1a252f; }
        table { width: 100%; max-width: 900px; margin: 20px auto; border-collapse: collapse; background: #fff; border-radius: 8px; overflow: hidden; }
        th, td { padding: 12px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background-color: #e67e22; color: white; }
        .btn { display: block; width: 180px; margin: 20px auto; text-align: center; padding: 10px; background: #2c3e50; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Lista de Pedidos Realizados</h2>

    <table>
        <tr>
            <th>ID Pedido</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Dirección de Envío</th>
            <th>Método de Pago</th>
            <th>Fecha</th>
        </tr>
        <?php
        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['id_pedido'] . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre_producto']) . "</td>";
                echo "<td>" . $fila['cantidad'] . "</td>";
                echo "<td>" . htmlspecialchars($fila['direccion']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['metodo_pago']) . "</td>";
                echo "<td>" . $fila['fecha_pedido'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'>No hay pedidos guardados aún.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php" class="btn">Volver a la tienda</a>

</body>
</html>