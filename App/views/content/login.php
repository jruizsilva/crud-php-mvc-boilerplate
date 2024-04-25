<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php include("App/views/inc/nav.php"); ?>
  <div class="container py-4">
    <h1 class="text-center">Iniciar sesión</h1>
    <form autocomplete="off">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
  </div>

  <?php include("App/views/inc/script.php"); ?>
</body>

</html>