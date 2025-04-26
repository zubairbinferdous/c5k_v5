<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $issuDetails->title ?? 'Article Details' }}</title>
    @include('layout.header')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .journal-name {
            font-family: Georgia, serif;
            font-size: 18px;
            font-weight: 600;
        }

        .journal-name a {
            text-decoration: none;
            color: black;
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

        .single-issu-section .article-title a {
            text-decoration: none;
            color: black !importanti;
        }

        .article-title a:hover {
            color: blue;
            border-bottom: 2px solid black;
            padding-bottom: 5px;
        }

        .author-info {
            font-size: 0.95rem;
            color: #777;
            text-align: center;
            line-height: 1.6;
            margin-bottom: 25px;
            padding-top: 2px;
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

        .keyword {
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;
            border-bottom: 2px solid #cccccc;
            font-size: 15px;




        }

        .banner-section {
            background-color: #f8f9fa;
            border-bottom: 1px solid #cccccc;
            /* Muted gray */



        }

        .rotate-180 {
            transform: rotate(180deg);
            transition: transform 0.2s ease;
        }

        .logo-img {
            height: 180px;
            width: 180px;

        }

        .logo-img img {
            height: 180px;
            width: 180px;
        }

        .image-img {
            height: 100px;
            width: 100px;
        }

        .download1 {
            background: rgb(250, 244, 0);
            font-weight: 500;
            font-size: 22px;
        }

        .download2 {
            background: rgb(0, 154, 203);
            font-weight: 500;
            font-size: 22px;
            color: white;

        }

        .article-information {
            color: black;
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;


        }

        @media (max-width: 768px) {
            .image-img {
                height: 80px;
                width: 80px;
            }

            .banner-section {
                padding-bottom: 20px;
            }
        }

        .main-sect-issu {
            border-top: 3px solid black;
        }

        .main-sect-issu .author-list a {
            text-decoration: none;
            color: #0d6efd;
            /* Bootstrap's primary color */
            border-bottom: 2px solid #0d6efd;
            margin-right: 3px;
            font-weight: 400;

        }

        .main-sect-issu .author-list a:hover {}

        .main-sect-issu .custom-link a {
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;

            display: block;
            width: 100%;
            text-decoration: none;
            color: #0d6efd;
            /* Text color */
            padding: 10px 0;
            /* Add some spacing */
            border-top: 1px solid black;
            /* Muted gray */
            border-bottom: 1px solid #cccccc;
            /* Muted gray */
            font-family: Arial, sans-serif;
            /* Clean font style */
            font-size: 16px;
            /* Adjust font size */
            transition: color 0.3s ease, border-color 0.3s ease;
            /* Add hover transition */
            margin-bottom: 4px;
        }

        .main-sect-issu .custom-link a:hover {
            color: black;
            /* Change text color on hover */
            border-color: darkblue;
            /* Darken both borders on hover */
        }


        .side-drawer {
            position: fixed;
            top: 0;
            left: -300px;
            /* Hidden by default */
            width: 300px;
            height: 100%;
            background: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
            overflow-y: auto;
            transition: all 0.3s ease-in-out;
            z-index: 1050;
        }

        .side-drawer.open {
            left: 0;
            /* Slide into view */
        }

        .drawer-content {
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }


        #issueTabs {
            border-bottom: none;
            /* Remove default border */
        }

        /* Active tab styling */
        .nav-tabs .nav-link.active {
            background: rgb(250, 244, 0);
            color: black !important;
            border: none;
            /* Remove default border */
            border-radius: 0;
            /* Remove rounded corners */
        }

        /* Default tab styling */
        .nav-tabs .nav-link {
            color: white;
            border: none;
            /* Remove default border */
        }



        /* Full-width tabs */
        .nav-item.flex-fill {
            flex: 1 1 auto;
            /* Ensure tabs take up equal space */
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
            transform: translate(-50%, -115%);
            font-size: 17px;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 8px;
        }
        .abstract-section img{
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>


    <div class="container ">
        <div class="row main-sect-issu py-2 mt-4 ">
            <div class="col-lg-12 single-issu-section h-auto  bg-white shadow">
                <section class="banner-section ">
                    <div class="row align-items-center justify-content-center bg-white  rounded">
                        <div class="col-lg-3 col-12 text-center logo-img">
                            <img src="{{ asset('public/front/images/newlogo2.jpg') }}" alt="Logo" class=>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="journal-name">
                                <a href="{{ url('academic-journal') }}">
                                    {{ $journal->title }}
                                </a>
                            </div>
                            <h6 class="mt-3">
                                <span class="text-primary"> Volume 1, Issue 1</span>,
                                {{ \Carbon\Carbon::parse($issuDetails->online_first)->format('d F, Y') }}
                            </h6>
                        </div>
                        <div class="col-lg-3 text-center">
                            <a href="{{ route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id]) }}">
                                <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}"
                                    class="image-img">
                            </a>
                            <!--<img src="{{ asset('public/front/images/papers/Journal-1.png') }}" alt="Logo" >-->
                        </div>
                    </div>
                </section>
                <div>

                </div>

                <div class="article-title">
                    {{ $issuDetails->title }}
                </div>

                <div class="container">


                    <div class="author-list text-primary py-3">
                        <!-- Authors Section -->
                        <h5 class="mb-3">Authors</h5>
                        <div class=" flex-wrap authors-name align-items-center gap-2">
                            @foreach ($authorsWithAffiliation as $author)
                                <a href="#" class="text-decoration-none">
                                    {{ $author->author_name }}
                                    <sup>{{ $author->affiliation_number }}</sup>
                                    @if ($loop->first)
                                        <!-- User and Mail icons for the first author -->
                                    @endif
                                </a>
                                @if (!$loop->last)
                                    ,&nbsp;
                                @endif
                            @endforeach

                            <div class=" mt-3" id="">
                                <h5 class="mt-3">Affiliations</h5>
                                @foreach ($affiliations as $index => $affiliation)
                                    <p class="mb-2">
                                        <sup>{{ $index + 1 }}</sup>
                                        {{ collect([$affiliation->department, $affiliation->university, $affiliation->address])->filter(function ($value) {
                                                return !empty($value);
                                            })->join(', ') }}
                                    </p>
                                @endforeach

                            </div>
                        </div>

                        <!-- Affiliations Section -->


                        <!-- Toggle Button -->

                    </div>

                    <div id="" class="side-drawer">
                        <div class="drawer-content">

                            <h5>Author's Details</h5>
                            <p><strong>Name:</strong> {{ $authorsWithAffiliation->first()->author_name }}</p>
                            <p><strong>Email:</strong>
                                <a href="mailto:{{ $authorsWithAffiliation->first()->email }}" class="text-primary">
                                    {{ $authorsWithAffiliation->first()->email }}
                                </a>
                            </p>
                            <p><strong>Department:</strong> {{ $authorsWithAffiliation->first()->department }}
                            </p>
                            <p><strong>Affiliation Number:</strong>
                                {{ $authorsWithAffiliation->first()->affiliation_number }}</p>
                            <p><strong>Address:</strong> {{ $authorsWithAffiliation->first()->address }}</p>
                        </div>
                    </div>




                </div>




                <div class="abstract-section">

                    {!! $article_htmls->blog_article ?? '' !!}
                </div>


            </div>


        </div>

    </div>

    @include('layout.footer_nav')
    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>




