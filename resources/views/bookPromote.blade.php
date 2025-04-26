@extends('./layouts.master')

@push('add-css')
    <style>
        .promote-text-section {
            background-color: #061f32;
            color: white;
            border-radius: 10px;
        }
    </style>
@endpush

@section('userContent')
    <section class="bg-[#EAEDED]">
        <div class="container mx-auto">
            <nav class="flex flex-wrap items-center justify-between px-4 py-3">
                <button class="block lg:hidden text-gray-700 focus:outline-none" @click="open = !open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div class="w-full lg:flex lg:items-center lg:w-auto hidden lg:block" id="navbarSupportedContent">
                    <ul class="flex flex-col lg:flex-row w-full py-2 lg:py-0">
                        <li class="mx-2 my-1 lg:my-0">
                            <a href="{{ url('books') }}" class="text-gray-800 hover:text-blue-600 transition">Books</a>
                        </li>
                        <li class="mx-2 my-1 lg:my-0">
                            <a href="{{ route('book.publish') }}" class="text-gray-800 hover:text-blue-600 transition">How
                                To Publish</a>
                        </li>
                        <li class="mx-2 my-1 lg:my-0">
                            <a href="{{ route('book.promote') }}"
                                class="text-gray-800 hover:text-blue-600 transition">Promote</a>
                        </li>
                        <li class="mx-2 my-1 lg:my-0">
                            <a href="{{ route('book.faq') }}" class="text-gray-800 hover:text-blue-600 transition">FAQ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>


    <section class="mt-5 py-5 bg-[#EFFAFB]">
        <div class="container mx-auto mt-12 h-[350px]">
            <div id="promoCarousel">
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div>
                        <div class="flex flex-wrap items-center">
                            <!-- Left Content -->
                            <div class="w-full sm:w-1/2 pl-5">
                                <h1 class="mt-12 pt-6 text-4xl font-bold text-gray-800">Promote</h1>
                                <h6 class="text-lg text-gray-600">Promote Yourself and Your Thinking</h6>
                            </div>
                            <!-- Right Image -->
                            <div class="w-full sm:w-1/2">
                                <img src="{{ asset('public/front/images/confirence/slide4.svg') }}" alt="Slide Image"
                                    class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-4 max-w-7xl mx-auto px-4">
        <div class="text-center promote-text-section p-4">
            <h2 class="text-2xl sm:text-3xl font-semibold text-white mb-4">
                Promote Your Work with C5K Journal Publishing House
            </h2>
            <p class="text-base sm:text-lg text-white leading-relaxed">
                At C5K Journal Publishing House, we understand that publishing your research is only the first step;
                promoting it effectively ensures that your work reaches the right audience and makes a lasting impact. We
                are committed to supporting our authors in showcasing their contributions to the academic and professional
                communities.
            </p>
        </div>
    </section>


    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center py-10">
                <h3 class="text-2xl sm:text-3xl font-semibold text-[#0b50a1] mb-6">
                    How We Help You Promote Your Work
                </h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8 7a7 7 0 0 0 6.468-4H9.04a14.31 14.31 0 0 1 0 4H8zm3.01-5H8.99a13.279 13.279 0 0 0 0-4h2.02c.144.65.233 1.307.271 1.963a8.959 8.959 0 0 1-.27 2.037zM7 11a14.255 14.255 0 0 1 0-4H5.01a8.045 8.045 0 0 1-.271 2.037A7.975 7.975 0 0 1 7 11zm1-7c.348 0 .694.017 1.04.05C8.726 3.4 8.402 3 8 3s-.726.4-1.04.05C7.306 3.017 7.652 3 8 3zm6 5a7 7 0 0 0-6.468-4h1.559c.254.562.415 1.16.483 1.8.071.671.067 1.355 0 2.037A8.96 8.96 0 0 1 14 8zm-7.559 0c-.254-.562-.415-1.16-.483-1.8a8.941 8.941 0 0 1 0-2.037H1.532A7.015 7.015 0 0 0 7 8zm1.559 0H1.532A7.016 7.016 0 0 0 8 15h1.559a7.001 7.001 0 0 0 0-7z" />
                        </svg>
                        <h4 class="text-lg font-semibold">Global Indexing and Accessibility</h4>
                        <p class="mt-3 text-gray-600 text-sm">All published articles and books are indexed in renowned
                            academic databases to ensure global visibility.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path
                                d="M8 4a2 2 0 1 0 0 4a2 2 0 0 0 0-4zM8 5a1 1 0 1 1 0 2a1 1 0 0 1 0-2zM14 14s-1-3-6-3s-6 3-6 3s-.5-.375-1-1a7 7 0 0 1 14 0c-.5 .625-1 1-1 1z" />
                        </svg>
                        <h4 class="text-lg font-semibold">Author Highlights</h4>
                        <p class="mt-3 text-gray-600 text-sm">We feature authors and their work on our platforms, expanding
                            their reach and inspiring others.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path
                                d="M11.5 0a1.5 1.5 0 1 1 0 3h-.083A6.999 6.999 0 0 1 1 7a6.98 6.98 0 0 1 4.417 1.917c-.168.318-.329.655-.5 1.083C3.169 8.57 2 7 2 7a7 7 0 1 1 9.5-7zm1 1a6 6 0 1 0 4 10H11zm3 2l4.833 4zM14z" />
                        </svg>
                        <h4 class="text-lg font-semibold">Social Media Marketing</h4>
                        <p class="mt-3 text-gray-600 text-sm">Promoting publications on LinkedIn, Twitter, and Instagram to
                            reach a diverse audience.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path
                                d="M2 2v10h2v2H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1H2zm2 2h1v3H4V4zm0 4h1v3H4V8zm7-2v6H6V6h2V5H6a1 1 0 0 0-1 1v7H4V5h6v1zm1 0h2v3h-2V6z" />
                        </svg>
                        <h4 class="text-lg font-semibold">Academic Networks and Partnerships</h4>
                        <p class="mt-3 text-gray-600 text-sm">Collaborate with institutions, libraries, and research
                            organizations for recognition and distribution.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path d="M6 10V2l5 4-5 4z" />
                            <path d="M12 0h1a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z" />
                        </svg>
                        <h4 class="text-lg font-semibold">Customized Promotion Packages</h4>
                        <p class="mt-3 text-gray-600 text-sm">Design tailored promotional strategies that suit your needs,
                            including press releases, blog posts, and email campaigns.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="flex justify-center">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center max-w-sm w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="mx-auto mb-4 text-[#0b50a1]" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.742a6 6 0 1 0-1.498 1.498l3.854 3.853a1 1 0 0 0 1.415-1.415l-3.853-3.854zM12 6a5 5 0 1 1-5-5 5 5 0 0 1 5 5z" />
                        </svg>
                        <h4 class="text-lg font-semibold">SEO Optimization for Online Visibility</h4>
                        <p class="mt-3 text-gray-600 text-sm">We optimize your article or book metadata to enhance its
                            search engine ranking, making it easier for peers to find your work.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container mx-auto my-12 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-900 mb-2">How to Promote Your Work Effectively</h2>
            <p class="text-gray-600">Learn how to increase the visibility and impact of your work with these effective
                strategies.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="text-center p-6 rounded-xl shadow-lg bg-purple-500 text-white transition hover:shadow-xl">
                <div class="mb-4 flex justify-center">
                    <div class="bg-white text-black rounded-full w-12 h-12 flex items-center justify-center">
                        <!-- Replace with your preferred SVG icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="6.5" r="1.5" />
                            <circle cx="17" cy="14.5" r="1.5" />
                            <circle cx="7" cy="14.5" r="1.5" />
                            <path d="M10.8 7.7L7.2 13M13.2 7.7l3.6 5.3" />
                        </svg>
                    </div>
                </div>
                <h5 class="text-lg font-bold mb-2">Leverage Your Networks</h5>
                <p>Share your publication on LinkedIn, ResearchGate, or Twitter to reach professional and academic
                    communities.</p>
            </div>

            <!-- Card 2 -->
            <div class="text-center p-6 rounded-xl shadow-lg bg-purple-500 text-white transition hover:shadow-xl">
                <div class="mb-4 flex justify-center">
                    <div class="bg-white text-black rounded-full w-12 h-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M12 21v-8"></path>
                            <path d="M9 18h6"></path>
                        </svg>
                    </div>
                </div>
                <h5 class="text-lg font-bold mb-2">Present at Conferences</h5>
                <p>Showcase your work at academic or industry events to connect with a broader audience and get feedback.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="text-center p-6 rounded-xl shadow-lg bg-purple-500 text-white transition hover:shadow-xl">
                <div class="mb-4 flex justify-center">
                    <div class="bg-white text-black rounded-full w-12 h-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="9" cy="7" r="4"></circle>
                            <circle cx="19" cy="7" r="4"></circle>
                            <path d="M5 19c1.5-2 4-3 7-3s5.5 1 7 3"></path>
                            <path d="M16 11c1.5-1.5 3-3 4-5"></path>
                        </svg>
                    </div>
                </div>
                <h5 class="text-lg font-bold mb-2">Collaborate with Others</h5>
                <p>Work with other researchers or institutions to amplify the reach and impact of your work.</p>
            </div>

            <!-- Card 4 -->
            <div class="text-center p-6 rounded-xl shadow-lg bg-purple-500 text-white transition hover:shadow-xl">
                <div class="mb-4 flex justify-center">
                    <div class="bg-white text-black rounded-full w-12 h-12 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M19 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"></path>
                            <path d="M11 9h6"></path>
                            <path d="M7 9h.01"></path>
                            <path d="M7 13h10"></path>
                            <path d="M7 17h6"></path>
                        </svg>
                    </div>
                </div>
                <h5 class="text-lg font-bold mb-2">Reference Your Work</h5>
                <p>Cite your publication in future research to enhance its academic credibility and relevance.</p>
            </div>

        </div>
    </section>
@endsection
