@extends('admin.layouts.master')

@section('content')

<!-- Start Content-->
<section>
<div class="container-fluid mt-1">
<div class="row">
            <div class="col-12">
                <a href="{{route('banner')}}"><button type="button" class="btn btn-lg btn-primary float-right">Go Back</button></a>
            </div>
        </div>
 </div>
</section>
<section>
  <div class="container-fluid mt-1">
    <div class="row mb-3 pt-2" style="border:1px solid #000;">
        <div class="col-12">
            <!-- Flash Message Display -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ isset($banner) ? route('banners.update', $banner->id) : route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($banner))
                        @method('PUT')
                    @endif
        <!-- Banner Image Field with Preview -->
        <div class="form-group">
            <label for="bannerImage" class="text-dark">Banner Image</label>
            
            <!-- Custom buttons for file selection -->
            <div class="file-picker">
                <label for="bannerImage" class="custom-file-upload">
                <i class="fas fa-upload"></i> Upload from Device
                </label>
            </div>
            <img src="{{ Storage::url($banner->banner) }}" alt="Banner Image" width="100" height="60">
            <!-- Hidden File Input -->
            <input type="file" id="bannerImage" name="banner" accept="image/*" onchange="previewImage(event)" style="display: none;">
            
            <!-- Image Preview -->
            <img id="imagePreview" alt="Image Preview" style="display: none; max-width: 10%; margin-top: 10px;" />
        </div>


        <!-- First Heading and First Content in the same row -->
        <!--<div class="row">-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="firstHeading" class="text-dark">First Heading <span class="text-danger"> *</span></label>-->
        <!--      <input type="text" name="first_heading" class="form-control" id="firstHeading" value="{{$banner->first_heading}}" placeholder="Enter First Heading">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="firstContent" class="text-dark">First Content</label>-->
        <!--      <textarea class="form-control" name="first_content" id="firstContent" rows="1" placeholder="Enter First Content">{{$banner->first_content}}</textarea>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!-- Second Heading and Second Content in the same row -->
        <!--<div class="row">-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="secondHeading" class="text-dark">Second Heading <span class="text-danger"> *</span></label>-->
        <!--      <input type="text" class="form-control" name="second_heading" value="{{$banner->second_heading}}"  id="secondHeading" placeholder="Enter Second Heading">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="secondContent" class="text-dark">Second Content</label>-->
        <!--      <textarea class="form-control" id="secondContent"  name="second_content"  rows="1" placeholder="Enter Second Content">{{$banner->second_content}}</textarea>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!-- Third Heading and Third Content in the same row -->
        <!--<div class="row">-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="thirdHeading" class="text-dark">Third Heading <span class="text-danger"> *</span></label>-->
        <!--      <input type="text" class="form-control"  name="third_heading" value="{{$banner->third_heading}}"  id="thirdHeading" placeholder="Enter Third Heading">-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-md-6">-->
        <!--    <div class="form-group">-->
        <!--      <label for="thirdContent" class="text-dark">Third Content</label>-->
        <!--      <textarea class="form-control" id="thirdContent" name="third_content"  rows="1" placeholder="Enter Third Content">{{$banner->third_content}}</textarea>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-lg mb-3">Update</button>
      </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <!-- Include Flash Messages -->
                </div>

                <div class="card-body">
                  <h4 class="header-title">Banner List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!--<th>First Heading</th>-->
                                <!--<th>Forst Content</th>-->
                                <!--<th>Second Heading</th>-->
                                <!--<th>Second Content</th>-->
                                <!--<th>Third Heading</th>-->
                                <!--<th>Third Content</th>-->
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                          $i=1;
                        @endphp
                        @foreach($banners as $banner)
                            @if($banner->id != $editBannerId) <!-- Exclude the banner being edited -->
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <!--<td>{{ $banner->first_heading ?? '' }}</td>-->
                                    <!--<td>{{ $banner->first_content ?? '' }}</td>-->
                                    <!--<td>{{ $banner->second_heading ?? '' }}</td>-->
                                    <!--<td>{{ $banner->second_content ?? '' }}</td>-->
                                    <!--<td>{{ $banner->third_heading ?? '' }}</td>-->
                                    <!--<td>{{ $banner->third_content ?? '' }}</td>-->
                                    <td><img src="{{ asset('public/backend/banner/' . $banner->banner) }}" alt="Banner Image" width="100" height="60"></td>

                                    <td>
                                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                        
                    </table>
                  </div>
                  <!-- Data Table End -->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


    
</div> <!-- container -->
<!-- End Content-->
</section>

<script>
 // Trigger the file input when the 'Upload from Device' button is clicked
document.querySelector('.custom-file-upload').addEventListener('click', function() {
  document.getElementById('bannerImage').click();
});

function previewImage(event) {
  const reader = new FileReader();
  const imagePreview = document.getElementById('imagePreview');
  
  reader.onload = function() {
    imagePreview.src = reader.result;
    imagePreview.style.display = 'block';
  };
  
  if (event.target.files.length > 0) {
    reader.readAsDataURL(event.target.files[0]);
  }
}

// Optionally, if you have a gallery system, you could add functionality for "Select from Gallery"
document.querySelector('.custom-file-gallery').addEventListener('click', function() {
  alert("Gallery feature would be integrated here!");
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if the success message exists
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            // Set a timeout to hide the message after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>
@endsection
@section('js')

@endsection