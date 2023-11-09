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
    $_SESSION['idUsuario'] = $idUsuario;
    $_SESSION['email'] = $correo;
    $_SESSION['nombre'] =  $nombre;
    $_SESSION['telefono'] = $telefono;
    
    echo $registro;
    
      //echo $registro;
}


?>
