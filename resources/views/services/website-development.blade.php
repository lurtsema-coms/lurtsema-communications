@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 -z-10 opacity-10" data-aos="zoom-out" data-aos-duration="1500">
    <img class="min-h-full min-w-full object-cover object-center" src="{{ asset('images/graphics/boy-on-space.svg') }}" alt="">
  </div>
  <main class="container mx-auto my-10 flex flex-col justify-center items-end">
    <div class="max-w-screen-md flex flex-col items-start justify-start gap-10">
      <div class="flex flex-row gap-3" data-aos="fade-right">
        <div class="h-8 w-1 bg-primary-blue"></div>
        <p class="text-2xl font-semibold">OUR SERVICES</p>
      </div>
      <h1 class="text-3xl text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-in-right" data-aos-duration="1000">Website Development</h1>
      <p class="text-lg lg:text-5xl font-semibold text-gray-300" data-aos="fade-up">Build a dynamic and user-friendly website that attracts visitors and converts them into customers.</p>
    </div>
    <div class="max-w-screen-md mt-10 flex flex-col justify-start items-start gap-5" data-aos="fade-up" data-aos-duration="1500">
      <p class="text-lg text-white">Our team specializes in creating websites that are not only visually appealing but also optimized for performance and usability. We take a holistic approach, integrating responsive design, fast load times, and intuitive navigation to enhance user experience.</p>
      <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1000">Contact Us</a>
    </div>
  </main>
</div>
<div class="md:container mx-auto flex flex-col my-20 md:gap-y-10">
  <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-end justify-center md:items-center gap-5 md:gap-10 bg-slate-900 bg-opacity-50 md:rounded-full" data-aos="fade-right">
    <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
    <p class="text-xl text-gray-300">There are over 1.09 billion websites globally, indicating a vast digital ecosystem where a strong web presence is essential for competitiveness.  </p>
  </div>
  <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-center justify-center md:items-center gap-5 md:gap-10 bg-slate-900 bg-opacity-50 md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
    <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
    <p class="text-xl text-gray-300">50% of consumers judge a business based on its website design, making it a critical factor in marketing and brand perception.  </p>
  </div>
  <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-start justify-center md:items-center gap-5 md:gap-10 bg-slate-900 bg-opacity-50 md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
    <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
    <p class="text-xl text-gray-300">Mobile devices account for 65.49% of global website traffic, emphasizing the need for mobile-responsive web development.</p>
  </div>
</div>
<div class="container mx-auto">
  <div class="flex flex-col gap-y-5 justify-center items-center my-20">
    <div class="max-w-screen-md">
      <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">Whether you need an e-commerce platform, a corporate website, or a personal blog, we tailor our development process to meet your specific requirements. </p>
      <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Our services include everything from initial design concepts to ongoing maintenance and updates. With our expertise, your website will serve as a powerful tool to engage visitors and drive business growth.</p>
    </div>
    <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
  </div>
</div>

@endsection
@section('scripts')
@endsection