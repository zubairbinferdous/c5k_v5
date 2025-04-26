@extends('admin.layouts.master')
@section('title', $title)
@section('content')

<style>
    #success-alert {
        top: 20px;
        right: 20px;
        z-index: 1050; /* Ensures it stays above other elements */
        width: auto;
        max-width: 300px; /* Limits the width */
    }
</style>

<!-- Start Content-->
<div class="container-fluid">    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    @include('admin.inc.breadcrumb')
    <!-- end page title --> 
    <div class="row mb-3 pt-2" style="border:1px solid #000;">
        <div class="col-12">
            <!-- Flash Message Display -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
        <form action="{{ route('award.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="firstHeading" class="text-dark">Select Journal <span class="text-danger"> *</span></label>
              <select class="form-control" name="journal_id" id="category" required>
                    <option value="" selected disabled>Select Journal</option>
                    @foreach( $journals as $category )
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
          </div>

        </div>

        <!-- Second Heading and Second Content in the same row -->
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="secondHeading" class="text-dark">Best Paper<span class="text-danger"> *</span></label>
              <textarea class="form-control summernote" id="thirdContent" name="bestpaper"  rows="8" placeholder="Enter Best Paper" require></textarea>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-lg mb-3">Add New</button>
      </form>
        </div>
    </div>



    
</div> <!-- container -->
<!-- End Content-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Set a timer to hide the alert after 2 seconds (2000 milliseconds)
        setTimeout(function() {
            let alert = document.getElementById("success-alert");
            if (alert) {
                alert.classList.remove("show");
                alert.classList.add("fade"); // Add fade-out effect
            }
        }, 3000);
    });

    function previewImage(event) {
    const imagePreview = document.getElementById('imagePreview');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        
        // Load image file to preview
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        };

        reader.readAsDataURL(file); // Convert image to data URL
    }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.6/jscolor.min.js"></script>

@endsection
@section('js')

@endsection