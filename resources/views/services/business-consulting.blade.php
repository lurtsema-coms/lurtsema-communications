@extends('layouts.app')
@section('content')
<div class="flex flex-col justify-center items-center">
  <main class="mx-auto my-10">
    <div class="container mx-auto">
      <h1 class="text-center text-7xl font-semibold my-10" data-aos="fade-down" data-aos-duration="1000">Our Services</h1>
      <h1 class="text-center text-5xl font-semibold mb-20 underline" data-aos="fade-up">Business Consulting</h1>
      <div class="flex flex-col justify-evenly items-center gap-20 lg:flex-row lg:items-start">
        <div class="flex-grow lg:w-1/2">
          <img src="https://thumbs.dreamstime.com/b/business-consulting-meeting-working-brainstorming-new-project-finance-investment-concept-148096487.jpg" alt="">
        </div>
        <div class="flex-grow lg:w-1/2">
          <p class="text-3xl font-bold mb-10 text-gray-400">Our team of experts is dedicated to streamlining your business operations to maximize efficiency and profits.</p>
          <p class="text-lg">By conducting thorough assessments and leveraging industry best practices, we identify areas for improvement and implement strategic changes that drive measurable results. Our consulting services encompass everything from operational enhancements to long-term strategic planning, ensuring that your business is equipped to navigate challenges and seize opportunities for growth. </p>
        </div>
      </div>
    </div>
    <div class="mx-auto my-20 lg:container">
      <div class="bg-black bg-opacity-30 lg:rounded-[5rem]">
        <div class="grid gap-20 xl:grid-cols-2 p-10 lg:p-20">
          <div>
            <h3 class="text-5xl mb-5 text-primary-blue font-extrabold">01</h3>
            <p class="text-xl text-gray-300">Businesses that utilize professional consulting services can experience a 10-30% increase in operational efficiency and profitability. </p>
          </div>
          <div>
            <h3 class="text-5xl mb-5 text-primary-blue font-extrabold">02</h3>
            <p class="text-xl text-gray-300">Achieving next-generation operational excellence can lead to significant improvements, such as a 30% increase in labor productivity.  </p>
          </div>
          <div>
            <h3 class="text-5xl mb-5 text-primary-blue font-extrabold">03</h3>
            <p class="text-xl text-gray-300">Implementing operational improvements can also result in a 25% increase in employee retention.   </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex justify-center items-center my-10">
        <div class="max-w-screen-md">
          <p class="text-4xl text-center font-semibold text-gray-400">We understand that each business is unique, which is why we customize our consulting approach to meet your specific needs. </p>
          <p class="max-w-screen-sm mx-auto text-center mt-5 text-lg">Whether you are looking to optimize workflows, reduce costs, or develop new revenue streams, our seasoned consultants provide actionable insights and hands-on support. We can help you transform your operations and achieve sustainable success in a competitive marketplace.</p>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
@section('scripts')
@endsection