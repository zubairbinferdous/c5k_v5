<title>C5k | Details </title>
@include('layout.header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<style>
.blog h1, h2, h3 h4 h5 h6{
  font-family: "Georgia", serif;
  color:black !important;



   
}
.blog{
    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
    text-align: justify;
    color:black !important;

}
.blog p{
    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
    text-align: justify;
    color:black !important;
}
</style>
<body>
<div class="container blog">
<div class="row mt-4">
        <div class="col-12 col-md-12 col-lg-12">
            <img src="{{ asset('public/public/backend/blog/' . $blogs->image) }}" alt="{{ $blogs->title }}" class="img-fluid" style="width: 100%; height: auto;">
            <h3 class="mt-3">{{$blogs->first()->title ??''}}</h3>
            <p class="mt-2 text-balck text-justify">{!! $blogs->details !!}</p> <!-- Display the full content -->
        </div>
</div>
</div>



@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>