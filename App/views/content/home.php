<?php require_once ("App/views/inc/head_portfolio.php"); ?>

<body data-bs-theme="dark">
  <?php require_once ("App/views/inc/nav_portfolio.php"); ?>

  <!-- ABOUT -->
  <section class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 86px);">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
          <div>
            <h1 class="my-3 fw-bold display-4">
              <span class="d-block">Hola, soy Jonathan</span>
              <span class="role">Desarrollador Web</span>
            </h1>

            <p class="mb-3 fw-lighter" style="font-size: 18px; color: #5b5b5b;">Building a successful product is a
              challenge. I am
              highly energetic
              in user
              experience
              design, interfaces
              and web development.</p>

            <div class="mt-4">
              <a href="#" class="btn mr-lg-2 custom-btn">
                <i class="uil uil-file-alt"></i>
                Descargar CV
              </a>
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