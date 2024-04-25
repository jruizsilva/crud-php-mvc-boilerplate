<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php include("App/views/inc/nav.php"); ?>
  <div class="container py-4">
    <h1 class="fs-3">Mi cuenta</h1>
    <form autocomplete="off" id="accountForm">
      <input type="hidden" id="id" value="<?php echo $_SESSION['user']['id']; ?>">
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" readonly disabled value="<?php echo $_SESSION['user']['username']; ?>" class="form-control" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Nombre*</label>
        <input type="text" value="<?php echo $_SESSION['user']['name']; ?>" class="form-control" name="name" id="name" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="<?php echo $_SESSION['user']['email']; ?>" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Actualizar datos</button>
      <?php if ($_SESSION['user']['email']) { ?>
        <button class="btn btn-success text-nowrap">Confirmar email</button>
      <?php } ?>
    </form>
  </div>

  <?php include("App/views/inc/script.php"); ?>
</body>

</html>