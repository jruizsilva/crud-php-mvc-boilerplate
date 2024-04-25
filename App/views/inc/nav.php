<nav class="navbar py-3 navbar-expand-lg border-bottom border-3 border-white">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fs-4" href="<?php echo APP_URL; ?>">App</a>
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
      <div class="offcanvas-body d-flex justify-content-end flex-column flex-lg-row p-4 p-lg-0">
        <?php if (isset($_SESSION['user'])) { ?>
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
        <?php } ?>

        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <?php if (isset($_SESSION['user'])) { ?>
            <a href="<?php echo APP_URL; ?>/logout" class="btn btn-outline-secondary">Cerrar sesión</a>
          <?php } ?>
          <?php if (!isset($_SESSION['user'])) { ?>
            <a href="<?php echo APP_URL; ?>/login" class="text-white">Iniciar sesión</a>
            <a href="<?php echo APP_URL; ?>/register" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Crear cuenta</a>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</nav>