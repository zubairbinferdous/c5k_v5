<title>C5k | Details</title>
@include('layout.header')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
@endsection
<body>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

<style>

.news-details {
    background: #ffffff; /* White background for the content section */
    border-radius: 10px;
    padding: 30px;
    margin: 30px auto;
}
.news-details h2 {
    font-weight: 700;
    color: #333333;
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
    font-family: "Georgia", serif;

}
.news-details p {
    font-size: 16px;
    line-height: 1.8;
    color: #555555;
    text-align: justify;
    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
}
.news-details .img-fluid {
    display: block;
    margin: 0 auto; /* Center the image */
    border-radius: 15px;
    max-width: 100%;
    height: auto;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow for impact */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation for hover effect */
}
.news-details .img-fluid:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
    box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.3); /* More pronounced shadow */
}
.news-details h1 h2 h3 h4 h5 h6{
    font-family: "Georgia", serif;
    color: black !important;
=
}
.news-details p{
    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;
    color: black !important;
    font-size: 16px;
    
}

@media (min-width: 992px) {
    .news-details .img-fluid {
        width: 90%; /* Larger image for desktops */
    }
}
</style>
<div class="container">
    <div class="news-details">
    <img src="{{ asset('public/backend/news/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid">
    <h2 class="my-4" style='    font-family: "Georgia", serif;
'>{{ $news->title }}</h2>
    <p style="    font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif;font-size:16px
">{!! $news->details !!}</p> <!-- Full content display -->
</div>

</div>
@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')
</body>
</html>
