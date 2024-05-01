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

            <p class="mb-3 fw-lighter" style="font-size: 18px; color: #5b5b5b;">Me enfoco en desarrollar aplicaciones
              dinámicas y robustas que se adaptan a las necesidades específicas de cada proyecto.</p>
            <div class="mt-4">
              <a href="https://drive.google.com/file/d/1X8CFS9J6LXxO59KWM_I5xDfRf-k067Lo/view?usp=sharing"
                class="btn mr-lg-2 custom-btn" target="_blank">
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
  <section class="projects-section">
    <div class="container">
      <h1 class="display-5 mb-4" id="proyectos">Proyectos</h1>
      <!-- Project One Row-->
      <div class="row gx-0 justify-content-center">
        <div class="col-lg-6 d-flex align-items-center justify-content-center set-bg"
          data-setbg="<?php echo APP_URL; ?>/App/views/img/contacts-app.png" style="min-height: 300px">
          <a href="https://www.youtube.com/watch?v=Jgt9z4czawE" class="play-btn video-popup">
            <i class="fa fa-play"></i>
          </a>
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-body-tertiary text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4>
                  <a href="http://jonathanrs.infinityfreeapp.com/contacts" class="link-opacity-75"
                    target="_blank">Contactos
                    App</a>
                </h4>
                <p class="mb-2 text-white-50">Desarrollar una aplicación web que permite a los usuarios agendar los
                  datos de sus contactos.</p>
                <p class="mb-0">Stack:
                  <span class="text-white-50">PHP, MySQL, Bootstrap 5, MVC</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Two Row-->
      <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
        <div class="col-lg-6 d-flex align-items-center justify-content-center set-bg"
          data-setbg="<?php echo APP_URL; ?>/App/views/img/twitter-clon.png" style="min-height: 300px">
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
      <!-- Project Third Row-->
      <div class="row gx-0 justify-content-center">
        <div class="col-lg-6 d-flex align-items-center justify-content-center set-bg"
          data-setbg="<?php echo APP_URL; ?>/App/views/img/chat-app.png" style="min-height: 300px">
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

  <!-- Contact-->
  <section class="contact-section" id="contacto">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 card py-4 bg-body-tertiary">
          <div class="card-body text-center">
            <i class="fas fa-envelope mb-2" style="color: #64a19d;"></i>
            <h4 class="text-uppercase m-0">Email</h4>
            <hr class="my-4 mx-auto" />
            <div class="small text-body"><a href="mailto:ruizsilvajonathan@gmail.com">ruizsilvajonathan@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="social d-flex justify-content-center">
        <a class="mx-2" href="https://www.linkedin.com/in/jruizsilva" target="_blank"><i
            class="fa-brands fa-linkedin-in"></i></a>
        <a class="mx-2" href="https://github.com/jruizsilva" target="_blank"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </section>

  <!-- Footer-->
  <footer class="footer small text-center text-white-50">
    <div class="container px-4 px-lg-5">&copy; Creado por Jonathan Ruiz Silva - 2024</div>
  </footer>

  <?php require_once ("App/views/inc/script_portfolio.php"); ?>
</body>

</html>