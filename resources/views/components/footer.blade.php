<section class="bg-black bg-opacity-30">
  <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-stretch gap-3 py-10">
    <div class="flex-grow flex flex-col md:flex-row gap-6 w-full justify-between md:justify-around lg:justify-between items-start text-slate-400">
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Marketing</h4>
        <a href="{{ route('services', 'business-consulting') }}" class="text-md underline">Business Consulting</a>
        <a href="{{ route('services', 'social-media-marketing') }}" class="text-md underline">Social Media Marketing</a>
        <a href="{{ route('services', 'google-ads') }}" class="text-md underline">Google Ads</a>
        <a href="{{ route('services', 'seo-optimization') }}" class="text-md underline">SEO Optimization</a>
        <a href="{{ route('services', 'political-outreach') }}" class="text-md underline">Political Outreach</a>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Creatives</h4>
        <a href="{{ route('services', 'videography') }}" class="text-md underline">Videography</a>
        <a href="{{ route('services', 'website-development') }}" class="text-md underline">Website Development</a>
        <a href="{{ route('services', 'graphic-design') }}" class="text-md underline">Graphic Design</a>
        <p class="text-md">Logo Development</p>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Other</h4>
        <p class="text-md">Solar Panels</p>
        <p class="text-md">Real Estate Consulting</p>
        <p class="text-md">Sales Training</p>
        <p class="text-md">Campaign USA</p>
      </div>
    </div>
    <div class="flex flex-col justify-between items-end w-full">
      <a href="{{ route('home') }}#">
        <img class="max-w-14" src="{{ asset('images/Icon.png') }}" alt="">
      </a>
      <div class="">
        <p class="text-end font-besbas text-lg sm:text-2xl">INFO@LURTSEMACOMMUNICATIONS.COM</p>
        <p class="text-end font-besbas text-lg sm:text-2xl">6390 NORM DRIVE, ANCHORAGE, ALASKA 99507, UNITED STATES</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-black">
  <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-start py-10 gap-6">
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-5 justify-start items-center sm:items-start">
      <p class="text-lg">All Rights Reserved {{ date('Y') }}</p>
      <a href="{{ route('terms') }}" class="text-lg underline">Terms</a>
      <a href="{{ route('privacy-policy') }}" class="text-lg underline">Privacy Policy</a>
    </div>
    <div class="flex flex-col sm:flex-row gap-5 items-center justify-center">
      <div class="flex justify-center items-center gap-3">
        <a class="hover:opacity-70 transition-all duration-200 ease-in-out" target="_blank" href="https://www.youtube.com/@LurtsemaCommunications"><img src="{{ asset('images/logo-socmed/logo-yt.png') }}" class="w-11" alt=""></a>
        <a class="hover:opacity-70 transition-all duration-200 ease-in-out" target="_blank" href="https://www.facebook.com/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-fb.png') }}" class="w-11" alt=""></a>
        <a class="hover:opacity-70 transition-all duration-200 ease-in-out" target="_blank" href="https://www.instagram.com/lurtsemacommunications/"><img src="{{ asset('images/logo-socmed/logo-ig.png') }}" class="w-11" alt=""></a>
        <a class="hover:opacity-70 transition-all duration-200 ease-in-out" target="_blank" href="http://www.linkedin.com/company/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-li.png') }}" class="w-11" alt=""></a>
      </div>
      <div class="flex justify-center items-center gap-3">
          <a class="bg-slate-50 text-black px-5 py-1 rounded-full font-semibold text-nowrap hover:opacity-70 transition-all duration-200 ease-in-out" href="https://hrportal.lurtsemacommunications.com/" target="_blank">Employee Login</a>
      </div>
    </div>
  </div>
</section>