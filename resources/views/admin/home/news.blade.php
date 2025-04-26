@extends('admin.layouts.master')
@section('content')

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    <!-- end page title --> 

    <div class="row mt-2">
        <div class="col-12">
            <!-- Add modal button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalNews">Add New News</button>
            <!-- Include Add modal -->
              @include('admin.'.$url.'.news_create')
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <!-- Include Flash Messages -->
                </div>

                <div class="card-body">
                  <h4 class="header-title">News List</h4>

                  <!-- Data Table Start -->
                  <div class="table-responsive">
                    <table id="basic-datatable" class="table table-striped table-hover table-dark nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $newss)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$newss->title}}</td>
                                <td>{{ $newss->category->title ??'' }}</td>
                                <td>{!! str_limit(strip_tags($newss->details), 30, ' ...') !!}</td>
                                <td><img src="{{ asset('public/backend/news/' . $newss->image) }}" alt="news Image" width="100" height="60"></td>
                                <td>
                                <!-- Edit Button -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editNewsModal-{{ $newss->id }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    @include('admin.'.$url.'.news_edit')
                                <!-- Delete Button -->
                                <form action="{{ route('news.destroy', $newss->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this news?')"><i class="far fa-trash"></i></button>
                                </form>
                            </td>
                            </tr>
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