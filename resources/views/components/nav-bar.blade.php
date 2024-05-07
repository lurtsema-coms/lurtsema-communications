<nav id="nav-bar" class="py-4 d-flex flex-column justify-content-between px-3 px-md-0">
  <div id="nav-big-screen" class="d-flex justify-content-between align-items-center ">
    <a class="text-white text-decoration-none text-nowrap me-5" href="#"><img id="nav-bar-logo" src="{{ asset('images/logo-white.png') }}" alt=""></a>
    <div class="nav-bar-hide flex-grow-1 d-flex justify-content-between align-items-end">
      <ul id="nav-list" class="nav-list d-flex justify-content-evenly align-items-end gap-5 list-unstyled m-0">
        <li><a class="text-white text-decoration-none text-nowrap" href="#about">About Us</a></li>
        <li><a class="text-white text-decoration-none text-nowrap" href="#services">Services</a></li>
        <li><a class="text-white text-decoration-none text-nowrap" href="#">Campaign USA</a></li>
      </ul>
      <a href="#" class="btn-light bg-light text-dark px-3 py-1 rounded-pill text-decoration-none text-nowrap">Get in touch ></a>
    </div>
    <div id="nav-bar-toggle">
      <button id="nav-hamburger" class="rounded d-flex flex-column justify-content-center align-items-center gap-1" type="button">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
      </button>
    </div>
  </div>
  <div id="nav-small-screen" class="display-md-none">
    <hr class="mb-1">
    <div class="d-flex flex-column justify-content-between align-items-start">
      <ul id="nav-list" class="nav-list d-flex flex-column gap-4 list-unstyled">
        <li><a class="text-white text-decoration-none text-nowrap" href="#about">About Us</a></li>
        <li><a class="text-white text-decoration-none text-nowrap" href="#services">Services</a></li>
        <li><a class="text-white text-decoration-none text-nowrap" href="#">Campaign USA</a></li>
      </ul>
      <a href="#" class="bg-light text-dark px-3 py-1 rounded-pill text-decoration-none text-nowrap">Get in touch ></a>
    </div>
  </div>
</nav>