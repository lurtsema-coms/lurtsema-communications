@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-20">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/slanted-gradient.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="mx-auto w-full">
    <div class="relative">
      <div class="container mx-auto py-16">
        <div class="flex flex-col justify-evenly items-center lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/political-candidate.svg') }}" alt="">
          </div>
          <div class="flex-grow lg:w-1/2 flex flex-col items-start gap-y-5">
            <div class="w-full flex justify-center lg:justify-start flex-row gap-3" data-aos="fade-left">
              <div class="h-8 w-1 bg-primary-blue hidden lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-out-left" data-aos-duration="1000">Political Outreach</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">We provide comprehensive services to help political candidates and campaigns effectively connect with voters and win elections.</p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000">Our political outreach strategies encompass grassroots initiatives, digital advertising, and targeted messaging to ensure your campaign resonates with your audience. We develop tailored plans that leverage data analytics and voter insights to optimize your outreach efforts.</p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="md:container mx-auto flex flex-col my-20 md:gap-y-10">
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-end justify-center md:items-center gap-5 md:gap-10 bg-black bg-opacity-25 md:rounded-full" data-aos="fade-right">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl text-gray-300">Political digital advertising spend grew 4.6 times from 2018 to 2020, significantly outpacing the growth in federal election spending, which grew 2.4 times. <a target="_blank" title="View Reference" href="https://www.techforcampaigns.org/impact/2020-political-digital-advertising-report" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-center justify-center md:items-center gap-5 md:gap-10 bg-black bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl text-gray-300">Despite the rapid growth, political digital spend is still less than 20% of the total spend, indicating a large potential for expansion. <a target="_blank" title="View Reference" href="https://www.techforcampaigns.org/impact/2020-political-digital-advertising-report" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-start justify-center md:items-center gap-5 md:gap-10 bg-black bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl text-gray-300">The pandemic contributed to Americans’ digital screen time rising to nearly 8 hours/day, necessitating a shift in political campaign strategies towards digital platforms. <a target="_blank" title="View Reference" href="https://www.techforcampaigns.org/impact/2020-political-digital-advertising-report" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">From managing social media campaigns and email marketing to organizing community events and canvassing, we offer a full suite of services designed to increase voter engagement and support.</p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Our team works closely with you to craft compelling messages and deliver them through the most effective channels, helping you build a strong and winning campaign.</p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection