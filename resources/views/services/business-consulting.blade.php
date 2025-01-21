@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div class="absolute inset-0 opacity-20">
    <img class="absolute bottom-0 object-cover min-w-full min-h-full" src="{{ asset('images/graphics/rose-petals.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="w-full mx-auto">
    <div class="relative">
      <div class="container py-16 mx-auto">
        <div class="flex flex-col items-center justify-evenly lg:gap-10 lg:flex-row lg:items-start">
          <div class="relative flex-grow w-full lg:w-1/2 lg:place-self-stretch" data-aos="fade-right">
            <img class="object-cover opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full" src="{{ asset('images/graphics/business-analytics.svg') }}" alt="">
          </div>
          <div class="flex flex-col items-start flex-grow lg:w-1/2 gap-y-5">
            <div class="flex flex-row justify-center w-full gap-3 lg:justify-start" data-aos="fade-left">
              <div class="hidden w-1 h-8 bg-primary-blue lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="w-full text-4xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-out-left" data-aos-duration="1000">Business Consulting</h1>
            <p class="text-2xl font-bold text-center text-gray-300 lg:text-left" data-aos="fade-up">Our team of experts is dedicated to streamlining your business operations to maximize efficiency and profits.</p>
            <p class="text-lg text-center lg:text-left" data-aos="fade-up" data-aos-duration="1000">By conducting thorough assessments and leveraging industry best practices, we identify areas for improvement and implement strategic changes that drive measurable results. Our consulting services encompass everything from operational enhancements to long-term strategic planning, ensuring that your business is equipped to navigate challenges and seize opportunities for growth. </p>
            <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full place-self-center lg:place-self-auto border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Consult Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col mx-auto my-20 md:container md:gap-y-10">
      <div class="flex flex-col self-end justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-primary-blue md:rounded-full" data-aos="fade-right">
        <h3 class="text-5xl font-extrabold text-button-blue">01</h3>
        <p class="text-xl text-gray-300">Businesses that utilize professional consulting services can experience a 10-30% increase in operational efficiency and profitability. <a target="_blank" title="View Reference" href="https://wyomingllcattorney.com/Blog/Good-Profit-Margin-Small-Business" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col self-center justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-primary-blue md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
        <h3 class="text-5xl font-extrabold text-button-blue">02</h3>
        <p class="text-xl text-gray-300">Achieving next-generation operational excellence can lead to significant improvements, such as a 30% increase in labor productivity. <a target="_blank" title="View Reference" href="https://www.celonis.com/blog/mckinsey-process-insights-are-key-to-next-generation-operational-excellence/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="flex flex-col self-start justify-center w-full gap-5 px-10 py-10 bg-opacity-25 md:h-32 lg:h-36 lg:max-w-screen-sm md:py-5 md:flex-row md:items-center md:gap-10 bg-primary-blue md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
        <h3 class="text-5xl font-extrabold text-button-blue">03</h3>
        <p class="text-xl text-gray-300">Implementing operational improvements can also result in a 25% increase in employee retention. <a target="_blank" title="View Reference" href="https://www.celonis.com/blog/mckinsey-process-insights-are-key-to-next-generation-operational-excellence/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center my-20 gap-y-5">
        <div class="max-w-screen-md">
          <p class="text-4xl font-semibold text-center text-gray-300" data-aos="fade-up">We understand that each business is unique, which is why we customize our consulting approach to meet your specific needs. </p>
          <p class="max-w-screen-sm mx-auto mt-5 text-lg text-center" data-aos="fade-up">Whether you are looking to optimize workflows, reduce costs, or develop new revenue streams, our seasoned consultants provide actionable insights and hands-on support. We can help you transform your operations and achieve sustainable success in a competitive marketplace.</p>
        </div>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection