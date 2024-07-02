@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-25">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/cornered-stairs.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="mx-auto w-full">
    <div class="relative">
      <div class="container mx-auto py-16">
        <div class="flex flex-col justify-evenly items-center lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/online-ads.svg') }}" alt="">
          </div>
          <div class="flex-grow lg:w-1/2 flex flex-col items-start gap-y-5">
            <div class="w-full flex justify-center lg:justify-start flex-row gap-3" data-aos="fade-left">
              <div class="h-8 w-1 bg-primary-blue hidden lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-out-left" data-aos-duration="1000">Google Ads</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">Our team specializes in crafting Google Ads strategies that drive traffic and increase conversion rates. </p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000">We start by understanding your business goals and conducting thorough keyword research to identify the most effective terms for your campaigns. Our experts then create compelling ad copy and design targeted campaigns that reach your ideal customers at the right time.</p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="md:container mx-auto flex flex-col my-20 md:gap-y-10">
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-end justify-center md:items-center gap-5 md:gap-10 bg-button-blue bg-opacity-25 md:rounded-full" data-aos="fade-right">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl text-gray-300">Google Ads is highly effective for lead generation, sending targeted leads to your website or online property. <a target="_blank" title="View Reference" href="https://www.business.com/articles/6-reasons-why-your-business-should-be-using-google-adwords/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-center justify-center md:items-center gap-5 md:gap-10 bg-button-blue bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl text-gray-300">Google Ads offers an average return on investment (ROI) of 200%, meaning advertisers can expect to earn $2 for every $1 they spend on ads. <a target="_blank" title="View Reference" href="https://www.demandsage.com/google-ads-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-start justify-center md:items-center gap-5 md:gap-10 bg-button-blue bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl text-gray-300">Users directed to websites through Google Ads are 50% more likely to make a purchase compared to those coming from organic search results. <a target="_blank" title="View Reference" href="https://www.demandsage.com/google-ads-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">Once your campaigns are live, we continuously monitor performance and make data-driven adjustments to maximize your return on investment.</p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">From bid management to A/B testing, we use advanced techniques to ensure your ads deliver optimal results. Trust us to handle every aspect of your Google Ads strategy, so you can focus on running your business. </p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection