@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 -z-10 opacity-40" data-aos="zoom-out" data-aos-duration="1500">
    <img class="min-h-full min-w-full object-cover object-center" src="{{ asset('images/graphics/girl-on-space.svg') }}" alt="">
  </div>
  <main class="container mx-auto my-10">
    <div class="max-w-screen-sm flex flex-col items-start justify-start gap-10">
      <div class="flex flex-row gap-3" data-aos="fade-right">
        <div class="h-8 w-1 bg-primary-blue"></div>
        <p class="text-2xl font-semibold">OUR SERVICES</p>
      </div>
      <h1 class="text-3xl text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-in-right" data-aos-duration="1000">Social Media Marketing</h1>
      <p class="text-lg lg:text-5xl font-semibold text-gray-300" data-aos="fade-up">Harness the power of social media platforms to expand your reach and engage your audience effectively.</p>
    </div>
    <div class="max-w-screen-sm mt-10 flex flex-col justify-start items-start gap-5" data-aos="fade-up" data-aos-duration="1500">
      <p class="text-lg text-white">Our social media marketing services are designed to create meaningful connections between your brand and your target audience. We develop customized strategies that align with your business objectives, utilizing data-driven insights to craft compelling content and manage your social media presence across all major platforms. </p>
      <a class=" place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1000">Contact Us</a>
    </div>
  </main>
</div>
<div class="lg:container mx-auto flex flex-col my-20 lg:flex-row">
  <div class="w-full px-10 py-10 lg:py-5 lg:rounded-l-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up">
    <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
    <p class="text-xl lg:text-center">More than three-quarters of the world’s population aged 13+ uses social media, with a total of 4.74 billion active social media users. </p>
  </div>
  <div class="w-full px-10 py-10 lg:py-5 flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up" data-aos-duration="1000">
    <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
    <p class="text-xl lg:text-center">Unlike traditional advertising, social media marketing allows for two-way communication between individuals and brands. </p>
  </div>
  <div class="w-full px-10 py-10 lg:py-5 lg:rounded-r-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up" data-aos-duration="1500">
    <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
    <p class="text-xl lg:text-center">Social media marketing creates a sense of community, fostering brand loyalty.  </p>
  </div>
</div>
<div class="container mx-auto">
  <div class="flex flex-col gap-y-5 justify-center items-center my-20">
    <div class="max-w-screen-md">
      <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">From creating eye-catching posts and stories to running targeted ad campaigns, we ensure your brand stands out in the crowded social media landscape.</p>
      <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Our approach not only increases your online visibility but also fosters a loyal community of followers who are engaged with your brand. Let us help you leverage the full potential of social media to drive engagement and grow your business.</p>
    </div>
    <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
  </div>
</div>

@endsection
@section('scripts')
@endsection