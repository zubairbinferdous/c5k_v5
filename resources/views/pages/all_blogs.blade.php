<title>C5k | All Blogs </title>
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
    <h1 class="text-center">All Blogs</h1>
    @foreach($blogs as $blog)
    <a href="{{route('blog.details', ['id' => $blog->id])}}">
    <div class="row mt-2 text-dark" style="border:1px solid #CBCBCB;"> 
        <div class="col-md-3">
        <img src="{{ asset('public/backend/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="width: 100%; max-height:200px; margin-Left:-15px;">
        </div>
        <div class="col-md-9">
        <h5 class="mt-2">{{ $blog->title }}</h5>
        <p class="mt-1">{!! \Illuminate\Support\Str::limit(strip_tags($blog->details), 200, '...') !!}</p>
        </div>
    </div>
    </a>
    @endforeach
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>