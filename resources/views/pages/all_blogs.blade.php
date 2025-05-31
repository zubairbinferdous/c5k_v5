@extends('./layouts.master')

@push('add-css')

@endpush

@section('userContent')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-center mb-6">All Blogs</h1>
    
        @foreach($blogs as $blog)
        <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="block text-gray-800 hover:bg-gray-50 transition rounded-lg border border-gray-300 mb-4">
            <div class="flex flex-col md:flex-row overflow-hidden">
                <div class="md:w-1/3">
                    <img src="{{ asset('public/backend/blog/' . $blog->image) }}"
                         alt="{{ $blog->title }}"
                         class="w-full h-52 md:h-full object-cover" />
                </div>
                <div class="md:w-2/3 p-4">
                    <h5 class="text-xl font-bold mb-2">{{ $blog->title }}</h5>
                    <p class="text-gray-600 text-sm">
                        {!! \Illuminate\Support\Str::limit(strip_tags($blog->details), 200, '...') !!}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>

@endsection

@push('scripts')

@endpush