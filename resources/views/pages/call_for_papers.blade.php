<title>{{ $journal->title ?? 'Default Title' }}</title>
@include('layout.header')
<style>
.nav-item-bottom.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
}

/* Adjust dropdown menu background */
.dropdown-menu {
    background-color: #fff; /* Change this for a different background color */
    transition: all 0.3s ease;
}

/* Add hover effect to items */
.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Light overlay on hover */
    color: #023569;
}
form {
  max-width: 100%;
}
input.form-control {
  border-radius: 0.25rem;
}
button {
  border-radius: 0.25rem;
}
</style>
<body>
@include('pages.page_header_nav')
<div class="container">
    
    <h2 class="mt-3">Call for Papers</h2>
    <hr>
    <p>24 June 2024</p>
    <a href="#"><h6>The future of work and workforce development: Emerging trends and issues</h6></a>
    <p>The aim of this special issue is to delve into the essential aspects influencing the future of work and workforce development. We encourage submissions of original research that connect theoretical insights with practical applications. Contributions that examine broader societal dynamics, 
      such as globalization, shifts in demographics, and sustainability, are highly welcomed.</p>
    <p><b>Guest editors:</b> Rajesh Das</p>
    <p>Submission deadline: <b>15 January 2025</b></p>
    <hr>
    <p>24 June 2024</p>
    <a href="#"><h6>The future of work and workforce development: Emerging trends and issues</h6></a>
    <p>The aim of this special issue is to delve into the essential aspects influencing the future of work and workforce development. We encourage submissions of original research that connect theoretical insights with practical applications. Contributions that examine broader societal dynamics, 
      such as globalization, shifts in demographics, and sustainability, are highly welcomed.</p>
    <p><b>Guest editors:</b> Rajesh Das</p>
    <p>Submission deadline: <b>15 January 2025</b></p>
    <hr>
    <p>24 June 2024</p>
    <a href="#"><h6>The future of work and workforce development: Emerging trends and issues</h6></a>
    <p>The aim of this special issue is to delve into the essential aspects influencing the future of work and workforce development. We encourage submissions of original research that connect theoretical insights with practical applications. Contributions that examine broader societal dynamics, 
      such as globalization, shifts in demographics, and sustainability, are highly welcomed.</p>
    <p><b>Guest editors:</b> Rajesh Das</p>
    <p>Submission deadline: <b>15 January 2025</b></p>
    
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>