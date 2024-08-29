<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- Scripts -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}"></script>
        </script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', "{{ env('GOOGLE_ANALYTICS_ID') }}");
        </script>
        <script>
          function gtag_report_conversion(url) {
            let callback = function () {
              if (typeof(url) != 'undefined') {
                window.location = url;
              }
            };
            gtag('event', 'conversion', {
                'send_to': "{{ env('GOOGLE_ANALYTICS_ID') }}/yZUkCMXLhs4ZENbjlZQ-",
                'value': 1.0,
                'currency': 'PHP',
                'transaction_id': '',
                'event_callback': callback
            });
            return false;
          }
          </script>
    </head>
    <body class="font-inter antialiased bg-custom-blue text-slate-100 max-w-[100vw] overflow-x-hidden">
      <div class="fixed w-full h-full background-effect-gradient -left-1/2 -z-50"></div>
      <div class="fixed w-full h-full background-effect-gradient -right-1/2 -z-50"></div>
      <div class="sticky top-0 z-40 bg-black">
        @include('components.nav-bar')
      </div>
      <div>
        @yield('content')
      </div>
      <footer>
        @include('components.footer')
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      @yield('scripts')
      <script>
        $(document).ready(function() {
          AOS.init();
        });
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
        
        // Function for gtag conversion tracking
        $('a').on('click', function(event) {
          event.preventDefault();
          gtag_report_conversion($(this).attr('href'));
        });
      </script>
      <!-- svg backgrounds from SVGBackgrounds.com -->
      <!-- svg graphics from storyset.com -->
    </body>
</html>
