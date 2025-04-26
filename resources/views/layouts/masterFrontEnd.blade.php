<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Metadata -->
    <meta name="author" content="C5K Academic Research">
    <meta name="keywords" content="academic research, scholarly publishing, C5K, journal, booka, AI research, mental health studies">
    <meta name="description" content="C5K Academic Research Publishing is a leading global publication dedicated to in-depth quantitative and qualitative analysis, industry insights, and professional resources to help institutions and researchers excel in academic innovation.">
    
    <!-- Social Media Meta (Open Graph for Facebook & Twitter) -->
    <meta property="og:title" content="C5K - Leading Academic Research Publication">
    <meta property="og:description" content="C5K provides scholarly publishing, AI-driven research, and mental health insights to push the boundaries of academic excellence.">
    <meta property="og:image" content="https://www.c5k.com/logo.png">
    <meta property="og:url" content="https://www.c5k.com">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Dynamic Laravel Page Title -->
    <title>C5K - Leading Academic Research Publication </title>

    <!-- Structured Data for SEO (Google Schema Markup) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "C5K Academic Research Publishing",
      "url": "https://www.c5k.com",
      "logo": "https://www.c5k.com/logo.png",
      "description": "C5K - A leading global publication in academic research, offering AI-driven solutions for mental health, scholarly insights, and industry-leading innovations.",
      "sameAs": [
        "https://www.twitter.com/c5k",
        "https://www.linkedin.com/company/c5k"
      ]
    }
    </script>

    <!-- Styles & Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontEndArea/main.css') }}">
</head>


<style>
    .logo_area a img {
        height: 60px;
        margin-left: 20px
    }
</style>

<body>
    <header class="sticky top-0 z-40 shadow-lg shadow-white-500/50">

        <nav class=" bg-gray-900 text-white p-3">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <!-- Left: Show C5K.com Always, Hide Other Links on Mobile -->
                <div class="flex space-x-4">
                    <a href="#" class="flex text-xs items-center hover:text-gray-400">
                        <span class="mr-1 "></span>C5K.com
                    </a>
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">C5K.co</a>
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">C5K.ec</a>
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">C5K.nl</a>
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">More Sites</a>
                </div>

                <!-- Right: Show JOIN C5K Always, Hide Other Links on Mobile -->
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">Membership</a>
                    <a href="#" class="hover:text-gray-400 hidden md:inline text-xs">Sign In</a>
                    <a href="#" class="hover:text-gray-400 font-bold text-xs">JOIN C5K</a>
                </div>
            </div>
        </nav>
        <nav class=" bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Left: Logo -->
                <div class="logo_area">
                    <a class="" href="{{ route('home') }}">
                        <img src="{{ asset('public/backend/logo/logo.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Center: Navigation Links (Hidden on Small Screens) -->


                <!-- Right: Social Icons & Mobile Menu Toggle -->
                <div class="flex items-center space-x-4">
                    <!-- Social Icons -->
                    <a href="#" class="text-[#007C92] text-xl "><i class="fab fa-facebook"></i></a>
                    {{-- <a href="#" class="text-white text-xl hover:text-gray-200"><i class="fab fa-x"></i></a> --}}
                    <a href="#" class="text-[#007C92] text-xl "><i class="fab fa-linkedin"></i></a>

                    <!-- Mobile Menu Toggle -->

                </div>
            </div>

        </nav>

        <nav class="bg-[#007C92] shadow-lg  ">
            <div class="max-w-7xl mx-auto flex justify-center items-center">

                <div class="hidden  md:flex space-x-12 text-white font-bold p-4 text-lg">
                    <a href="{{ route('home') }}" class="hover:text-gray-200 transition">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-gray-200 transition">About</a>
                    <a href="{{ route('academic.journal') }}" class="hover:text-gray-200 transition">Academic
                        Journals</a>
                    <a href="{{ route('dissertation.thesis') }}"
                        class="hover:text-gray-200 transition">Dissertation/Thesis</a>
                    <a href="{{ route('books') }}" class="hover:text-gray-200 transition">Books</a>
                    <a href="{{ route('conferences') }}" class="hover:text-gray-200 transition">Conferences</a>
                    <a href="{{ route('home.news') }}" class="hover:text-gray-200 transition">Announcements</a>
                </div>

                <!-- Right: Social Icons & Mobile Menu Toggle -->
                <button id="menu-toggle" class="md:hidden text-white focus:outline-none text-2xl">
                    <i class="fas fa-bars"></i>
                </button>

            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden md:hidden bg-[#007C92] text-white flex flex-col space-y-2 mt-2 p-4 rounded-lg">
                <a href="{{ route('home') }}" class="hover:text-gray-200 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-gray-200 transition">About</a>
                <a href="{{ route('academic.journal') }}" class="hover:text-gray-200 transition">Academic
                    Journals</a>
                <a href="{{ route('dissertation.thesis') }}"
                    class="hover:text-gray-200 transition">Dissertation/Thesis</a>
                <a href="{{ route('books') }}" class="hover:text-gray-200 transition">Books</a>
                <a href="{{ route('conferences') }}" class="hover:text-gray-200 transition">Conferences</a>
                <a href="{{ route('home.news') }}" class="hover:text-gray-200 transition">Announcements</a>
            </div>
        </nav>
    </header>


    @yield('userContent')

    <footer class="bg-blue-800 text-white py-8 mt-10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-sm px-6">
            <div>
                <h2 class="font-bold">ABOUT C5K</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Learn more about C5K</a>
                <a href="{{ route('mission.vission') }}" class="block hover:text-gray-300">Mission & Vision</a>
            </div>
            <div>
                <h2 class="font-bold">LOCATION</h2>
                <p class="mt-2">761 STATE HIGHWAY 100</p>
                <p>Port Isabel, TX 78578 USA</p>
                <a href="#" class="block mt-2 hover:text-gray-300">Contact & Support</a>
            </div>
            <div>
                <h2 class="font-bold">GET INVOLVED</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Conference</a>
                <a href="#" class="block hover:text-gray-300">Societies</a>
                <a href="#" class="block hover:text-gray-300">Technical career</a>
                <a href="#" class="block hover:text-gray-300">Scholarship</a>
            </div>
            <div>
                <h2 class="font-bold">RESOURCES</h2>
                <a href="#" class="block mt-2 hover:text-gray-300">Author guideline</a>
                <a href="#" class="block hover:text-gray-300">Paper format download</a>
                <a href="#" class="block hover:text-gray-300">Submit Article</a>
                <a href="#" class="block hover:text-gray-300">Book publishing</a>
                <a href="#" class="block hover:text-gray-300">Thesis/Dissertation</a>
            </div>
        </div>
        <div class="bg-gray-900 text-center text-sm py-4 mt-4 px-4">
            &copy; Copyright 2024 C5K – All rights reserved. A not-for-profit organization, C5K is the world's largest
            technical professional organization dedicated to advancing technology for the benefit of humanity.
        </div>
    </footer>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @stack('scripts')

</body>

</html>
