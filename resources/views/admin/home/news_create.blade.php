    <!-- Add modal content -->
    <div id="addModalNews" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form class="needs-validation" novalidate action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add {{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Form Start -->
                    <div class="form-group">
                        <label for="title">News Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="news Title" required>

                        <div class="invalid-feedback">
                          Please Provide news Title.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category">Select Category <span class="text-danger">*</span></label>
                        <select class="form-control" name="category_id" id="category" required>
                            <option value="">Select Category</option>
                            @foreach( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                          Please Select news Category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details">News Details <span class="text-danger">*</span></label>
                        <textarea class="form-control summernote" name="details" id="details" rows="8" required></textarea>

                        <div class="invalid-feedback">
                          Please Provide news Details.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image">Thumbnail Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Thumbnail Image">

                        <div class="invalid-feedback">
                          Please Provide Thumbnail Image.
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="start_date">Publish Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Publish Date" required>

                        <div class="invalid-feedback">
                          Please Provide Publish Date.
                        </div>
                    </div> -->
                    <!-- Form End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->