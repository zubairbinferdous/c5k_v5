@extends('./layouts.master')
@section('userContent')
    <div class="container mx-auto px-6 py-10">

        <!-- Header Section -->
        <div class="relative mt-5 h-[200px] flex flex-col justify-center items-center text-center bg-cover bg-center rounded-lg shadow-md"
            style="background-image: url('{{ asset('public/front/images/people-discuss-research.jpg') }}');">
            <h1 class="bg-white bg-opacity-80 text-gray-800 text-4xl font-bold px-8 py-4 rounded-full shadow-md">About C5K
            </h1>
            <p class="bg-white bg-opacity-80 text-gray-700 text-lg px-6 py-3 rounded-full mt-2 shadow-md">
                Leading the Future of Scholarly Research in IT and Business Management .
            </p>
        </div>

        <!-- Our Mission -->
        <section class="my-12 flex flex-col lg:flex-row items-center gap-10">
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    At C5K, we are dedicated to publishing groundbreaking research and promoting
                    innovative ideas in the fields of information technology, business management, and related disciplines.
                    Our goal is to minimize the delay in sharing new ideas and discoveries with the world, making
                    high-quality, peer-reviewed journals available online.
                </p>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('public/backend/about-banner.jpg') }}" alt="Mission Image" class="w-full rounded-lg shadow-lg">
            </div>
        </section>

        <!-- Focus Areas -->
        <section class="py-12 bg-gradient-to-r from-blue-700 to-blue-500 text-white rounded-lg shadow-lg">
            <h2 class="text-center text-4xl font-bold mb-8">Focus Areas</h2>
           <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6">
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Information Technology & Management</h3>
    </div>
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Computing, Machine Learning & AI</h3>
    </div>
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Business Management & Social Development</h3>
    </div>
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Entrepreneurship & Marketing</h3>
    </div>
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Internet Security & Protocols</h3>
    </div>
    <div class="h-[200px] flex items-center justify-center p-6 text-center bg-white bg-opacity-20 rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold">Banking, Finance & Leadership</h3>
    </div>
</div>

        </section>

        <!-- Reviewer Expertise -->
        <section class="py-12">
            <h2 class="text-center text-4xl font-bold text-gray-800 mb-6">Reviewer Expertise</h2>
            <p class="text-center text-lg text-gray-600 mb-8">
                Our journals are supported by a team of highly skilled reviewers, each an expert in their field.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6">
                <div class="p-6 text-center bg-blue-100 rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/s3.png') }}" class="mx-auto mb-4 w-24 h-24 rounded-full shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Dr. John Doe</h3>
                    <p class="text-gray-600">Information Technology & Management</p>
                </div>
                <div class="p-6 text-center bg-blue-100 rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/s3.png') }}" class="mx-auto mb-4 w-24 h-24 rounded-full shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Dr. Jane Smith</h3>
                    <p class="text-gray-600">Machine Learning & AI</p>
                </div>
                <div class="p-6 text-center bg-blue-100 rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/s3.png') }}" class="mx-auto mb-4 w-24 h-24 rounded-full shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-800">Prof. Alan Brown</h3>
                    <p class="text-gray-600">Business Management</p>
                </div>
            </div>
        </section>

        <!-- High Impact Journals -->
        <section class="py-12 bg-gray-200 rounded-lg shadow-lg">
            <h2 class="text-center text-4xl font-bold text-gray-800 mb-6">High-Impact Journals</h2>
            <p class="text-center text-lg text-gray-600 mb-8">
                C5K’s journals bridge the gap between theoretical and real-world applications, supporting both emerging and
                established fields.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/papers/Journal-1.png') }}" class="w-full rounded-md shadow-md mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Journal of Information Technology</h3>
                    <p class="text-gray-600">A leading journal covering IT management and systems development.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/papers/Journal-2.png') }}" class="w-full rounded-md shadow-md mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Journal of Machine Learning & AI</h3>
                    <p class="text-gray-600">Focuses on advancements in machine learning and artificial intelligence.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('public/front/images/papers/Journal-3.png') }}" class="w-full rounded-md shadow-md mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Business and Social Development Journal</h3>
                    <p class="text-gray-600">Explores the intersection of business management and social impact.</p>
                </div>
            </div>
        </section>

    </div>
@endsection
