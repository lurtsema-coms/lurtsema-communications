<nav id="nav-bar" class="container mx-auto py-5 px-10 flex flex-col justify-between lg:flex-row lg:justify-between bg-black">
  <div class="flex flex-row justify-between items-center">
    <a class="no-underline text-nowrap max-w-[200px]" href="#">
      <img id="nav-bar-logo" class="h-full" src="{{ asset('images/logo-white.png') }}" alt="">
    </a>
    <button id="nav-hamburger" class="rounded flex flex-col gap-1 w-[38px] lg:hidden" type="button">
      <div class="bg-primary-blue rounded w-full h-[5px]"></div>
      <div class="bg-primary-blue rounded w-full h-[5px]"></div>
      <div class="bg-primary-blue rounded w-full h-[5px]"></div>
    </button>
  </div>
  <div id="nav-list" class="hidden lg:inline flex-grow">
    <div class="flex flex-grow gap-5 flex-col items-start justify-between lg:flex-row my-5 lg:mt-5 lg:mb-0 lg:ml-5">
      <ul class="flex flex-col gap-5 lg:flex-row lg:items-end lg:gap-12 lg:ml-5">
        <li><a class="text-decoration-none text-nowrap hover:opacity-75" href="#about">About Us</a></li>
        <li><a class="text-decoration-none text-nowrap hover:opacity-75" href="#services">Services</a></li>
        <li><a class="text-decoration-none text-nowrap hover:opacity-75" href="#">Campaign USA</a></li>
      </ul>
      <a href="#" class="flex flex-row justify-center items-center text-nowrap hover:opacity-75 lg:bg-slate-200 lg:text-black lg:font-bold rounded-full lg:px-3 lg:py-1">
        Get in touch
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
      </a>
    </div>
  </div>
</nav>