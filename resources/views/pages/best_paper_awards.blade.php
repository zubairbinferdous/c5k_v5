@extends('./layouts.master')
@section('userContent')
    @include('pages.page_header_nav')

<div class="containers mx-auto my-10 px-4">
    <div class="editorial-section">
        <h2 class="text-2xl md:text-3xl font-semibold text-center mb-2">Best Paper Awards</h2>
        <hr class="border-t-2 border-gray-300 mb-6">
        <!-- <h3 class="text-xl font-medium mb-4">{{ $journal->title }}</h3><hr> -->
        @foreach($bestpapers as $edit)
            <p class="text-gray-700 leading-relaxed ">{!! $edit->bestpaper !!}</p> 
        @endforeach
    </div>
</div>

@endsection