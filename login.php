<?php
require_once('logica/conexion.php');
session_start();

    
if(!empty($_SESSION['activo'])){
    //redirigimos al panel.php
    header("Location:panel");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Iniciar sesión</h2>
                <form id="loginForm" method="post">
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Iniciar Sesión</button>
                    <div id="mensajeRegistro"></div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $("#loginForm").submit(function(e){
    e.preventDefault();
        var formData = $("#loginForm").serialize();
        $.ajax({
                type: "POST",
                url: "logica/iniciarSesion.php", // Nombre del nuevo script PHP para manejar el registro
                data: formData,
                success: function(response) {
                    // Mostrar mensaje de éxito o error
                    window.location.href = "panel";
                }
            });
        
                
});
</script>