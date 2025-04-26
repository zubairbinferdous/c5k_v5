@extends('./layouts.master')
@section('userContent')
    <!-- Include Swiper CSS -->


    <div class="relative w-full max-w-7xl mx-auto ">
        <!-- Swiper Container -->
        <div class="swiper mySwiper rounded-xl overflow-hidden m-6">
            <div class="swiper-wrapper ">
                {{-- @dd($banners) --}}
                @foreach ($banners as $key => $banner)
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('public/backend/banner/' . $banner->banner) }}" class="w-full h-[550px] rounded-lg"
                            alt="{{ $banner->first_heading }}" />
                    </div>
                @endforeach

            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>

            <!-- Pagination Dots -->
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>


    <section class="py-12 max-w-7xl mx-auto px-6 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg text-center py-[60px] ">
                <h3 class="text-xl font-bold">Welcome! Member</h3>
                <p class="mt-2">Enrich your experience with C5K</p>
            </div>
            <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg text-center py-[60px]">
                <h3 class="text-xl font-bold">Get Connected</h3>
                <p class="mt-2">Explore what C5K can offer you</p>
            </div>
            <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg text-center py-[60px]">
                <h3 class="text-xl font-bold">Get Involved</h3>
                <p class="mt-2">Enrich your experience with C5K</p>
            </div>
        </div>
    </section>

    <!-- Include Swiper JS -->

    <section class="py-12 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-8">The Latest Announcement from C5K</h2>
        <div class="max-w-7xl mx-auto grid gap-6 md:grid-cols-3 px-4">
            @foreach ($news as $article)
                {{-- <div class="col-12 mb-4">
                    <a href="{{ url('newss/' . $article->id) }}" class="text-decoration-none">
                        <div class="latest-news-card shadow-sm">
                            <!-- Image Section -->
                            <div class="latest-news-image">
                                <img src="" alt="{{ $article->title }}" class="img-fluid">
                            </div>
                            <!-- Title Section -->
                            <div class="latest-news-title"
                                style='font-family: "Georgia", serif; color:black;font-size:18px'>
                                {{ \Illuminate\Support\Str::limit($article->title, 30, '...') }}
                            </div>
                            <!-- Text Section -->
                            <div class="latest-news-text">
                                <p class=""
                                    style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size:16px;color:black">

                                    {!! \Illuminate\Support\Str::limit(strip_tags($article->details), 80, '...') !!}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ url('newss/' . $article->id) }}">
                        <img src="{{ asset('public/backend/news/' . $article->image) }}" alt="{{ $article->title }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4 text-left">
                            <h3 class="font-bold text-lg"> {{ \Illuminate\Support\Str::limit($article->title, 30, '...') }}
                            </h3>
                            <p class="text-gray-600 mt-2"> {!! \Illuminate\Support\Str::limit(strip_tags($article->details), 80, '...') !!}</p>
                            <a href="{{ url('newss/' . $article->id) }}"
                                class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            <a href="{{ route('home.news') }}"
                class=" bg-black text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-800 transition">
                See More →
            </a>
        </div>
    </section>


    <!-- Journal Covers Section -->
    {{-- <section class="py-12 px-6 bg-black">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                <div class="flex justify-center h-[380px]">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1"
                        class="w-64 shadow-lg rounded-lg">
                </div>
                <div class="flex justify-center h-[380px]">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1"
                        class="w-64 shadow-lg rounded-lg">
                </div>
                <div class="flex justify-center h-[380px]">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1"
                        class="w-64 shadow-lg rounded-lg">
                </div>
                <div class="flex justify-center h-[380px]">
                    <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal 1"
                        class="w-64 shadow-lg rounded-lg">
                </div>

            </div>
        </div>
    </section> --}}


    <section class="py-12 px-6 bg-black">
        <div class="max-w-7xl mx-auto">
            <!-- Swiper Container -->
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    {{-- @foreach (range(1, 8) as $i)
                        <!-- Loop through images (use dynamic data if needed) -->
                        <div class="swiper-slide flex justify-center h-[380px]">
                            <img src="https://www.c5k.com/public/backend/banner/4.jpg" alt="Journal {{ $i }}"
                                class="w-64 shadow-lg rounded-lg">
                        </div>
                    @endforeach --}}


                    @foreach ($journalsSLider->chunk(3) as $index => $chunk)
                        @foreach ($chunk as $journal)
                            <div class="swiper-slide flex justify-center h-[380px]">
                                <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                                    <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                                        alt="Dissertation {{ $loop->parent->iteration }} "
                                        class="w-64 shadow-lg rounded-lg">
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>

                <!-- Navigation Arrows -->
                {{-- <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div> --}}

                <!-- Pagination Dots (Optional) -->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
    </section>


    <!-- Latest Articles Section -->
    <section class="py-12 max-w-7xl px-6 mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Latest Articles</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">


            @foreach ($articles as $article)
                {{-- <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                    <a href="{{ route('single.issue', ['id' => $article->journal_id, 'volumeId' => $article->volume_id, 'issueId' => $article->id]) }}"
                        class="text-decoration-none">
                        <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden; height: 350px;">
                            <div class="card-body d-flex flex-column" style="background: #f9f9f9;">
                                <p style="color: #20be42; font-size: 14px; font-weight: bold;">
                                    C5K <span class="badge badge-success ml-2">Article</span>
                                </p>
                                <h6 class="card-title"
                                    style='font-family: "Georgia", serif; font-size:21px; color:blue;font-size:17px; font-weight: 900;'>
                                    {{ $article->article_title ?? '' }}</h6>
                                <p class="card-text  flex-grow-1"
                                    style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size:12px; color:black; text-align:justify; ">
                                    {{ Str::limit(strip_tags($article->description ?? ''), 340, '...') }}
                                </p>
                                <p class="text-primary my-2 mb-0 mt-auto" style='font-family: "Georgia", serif;color:black'>
                                    Read more <i class="fa fa-long-arrow-right"></i></p>
                            </div>
                        </div>
                    </a>
                </div> --}}

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <a
                        href="{{ route('single.issue', ['id' => $article->journal_id, 'volumeId' => $article->volume_id, 'issueId' => $article->id]) }}">
                        <span class="text-green-600 font-bold">C5K</span>
                        <span class="bg-green-200 text-green-800 text-xs px-2 py-1 rounded-full ml-2">Article</span>
                        <h3 class="text-blue-600 font-bold mt-2"> {{ $article->article_title ?? '' }}
                        </h3>
                        <p class="text-gray-600 mt-2 text-sm text-justify ">
                            {{ Str::limit(strip_tags($article->description ?? ''), 300, '...') }}
                        </p>


                        <a href="{{ route('single.issue', ['id' => $article->journal_id, 'volumeId' => $article->volume_id, 'issueId' => $article->id]) }}"
                            class="text-blue-500 font-bold mt-2 inline-block">Read more →</a>
                    </a>
                </div>
            @endforeach


        </div>

        <div class="text-center mt-6">
            <a href="{{ route('home.article') }}"
                class="mt-6 bg-black text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-800 transition">
                See More →
            </a>
        </div>

    </section>
    <!-- Membership Section -->


    <section class="py-12 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-8">Latest Blogs</h2>
        <div class="max-w-7xl mx-auto grid gap-6 md:grid-cols-3 px-4">
            @foreach ($blogs as $blog)
                {{-- @dd($blog->image) --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('blog.details', ['id' => $blog->id]) }}">
                        <img src="{{ asset('/public/backend/blog/' . $blog->image) }}" alt="{{ $blog->title }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4 text-left">
                            <h3 class="font-bold text-lg"> {{ \Illuminate\Support\Str::limit($blog->title, 60, '...') }}
                            </h3>
                            <p class="text-gray-600 mt-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->details), 60, '...') }}</p>
                            <a href="{{ route('blog.details', ['id' => $blog->id]) }}"
                                class="text-blue-600 font-semibold flex items-center mt-2">Read More →</a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            <a href="{{ route('home.blogs') }}"
                class="mt-6 bg-black text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:bg-gray-800 transition">
                See All
                Blogs →
            </a>
        </div>
    </section>


    @php
        $totalJournals = \App\Journal::count();
    @endphp

    <!-- Journal Grid -->
    <div class="text-center mt-8">
        <h2 class="text-3xl font-bold mt-4">Discover the insights of our {{ $totalJournals }} diverse journals</h2>
    </div>
    <div class="max-w-7xl mx-auto px-4 mt-8 ">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 ">

            @foreach ($journals as $journal)
                {{-- <div class="col-6 col-md-4 col-lg-2 mb-3 d-flex justify-content-center" style="">
                    <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                        <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                            class="img-fluid rounded" alt="Journal Image"
                            style="transition: transform 0.3s ease; display: block; margin: 0 auto;"
                            onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div> --}}
                <!-- Journal 1 -->
                <div class="shadow-lg rounded-lg overflow-hidden hover:scale-105 transition ">
                    <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">

                        <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" alt="Journal 1"
                            class="">
                    </a>
                </div>
            @endforeach




        </div>
    </div>

    <section class="py-12 px-6">
        <div
            class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center bg-white shadow-lg rounded-lg p-8">
            <!-- Social Media Icons -->
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-normal text-black-500 mb-6">Stay up to date</h2>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-700 text-white text-xl shadow-md hover:scale-110 transition-transform"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-400 text-white text-xl shadow-md hover:scale-110 transition-transform"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-pink-600 text-white text-xl shadow-md hover:scale-110 transition-transform"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-900 text-white text-xl shadow-md hover:scale-110 transition-transform"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Subscription Form -->
            <div class="text-center md:text-right">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Subscribe to C5K for Updates</h2>
                <div class="flex justify-center md:justify-end">
                    <input type="email" placeholder="Enter your email"
                        class="p-4 border border-gray-300 rounded-l-lg w-72 shadow-md focus:ring-2 focus:ring-orange-500">
                    <button
                        class="bg-orange-500 text-white px-6 py-4 rounded-r-lg font-bold shadow-md hover:bg-orange-600 transition-colors">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, // Enables infinite looping
            autoplay: {
                delay: 3000, // Auto-slide every 3 seconds
                disableOnInteraction: false, // Keeps autoplay after manual swipe
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            effect: "slide", // Ensures smooth sliding
            preventClicks: true, // Prevents unwanted blue highlight
            preventClicksPropagation: false, // Ensures click event works properly
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 4, // Show 4 slides at a time
                spaceBetween: 20, // Space between slides
                loop: true, // Infinite loop
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 3000, // Auto-slide every 3 seconds
                    disableOnInteraction: false,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    }, // Mobile: 1 slide
                    640: {
                        slidesPerView: 2
                    }, // Tablet: 2 slides
                    1024: {
                        slidesPerView: 4
                    } // Desktop: 4 slides
                }
            });
        });
    </script>
@endpush
