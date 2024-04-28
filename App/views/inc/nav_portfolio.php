<nav class="navbar navbar-expand-lg py-4 px-0">
  <div class="container">
    <!-- Toggler button -->
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbarPorfolio" aria-controls="offcanvasNavbarPorfolio" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarPorfolio"
      aria-labelledby="offcanvasNavbarLabel">
      <!-- Offcanvas header -->
      <div class="offcanvas-header border-bottom border-2 border-white">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Porfolio</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- Offcanvas body -->
      <div class="offcanvas-body d-flex justify-content-end flex-column flex-lg-row">
        <ul
          class="navbar-nav justify-content-center align-items-center flex-grow-1 flex-lg-row flex-column gap-4 gap-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>">
              <span data-hover="Home">Home</span>
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#about">
              <span data-hover="About">About</span>
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#project">
              <span data-hover="Projects">Projects</span>
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#resume">
              <span data-hover="Resume">Resume</span>
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#contact">
              <span data-hover="Contact">Contact</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>