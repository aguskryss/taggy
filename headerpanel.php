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
            <a href="#taggys" id="enlaceTaggys" class="nav-link">
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