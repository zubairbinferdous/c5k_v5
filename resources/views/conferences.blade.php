@extends('./layouts.master')
@section('userContent')
    <div class="container mx-auto px-6 py-10">

        <!-- Conference Header -->
        <div class="text-center bg-blue-800 text-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold">C5K Conferences</h1>
            <p class="mt-3 leading-relaxed">
                Welcome to the C5K Conference Hub! Our conferences bring together thought leaders, researchers, and industry
                experts
                to foster the exchange of innovative ideas and cutting-edge research. Join us to gain insights, build
                professional networks,
                and advance in your field.
            </p>
        </div>

        <!-- Why Attend Section -->
        <section class="mt-12">
            <h2 class="text-3xl font-bold text-center mb-6">Why Attend a C5K Conference?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-white rounded-lg shadow-md text-center">
                    <i class="fa fa-globe text-4xl text-blue-600"></i>
                    <h3 class="font-semibold text-xl mt-3">Global Networking</h3>
                    <p class="mt-2 text-gray-600">
                        Engage with professionals from around the world, collaborate with experts, and build long-term
                        partnerships.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md text-center">
                    <i class="fa fa-book text-4xl text-green-600"></i>
                    <h3 class="font-semibold text-xl mt-3">Latest Research</h3>
                    <p class="mt-2 text-gray-600">
                        Discover pioneering research and innovative solutions in diverse disciplines including law, science,
                        and technology.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md text-center">
                    <i class="fa fa-users text-4xl text-yellow-600"></i>
                    <h3 class="font-semibold text-xl mt-3">Expert Panels & Workshops</h3>
                    <p class="mt-2 text-gray-600">
                        Gain practical knowledge through expert-led discussions and interactive workshops.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md text-center">
                    <i class="fa fa-file-text text-4xl text-red-600"></i>
                    <h3 class="font-semibold text-xl mt-3">Publication Opportunities</h3>
                    <p class="mt-2 text-gray-600">
                        Selected conference papers will be featured in C5K’s internationally recognized journals.
                    </p>
                </div>
            </div>
        </section>

        <!-- Upcoming Conferences -->
        <section class="mt-12">
            <h3 class="text-3xl font-bold text-center mb-6">Upcoming Conferences</h3>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p><strong>Conference Name:</strong>C5K Global Research & Innovation Summit 2025</p>
                        <p><strong>Date:</strong>December 1-2, 2025</p>
                        <p><strong>Location:</strong> 761 State Highway 100
                            Port Isabel, TX 78578, USA
                        </p>
                    </div>
                    <div>
                        <p><strong>Theme:</strong> Shaping the Future: AI, Technology, and Business Innovation</p>
                        <p><strong>Keynote Speakers:</strong> <br> • Dr. Md. Saiful Islam – University Malaysia Sarawak,
                            Malaysia
                            & Bangladesh Army University of Engineering and Technology, Bangladesh <br>
                         
                            • Dr. Norsuzailina Mohamad Sutan – University Malaysia Sarawak, Malaysia <br>
                            • Mr. Rakibul Hasan – CEO of Freedom IT, USA <br>
                            • Dr. Md. Munir Hayet Khan – INTI International University (INTI-IU), Malaysia <br>
                            • Dr. Noor Md. Sadiqul Hasan – The University of Adelaide, Australia & International University
                            of Business Agriculture and Technology, Bangladesh <br>
                        </p>
                        <p><strong>Sessions:</strong>
                        <ul>
                            <li>AI & Business Analytics in Decision-Making</li>
                            <li>Sustainable Innovation & Green Technology</li>
                            <li>Evolving Trends in Digital Marketing & E-Business</li>
                            <li>Cybersecurity & IT Infrastructure in the AI Era</li>
                            <li>Publishing & Research Panel: From Paper to Publication</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conference Tracks -->
        <section class="mt-12">
            <h3 class="text-xl font-bold text-center mb-4">Conference Tracks</h3>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <p><strong>International Law and Policy:</strong> Regulatory changes, policy development, and legal
                    innovations.</p>
                <p><strong>Organizational Management:</strong> Business operations, leadership, and strategic management.
                </p>
                <p><strong>Technology and Innovation:</strong> Digital transformation, AI, and data analytics.</p>
                <p><strong>Environmental and Social Sustainability:</strong> Business sustainability and social impact.</p>
            </div>
        </section>

        <!-- Call for Papers -->
        <section class="mt-12 bg-blue-100 p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-center">Call for Papers</h2>
            <p class="text-center text-lg mt-3">
                We invite researchers, practitioners, and scholars to submit their findings for presentation at C5K
                conferences.
                Selected papers will qualify for publication in our academic journals.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold"><i class="fa fa-file-text text-blue-500"></i> Submission Guidelines
                    </h4>
                    <p class="mt-2 text-gray-600">
                        Refer to our Submission Guidelines for detailed instructions on abstract submissions, formatting,
                        and deadlines.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h4 class="text-xl font-semibold"><i class="fa fa-file-text text-green-500"></i> Sponsorship &
                        Partnerships</h4>
                    <p class="mt-2 text-gray-600">
                        Gain brand visibility and industry recognition through our flexible sponsorship packages.
                    </p>
                </div>
            </div>
        </section>

        <!-- Sponsorship Section -->
        <section class="mt-12 text-center">
            <h2 class="text-3xl font-bold">Why Sponsor C5K Conferences?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="fa fa-bullhorn text-4xl text-blue-600"></i>
                    <h5 class="text-xl font-semibold mt-3">Brand Visibility</h5>
                    <p class="text-gray-600 mt-2">Showcase your brand to a global audience.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="fa fa-file-text text-4xl text-green-600"></i>
                    <h5 class="text-xl font-semibold mt-3">Customizable Packages</h5>
                    <p class="text-gray-600 mt-2">Tailor sponsorship options to align with your goals.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="fa fa-desktop text-4xl text-yellow-600"></i>
                    <h5 class="text-xl font-semibold mt-3">On-Site & Digital Engagement</h5>
                    <p class="text-gray-600 mt-2">Get exposure through event materials and digital branding.</p>
                </div>
            </div>
            <p class="mt-4">For sponsorship inquiries, contact us at <a href="mailto:contact@c5k.com"
                    class="text-blue-600 underline">contact@c5k.com</a>.</p>
        </section>

        <!-- Join Community & Register -->
        <section class="mt-12 text-center">
            <h2 class="text-3xl font-bold">Join the C5K Community</h2>
            <p class="mt-3 text-gray-600">
                Attend or present at a C5K Conference to expand your professional network and academic growth.
            </p>
            <a href="{{ route('login') }}"
                class="inline-block bg-blue-600 text-white py-3 px-6 mt-4 rounded-lg shadow-md hover:bg-blue-700">Join
                Now</a>

            <h2 class="text-3xl font-bold mt-12">Register Today</h2>
            <a href="{{ route('register') }}"
                class="inline-block bg-green-600 text-white py-3 px-6 mt-4 rounded-lg shadow-md hover:bg-green-700">Register
                Now</a>
        </section>

    </div>
@endsection
