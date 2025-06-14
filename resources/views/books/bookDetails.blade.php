@extends('./layouts.master')

@section('userContent')

<div class="container mx-auto py-10 px-4">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Book Cover -->
        <div class="md:w-1/4">
            <img src="{{ asset('public/backend/books/' . $book->book_img) }}" alt="{{ $book->name }}"
                class="w-full rounded h-100">
        </div>

        <!-- Book Details -->
        <div class="md:w-2/3 space-y-2 -mt-3">
            <h1 class="font-bold text-3xl font-serif">{{ $book->name }}</h1>
            <p><strong>Authors:</strong> {{ $book->authors ?? 'N/A' }}</p>
            <p><strong>Category:</strong> {{ $book->category_name }}</p>
            <p><strong>First Published:</strong> {{ \Carbon\Carbon::parse($book->published_date)->format('d-m-Y') }}</p>
            <p class="text-blue-600"><strong>DOI:</strong> {{ $book->doi }}</p>
            <p class="text-blue-600"><strong>Copyright</strong> &copy; {{ $book->copyright ?? '&copy; C5K Research Publishing' }}</p>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="#" class="bg-yellow-300 font-serif text-lg font-semibold text-center py-4 px-4 rounded w-1/3">Buy this Book</a>
                <a href="#" class="bg-sky-600 text-white text-lg font-semibold text-center py-4 px-4 rounded w-1/3">Cite</a>
                <a href="#" class="bg-sky-300 text-lg font-semibold text-center py-4 px-4 rounded w-1/3">Contact Us</a>
                <a href="#" class="bg-yellow-300 text-lg font-semibold text-center py-4 px-4 rounded w-1/3">Download Full PDF</a>
            </div>
        </div>
    </div>

    <!-- Book Specifications -->
    <div class="mt-10 md:w-1/2">
        <div class="border rounded shadow">
            <div class="bg-sky-600 text-white text-center py-2 font-bold">Book Specifications</div>
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-t">
                    <tbody class="text-sm">
                        <tr class="bg-gray-100">
                            <th class="p-2">First Publish</th>
                            <td class="p-2">{{ \Carbon\Carbon::parse($book->published_date)->format('d-m-Y') ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-100 p-2">Print ISBN</th>
                            <td class="p-2">{{ $book->first_isbn ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-100 p-2">Online ISBN</th>
                            <td class="p-2">{{ $book->online_isbn ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-100 p-2">DOI</th>
                            <td class="p-2 text-blue-600">{{ $book->doi ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-100 p-2">Item Weight</th>
                            <td class="p-2">{{ $book->items_weight ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-100 p-2">Dimensions</th>
                            <td class="p-2">{{ $book->dimention ?? 'N/A' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Table of Contents -->
    <div class="mt-10 font-serif">
        <h4 class="font-bold text-xl">Table of Contents</h4>
        <hr class="my-2">

        <!-- Front Matter -->
        @foreach($forntMatter as $front)
        <div class="mb-4">
            <span class="text-yellow-500 font-bold"><i class="bi bi-unlock"></i> Free Access</span><br>
            <a href="#" class="text-lg font-bold text-gray-900 hover:underline">
                Front Matter (Pages: {{ $front->pages_range }})
            </a>
            <div class="mt-1 flex gap-4 text-blue-600">
                <a href="#" class="text-lg">Summary</a>
                <a href="{{ asset( 'public/admin/books/' . $front->pdf_url) }}" class="text-lg" target="_blank">PDF</a>
            </div>
        </div>
        <hr>
        @endforeach

        <!-- Chapters -->
        @foreach($chapters as $chapter)
        <div class="mb-4">
            <p class="text-lg font-bold uppercase">Chapter {{ $loop->iteration }}</p>
            <a href="#" class="text-gray-900 font-bold hover:underline" style="font-size: {{ $loop->iteration <= 2 ? '20px' : '18px' }}">
                {{ $chapter->title }} (Pages: {{ $chapter->page_range }})
            </a>
            <div class="mt-1 flex gap-4 text-blue-600">
                <a href="#" class="text-lg">Summary</a>
                @if($loop->iteration <= 2)
                    <a href="{{ url('pdf_view') }}?file={{ $chapter->pdf_url }}" class="text-lg">PDF</a>
                    @else
                    <a href="#" class="text-lg">PDF</a>
                    @endif
            </div>
        </div>
        <hr>
        @endforeach
    </div>

    <div class="row">
        <div class="card">
            <div class="card-body">
                {!! $book->description !!}
            </div>
        </div>
    </div>

    <!-- Purchase Section -->
    <div class="mt-10 border rounded p-6 shadow-sm bg-white">
        <div class="text-center shadow p-4 bg-blue-50 font-bold">
            <h1 class="text-blue-600 text-2xl">Purchase This Book</h1>
        </div>
        <div class="grid md:grid-cols-3 gap-4 mt-4 border-t pt-4">
            <div class="text-center bg-yellow-300 rounded p-4">
                <p class="text-xl font-bold mb-1">Ebook</p>
                <p class="text-lg font-semibold">from ${{ $book->price ?? 'N/A' }}</p>
            </div>
            <div class="text-center bg-sky-600 text-white rounded p-4">
                <p class="text-xl font-bold mb-1">Paper Back</p>
                <p class="text-lg font-semibold">from ${{ $book->hard_cover ?? 'N/A' }}</p>
            </div>
            <div class="text-center bg-yellow-300 rounded p-4">
                <p class="text-xl font-bold mb-1">Hard Back</p>
                <p class="text-lg font-semibold">from ${{ $book->paper_book ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')

@endpush