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
        <form action="{{ route('journal.update', $journal->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <!-- Banner Image Field with Preview -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bannerImage" class="text-dark">Journal Image</label>
                    @if(isset($journal->journal_image))
                        <img src="{{ asset('public/backend/journal/' . $journal->journal_image) }}" 
                            alt="Current Journal Image" 
                            id="currentImage" 
                            style="width: 100px; height: 60px; display: block; margin-bottom: 10px;">
                    @endif
                    <input type="file" class="form-control" name="journal_image" id="journalImage" onchange="previewImage(event)">
                </div>
                <!-- Image preview container -->
                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100px; height: auto; margin-top: 10px;">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bannerImage" class="text-dark">Background Color</label>
                    <input type="text" class="form-control jscolor" id="backgroundColor" name="backgroundColor" value="#ff0000">

                </div>            
            </div>
        </div>


        <!-- First Heading and First Content in the same row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="firstHeading" class="text-dark">Journal Title <span class="text-danger"> *</span></label>
              <input type="text" name="title" class="form-control" value="{{$journal->title}}" id="firstHeading" placeholder="Enter First Heading">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="firstContent" class="text-dark">Cite Score</label>
             <input type="text" class="form-control"  value="{{$journal->cite_score}}"  name="cite_score" placeholder="Enter Cite Score">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="firstContent" class="text-dark">Impact Factor</label>
              <input type="text" class="form-control" value="{{$journal->impact_factor}}"   name="impact_factor" placeholder="Enter Factro">
            </div>
          </div>
        </div>

        <!-- Second Heading and Second Content in the same row -->
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="secondHeading" class="text-dark">Aims & Scope <span class="text-danger"> *</span></label>
              <textarea class="form-control summernote" id="thirdContent" name="aim_scope"  rows="8" placeholder="Enter Aims & Scope" require> {{$journal->aim_scope}}</textarea>
            </div>
          </div>
        </div>

        <!-- Third Heading and Third Content in the same row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="thirdHeading" class="text-dark">ISSN (Print) <span class="text-danger"> *</span></label>
              <input type="text" class="form-control"  name="issn_print" value="{{$journal->issn_print}}"   id="thirdHeading" placeholder="Enter ISSN Print">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="thirdContent" class="text-dark">ISSN (Online)</label>
              <input type="text" class="form-control"  name="issn_online"  value="{{$journal->issn_online}}"  id="thirdHeading" placeholder="Enter ISSN Online">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="secondHeading" class="text-dark">Subject Area <span class="text-danger"> *</span></label>
              <textarea class="form-control summernote" id="thirdContent" name="subject_area"  rows="4" > {{$journal->subject_area}} </textarea>
            </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label for="secondHeading" class="text-dark">Article Publishing Charge Details <span class="text-danger"> *</span></label>
              <textarea class="form-control summernote" id="thirdContent" name="article_charge"  rows="4" > {{$journal->article_charge}}</textarea>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-lg mb-3">Update</button>
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