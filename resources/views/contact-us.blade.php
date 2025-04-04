@extends('layouts.app')
@section('content')
<div class="relative flex flex-col items-center justify-center">
  <div id="bg-animation" class="absolute inset-0 overflow-hidden opacity-30 -z-10">
    <canvas class="absolute top-0 left-0" id="bgCanvas" data-aos="zoom-in-down" data-aos-duration="1500"></canvas>
    <canvas class="absolute top-0 left-0" id="terCanvas" data-aos="zoom-out" data-aos-duration="1000"></canvas>
  </div>
  @if(session('success'))
  <div class="container">
    <div id="toast-success" class="flex items-center w-full p-4 mt-10 mb-4 text-gray-500 bg-white rounded-lg shadow"
      role="alert">
      <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
          viewBox="0 0 20 20">
          <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
      </div>
      <div class="text-sm font-semibold ms-3">{{ session('success') }}</div>
      <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
        data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </button>
    </div>
  </div>
  @elseif(session('error'))
  <div class="container">
    <div id="toast-danger" class="flex items-center w-full p-4 mt-10 mb-4 text-gray-500 bg-white rounded-lg shadow "
      role="alert">
      <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg ">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
          viewBox="0 0 20 20">
          <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
        </svg>
        <span class="sr-only">Error icon</span>
      </div>
      <div class="text-sm font-normal ms-3">{{ session('error') }}</div>
      <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
        data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
      </button>
    </div>
  </div>
  @endif
  <div class="container flex flex-col items-start justify-between py-20 xl:flex-row gap-y-10 gap-x-20">
    <div class="flex flex-col items-start justify-start max-w-screen-sm gap-10">
      <div class="flex flex-row gap-3" data-aos="fade-right">
        <div class="w-1 h-8 bg-primary-blue"></div>
        <p class="text-2xl font-semibold">CONTACT US</p>
      </div>
      <h1 class="text-3xl font-extrabold text-center lg:text-left lg:text-8xl" data-aos="zoom-in-right"
        data-aos-duration="1000">Let's Get In Touch</h1>
      <p class="text-lg font-semibold text-gray-300 lg:text-3xl" data-aos="fade-up" data-aos-duration="1500">We'd love
        to hear from you! Whether you have a question, feedback, or need assistance, our team is here to help.</p>
    </div>
    <div class="flex flex-col items-start justify-start flex-grow w-full max-w-screen-sm xl:self-start gap-y-10"
      data-aos="flip-left" data-aos-duration="1000">
      <form action="{{ route('submit.contact-us') }}" method="POST"
        class="flex flex-col items-start justify-center w-full gap-y-5" autocomplete="off">
        @csrf
        <p class="text-2xl font-semibold">How can we assist you?</p>
        <p class="text-lg font-semibold">Fill out the form below, and we will get back to you as soon as possible.</p>
        <input name="name" type="text" placeholder="Name"
          class="w-full p-2 text-black border-2 rounded-md active:outline-none focus:outline-none" required>
        <input name="email" type="email" placeholder="Email"
          class="w-full p-2 text-black border-2 rounded-md active:outline-none focus:outline-none" required>
        <input name="phone" type="text" placeholder="Phone"
          class="w-full p-2 text-black border-2 rounded-md active:outline-none focus:outline-none" required>
        <textarea name="message" placeholder="Message" rows="5"
          class="w-full p-2 text-black border-2 rounded-md resize-none active:outline-none focus:outline-none"
          required></textarea>
        <button
          class="px-5 py-1 font-bold transition-all duration-300 ease-in-out rounded-full bg-button-blue hover:bg-blue-300 hover:text-gray-300 hover:bg-opacity-30">Submit</button>
      </form>
      <p class="text-lg font-semibold">Alternatively, you reach us by phone or email. Don't be shy—feel free to say
        hello!</p>
      <div class="flex flex-col items-start justify-between w-full gap-5 2xl:flex-row">
        <div class="flex items-center justify-center gap-5">
          <p>
            <span class="material-symbols-outlined">call</span>
          </p>
          <div>
            <p>CALL US:</p>
            <p><span class="font-extrabold text-button-blue">+1 (907) 382-6863</span></p>
          </div>
        </div>
        <div class="flex items-center justify-center gap-5">
          <p>
            <span class="material-symbols-outlined">email</span>
          </p>
          <div>
            <p>EMAIL US:</p>
            <p><span class="font-extrabold text-button-blue">info@lurtsemacommunications.com </span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  // background animation from: https://codepen.io/loktar00/pen/nXWOJL
    (function() {
    let requestAnimationFrame = window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
    window.requestAnimationFrame = requestAnimationFrame;
  })();

  // Terrain stuff.
  let terrain = document.getElementById("terCanvas"),
    background = document.getElementById("bgCanvas"),
    bgHeight = $('#bg-animation').height(),
    terCtx = terrain.getContext("2d"),
    bgCtx = background.getContext("2d"),
    width = window.innerWidth,
    height = bgHeight;

  (height < 400) ? height = 400: height;

  terrain.width = background.width = width;
  terrain.height = background.height = height;

  // Function to generate terrain points
  function generateTerrain() {
    let points = [],
      displacement = 140,
      power = Math.pow(2, Math.ceil(Math.log(width) / (Math.log(2))));

    points[0] = (height - (Math.random() * height / 2)) - displacement;
    points[power] = (height - (Math.random() * height / 2)) - displacement;

    for (let i = 1; i < power; i *= 2) {
      for (let j = (power / i) / 2; j < power; j += power / i) {
        points[j] = ((points[j - (power / i) / 2] + points[j + (power / i) / 2]) / 2) + Math.floor(Math.random() * -displacement + displacement);
      }
      displacement *= 0.6;
    }

    return points;
  }

  // Function to draw terrain
  function drawTerrain() {
    let points = generateTerrain();

    terCtx.clearRect(0, 0, width, height);
    terCtx.beginPath();

    for (let i = 0; i <= width; i++) {
      if (i === 0) {
        terCtx.moveTo(0, points[0]);
      } else if (points[i] !== undefined) {
        terCtx.lineTo(i, points[i]);
      }
    }

    terCtx.lineTo(width, terrain.height);
    terCtx.lineTo(0, terrain.height);
    terCtx.lineTo(0, points[0]);
    terCtx.fillStyle = "#000000"; // Set the terrain fill color to a visible color
    terCtx.fill();
  }

  // Function to initialize stars
  function initStars() {
    let entities = [];

    for (let i = 0; i < height; i++) {
      entities.push(new Star({
        x: Math.random() * width,
        y: Math.random() * height
      }));
    }

    entities.push(new ShootingStar());
    entities.push(new ShootingStar());

    return entities;
  }

  // Function to animate background
  function animate(entities) {
    bgCtx.clearRect(0, 0, width, height); // Clear the background canvas
    bgCtx.fillStyle = '#ffffff';
    bgCtx.strokeStyle = '#ffffff';

    let entLen = entities.length;

    while (entLen--) {
      entities[entLen].update();
    }

    requestAnimationFrame(() => animate(entities));
  }

  // Star class
  function Star(options) {
    this.size = Math.random() * 2;
    this.speed = Math.random() * 0.1;
    this.x = options.x;
    this.y = options.y;
  }

  Star.prototype.reset = function() {
    this.size = Math.random() * 2;
    this.speed = Math.random() * 0.1;
    this.x = width;
    this.y = Math.random() * height;
  }

  Star.prototype.update = function() {
    this.x -= this.speed;
    if (this.x < 0) {
      this.reset();
    } else {
      bgCtx.fillRect(this.x, this.y, this.size, this.size);
    }
  }

  // ShootingStar class
  function ShootingStar() {
    this.reset();
  }

  ShootingStar.prototype.reset = function() {
    this.x = Math.random() * width;
    this.y = 0;
    this.len = (Math.random() * 80) + 10;
    this.speed = (Math.random() * 10) + 6;
    this.size = (Math.random() * 1) + 0.1;
    this.waitTime = new Date().getTime() + (Math.random() * 3000) + 500;
    this.active = false;
  }

  ShootingStar.prototype.update = function() {
    if (this.active) {
      this.x -= this.speed;
      this.y += this.speed;
      if (this.x < 0 || this.y >= height) {
        this.reset();
      } else {
        bgCtx.lineWidth = this.size;
        bgCtx.beginPath();
        bgCtx.moveTo(this.x, this.y);
        bgCtx.lineTo(this.x + this.len, this.y - this.len);
        bgCtx.stroke();
      }
    } else {
      if (this.waitTime < new Date().getTime()) {
        this.active = true;
      }
    }
  }

  // Handle window resize
  function onResize() {
    width = window.innerWidth;
    height = $('#bg-animation').height();
    (height < 400) ? height = 400: height;

    terrain.width = background.width = width;
    terrain.height = background.height = height;

    drawTerrain();
    entities = initStars();
  }

  window.addEventListener('resize', onResize);

  let entities = initStars();
  drawTerrain();
  animate(entities);
</script>
@endsection