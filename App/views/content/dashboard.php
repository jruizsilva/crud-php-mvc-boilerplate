<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php require_once("App/views/inc/nav.php"); ?>
  <div class="container mt-5">
    <h1 class="display-1">Dashboard</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <a href="/users">Users management</a> |
        <a href="/posts">Posts management</a>
      </div>
    </div>
  </div>

  <?php require_once("App/views/inc/script.php") ?>
</body>

</html>