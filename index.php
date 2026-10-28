<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanStyle - Tienda de Ropa y Calzado</title>
    <style>
        /* =======================================================
        ESTILOS GENERALES Y BÁSICOS (CSS)
        ======================================================= */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            color: #333333;
            line-height: 1.6;
        }

        /* Envoltorio principal para mantener el contenido centrado */
        .contenedor {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        /* =======================================================
        ENCABEZADO Y NAVEGACIÓN
        ======================================================= */
        header {
            background-color: #1a252f;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #3498db;
        }

        header h1 {
            font-size: 2.2rem;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }

        header p {
            font-size: 1rem;
            color: #bdc3c7;
            margin-bottom: 15px;
        }

        nav {
            background-color: #2c3e50;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin: 0 15px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.95rem;
        }

        /* =======================================================
        SECCIONES Y TÍTULOS
        ======================================================= */
        section {
            background-color: #ffffff;
            margin: 25px 0;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
        }

        .titulo-seccion {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.6rem;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 10px;
        }

        /* =======================================================
        CATÁLOGO DE PRODUCTOS (GRID/FLEX SENCILLO)
        ======================================================= */
        .grid-productos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .tarjeta-producto {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            width: 230px;
            padding: 15px;
            text-align: center;
            background-color: #fafafa;
        }

        .imagen-producto {
            width: 100%;
            height: 160px;
            background-color: #eaeded;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            margin-bottom: 12px;
        }

        .tarjeta-producto h3 {
            font-size: 1.1rem;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .precio {
            font-size: 1.2rem;
            color: #27ae60;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .btn-comprar {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
        }

        /* =======================================================
        FORMULARIOS CENTRADOS Y ORDENADOS
        ======================================================= */
        .contenedor-formularios {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .caja-formulario {
            background-color: #fafafa;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        .caja-formulario h3 {
            text-align: center;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .grupo-campo {
            margin-bottom: 15px;
            text-align: left;
        }

        .grupo-campo label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 0.9rem;
            color: #555;
        }

        .grupo-campo input, 
        .grupo-campo select, 
        .grupo-campo textarea {
            width: 100%;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.95rem;
        }

        .btn-enviar {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            font-size: 1rem;
        }

        /* =======================================================
        PIE DE PÁGINA (FOOTER)
        ======================================================= */
        footer {
            background-color: #1a252f;
            color: #ffffff;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
            font-size: 0.9rem;
        }

        /* Adaptabilidad para móviles */
        @media (max-width: 600px) {
            nav ul li {
                display: block;
                margin: 8px 0;
            }
        }
    </style>
</head>
<body>

    <!-- ENCABEZADO DE LA TIENDA -->
    <header>
        <h1>URBANSTYLE</h1>
        <p>Tienda Oficial de Ropa y Calzado Urbano</p>
    </header>

    <!-- NAVEGACIÓN -->
    <nav>
        <ul>
            <li><a href="#catalogo">Catálogo</a></li>
            <li><a href="#registro">Registro</a></li>
            <li><a href="#login">Iniciar Sesión</a></li>
            <li><a href="#pedido">Hacer Pedido</a></li>
        </ul>
    </nav>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="contenedor">

        <!-- SECCIÓN 1: CATÁLOGO DE PRODUCTOS -->
        <section id="catalogo">
            <h2 class="titulo-seccion">Catálogo de Productos</h2>
            <div class="grid-productos">

                <!-- Producto 1 -->
                <div class="tarjeta-producto">
                    <div class="imagen-producto">👟</div>
                    <h3>Tenis Urban Pro</h3>
                    <p class="precio">$89.99</p>
                    <button class="btn-comprar" onclick="seleccionarProducto('Tenis Urban Pro')">Comprar</button>
                </div>

                <!-- Producto 2 -->
                <div class="tarjeta-producto">
                    <div class="imagen-producto">👕</div>
                    <h3>Playera Casual</h3>
                    <p class="precio">$25.50</p>
                    <button class="btn-comprar" onclick="seleccionarProducto('Playera Casual')">Comprar</button>
                </div>

                <!-- Producto 3 -->
                <div class="tarjeta-producto">
                    <div class="imagen-producto">🧥</div>
                    <h3>Chamarra Moderna</h3>
                    <p class="precio">$75.00</p>
                    <button class="btn-comprar" onclick="seleccionarProducto('Chamarra Moderna')">Comprar</button>
                </div>

                <!-- Producto 4 -->
                <div class="tarjeta-producto">
                    <div class="imagen-producto">👖</div>
                    <h3>Pantalón Mezclilla</h3>
                    <p class="precio">$45.00</p>
                    <button class="btn-comprar" onclick="seleccionarProducto('Pantalón Mezclilla')">Comprar</button>
                </div>

            </div>
        </section>

        <!-- SECCIÓN 2: FORMULARIOS DE REGISTRO E INICIO DE SESIÓN -->
        <section id="registro">
            <h2 class="titulo-seccion">Acceso de Usuarios</h2>
            
            <div class="contenedor-formularios">

                <!-- Formulario de Registro conectado a PHP -->
                <div class="caja-formulario">
                    <h3>Registro de Usuario</h3>
                    <form action="registro.php" method="POST">
                        <div class="grupo-campo">
                            <label for="reg-nombre">Nombre Completo:</label>
                            <input type="text" id="reg-nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                        </div>

                        <div class="grupo-campo">
                            <label for="reg-correo">Correo Electrónico:</label>
                            <input type="email" id="reg-correo" name="correo" placeholder="correo@ejemplo.com" required>
                        </div>

                        <div class="grupo-campo">
                            <label for="reg-telefono">Teléfono:</label>
                            <input type="tel" id="reg-telefono" name="telefono" placeholder="555-123-4567" required>
                        </div>

                        <div class="grupo-campo">
                            <label for="reg-password">Contraseña:</label>
                            <input type="password" id="reg-password" name="password" placeholder="******" required>
                        </div>

                        <button type="submit" class="btn-enviar">Registrarse</button>
                    </form>
                </div>

                <!-- Formulario de Iniciar Sesión conectado a PHP -->
                <div class="caja-formulario" id="login">
                    <h3>Iniciar Sesión</h3>
                    <form action="login.php" method="POST">
                        <div class="grupo-campo">
                            <label for="login-correo">Correo Electrónico:</label>
                            <input type="email" id="login-correo" name="correo" placeholder="correo@ejemplo.com" required>
                        </div>

                        <div class="grupo-campo">
                            <label for="login-password">Contraseña:</label>
                            <input type="password" id="login-password" name="password" placeholder="******" required>
                        </div>

                        <button type="submit" class="btn-enviar" style="background-color: #3498db;">Ingresar</button>
                    </form>
                </div>

            </div>
        </section>

        <!-- SECCIÓN 3: FORMULARIO DE PEDIDO -->
        <section id="pedido">
            <h2 class="titulo-seccion">Realizar un Pedido</h2>
            <div style="max-width: 500px; margin: 0 auto;">
                <form action="pedido.php" method="POST" class="caja-formulario" style="max-width: 100%;">
                    
                    <div class="grupo-campo">
                        <label for="ped-producto">Producto Seleccionado:</label>
                        <select id="ped-producto" name="producto" required>
                            <option value="">-- Seleccione un producto --</option>
                            <option value="Tenis Urban Pro">Tenis Urban Pro - $89.99</option>
                            <option value="Playera Casual">Playera Casual - $25.50</option>
                            <option value="Chamarra Moderna">Chamarra Moderna - $75.00</option>
                            <option value="Pantalón Mezclilla">Pantalón Mezclilla - $45.00</option>
                        </select>
                    </div>

                    <div class="grupo-campo">
                        <label for="ped-cantidad">Cantidad:</label>
                        <input type="number" id="ped-cantidad" name="cantidad" min="1" value="1" required>
                    </div>

                    <div class="grupo-campo">
                        <label for="ped-direccion">Dirección de Envío:</label>
                        <textarea id="ped-direccion" name="direccion" rows="3" placeholder="Calle, Número, Colonia, Ciudad" required></textarea>
                    </div>

                    <div class="grupo-campo">
                        <label for="ped-pago">Método de Pago:</label>
                        <select id="ped-pago" name="metodo_pago" required>
                            <option value="tarjeta">Tarjeta de Crédito / Débito</option>
                            <option value="transferencia">Transferencia Bancaria</option>
                            <option value="efectivo">Pago contra entrega</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-enviar" style="background-color: #e67e22;">Confirmar Pedido</button>
                </form>
            </div>
        </section>

    </div>

    <!-- PIE DE PÁGINA -->
    <footer>
        <p>&copy; 2026 UrbanStyle Store. Todos los derechos reservados.</p>
        <p>Diseño HTML & CSS limpio y básico.</p>
    </footer>

    <!-- SCRIPT SENCILLO PARA AUTOSELECCIONAR PRODUCTOS -->
    <script>
        function seleccionarProducto(nombreProducto) {
            const selectProducto = document.getElementById('ped-producto');
            selectProducto.value = nombreProducto;
            window.location.href = '#pedido';
        }
    </script>
</body>
</html>