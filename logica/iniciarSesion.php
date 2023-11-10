<?php
session_start();

require_once('../controllers/authController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Llamar a la función del controlador para registrar el usuario
$registro = login($correo, $contrasena);

if ($registro === "error") {
    // Manejar el caso de error
    echo "error";
} else {
    // Manejar el caso de éxito
    // $registro ahora contiene el array asociativo con la información del usuario
    // Puedes acceder a los elementos del array, por ejemplo: $registro['nombre']
    
        $_SESSION['activo'] = true;
        
        $_SESSION['idUsuario'] = $registro['usuarioId'];
        $_SESSION['email'] = $registro['email'];
        $_SESSION['clave'] = $registro['clave'];
        $_SESSION['nombre'] = $registro['nombre'];
        $_SESSION['telefono'] = $registro['telefono'];

}

    
    // if(!$registro){
    //     $error = "Error, acceso invalido";
    //   }else{
    //     //crea session
        
  
   
       
  
    //   }
    
      //echo $registro;
}
?>
