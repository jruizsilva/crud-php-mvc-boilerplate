<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo APP_URL; ?>">App</a>
    <div>
      <a href="<?php echo APP_URL; ?>/login" class="btn btn-light btn-sm">Iniciar sesión</a>
      <a href="<?php echo APP_URL; ?>/register" class="btn btn-primary btn-sm">Crear cuenta</a>
      <button onclick="logout()" class="btn btn-danger btn-sm">Cerrar sesión</button>
    </div>
  </div>
</nav>