@extends('./layouts.master')

@push('add-css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<style>
    /* .publish-main {
        font-family: 'Inter', sans-serif;
    }
    .inter-font {
        font-family: 'Inter', sans-serif;
    } */
    .banner_sec {
        /* font-family: "Inter", sans-serif; */
        width: 100%;
        height: 600px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .banner_content {
        margin-left: 50px;
        max-width: 600px;
        padding: 100px 0;
    }

    .banner_content h1 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #0b50a1;
    }

    .banner_content .btn {
        display: inline-block;
        padding: 8px 24px;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 35px;
        height: 4px;
        margin: 5px 7px;
        background: #D6D6D6;
        display: block;
        -webkit-backface-visibility: visible;
        transition: opacity .2s ease;
        border-radius: -13px;
    }

    .owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: -25px !important;
        z-index: 5;
        position: relative;
    }

    .whypublish-section-main h1 {
        /* font-family: "Inter", sans-serif; */
        font-size: 3rem;
        color: #0b50a1;
    }

    .whypublish-content h2 {
        /* font-family: "Inter", sans-serif; */
        font-size: 2rem;
        color: #333;
        margin-bottom: 1rem;
        color: #0b50a1;
    }

    .whypublish-content p {
        /* font-family: "Inter", sans-serif; */
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .whypublish-image img {
        width: 100%;
        height: 500px;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
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


<div class="publish-main">
    <div class="banner_sec " style="background-image: url('public/backend/banner_deser_publ.png');">
        <div class="containers">
            <div class="banner_content ">
                <h1>C5K Academic Publishing</h1>

                <a href="#" class="btn">Publish</a>
            </div>
        </div>
    </div>
</div>


<section class="py-20 bg-cover bg-center" style="background-image: url('{{ asset('public/backend/library.jpg') }}');">
    <div class="containers mx-auto text-center text-white px-4">
        <h4 class="text-2xl md:text-3xl font-semibold mb-4 inter-font">
            How to Publish Your Thesis/Dissertation with C5K Journal
        </h4>
        <p class="max-w-3xl mx-auto mb-20 text-sm md:text-base inter-font">
            At C5K Journal Publishing House, we recognize the commitment and work required to finish a thesis or dissertation.
            A satisfying way to present your research to the international academic community is to turn your academic work into a published article.
            This comprehensive guide will assist you with the procedure.
        </p>
    </div>

    <div class="container mx-auto px-4">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241030040119.png') }}" alt="Dissertation 1" class="w-full h-auto">
                </div>
            </div>
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241030040248.png') }}" alt="Dissertation 2" class="w-full h-auto">
                </div>
            </div>
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241031150714.png') }}" alt="Dissertation 3" class="w-full h-auto">
                </div>
            </div>
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241030040248.png') }}" alt="Dissertation 4" class="w-full h-auto">
                </div>
            </div>
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241031150714.png') }}" alt="Dissertation 5" class="w-full h-auto">
                </div>
            </div>
            <div class="item">
                <div class="bg-white rounded shadow-md overflow-hidden">
                    <img src="{{ asset('backend/journal/20241030040119.png') }}" alt="Dissertation 6" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="containers whypublish-section-main mx-auto my-10 py-10 px-4">
    <div>
        <h1 class="text-center text-2xl md:text-3xl font-semibold pt-4 mb-24">
            Why Publish Your Thesis/Dissertation with C5K?
        </h1>
    </div>

    <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
        <!-- Text content -->
        <div class="lg:w-1/2 space-y-6">
            <div class="whypublish-content">
                <h2 class="text-xl font-semibold mb-2">Prestigious Platform:</h2>
                <p class="text-gray-700">
                    C5K is known for releasing scholarly works with a significant impact.
                </p>
            </div>

            <div class="whypublish-content">
                <h2 class="text-xl font-semibold mb-2">Global Reach:</h2>
                <p class="text-gray-700">
                    Disseminated to prestigious universities and accessible via premier digital libraries.
                </p>
            </div>

            <div class="whypublish-content">
                <h2 class="text-xl font-semibold mb-2">Professional Advice:</h2>
                <p class="text-gray-700">
                    Throughout the publication process, knowledgeable editors and reviewers offer assistance.
                </p>
            </div>

            <div class="whypublish-content">
                <h2 class="text-xl font-semibold mb-2">Customized Formatting Assistance:</h2>
                <p class="text-gray-700">
                    We guarantee that your thesis satisfies all scholarly and publishing prerequisites.
                </p>
            </div>
        </div>

        <!-- Image -->
        <div class="lg:w-1/2">
            <img src="{{ asset('public/backend/library.jpg') }}" alt="Dissertation 6" class="rounded-lg shadow-md w-full h-auto object-cover">
        </div>
    </div>
</section>


<div class="first-step">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl inter-font font-semibold text-center inter-font mb-12">
            4 Simple Steps to Publish Your Thesis/Dissertation
        </h2>

        <!-- Repeat for each step -->
        <div class="mb-20">
            <!-- Stepper -->
            <div class="flex justify-center items-center mb-8">
                <div class="flex max-w-md w-full items-center justify-between space-x-4">
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white bg-[#ff0000] font-semibold inter-font">
                            Step-1
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-2
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-3
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-4
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step Content -->
            <div class="text-center mb-10">
                <h4 class="text-2xl font-semibold mb-2">
                    Step 1: Prepare and Submit Your Manuscript
                </h4>
                <p class="text-gray-600">Make sure your manuscript satisfies the following criteria before submitting:</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-10">
                <!-- Image -->
                <div class="w-full lg:w-1/2 whypublish-image">
                    <img src="https://www.c5k.com/public/backend/step1.jpg" alt="Step 1" class="rounded-xl shadow-lg w-full h-[400px] object-cover" />
                </div>
                <!-- Content -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Formatting Compliance</h2>
                        <p class="text-gray-700">Conform to the layout structure, font size, spacing, and citation style specified by C5K. This process is made easier with our submission instructions.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Title and Abstract</h2>
                        <p class="text-gray-700">Write a clear, attention-grabbing title. Provide a well-written abstract that highlights the goals, methods, results, and conclusions of your study.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Comprehensive Inspection</h2>
                        <p class="text-gray-700">Verify your work again for coherence, grammar, and spelling to improve its overall quality.</p>
                    </div>
                    <div class="whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Submission Procedure</h2>
                        <p class="text-gray-700">Upload your manuscript and supply the necessary information using the provided submission instructions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat similar block for Step 2, Step 3, Step 4 -->
    </div>
</div>


<div class="first-step">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Repeat for each step -->
        <div class="mb-20">
            <!-- Stepper -->
            <div class="flex justify-center items-center mb-8">
                <div class="flex max-w-md w-full items-center justify-between space-x-4">
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-1
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white bg-[#ff0000] font-semibold inter-font">
                            Step-2
                        </div>
                    </div>

                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-3
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-4
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step Content -->
            <div class="text-center mb-10">
                <h4 class="text-2xl font-semibold mb-2 inter-font">
                    Step 2: Peer Review and Feedback
                </h4>
                <p class="text-gray-600 inter-font">Once submitted, your manuscript undergoes a double-blind peer-review process:</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-10">

                <!-- Content -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2 inter-font">First Screening</h2>
                        <p class="text-gray-700 inter-font">Our editorial team evaluates your submission for originality, relevance, and academic rigor.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2 inter-font">Expert Feedback</h2>
                        <p class="text-gray-700 inter-font">Experts review your work and offer helpful criticism to help you improve your manuscript.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2 inter-font">Author Cooperation</h2>
                        <p class="text-gray-700 inter-font">Following acceptance, you will work with our editors to complete your dissertation or thesis for publication.</p>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 whypublish-image">
                    <img src="https://www.c5k.com/public/backend/step2.jpg" alt="Step 1" class="rounded-xl shadow-lg w-full h-[400px] object-cover" />
                </div>
            </div>
        </div>

        <!-- Repeat similar block for Step 2, Step 3, Step 4 -->
    </div>
</div>


<div class="first-step">
    <div class="max-w-7xl mx-auto px-4 py-12">

        <!-- Repeat for each step -->
        <div class="mb-20">
            <!-- Stepper -->
            <div class="flex justify-center items-center mb-8">
                <div class="flex max-w-md w-full items-center justify-between space-x-4">
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-1
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-2
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white bg-[#ff0000] font-semibold inter-font">
                            Step-3
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold inter-font">
                            Step-4
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step Content -->
            <div class="text-center mb-10">
                <h4 class="text-2xl font-semibold mb-2 inter-font">
                    Step 3: Design and Quality Assurance
                </h4>
                <p class="text-gray-600 inter-font inter-font">We make sure your work satisfies the most difficult academic requirements by:</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-10">
                <!-- Image -->
                <div class="w-full lg:w-1/2 whypublish-image">
                    <img src="https://www.c5k.com/public/backend/step3.jpg" alt="Step 1" class="rounded-xl shadow-lg w-full h-[400px] object-cover" />
                </div>
                <!-- Content -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Editorial Review</h2>
                        <p class="text-gray-700 inter-font">Grammar, formatting, and structural errors are fixed by editors.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Visual Enhancements</h2>
                        <p class="text-gray-700 inter-font">Our team improves charts, graphs, and pictures for impact and clarity as appropriate.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Final Approval</h2>
                        <p class="text-gray-700 inter-font">Prior to publishing, a draft of the finished manuscript will be sent to you for approval.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat similar block for Step 2, Step 3, Step 4 -->
    </div>
</div>


<div class="first-step">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Repeat for each step -->
        <div class="mb-20">
            <!-- Stepper -->
            <div class="flex justify-center items-center mb-8">
                <div class="flex max-w-md w-full items-center justify-between space-x-4">
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold">
                            Step-1
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold">
                            Step-2
                        </div>
                    </div>

                    <div class="w-full h-1 bg-[#0b50a1]"></div>
                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-[#0b50a1] border-2 border-[#0b50a1] bg-white font-semibold">
                            Step-3
                        </div>
                    </div>
                    <div class="w-full h-1 bg-[#0b50a1]"></div>


                    <div class="relative text-center">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white bg-[#ff0000] font-semibold">
                            Step-4
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step Content -->
            <div class="text-center mb-10">
                <h4 class="text-2xl font-semibold mb-2 inter-font">
                    Step 4: Publication and Global Distribution
                </h4>
                <p class="text-gray-600">Once approved, your thesis/dissertation is ready to reach the world:</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-10">

                <!-- Content -->
                <div class="w-full lg:w-1/2">
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Digital and Print Availability</h2>
                        <p class="text-gray-700">Both digital and print versions of your work are available.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Global Reach</h2>
                        <p class="text-gray-700">Global accessibility is ensured by collaborating with top academic shops and libraries.</p>
                    </div>
                    <div class="mb-6 whypublish-content">
                        <h2 class="text-xl font-semibold text-[#0b50a1] mb-2">Royalty Agreement</h2>
                        <p class="text-gray-700">For every sale or download of their work, authors get paid a competitive royalty.</p>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 whypublish-image">
                    <img src="https://www.c5k.com/public/backend/step5.jpg" alt="Step 1" class="rounded-xl shadow-lg w-full h-[400px] object-cover" />
                </div>
            </div>
        </div>

        <!-- Repeat similar block for Step 2, Step 3, Step 4 -->
    </div>
</div>


<section class="bg-cover bg-center bg-no-repeat" style="background-image: url('/public/backend/footer.jpg')">
    <div class="text-center max-w-7xl mx-auto px-4 py-16 text-white">
        <h1 class="text-4xl font-bold inter-font">Benefits of Publishing with C5K</h1>
        <p class="text-lg mt-2 inter-font">Share your research and make an impact in the academic world.</p>

        <div class="grid md:grid-cols-3 gap-6 mt-10">
            <div class="bg-black/60 p-6 rounded shadow">
                <h3 class="text-xl font-semibold inter-font">Academic Recognition</h3>
                <p class="mt-2 text-sm inter-font">Boost your profile and establish yourself as an expert in your field.</p>
            </div>
            <div class="bg-black/60 p-6 rounded shadow">
                <h3 class="text-xl font-semibold inter-font">Global Visibility</h3>
                <p class="mt-2 text-sm inter-font">Share your findings with a broad audience worldwide.</p>
            </div>
            <div class="bg-black/60 p-6 rounded shadow">
                <h3 class="text-xl font-semibold inter-font">Earning Potential</h3>
                <p class="mt-2 text-sm inter-font">Earn royalties while making meaningful contributions to academia.</p>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="text-2xl font-bold">Common Reasons for Rejection</h2>
            <p class="text-lg mt-2">Avoid these pitfalls to ensure acceptance:</p>
            <ul class="text-left inline-block mt-4 text-sm space-y-2">
                <li><strong>Plagiarism:</strong> Ensure your work is original and properly cited.</li>
                <li><strong>Incomplete Research:</strong> Submit a fully developed and well-structured thesis.</li>
                <li><strong>Poor Grammar/Formatting:</strong> Adhere to guidelines and proofread thoroughly.</li>
            </ul>

            <p class="mt-6 text-sm">
                Ready to publish? Submit your manuscript today! Visit our
                <a href="#" class="text-yellow-400 font-bold hover:underline">FAQ page</a>
                or contact our editorial team for assistance.
            </p>

            <div class="mt-6">
                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded transition">
                    Get Started Today
                </button>
            </div>
        </div>
    </div>
</section>


@endsection


@push('scripts')

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            responsiveClass: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    });
</script>
@endpush