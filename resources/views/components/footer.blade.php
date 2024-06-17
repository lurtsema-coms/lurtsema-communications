<div class="container mx-auto flex flex-col lg:flex-row justify-between py-10 gap-6">
  <div class="flex flex-row gap-5 justify-start">
    <p class="text-lg">All Rights Reserved {{ date('Y') }}</p>
    <a href="{{ route('terms') }}" class="text-lg underline">Terms</a>
    <a class="text-lg underline">Privacy Policy</a>
  </div>
  <div class="flex flex-col sm:flex-row gap-5 items-start justify-start">
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