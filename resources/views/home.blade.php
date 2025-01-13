@extends('layouts.app')
@section('content')
<div id="hero-background" class="absolute top-0 w-full h-full bg-custom-gradient-2 -z-50">
  <img id="hero-background-image" class="w-full opacity-[0.03]" src="{{ asset('images/KNYA6641.jpg') }}" alt="">
</div>
<section id="hero-section" class="hero-section">
  <div class="container flex flex-col justify-center mx-auto">
    <div class="flex flex-col items-center justify-center w-full gap-12 mb-12">
      <div class="flex items-center justify-center w-full" data-aos="fade-down" data-aos-duration="1000">
        <svg
          width="100%"
          viewBox="0 0 500 150"
          preserveAspectRatio="xMinYMid meet"
          class="hero-section-svg"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
        >
          <defs>
            <radialGradient id="gradientId" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
              <stop offset="0%" style="stop-color:#66a0d0;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#0e3243;stop-opacity:1" />
            </radialGradient>
          </defs>
          <text
            x="50%"
            y="30%"
            font-size="33"
            font-weight="900"
            fill="url(#gradientId)"
            text-anchor="middle"
            dominant-baseline="middle"
          >
            MARKETING THAT SHAPES
          </text>
          <text
            x="50%"
            y="70%"
            font-size="110"
            class="font-besbas"
            font-weight="400"
            fill="url(#gradientId)"
            text-anchor="middle"
            dominant-baseline="middle"
          >
            YOUR SUCCESS
          </text>
        </svg>
      </div>
      <div class="flex flex-col items-center justify-center mt-10 md:flex-row gap-y-10 lg:gap-x-10 xl:gap-x-16 2xl:gap-x-32">
        <div data-aos="fade-right" data-aos-duration="1000">
          <div class="flex items-center justify-center w-56 scale-100 custom-radial-gradient-3 h-28 rounded-3xl md:scale-75 lg:scale-90 xl:scale-100 2xl:scale-125">
            <h3 class="text-4xl font-extrabold text-center">205<span class="text-3xl font-medium">+</span><span class="block text-lg font-medium text-nowrap">Happy Clients</span></h3>
          </div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000">
          <div class="flex items-center justify-center w-56 scale-125 custom-radial-gradient-3 h-28 rounded-3xl md:scale-100 lg:scale-110 xl:scale-125 2xl:scale-150">
            <h3 class="text-4xl font-extrabold text-center">35<span class="text-3xl font-medium">+</span><span class="block text-lg font-medium text-nowrap">Active Customers</span></h3>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000">
          <div class="flex items-center justify-center w-56 scale-100 custom-radial-gradient-3 h-28 rounded-3xl md:scale-75 lg:scale-90 xl:scale-100 2xl:scale-125">
            <h3 class="text-4xl font-extrabold text-center">100<span class="text-3xl font-medium">+</span><span class="block text-lg font-medium text-nowrap">Campaigns Won</span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about" data-aos="fade-up" data-aos-duration="1000">
  <div class="container flex flex-col items-center justify-center mx-auto my-10">
    <h1 class="mb-5 text-2xl font-bold text-center md:text-3xl">About Lurtsema Communications</h1>
    <p class="text-lg text-center">Lurtsema Communications understands the power of words and the impact of a strong digital presence. Whether you're looking to sway voters, boost your business' brand, or captivate an audience from the stage, our team is dedicated to elevating your message and amplifying your voice.</p>
    <a class="px-5 py-1 my-5 font-bold text-center transition-all duration-300 ease-in-out border rounded-full border-slate-100 hover:text-black hover:bg-slate-200" href="{{ route('about-us') }}">Find Out More</a>
  </div>
</section>
<section id="founder" class="mt-36" data-aos="fade-up">
  <div class="container mx-auto">
    <div class="relative min-h-[25rem] mx-3 md:mx-auto rounded-3xl custom-radial-gradient flex flex-col md:flex-row justify-center items-center p-0">
      <div class="relative pt-10 max-w-[90%] min-h-[200px] md:pt-0 md:max-w-[300px] md:min-w-[40%] md:self-end">
        <img class="z-10 md:max-h-[250%] md:left-[10%] md:absolute bottom-0" src="{{ asset('images/founder-enhanced.png') }}" alt="">
      </div>
      <div class="flex flex-col items-center justify-center gap-5 px-10 pb-10 md:items-start md:p-10">
        <div>
          <h1 class="text-3xl font-bold text-center md:text-left md:text-4xl">Joe Lurtsema</h1>
          <h3 class="text-xl text-center font-besbas md:text-left">CEO/FOUNDER OF LURTSEMA COMMUNICATIONS</h3>
        </div>
        <p class="text-center md:text-left">Joseph Lurtsema is an award-winning Business Development Consultant that specializes in Digital Marketing & Professional Sales. He helps business leaders make exceptional decisions for reaching their Marketing & Sales goals using modern technological tools that help companies grow their revenue while increasing their margins.</p>
        <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out border rounded-full border-slate-200 hover:text-black hover:bg-slate-200" href="{{ route('contact-us') }}">Consult Now!</a>
      </div>
    </div>
  </div>
</section>
<section id="services" class="mt-36">
  <div class="container mx-auto my-10" data-aos="fade-up">
    <h1 class="text-4xl font-bold">Our Services</h1>
    <p class="max-w-[800px] text-lg">We specialize in delivering comprehensive marketing solutions and creative services tailored to elevate your brands's presence in today's competetive landscape.</p>
    <div class="grid gap-8 my-10 md:grid-cols-2 xl:grid-cols-4">
        <a href="{{ route('services', 'business-consulting') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_5.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_6.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Business Consulting</h3>
          <p class="text-md">Let our team of experts help your business operations and maximize your profits.</p>
        </a>
        <a href="{{ route('services', 'social-media-marketing') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_13.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_14.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Social Media Marketing</h3>
          <p class="text-md">We can help you utilize all the social media out there to grow your business and connect with your audience.</p>
        </a>
        <a href="{{ route('services', 'website-development') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_3.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_4.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Website Development</h3>
          <p class="text-md">We can help you build an awesome website that will get traffic and clicks to your content.</p>
        </a>
        <a href="{{ route('services', 'seo-optimization') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_17.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_18.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">SEO Optimization</h3>
          <p class="text-md">Our SEO specialists can help you rank higher on search engines and drive more organic traffic to your website.</p>
        </a>
        <a href="{{ route('services', 'political-outreach') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_9.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_10.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Political Outreach</h3>
          <p class="text-md">Our team of experts helps you create impactful campaigns to amplify your message and connect with your audience.</p>
        </a>
        <a href="{{ route('services', 'videography') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_15.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_16.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Videography</h3>
          <p class="text-md">We offer professional videography services for everything from corporate videos to social media content.</p>
        </a>
        <a href="{{ route('services', 'google-ads') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_11.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_12.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Google Ads</h3>
          <p class="text-md">We can help you create and run effective Google Ads campagins that drive traffic and increase selling conversions.</p>
        </a>
        <a href="{{ route('services', 'graphic-design') }}" class="flex flex-col gap-3 p-5 duration-300 ease-in-out border cursor-pointer group border-slate-200 hover:bg-slate-200 hover:text-black hover:-translate-y-3 rounded-2xl" data-aos="flip-left">
          <div class="max-w-[55px]">
            <img class="w-full group-hover:hidden" src="{{ asset('images/Icons/Icons_7.png') }}" alt="">
            <img class="hidden w-full group-hover:inline" src="{{ asset('images/Icons/Icons_8.png') }}" alt="">
          </div>
          <h3 class="text-lg font-bold">Graphic Design</h3>
          <p class="text-md">Our talented designers can help you create and develop beautiful graphics to elevate your brand.</p>
        </a>
    </div>
  </div>
</section>
<section id="awards"  class="my-36" data-aos="fade-up">
  <div class="container flex flex-col items-center justify-center mx-auto my-10 md:flex-row">    
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
  <div class="container flex flex-col items-center justify-center gap-5 py-10 mx-auto">
    <h1 class="text-4xl font-bold text-center">Let's Connect</h1>
    <h2 class="text-3xl font-semibold text-center">Ready to elevate your communication strategy?</h2>
    <p class="text-lg text-center">Contact us today to schedule a consultation</p>
    <a class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:opacity-60" href="{{ route('contact-us') }}">Contact Us</a>
  </div>
</section>
<section id="clients"  class="mt-36" data-aos="fade-up">
  <div class="container flex flex-col items-center justify-center mx-auto my-10">
    <h1 class="text-4xl font-bold text-center">Our Awesome Clients</h1>
    <div class="w-full">
      <div class="relative flex items-center justify-center w-full my-12">
        <div class="bg-custom-gradient w-full absolute h-[2px] -z-10"></div>
        <div class="px-5 py-1 font-bold rounded-full bg-custom-gradient">BUSINESS CLIENTS</div>
      </div>
      <div class="w-full pb-5 my-5 swiper mySwiper">
        <div class="flex items-center mb-5 swiper-wrapper">
          @foreach ($businessLogos as $logo)
          <div class="flex items-center justify-center h-full swiper-slide">
            <img width="300px" class="self-center-important" src="{{ asset('images/all-business-clients/'.$logo->getFilename()) }}" alt="">
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="w-full">
      <div class="relative flex items-center justify-center w-full my-12">
        <div class="bg-custom-gradient w-full absolute h-[2px] -z-10"></div>
        <div class="px-5 py-1 font-bold rounded-full bg-custom-gradient">POLITICAL CLIENTS</div>
      </div>
      <div class="flex flex-col items-center justify-center w-full pb-5 my-5 swiper mySwiper">
        <div class="flex items-center mb-5 swiper-wrapper">
			@foreach ($politicalLogos as $logo)
			<div class="flex items-center justify-center h-full swiper-slide">
				<img width="300px" class="self-center-important" src="{{ asset('images/all-political-clients/'.$logo->getFilename()) }}" alt="">
			</div>
			@endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
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