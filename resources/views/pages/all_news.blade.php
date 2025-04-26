@extends('./layouts.master')
@section('userContent')
    <div class="max-w-7xl mx-auto">
        <!-- Title -->
        <br> <br>
        <h2 class="text-4xl font-bold text-center "> All News Area</h2>
        <!-- Journal List -->
        <div class="w-full p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($newss as $news)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                            <a href="{{ route('news.details', ['id' => $news->id]) }}" class="text-gray-900 no-underline">
                                <img src="{{ asset('public/backend/news/' . $news->image) }}" alt="{{ $news->title }}"
                                    class="w-full h-[200px] object-cover rounded">
                                <h5 class="mt-4 text-lg font-semibold">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($news->title), 30, '...') !!}
                                </h5>
                                <p class="mt-1 text-gray-600">
                                    {!! \Illuminate\Support\Str::limit(strip_tags($news->details), 100, '...') !!}
                                </p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </div>
@endsection
