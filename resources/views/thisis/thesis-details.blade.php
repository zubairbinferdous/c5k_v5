@extends('./layouts.master')
@section('userContent')

<div class="container mx-auto py-10 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Book Cover -->
      <div>
        <img src="{{ asset('public/backend/thesis/' . $thesis->book_img) }}" alt="{{ $thesis->name }}" class="rounded w-full">
      </div>
  
      <!-- Book Details -->
      <div class="md:col-span-2 font-serif">
        <h1 class="text-3xl font-bold">{{ $thesis->name }}</h1>
        <p><strong>Authors:</strong> {{ $thesis->authors }}</p>
        <p><strong>Category:</strong> {{ $thesis->category_name }}</p>
        <p><strong>First Published:</strong> {{ \Carbon\Carbon::parse($thesis->published_date)->format('d-m-Y') }}</p>
        <p class="text-blue-600"><strong>DOI:</strong> {{ $thesis->doi }}</p>
        <p class="text-blue-600"><strong>Copyright:</strong> &copy; {{ $thesis->copyright ?? 'C5K Research Publishing' }}</p>
  
        <!-- Action Buttons -->
        <div class="mt-6 flex flex-wrap gap-4">
          <a href="#" class="bg-yellow-300 text-black text-lg font-semibold py-3 px-6 rounded">Buy this Book</a>
          <a href="#" class="bg-sky-600 text-white text-lg font-semibold py-3 px-6 rounded">Cite</a>
          <a href="#" class="bg-yellow-300 text-black text-lg font-semibold py-3 px-6 rounded">Contact Us</a>
        </div>
      </div>
    </div>
  
    <!-- Thesis Specifications -->
    <div class="mt-10">
      <div class="max-w-md bg-white shadow rounded overflow-hidden">
        <div class="bg-sky-600 text-white text-center font-bold py-3">Thesis Specifications</div>
        <table class="w-full text-left">
          <tbody>
            <tr class="border-t">
              <th class="bg-gray-100 px-4 py-2 w-1/2">First Publish</th>
              <td class="px-4 py-2">{{ \Carbon\Carbon::parse($thesis->published_date)->format('d-m-Y') ?? 'N/A' }}</td>
            </tr>
            <tr class="border-t">
              <th class="bg-gray-100 px-4 py-2">DOI</th>
              <td class="px-4 py-2 text-blue-600">{{ $thesis->doi ?? 'N/A' }}</td>
            </tr>
            <tr class="border-t">
              <th class="bg-gray-100 px-4 py-2">Item Weight</th>
              <td class="px-4 py-2">{{ $thesis->items_weight ?? 'N/A' }} gsm</td>
            </tr>
            <tr class="border-t">
              <th class="bg-gray-100 px-4 py-2">Dimensions</th>
              <td class="px-4 py-2">{{ $thesis->dimention ?? 'N/A' }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <!-- About Section -->
    <div class="mt-10">
      <h3 class="text-2xl font-bold mb-2">About this Thesis</h3>
      <p class="text-justify">{{ $thesis->description }}</p>
    </div>
  
    <!-- Table of Contents -->
    <div class="mt-10 font-serif">
      <h4 class="text-2xl font-bold mb-4">Table of Contents</h4>
      @foreach($forntMatter as $front)
      <div class="mb-4">
        <span class="text-yellow-500 font-bold"><i class="bi bi-unlock"></i> Free Access</span>
        <a href="#" class="block font-bold text-lg text-black hover:underline">Front Matter (Pages: {{ $front->pages_range }})</a>
        <div class="mt-1 space-x-4">
          <a href="#" class="text-blue-600 hover:underline">Summary</a>
          <a href="{{ url('pdf_view_thesis') }}?file={{ $front->pdf_url }}" class="text-blue-600 hover:underline">PDF</a>
        </div>
      </div>
      <hr>
      @endforeach
    </div>
  
    <!-- Purchase Section -->
    <div class="mt-10 bg-white border rounded shadow-sm p-6">
      <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Purchase This Thesis</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-yellow-300 text-center p-4 rounded">
          <p class="text-xl font-semibold">E-thesis</p>
          <p class="text-lg font-bold">from ${{ $thesis->price ?? 'N/A' }}</p>
        </div>
        <div class="bg-sky-600 text-white text-center p-4 rounded">
          <p class="text-xl font-semibold">Paper Back</p>
          <p class="text-lg font-bold">from ${{ $thesis->paper_book ?? 'N/A' }}</p>
        </div>
        <div class="bg-yellow-300 text-center p-4 rounded">
          <p class="text-xl font-semibold">Hard Cover</p>
          <p class="text-lg font-bold">from ${{ $thesis->hard_cover ?? 'N/A' }}</p>
        </div>
      </div>
    </div>
  </div>
  

@endsection
