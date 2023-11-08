<?php
    require_once('logica/conexion.php');
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
                <h2>Registro de Usuario</h2>
                <form id="registroForm" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                        <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
                        <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Registrarse</button>
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
    $("#registroForm").submit(function(e){
    e.preventDefault();
        var formData = $("#registroForm").serialize();
        $.ajax({
                type: "POST",
                url: "logica/registrar.php", // Nombre del nuevo script PHP para manejar el registro
                data: formData,
                success: function(response) {
                    // Mostrar mensaje de éxito o error
                    $("#mensajeRegistro").html(response);
                }
            });
        
                
});
</script>