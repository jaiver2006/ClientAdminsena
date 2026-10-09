<header class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top admin-navbar" style="min-height:70px;">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="{{ url('/') }}" aria-label="Ir al menú principal">
            <i class="fas fa-home text-success me-2"></i>
            Sistema de Gestión SENA
        </a>
        <!-- Botón móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerAdminContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headerAdminContent">
            <!-- Menú escritorio -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('area.*') ? 'active' : '' }}"
                        href="{{ route('area.create') }}">
                        <i class="fas fa-layer-group"></i> Áreas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('computer.*') ? 'active' : '' }}"
                        href="{{ route('computers.index') }}">
                        <i class="fas fa-desktop"></i> Computadores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('training-center.*') ? 'active' : '' }}"
                        href="{{ route('training-center.create') }}">
                        <i class="fas fa-building"></i> Centros
                    </a>
                </li>

                @if (\Illuminate\Support\Facades\Route::has('course.create'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('course.*') ? 'active' : '' }}"
                            href="{{ route('course.create') }}">
                            <i class="fas fa-book"></i> Cursos
                        </a>
                    </li>
                @endif
                @if (\Illuminate\Support\Facades\Route::has('teacher.create'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('teacher.*') ? 'active' : '' }}"
                            href="{{ route('teacher.create') }}">
                            <i class="fas fa-chalkboard-user"></i> Instructores
                        </a>
                    </li>
                @endif
                @if (\Illuminate\Support\Facades\Route::has('aprendiz.create'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('aprendiz.*') ? 'active' : '' }}"
                            href="{{ route('aprendiz.create') }}">
                            <i class="fas fa-user-graduate"></i> Aprendices
                        </a>
                    </li>
                @endif
                @if (\Illuminate\Support\Facades\Route::has('uniforme.index'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('uniforme.*') ? 'active' : '' }}"
                            href="{{ route('uniforme.index') }}">
                            <i class="fas fa-shirt"></i> Uniforme
                        </a>
                    </li>
                @endif
                @if (\Illuminate\Support\Facades\Route::has('noticias.index'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('noticia.*') ? 'active' : '' }}"
                            href="{{ route('noticias.index') }}">
                            <i class="fas fa-newspaper"></i> Noticias
                        </a>
                    </li>
                @endif

            </ul>

            <!-- Menú móvil -->
            <ul class="navbar-nav d-lg-none">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="fas fa-bars"></i> Navegación del Panel
                    </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{ route('area.create') }}">Áreas</a></li>

                        <li><a class="dropdown-item" href="{{ route('computers.index') }}">Computadores</a></li>

                        <li><a class="dropdown-item" href="{{ route('training-center.create') }}">Centros</a></li>

                        @if (\Illuminate\Support\Facades\Route::has('course.create'))
                            <li><a class="dropdown-item" href="{{ route('course.create') }}">Cursos</a></li>
                        @endif

                        @if (\Illuminate\Support\Facades\Route::has('teacher.create'))
                            <li><a class="dropdown-item" href="{{ route('teacher.create') }}">Instructores</a></li>
                        @endif

                        @if (\Illuminate\Support\Facades\Route::has('aprendiz.create'))
                            <li><a class="dropdown-item" href="{{ route('aprendiz.create') }}">Aprendices</a></li>
                        @endif

                        @if (\Illuminate\Support\Facades\Route::has('uniforme.index'))
                            <li><a class="dropdown-item" href="{{ route('uniforme.index') }}">Uniforme SENA</a></li>
                        @endif

                    </ul>
                </li>

            </ul>

            <!-- Perfil -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item me-3 d-flex align-items-center">
                    <span class="badge bg-success p-2">
                        <i class="fas fa-user-shield"></i> Administrador
                    </span>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                        data-bs-toggle="dropdown">

                        <div class="rounded-circle bg-white text-dark fw-bold d-flex justify-content-center align-items-center me-2"
                            style="width:35px;height:35px;">
                            AD
                        </div>

                        Admin Regional

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Mi Perfil</a></li>

                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Ajustes</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            {{-- Logout real: usa POST y CSRF para cerrar la sesion de forma segura. --}}
                            @if (\Illuminate\Support\Facades\Route::has('logout'))
                                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt me-2"></i>Cerrar sesión
                                    </button>
                                </form>
                            @endif
                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div>
</header>
