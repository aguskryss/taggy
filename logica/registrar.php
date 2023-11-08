<?php
require_once('../controllers/authController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena']; 
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Llamar a la función del controlador para registrar el usuario
    $mensaje = registrarUsuario($nombre, $correo, $telefono, $contrasena, $confirmar_contrasena);
    

    // Mostrar el mensaje resultante
    echo $mensaje;
}
?>
