
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Section</title>

    <!-- Include font links -->
    <link href="https://fonts.googleapis.com/css2?family=Georgia:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <!-- Internal styles -->
    <style>
     .book-section a{
        text-decoration: none;
        color:black !important;
      }
        .book-section .book-card {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .book-section .book-card img {
            max-height: 320px;
            width:100%;
            transition: transform 0.3s ease;
        }

        .title-font {
            font-size: 20px;
            font-family: "Georgia", serif;
        }


  
     .common-font{
            font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
        }
        .thesis-a a{
          color:black !important;
        }
  </style>
</head>
<body>
@include('layout.header')
@section('content')
<section class="container py-4 book-section">
  <h3 class="text-center">Explore Thesis</h3>
  <p class="text-center">Discover a variety of books in our collection.</p>

  <!-- Book Display Section -->
  <div class="row mt-4">
    @if($thesis->count())
      @foreach ($thesis as $thesis)
        <div class="col-lg-3 col-md-4 col-sm-6 my-3 teshis-a">
          <a href="{{ route('thesis.details', $thesis->id) }}" class="">

          <div class="book-card common-font">
            <img src="{{ asset('public/backend/thesis/' . $thesis->book_img) }}" alt="{{ $thesis->name }}" class="img-fluid mb-2">
<h5 class="mt-2 title-font">{{ Str::limit($thesis->name, 30) }}</h5>
            <p><strong>Price:</strong><span  class="text-danger"> ${{ number_format($thesis->price, 2) }}</span></p>
            <p><strong>Published:</strong> {{ $thesis->published_date }}</p>
            <p class=""><strong>DOI:</strong> <span class="text-primary">{{ Str::limit($thesis->doi, 15) }}</span></p>
            <a href="{{ route('thesis.details', $thesis->id) }}" class="details-btn">Thesis Details</a>
          </div>
        </a>

        </div>
      @endforeach
    @else
      <div class="col-12 text-center">
        <p>No Thesis available.</p>
      </div>
    @endif
  </div>
</section>
@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')
