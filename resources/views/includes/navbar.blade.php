<style>
    /* El menu queda fijo mientras el usuario desplaza solo el contenido. */
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
                <a class="nav-item {{ request()->routeIs('area.*', 'areas.*') ? 'active' : '' }}"
                    href="{{ route('areas.index') }}">
                    <span class="nav-icon"><i class="fas fa-layer-group"></i></span>
                    <span>Áreas</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('computer.*', 'computers.*') ? 'active' : '' }}"
                    href="{{ route('computers.index') }}">
                    <span class="nav-icon"><i class="fas fa-desktop"></i></span>
                    <span>Computadores</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('training-center.*', 'training-centers.*') ? 'active' : '' }}"
                    href="{{ route('training-centers.index') }}">
                    <span class="nav-icon"><i class="fas fa-building"></i></span>
                    <span>Centros</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('course.*', 'courses.*') ? 'active' : '' }}"
                    href="{{ route('courses.index') }}">
                    <span class="nav-icon"><i class="fas fa-book"></i></span>
                    <span>Cursos</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('teacher.*', 'teachers.*') ? 'active' : '' }}"
                    href="{{ route('teachers.index') }}">
                    <span class="nav-icon"><i class="fas fa-chalkboard-user"></i></span>
                    <span>Instructores</span>
                </a>
            </li>
            <li>
                <a class="nav-item {{ request()->routeIs('aprendiz.*', 'apprentices.*') ? 'active' : '' }}"
                    href="{{ route('apprentices.index') }}">
                    <span class="nav-icon"><i class="fas fa-user-graduate"></i></span>
                    <span>Aprendices</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
