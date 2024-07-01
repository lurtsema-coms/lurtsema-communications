@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center relative">
  <div class="absolute inset-0 opacity-5">
    <img class="min-w-full min-h-full object-cover absolute bottom-0" src="{{ asset('images/graphics/hollowed-boxes.svg') }}" alt="" data-aos="zoom-out" data-aos-duration="1500">
  </div>
  <main class="mx-auto w-full">
    <div class="relative">
      <div class="container mx-auto py-16">
        <div class="flex flex-col justify-evenly items-center lg:gap-10 lg:flex-row lg:items-start">
          <div class="flex-grow w-full lg:w-1/2 relative lg:place-self-stretch" data-aos="fade-right">
            <img class="opacity-50 rounded-2xl lg:absolute lg:min-h-full lg:min-w-full object-cover" src="{{ asset('images/graphics/seo-bro.svg') }}" alt="">
          </div>
          <div class="flex-grow lg:w-1/2 flex flex-col items-start gap-y-5">
            <div class="w-full flex justify-center lg:justify-start flex-row gap-3" data-aos="fade-left">
              <div class="h-8 w-1 bg-primary-blue hidden lg:block"></div>
              <p class="text-2xl font-semibold">OUR SERVICES</p>
            </div>
            <h1 class="text-4xl w-full text-center lg:text-left lg:text-8xl font-extrabold" data-aos="zoom-out-left" data-aos-duration="1000">SEO Optimization</h1>
            <p class="text-center lg:text-left text-2xl font-bold text-gray-400" data-aos="fade-up">Elevate your online visibility and attract more organic traffic with tailored SEO strategies designed to improve your search engine rankings.</p>
            <p class="text-center lg:text-left text-lg" data-aos="fade-up" data-aos-duration="1000"> Our SEO services begin with a comprehensive audit of your website, identifying technical issues, content gaps, and opportunities for improvement. We then develop a customized plan that includes on-page optimization, content creation, and link-building strategies. </p>
            <a class="place-self-center lg:place-self-auto border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#" data-aos="fade-up" data-aos-duration="1500">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="lg:container mx-auto flex flex-col my-20 lg:flex-row">
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-l-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up">
        <h3 class="text-5xl text-button-blue font-extrabold">01</h3>
        <p class="text-xl lg:text-center">68% of online experiences begin with a search engine. This emphasizes the role of search engines as the starting point for the majority of online activities, making SEO critical for visibility. </p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="text-5xl text-button-blue font-extrabold">02</h3>
        <p class="text-xl lg:text-center">SEO drives 1,000%+ more traffic than organic social media. SEO’s potential to significantly outperform social media in terms of traffic generation is clear evidence of its importance.  </p>
      </div>
      <div class="w-full px-10 py-10 lg:py-5 lg:rounded-r-3xl flex flex-col justify-center lg:items-center lg:justify-start gap-5 lg:gap-10 bg-primary-blue bg-opacity-50" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-5xl text-button-blue font-extrabold">03</h3>
        <p class="text-xl lg:text-center">60% of marketers say that inbound (SEO, blog content, etc.) is their highest quality source of leads. High-quality leads are essential for business growth, and SEO is a leading method for acquiring them. </p>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col gap-y-5 justify-center items-center my-20">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400" data-aos="fade-up">Our goal is to ensure your website not only ranks higher on search engines but also provides a great user experience.</p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg" data-aos="fade-up">By staying up-to-date with the latest SEO trends and algorithms, we help you stay ahead of the competition. Partner with us to boost your online presence and drive more qualified traffic to your site. </p>
        </div>
        <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30 transition-all duration-300 ease-in-out" href="{{ route('home') }}#services" data-aos="fade-up">Back To Services</a>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection