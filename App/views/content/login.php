<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php include("App/views/inc/nav.php"); ?>
  <div class="container py-4">
    <h1 class="fs-3">Iniciar sesión</h1>
    <form autocomplete="off" id="loginForm">
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
  </div>

  <?php include("App/views/inc/script.php"); ?>
</body>

</html>