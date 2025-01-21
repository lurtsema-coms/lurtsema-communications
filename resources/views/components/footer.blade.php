<section class="bg-black bg-opacity-30">
  <div class="container flex flex-col items-center justify-between gap-3 py-10 mx-auto lg:flex-row lg:items-stretch">
    <div class="flex flex-col items-start justify-between flex-grow w-full gap-6 md:flex-row md:justify-start md:gap-28 xl:gap-40 text-slate-400">
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Marketing</h4>
        <a href="{{ route('services', 'business-consulting') }}" class="underline text-md">Business Consulting</a>
        <a href="{{ route('services', 'social-media-marketing') }}" class="underline text-md">Social Media Marketing</a>
        <a href="{{ route('services', 'google-ads') }}" class="underline text-md">Google Ads</a>
        <a href="{{ route('services', 'seo-optimization') }}" class="underline text-md">SEO Optimization</a>
        <a href="{{ route('services', 'political-outreach') }}" class="underline text-md">Political Outreach</a>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Creatives</h4>
        <a href="{{ route('services', 'videography') }}" class="underline text-md">Videography</a>
        <a href="{{ route('services', 'website-development') }}" class="underline text-md">Website Development</a>
        <a href="{{ route('services', 'graphic-design') }}" class="underline text-md">Graphic Design</a>
        <p class="text-md">Logo Development</p>
      </div>
    </div>
    <div class="flex flex-col items-end justify-between w-full">
      <a href="{{ route('home') }}#">
        <img class="max-w-14" src="{{ asset('images/Icon.png') }}" alt="">
      </a>
      <div class="">
        <p class="text-lg text-end font-besbas sm:text-2xl">INFO@LURTSEMACOMMUNICATIONS.COM</p>
        <p class="text-lg text-end font-besbas sm:text-2xl">6390 NORM DRIVE, ANCHORAGE, ALASKA 99507, UNITED STATES</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-black">
  <div class="container flex flex-col items-center justify-between gap-6 py-10 mx-auto lg:flex-row lg:items-start">
    <div class="flex flex-col items-center justify-start gap-3 sm:flex-row sm:gap-5 sm:items-start">
      <p class="text-lg">All Rights Reserved {{ date('Y') }}</p>
      <a href="{{ route('terms') }}" class="text-lg underline">Terms</a>
      <a href="{{ route('privacy-policy') }}" class="text-lg underline">Privacy Policy</a>
    </div>
    <div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
      <div class="flex items-center justify-center gap-3">
        <a class="transition-all duration-200 ease-in-out social-link hover:opacity-70" target="_blank" href="https://www.youtube.com/@LurtsemaCommunications"><img src="{{ asset('images/logo-socmed/logo-yt.png') }}" class="w-11" alt=""></a>
        <a class="transition-all duration-200 ease-in-out social-link hover:opacity-70" target="_blank" href="https://www.facebook.com/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-fb.png') }}" class="w-11" alt=""></a>
        <a class="transition-all duration-200 ease-in-out social-link hover:opacity-70" target="_blank" href="https://www.instagram.com/lurtsemacommunications/"><img src="{{ asset('images/logo-socmed/logo-ig.png') }}" class="w-11" alt=""></a>
        <a class="transition-all duration-200 ease-in-out social-link hover:opacity-70" target="_blank" href="http://www.linkedin.com/company/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-li.png') }}" class="w-11" alt=""></a>
      </div>
      {{-- <div class="flex items-center justify-center gap-3">
          <a class="px-5 py-1 font-semibold text-black transition-all duration-200 ease-in-out rounded-full bg-slate-50 text-nowrap hover:opacity-70" href="https://hrportal.lurtsemacommunications.com/" target="_blank">Employee Login</a>
      </div> --}}
    </div>
  </div>
</section>