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
              <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>" aria-current="page" href="<?php echo APP_URL; ?>">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/contacts' ? 'active' : '' ?>" aria-current="page" href="<?php echo APP_URL; ?>/contacts">Contactos</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/dashboard' ? 'active' : '' ?>" aria-current="page" href="<?php echo APP_URL; ?>/dashboard">Dashboard</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/users' ? 'active' : '' ?>" aria-current="page" href="<?php echo APP_URL; ?>/users">Usuarios</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/posts' ? 'active' : '' ?>" aria-current="page" href="<?php echo APP_URL; ?>/posts">Posts</a>
            </li>
          </ul>
        <?php } ?>

        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
          <?php if (isset($_SESSION['user'])) { ?>
            <div class="nav-item dropdown">
              <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['user']['name']; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                <li>
                  <a href="<?php echo APP_URL; ?>/account" class="dropdown-item">Mi cuenta</a>
                </li>
                <li>
                  <a href="<?php echo APP_URL; ?>/logout" class="dropdown-item">Cerrar sesión</a>
                </li>
              </ul>
            </div>
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