
@extends('./layouts.master')
@section('userContent')
@include('pages.page_header_nav')
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4C+6RpRZKxG4JJF9WZjPvB5rsM8DHZq6T7EvkoB5x9TIDv0CrOrvqU4yoE9RH7RC5ZdLg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="max-w-7xl mx-auto px-4">
    <h2 class="text-2xl font-semibold mt-6">Article in Press</h2>
    <p class="mt-2 text-gray-700">
        Peer-reviewed works that are accepted for publication but have not yet been assigned to volumes or issues can be cited using Peer-reviewed works that are accepted for publication but have not yet been assigned to volumes or issues can be cited using
    </p>
</div>

<div class="max-w-7xl mx-auto px-4 mt-4">
    <div class="mt-8 flex flex-col space-y-10">

        <!-- Article Card -->
        <div class="flex">
            <div class="w-1/6 hidden sm:block"></div>
            <div class="w-full sm:w-5/6">
                <p class="text-gray-800">
                    Research article <i class="fa fa-circle text-green-600"></i> Open access
                </p>
                <h5 class="text-lg font-semibold mt-1">
                    Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans
                </h5>
                <p class="mt-2 text-gray-600">
                    Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
                    <br>
                    In Press, Journal Pre-proof, Available online 12 November 2024
                </p>
                <div class="mt-3 space-x-6 text-red-600">
                    <i class=""> view pdf</i>
                    <i class=""> download pdf</i>
                </div>
            </div>
        </div>

        <!-- Duplicate Article Card (2nd) -->
        <div class="flex">
            <div class="w-1/6 hidden sm:block"></div>
            <div class="w-full sm:w-5/6">
                <p class="text-gray-800">
                    Research article <i class="fa fa-circle text-green-600"></i> Open access
                </p>
                <h5 class="text-lg font-semibold mt-1">
                    Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans
                </h5>
                <p class="mt-2 text-gray-600">
                    Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
                    <br>
                    In Press, Journal Pre-proof, Available online 12 November 2024
                </p>
                <div class="mt-3 space-x-6 text-red-600">
                    <i class=""> view pdf</i>
                    <i class=""> download pdf</i>
                </div>
            </div>
        </div>

        <!-- Duplicate Article Card (3rd) -->
        <div class="flex">
            <div class="w-1/6 hidden sm:block"></div>
            <div class="w-full sm:w-5/6">
                <p class="text-gray-800">
                    Research article <i class="fa fa-circle text-green-600"></i> Open access
                </p>
                <h5 class="text-lg font-semibold mt-1">
                    Playing with words: Comparing the vocabulary and lexical diversity of ChatGPT and humans
                </h5>
                <p class="mt-2 text-gray-600">
                    Pedro Reviriego, Javier Conde, Elena Merino-Gómez, Gonzalo Martínez, José Alberto Hernández
                    <br>
                    In Press, Journal Pre-proof, Available online 12 November 2024
                </p>
                <div class="mt-3 space-x-6 text-red-600">
                    <i class=""> view pdf</i>
                    <i class=""> download pdf</i>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection