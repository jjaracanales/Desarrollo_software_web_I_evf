<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'VentasFix')</title>
  <link rel="stylesheet" href="{{ asset('template/css/core.css') }}">
  <link rel="stylesheet" href="{{ asset('template/css/theme-default.css') }}">
  <link rel="stylesheet" href="{{ asset('template/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendor/fonts/tabler-icons.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.4.0/dist/tabler-icons.min.css">
</head>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo p-3">
          <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">VentasFix</span>
          </a>
        </div>
        <ul class="menu-inner py-1">
          <li class="menu-item"><a class="menu-link" href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="menu-item"><a class="menu-link" href="{{ route('users.index') }}">Usuarios</a></li>
          <li class="menu-item"><a class="menu-link" href="{{ route('products.index') }}">Productos</a></li>
          <li class="menu-item"><a class="menu-link" href="{{ route('clients.index') }}">Clientes</a></li>
        </ul>
      </aside>
      <div class="layout-page">
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme">
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item lh-1 me-3">{{ auth()->user()->email ?? '' }}</li>
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-danger">Salir</button>
                </form>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('template/js/helpers.js') }}"></script>
  <script src="{{ asset('template/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('template/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.js') }}"></script>
  <script src="{{ asset('template/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('template/js/menu.js') }}"></script>
  @stack('scripts')
</body>
</html>