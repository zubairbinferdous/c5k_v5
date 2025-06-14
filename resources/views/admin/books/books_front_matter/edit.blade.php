@extends('admin.layouts.master')

@push('add-css')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .file_div{
            display: block;
            padding: 35px;
            border-radius: 4px;
            border: 2px dashed rgba(56, 78, 183, 0.30);
            background: #F8F8FF;
            cursor: pointer;
        }
        .file_div h2{
            color: #0F0F0F;
            text-align: center;
            font-size: 22px;
            font-weight: 500;
        }
        .file_div .img_upload{
            display: block;
            margin: 0 auto 25px;
        }
        .file_div h3{
            color: #0F0F0F;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            cursor: pointer;
        }
        .file_div h3 span{
            color: #483EA8;
            text-decoration-line: underline;
            margin-bottom: 10px;
        }
        .file_div p{
            color: #676767;
            text-align: center;
            font-size: 12px;
            line-height: 18px;
        }
        .file_name{
        text-align: center;
        border: 2px dashed rgba(56, 78, 183, 0.30);
        padding: 10px 0px;
        }
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .preview-container .preview {
            position: relative;
            width: 100px;
            height: 100px;
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .view_modal_content{
            display: flex;
            border-bottom: 1px solid #d1d1d1;
            margin-bottom: 20px;
            padding-bottom: 16px;
        }
        .message_content{
            display: flex;
            border-bottom: 1px solid #d1d1d1;
            margin-bottom: 20px;
            padding-bottom: 16px;   
        }
        .message_content label{
            width: 50%;
            margin: 0;
        }
        .view_modal_content label{
            width: 50%;
            margin: 0;
        }
        .message_content span,
        .message_content a{
            width: 50%;
        }
        .view_modal_content span,
        .view_modal_content a{
            width: 50%;
        }
        .modal-body {
            text-align: normal !important;
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

    <div class="row mb-3">
        <div class="card p-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ URL::route('dashboard.index') }}">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Update Book Front Matter</li>
                        </ol>
                      </nav>
                </div>
    
                <div class="col-lg-6">
                    <div class="text-end">
                        <a href="{{ URL::route('book.front-matter.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update Front Matter</h4>

                <form method="POST" action="{{ URL::route('book.front-matter.update', $bookFrontMatter->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="book_id" class="form-label">Books</label>
                            <select class="form-select" id="book_id" name="book_id">
                                <option disabled value="">Select Book List</option>

                                @foreach ($bookLists as $row)
                                    <option value="{{ $row->id }}" @if( $row->id == $bookFrontMatter->book_id ) selected @endif>({{ $row->id }}) {{ $row->name }}</option> 
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="pdf" class="form-label">PDF</label>
                            <input type="file" class="form-control" id="pdf" name="pdf_url" accept="application/pdf">

                            @if ( !empty($bookFrontMatter->pdf_url) )
                                <a href="{{ asset( 'public/admin/books/' . $bookFrontMatter->pdf_url)  }}" target="_blank" >
                                    <img src="{{ asset('backend/books/pdf-button-thumbnail.png') }}" alt="" width="60">
                                </a>
                            @endif
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="front_matter" class="form-label">Front Matter</label>
                            <input type="text" class="form-control" id="front_matter" name="front_matter" value="{{ $bookFrontMatter->front_matter }}" placeholder="Please write here...">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="pages_range" class="form-label">Pages Range</label>
                            <input type="text" class="form-control" id="pages_range" name="pages_range" value="{{ $bookFrontMatter->pages_range }}" placeholder="Please write here...">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div> <!-- end card body-->
        </div>
    </div>

</div> <!-- container -->
<!-- End Content-->

@endsection


@push('add-js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(document).ready(function() {
            //____ Currency Name Select2 ____//
            $('#book_category').select2();
        });
    </script>
@endpush