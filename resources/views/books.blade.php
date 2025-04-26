@extends('./layouts.master')
@section('userContent')
@include('book_nav')

<section class="mt-2 bg-[#EFFAFB] book-banner">
  <div class="container mx-auto mt-5 h-[450px]">
    <div class="swiper promoSwiper h-full ">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="flex flex-wrap ml-3 pl-10">
            <div class="w-full md:w-1/2 pt-5">
              <h1 class="text-2xl md:text-3xl font-bold">Publish Book on Your Way.</h1>
              <h6 class="text-gray-700 mt-2">It’s fast and easy with C5K Academic Publishing.</h6>
              <div class="flex mt-6 space-x-4">
                <a href="{{ route('login') }}">
                  <button class="btn bg-blue-600 text-white px-6 py-2 rounded-lg">Sign In</button>
                </a>
                <a href="{{ route('register') }}">
                  <button class="btn bg-green-600 text-white px-6 py-2 rounded-lg">Join C5K</button>
                </a>

              </div>
            </div>
            <div class="hidden md:block md:w-1/2">
              <img src="public/front/images/confirence/slide4.svg" class="w-full" alt="Slide Image">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="flex flex-wrap items-center ml-3 pl-10">
            <div class="w-full md:w-1/2 text-center md:text-left">
              <h1 class="text-xl md:text-2xl font-semibold mb-4">Expand your reach and build your brand.
              </h1>
              <ul class="text-gray-700 space-y-2 text-sm md:text-base">
                <li class="flex items-center"><span class="text-yellow-400 mr-2">★</span>Affordable fees
                  for authors</li>
                <li class="flex items-center"><span class="text-blue-600 mr-2">★</span>Quality
                  scientific publishing</li>
                <li class="flex items-center"><span class="text-green-600 mr-2">★</span>15% overall
                  royalty payments</li>
                <li class="flex items-center"><span class="text-sky-500 mr-2">★</span>Distribution over
                  40 countries</li>
                <li class="flex items-center"><span class="text-red-600 mr-2">★</span>Discount for early
                  career researchers</li>
              </ul>
              <div class="flex justify-center md:justify-start mt-4 space-x-4">
                <a href="{{ route('login') }}">
                  <button class="btn bg-blue-600 text-white px-6 py-2 rounded-lg">Sign In</button>
                </a>
                <a href="{{ route('register') }}">
                  <button class="btn bg-green-600 text-white px-6 py-2 rounded-lg">Join C5K</button>
                </a>
              </div>
            </div>
            <div class="hidden md:block md:w-1/2 text-center">
              <img src="public/front/images/confirence/slide5.svg" class="w-full" alt="Slide Image">
            </div>
          </div>
        </div>

      </div>

      <!-- Swiper navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>

<!-- Swiper Init Script -->





<section class="w-full py-6 px-4 mx-auto max-w-7xl">
  <h3 class="text-2xl font-bold text-center text-gray-800">Find Book by Category</h3>
  <p class="text-center text-gray-500 mt-1 mb-6">Explore books categorized for your interests.</p>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 link-style">
    @foreach ($categories as $category)
    @php
    $colors = ['bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-red-500', 'bg-cyan-500'];
    $color = $colors[$loop->index % count($colors)];
    @endphp

    <a href="{{ route('books.category', $category->id) }}" class="">
      <div
        class="w-full h-[180px] rounded-xl text-white {{ $color }} shadow-md hover:scale-[1.03] transition-transform duration-300 flex items-center justify-center">
        <h5 class="text-lg font-bold text-center px-4">{{ $category->name }}</h5>
      </div>
    </a>
    @endforeach
  </div>
</section>


<section class="py-10 bg-cover bg-center" style="background-image: url('{{ asset('public/backend/footer.jpg') }}');" >
  <div class="container mx-auto text-center text px-4" style="color:white">
    <h4 class="text-2xl font-semibold mb-4">Discover Our World-wide Academic Collection</h4>
    <p class="max-w-3xl mx-auto mb-8 text-sm sm:text-base leading-relaxed">
      We take pride in presenting a wide range of academic works spanning numerous disciplines.
      From business to information technology, sociology to economics, science to engineering,
      our catalog reflects the richness and diversity of contemporary university/institute research.
      Whether you’re a student, academic researcher, scientific community member, or knowledge enthusiast,
      you’ll certainly find titles that pique your curiosity and deepen your understanding.
    </p>
  </div>

  <!-- Slider Section -->
  <div class="py-6">
    <div class="container mx-auto px-4">
      <div class="relative overflow-hidden">
        <div class="flex transition-transform duration-1000 ease-in-out" x-data="{ activeIndex: 0, interval: null }"
          x-init="interval = setInterval(() => {
                            activeIndex = (activeIndex + 1) % {{ ceil($books->count() / 3) }};
                        }, 3000);" x-ref="carousel"
          :style="'transform: translateX(-' + (activeIndex * 100) + '%)'">
          @foreach ($books->chunk(3) as $chunk)
          <div class="min-w-full flex gap-4 justify-center">
            @foreach ($chunk as $book)
            <div class="w-full sm:w-1/5">
              <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('public/backend/books/' . $book->book_img) }}" alt="Book Image"
                  class="w-full h-84 object-cover">
              </div>
            </div>
            @endforeach
          </div>
          @endforeach
        </div>
      </div>

      <!-- Indicators -->
      <div class="flex justify-center mt-6 space-x-2" x-data="{ activeIndex: 0 }">
        @foreach ($books->chunk(3) as $index => $chunk)
        <button class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all duration-300"
          :class="{ 'bg-white': activeIndex === {{ $index }} }"
          @click="activeIndex = {{ $index }}"></button>
        @endforeach
      </div>
    </div>
  </div>
</section>

<div class="flex justify-center items-center py-4">
  <a href="{{ route('bookList.index') }}" class="bg-blue-600 text-white py-2 px-4 shadow rounded hover:bg-blue-700 transition duration-200">
    All Books
  </a>
</div>




<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-extrabold text-gray-900">Our Services</h2>
    </div>

    <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
      <!-- Service Card 1 -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 text-center">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#3b82f6" viewBox="0 0 24 24" width="48"
            height="48">
            <path
              d="M3 4v17a2 2 0 002 2h14a2 2 0 002-2V4H3zm2 2h12v15H5V6zm14 0v15h2V6h-2zm-6 1H7v2h6V7zm0 3H7v2h6v-2zm0 3H7v2h6v-2z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Over the World Book Publishing Service</h3>
        <p class="text-gray-600 text-sm">With easy steps and expert advice, publish your work online. Benefit
          from
          high-quality editing and personalized assistance tailored to your specific needs.</p>
      </div>

      <!-- Service Card 2 -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 text-center">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#3b82f6" viewBox="0 0 24 24" width="48"
            height="48">
            <path
              d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8zm-.5-14h1v7l5.3 3.2-.5.9L11.5 14z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Worldwide Marketing Policy</h3>
        <p class="text-gray-600 text-sm">Ensure international recognition for your book with our comprehensive
          worldwide
          marketing strategy. Reach a global audience effectively.</p>
      </div>

      <!-- Service Card 3 -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 text-center">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#3b82f6" viewBox="0 0 24 24" width="48"
            height="48">
            <path
              d="M4 3h16a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2zm10 2v2H6V5h8zm4 14V9H6v10h12z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Publish with Expert Assistance</h3>
        <p class="text-gray-600 text-sm">Our experts provide complete support throughout the publishing
          process.
          Let us
          help you reach your goals with ease.</p>
      </div>

      <!-- Service Card 4 -->
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 text-center">
        <div class="flex justify-center mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#3b82f6" viewBox="0 0 24 24" width="48"
            height="48">
            <path
              d="M21 3H3a1 1 0 00-1 1v16a1 1 0 001 1h18a1 1 0 001-1V4a1 1 0 00-1-1zM3 5h18v2H3zm0 4h18v10H3zm9 3H5v-2h7z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Print-on-Demand Service</h3>
        <p class="text-gray-600 text-sm">We use eco-friendly print-on-demand technology to reduce waste and
          ensure
          cost-effective production of your book.</p>
      </div>
    </div>
  </div>
</section>



<!-- Step Section -->
<section class="container mx-auto py-12 px-4">
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold mb-2">Our book Publishing Procedure is Easy and Quicker</h2>
    <h4 class="text-lg text-gray-600">There are 4 simple steps to follow</h4>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Step Cards -->
    <div class="bg-white p-6 shadow-md rounded-xl text-center">
      <span class="text-3xl font-bold text-blue-600 mb-2 block">1</span>
      <h3 class="text-xl font-semibold mb-2">Submit your book</h3>
      <p class="text-gray-600">Whether you have a complete manuscript or just a draft, we’ll provide constructive
        feedback—no obligations.</p>
    </div>
    <div class="bg-white p-6 shadow-md rounded-xl text-center">
      <span class="text-3xl font-bold text-blue-600 mb-2 block">2</span>
      <h3 class="text-xl font-semibold mb-2">In Review and Revision</h3>
      <p class="text-gray-600">We help refine your ideas, ensuring clarity and precision.</p>
    </div>
    <div class="bg-white p-6 shadow-md rounded-xl text-center">
      <span class="text-3xl font-bold text-blue-600 mb-2 block">3</span>
      <h3 class="text-xl font-semibold mb-2">Proof of book</h3>
      <p class="text-gray-600">We’ll polish your work for impact and professionalism.</p>
    </div>
    <div class="bg-white p-6 shadow-md rounded-xl text-center">
      <span class="text-3xl font-bold text-blue-600 mb-2 block">4</span>
      <h3 class="text-xl font-semibold mb-2">Publish your book</h3>
      <p class="text-gray-600">Reach readers globally and make a lasting impression.</p>
    </div>
  </div>
  <div class="flex justify-center mt-10">
    <button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Start
      Submission</button>
  </div>
</section>

<!-- Academic Section -->
<section class="bg-gray-100 py-12">
  <div class="container mx-auto px-4">
    <div class="text-center mb-10">
      <h3 class="text-2xl font-bold mb-2">Publish Your Book</h3>
      <p class="text-gray-600 text-lg">It’s easy with C5K Academic Publishing</p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <div class="text-blue-600 mb-4">
          <!-- Icon here -->
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
            viewBox="0 0 16 16" class="mx-auto">
            <path d="M4 1.5A1.5..."></path>
          </svg>
        </div>
        <h4 class="text-xl font-semibold mb-2">Publish Your Book</h4>
        <p class="text-gray-600 mb-4">Let’s start with what it costs, what you need, and what we offer.</p>
        <button class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Get
          Started</button>
      </div>
      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <div class="text-blue-600 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
            viewBox="0 0 16 16" class="mx-auto">
            <path d="M9 0a2 2..."></path>
          </svg>
        </div>
        <h4 class="text-xl font-semibold mb-2">About Self-Publishing</h4>
        <p class="text-gray-600 mb-4">Hardcover, paperback, ebooks, and global book distribution.</p>
        <button class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Get
          Started</button>
      </div>
      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <div class="text-blue-600 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
            viewBox="0 0 16 16" class="mx-auto">
            <path d="M2 2a2..."></path>
          </svg>
        </div>
        <h4 class="text-xl font-semibold mb-2">Share and Sell Your Book</h4>
        <p class="text-gray-600 mb-4">Free resources to help you self-publish successfully.</p>
        <button class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Get
          Started</button>
      </div>
    </div>
  </div>
</section>

<!-- Statistics Section -->
<section class="container mx-auto my-12 px-4">
  <h3 class="text-2xl font-bold text-center mb-8">Our Book Publishing Statistics</h3>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
    <div class="bg-white p-6 rounded-xl shadow">
      <div class="text-3xl font-bold text-blue-600">1000+</div>
      <div class="text-gray-700 mt-2">Authors</div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <div class="text-3xl font-bold text-blue-600">30,000+</div>
      <div class="text-gray-700 mt-2">Social Media Coverage</div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow">
      <div class="text-3xl font-bold text-blue-600">1500+</div>
      <div class="text-gray-700 mt-2">Titles in our Records</div>
    </div>
  </div>
</section>

<!-- Publication Section -->
<section class="container mx-auto my-12 px-4 flex flex-col lg:flex-row items-start gap-6">
  <!-- Image -->
  <div class="w-full lg:w-1/4 overflow-hidden">
    <img src="{{ asset('public/backend/journal/bookImage.jpg') }}" alt="Dissertation"
      class="rounded-xl w-full h-auto object-cover">
  </div>
  <!-- Content -->
  <div class="w-full lg:w-1/1">
    <h2 class="text-2xl font-semibold mb-4">Showcase Your Work with C5KTP</h2>
    <p class="text-gray-700 mb-4">C5KTP offers publication services for books and dissertations to give your work
      global exposure and academic value.</p>
    <p class="text-gray-700 mb-4">Each published author gets a dedicated page with bio, ISBN, and DOI info. Updates
      are possible post-publication.</p>
    <ul class="list-disc pl-5 text-gray-700 space-y-1">
      <li>Global distribution and exhibition</li>
      <li>Increased visibility and citability</li>
      <li>Accessible print and e-books</li>
      <li>Open access for free downloads</li>
    </ul>
  </div>
</section>
@endsection
@push('scripts')
<script>
  const swiper = new Swiper('.promoSwiper', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: 'slide',
    spaceBetween: 30,
    slidesPerView: 1,
  });
</script>
@endpush