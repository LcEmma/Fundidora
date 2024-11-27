<?php
// Incluir conexión a la base de datos
include 'conexion.php';

// Recibir datos del formulario
$nombre_cliente = $_POST['nombre_cliente'];
$representante_ventas = $_POST['representante_ventas'];
$contacto = $_POST['contacto'];
$domicilio = $_POST['domicilio'];
$rfc = $_POST['rfc'];
$metodo_pago = $_POST['metodo_pago'];
$numero_pedido = $_POST['numero_pedido'];
$fecha_solicitud = $_POST['fecha_solicitud'];
$fecha_entrega = $_POST['fecha_entrega'];
$direccion_entrega = $_POST['direccion_entrega'];
$producto = $_POST['producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$cantidad = $_POST['cantidad'];
$precio_unitario = $_POST['precio_unitario'];

// Calcular totales
$subtotal = $cantidad * $precio_unitario;
$iva = $subtotal * 0.16;
$total = $subtotal + $iva;

// Guardar datos en la base de datos
$sql = "INSERT INTO ordenes_venta (nombre_cliente, representante_ventas, contacto, domicilio, rfc, metodo_pago, numero_pedido, fecha_solicitud, fecha_entrega, direccion_entrega, producto, descripcion_producto, cantidad, precio_unitario, subtotal, iva, total)
        VALUES ('$nombre_cliente', '$representante_ventas', '$contacto', '$domicilio', '$rfc', '$metodo_pago', '$numero_pedido', '$fecha_solicitud', '$fecha_entrega', '$direccion_entrega', '$producto', '$descripcion_producto', $cantidad, $precio_unitario, $subtotal, $iva, $total)";

if ($conn->query($sql) === TRUE) {
    // Si la inserción es exitosa, mostrar ticket
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Orden Realizada</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 20px;
                text-align: center;
            }
            .ticket {
                background: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                display: inline-block;
                text-align: left;
                margin-top: 20px;
            }
            .ticket h2 {
                color: #333333;
                margin-bottom: 10px;
            }
            .ticket p {
                margin: 5px 0;
            }
            .ticket .totales {
                margin-top: 15px;
                font-weight: bold;
            }
            .boton {
                display: block;
                margin: 20px auto;
                padding: 10px 20px;
                background-color: #4caf50;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                font-size: 16px;
            }
            .boton:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Orden Realizada</h1>
        <div class='ticket'>
            <h2>Detalles del Pedido</h2>
            <p><strong>Cliente:</strong> $nombre_cliente</p>
            <p><strong>Representante de Ventas:</strong> $representante_ventas</p>
            <p><strong>Contacto:</strong> $contacto</p>
            <p><strong>Domicilio:</strong> $domicilio</p>
            <p><strong>RFC:</strong> $rfc</p>
            <p><strong>Método de Pago:</strong> $metodo_pago</p>
            <p><strong>Número de Pedido:</strong> $numero_pedido</p>
            <p><strong>Fecha de Solicitud:</strong> $fecha_solicitud</p>
            <p><strong>Fecha de Entrega:</strong> $fecha_entrega</p>
            <p><strong>Dirección de Entrega:</strong> $direccion_entrega</p>
            <hr>
            <h2>Producto</h2>
            <p><strong>Nombre:</strong> $producto</p>
            <p><strong>Descripción:</strong> $descripcion_producto</p>
            <p><strong>Cantidad:</strong> $cantidad</p>
            <p><strong>Precio Unitario:</strong> $$precio_unitario</p>
            <hr>
            <h2 class='totales'>Totales</h2>
            <p><strong>Subtotal:</strong> $$subtotal</p>
            <p><strong>IVA (16%):</strong> $$iva</p>
            <p><strong>Total:</strong> $$total</p>
        </div>
        <a class='boton' href='formulario_venta.html'>Registrar un Nuevo Pedido</a>
    </body>
    </html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
