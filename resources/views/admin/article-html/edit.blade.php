@extends('admin.layouts.master')

@push('add-css')
    <style>
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
            height: 250px !important;
        }
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-blurred) {
            height: 250px !important;
        }

        .note-editor.note-frame .note-editing-area .note-editable {
            height: 500px !important;
        }
        .note-editor.note-frame .note-editing-area {
            height: 500px !important;
        }
    </style>
@endpush

@section('content')

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <!-- Include page breadcrumb -->
    @include('admin.inc.breadcrumb')
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <!-- Add modal button --> 
            <a href="{{ URL::route('article-html.index') }}" type="button" class="btn btn-primary" >Back</a>
        </div>
    </div>


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="header-title"> List</h4> 

                    <form method="POST" action="{{ URL::route('article-html.update', $articleHtml->id ) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label"><strong>Image</strong> <sup class="text-danger" style="font-size: 14px;">* Max ( 5MB )</sup></label>
                                    <input type="file" class="form-control" name="image" id="image" accept=".png, .jpeg, .jpg, .webp" >
                                </div>

                                <div class="mb-3">
                                    <img src="{{ asset($articleHtml->image) }}" alt="" style="width: 85px; height: 85px;">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label"><strong>Title</strong> <sup class="text-danger">*</sup></label>
                                    <select class="form-select" id="title" name="title_id">
                                      <option selected disabled value="">Open this select menu</option>
                                        @foreach ($articles as $row)
                                            <option value="{{ $row->id }}" @if( $articleHtml->title_id == $row->id ) selected @endif>{{ Str::limit($row->title, 50, '...') }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="blog_post" class="form-label"><strong>Blog Article</strong> <sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" id="blog_articles" name="blog_article" rows="8">{{ $articleHtml->blog_article }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label"><strong>Status</strong> <sup class="text-danger">*</sup></label>
                                    <select class="form-select" id="status" name="status">
                                        <option selected value="1" @if( $articleHtml->status == 1 ) selected @endif>Active</option>
                                        <option value="0" @if( $articleHtml->status == 0 ) selected @endif>InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

    
</div> <!-- container -->
<!-- End Content-->

@endsection


@push('add-js')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#blog_articles').summernote();
        });
        // Ckeditor 5 plugin
        // let jReq;
        // ClassicEditor
        //     .create(document.querySelector('#blog_articles'))
        //     .then(newEditor => {
        //         jReq = newEditor;
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>
@endpush