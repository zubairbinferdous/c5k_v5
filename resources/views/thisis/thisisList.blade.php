@extends('./layouts.master')
@section('userContent')

<section class="container mx-auto py-12 px-4">
  <h3 class="text-2xl md:text-3xl font-semibold text-center text-gray-800">Explore Thesis</h3>
  <p class="text-center text-gray-600 mt-2">Discover a variety of books in our collection.</p>

  <!-- Book Display Section -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
    @if($thesis->count())
      @foreach ($thesis as $thesis)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <a href="{{ route('thesis.details', $thesis->id) }}" class="block p-4 space-y-3">

            <img src="{{ asset('public/backend/thesis/' . $thesis->book_img) }}" alt="{{ $thesis->name }}"
                 class="w-full h-48 object-cover rounded-lg mb-2">

            <h5 class="text-lg font-semibold text-gray-800">{{ Str::limit($thesis->name, 30) }}</h5>

            <p class="text-sm text-gray-700">
              <strong>Price:</strong>
              <span class="text-red-600">${{ number_format($thesis->price, 2) }}</span>
            </p>

            <p class="text-sm text-gray-700">
              <strong>Published:</strong> {{ $thesis->published_date }}
            </p>

            <p class="text-sm text-gray-700">
              <strong>DOI:</strong>
              <span class="text-blue-600">{{ Str::limit($thesis->doi, 15) }}</span>
            </p>

            <div class="pt-2">
              <span class="inline-block bg-blue-600 text-white text-sm font-medium px-4 py-1.5 rounded hover:bg-blue-700 transition">
                Thesis Details
              </span>
            </div>

          </a>
        </div>
      @endforeach
    @else
      <div class="col-span-4 text-center text-gray-500">
        <p>No Thesis available.</p>
      </div>
    @endif
  </div>
</section>

@endsection