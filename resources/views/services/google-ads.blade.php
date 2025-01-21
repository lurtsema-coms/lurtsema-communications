@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 opacity-25">
    <img class="absolute bottom-0 object-cover min-w-full min-h-full" src="{{ asset('images/graphics/cornered-stairs.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="w-full mx-auto">
    <div class="relative">
      <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center justify-evenly lg:gap-10 lg:flex-row lg:items-start">
          <div class="relative flex-grow w-full lg:w-1/2 lg:place-self-stretch" data-aos="fade-right">
            <img class="object-cover opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full" src="{{ asset('images/graphics/online-ads.svg') }}" alt="">
          </div>
          <div class="flex flex-col items-start flex-grow lg:w-1/2 gap-y-5">
            <div class="flex flex-row justify-center w-full gap-3 lg:justify-start" data-aos="fade-left">
              <div class="hidden w-1 h-8 bg-primary-blue lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="w-full text-4xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-out-left" data-aos-duration="1000">Google Ads</h1>
            <p class="text-2xl font-bold text-center text-gray-300 lg:text-left" data-aos="fade-up">Our team specializes in crafting Google Ads strategies that drive traffic and increase conversion rates. </p>
            <p class="text-lg text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000">We start by understanding your business goals and conducting thorough keyword research to identify the most effective terms for your campaigns. Our experts then create compelling ad copy and design targeted campaigns that reach your ideal customers at the right time.</p>
            <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col mx-auto my-20 md:container md:gap-y-10">
      <div class="flex flex-col self-end justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-button-blue md:rounded-full" data-aos="fade-right">
        <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
        <p class="text-xl text-gray-300">Google Ads is highly effective for lead generation, sending targeted leads to your website or online property. <a target="_blank" title="View Reference" href="https://www.business.com/articles/6-reasons-why-your-business-should-be-using-google-adwords/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col self-center justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-button-blue md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
        <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
        <p class="text-xl text-gray-300">Google Ads offers an average return on investment (ROI) of 200%, meaning advertisers can expect to earn $2 for every $1 they spend on ads. <a target="_blank" title="View Reference" href="https://www.demandsage.com/google-ads-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col self-start justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-button-blue md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
        <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
        <p class="text-xl text-gray-300">Users directed to websites through Google Ads are 50% more likely to make a purchase compared to those coming from organic search results. <a target="_blank" title="View Reference" href="https://www.demandsage.com/google-ads-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center my-20 gap-y-5">
        <div class="max-w-screen-md">
          <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">Once your campaigns are live, we continuously monitor performance and make data-driven adjustments to maximize your return on investment.</p>
          <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">From bid management to A/B testing, we use advanced techniques to ensure your ads deliver optimal results. Trust us to handle every aspect of your Google Ads strategy, so you can focus on running your business. </p>
        </div>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection