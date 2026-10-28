-- Crear la base de datos
CREATE DATABASE tienda_urbanstyle;
USE tienda_urbanstyle;

-- Tabla para almacenar los usuarios registrados
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla para los productos del catálogo
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(50)
);

-- Tabla para guardar los pedidos realizados
CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    direccion TEXT NOT NULL,
    metodo_pago VARCHAR(50),
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

-- Insertar catálogo de productos de prueba
INSERT INTO productos (nombre_producto, precio, categoria) VALUES
('Tenis Urban Pro', 89.99, 'Calzado'),
('Playera Casual', 25.50, 'Ropa'),
('Chamarra Moderna', 75.00, 'Ropa'),
('Pantalón Mezclilla', 45.00, 'Ropa');