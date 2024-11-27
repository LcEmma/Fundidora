# Proyecto Fundidora - Formulario de Compra-Venta

Este proyecto implementa un formulario de compra-venta para una fundidora de aluminio. El sistema permite registrar órdenes de compra, calcular totales automáticamente, y almacenar los datos en una base de datos.

## Funcionalidades
- Registro de datos del cliente, pedido y productos.
- Cálculos automáticos de subtotal, IVA (16%) y total.
- Almacenamiento de las órdenes en una base de datos MySQL.
- Generación de un ticket después de completar el registro.

## Requisitos
- **Servidor local**: XAMPP, WAMP, u otro servidor con soporte para PHP y MySQL.
- **PHP**: Versión 7.4 o superior.
- **MySQL**: Versión 5.7 o superior.

## Configuración
1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/proyecto-fundidora.git

## Configura la base de datos:
Crea una base de datos llamada fundidora.
Importa el archivo schema.sql (si tienes un archivo SQL con la estructura).
Configura el archivo conexion.php con tus credenciales de base de datos.
Uso
## Abre el formulario en tu navegador:
http://localhost/proyecto-fundidora/formulario_venta.html
Completa los campos requeridos.

## Envía el formulario y genera el ticket.
Estructura del Proyecto

Fundidora/
├── conexion.php              # Configuración de la conexión a la base de datos
├── formulario_venta.html     # Página del formulario de compra-venta
├── procesar_formulario.php   # Script para procesar los datos
├── estilos.css               # Estilos del formulario
├── README.md                 # Documentación del proyecto
Licencia
Este proyecto está bajo la licencia MIT. Puedes usarlo y modificarlo según tus necesidades.