@extends('admin.layouts.master')
@section('content')

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    <!-- end page title --> 
     <h1>Second Banner Section </h1>


    <div class="row mb-3 pt-2" style="border:1px solid #000;">
        <div class="col-12">
            <!-- Flash Message Display -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ isset($blog_banner) ? route('blog_banner.update', $blog_banner->id) : route('blog_banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($blog_banner))
                        @method('PUT')
                    @endif
        <!-- Banner Image Field with Preview -->
        <div class="form-group">
            <label for="bannerImage" class="text-dark">Banner Image</label>          
            <!-- Hidden File Input -->
            <input type="file" id="bannerImage" name="blog_banner" accept="image/*" onchange="previewImage(event)">   
            <img src="{{ Storage::url($blog_banner->blog_banner) }}" alt="Banner Image" width="100" height="60">         
            <!-- Image Preview -->
            <img id="imagePreview" alt="Image Preview" style="display: none; max-width: 10%; margin-top: 10px;" />
        </div>
        </div>

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
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $blog_banners as $blog_banner )
                        @if($blog_banner->id != $editBannerId) <!-- Exclude the banner being edited -->
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('public/backend/blog_banner/' . $blog_banner->blog_banner) }}" alt="Banner Image" width="100" height="60"></td>                          
                                <td>
                                <a href="{{ route('blog_banner.edit', $blog_banner->id) }}" class="btn btn-primary btn-sm">Edit</a>
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


<script>
 
 function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();

    reader.onload = function() {
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block'; // Show the image preview
    };

    // Read the selected file as a DataURL
    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
@endsection
@section('js')

@endsection