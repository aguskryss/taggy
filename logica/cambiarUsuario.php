<?php
session_start();

require_once('../controllers/authController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $idUsuario = $_POST['idUsuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono']; 

    // Llamar a la función del controlador para registrar el usuario
    $registro = cambiarUsuario($nombre, $correo, $telefono, $idUsuario);    
    
    echo $registro;
    
      //echo $registro;
}


?>
