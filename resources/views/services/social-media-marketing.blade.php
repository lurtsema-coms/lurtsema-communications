@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 opacity-5">
    <img class="absolute bottom-0 object-cover min-w-full min-h-full" src="{{ asset('images/graphics/endless-constellation.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="w-full mx-auto">
    <div class="relative">
      <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center justify-evenly lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex flex-col items-start flex-grow lg:w-1/2 gap-y-5">
            <div class="flex flex-row justify-center w-full gap-3 lg:justify-start" data-aos="fade-right">
              <div class="hidden w-1 h-8 bg-primary-blue lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="w-full text-4xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-in-right" data-aos-duration="1000">Social Media Marketing</h1>
            <p class="text-2xl font-bold text-center text-gray-300 lg:text-left" data-aos="fade-up">Harness the power of social media platforms to expand your reach and engage your audience effectively.</p>
            <p class="text-lg text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000"> Our social media marketing services are designed to create meaningful connections between your brand and your target audience. We develop customized strategies that align with your business objectives, utilizing data-driven insights to craft compelling content and manage your social media presence across all major platforms.</p>
            <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
          <div class="relative flex-grow w-full lg:w-1/2 lg:place-self-stretch" data-aos="fade-right">
            <img class="object-cover opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full" src="{{ asset('images/graphics/social-media.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col mx-auto my-20 lg:container lg:flex-row">
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-opacity-50 lg:py-5 lg:rounded-l-3xl lg:items-center lg:justify-start lg:gap-10 bg-primary-blue" data-aos="fade-up">
        <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
        <p class="text-xl lg:text-center">More than three-quarters of the world’s population aged 13+ uses social media, with a total of 4.74 billion active social media users.<a target="_blank" title="View Reference" href="https://blog.hootsuite.com/social-media-marketing/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-opacity-50 lg:py-5 lg:items-center lg:justify-start lg:gap-10 bg-primary-blue" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
        <p class="text-xl lg:text-center">Unlike traditional advertising, social media marketing allows for two-way communication between individuals and brands.  <a target="_blank" title="View Reference" href="https://blog.hootsuite.com/social-media-marketing/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-opacity-50 lg:py-5 lg:rounded-r-3xl lg:items-center lg:justify-start lg:gap-10 bg-primary-blue" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
        <p class="text-xl lg:text-center">Social media marketing creates a sense of community, fostering brand loyalty. <a target="_blank" title="View Reference" href="https://blog.hootsuite.com/social-media-marketing/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center my-20 gap-y-5">
        <div class="max-w-screen-md">
          <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">Our goal is to ensure your website not only ranks higher on search engines but also provides a great user experience.</p>
          <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">By staying up-to-date with the latest SEO trends and algorithms, we help you stay ahead of the competition. Partner with us to boost your online presence and drive more qualified traffic to your site. </p>
        </div>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection