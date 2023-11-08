<?php
require_once "includes/header.php";
require_once 'logica/conexion.php';
?>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar lado-izquierdo">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $nombre ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     <!-- Sidebar Menu -->
      <nav class="navSide">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a id="perfiles" class="nav-link">
              <p>Perfiles</p>
            </a>
          </li>
          <li class="nav-item">
            <a id="taggys" class="nav-link">
              <p>Taggys</p>
            </a>
          </li>
          <li class="nav-item">
            <a id="configuracion" class="nav-link">
              <p>Configuración de la cuenta</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="salir.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Salir
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container perfiles" id="contenedor-perfiles">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>Mis Perfiles</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center parrafo-perfiles">Aquí se muestran todos los perfiles que has creado. Para que sean públicos, deberás comprar la Taggy de tu elección y vincularla.</p>
                    </div>
                </div>
            </div>
            <div class="container taggys" id="contenedor-taggys">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Hola</h1>
                    </div>
                    <div class="col-lg-6">
                        <h1>Chau</h1>
                    </div>
                </div>
            </div>
            <div class="container configuracion" id="contenedor-configuracion">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>Configuración</h1>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center formularioEdit">
                        <div class="col-lg-6">
                            <form>
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" value="<?php echo $nombre ?>">
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico" value="<?php echo $email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono:</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>

            </div>

        </section>
    </div>

    <!-- Main content -->


  <?php
require_once "includes/footer.php";
?>
<script>
        $(document).ready(function() {
        // Manejador de eventos clic para el enlace "Perfiles"
            $(".container").hide();
            // Muestra el contenedor de Perfiles
            $("#contenedor-perfiles").show();
         // Manejador de eventos clic para el enlace "Perfiles"
            $("#perfiles").addClass("active");


         $("#perfiles").click(function() {
            // Oculta todos los contenedores
            $(".container").hide();
            // Muestra el contenedor de Perfiles
            $("#contenedor-perfiles").show();

            // Agrega la clase "active" al enlace activo y cambia su color
            $(this).addClass("active");
            $("#taggys").removeClass("active");
            $("#configuracion").removeClass("active");
        });

        // Manejador de eventos clic para el enlace "Taggys"
        $("#taggys").click(function() {
            // Oculta todos los contenedores
            $(".container").hide();
            // Muestra el contenedor de Taggys
            $("#contenedor-taggys").show();

            // Agrega la clase "active" al enlace activo y cambia su color
            $(this).addClass("active");
            $("#perfiles").removeClass("active");
            $("#configuracion").removeClass("active");
        });

        $("#configuracion").click(function() {
            // Oculta todos los contenedores
            $(".container").hide();
            // Muestra el contenedor de Taggys
            $("#contenedor-configuracion").show();

            // Agrega la clase "active" al enlace activo y cambia su color
            $(this).addClass("active");
            $("#perfiles").removeClass("active");
            $("#taggys").removeClass("active");
        });
    });
        // Agrega un manejador de eventos clic al enlace con id "enlace-perfiles"

</script>