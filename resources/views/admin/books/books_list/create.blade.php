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
                          <li class="breadcrumb-item active" aria-current="page">Create Book</li>
                        </ol>
                      </nav>
                </div>
    
                <div class="col-lg-6">
                    <div class="text-end">
                        <a href="{{ URL::route('book.list.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create Book</h4>

                <form method="POST" action="{{ URL::route('book.list.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="card-body">
                                <div class="multiple-image">
                                    <label class="file_div" for="fileUploader" id="image_preview" style="padding: 20px;">
                                        <img src="{{ asset('public/backend/images/Upload_icon.png') }}" alt="" class="img_upload" />
                                        <h3>Upload Files or <span>Browse</span></h3>
                                        <p>Supported formates: JPEG, PNG, JPG</p>
                                        <figcaption class="file_name d-none" ></figcaption>
                                    </label>
                                    <input type="file" class="d-none" id="fileUploader" accept=".jpg, .png, .jpeg, .webp" name="book_img" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="text" id="book_name" class="form-control" name="name">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="book_category" class="form-label">Book Category</label>
                            <select class="form-select" id="book_category" name="category_id">
                                <option selected disabled value="">Select Category</option>

                                @foreach ($book_cats as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option> 
                                @endforeach

                            </select>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" step="any">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="hard_cover" class="form-label">Hard Cover</label>
                            <input type="number" class="form-control" id="hard_cover" name="hard_cover" step="any">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="paper_book" class="form-label">Paper Book</label>
                            <input type="number" class="form-control" id="paper_book" name="paper_book" step="any">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="online_isbn" class="form-label">Online Isbn</label>
                            <input type="text" class="form-control" id="online_isbn" name="online_isbn">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="first_isbn" class="form-label">First Isbn</label>
                            <input type="text" class="form-control" id="first_isbn" name="first_isbn">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="doi" class="form-label">DOI</label>
                            <input type="text" class="form-control" id="doi" name="doi">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="items_weight" class="form-label">Items Weight</label>
                            <input type="text" class="form-control" id="items_weight" name="items_weight">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="dimention" class="form-label">Dimention</label>
                            <input type="text" class="form-control" id="dimention" name="dimention">
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="copyright" class="form-label">Copyright</label>
                            <input type="text" class="form-control" id="copyright" name="copyright">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="cat_name" class="form-label">Status</label>
    
                            <select class="form-select" name="status">
                                <option selected disabled value="">Select Status Menu</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3 ">
                            <label class="form-label" for="published_date">Published Date <span class="text-danger">*</span></label>

                            <input class="form-control published_date" type="date" id="published_date" name="published_date" placeholder="Select a date...." value="{{ old('published_date') }}">
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="author_name" class="form-label">Author Name</label>
                        <input type="text" class="form-control author_name" id="author_name" name="authors" value="{{ old('authors')}}" placeholder="Author Name Here....">
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="book_desc" class="form-label"><strong>Description</strong> <sup class="text-danger">*</sup></label>
                            <textarea class="form-control" id="book_desc" name="description" rows="8"></textarea>
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
            $('#book_desc').summernote();

            //____ Currency Name Select2 ____//
            $('#book_category').select2();
        });

        document.getElementById('fileUploader').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image_preview');
            const files = event.target.files;

            if (files.length > 0) {
                // Clear existing content
                imagePreview.innerHTML = '';

                // Loop through selected files and display previews
                Array.from(files).forEach(file => {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        reader.onload = e => {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.width = '100%';
                            img.style.height = '240px';
                            // img.style.objectFit = 'cover';
                            imagePreview.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>

    <script>
        const author_name = new Choices('.author_name',{
            removeItems: true,
            duplicateItemsAllowed: false,
            removeItemButton: true,
            delimiter: ',',
        });

        // Flatpicker Plugin
        $(".published_date").flatpickr({
            minDate: ""
        });
    </script>
@endpush