@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-20">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/rose-petals.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="mx-auto w-full">
    <div class="relative">
      <div class="container mx-auto py-16">
        <div class="flex flex-col justify-evenly items-center lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/business-analytics.svg') }}" alt="">
          </div>
          <div class="flex-grow lg:w-1/2 flex flex-col items-start gap-y-5">
            <div class="w-full flex justify-center lg:justify-start flex-row gap-3" data-aos="fade-left">
              <div class="h-8 w-1 bg-primary-blue hidden lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-out-left" data-aos-duration="1000">Business Consulting</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">Our team of experts is dedicated to streamlining your business operations to maximize efficiency and profits.</p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000">By conducting thorough assessments and leveraging industry best practices, we identify areas for improvement and implement strategic changes that drive measurable results. Our consulting services encompass everything from operational enhancements to long-term strategic planning, ensuring that your business is equipped to navigate challenges and seize opportunities for growth. </p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="{{ route('contact-us') }}" data-aos="fade-up" data-aos-duration="1500">Consult Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="md:container mx-auto flex flex-col my-20 md:gap-y-10">
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-end justify-center md:items-center gap-5 md:gap-10 bg-primary-blue bg-opacity-25 md:rounded-full" data-aos="fade-right">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl text-gray-300">Businesses that utilize professional consulting services can experience a 10-30% increase in operational efficiency and profitability. <a target="_blank" title="View Reference" href="https://wyomingllcattorney.com/Blog/Good-Profit-Margin-Small-Business" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-center justify-center md:items-center gap-5 md:gap-10 bg-primary-blue bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl text-gray-300">Achieving next-generation operational excellence can lead to significant improvements, such as a 30% increase in labor productivity. <a target="_blank" title="View Reference" href="https://www.celonis.com/blog/mckinsey-process-insights-are-key-to-next-generation-operational-excellence/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
      <div class="w-full md:h-32 lg:h-36 lg:max-w-screen-sm px-10 py-10 md:py-5 flex flex-col md:flex-row self-start justify-center md:items-center gap-5 md:gap-10 bg-primary-blue bg-opacity-25 md:rounded-full" data-aos="fade-right"  data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl text-gray-300">Implementing operational improvements can also result in a 25% increase in employee retention. <a target="_blank" title="View Reference" href="https://www.celonis.com/blog/mckinsey-process-insights-are-key-to-next-generation-operational-excellence/" class="material-symbols-outlined text-button-blue">open_in_new</a></p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">We understand that each business is unique, which is why we customize our consulting approach to meet your specific needs. </p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">Whether you are looking to optimize workflows, reduce costs, or develop new revenue streams, our seasoned consultants provide actionable insights and hands-on support. We can help you transform your operations and achieve sustainable success in a competitive marketplace.</p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection