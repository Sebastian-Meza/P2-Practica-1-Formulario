<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $direccion = $_POST['direccion'];
    $metodo_pago = $_POST['metodo_pago'];

    // Para este ejemplo asignamos el ID de usuario 1 (o de un cliente general)
    $id_usuario = 1;

    // Buscar el ID del producto según el nombre seleccionado
    $consulta_prod = "SELECT id_producto FROM productos WHERE nombre_producto = '$producto' LIMIT 1";
    $res_prod = $conexion->query($consulta_prod);

    if ($res_prod && $res_prod->num_rows > 0) {
        $fila_prod = $res_prod->fetch_assoc();
        $id_producto = $fila_prod['id_producto'];
    } else {
        // ID por defecto si no se encuentra coincidencia exacta
        $id_producto = 1;
    }

    // Insertar el pedido en la base de datos
    $sql = "INSERT INTO pedidos (id_usuario, id_producto, cantidad, direccion, metodo_pago) 
            VALUES ('$id_usuario', '$id_producto', '$cantidad', '$direccion', '$metodo_pago')";

    if ($conexion->query($sql) === TRUE) {
        echo "<div style='font-family: Arial; text-align: center; padding: 40px;'>";
        echo "<h2 style='color: #2ecc71;'>¡Pedido realizado con éxito!</h2>";
        echo "<p>Gracias por tu compra. Hemos registrado tu pedido de <strong>" . htmlspecialchars($producto) . "</strong>.</p>";
        echo "<br><a href='index.php' style='background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Volver a la tienda</a> | ";
        echo "<a href='ver_pedidos.php' style='background-color: #e67e22; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Ver mis pedidos</a>";
        echo "</div>";
    } else {
        echo "Error al registrar el pedido: " . $conexion->error;
    }
}
?>