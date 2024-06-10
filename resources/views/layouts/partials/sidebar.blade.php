<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('images/logo.png')}}" alt="Angel de la Guarda Logo" class="brand-image">
      <span class="brand-text font-weight-light">Angel de la guarda</span>
    </a>
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}} {{Auth::user()->apellidos}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.noticias.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-clipboard"></i>
                    <p>
                        Tablon
                    </p>
                </a>
            </li>
            @role('padre')
            <li class="nav-item">
                <a href="{{ route('admin.alumnos.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-baby"></i>
                    <p>
                        Inscripcion
                    </p>
                </a>
            </li>
            @endrole
            @role(['profe','admin'])
            <li class="nav-item">
                <a href="{{ route('admin.noticias.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-pen"></i>
                    <p>
                        Subir al tablon
                    </p>
                </a>
            </li>
            @endrole
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
</aside>