    <!-- Edit modal content -->
    <div id="editModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="{{ URL::route($url.'.update', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $row->title }}" placeholder="Article Title" required>

                        <div class="invalid-feedback">
                          Please Provide Article Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select class="form-control" name="category" id="category" required>
                            <option value="">Select Category</option>
                            @foreach( $categories as $category )
                            <option value="{{ $category->id }}" @if( $category->id == $row->category_id ) selected @endif>{{ $category->title }}</option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                          Please Select Article Category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details">Article Details</label>
                        <textarea class="form-control summernote" name="details" id="details" rows="8" required>{!! $row->description !!}</textarea>

                        <div class="invalid-feedback">
                          Please Provide Article Details.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image">Thumbnail Image</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Thumbnail Image">

                        <div class="invalid-feedback">
                          Please Provide Thumbnail Image.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="file">Upload Document</label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Upload Document">

                        <div class="invalid-feedback">
                          Please Provide Artilce Document.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="video_id">Youtube Video ID</label>
                        <input type="text" class="form-control" name="video_id" id="video_id" value="{{ $row->video_id }}" placeholder="Video ID">

                        <div class="invalid-feedback">
                          Please Provide Youtube Video ID.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start_date">Publish Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $row->start_date }}" placeholder="Publish Date" required>

                        <div class="invalid-feedback">
                          Please Provide Publish Date.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="review_status">Review Status</label>
                        <select class="wide" name="review_status" id="review_status" data-plugin="customselect">
                            <option value="2" @if( $row->review_status == 2 ) selected @endif>Approve</option>
                            <option value="1" @if( $row->review_status == 1 ) selected @endif>Pending</option>
                            <option value="0" @if( $row->review_status == 0 ) selected @endif>Reject</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="status">Select Status</label>
                        <select class="wide" name="status" id="status" data-plugin="customselect">
                            <option value="1" @if( $row->status == 1 ) selected @endif>Active</option>
                            <option value="0" @if( $row->status == 0 ) selected @endif>Inactive</option>
                        </select>
                    </div>
                    <!-- Form End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->