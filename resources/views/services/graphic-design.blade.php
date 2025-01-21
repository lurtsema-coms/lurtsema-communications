@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 opacity-20">
    <img class="absolute bottom-0 object-cover min-w-full min-h-full" src="{{ asset('images/graphics/rainbow-vortex.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
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
            <h1 class="w-full text-4xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-in-right" data-aos-duration="1000">Graphic Design</h1>
            <p class="text-2xl font-bold text-center text-gray-300 lg:text-left" data-aos="fade-up">Transform your brand identity with stunning graphics designed to leave a lasting impression on your audience.</p>
            <p class="text-lg text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000"> Our graphic design services cover a broad spectrum, from logo creation and branding to marketing materials and digital graphics. We collaborate closely with you to understand your vision and deliver designs that reflect your unique brand personality. </p>
            <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
          <div class="relative flex-grow w-full lg:w-1/2 lg:place-self-stretch" data-aos="fade-right">
            <img class="object-cover opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full" src="{{ asset('images/graphics/designer-girl-bro.svg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col mx-auto my-20 lg:container lg:flex-row">
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:rounded-l-3xl lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up">
        <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
        <p class="text-xl lg:text-center">People remember 65% of visual content even three days later, compared to only 10% of written information. This demonstrates the lasting impact of graphic design on memory. <a target="_blank" title="View Reference" href="https://financesonline.com/graphic-design-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
        <p class="text-xl lg:text-center">Visuals are processed 60,000 times faster in the brain than text. Effective graphic design can grab attention quickly and improve engagement with marketing materials. <a target="_blank" title="View Reference" href="https://financesonline.com/graphic-design-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col justify-center w-full gap-5 px-10 py-10 bg-black bg-opacity-25 lg:py-5 lg:rounded-r-3xl lg:items-center lg:justify-start lg:gap-10" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
        <p class="text-xl lg:text-center">Consistent use of specific design elements can increase brand recognition by up to 80%. Good graphic design ensures that marketing materials are instantly recognizable to consumers. <a target="_blank" title="View Reference" href="https://financesonline.com/graphic-design-statistics/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center my-20 gap-y-5">
        <div class="max-w-screen-md">
          <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">Our designers combine creativity with strategic thinking to produce visuals that not only look great but also communicate your message effectively.</p>
          <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">Whether you need eye-catching social media graphics, professional business cards, or engaging infographics, we ensure every design element aligns with your brand's goals and enhances your overall marketing efforts. Let us help you create a visually compelling brand identity that stands out in the market.</p>
        </div>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection