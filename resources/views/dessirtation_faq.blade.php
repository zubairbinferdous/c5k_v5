<title>C5k |FAQ</title>
@include('layout.header')

<style>
    .faq-header {
        text-align: center;
        margin: 30px 0;
        color: #0b50a1;
        font-size: 25px;
        font-weight: 600;

    }

    .faq-header h3 {
        font-size: 2rem !important;
        color: white;
    }

    .card-header {
        font-weight: bold;
        background-color: #061f32;
        /* Accordion header background color */
        color: #ffffff;
        /* Text color for the accordion header */
        border: none;
    }

    .accordion-button {
        color: #ffffff;
        /* Button text color */
        background-color: #061f32;
        /* Button background color */
    }

    .accordion-button:hover {
        background-color: #083348;
        /* Slightly lighter color on hover */
        color: #ffffff;
        /* Text color remains white */
    }

    .accordion-item {
        border: 1px solid #dee2e6;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .accordion-body {
        font-size: 0.95rem;
        line-height: 1.6;
        background-color: #f8f9fa;
        /* Background color for the accordion body */
    }

    h5,
    strong {
        color: #061f32;
        /* Heading and strong text color */
    }

    .summary {
        background-color: RGB(0, 160, 198);
        border-radius: 20px;
    }
</style>

<body>
    @include('dissertation_nab')

    <section>
        <div class="container pb-5">
            <!-- FAQ Header -->
            <div class="faq-header">
                <h1>Frequently Asked Questions (FAQ)</h1>
            </div>

            <!-- FAQ Accordion -->
            <div class="accordion" id="faqAccordion">
                <!-- General Section -->
                <div class="card">
                    <div class="card-header" id="headingGeneral" data-toggle="collapse" data-target="#collapseGeneral"
                        aria-expanded="true" aria-controls="collapseGeneral">
                        <h5 class="mb-0 text-white">
                            1. General
                        </h5>
                    </div>
                    <div id="collapseGeneral" class="collapse show" aria-labelledby="headingGeneral"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>1.1 How can I publish a manuscript or book with C5K?</strong>
                            <p>Publishing with C5K involves these steps:</p>
                            <ol>
                                <li>Submit your manuscript via our online portal.</li>
                                <li>Initial review by our editorial team.</li>
                                <li>Agreement signing and editor assignment.</li>
                                <li>Professional editing and formatting.</li>
                                <li>Publishing in print and digital formats with global distribution.</li>
                            </ol>
                            <p>For detailed guidelines, contact us at <a
                                    href="mailto:contact@c5kpublishing.com">contact@c5kpublishing.com</a>.</p>
                            <strong>1.2 What types of works does C5K publish?</strong>
                            <p>We publish peer-reviewed journal articles, research monographs, dissertations, technical
                                reports, and more from all disciplines.</p>
                            <strong>1.3 Can older manuscripts be published?</strong>
                            <p>Yes, provided the manuscript remains relevant and insightful.</p>
                            <strong>1.4 What are the benefits of publishing with C5K?</strong>
                            <ul>
                                <li>Global visibility through indexing in major databases.</li>
                                <li>Flexible copyright and licensing options.</li>
                                <li>Enhanced academic credibility.</li>
                                <li>Royalties from sales.</li>
                                <li>Dedicated support throughout the publication process.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Manuscript Submission Section -->
                <div class="card">
                    <div class="card-header" id="headingSubmission" data-toggle="collapse"
                        data-target="#collapseSubmission" aria-expanded="false" aria-controls="collapseSubmission">
                        <h5 class="mb-0 text-white">
                            2. Manuscript Submission
                        </h5>
                    </div>
                    <div id="collapseSubmission" class="collapse" aria-labelledby="headingSubmission"
                        data-parent="#faqAccordion">
                        <div class="card-body">
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
                </div>

                <!-- Rights and Licensing Section -->
                <div class="card">
                    <div class="card-header" id="headingRights" data-toggle="collapse" data-target="#collapseRights"
                        aria-expanded="false" aria-controls="collapseRights">
                        <h5 class="mb-0 text-white">
                            3. Rights and Licensing
                        </h5>
                    </div>
                    <div id="collapseRights" class="collapse" aria-labelledby="headingRights"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>3.1 Who retains the copyright of the published work?</strong>
                            <p>Authors retain full copyright. We offer both traditional and open-access licensing
                                options.</p>
                            <strong>3.2 How are third-party rights handled?</strong>
                            <p>Authors must secure permissions for copyrighted materials. Guidance is provided as
                                needed.</p>
                            <strong>3.3 Can I publish parts of my manuscript elsewhere?</strong>
                            <p>Yes, under certain licensing agreements. Disclosure during submission is required.</p>
                        </div>
                    </div>
                </div>

                <!-- Royalties and Sales Section -->
                <div class="card">
                    <div class="card-header" id="headingRoyalties" data-toggle="collapse"
                        data-target="#collapseRoyalties" aria-expanded="false" aria-controls="collapseRoyalties">
                        <h5 class="mb-0 text-white">
                            4. Royalties and Sales
                        </h5>
                    </div>
                    <div id="collapseRoyalties" class="collapse" aria-labelledby="headingRoyalties"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>4.1 Do authors receive royalties?</strong>
                            <p>Yes, authors earn a percentage of net sales revenue, disbursed biannually with detailed
                                statements.</p>
                            <strong>4.2 How are book prices determined?</strong>
                            <p>Pricing depends on manuscript length, production costs, and market demand.</p>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingPostService" data-toggle="collapse"
                        data-target="#collapsePostService" aria-expanded="false" aria-controls="collapsePostService">
                        <h5 class="mb-0 text-white">
                            5. Post-Publication Services
                        </h5>
                    </div>
                    <div id="collapsePostService" class="collapse" aria-labelledby="headingPostService"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>5.1 How does C5K promote published works?</strong>
                            <p>We promote works through:</p>
                            <ul>
                                <li>Academic indexing on platforms like CrossRef and Google Scholar.</li>
                                <li>Marketing via social media, email campaigns, and academic conferences.</li>
                                <li>Listings in online bookstores and library catalogs.</li>
                            </ul>
                            <strong>5.2 Can I request changes to a published work?</strong>
                            <p>Yes, minor revisions (e.g., author details or typographical errors) can be accommodated.
                                Major updates may require a new edition.</p>
                            <strong>5.3 Can my work be translated or published in another language?</strong>
                            <p>Yes, translation and multi-language publishing are possible. Contact us to discuss
                                specific needs and associated costs.</p>
                        </div>
                    </div>
                </div>

                <!-- Technical and Support Section -->
                <div class="card">
                    <div class="card-header" id="headingTechnical" data-toggle="collapse"
                        data-target="#collapseTechnical" aria-expanded="false" aria-controls="collapseTechnical">
                        <h5 class="mb-0 text-white">
                            6. Technical and Support
                        </h5>
                    </div>
                    <div id="collapseTechnical" class="collapse" aria-labelledby="headingTechnical"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>6.1 What file formats are accepted?</strong>
                            <p>We accept files in Word (.doc/.docx) and PDF formats. Authors are encouraged to submit
                                editable files to facilitate revisions.</p>
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
                </div>

                <!-- Sales and Distribution Section -->
                <div class="card">
                    <div class="card-header" id="headingSales" data-toggle="collapse" data-target="#collapseSales"
                        aria-expanded="false" aria-controls="collapseSales">
                        <h5 class="mb-0 text-white">
                            7. Sales and Distribution

                        </h5>
                    </div>
                    <div id="collapseSales" class="collapse" aria-labelledby="headingSales" data-parent="#faqAccordion">
                        <div class="card-body">
                            <strong>7.1 Where will my work be available?</strong>
                            <p>C5K ensures global distribution through:</p>
                            <ul>
                                <li>Online platforms (Amazon, Google Books, etc.).</li>
                                <li>Academic databases.</li>
                                <li>Partnerships with bookstores and library networks.</li>
                            </ul>
                            <strong>7.2 How can I track my work’s performance?</strong>
                            <p>Authors receive detailed sales reports via the author dashboard. Depending on the
                                distribution platform, real-time metrics may also be available.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="p-4 my-2 container  shadow-sm summary">
        <h2 class="text-center text-white">Summary</h2>
        <p class="text-center text-white">C5K Journal Publishing House is committed to supporting authors at every
            stage, from submission to post-publication. Our FAQ reflects our dedication to transparency, quality, and
            accessibility, ensuring a seamless experience for our global author community.</p>
    </section>




    @include('layout.footer_nav')
    @include('layout.footer')
    @include('layout.js')

</body>

</html>
