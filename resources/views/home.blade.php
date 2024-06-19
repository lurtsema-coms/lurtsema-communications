@extends('layouts.app')
@section('content')
<div id="hero-background" class="absolute top-0 w-full h-full bg-custom-gradient-2 -z-10">
  <img id="hero-background-image" class="w-full opacity-[0.03]" src="{{ asset('images/KNYA6641.jpg') }}" alt="">
</div>
<section id="hero-section" class="hero-section">
  <div class="container mx-auto flex flex-col justify-center">
    <img width="5000px" src="{{ asset('images/hero-message.png') }}" data-aos="fade-down" alt="">
    <div class="flex flex-col justify-center items-center md:flex-row">
      <img class="max-w-[40%] md:max-w-[25%]" src="{{ asset('images/number-clients.png') }}" data-aos="fade-right" alt="">
      <img class="max-w-[40%] md:max-w-[25%]" src="{{ asset('images/number-customers.png') }}" data-aos="fade-down" alt="">
      <img class="max-w-[40%] md:max-w-[25%]" src="{{ asset('images/number-campaigns.png') }}" data-aos="fade-left" alt="">
    </div>
  </div>
</section>
<section id="about" data-aos="fade-up">
  <div class="container mx-auto my-10 flex flex-col justify-center items-center">
    <h1 class="text-center font-bold text-2xl md:text-3xl mb-5">About Lurtsema Communications</h1>
    <p class="text-lg text-center">Lurtsema Communications understands the power of words and the impact of a strong digital presence. Whether you're looking to sway voters, boost your business' brand, or captivate an audience from the stage, our team is dedicated to elevating your message and amplifying your voice.</p>
    <a class="text-center border border-slate-100 px-5 rounded-full my-5 font-bold py-1 hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#">Find out more</a>
  </div>
</section>
<section id="founder" class="mt-36" data-aos="fade-up">
  <div class="container mx-auto">
    <div class="relative min-h-[25rem] mx-3 md:mx-auto rounded-3xl custom-radial-gradient flex flex-col md:flex-row justify-center items-center p-0">
      <div class="relative pt-10 max-w-[40%] min-h-[200px] md:pt-0 md:max-w-[300px] md:min-w-[40%] md:self-end">
        <img class="z-10 md:max-h-[250%] md:left-[10%] md:absolute bottom-0" src="{{ asset('images/founder-enhanced.png') }}" alt="">
      </div>
      <div class="flex flex-col justify-center items-center md:items-start gap-5 px-10 pb-10 md:p-10">
        <div>
          <h1 class="text-3xl text-center md:text-left md:text-4xl font-bold">Joe Lurtsema</h1>
          <h3 class="font-besbas text-xl text-center md:text-left">CEO/FOUNDER OF LURTSEMA COMMUNICATIONS</h3>
        </div>
        <p class="text-center md:text-left">Joseph Lurtsema is an award-winning Business Development Consultant that specializes in Digital Marketing & Professional Sales. He helps business leaders make exceptional decisions for reaching their Marketing & Sales goals using modern technological tools that help companies grow their revenue while increasing their margins.</p>
        <a class="border border-slate-200 px-5 py-1 rounded-full font-bold hover:text-black hover:bg-slate-200 transition-all duration-300 ease-in-out" href="#">Consult Now!</a>
      </div>
    </div>
  </div>
</section>
<section id="services" class="mt-36" data-aos="fade-right">
  <div class="container mx-auto my-10">
    <h1 class="font-bold text-4xl">Our Services</h1>
    <p class="max-w-[800px] text-lg">We specialize in delivering comprehensive marketing solutions and creative services tailored to elevate your brands's presence in today's competetive landscape.</p>
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 my-10">
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_5.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_6.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Business Consulting</h3>
          <p class="text-md">Let our team of experts help your business operations and maximize your profits.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_13.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_14.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Social Media Marketing</h3>
          <p class="text-md">We can hep you utilize all the social media out there to grow your business and connect with your audience.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_3.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_4.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Website Development</h3>
          <p class="text-md">We can help you build an awesome website that will get traffic and clicks to your content.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_17.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_18.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">SEO Optimization</h3>
          <p class="text-md">Our SEO specialists can help you rank higher on search engines and drive more organic traffic to your website.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_9.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_10.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Political Outreach</h3>
          <p class="text-md">Let our team of experts help your business operations and maximize your profits.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_15.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_16.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Videography</h3>
          <p class="text-md">We offer professional videography services for everything from corporate videos to social media content.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_11.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_12.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Google Ads</h3>
          <p class="text-md">We can help you create and run effective Google Ads campagins that drive traffic and increase selling conversions.</p>
        </div>
        <div class="group border cursor-default border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 duration-300 ease-in-out rounded-2xl p-5 flex flex-col gap-3">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_7.png') }}" alt="">
            <img class="w-full hidden group-hover:inline" src="{{ asset('images/Icons/Icons_8.png') }}" alt="">
          </div>
          <h3 class="font-bold text-lg">Graphic Design</h3>
          <p class="text-md">Our talented designers can help you create and develop beautiful graphics to elevate your brand.</p>
        </div>
    </div>
  </div>
</section>
<section id="awards"  class="my-36" data-aos="zoom-out">
  <div class="container mx-auto my-10 flex flex-col justify-center items-center md:flex-row">    
    <div class="flex-grow">
      <img width="1000px" class="max-w-full" src="{{ asset('images/award-left.png') }}" alt="">
    </div>
    <div class="">
      <img class="max-w-full max-h-[400px] md:max-h-[800px]" src="{{ asset('images/Award.png') }}" alt="">
    </div>
    <div class="flex-grow">
      <img width="1000px" class="max-w-full" src="{{ asset('images/award-right.png') }}" alt="">
    </div>
  </div>
</section>
<section id="contact" class="bg-black bg-opacity-30" data-aos="fade-up">
  <div class="container mx-auto py-10 flex flex-col gap-5 justify-center items-center">
    <h1 class="font-bold text-4xl text-center">Let's Connect</h1>
    <h2 class="font-semibold text-3xl text-center">Ready to elevate your communication strategy?</h2>
    <p class="text-lg text-center">Contact us today to schedule a consultation</p>
    <a class="bg-button-blue px-5 py-1 rounded-full font-bold hover:opacity-60 transition-all duration-300 ease-in-out" href="#">Contact Us</a>
  </div>
</section>
<section id="clients"  class="mt-36" data-aos="fade-up">
  <div class="container mx-auto flex flex-col justify-center items-center my-10">
    <h1 class="font-bold text-4xl text-center">Our Awesome Clients</h1>
    <div class="w-full">
      <div class="relative my-12 w-full flex justify-center items-center">
        <div class="bg-custom-gradient w-full absolute h-[2px] -z-10"></div>
        <div class="bg-custom-gradient py-1 px-5 rounded-full font-bold">BUSINESS CLIENTS</div>
      </div>
      <div class="swiper mySwiper pb-5 w-full my-5 flex flex-col justify-center items-center">
        <div class="swiper-wrapper flex items-center mb-5">
          @foreach ($businessLogos as $logo)
          <div class="swiper-slide flex justify-center items-center h-full">
            <img width="300px" class="self-center-important" src="{{ asset('images/all-business-clients/'.$logo->getFilename()) }}" alt="">
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="w-full">
      <div class="relative my-12 w-full flex justify-center items-center">
        <div class="bg-custom-gradient w-full absolute h-[2px] -z-10"></div>
        <div class="bg-custom-gradient py-1 px-5 rounded-full font-bold">POLITICAL CLIENTS</div>
      </div>
      <div class="swiper mySwiper pb-5 w-full my-5 flex flex-col justify-center items-center">
        <div class="swiper-wrapper flex items-center mb-5">
			@foreach ($politicalLogos as $logo)
			<div class="swiper-slide flex justify-center items-center h-full">
				<img width="300px" class="self-center-important" src="{{ asset('images/all-political-clients/'.$logo->getFilename()) }}" alt="">
			</div>
			@endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
  </div>
</section>
<section class="bg-black bg-opacity-30" data-aos="fade-up">
  <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center lg:items-stretch gap-3 py-10">
    <div class="flex-grow flex flex-col md:flex-row gap-6 w-full justify-between md:justify-around lg:justify-between items-start text-slate-400">
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Marketing</h4>
        <p class="text-md">Business Consulting</p>
        <p class="text-md">Social Media Marketing</p>
        <p class="text-md">Google Ads</p>
        <p class="text-md">SEO Optimization</p>
        <p class="text-md">Political Outreach</p>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Creatives</h4>
        <p class="text-md">Videography</p>
        <p class="text-md">Website Development</p>
        <p class="text-md">Graphic Design</p>
        <p class="text-md">SEO Optimization</p>
        <p class="text-md">Logo Development</p>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-2xl font-semibold">Other</h4>
        <p class="text-md">Solar Panels</p>
        <p class="text-md">Real Estate Consulting</p>
        <p class="text-md">Sales Training</p>
        <p class="text-md">Campaign USA</p>
      </div>
    </div>
    <div class="flex flex-col justify-between items-end w-full">
      <img class="max-w-14" src="{{ asset('images/Icon.png') }}" alt="">
      <div class="">
        <p class="text-end font-besbas text-lg sm:text-2xl">INFO@LURTSEMACOMMUNICATIONS.COM</p>
        <p class="text-end font-besbas text-lg sm:text-2xl">6390 NORM DRIVE, ANCHORAGE, ALASKA 99507, UNITED STATES</p>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
	loop: true,
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        600: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 6,
            spaceBetween: 40,
        },
        992: {
            slidesPerView: 8,
            spaceBetween: 50,
        },
    },
  });
</script>
@endsection