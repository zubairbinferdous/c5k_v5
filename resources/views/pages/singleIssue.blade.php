@extends('./layouts.master')

@push('add-css')
    <style>
        .main-sect-issu {
            border-top: 3px solid black;
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        /* .body-part{
                                            width: 66.67%;
                                        } */
        .banner-section {
            background-color: #f8f9fa;
            border-bottom: 1px solid #cccccc;
        }

        .logo-img {
            height: 180px;
            width: 180px;
        }

        .logo-img img {
            height: 180px;
            width: 180px;
        }

        .journal-name {
            font-family: Georgia, serif;
            font-size: 18px;
            font-weight: 600;
        }

        .journal-name a {
            text-decoration: none;
            color: black;
        }

        .text-primary {
            color: #007bff !important;
        }

        .image-img {
            height: 100px;
            width: 100px;
        }

        .single-issu-section .article-title {
            font-family: Georgia, serif;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
            margin-top: 10px;
            font-family: "Georgia", serif;
        }

        .author-details {
            padding: 0 32px
        }

        .main-sect-issu .author-list a {
            text-decoration: none;
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
            margin-right: 3px;
            font-weight: 400;
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sup {
            top: -.5em;
        }

        .abstract-section {
            padding: 15px;
            font-size: 16px;
            text-align: justify;
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;
            color: black;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .main-sect-issu .custom-link a {
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;
            display: block;
            width: 100%;
            text-decoration: none;
            color: #0d6efd;
            padding: 10px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid #cccccc;
            font-family: Arial, sans-serif;
            font-size: 16px;
            transition: color 0.3s ease, border-color 0.3s ease;
            margin-bottom: 4px;
        }

        .table_color {
            background: #0056b3;
            color: #fff !important;
            border: none;
            border-radius: 0 !important;
            width: 33%;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .table_color.active {
            background: #FAF400 !important;
            color: #000 !important;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        .stats-card {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .stats-card img {
            width: 130px;
            height: auto;
        }

        .stats-card span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -90%);
            font-size: 17px;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 8px;
        }
    </style>
@endpush

@section('userContent')
    @include('pages.page_header_nav')

    <div class="containers">
        <div class="flex flex-col lg:flex-row gap-[20px] main-sect-issu py-2 mt-4 ">
            <div class="w-full lg:w-3/5 single-issu-section bg-white h-auto shadow">
                <div class="author-details">
                    <div class="banner-section ">
                        <div class="flex items-center justify-center bg-white rounded">
                            <div class="w-full lg:w-3/12 text-center logo-img">
                                <img src="{{ asset('public/front/images/newlogo2.jpg') }}" alt="Logo" class="">
                            </div>

                            <div class="w-full lg:w-6/12 text-center">
                                <div class="journal-name">
                                    <a href="{{ url('academic-journal') }}" class="text-lg font-semibold hover:underline">
                                        {{ $journal->title }}
                                    </a>
                                </div>
                                <h6 class="mt-3 text-sm">
                                    <span class="text-primary">Volume 1, Issue 1</span>,
                                    {{ \Carbon\Carbon::parse($issuDetails->online_first)->format('d F, Y') }}
                                </h6>
                            </div>

                            <div class="w-full lg:w-3/12 text-center">
                                <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                                    <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                                        class="image-img mx-auto" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="article-title">
                        {{ $issuDetails->title }}
                    </div>

                    <div class="author-list text-primary py-3">
                        <!-- Authors Section -->
                        <h5 class="mb-3 text-[24px]">Authors</h5>

                        <div class="flex flex-wrap items-center gap-2">
                            @foreach ($authorsWithAffiliation as $author)
                                <a href="#" class="no-underline text-black flex items-center">
                                    {{ $author->author_name }}
                                    <sup>{{ $author->affiliation_number }}</sup>

                                    @if ($loop->first)
                                        <!-- User and Mail icons for the first author -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1 text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>

                                        <!-- Drawer Trigger Button -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 cursor-pointer"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            onclick="openSideDrawer()">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                    @endif
                                </a>
                                @if (!$loop->last)
                                    ,&nbsp;
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <!-- Sidebar Drawer (LEFT) -->
                    <div id="sideDrawer"
                        class="fixed top-0 left-0 h-full w-80 bg-white shadow-lg z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
                        <div class="p-6">
                            <button onclick="closeSideDrawer()"
                                class="text-gray-700 text-xl font-bold float-right">&times;</button>
                            <h5 class="text-lg font-semibold mb-4">Author's Details</h5>
                            <p><strong>Name:</strong> {{ $authorsWithAffiliation->first()->author_name }}</p>
                            <p><strong>Email:</strong>
                                <a href="mailto:{{ $authorsWithAffiliation->first()->email }}" class="text-blue-600">
                                    {{ $authorsWithAffiliation->first()->email }}
                                </a>
                            </p>
                            <p><strong>Department:</strong> {{ $authorsWithAffiliation->first()->department }}</p>
                            <p><strong>Affiliation Number:</strong>
                                {{ $authorsWithAffiliation->first()->affiliation_number }}</p>
                            <p><strong>Address:</strong> {{ $authorsWithAffiliation->first()->address }}</p>
                        </div>
                    </div>

                    <div class="custom-link mb-3">
                        <a href="#">
                            https://doi.org/10.103/xxx
                        </a>
                    </div>

                    <!-- Affiliations Section -->
                    <div id="moreContent" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <h5 class="text-lg font-semibold text-gray-800 mt-3">Affiliations</h5>
                        @foreach ($affiliations as $index => $affiliation)
                            <p class="mb-2 text-gray-700 leading-relaxed">
                                <sup class="text-sm align-top">{{ $index + 1 }}</sup>
                                {{ collect([$affiliation->department, $affiliation->university, $affiliation->address])->filter(fn($value) => !empty($value))->join(', ') }}
                            </p>
                        @endforeach
                    </div>

                    <!-- Show More/Less Button -->
                    <button id="toggleButton" onclick="toggleMoreContent()"
                        class="text-blue-600 font-semibold mb-3 underline decoration-2">
                        Show More
                    </button>

                    <div class="mb-6">
                        <div class="mb-4">
                            <h5 class="text-xl mb-3 font-semibold text-[#18181d]">Abstract</h5>
                            <div>
                                {{ Str::limit($issuDetails->description, 1500, '...') ?? 'No abstract available.' }}
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <p class="mb-0 font-medium">Keywords:&nbsp;</p>
                            <p class="text-black mt-2 text-md pb-5">
                                {{ $issuDetails->keyword ?? 'AI, Business, Artificial intelligence, Algorithms, Data privacy' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-2/5 bg-white h-auto shadow p-5">
                <div class="tabs tabs-lift">
                    {{-- About --}}
                    <input type="radio" name="my_tabs_3" class="tab table_color" aria-label="About" checked="checked" />

                    <div class="tab-content bg-base-100 border-base-300 pt-6">
                        <div class="">
                            <div class="mb-4">
                                <!-- Download PDF -->
                                <a href="{{ route('download_pdf', ['file' => $issuDetails->file_path]) }}"
                                    class="block w-full text-left py-3 mb-3 bg-[#FAF400] hover:bg-[#FAF400] text-black font-semibold rounded-md transition duration-200">
                                    <div class="flex justify-between items-center px-4">
                                        <div>
                                            <strong class="block text-[24px]">Download This Article</strong>
                                            <small class="text-[22px] font-normal">PDF format</small>
                                        </div>
                                        <i class="bi bi-download text-2xl"></i>
                                    </div>
                                </a>

                                <!-- HTML Article -->
                                <div>
                                    <a href="#" target="_blank"
                                        class="block w-full text-left py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-medium rounded-md transition duration-200 text-[26px] px-4 cursor-pointer">
                                        <i class="bi bi-file-text mr-2"></i>
                                        Article HTML
                                    </a>
                                </div>
                            </div>



                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="container py-4">
                                        <!-- Citation Section -->
                                        <div class="mb-4">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-black text-sm font-semibold mb-0">Citation</h2>
                                                <div class="flex items-center gap-2">
                                                    <select
                                                        class="border border-[#18181d] p-1 form-select form-select-sm w-auto"
                                                        aria-label="Citation format">
                                                        <option value="bibtex" selected="">BibTeX</option>
                                                        <option value="ris">RIS</option>
                                                        <option value="endnote">EndNote</option>
                                                    </select>
                                                    <button
                                                        class="btn btn-sm ml-2 btn-primary text-white bg-blue-600 border-blue-700 py-1 px-2">Go</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Share Section -->
                                        <div class="mb-4">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-black text-sm font-semibold mb-0">Share</h2>
                                                <div class="flex items-center gap-2">
                                                    <!-- Email Icon -->
                                                    <a href="mailto:example@example.com" class="text-red-500 mx-2"
                                                        aria-label="Share via Email">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                                            </path>
                                                            <path d="M3 7l9 6l9 -6"></path>
                                                        </svg>
                                                    </a>
                                                    <!-- LinkedIn Icon -->
                                                    <a href="www.linkedin.com" class="text-blue-600 mx-2"
                                                        aria-label="Share on LinkedIn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="#0A66C2" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="4" y="4" width="16" height="16"
                                                                rx="2"></rect>
                                                            <line x1="8" y1="11" x2="8"
                                                                y2="16"></line>
                                                            <line x1="8" y1="8" x2="8"
                                                                y2="8.01"></line>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="11"></line>
                                                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                        </svg>
                                                    </a>
                                                    <!-- Facebook Icon -->
                                                    <a href="#" class="text-blue-600 mx-2"
                                                        aria-label="Share on Facebook">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <div
                                    class="flex items-center border p-3 gap-3 bg-white shadow-md rounded-sm shadow-sm bg-light">
                                    <!-- Open Access Icon -->
                                    <div>
                                        <img style="{{ 'height:40px' }}"
                                            src={{ asset('public/frontend/img/openaccess.png') }} />
                                    </div>
                                    <span class="font-semibold mr-2">This article is Open Access</span>
                                    <!-- Creative Commons Badge -->
                                    <a href="https://creativecommons.org/licenses/by-nc/4.0/" target="_blank"
                                        class="cc-badge text-[#007bff] hover:underline hover:decoration-solid ml-auto flex items-center">
                                        <span class="ml-2">CC</span> BY-NC
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body bg-white shadow-md rounded p-4">
                                    <h5 class="text-lg font-semibold text-blue-600 mb-4">Article Information</h5>
                                    <dl class="flex flex-wrap gap-y-2">
                                        <div class="w-full md:basis-[35%] font-bold">Article Type</div>
                                        <div class="w-full md:basis-[55%] text-blue-600">Research Paper</div>

                                        <div class="w-full md:basis-[35%] font-bold">Submitted</div>
                                        <div class="w-full md:basis-[55%] text-blue-600">
                                            {{ \Carbon\Carbon::parse($issuDetails->submited_date)->format('d F, Y') }}
                                        </div>

                                        <div class="w-full md:basis-[35%] font-bold">Revised</div>
                                        <div class="w-full md:basis-[55%] text-blue-600">
                                            {{ \Carbon\Carbon::parse($issuDetails->revised_date)->format('d F, Y') }}
                                        </div>

                                        <div class="w-full md:basis-[35%] font-bold">Accepted</div>
                                        <div class="w-full md:basis-[50%] text-blue-600">
                                            {{ \Carbon\Carbon::parse($issuDetails->accepted_date)->format('d F, Y') }}
                                        </div>

                                        <div class="w-full md:basis-[35%] font-bold">Online First</div>
                                        <div class="w-full md:basis-[55%] text-blue-600">
                                            {{ \Carbon\Carbon::parse($issuDetails->online_first)->format('d F, Y') }}
                                        </div>
                                    </dl>
                                </div>
                            </div>


                            <div class="py-4">
                                <div class="flex flex-col md:flex-row justify-center items-center text-center gap-5">
                                    <!-- Total Views Card -->
                                    <div class="stats-card flex flex-col items-center shadow rounded p-4 bg-white w-40">
                                        <img src="{{ asset('public/backend/logo/stats.jpg') }}" alt="Centered Image"
                                            class="mb-2" />
                                        <span class="text-blue-600 font-semibold text-lg">
                                            {{ number_format($viewCount / 1000, 1) }}k
                                        </span>
                                        <p class="text-sm mt-1">Total Views</p>
                                    </div>

                                    <!-- Total Downloads Card -->
                                    <div class="stats-card flex flex-col items-center shadow rounded p-4 bg-white w-40">
                                        <img src="{{ asset('public/backend/logo/stats.jpg') }}" alt="Centered Image"
                                            class="mb-2" />
                                        <span class="text-blue-600 font-semibold text-lg">
                                            {{ number_format($downloadCount / 1000, 1) }}k
                                        </span>
                                        <p class="text-sm mt-1">Downloads</p>
                                    </div>

                                    <!-- Citations Card -->
                                    <div class="stats-card flex flex-col items-center shadow rounded p-4 bg-white w-40">
                                        <img src="{{ asset('public/backend/logo/stats.jpg') }}" alt="Centered Image"
                                            class="mb-2" />
                                        <span class="text-blue-600 font-semibold text-lg">0</span>
                                        <p class="text-sm mt-1">Citations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Cited By --}}
                    <input type="radio" name="my_tabs_3" class="tab table_color" aria-label="Cited By" />

                    <div class="tab-content bg-base-100 border-base-300 p-6">
                        This tab lists articles citing this work.
                    </div>

                    {{-- Related --}}
                    <input type="radio" name="my_tabs_3" class="tab table_color" aria-label="Related" />
                    <div class="tab-content bg-base-100 border-base-300 p-6">
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold text-gray-800 mb-4">Related Issues</h5>
                            @forelse ($relatedIssues as $related)
                                <div class="mb-3 p-3 border rounded hover:bg-gray-50 transition">
                                    <a href="{{ route('single.issue', ['id' => $journal->id, 'volumeId' => $volumeId, 'issueId' => $related->id]) }}"
                                        class="text-blue-600 hover:underline font-medium">
                                        {{ $related->title }}
                                    </a>
                                    <div class="text-sm text-gray-600">
                                        {{ \Carbon\Carbon::parse($related->created_at)->format('d F, Y') }}
                                    </div>
                                </div>
                            @empty
                                <div class="text-gray-500">No related issues found.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let isExpanded = false;

        function toggleMoreContent() {
            const content = document.getElementById("moreContent");
            const button = document.getElementById("toggleButton");

            if (isExpanded) {
                // Collapse
                content.style.maxHeight = "0";
                button.textContent = "Show More";
            } else {
                // Expand
                content.style.maxHeight = content.scrollHeight + "px";
                button.textContent = "Show Less";
            }

            isExpanded = !isExpanded;
        }

        // Optional: reset height on window resize
        window.addEventListener("resize", () => {
            const content = document.getElementById("moreContent");
            if (isExpanded) {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    </script>


    <script>
        function openSideDrawer() {
            document.getElementById("sideDrawer").classList.remove("-translate-x-full");
            document.getElementById("sideDrawer").classList.add("translate-x-0");
        }

        function closeSideDrawer() {
            document.getElementById("sideDrawer").classList.remove("translate-x-0");
            document.getElementById("sideDrawer").classList.add("-translate-x-full");
        }

        function activateTab(index) {
            const labels = document.querySelectorAll('.table_color');

            labels.forEach((label, i) => {
                if (i === index) {
                    label.classList.add('active');
                } else {
                    label.classList.remove('active');
                }
            });
        }

        window.addEventListener('DOMContentLoaded', () => {
            const labels = document.querySelectorAll('.table_color');

            // Call activateTab for the default checked one
            labels.forEach((label, index) => {
                if (label.checked) {
                    activateTab(index);
                }

                // Add change event to update on click
                label.addEventListener('change', () => {
                    activateTab(index);
                });
            });
        });
    </script>
@endpush
