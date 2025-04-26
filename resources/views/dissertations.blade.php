<title>C5k | Journals</title>
@include('layout.header')
@section('css')
<style>

</style>
@endsection
<body>
    <section class="mt-1" style="background-color:#222E3E;">
    <div class="container" style=" padding-right: 0px; padding-left: 5px;">
        <div class="row">
            <div class="col-4 col-md-8 col-lg-8 col-sm-4 col-xs-4  d-flex align-items-center">
                <a href="{{route('home')}}"><h3 class="text-white">C5k direct publishing</h3></a>
            </div>
            <div class="col-8 col-md-4 col-lg-4 col-sm-8 col-xs-8 d-flex justify-content-end" style="padding:10px;">
                <button type="button" class="btn btn-outline-info text-info">Sign in</button>
                <button type="button" class="btn btn-warning" style="margin-left:20px;">JOIN C5K</button>                
            </div>
        </div>
    </div>
</section>
<section style="background-color:#EAEDED">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 " style="padding:10px;">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}"><span style="">About</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('academic.journal')}}"><span style="">Books</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('dissertation.thesis')}}"><span style="">Publish</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('books')}}"><span style="">Earn</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('conferences')}}"><span style="">Help</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<section>
  <div class="container" style="background-color: #E3F1FB;">
    <h1 class="pt-4 pb-1">Journals</h1>
    <div class="row pb-3">
      @foreach($journals as $journal)
      <div class="col-md-4 col-lg-4 col-sm-6 mt-3">
      <a href="{{route('journal.show', ['slug' => $journal->slug, 'id' => $journal->id])}}">
        <div class="card text-dark">
          <div class="row no-gutters">
              <div class="col-md-4 col-lg-4 d-flex align-items-center">
              <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" class="card-img p-2" alt="Image">

              </div>
              <div class="col-md-8 col-lg-8">
                  <div class="card-body" style="padding: 5px;">
                      <p class="card-title pt-2" style="font-size:16px; line-height: 1;">{{ \Illuminate\Support\Str::limit($journal->title, 50) }}</p>
                      <p class="card-text" style="font-size:14px; line-height: 1;"> ISSN: {{$journal-> issn_print}} (print)<br> ISSN: {{$journal->issn_online}} (online)<br>  Publication Frequency: Monthly</p>
                      <p class="card-text" style="font-size:14px; line-height: 1;">  Citescore: {{$journal->cite_score}}<br> Impact Factor: {{$journal->impact_factor}}</p>
                  </div>
              </div>
          </div>
        </div>
</a>
      </div>
      @endforeach


    </div>
  </div>
 </section>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>