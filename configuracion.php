<?php
require_once "includes/header.php";
require_once 'logica/conexion.php';
require_once "headerpanel.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container configuracion" >
                <div class="row">
                    <div class="col-lg-4" id="contenedor-configuracion">
                        <h1 class="mb-4">Configuración</h1>

                    </div>
                </div>
                <div class="row justify-content-center align-items-center formularioEdit">
                    <div class="col-lg-6">
                        <form id="cambiar-usuario">
                                <!-- Input hidden con un valor -->
                                <input type="hidden" name="idUsuario" value="<?php echo $usuarioId ?>">
                                <div class="form-group formulario">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" value="<?php echo $nombre ?>">
                                </div>
                                <div class="form-group formulario">
                                    <label for="correo">Correo electrónico</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" value="<?php echo $email ?>">
                                </div>
                                <div class="form-group formulario">
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono ?>">
                                </div>
                                <button class="btn boton-actualizar-contrasena btn-block">Cambiar Contraseña</button>
                                <button type="submit" class="btn boton-actualizar-datos btn-block">Guardar Cambios</button>
                            </form>

                        </div>
                </div>


                    <div class="row justify-content-center align-items-center formularioContrasena">

                        <div class="col-lg-6">
                            <form id="cambiar-contrasena">
                                <!-- Input hidden con un valor -->
                                <div class="form-group formulario">
                                    <label for="contrasenaActual">Contraseña Actual</label>
                                    <input type="password" class="form-control" id="contrasenaActual" name="contrasenaActual">
                                </div>
                                <div class="form-group formulario">
                                    <label for="nuevaContrasena">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="nuevaContrasena" name="nuevaContrasena">
                                </div>
                                <div class="form-group formulario">
                                    <label for="repetirContrasena">Repetir Contraseña</label>
                                    <input type="password" class="form-control" id="repetirContrasena" name="repetirContrasena">
                                </div>
                                <button type="submit" class="btn boton-actualizar-datos btn-block">Guardar Cambios</button>
                            </form>

                        </div>
                    </div>



            </section>
    </div>

            <?php
require_once "includes/footer.php";
?>
<script>
    $(document).ready(function() {

        $(".formularioContrasena").hide();
        // Botón para mostrar el Div 2 y ocultar el Div 1

        $("#contenedor-configuracion").on("click", ".volver", function(e) {
            // Aquí colocas la lógica para manejar el clic en el botón de volver
            // Puedes volver a mostrar el formularioEdit y ocultar el formularioContrasena
            // También puedes realizar otras acciones que desees al hacer clic en el botón de volver
            $(".formularioEdit").show();
            $(".formularioContrasena").hide();

            // También puedes quitar el botón de volver si ya no lo necesitas
            $(".volver").remove();

            // Log para verificar si se ejecuta el evento
        });

        $(".boton-actualizar-contrasena").on("click", function(e) {
            e.preventDefault();
            $(".formularioEdit").hide();
            $(".formularioContrasena").show();

            // Agregar el botón de volver al contenedor-configuracion
            $("#contenedor-configuracion").append('<a class="volver"><i class="fa-solid fa-backward"></i></a>');
        });


        // // Botón para mostrar el Div 1 y ocultar el Div 2
        // $(".mostrarDiv1").on("click", function() {
        //     $(".div2").hide();
        //     $(".div1").show();
        // });
    });


    $("#cambiar-usuario").submit(function(e){
      e.preventDefault();
          var formData = $("#cambiar-usuario").serialize();
          $.ajax({
                  type: "POST",
                  url: "logica/cambiarUsuario.php", // Nombre del nuevo script PHP para manejar el registro
                  data: formData,
                  success: function(response) {
                      // Mostrar mensaje de éxito o error
                      //window.location.href = "panel";
                      if(response == "success"){
                        toastr.success('Usuario actualizado correctamente!');
                        toastr.options.closeButton = true;
                      }else{
                        toastr.error('ERROR');
                        toastr.options.closeButton = true;
                      }

                  }
            });
          //console.log(formData);
    });
</script>