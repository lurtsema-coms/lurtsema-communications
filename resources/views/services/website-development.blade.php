@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 -z-10" data-aos="zoom-out" data-aos-duration="1500">
    <img class="object-cover object-center min-w-full min-h-full opacity-50" src="{{ asset('images/graphics/boy-on-space.svg') }}" alt="">
  </div>
  <main class="container flex flex-col items-end justify-center mx-auto my-10">
    <div class="flex flex-col items-start justify-start max-w-screen-md gap-10">
      <div class="flex flex-row gap-3" data-aos="fade-right">
        <div class="w-1 h-8 bg-primary-blue"></div>
        <p class="text-2xl font-semibold">OUR SERVICES</p>
      </div>
      <h1 class="text-3xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-in-right" data-aos-duration="1000">Website Development</h1>
      <p class="text-lg font-semibold text-gray-300 lg:text-5xl" data-aos="fade-up">Build a dynamic and user-friendly website that attracts visitors and converts them into customers.</p>
    </div>
    <div class="flex flex-col items-start justify-start max-w-screen-md gap-5 mt-10" data-aos="fade-up" data-aos-duration="1500">
      <p class="text-lg text-white">Our team specializes in creating websites that are not only visually appealing but also optimized for performance and usability. We take a holistic approach, integrating responsive design, fast load times, and intuitive navigation to enhance user experience.</p>
      <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1000">Contact Us</a>
    </div>
  </main>
</div>
<div class="flex flex-col mx-auto my-20 md:container md:gap-y-10">
  <div class="flex flex-col self-end justify-center w-full gap-5 px-10 py-10 bg-opacity-50 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-slate-900 md:rounded-full" data-aos="fade-right">
    <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
    <p class="text-xl text-gray-300">There are over 1.09 billion websites globally, indicating a vast digital ecosystem where a strong web presence is essential for competitiveness.  <a target="_blank" title="View Reference" href="https://www.webfx.com/web-design/statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
  </div>
  <div class="flex flex-col self-center justify-center w-full gap-5 px-10 py-10 bg-opacity-50 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-slate-900 md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
    <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
    <p class="text-xl text-gray-300">50% of consumers judge a business based on its website design, making it a critical factor in marketing and brand perception. <a target="_blank" title="View Reference" href="https://www.webfx.com/web-design/statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
  </div>
  <div class="flex flex-col self-start justify-center w-full gap-5 px-10 py-10 bg-opacity-50 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-slate-900 md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
    <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
    <p class="text-xl text-gray-300">Mobile devices account for 65.49% of global website traffic, emphasizing the need for mobile-responsive web development. <a target="_blank" title="View Reference" href="https://blog.hubspot.com/marketing/web-design-stats-for-2020" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
  </div>
</div>
<div class="container mx-auto">
  <div class="flex flex-col items-center justify-center my-20 gap-y-5">
    <div class="max-w-screen-md">
      <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">Whether you need an e-commerce platform, a corporate website, or a personal blog, we tailor our development process to meet your specific requirements. </p>
      <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">Our services include everything from initial design concepts to ongoing maintenance and updates. With our expertise, your website will serve as a powerful tool to engage visitors and drive business growth.</p>
    </div>
    <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
  </div>
</div>

@endsection
@section('scripts')
@endsection