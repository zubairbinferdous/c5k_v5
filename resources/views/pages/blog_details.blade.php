@extends('./layouts.master')

@push('add-css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

<style>

    
    .blog h1, .blog h2, .blog h3, .blog h4, .blog h5, .blog h6 {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        color: black !important;
    }

    .blog {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        color: black !important;
    }

    .blog p {
        font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        text-align: justify;
        color: black !important;
    }
</style>

@endpush

@section('userContent')

<div class="container mx-auto px-4 py-6 blog">
    <div class="w-full">
        <img src="{{ asset('public/backend/blog/' . $blogs->image) }}" alt="{{ $blogs->title }}"
             class="w-full h-auto rounded-lg shadow-sm">
        
        <h3 class="mt-6 text-2xl font-bold text-black font-serif">{{ $blogs->first()->title ?? '' }}</h3>
        
        <div class="mt-4 text-justify text-black space-y-4 leading-relaxed font-[Merriweather]">
            {!! $blogs->details !!}
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush