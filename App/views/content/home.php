<?php require_once ("App/views/inc/head_portfolio.php"); ?>

<body class="dark-mode">
  <?php require_once ("App/views/inc/nav_portfolio.php"); ?>

  <!-- ABOUT -->
  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
          <div class="about-text">
            <small class="small-text">Bienvenido!</small>
            <h1>
              <span class="d-block">Hola, soy Jonathan</span>
              <span class="role">Desarrollador Web</span>
            </h1>

            <p>Building a successful product is a challenge. I am highly energetic in user experience design, interfaces
              and web development.</p>

            <div class="custom-btn-group mt-4">
              <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12">
          <div class="about-image svg">
            <img src="<?php echo APP_URL; ?>/App/views/img/undraw_web_developer.svg" class="img-fluid" alt="svg image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php require_once ("App/views/inc/script_portfolio.php"); ?>
</body>

</html>