@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-20">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/radiant-gradient.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="mx-auto w-full">
    <div class="relative overflow-hidden">
      <div class="container mx-auto py-16">
        <div class="flex flex-col justify-evenly items-center lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex-grow lg:w-1/2 flex flex-col items-start gap-y-5 lg:pt-10">
            <div class="w-full flex justify-center lg:justify-start flex-row gap-3" data-aos="fade-right">
              <div class="h-8 w-1 bg-primary-blue hidden lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-in-right" data-aos-duration="1000">Videography</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">Capture the essence of your brand through high-quality videography services, tailored to meet your specific needs. </p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000">Our skilled videographers excel at producing a wide range of video content, including promotional videos, corporate documentaries, and social media clips. We work with you to understand your vision and bring it to life with stunning visuals and engaging storytelling.</p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/videographer-pana.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="lg:container mx-auto flex flex-col my-20 lg:flex-row">
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-l-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl lg:text-center">A significant 36% of marketing professionals aim to boost brand visibility and attract fresh audiences through video marketing efforts. </p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl lg:text-center">An impressive 88% of businesses surveyed in a study maintain specialized teams for the production of video content, highlighting its strategic role in marketing.</p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-r-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl lg:text-center">The majority, 77%, in a survey of marketers prefer YouTube as their primary platform for hosting marketing videos, signifying its central importance in video marketing. </p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">From pre-production planning to final edits, we manage the entire videography process to ensure your video content is professional and impactful. </p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Our team uses state-of-the-art equipment and techniques to create videos that captivate your audience and convey your message effectively. Let us help you showcase your brand in the most dynamic and compelling way possible.</p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection