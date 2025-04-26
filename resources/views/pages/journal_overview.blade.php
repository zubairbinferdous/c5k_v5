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
    
    <h2 class="mt-3">Journal Overview</h2>

    <!-- Volumes and Issues Section -->
    
</div>


@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>