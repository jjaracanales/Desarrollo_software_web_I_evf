<!DOCTYPE html>
<html lang="es" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VentasFix - Inicio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('template/css/core.css') }}" />
  <link rel="stylesheet" href="{{ asset('template/css/theme-default.css') }}" />
  <link rel="stylesheet" href="{{ asset('template/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('template/vendor/fonts/tabler-icons.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.4.0/dist/tabler-icons.min.css">
</head>
<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo p-3">
          <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">VentasFix</span>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <li class="menu-item active">
            <a href="{{ url('/') }}" class="menu-link">
              <i class="menu-icon tf-icons ti ti-smart-home"></i>
              <div>Inicio</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
              <i class="menu-icon tf-icons ti ti-layout-dashboard"></i>
              <div>Dashboard</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('products.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ti ti-package"></i>
              <div>Productos</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('clients.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ti ti-users"></i>
              <div>Clientes</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
              <i class="menu-icon tf-icons ti ti-user"></i>
              <div>Usuarios</div>
            </a>
          </li>
        </ul>
      </aside>

      <div class="layout-page">
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme">
          <div class="navbar-nav-right d-flex align-items-center w-100" id="navbar-collapse">
            <div class="me-auto fw-semibold">VentasFix Backoffice & API</div>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              @auth
                <li class="nav-item me-2 text-muted small">{{ auth()->user()->email }}</li>
                <li class="nav-item"><a class="btn btn-sm btn-primary" href="{{ route('dashboard') }}">Dashboard</a></li>
              @else
                <li class="nav-item"><a class="btn btn-sm btn-primary" href="{{ route('login') }}">Ingresar</a></li>
              @endauth
            </ul>
          </div>
        </nav>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row g-4 mb-4">
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <span class="d-block mb-2">Usuarios</span>
                        <h4 class="card-title mb-0">Gestión completa</h4>
                      </div>
                      <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-primary"><i class="ti ti-user"></i></span></div>
                    </div>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary mt-3">Ver</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <span class="d-block mb-2">Productos</span>
                        <h4 class="card-title mb-0">Inventario e IVA</h4>
                      </div>
                      <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-success"><i class="ti ti-package"></i></span></div>
                    </div>
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-success mt-3">Ver</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <span class="d-block mb-2">Clientes</span>
                        <h4 class="card-title mb-0">Empresas B2B</h4>
                      </div>
                      <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-warning"><i class="ti ti-users"></i></span></div>
                    </div>
                    <a href="{{ route('clients.index') }}" class="btn btn-sm btn-outline-warning mt-3">Ver</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <span class="d-block mb-2">API</span>
                        <h4 class="card-title mb-0">Sanctum Tokens</h4>
                      </div>
                      <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-info"><i class="ti ti-key"></i></span></div>
                    </div>
                    <a href="#api" class="btn btn-sm btn-outline-info mt-3">Cómo usar</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              @guest
              <div class="col-12 col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-2">Información</h5>
                    <p class="mb-0 text-muted">Para operar con el sistema debes iniciar sesión.</p>
                  </div>
                </div>
              </div>
              @endguest
              <div class="col-12 col-lg-4" id="api">
                <div class="card h-100">
                  <div class="card-header"><h5 class="mb-0">API Rápida</h5></div>
                  <div class="card-body">
                    <p class="text-muted mb-2">1) POST <code>/api/login</code> con email y password para obtener token.</p>
                    <p class="text-muted mb-2">2) Usa <code>Authorization: Bearer &lt;TOKEN&gt;</code> en tus requests.</p>
                    <p class="text-muted mb-0">3) Ejemplos: <code>GET /api/products</code>, <code>POST /api/clients</code>, etc.</p>
                  </div>
                </div>
              </div>
            </div>

            <footer class="text-center text-muted mt-5">© {{ date('Y') }} VentasFix</footer>
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
  
</body>
</html>
