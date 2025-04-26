<div id="editNewsModal-{{ $newss->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-{{ $newss->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="needs-validation" novalidate action="{{route('news.update', $newss->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel-{{ $newss->id }}">Edit {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title-{{ $newss->id }}">News Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title-{{ $newss->id }}" value="{{ $newss->title }}" placeholder="news Title" required>
                        <div class="invalid-feedback">
                            Please Provide news Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category-{{ $newss->id }}">Select Category <span class="text-danger">*</span></label>
                        <select class="form-control" name="category_id" id="category-{{ $newss->id }}" required>
                            <option value="">Select Category</option>
                            @foreach( $categories as $category )
                                <option value="{{ $category->id }}" {{ $newss->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please Select news Category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details-{{ $newss->id }}">News Details <span class="text-danger">*</span></label>
                        <textarea class="form-control summernote" name="details" id="details-{{ $newss->id }}" rows="8" required>{{ $newss->details }}</textarea>
                        <div class="invalid-feedback">
                            Please Provide news Details.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image-{{ $newss->id }}">Thumbnail Image</label>
                        
                        <!-- Check if the news has an image -->
                        @if(!empty($newss->image))
                            <!-- Display the current news image -->
                            <img src="{{ asset('public/backend/news/' . $newss->image) }}" alt="news Image" width="100" height="60">
                        @else
                            <p>No image available</p>
                        @endif

                        <!-- Input for uploading new image -->
                        <input type="file" class="form-control" name="image" id="image-{{ $newss->id }}" placeholder="Thumbnail Image">

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