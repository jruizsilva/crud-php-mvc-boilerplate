<?php require_once ("App/views/inc/head_portfolio.php"); ?>

<body data-bs-theme="dark">
  <?php require_once ("App/views/inc/nav_portfolio.php"); ?>

  <!-- ABOUT -->
  <section class="d-flex justify-content-center align-items-center" style="padding-top:120px;">
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

        <div class="col-lg-5 col-md-12 d-lg-block d-none">
          <div class="about-image svg">
            <img src="<?php echo APP_URL; ?>/App/views/img/undraw_web_developer.svg" class="img-fluid" alt="svg image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Projects-->
  <section class="projects-section" id="proyectos">
    <div class="container">
      <h1 class="display-5 mb-4">Proyectos</h1>
      <!-- Project One Row-->
      <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
        <div class="col-lg-6 d-flex align-items-center justify-content-center set-bg"
          data-setbg="<?php echo APP_URL; ?>/App/views/img/twitter-clon.png" style="min-height: 300px" ;>
          <a href="https://www.youtube.com/watch?v=ajCkEWhbnkQ" class="play-btn video-popup">
            <i class="fa fa-play"></i>
          </a>
        </div>
        <div class="col-lg-6">
          <div class="bg-body-tertiary text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4>
                  <a href="https://twitter-clon-frontend.vercel.app/login" class="link-opacity-75" target="_blank">Clon
                    Twitter</a>
                </h4>
                <p class="mb-2 text-white-50">Desarrollar una aplicación que permite a los usuarios publicar posts,
                  comentar, dar likes a posts o comentarios, guardar posts, seguir usuarios. Subir imagenes de perfil y
                  de fondo, editar los datos del usuario</p>
                <p class="mb-0">Stack:
                  <span class="text-white-50">Typescript, React.js, Java, Spring</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Two Row-->
      <div class="row gx-0 justify-content-center">
        <div class="col-lg-6 d-flex align-items-center justify-content-center set-bg"
          data-setbg="<?php echo APP_URL; ?>/App/views/img/chat-app.png" style="min-height: 300px" ;>
          <a href="https://www.youtube.com/watch?v=s1oYghlDoOs" class="play-btn video-popup">
            <i class="fa fa-play"></i>
          </a>
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-body-tertiary text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4>
                  <a href="https://basic-chat-with-websocket-frontend.vercel.app/" class="link-opacity-75"
                    target="_blank">Chat
                    App</a>
                </h4>
                <p class="mb-2 text-white-50">Desarrollar una aplicación web que permite a los usuarios chatear en
                  salas
                  publicas o privadas</p>
                <p class="mb-0">Stack:
                  <span class="text-white-50">Typescript, React.js, Java, Spring</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once ("App/views/inc/script_portfolio.php"); ?>
</body>

</html>