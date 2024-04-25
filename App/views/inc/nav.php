<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo APP_URL; ?>">App</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div>
        <a href="<?php echo APP_URL; ?>/login" class="btn btn-light btn-sm">Iniciar sesión</a>
        <a href="<?php echo APP_URL; ?>/register" class="btn btn-primary btn-sm">Crear cuenta</a>
        <button onclick="logout()" class="btn btn-danger btn-sm">Cerrar sesión</button>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg bg-transparent">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fs-4" href="#">App</a>
    <!-- Toggler button -->
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <!-- Offcanvas header -->
      <div class="offcanvas-header border-bottom border-2 border-white">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">App</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- Offcanvas body -->
      <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
        <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3 fs-5">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <a href="/login" class="text-white">Login</a>
          <a href="/register" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Sign up</a>
        </div>
      </div>
    </div>
  </div>
</nav>