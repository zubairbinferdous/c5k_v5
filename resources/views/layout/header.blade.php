<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Site Metas -->
  <meta name="keywords" content="booka and journal, c5k, journal" />
  <meta name="description" content="C5K Academic Research Publishing is a leading global publication dedicated to in-depth quantitative and qualitative analysis, industry insights, and professional resources to help institutions and academic researchers push the boundaries of innovative approches and their excellencies" />
  <meta name="C5k" content="Your Name" />
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('backend/logo/latestlogo.png') }}" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  @include('layout.css')
  <style>
    .suggestions li {
      margin-top:10px;
    padding: 10px;
    cursor: pointer;
      }

      .suggestions li:hover {
          background-color: #f0f0f0;
      }
      .suggestions {
      display: none;
      position: absolute;
      background: #fff;
      list-style: none;
      padding: 0;
      margin: 0;
      width: 100%;
      border: 1px solid #ccc;
      top: 50px; /* Adjust this value based on your input height */
      z-index: 1000; /* Ensure suggestions appear above other elements */
  }

  .search-container {
      position: relative; /* Ensure position context for .suggestions */
  }
 .custom_nav-container {
  padding: 0;
}

.custom_nav-container .navbar-nav {
  margin: auto;
}

.custom_nav-container .navbar-nav li a {
  color: white;
  text-align: center;
  font-family: "Georgia", serif;

  text-transform: uppercase;
  border-radius: 5px;
  -webkit-transition: all .3s;
  transition: all .3s;
  font-weight: 500px; /* Corrected from font-style: bold */
  position: relative; /* Allows positioning of the ::after pseudo-element */
}

.custom_nav-container .navbar-nav li a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -4px; /* Adjusted to create space between the text and the border */
  width: 100%;
  height: 2px;
  background-color: white !important;
  transform: scaleX(0); /* Hidden by default */
  transition: transform 0.3s ease; /* Smooth animation */
}

.custom_nav-container .navbar-nav li:hover a::after {
  transform: scaleX(1); /* Fully visible */
}

.header_bottom{
  background-color: #007c92 !important;
  color:white !important;
  padding:10px 20px;
}

  </style>

</script>



  
</head>
<div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container header_top_container">
          <div class="text-white">
            <a href="https://c5k.com/" class="text-white">
              <i class="fa fa-home" aria-hidden="true"></i> C5K.com | &nbsp;
            </a>
            <a href="http://c5k.it.com" class="text-white">
              C5K.co | &nbsp;
            </a>
            <a href="https://c5k.ec/" class="text-white">
              C5K.ec | &nbsp;
            </a>
            <a href="https://c5k.in" class="text-white">
              C5K.nl | &nbsp;
            </a>
            <a href="https://library.c5k.com" class="text-white">
              More Sites 
            </a>
          </div>
          <div class="social_box text-white">
            <a href="https://scholarship.c5k.com" class="text-white">
             Membership | &nbsp;
            </a>
            {{-- <a href="{{ route('register') }}" class="text-white">
              Create Account | &nbsp;
            </a> --}}
            {{-- <a href="" class="text-white">
              Contribute | &nbsp;
            </a> --}}

            <a href="{{ route('login') }}" class="text-white">
              Sign In | &nbsp;
            </a>
            <a class=" text-white" href="{{ route('register') }}">JOIN C5K</a>

          </div>
        </div>
      </div>
      <section class="py-3">
        <div class="container" style="padding-right: 0px; padding-left: 5px;">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-md-4 d-flex align-items-center">
                     @php
                        $row = \App\Setting::first();
                    @endphp
                    @if($row && $row->logo_path) <!-- Check if $row exists and has logo_path -->
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('public/backend/logo/' . $row->logo_path) }}" alt="" class="" style="height: 120px;width:120px">
                    </a>
                    @endif
                   
                </div>
    
                <!-- Search Section -->
                <div class="col-md-4">
                  <div class="search-container" id="search-section" style="display:none;">
                    <input type="text" placeholder="Search all c5k websites" class="search-box">
                    <button type="submit" class="search-btn">
                    </button>
                    <ul class="suggestions" style="display:none; position:absolute; background:#fff; list-style:none; padding:0; margin:0;; width:100%; border:1px solid #ccc;"></ul>
                </div>
              </div>
    
                <!-- Social Icons Section -->
                <div class="col-md-4 text-end">
                  
                    
                    
                    <div class="social_icon">
                      <a href="javascript:void(0)" id="search-icon" class="me-2">
      <i class="fa fa-search"></i> <!-- Search Icon -->
    </a>
                        @if(isset($socials))
                        @foreach($socials as $social)
                        <a href="{{ $social->facebook ?? '#' }}" target="_blank" class="me-2">
                            <i class="fa fa-facebook-square fa-lg"></i>
                        </a>
                        <a href="{{ $social->twitter ?? '#' }}" target="_blank" class="me-2">
                            <i class="fa fa-twitter-square fa-lg"></i>
                        </a>
                        <a href="{{ $social->linkedin ?? '#' }}" target="_blank" class="me-2">
                            <i class="fa fa-linkedin-square fa-lg"></i>
                        </a>
                        <a href="{{ $social->instagram ?? '#' }}" target="_blank" class="me-2">
                            <i class="fa fa-instagram fa-lg"></i>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
      <div class="header_bottom" >       
        <div class="container" style=" padding-right: 0px; padding-left: 0px;">
          <nav class="navbar navbar-expand-lg custom_nav-container ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="">
                  <a class="" href="{{route('home')}}"><span>Home</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('about')}}"><span >About</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('academic.journal')}}"><span >Academic Journals</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('dissertation.thesis')}}"><span >Dissertation/thesis</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('books')}}"><span >Books</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('conferences')}}"><span >Conferences</span></a>
                </li>
                <li class="">
                  <a class="" href="{{route('home.news')}}"><span >Announcements</span></a>
                </li>
                {{-- <li class="nav-item nav-item-design">
                </li> --}}
              </ul>
            </div>
          </nav>

        </div>
      </div>
    </header>
    <div class="mt-4"></div>
    
     <!-- JavaScript -->
  <script>
document.addEventListener('DOMContentLoaded', function () {
  const searchIcon = document.getElementById('search-icon');
  const searchSection = document.getElementById('search-section');

  // Create a "Close Search" button dynamically
  const closeButton = document.createElement('a');
  closeButton.href = "javascript:void(0)";
  closeButton.id = "close-button";
  closeButton.className = "me-2 btn btn-primary btn-sm"; // Add any Bootstrap classes as needed
  closeButton.textContent = "Close Search"; // Button text
  closeButton.style.display = 'none'; // Initially hidden

  // Insert the close button after the search icon in the DOM
  searchIcon.parentNode.insertBefore(closeButton, searchIcon.nextSibling);

  // Show search section and toggle buttons
  searchIcon.addEventListener('click', function () {
    searchSection.style.display = 'block';
    searchIcon.style.display = 'none'; // Hide search icon
    closeButton.style.display = 'inline-block'; // Show "Close Search" button
    searchSection.querySelector('input').focus(); // Focus on input field
  });

  // Hide search section and toggle buttons
  closeButton.addEventListener('click', function () {
    searchSection.style.display = 'none';
    searchIcon.style.display = 'inline-block'; // Show search icon
    closeButton.style.display = 'none'; // Hide "Close Search" button
  });
});



  </script>