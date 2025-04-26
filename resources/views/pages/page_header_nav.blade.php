<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Global Font Family */
        body,
        .container,
        .nav-link-bottom,
        .dropdown-menu .dropdown-item,
        h4,
        h6,
        p {
            font-family: 'Merriweather', 'Georgia', serif;
        }

        /* Footer Navigation Styles */
        .footer-nav {
            color: white !important;
        }

        .footer-nav .nav-link-bottom {
            text-decoration: none !important;
            color: white !important;
            padding: 4px 15px;
            font-size: 16px;
        }

        .nav-item-bottom {
            position: relative;
            margin: 0 10px;
        }

        .nav-item-bottom a {
            display: block;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: start;
            width: 150px;
            color: white !important;
        }

        /* Dropdown Menu Styles */
        .dropdown-menu {
            display: none;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease-in-out;
            position: absolute;
            top: 100%;
            width: 100%;
            left: 0;
            z-index: 1000;
            background-color: #007c92;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white
        }

        .dropdown-menu .dropdown-item {
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #007c92;
            color: #000;
        }

        /* Dropdown Hover Effect */
        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            color: black !important;
        }
    </style>
</head>

<body>
    <section class="py-3 individual_section">
     

        <div class="containers">
            <div class="journal_inside_pages" style="height: auto; background-color: {{ $journal->backgroundColor ?? '#142141' }};">
                <div class="journal_image">
                    <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}">
                </div>

                <div class="journal_content">
                    <h4>{{ $journal->title }}</h4>
                    <h6>Open Access</h6>
                    
                    <div class="journal_score">
                        <span>Cite Score: {{ $journal->cite_score ?? '' }}</span>
                        <span>Impact Factor: {{ $journal->impact_factor }}</span>
                    </div>
                </div>
            </div>


            <div class="journal_issue_menu" style="background-color:{{ $journal->background_color2 }};color:{{ $journal->backgroundColor }}!">
                <ul class="journal_parent">
                    <li class="journal_parent_core journal_nav">Current Issue
                        <ul class="dropdown_menu">
                            <li><a class="dropdown_item" href="{{ route('current.issue', ['id' => $journal->id]) }}">Current Issue</a></li>

                            <li><a class="dropdown_item" href="{{ route('article-press', ['id' => $journal->id]) }}">Article in Press</a></li>

                            <li><a class="dropdown_item" href="{{ route('special-issue', ['id' => $journal->id]) }}">Special Issue</a></li>
                        </ul>
                    </li>

                    <li class="journal_parent_core journal_nav">Archive
                        <ul class="dropdown_menu">
                            <li><a class="dropdown_item" href="{{ route('all-issue', ['id' => $journal->id]) }}">All Issue</a></li>

                            <li><a class="dropdown_item" href="{{ route('best-paper-awards', $journal->id) }}">Best Paper Awards</a></li>
                        </ul>
                    </li>

                    <li class="journal_parent_core journal_nav">About
                        <ul class="dropdown_menu">
                            <li><a class="dropdown_item" href="#">Journal Overview</a></li>
                            <li><a class="dropdown_item" href="{{ route('business.editorial', $journal->id) }}">Editorial Board</a></li>
                            <li><a class="dropdown_item" href="{{ route('language-editing-service', ['id' => $journal->id]) }}">Language Editing Service</a></li>
                        </ul>
                    </li>

                    <li class="journal_parent_core"> <a href="https://forms.gle/66EERXxnJpCiJPW86">Submit Your Article</a> </li>
                    <li class="journal_parent_core">Guide for Authors</li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>
