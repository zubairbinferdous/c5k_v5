@extends('./layouts.master')

@section('userContent')

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <h3 class="text-center text-2xl font-semibold text-gray-800 font-inter">Explore Books</h3>
  <p class="text-center text-gray-600 mt-2 font-inter">Discover a variety of books in our collection.</p>

  <!-- Book Display Section -->
  <div class="mt-8 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @if($books->count())
    @foreach ($books as $book)
    <div class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 font-inter">
      <a href="{{ route('book.details', $book->id) }}" class="block p-4">
        <img src="{{ asset('public/backend/books/' . $book->book_img) }}" alt="{{ $book->name }}" class="w-full h-68 object-cover rounded-md mb-4">
        <h5 class="text-lg font-semibold text-gray-900 mb-1 font-inter title-font">{{ Str::limit($book->name, 40) }}</h5>
        <p class="text-sm text-gray-700"><strong>Price:</strong> <span class="text-red-600">${{ number_format($book->price, 2) }}</span></p>
        <p class="text-sm text-gray-700"><strong>Published:</strong> {{ $book->published_date }}</p>
        <p class="text-sm text-gray-700"><strong>DOI:</strong> <span class="text-blue-600">{{ Str::limit($book->doi, 15) }}</span></p>
        <a href="{{ route('book.details', $book->id) }}" class="inline-block m-3 text-sm text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md transition">Book Details</a>
      </a>
    </div>
    @endforeach
    @else
    <div class="col-span-full text-center text-gray-600">
      <p>No books available.</p>
    </div>
    @endif
  </div>
</section>

@endsection

@push('scripts')

@endpush