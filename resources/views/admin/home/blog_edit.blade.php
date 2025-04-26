<div id="editBlogModal-{{ $blog->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-{{ $blog->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="needs-validation" novalidate action="{{route('blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel-{{ $blog->id }}">Edit {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title-{{ $blog->id }}">Blog Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title-{{ $blog->id }}" value="{{ $blog->title }}" placeholder="Blog Title" required>
                        <div class="invalid-feedback">
                            Please Provide Blog Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category-{{ $blog->id }}">Select Category <span class="text-danger">*</span></label>
                        <select class="form-control" name="category_id" id="category-{{ $blog->id }}" required>
                            <option value="">Select Category</option>
                            @foreach( $categories as $category )
                                <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please Select Blog Category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details-{{ $blog->id }}">Blog Details <span class="text-danger">*</span></label>
                        <textarea class="form-control summernote" name="details" id="details-{{ $blog->id }}" rows="8" required>{{ $blog->details }}</textarea>
                        <div class="invalid-feedback">
                            Please Provide Blog Details.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image-{{ $blog->id }}">Thumbnail Image</label>
                        
                        <!-- Check if the blog has an image -->
                        @if(!empty($blog->image))
                            <!-- Display the current blog image -->
                            <img src="{{ asset('public/backend/blog/' . $blog->image) }}" alt="Blog Image" width="100" height="60">
                        @else
                            <p>No image available</p>
                        @endif

                        <!-- Input for uploading new image -->
                        <input type="file" class="form-control" name="image" id="image-{{ $blog->id }}" placeholder="Thumbnail Image">

                        <div class="invalid-feedback">
                            Please Provide Thumbnail Image.
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->