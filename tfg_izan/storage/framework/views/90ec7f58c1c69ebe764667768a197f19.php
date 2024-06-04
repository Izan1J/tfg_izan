<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Angel de la Guarda Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Angel de la guarda</span>
    </a>
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->apellidos); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route('admin.noticias.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-clipboard"></i>
                    <p>
                        Tablon
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.alumnos.create')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-baby"></i>
                    <p>
                        Inscripcion
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.noticias.create')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-pen"></i>
                    <p>
                        Subir al tablon
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-fw fa-sign-out-alt nav-icon"></i>
                        <p>Cerrar sesión</p>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside><?php /**PATH C:\xampp\htdocs\tfg_izan\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>