@extends('./layouts.master')

@push('add-css')
<style>
    .faq-container {
        max-width: 900px;
        margin: auto;
        background: white;
        border-radius: 6px;
    }

    h2 {
        text-align: center;
        color: #004080;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .accordion-item {
        border-top: 1px solid #ccc;
    }

    .accordion-header {
        width: 100%;
        text-align: left;
        background-color: #002b45;
        color: white;
        padding: 12px 20px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        outline: none;
        transition: background 0.3s;
    }

    .accordion-header:hover {
        background-color: #003b5c;
    }

    .accordion-header.active {
        background-color: #002b45;
    }

    .accordion-body {
        max-height: 0;
        overflow: hidden;
        padding: 0 20px;
        border: 1px solid #ccc;
        border-top: none;
        background-color: white;
        transition: max-height 0.4s ease, padding 0.3s ease;
    }

    .accordion-body.show {
        padding: 20px;
    }

    .accordion-body p {
        margin: 10px 0;
    }

    .accordion-body a {
        color: #007bff;
        text-decoration: none;
    }

    .accordion-body ol,
    .accordion-body ul {
        padding-left: 20px;
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


<div class="faq-container px-5">
    <h2 class="text-[2.5rem] my-[40px] font-bold">Frequently Asked Questions (FAQ)</h2>

    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-header active">1. General</button>
            <div class="accordion-body show">
                <p><strong>1.1 How can I publish a manuscript or book with C5K?</strong><br>
                    Publishing with C5K involves these steps:
                </p>
                <ol>
                    <li>Submit your manuscript via our online portal.</li>
                    <li>Initial review by our editorial team.</li>
                    <li>Agreement signing and editor assignment.</li>
                    <li>Professional editing and formatting.</li>
                    <li>Publishing in print and digital formats with global distribution.</li>
                </ol>
                <p>For detailed guidelines, contact us at <a href="mailto:contact@c5kpublishing.com">contact@c5kpublishing.com</a>.</p>

                <p><strong>1.2 What types of works does C5K publish?</strong><br>
                    We publish peer-reviewed journal articles, research monographs, dissertations, technical reports, and more from all disciplines.
                </p>

                <p><strong>1.3 Can older manuscripts be published?</strong><br>
                    Yes, provided the manuscript remains relevant and insightful.
                </p>

                <p><strong>1.4 What are the benefits of publishing with C5K?</strong></p>
                <ul>
                    <li>Global visibility through indexing in major databases.</li>
                    <li>Flexible copyright and licensing options.</li>
                    <li>Enhanced academic credibility.</li>
                    <li>Royalties from sales.</li>
                    <li>Dedicated support throughout the publication process.</li>
                </ul>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">2. Manuscript Submission</button>
            <div class="accordion-body">
                <strong>2.1 What are the manuscript formatting requirements?</strong>
                <p>Manuscripts should follow these guidelines:</p>
                <ul>
                    <li>Font: Times New Roman, 12 pt.</li>
                    <li>Spacing: 1.5 lines.</li>
                    <li>Margins: 1 inch on all sides.</li>
                    <li>Graphics: High-resolution images (300 DPI).</li>
                </ul>
                <strong>2.2 Do you assist with editing and formatting?</strong>
                <p>Yes, we provide professional services to ensure compliance with global standards.</p>
                <strong>2.3 Can I submit a work-in-progress manuscript?</strong>
                <p>Yes, but the manuscript must be finalized before publication.</p>
                <strong>2.4 Will I have input in the final design and layout?</strong>
                <p>Yes, authors are consulted on cover art and layout decisions.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">3. Rights and Licensing</button>
            <div class="accordion-body">
                <strong>3.1 Who retains the copyright of the published work?</strong>
                <p>Authors retain full copyright. We offer both traditional and open-access licensing options.</p>
                <strong>3.2 How are third-party rights handled?</strong>
                <p>Authors must secure permissions for copyrighted materials. Guidance is provided as needed.</p>
                <strong>3.3 Can I publish parts of my manuscript elsewhere?</strong>
                <p>Yes, under certain licensing agreements. Disclosure during submission is required.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">4. Royalties and Sales</button>
            <div class="accordion-body">
                <strong>4.1 Do authors receive royalties?</strong>
                <p>Yes, authors earn a percentage of net sales revenue, disbursed biannually with detailed statements.</p>
                <strong>4.2 How are book prices determined?</strong>
                <p>Pricing depends on manuscript length, production costs, and market demand.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">5. Post-Publication Services</button>
            <div class="accordion-body">
                <strong>5.1 How does C5K promote published works?</strong>
                <p>We promote works through:</p>
                <ul>
                    <li>Academic indexing on platforms like CrossRef and Google Scholar.</li>
                    <li>Marketing via social media, email campaigns, and academic conferences.</li>
                    <li>Listings in online bookstores and library catalogs.</li>
                </ul>
                <strong>5.2 Can I request changes to a published work?</strong>
                <p>Yes, minor revisions (e.g., author details or typographical errors) can be accommodated. Major updates may require a new edition.</p>
                <strong>5.3 Can my work be translated or published in another language?</strong>
                <p>Yes, translation and multi-language publishing are possible. Contact us to discuss specific needs and associated costs.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">6. Technical and Support</button>
            <div class="accordion-body">
                <strong>6.1 What file formats are accepted?</strong>
                <p>We accept files in Word (.doc/.docx) and PDF formats. Authors are encouraged to submit editable files to facilitate revisions.</p>
                <strong>6.2 What support is available during the submission process?</strong>
                <p>Our support team provides:</p>
                <ul>
                    <li>Assistance with technical issues.</li>
                    <li>Clarifications on submission guidelines.</li>
                    <li>Real-time updates via our author portal.</li>
                </ul>
                <p>Contact us at [email] for personalized assistance.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">7. Sales and Distribution</button>
            <div class="accordion-body">
                <strong>7.1 Where will my work be available?</strong>
                <p>C5K ensures global distribution through:</p>
                <ul>
                    <li>Online platforms (Amazon, Google Books, etc.).</li>
                    <li>Academic databases.</li>
                    <li>Partnerships with bookstores and library networks.</li>
                </ul>
                <strong>7.2 How can I track my work’s performance?</strong>
                <p>Authors receive detailed sales reports via the author dashboard. Depending on the distribution platform, real-time metrics may also be available.</p>
            </div>
        </div>
    </div>
</div>


<section class="px-5">
    <div class="mx-auto my-4 p-6 bg-cyan-600 text-white rounded-2xl shadow-md">
        <h2 class="text-center text-2xl text-white font-bold mb-2">Summary</h2>
        <p class="text-center text-sm md:text-base">
            C5K Journal Publishing House is committed to supporting authors at every stage, from submission to post-publication.
            Our FAQ reflects our dedication to transparency, quality, and accessibility, ensuring a seamless experience for our global author community.
        </p>
    </div>
</section>


@endsection


@push('scripts')
<script>
    const headers = document.querySelectorAll('.accordion-header');

    headers.forEach(header => {
        header.addEventListener('click', () => {
            const currentActive = document.querySelector('.accordion-header.active');

            if (currentActive && currentActive !== header) {
                currentActive.classList.remove('active');
                const currentBody = currentActive.nextElementSibling;
                currentBody.classList.remove('show');
                currentBody.style.maxHeight = null;
            }

            header.classList.toggle('active');
            const body = header.nextElementSibling;

            if (body.classList.contains('show')) {
                body.classList.remove('show');
                body.style.maxHeight = null;
            } else {
                body.classList.add('show');
                body.style.maxHeight = body.scrollHeight + 30 + "px";
            }
        });
    });

    // 👇 Set initial open section height (first one)
    const initialActive = document.querySelector('.accordion-header.active');
    if (initialActive) {
        const initialBody = initialActive.nextElementSibling;
        initialBody.classList.add('show');
        initialBody.style.maxHeight = initialBody.scrollHeight + "px";
    }
</script>
@endpush