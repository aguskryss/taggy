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
            <a href="panel.php" id="enlacePerfiles" class="nav-link">
              <p>Perfiles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="taggys.php" id="enlaceTaggys" class="nav-link">
              <p>Taggys</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="configuracion.php" id="enlaceConfiguracion" class="nav-link">
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

  <script>
$(document).ready(function(){
    // Obtiene la URL actual
    var currentUrl = window.location.href;
   
    //Itera a través de los enlaces y compara con la URL actual
    $(".nav-sidebar a").each(function(){
        var linkUrl = $(this).attr("href");

        // Compara las URLs
        if(currentUrl.indexOf(linkUrl) !== -1){
            // Agrega la clase 'active' al enlace correspondiente
            $(this).addClass("active");
        }
    });
});
</script>