<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php include("App/views/inc/nav.php"); ?>
  <div class="container py-4">
    <h1 class="text-center">Crear cuenta</h1>
    <form autocomplete="off" id="registerForm">
      <div class="mb-3">
        <label for="text" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Crear cuenta</button>
    </form>
  </div>

  <?php include("App/views/inc/script.php"); ?>
</body>

</html>