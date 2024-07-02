@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-20">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/rainbow-vortex.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
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
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-in-right" data-aos-duration="1000">Graphic Design</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">Transform your brand identity with stunning graphics designed to leave a lasting impression on your audience.</p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000"> Our graphic design services cover a broad spectrum, from logo creation and branding to marketing materials and digital graphics. We collaborate closely with you to understand your vision and deliver designs that reflect your unique brand personality. </p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/designer-girl-bro.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="lg:container mx-auto flex flex-col my-20 lg:flex-row">
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-l-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl lg:text-center">People remember 65% of visual content even three days later, compared to only 10% of written information. This demonstrates the lasting impact of graphic design on memory. </p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl lg:text-center">Visuals are processed 60,000 times faster in the brain than text. Effective graphic design can grab attention quickly and improve engagement with marketing materials. </p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-r-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-black bg-opacity-25" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl lg:text-center">Consistent use of specific design elements can increase brand recognition by up to 80%. Good graphic design ensures that marketing materials are instantly recognizable to consumers. </p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">Our designers combine creativity with strategic thinking to produce visuals that not only look great but also communicate your message effectively.</p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Whether you need eye-catching social media graphics, professional business cards, or engaging infographics, we ensure every design element aligns with your brand's goals and enhances your overall marketing efforts. Let us help you create a visually compelling brand identity that stands out in the market.</p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection