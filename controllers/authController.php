<?php
require_once('../logica/conexion.php');

function registrarUsuario($nombre, $correo, $telefono, $contrasena, $confirmar_contrasena) {
    global $conn;

    if ($contrasena !== $confirmar_contrasena) {
        return "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    } else {
        // Insertar datos en la base de datos
        $sql = "INSERT INTO Usuario (nombre, email, telefono, clave) VALUES ('$nombre', '$correo', '$telefono', '$contrasena')";
    
        $numFilasAfectadas = $conn->exec($sql);

        if ($numFilasAfectadas > 0) {
            return "Registro exitoso. ¡Bienvenido, $nombre!";
        } else {
            return "Error al registrar: " . $sql . "<br>" . $conn->error;
        }
    }
}

function login($email, $contrasena) {
    global $conn;

    $query = "SELECT email, clave, usuarioId, nombre, telefono FROM Usuario WHERE email= '$email' AND clave= '$contrasena'";
    $stmt = $conn->query($query);
    $registrosUsuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$registrosUsuario) {
        return "error";
    } else {
        return $registrosUsuario;
    }
}



function cambiarUsuario($nombre, $correo, $telefono, $usuarioId){
    global $conn;
    $sql = "UPDATE Usuario SET nombre = '$nombre', email = '$correo', telefono = '$telefono' WHERE usuarioId = '$usuarioId'";
    $numFilasAfectadas = $conn->exec($sql);

    // if($numFilasAfectadas > 0){
        return 'success';
    // }else{
    //     return 'duplicate';
    // }
}

function cambiarContrasena($nuevaContrasena, $idUsuario){
    global $conn;
    $sql = "UPDATE Usuario SET clave = '$nuevaContrasena' WHERE usuarioId = '$idUsuario'";
    $conn->exec($sql);

    return "success";
}


?>
