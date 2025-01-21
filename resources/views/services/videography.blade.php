@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 opacity-20">
    <img class="absolute bottom-0 object-cover min-w-full min-h-full" src="{{ asset('images/graphics/radiant-gradient.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="w-full mx-auto">
    <div class="relative overflow-hidden">
      <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center justify-evenly lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex flex-col items-start flex-grow lg:w-1/2 gap-y-5 lg:pt-10">
            <div class="flex flex-row justify-center w-full gap-3 lg:justify-start" data-aos="fade-right">
              <div class="hidden w-1 h-8 bg-primary-blue lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="w-full text-4xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-in-right" data-aos-duration="1000">Videography</h1>
            <p class="text-2xl font-bold text-center text-gray-300 lg:text-left" data-aos="fade-up">Capture the essence of your brand through high-quality videography services, tailored to meet your specific needs. </p>
            <p class="text-lg text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000">Our skilled videographers excel at producing a wide range of video content, including promotional videos, corporate documentaries, and social media clips. We work with you to understand your vision and bring it to life with stunning visuals and engaging storytelling.</p>
            <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
          <div class="relative flex-grow w-full lg:w-1/2 lg:place-self-stretch" data-aos="fade-right">
            <img class="object-cover opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full" src="{{ asset('images/graphics/videographer-pana.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col mx-auto my-20 lg:container lg:flex-row">
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:rounded-l-3xl lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up">
        <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
        <p class="text-xl lg:text-center">A significant 36% of marketing professionals aim to boost brand visibility and attract fresh audiences through video marketing efforts. <a target="_blank" title="View Reference" href="https://blog.hubspot.com/marketing/video-marketing-statistics" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
        <p class="text-xl lg:text-center">An impressive 88% of businesses surveyed in a study maintain specialized teams for the production of video content, highlighting its strategic role in marketing. <a target="_blank" title="View Reference" href="https://blog.hubspot.com/marketing/video-marketing-statistics" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:rounded-r-3xl lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
        <p class="text-xl lg:text-center">The majority, 77%, in a survey of marketers prefer YouTube as their primary platform for hosting marketing videos, signifying its central importance in video marketing. <a target="_blank" title="View Reference" href="https://blog.hubspot.com/marketing/video-marketing-statistics" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center my-20 gap-y-5">
        <div class="max-w-screen-md">
          <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">From pre-production planning to final edits, we manage the entire videography process to ensure your video content is professional and impactful. </p>
          <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">Our team uses state-of-the-art equipment and techniques to create videos that captivate your audience and convey your message effectively. Let us help you showcase your brand in the most dynamic and compelling way possible.</p>
        </div>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection