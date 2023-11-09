<?php
session_start();

require_once('../controllers/authController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nuevaContrasena = $_POST['nuevaContrasena'];
    $repetirContrasena = $_POST['repetirContrasena'];
    $idUsuario = $_POST['idUsuario'];
    
    
        if($nuevaContrasena == $repetirContrasena){
            $registro = cambiarContrasena($nuevaContrasena, $idUsuario);
            echo $registro;
        }else{
            echo "Las contraseñas no coinciden";
        }

    // Llamar a la función del controlador para registrar el usuario
        
    
    
    
      //echo $registro;
}


?>
