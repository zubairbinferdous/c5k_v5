@extends('./layouts.master')
@section('userContent')

@include('pages.page_header_nav')

<div class="containers mx-auto my-10 editor">
    <div class="-mt-3.5">
        <h1 class="text-xl font-bold">EDITORIAL BOARD</h1>
        <div class="mt-6">
            <h1 class="text-2xl font-semibold">{{ $journal->title }}</h1>
            <hr class="my-4 border-t border-gray-300">
            @foreach($editorials as $edit)
                <p class="mb-2">{!! $edit->editorial_member !!}</p>
            @endforeach
        </div>
    </div>
</div>



@endsection