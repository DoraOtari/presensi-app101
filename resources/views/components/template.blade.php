<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config("app.name") }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        @livewireStyles
        @livewireScripts
        @stack('styleku')
    </head>
    <body>
        <nav class="navbar navbar-light bg-white navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"><i class="bi-camera"></i> Presensi App</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="offcanvas offcanvas-end"
                    tabindex="-1"
                    id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel"
                >
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Offcanvas
                        </h5>
                        <button
                            type="button"
                            class="btn-close text-reset"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body">
                        @auth
                            <ul class="navbar-nav nav-underline justify-content-start flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}" ><i class="bi bi-house"></i> Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="{{ url('/profil') }}"><i class="bi bi-person-bounding-box"></i> Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('jabatan') ? 'active' : '' }}" href="{{ url('/jabatan') }}"><i class="bi bi-diagram-2"></i> Jabatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('karyawan*') ? 'active' : '' }}" href="{{ url('/karyawan') }}"><i class="bi bi-people"></i> Karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('riwayat_absensi*') ? 'active' : '' }}" href="{{ url('riwayat-absensi') }}">
                                      <i class="bi bi-calendar"></i> Riwayat Absensi</a>
                                  </li>
                            </ul>
                            <div class="hstack gap-2">
                                @if (Auth::user()->avatar)
                                    <img src="{{ asset(Auth::user()->avatar) }}" width="35" class="img-thumbnail rounded-circle">
                                @else
                                    <img src="https://placehold.co/35?text=A" class="img-thumbnail rounded-circle">
                                @endif
                                <small class="lead text-capitalize">{{ Auth::user()->name }}</small>
                                <div class="vr"></div>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger rounded-circle">
                                        <i class="bi-power"></i>
                                    </button>
                                </form>
                            </div>
                        @else
                            <a class="ms-auto" href="{{ route('register') }}">
                                <i class="bi-person-plus"></i> Register
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        
        {{ $slot }}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scriptku')
    </body>
</html>