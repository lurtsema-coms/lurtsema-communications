@extends('layouts.app')
@section('content')
<div class="flex flex-col items-center justify-center">
  <main class="container mx-auto my-10">
    <h1 class="font-semibold text-center text-7xl" data-aos="fade-down" data-aos-duration="1000">About Us</h1>
    <h3 class="my-5 text-2xl font-semibold text-center" data-aos="fade-up" data-aos-duration="1000">Looking for more ways to get your voice heard in the digital space?</h3>
    <p class="mt-5 text-lg text-center" data-aos="fade-up" data-aos-duration="1000">When it comes to digital marketing, we’re the partners you need.</p>
    <p class="text-lg text-center" data-aos="fade-up" data-aos-duration="1000">From search engine optimization to social media, we’ve got you covered. </p>
  </main>
  <section id="team" class="max-w-full">
    <div class="container mx-auto my-10" data-aos="flip-down" data-aos-duration="1000">
      <div class="container flex items-center justify-between gap-5 mx-auto swiper mySwiper">
        <div class="flex items-center justify-between swiper-wrapper">
          @foreach ($team as $member)
          <div class="swiper-slide group custom-radial-gradient-2 relative w-[12rem] aspect-[3/4] rounded-3xl shadow-2xl overflow-hidden ease-in-out duration-200">
            <img class="absolute object-cover object-center min-w-full min-h-full -bottom-5 {{ $member['scale'] ?? '' }}" src="{{ $member['img_link'] ?? '#' }}" alt="">
            <img class="absolute bottom-0 w-full duration-300 ease-in-out lg:opacity-0 lg:group-hover:opacity-100" src="{{ asset('images/team-photos/effect.webp') }}" alt="">
            <a class="linked-in-profile" href="{{ $member['linked_in'] ?? '#' }}" target="{{ $member['linked_in'] ? '_blank' : '_self' }}">
              <svg class="absolute w-10 h-10 duration-300 ease-in-out right-3 top-3 lg:opacity-0 lg:group-hover:opacity-100 hover:scale-110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                  <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z" fill="white"/>
              </svg>                  
            </a>
            <div class="absolute bottom-0 z-20 w-full px-6 pb-5 duration-300 ease-in-out lg:opacity-0 lg:group-hover:opacity-100">
              <p class="block text-2xl font-semibold leading-7">{{ $member['name'] }}</p>
              <p class="block text-lg uppercase font-besbas">{{ $member['title'] }}</p>
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>
  <section class="container mx-auto my-10">
    <h1 class="mb-10 text-5xl font-semibold text-center" data-aos="fade-up">ITS VISION FOR THE FUTURE? </h1>
    <p class="max-w-screen-lg mx-auto my-5 text-2xl font-bold text-center" data-aos="fade-up">Joseph Lurtsema’s vision for Lurtsema Communications is to be the highest quality and most cost-effective marketing agency in Alaska. </p>
    <p class="max-w-screen-lg mx-auto text-lg text-center" data-aos="fade-up">Lurtsema Communications started as a sole proprietorship. Joseph used to do all the graphic design, web development, videography, strategy, social media management, etc. He learned quickly that there are only 24 hours in a day, and he is only one person. His business flourished in 2018 but he hit a wall and his clients started leaving the company. In 2019, he learned the power of delegation and built a team from the ground up. He now has individuals that specialize in those different skills so that Lurtsema Communications’ clients are getting the best work possible.</p>
  </section>
</div>
@endsection
@section('scripts')
<script>
  const swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1536: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
  });
</script>
@endsection