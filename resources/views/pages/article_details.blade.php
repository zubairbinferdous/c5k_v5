<title>C5k | Details </title>
@include('layout.header')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
<style>
h1, h2, h3, p {
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
}
</style>
@endsection
<body>
<div class="container">
<div class="row mt-4">
        <div class="col-12 col-md-12 col-lg-12">
            <img src="{{ asset('public/public/backend/article/' . $articles->image) }}" alt="{{ $articles->title }}" class="img-fluid" style="width: 100%; height: auto;">
            <h3 class="mt-3">{{$articles->first()->title ??''}}</h3>
            <p class="mt-2">{!! $articles->description !!}</p> <!-- Display the full content -->
        </div>
</div>
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>