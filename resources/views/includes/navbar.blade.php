<style>
    .sidebar {
        position: fixed !important;
        top: 0;
        left: 0;
        bottom: 0;
        width: 290px;
        height: 100vh;
        overflow-y: auto;
        z-index: 1000;

    }

    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.22);
        border-radius: 10px;
    }

    .main {
        width: calc(100% - 290px) !important;
        margin-left: 290px !important;
    }

    .sidebar .brand-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        padding: 0 12px 28px;
        margin: 30px 18px 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.09);
        overflow: hidden;
    }

    .sidebar .brand-box h1 {
        color: #bfe8c4;
        font-size: 2rem;
        line-height: 1;
    }

    .sidebar .brand-logo {
        width: 100px !important;
        max-width: 100px !important;
        height: 100px !important;
        max-height: 100px !important;
        display: grid;
        place-items: center;
        overflow: hidden;
    }

    .sidebar .brand-logo img {
        display: block;
        width: 100px !important;
        max-width: 100px !important;
        height: 100px !important;
        max-height: 100px !important;
        object-fit: contain;
    }

    .sidebar .brand-box p {
        color: #d2e8d9;
        font-size: 1rem;
    }

    @media (max-width: 980px) {
        .sidebar {
            position: relative !important;
            width: 100%;
            height: auto;
            max-height: none;
        }

        .main {
            width: 100% !important;
            margin-left: 0 !important;
        }
    }
</style>

<aside class="sidebar">
    {{-- Marca institucional conservada: texto SENA, logo original y nombre del panel. --}}
    <div class="brand-box">
        <h1>SENA</h1>
        <div class="brand-logo">
            <img src="{{ asset('Img/sena-logo.png') }}" alt="Logo SENA" width="100" height="100"
                style="width: 100px !important; height: 100px !important; max-width: 100px !important; max-height: 100px !important;">
        </div>
        <p>Panel Administrativo</p>
    </div>

    <nav class="sidebar-nav" aria-label="Menú principal">
        {{-- La navegacion conserva las rutas existentes y marca la pagina activa. --}}
        <ul class="menu">
            <li>
                <a class="nav-item {{ request()->routeIs('area.*') ? 'active' : '' }}"
                    href="{{ route('area.create') }}">
                    <span class="nav-icon"><i class="fas fa-layer-group"></i></span>
                    <span>Áreas</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('computer.*') ? 'active' : '' }}"
                    href="{{ route('computers.index') }}">
                    <span class="nav-icon"><i class="fas fa-desktop"></i></span>
                    <span>Computadores</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('training-center.*') ? 'active' : '' }}"
                    href="{{ route('training-center.create') }}">
                    <span class="nav-icon"><i class="fas fa-building"></i></span>
                    <span>Centros</span>
                </a>
            </li>
            @if (\Illuminate\Support\Facades\Route::has('course.create'))
                <li>
                    <a class="nav-item {{ request()->routeIs('course.*') ? 'active' : '' }}"
                        href="{{ route('course.create') }}">
                        <span class="nav-icon"><i class="fas fa-book"></i></span>
                        <span>Cursos</span>
                    </a>
                </li>
            @endif
            @if (\Illuminate\Support\Facades\Route::has('teacher.create'))
                <li>
                    <a class="nav-item {{ request()->routeIs('teacher.*') ? 'active' : '' }}"
                        href="{{ route('teacher.create') }}">
                        <span class="nav-icon"><i class="fas fa-chalkboard-user"></i></span>
                        <span>Instructores</span>
                    </a>
                </li>
            @endif
            @if (\Illuminate\Support\Facades\Route::has('aprendiz.create'))
                <li>
                    <a class="nav-item {{ request()->routeIs('aprendiz.*') ? 'active' : '' }}"
                        href="{{ route('aprendiz.create') }}">
                        <span class="nav-icon"><i class="fas fa-user-graduate"></i></span>
                        <span>Aprendices</span>
                    </a>
                </li>
            @endif
            @if (\Illuminate\Support\Facades\Route::has('noticias.index'))
                <li>
                    <a class="nav-item {{ request()->routeIs('noticias.*') ? 'active' : '' }}"
                        href="{{ route('noticias.index') }}">
                        <span class="nav-icon"><i class="fas fa-newspaper"></i></span>
                        <span>Noticias</span>
                    </a>
                </li>
            @endif
            @if (\Illuminate\Support\Facades\Route::has('informacion.index'))
                <li>
                    <a class="nav-item {{ request()->routeIs('informacion.*') ? 'active' : '' }}"
                        href="{{ route('informacion.index') }}">
                        <span class="nav-icon"><i class="fas fa-circle-info"></i></span>
                        <span>¿Quiénes somos?</span>
                    </a>
                </li>
            @endif
            @if (\Illuminate\Support\Facades\Route::has('uniforme.index'))
                <li>
                    <a class="nav-item {{ request()->routeIs('uniforme.*') ? 'active' : '' }}"
                        href="{{ route('uniforme.index') }}">
                        <span class="nav-icon"><i class="fas fa-shirt"></i></span>
                        <span>Uniforme SENA</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</aside>
