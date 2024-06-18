<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/Icon.png') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased bg-custom-blue text-slate-100">
      {{-- <div>
        <img src="{{ asset('images/KNYA6641.jpg') }}" alt="">
      </div> --}}
      <div class="sticky top-0 bg-black z-40">
        @include('components.nav-bar')
      </div>
      @yield('content')
      <footer class="bg-black">
        @include('components.footer')
      </footer>
      @yield('scripts')
      <script>
        const largeScreenBreakpoint = 1024;

        // Function to check if the current window width is large
        function isLargeScreen() {
            return window.matchMedia(`(min-width: ${largeScreenBreakpoint}px)`).matches;
        }

        $('#nav-hamburger').on('click', function() {
          if (!isLargeScreen()) {
            $('#nav-list').slideToggle();
          }
        });

        $('#nav-list a').on('click', function() {
          if (!isLargeScreen()) {
            $('#nav-list').slideToggle();
          }
        });
      </script>
    </body>
</html>
